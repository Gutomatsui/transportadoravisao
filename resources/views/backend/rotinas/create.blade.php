@extends('backend.master')
@section('backend.content')

<style>
    /* Esta classe .ck-editor__editable_inline é mais comum no CKEditor 5.
       Se você estiver usando CKEditor 4, verifique a classe correta
       para estilizar o textarea ou remova se não for aplicável. */
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>

<div id="page-content">
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-plus"></i>Cadastro de Rotina<br><small>Crie uma nova rotina</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('rotinas.index') }}">Listagem de Rotinas</a></li>
        <li>Nova Rotina</li>
    </ul>

    <div class="block">
        <div class="block-title">
            <h2>
                <strong>Informações da Rotina</strong>
            </h2>
        </div>

        {{-- Exibição de erros de validação do Laravel (se não estiver usando AJAX para todos os erros) --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- O formulário para criar uma nova rotina --}}
        <form id="rotinaForm" method="POST" action="{{ route('rotinas.store') }}" class="form-horizontal form-bordered" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Título</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="categoria_rotina_id">Categoria</label>
                <div class="col-md-9">
                    <select id="categoria_rotina_id" name="categoria_rotina_id" class="form-control" required>
                        <option value="">Selecione uma categoria</option>
                        {{-- A variável $categorias vem do RotinaController@create --}}
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria_rotina_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="descricao">Descrição</label>
                <div class="col-md-9">
                   <textarea id="descricao" name="descricao" rows="7" class="form-control ckeditor">{{ old('descricao') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="img">Imagem</label>
                <div class="col-md-9">
                    <input type="file" id="img" name="img" required> {{-- 'name="img"' conforme seu controller --}}
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Salvar Rotina</button>
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
{{-- Exemplo: <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script> --}}
{{-- Se o seu ckeditor.js está em public/ckeditor/ckeditor.js (caminho comum) use: --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
$(document).ready(function() {
    // Inicializa o CKEditor no textarea com id="descricao"
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('descricao'); // Usa CKEDITOR.replace(id) para inicializar
    } else {
        console.error("CKEditor não está carregado. Verifique o caminho no asset().");
    }

    // Capture o evento de submit do formulário
    $('#rotinaForm').on('submit', function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        let formData = new FormData(this);

        // Como obter o conteúdo do CKEditor 4:
        // CKEDITOR.instances['ID_DO_TEXTAREA'].getData();
        if (CKEDITOR.instances.descricao) {
            const editorData = CKEDITOR.instances.descricao.getData();
            formData.set('descricao', editorData); // Atualiza o campo 'descricao' no FormData
        } else {
             // Caso o CKEditor não tenha sido inicializado, use o valor do textarea normal
             formData.set('descricao', $('#descricao').val());
        }


        // O resto do AJAX continua igual
        $.ajax({
            url: '{{ route("rotinas.store") }}', // Rota para salvar a rotina
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#rotinaForm')[0].reset();
                // Limpa o CKEditor 4 após o sucesso
                if (CKEDITOR.instances.descricao) {
                    CKEDITOR.instances.descricao.setData('');
                }

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
                    // window.location.href = '{{ route("rotinas.index") }}';
                }, 5000);
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