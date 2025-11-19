@extends('backend.master')
@section('backend.content')

<style>
    /* Estilo para o CKEditor, se estiver usando CKEditor 4 ou 5 */
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>

<div id="page-content">
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-pencil"></i>Editar Rotina<br><small>Altere os dados da rotina</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('rotinas.index') }}">Listagem de Rotinas</a></li>
        <li>Editar Rotina</li>
    </ul>

    <div class="block">
        <div class="block-title">
            <h2>
                <strong>Informações da Rotina</strong>
            </h2>
        </div>

        {{-- Exibição de erros de validação do Laravel --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- O formulário para editar uma rotina --}}
        {{-- O action aponta para rotinas.update e o @method('PUT') é crucial para Laravel --}}
        <form id="rotinaEditForm" method="POST" action="{{ route('rotinas.update', $rotina->id) }}" class="form-horizontal form-bordered" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Isso informa ao Laravel que esta é uma requisição PUT/PATCH --}}

            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Título</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $rotina->title) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="categoria_rotina_id">Categoria</label>
                <div class="col-md-9">
                    <select id="categoria_rotina_id" name="categoria_rotina_id" class="form-control" required>
                        <option value="">Selecione uma categoria</option>
                        {{-- A variável $categorias vem do RotinaController@edit --}}
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria_rotina_id', $rotina->categoria_rotina_id) == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="descricao">Descrição</label>
                <div class="col-md-9">
                   <textarea id="descricao" name="descricao" rows="7" class="form-control ckeditor">{{ old('descricao', $rotina->descricao) }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="img">Imagem Atual</label>
                <div class="col-md-9">
                    @if($rotina->img)
                        <img src="{{ asset('public/'.$rotina->img) }}" alt="Imagem Atual da Rotina" style="max-width: 150px; height: auto; margin-bottom: 10px;">
                        <br>
                    @else
                        <span>Nenhuma imagem atual.</span>
                        <br>
                    @endif
                    <label for="img">Nova Imagem (opcional)</label>
                    <input type="file" id="img" name="img"> {{-- Campo de upload para nova imagem --}}
                    <span class="help-block">Deixe em branco para manter a imagem atual.</span>
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Salvar Alterações</button>
                    <a href="{{ route('rotinas.index') }}" class="btn btn-sm btn-warning">Cancelar</a>
                </div>
            </div>

            {{-- Área para mensagens de resposta AJAX --}}
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <div id="responseMessage"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@section('scripts')
{{-- Inclua o CKEditor 4. Certifique-se de que o caminho para o ckeditor.js está correto. --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
$(document).ready(function() {
    // Inicializa o CKEditor no textarea com id="descricao"
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('descricao');
    } else {
        console.error("CKEditor não está carregado. Verifique o caminho no asset().");
    }

    // Captura o evento de submit do formulário de edição
    $('#rotinaEditForm').on('submit', function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        let formData = new FormData(this);

        // Define o método HTTP para PUT
        formData.append('_method', 'PUT');

        // Como obter o conteúdo do CKEditor 4
        if (CKEDITOR.instances.descricao) {
            const editorData = CKEDITOR.instances.descricao.getData();
            formData.set('descricao', editorData); // Atualiza o campo 'descricao' no FormData
        } else {
             formData.set('descricao', $('#descricao').val());
        }

        // Requisição AJAX
        $.ajax({
            url: '{{ route("rotinas.update", $rotina->id) }}', // Rota para atualizar a rotina
            method: 'POST', // Laravel usa POST com _method para simular PUT
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Ações pós-sucesso (pode ser um redirect, ou apenas mensagem)
                const successAlert = `
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="fa fa-check-circle"></i> Sucesso!</h4>
                        ${response.success}
                    </div>`;
                $('#responseMessage').html(successAlert);

                setTimeout(function() {
                    $('#responseMessage').html('');
                    // Opcional: Redirecionar para a lista após o sucesso
                    window.location.href = '{{ route("rotinas.index") }}';
                }, 2000); // Redireciona mais rápido após o update
            },
            error: function(xhr) {
                let errorMessage = 'Ocorreu um erro desconhecido.';
                let validationErrorsHtml = '';

                if (xhr.responseJSON) {
                    if (xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        validationErrorsHtml += '<ul>';
                        for (let key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errors[key].forEach(function(error) {
                                    validationErrorsHtml += '<li>' + error + '</li>';
                                });
                            }
                        }
                        validationErrorsHtml += '</ul>';
                    }
                }

                const errorAlert = `
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="fa fa-times-circle"></i> Erro</h4>
                        <p>${errorMessage}</p>
                        ${validationErrorsHtml}
                    </div>`;

                $('#responseMessage').html(errorAlert);

                setTimeout(function() {
                    $('#responseMessage').html('');
                }, 7000);
            }
        });
    });
});
</script>
@endsection