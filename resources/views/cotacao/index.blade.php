@extends('master')
@section('content')

<div class="container-fluid wizard-container">
    <style>
        .form-control.is-invalid {
            border-color: #dc3545; /* Cor da borda vermelha */
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3cpath stroke-linejoin='round' d='M6 8.2V8h.01v.01H6z'/%3e%3c/svg%3e"); /* Ícone de erro (opcional) */
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }

        .form-control.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
    </style>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="cotacaoForm" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="wizard">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#step1" data-toggle="tab">Informações pessoais</a></li>
                <li class="disabled"><a href="#step2" data-toggle="tab">Informações de origem</a></li>
                <li class="disabled"><a href="#step3" data-toggle="tab">Informações de destino</a></li>
                <li class="disabled"><a href="#step4" data-toggle="tab">Informações da carga </a></li>
            </ul>
        </div>

        <div class="tab-content">
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
                    <input type="text" class="form-control" name="telefone" id="telefone" required>
                </div>

                <div class="form-group">
                    <label for="cnpj_emitente">CNPJ do emitente</label>
                    <input type="text" class="form-control" name="cnpj_emitente" id="cnpj_emitente" required>
                </div>

                <div class="form-group">
                    <label for="resp_mercadoria">Responsabilidade do frete</label>
                    <select class="form-control" name="resp_mercadoria" id="resp_mercadoria" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="remetente">Remetente</option>
                        <option value="expedidor">Expedidor</option>
                        <option value="destinatario">Destinatário</option>
                        <option value="recebedor">Recebedor</option>
                        <option value="tomador">Tomador do serviço</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="previsao_transprte">Previsão do transporte</label>
                    <input type="date" class="form-control" name="previsao_transporte" required>
                </div>

                <div class="form-group">
                    <label for="previsao_transprte">Previsão do transporte</label>
                    <input type="date" class="form-control" name="previsao_transporte" required>
                </div>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <div class="tab-pane" id="step2">
                <h4>Informações de origem</h4>

                <div class="form-group">
                    <label for="cep-origem">CEP Origem</label>
                    <input type="text" class="form-control" name="cep_origem" id="cep-origem" required>
                </div>
                <div class="form-group">
                    <label for="endereco-origem">Endereço de origem</label>
                    <input type="text" class="form-control" name="endereco_origem" id="endereco-origem" readonly required>
                </div>
                <div class="form-group">
                    <label for="numero-origem">Número</label>
                    <input type="text" class="form-control" name="numero_origem" id="numero-origem" required>
                </div>
                <div class="form-group">
                    <label for="complemento-origem">Complemento</label>
                    <input type="text" class="form-control" name="complemento_origem" id="complemento-origem">
                </div>
                <div class="form-group">
                    <label for="bairro-origem">Bairro de origem</label>
                    <input type="text" class="form-control" name="bairro_origem" id="bairro-origem" readonly required>
                </div>
                <div class="form-group">
                    <label for="cidade-origem">Cidade de origem</label>
                    <input type="text" class="form-control" name="cidade_origem" id="cidade-origem" readonly required>
                </div>
                <div class="form-group">
                    <label for="uf-origem">UF de origem</label>
                    <input type="text" class="form-control" name="uf_origem" id="uf-origem" readonly required>
                </div>

                <a class="btn btn-default prev-step">Anterior</a>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <div class="tab-pane" id="step3">
                <h4>Informações de destino</h4>

                <div class="form-group">
                    <label for="cnpj_destinatario">CNPJ do destinatario</label>
                    <input type="text" class="form-control" name="cnpj_destinatario" id="cnpj_destinatario" required>
                </div>
                <div class="form-group">
                    <label for="cep-destino">CEP Destino</label>
                    <input type="text" class="form-control" name="cep_destino" id="cep-destino" required>
                </div>
                <div class="form-group">
                    <label for="endereco-destino">Endereço de destino</label>
                    <input type="text" class="form-control" name="endereco_destino" id="endereco-destino" readonly required>
                </div>
                <div class="form-group">
                    <label for="numero-destino">Número</label>
                    <input type="text" class="form-control" name="numero_destino" id="numero-destino" required>
                </div>
                <div class="form-group">
                    <label for="complemento-destino">Complemento</label>
                    <input type="text" class="form-control" name="complemento_destino" id="complemento-destino">
                </div>
                <div class="form-group">
                    <label for="bairro-destino">Bairro de destino</label>
                    <input type="text" class="form-control" name="bairro_destino" id="bairro-destino" readonly required>
                </div>
                <div class="form-group">
                    <label for="cidade-destino">Cidade de destino</label>
                    <input type="text" class="form-control" name="cidade_destino" id="cidade-destino" readonly required>
                </div>
                <div class="form-group">
                    <label for="uf-destino">UF de destino</label>
                    <input type="text" class="form-control" name="uf_destino" id="uf-destino" readonly required>
                </div>

                <a class="btn btn-default prev-step">Anterior</a>
                <a class="btn btn-primary next-step">Próximo</a>
            </div>

            <div class="tab-pane" id="step4">
                <h4>Medidas da mercadoria</h4>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" required>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="tipo_mercadoria" class="form-control" required>
                        <option value="" disabled selected>Selecione uma categoria</option>
                        <option value="containerizada">Containerizada</option>
                        <option value="geral">Geral</option>
                        <option value="frigorifica">Frigorífica</option>
                        <option value="granel">Granel</option>
                        <option value="neo_granel">Neo Granel</option>
                    </select>
                </div>

                <div id="dynamicFields"></div>

                <div class="form-group">
                    <label for="valor_nota">Valor da nota fiscal</label>
                    <input type="text" class="form-control" name="valor_nota" id="valor_nota" required>
                </div>
                <a class="btn btn-default prev-step">Anterior</a>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function () {
        $('#telefone').mask('(00)00000-0000');
        $('#cnpj_emitente').mask('00.000.000/0000-00', { reverse: true });
        $('#cnpj_destinatario').mask('00.000.000/0000-00', { reverse: true });
        $('#cep-origem').mask('00000-000');
        $('#cep-destino').mask('00000-000');
        $('#valor_nota').mask('00.000.000,00', { reverse: true });

        $('#cotacaoForm').on('submit', function (event) {
            event.preventDefault();
            var valorNota = $('#valor_nota').val().replace(/\./g, '').replace(',', '.');
            $('#valor_nota').val(valorNota);
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '{{ route('cotacoes.store') }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('.alert').remove();
                    if (response.success) {
                        $('<div class="alert alert-success">' + response.success + '</div>').insertBefore('form');
                        setTimeout(() => location.reload(), 5000);
                    } else if (response.error) {
                        $('<div class="alert alert-danger">' + response.error + '</div>').insertBefore('form');
                    }
                },
                error: function () {
                    $('.alert').remove();
                    $('<div class="alert alert-danger">Erro ao enviar a cotação. Por favor, tente novamente.</div>').insertBefore('form');
                }
            });
        });

        // Função para validar campos do passo atual
        function validateStep(stepId) {
            let isValid = true;
            // Remove a classe de erro de todos os campos antes de revalidar
            $(`#${stepId} .form-control`).removeClass('is-invalid');

            $(`#${stepId} :input[required]`).each(function() {
                let $input = $(this);
                // Validações para campos de texto, email, data, número e select
                if ($input.is('input[type="text"], input[type="email"], input[type="date"], input[type="number"], select')) {
                    if ($.trim($input.val()) === '' || ($input.is('select') && ($input.val() === null || $input.val() === ''))) {
                        isValid = false;
                        $input.addClass('is-invalid');
                    } else {
                        $input.removeClass('is-invalid');
                    }
                }
                // Validação específica para campos de arquivo (se houver)
                if ($input.is('input[type="file"]') && $input.attr('required') && $input[0].files.length === 0) {
                     isValid = false;
                     $input.addClass('is-invalid');
                } else if ($input.is('input[type="file"]') && !$input.attr('required')) {
                    $input.removeClass('is-invalid'); // Remove se não é mais obrigatório
                }
            });

            // Adiciona validação específica para CNPJ e CEP
            if (stepId === 'step1') {
                const cnpjEmitente = $('#cnpj_emitente').val().replace(/\D/g, '');
                if (cnpjEmitente.length !== 14) {
                    isValid = false;
                    $('#cnpj_emitente').addClass('is-invalid');
                } else {
                    $('#cnpj_emitente').removeClass('is-invalid');
                }
            } else if (stepId === 'step2') {
                const cepOrigem = $('#cep-origem').val().replace(/\D/g, '');
                if (cepOrigem.length !== 8 || $('#endereco-origem').val() === '') {
                    isValid = false;
                    $('#cep-origem').addClass('is-invalid');
                    // Marcar campos de endereço relacionados se o CEP estiver inválido ou não preencheu o endereço
                    if ($('#endereco-origem').val() === '') {
                        $('#endereco-origem').addClass('is-invalid');
                        $('#bairro-origem').addClass('is-invalid');
                        $('#cidade-origem').addClass('is-invalid');
                        $('#uf-origem').addClass('is-invalid');
                    }
                } else {
                    // Remover classes de inválido se o CEP e o endereço estiverem válidos
                    $('#cep-origem').removeClass('is-invalid');
                    $('#endereco-origem').removeClass('is-invalid');
                    $('#bairro-origem').removeClass('is-invalid');
                    $('#cidade-origem').removeClass('is-invalid');
                    $('#uf-origem').removeClass('is-invalid');
                }
            } else if (stepId === 'step3') {
                const cnpjDestinatario = $('#cnpj_destinatario').val().replace(/\D/g, '');
                if (cnpjDestinatario.length !== 14) {
                    isValid = false;
                    $('#cnpj_destinatario').addClass('is-invalid');
                } else {
                    $('#cnpj_destinatario').removeClass('is-invalid');
                }
                const cepDestino = $('#cep-destino').val().replace(/\D/g, '');
                if (cepDestino.length !== 8 || $('#endereco-destino').val() === '') {
                    isValid = false;
                    $('#cep-destino').addClass('is-invalid');
                    // Marcar campos de endereço relacionados se o CEP estiver inválido ou não preencheu o endereço
                    if ($('#endereco-destino').val() === '') {
                        $('#endereco-destino').addClass('is-invalid');
                        $('#bairro-destino').addClass('is-invalid');
                        $('#cidade-destino').addClass('is-invalid');
                        $('#uf-destino').addClass('is-invalid');
                    }
                } else {
                    // Remover classes de inválido se o CEP e o endereço estiverem válidos
                    $('#cep-destino').removeClass('is-invalid');
                    $('#endereco-destino').removeClass('is-invalid');
                    $('#bairro-destino').removeClass('is-invalid');
                    $('#cidade-destino').removeClass('is-invalid');
                    $('#uf-destino').removeClass('is-invalid');
                }
            }

            // Validar campos dinâmicos, incluindo o campo de peso
            $(`#dynamicFields :input[required], #dynamicFields select[required]`).each(function() {
                let $input = $(this);
                if ($.trim($input.val()) === '' || ($input.is('select') && ($input.val() === null || $input.val() === ''))) {
                    isValid = false;
                    $input.addClass('is-invalid');
                } else {
                    $input.removeClass('is-invalid');
                }
            });
            return isValid;
        }

        $('.next-step').click(function () {
            var $active = $('.wizard .nav-tabs .active');
            var currentTabId = $active.find('a').attr('href');
            var currentStepId = currentTabId.substring(1); // Remove o '#'

            if (validateStep(currentStepId)) {
                $active.next().removeClass('disabled');
                nextTab($active);
            } else {
                alert('Por favor, preencha todos os campos obrigatórios antes de avançar.');
            }
        });

        $('.prev-step').click(function () {
            var $active = $('.wizard .nav-tabs .active');
            prevTab($active);
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

        // Adicione cepId para que o próprio campo CEP possa ser limpo
        function preencherEndereco(cep, cepId, enderecoId, bairroId, cidadeId, ufId) {
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function (dados) {
                if (!dados.erro) {
                    $('#' + enderecoId).val(dados.logradouro);
                    $('#' + bairroId).val(dados.bairro);
                    $('#' + cidadeId).val(dados.localidade);
                    $('#' + ufId).val(dados.uf);
                    // Remove a classe de erro de todos os campos relacionados se o CEP for válido e preencher
                    $('#' + cepId).removeClass('is-invalid');
                    $('#' + enderecoId).removeClass('is-invalid');
                    $('#' + bairroId).removeClass('is-invalid');
                    $('#' + cidadeId).removeClass('is-invalid');
                    $('#' + ufId).removeClass('is-invalid');
                } else {
                    // Limpa os campos e adiciona a classe de erro se o CEP for inválido
                    alert("CEP não encontrado.");
                    $('#' + enderecoId).val('');
                    $('#' + bairroId).val('');
                    $('#' + cidadeId).val('');
                    $('#' + ufId).val('');
                    // Adiciona a classe de erro ao CEP e aos campos relacionados
                    $('#' + cepId).addClass('is-invalid');
                    $('#' + enderecoId).addClass('is-invalid');
                    $('#' + bairroId).addClass('is-invalid');
                    $('#' + cidadeId).addClass('is-invalid');
                    $('#' + ufId).addClass('is-invalid');
                }
            });
        }

        $('#cep-origem').on('blur', function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep.length === 8) { // Garante que o CEP tem 8 dígitos antes de buscar
                preencherEndereco(cep, 'cep-origem', 'endereco-origem', 'bairro-origem', 'cidade-origem', 'uf-origem');
            } else {
                // Limpa e marca os campos se o CEP for inválido
                $('#endereco-origem, #bairro-origem, #cidade-origem, #uf-origem').val('');
                $(this).addClass('is-invalid'); // Marca o CEP como inválido se não tiver 8 dígitos
                $('#endereco-origem').addClass('is-invalid');
                $('#bairro-origem').addClass('is-invalid');
                $('#cidade-origem').addClass('is-invalid');
                $('#uf-origem').addClass('is-invalid');
            }
        });

        $('#cep-destino').on('blur', function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep.length === 8) { // Garante que o CEP tem 8 dígitos antes de buscar
                preencherEndereco(cep, 'cep-destino', 'endereco-destino', 'bairro-destino', 'cidade-destino', 'uf-destino');
            } else {
                // Limpa e marca os campos se o CEP for inválido
                $('#endereco-destino, #bairro-destino, #cidade-destino, #uf-destino').val('');
                $(this).addClass('is-invalid'); // Marca o CEP como inválido se não tiver 8 dígitos
                $('#endereco-destino').addClass('is-invalid');
                $('#bairro-destino').addClass('is-invalid');
                $('#cidade-destino').addClass('is-invalid');
                $('#uf-destino').addClass('is-invalid');
            }
        });

        const fieldData = {
            containerizada: [
                { label: 'Espécie', name: 'especie', type: 'select', options: ['Dry Box', 'High Cube', 'Reefer', 'Isotank', 'Open Top', 'Flat Rack'] },
                { label: 'Medida', name: 'medida', type: 'custom' },
                { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
            ],
            geral: [
                { label: 'Espécie', name: 'especie', type: 'select', options: ['Paletizada', 'Caixa', 'Fardo', 'Atado', 'Bobina', 'Peça', 'Tambor', 'Cargas Projeto'] },
                { label: 'Medida (C x L x H)', name: 'medida', type: 'custom' },
                { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
                { label: 'M³ Total da Carga', name: 'm3_total', type: 'number' }
            ],
            frigorifica: [
                { label: 'Temperatura ºC', name: 'temperatura', type: 'number' },
                { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
                { label: 'M³ Total da Carga', name: 'm3_total', type: 'number' }
            ],
            granel: [
                { label: 'Toneladas', name: 'toneladas', type: 'number' },
                { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
                { label: 'M³ Total da Carga', name: 'm3_total', type: 'number' }
            ],
            neo_granel: [
                { label: 'Toneladas', name: 'toneladas', type: 'number' },
                { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
                { label: 'M³ Total da Carga', name: 'm3_total', type: 'number' }
            ]
        };

        $('#categoria').change(function () {
            const categoria = $(this).val();
            const fields = fieldData[categoria];
            $('#dynamicFields').empty(); // Limpa os campos dinâmicos existentes

            if (fields) {
                fields.forEach(field => {
                    let fieldHtml = '';

                    if (field.type === 'select') {
                        fieldHtml = `
                        <div class="form-group">
                            <label for="${field.name}">${field.label}</label>
                            <select class="form-control" name="${field.name}" id="${field.name}" required>
                                <option value="" disabled selected>Selecione</option> ${field.options.map(option => {
                                const isSelected = (field.name === 'perigosa' && option === 'Não') ? 'selected' : ''; // Para 'Perigosa', 'Não' é default
                                return `<option value="${option}" ${isSelected}>${option}</option>`;
                            }).join('')}
                            </select>
                        </div>
                        `;
                    } else if (field.type === 'custom') {
                        fieldHtml = ''; // Medidas (altura, largura) são tratadas abaixo
                    } else {
                        fieldHtml = `
                        <div class="form-group">
                            <label for="${field.name}">${field.label}</label>
                            <input type="${field.type}" class="form-control" name="${field.name}" id="${field.name}" required>
                        </div>
                        `;
                    }
                    $('#dynamicFields').append(fieldHtml);
                });

                // ADICIONA O CAMPO DE PESO AQUI, FORA DO LOOP `fields.forEach()`
                // Isso garante que ele sempre apareça após os campos específicos da categoria
                // e antes da lógica de Perigosa ou Cargas Projeto que pode vir depois.
                // Usamos `append` para adicionar ao final de dynamicFields
                $('#dynamicFields').append(`
                    <div class="form-group" id="peso-wrapper">
                        <label for="peso">Peso da Carga</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="peso" id="peso" required>
                            <div class="input-group-btn">
                                <select class="form-control btn btn-primary unidade-medida-peso" name="peso_unidade_medida" style="width: 117px; height: 35px; font-size: 14px; margin-top: 0">
                                    <option value="toneladas" selected>TON</option>
                                    <option value="kilogramas">KG</option>
                                </select>
                            </div>
                        </div>
                    </div>
                `);

                // Lógica para campos específicos de containerizada, geral, etc.
                // Esta parte fica *após* a adição dos campos base e do campo de peso.

                // Upload para Cargas Projeto (se categoria for 'geral' e espécie 'Cargas Projeto')
                if (categoria === 'geral') {
                    $('#dynamicFields').append(`
                    <div class="form-group" id="upload-wrapper" style="display: none;">
                        <label for="arquivo_anexo">Anexar arquivo (PDF ou CSV, máx. 2MB)</label>
                        <input type="file" class="form-control" name="arquivo_anexo" id="arquivo_anexo" accept=".pdf,.csv">
                        <small class="text-muted">Somente PDF ou CSV. Máximo de 2MB. Apenas um arquivo.</small>
                    </div>
                    `);
                    setTimeout(() => {
                        $('#especie').on('change', function () {
                            if ($(this).val() === 'Cargas Projeto') {
                                $('#arquivo_anexo').attr('required', true);
                                $('#upload-wrapper').show();
                            } else {
                                $('#arquivo_anexo').removeAttr('required');
                                $('#upload-wrapper').hide();
                            }
                        }).trigger('change');
                    }, 100);
                }

                // Campos específicos para containerizada
                if (categoria === 'containerizada') {
                    // Adiciona o Tipo do Container após a Espécie
                    $('#especie').closest('.form-group').after(`
                    <div class="form-group" id="tipo-container-wrapper">
                        <label for="tipo_container">Tipo do Container</label>
                        <select class="form-control" name="tipo_container" id="tipo_container" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    `);

                    $('#especie').on('change', function () {
                        const especie = $(this).val();
                        // Remover apenas os wrappers de medida/temperatura específicos desta lógica
                        $('#medida-altura-only, #temperatura-wrapper, #medida-container').remove();

                        if (especie === 'Reefer') {
                            $('#tipo-container-wrapper').after(`
                            <div class="form-group" id="temperatura-wrapper">
                                <label for="temperatura">Temperatura (ºC)</label>
                                <input type="number" class="form-control" name="temperatura" id="temperatura" required>
                            </div>
                            `);
                        }

                        if (especie === 'Open Top') {
                            $('#tipo-container-wrapper').after(`
                            <div class="form-group" id="medida-altura-only">
                                <label for="altura">Altura</label>
                                <div class="input-group">
                                    <input type="text" id="altura" name="altura" class="form-control" required>
                                    <div class="input-group-btn">
                                        <select class="form-control btn btn-primary unidade-medida" name="altura_unidade_medida" style="width: 117px; height: 35px; font-size: 14px; margin-top: 0">
                                            <option value="centimetros" selected>CM</option>
                                            <option value="metros">M</option>
                                            <option value="milimetros">MM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            `);
                        }

                        if (especie === 'Flat Rack') {
                            $('#tipo-container-wrapper').after(`
                            <div class="form-group" id="medida-container">
                                <label for="largura">Largura</label>
                                <div class="input-group" style="margin-bottom: 10px;">
                                    <input type="text" id="largura" name="largura" class="form-control" required>
                                    <div class="input-group-btn">
                                        <select class="form-control btn btn-primary unidade-medida" name="largura_unidade_medida" style="width: 117px; height: 35px; font-size: 14px; margin-top: 0">
                                            <option value="centimetros" selected>CM</option>
                                            <option value="metros">M</option>
                                            <option value="milimetros">MM</option>
                                        </select>
                                    </div>
                                </div>

                                <label for="altura">Altura</label>
                                <div class="input-group">
                                    <input type="text" id="altura" name="altura" class="form-control" required>
                                    <div class="input-group-btn">
                                        <select class="form-control btn btn-primary unidade-medida" name="altura_unidade_medida" style="width: 117px; height: 35px; font-size: 14px; margin-top: 0">
                                            <option value="centimetros" selected>CM</option>
                                            <option value="metros">M</option>
                                            <option value="milimetros">MM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            `);
                        }
                    });

                    setTimeout(() => $('#especie').trigger('change'), 50);
                }

                $('#perigosa').change(function () {
                    $('#onu-group, #risco-group').remove(); // Sempre remove antes de adicionar
                    if ($(this).val() === 'Sim') {
                        $(this).closest('.form-group').after(`
                        <div class="form-group" id="onu-group">
                            <label for="onu">Nº ONU</label>
                            <input type="text" class="form-control" name="onu" id="onu" required>
                        </div>
                        <div class="form-group" id="risco-group">
                            <label for="risco">Nº RISCO</label>
                            <input type="text" class="form-control" name="risco" id="risco" required>
                        </div>
                        `);
                    }
                });

                setTimeout(() => $('#perigosa').trigger('change'), 150); // Atrasado para garantir que o elemento perigosa exista

                $(document).on('change', '.unidade-medida', function () {
                    const selected = $(this).val();
                    $('.unidade-medida').val(selected);
                });

                $(document).on('change', '.unidade-medida-peso', function () {
                    const selected = $(this).val();
                    $('.unidade-medida-peso').val(selected);
                });

            }
        });
        $('#categoria').trigger('change');
    });
</script>

@stop