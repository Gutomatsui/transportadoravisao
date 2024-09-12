@extends('master')
@section('content')

<div class="container-fluid wizard-container">
    <!-- Exibir mensagens de erro -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulário para criar cotação -->
    <form id="cotacaoForm" method="POST">
        @csrf

        <!-- Wizard Steps -->
        <div class="wizard">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#step1" data-toggle="tab">Informações pessoais</a></li>
                <li><a href="#step2" data-toggle="tab">Informações de origem</a></li>
                <li><a href="#step3" data-toggle="tab">Informações de destino</a></li>
                <li><a href="#step4" data-toggle="tab">Medidas da mercadoria</a></li>
            </ul>
        </div>

        <div class="tab-content">
            <!-- Step 1: Informações pessoais -->
            <div class="tab-pane active" id="step1">
                <h4>Informações pessoais</h4>
                <div class="form-group">
                    <label for="nome">Nome ou Razão Social</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone (com DDD)</label>
                    <input type="text" class="form-control" name="telefone" required>
                </div>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <!-- Step 2: Informações de origem -->
            <div class="tab-pane" id="step2">
                <h4>Informações de origem</h4>

                <!-- CEP Origem -->
                <div class="form-group">
                    <label for="cep-origem">CEP Origem</label>
                    <input type="text" class="form-control" name="cep_origem" id="cep-origem">
                </div>
                <div class="form-group">
                    <label for="endereco-origem">Endereço de origem</label>
                    <input type="text" class="form-control" name="endereco_origem" id="endereco-origem" readonly>
                </div>
                <div class="form-group">
                    <label for="numero-origem">Número</label>
                    <input type="text" class="form-control" name="numero_origem" id="numero-origem">
                </div>
                <div class="form-group">
                    <label for="complemento-origem">Complemento</label>
                    <input type="text" class="form-control" name="complemento_origem" id="complemento-origem">
                </div>
                <div class="form-group">
                    <label for="bairro-origem">Bairro de origem</label>
                    <input type="text" class="form-control" name="bairro_origem" id="bairro-origem" readonly>
                </div>
                <div class="form-group">
                    <label for="cidade-origem">Cidade de origem</label>
                    <input type="text" class="form-control" name="cidade_origem" id="cidade-origem" readonly>
                </div>
                <div class="form-group">
                    <label for="uf-origem">UF de origem</label>
                    <input type="text" class="form-control" name="uf_origem" id="uf-origem" readonly>
                </div>

                <a class="btn btn-default prev-step">Anterior</a>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <!-- Step 3: Informações de destino -->
            <div class="tab-pane" id="step3">
                <h4>Informações de destino</h4>

                <!-- CEP Destino -->
                <div class="form-group">
                    <label for="cep-destino">CEP Destino</label>
                    <input type="text" class="form-control" name="cep_destino" id="cep-destino">
                </div>
                <div class="form-group">
                    <label for="endereco-destino">Endereço de destino</label>
                    <input type="text" class="form-control" name="endereco_destino" id="endereco-destino" readonly>
                </div>
                <div class="form-group">
                    <label for="numero-destino">Número</label>
                    <input type="text" class="form-control" name="numero_destino" id="numero-destino">
                </div>
                <div class="form-group">
                    <label for="complemento-destino">Complemento</label>
                    <input type="text" class="form-control" name="complemento_destino" id="complemento-destino">
                </div>
                <div class="form-group">
                    <label for="bairro-destino">Bairro de destino</label>
                    <input type="text" class="form-control" name="bairro_destino" id="bairro-destino" readonly>
                </div>
                <div class="form-group">
                    <label for="cidade-destino">Cidade de destino</label>
                    <input type="text" class="form-control" name="cidade_destino" id="cidade-destino" readonly>
                </div>
                <div class="form-group">
                    <label for="uf-destino">UF de destino</label>
                    <input type="text" class="form-control" name="uf_destino" id="uf-destino" readonly>
                </div>

                <a class="btn btn-default prev-step">Anterior</a>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <!-- Step 4: Medidas da mercadoria -->
            <div class="tab-pane" id="step4">
                <h4>Medidas da mercadoria</h4>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade">
                </div>
                <div class="form-group">
                    <label for="comprimento">Comprimento</label>
                    <input type="text" class="form-control" name="comprimento">
                </div>
                <div class="form-group">
                    <label for="largura">Largura</label>
                    <input type="text" class="form-control" name="largura">
                </div>
                <div class="form-group">
                    <label for="altura">Altura</label>
                    <input type="text" class="form-control" name="altura">
                </div>
                <div class="form-group">
                    <label for="peso-total">Peso total (kg)</label>
                    <input type="text" class="form-control" name="peso_total">
                </div>
                <a class="btn btn-default prev-step">Anterior</a>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Scripts para navegação entre os steps e preenchimento automático de CEP -->
<script>
    $(document).ready(function() {
        // Captura o envio do formulário
        $('#cotacaoForm').on('submit', function(event) {
            event.preventDefault(); // Previne o envio padrão do formulário

            $.ajax({
                type: 'POST',
                url: '{{ route('cotacoes.store') }}',
                data: $(this).serialize(), // Serializa os dados do formulário
                success: function(response) {
                    if (response.success) {
                        // Exibe a mensagem de sucesso
                        $('.alert').remove();
                        $('<div class="alert alert-success">' + response.success + '</div>').insertBefore('form');

                        // Aguarda 5 segundos antes de recarregar a página
                        setTimeout(function() {
                            location.reload();
                        }, 5000); // 5000 milissegundos = 5 segundos
                    } else if (response.error) {
                        // Exibe a mensagem de erro
                        $('.alert').remove();
                        $('<div class="alert alert-danger">' + response.error + '</div>').insertBefore('form');
                    }
                },
                error: function(xhr) {
                    // Exibe mensagem de erro caso a requisição falhe
                    $('.alert').remove();
                    $('<div class="alert alert-danger">Erro ao enviar a cotação. Por favor, tente novamente.</div>').insertBefore('form');
                }
            });
        });

        // Navegação entre steps
        $('.next-step').click(function() {
            var $active = $('.wizard .nav-tabs .active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });

        $('.prev-step').click(function() {
            var $active = $('.wizard .nav-tabs .active');
            prevTab($active);
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

        // Preenchimento automático de endereço a partir do CEP usando a API ViaCEP
        function preencherEndereco(cep, enderecoId, bairroId, cidadeId, ufId) {
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(dados) {
                if (!("erro" in dados)) {
                    $('#' + enderecoId).val(dados.logradouro);
                    $('#' + bairroId).val(dados.bairro);
                    $('#' + cidadeId).val(dados.localidade);
                    $('#' + ufId).val(dados.uf);
                } else {
                    alert("CEP não encontrado.");
                }
            });
        }

        // Eventos de input para os campos de CEP
        $('#cep-origem').on('blur', function() {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                preencherEndereco(cep, 'endereco-origem', 'bairro-origem', 'cidade-origem', 'uf-origem');
            }
        });

        $('#cep-destino').on('blur', function() {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                preencherEndereco(cep, 'endereco-destino', 'bairro-destino', 'cidade-destino', 'uf-destino');
            }
        });
    });
</script>

@stop
