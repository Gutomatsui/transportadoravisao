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
    <form id="cotacaoForm" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Wizard Steps -->
        <div class="wizard">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#step1" data-toggle="tab">Informações pessoais</a></li>
                <li><a href="#step2" data-toggle="tab">Informações de origem</a></li>
                <li><a href="#step3" data-toggle="tab">Informações de destino</a></li>
                <li><a href="#step4" data-toggle="tab">Informações da carga </a></li>
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

                <div class="form-group">
                    <label for="endereco-destino">CNPJ do destinatario</label>
                    <input type="text" class="form-control" name="cnpj_destinatario" id="cnpj_destinatario">
                </div>
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

                <!-- Campos Dinâmicos -->
                <div id="dynamicFields"></div>


                <div class="form-group">
                    <label for="valo-nota">Valor da nota fiscal</label>
                    <input type="text" class="form-control" name="valor_nota" id="valor_nota">
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
    $(document).ready(function () {
        $('#telefone').mask('(00)00000-0000');
        $('#cnpj_emitente').mask('00.000.000/0000-00', { reverse: true });
        $('#cnpj_destinatario').mask('00.000.000/0000-00', { reverse: true });
        $('#cep-origem').mask('00000-000', { reverse: true });
        $('#cep-destino').mask('00000-000', { reverse: true });
        $('#valor_nota').mask('00.000.000,00', { reverse: true });
        // Captura o envio do formulário
        $('#cotacaoForm').on('submit', function (event) {
    event.preventDefault();

    // Remove máscara antes de enviar
    var valorNota = $('#valor_nota').val().replace(/\./g, '').replace(',', '.');
    $('#valor_nota').val(valorNota);

    var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: '{{ route('cotacoes.store') }}',
        data: formData,
        processData: false, // Importante para enviar arquivo
        contentType: false, // Importante para enviar arquivo
        success: function (response) {
            if (response.success) {
                $('.alert').remove();
                $('<div class="alert alert-success">' + response.success + '</div>').insertBefore('form');
                setTimeout(function () {
                    location.reload();
                }, 5000);
            } else if (response.error) {
                $('.alert').remove();
                $('<div class="alert alert-danger">' + response.error + '</div>').insertBefore('form');
            }
        },
        error: function () {
            $('.alert').remove();
            $('<div class="alert alert-danger">Erro ao enviar a cotação. Por favor, tente novamente.</div>').insertBefore('form');
        }
    });
});


        // Navegação entre steps
        $('.next-step').click(function () {
            var $active = $('.wizard .nav-tabs .active');
            $active.next().removeClass('disabled');
            nextTab($active);
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

        // Preenchimento automático de endereço a partir do CEP usando a API ViaCEP
        function preencherEndereco(cep, enderecoId, bairroId, cidadeId, ufId) {
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function (dados) {
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
        $('#cep-origem').on('blur', function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                preencherEndereco(cep, 'endereco-origem', 'bairro-origem', 'cidade-origem', 'uf-origem');
            }
        });

        $('#cep-destino').on('blur', function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                preencherEndereco(cep, 'endereco-destino', 'bairro-destino', 'cidade-destino', 'uf-destino');
            }
        });
    });

    const fieldData = {
        containerizada: [
            { label: 'Espécie', name: 'especie', type: 'select', options: ['Dry Box', 'High Cube', 'Reefer', 'Isotank', 'Open Top', 'Flat Rack'] },
            { label: 'Medida', name: 'medida', type: 'custom' },
            { label: 'Perigosa', name: 'perigosa', type: 'select', options: ['Sim', 'Não'] },
        ],
        geral: [
        {
            label: 'Espécie', name: 'especie', type: 'select', options: [
                'Paletizada',
                'Caixa',
                'Fardo',
                'Atado',
                'Bobina',
                'Peça',
                'Tambor',
                'Cargas Projeto'
            ]
        },
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

    // Atualiza os campos dinâmicos com base na categoria selecionada
    $('#categoria').change(function () {
    const categoria = $(this).val();
    const fields = fieldData[categoria];

    $('#dynamicFields').empty();

    if (fields) {
        fields.forEach(field => {
            let fieldHtml = '';

            if (field.type === 'select' && field.name === 'perigosa') {
                // Adiciona o campo peso antes do perigosa
                $('#dynamicFields').append(`
                    <div class="form-group" id="peso-wrapper">
                        <label for="peso">Peso da Carga (Ton, Kg)</label>
                        <input type="text" class="form-control" name="peso" id="peso">
                    </div>
                `);
            }

            if (field.type === 'select') {
                fieldHtml = `
                    <div class="form-group">
                        <label for="${field.name}">${field.label}</label>
                        <select class="form-control" name="${field.name}" id="${field.name}" required>
                            ${field.options.map(option => {
                                const isSelected = option === 'Não' ? 'selected' : '';
                                return `<option value="${option}" ${isSelected}>${option}</option>`;
                            }).join('')}
                        </select>
                    </div>
                `;
            } else if (field.type === 'custom') {
                fieldHtml = ''; // você pode colocar seus campos personalizados aqui
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

        // ⬇️ Upload Condicional (categoria = geral, espécie = Cargas Projeto)
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
                        $('#upload-wrapper').show();
                    } else {
                        $('#upload-wrapper').hide();
                    }
                });

                if ($('#especie').val() === 'Cargas Projeto') {
                    $('#upload-wrapper').show();
                }
            }, 100);
        }

        // Containerizada → Tipo do container
        if (categoria === 'containerizada') {
            const tipoContainerField = `
                <div class="form-group" id="tipo-container-wrapper">
                    <label for="tipo_container">Tipo do Container</label>
                    <select class="form-control" name="tipo_container" id="tipo_container" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="40">40</option>
                    </select>
                </div>
            `;
            $('#especie').closest('.form-group').after(tipoContainerField);

            $('#especie').on('change', function () {
                const especie = $(this).val();

                $('#medida-altura-only').remove();
                $('#temperatura-wrapper').remove();
                $('#medida-container').remove();

                if (especie === 'Reefer') {
                    $('#tipo-container-wrapper').after(`
                        <div class="form-group" id="temperatura-wrapper">
                            <label for="temperatura">Temperatura (ºC)</label>
                            <input type="number" class="form-control" name="temperatura" id="temperatura" required>
                        </div>
                    `);
                    return;
                }

                if (especie === 'Open Top') {
                    $('#tipo-container-wrapper').after(`
                        <div class="form-group" id="medida-altura-only">
                            <label for="altura">Altura</label>
                            <div class="input-group">
                                <input type="text" id="altura" name="altura" class="form-control">
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

            setTimeout(() => {
                $('#especie').trigger('change');
            }, 50);
        }

        // Perigosa → Campos adicionais
        $('#perigosa').change(function () {
            if ($(this).val() === 'Sim') {
                $('#dynamicFields').append(`
                    <div class="form-group" id="onu-group">
                        <label for="onu">Nº ONU</label>
                        <input type="text" class="form-control" name="onu" id="onu" required>
                    </div>
                    <div class="form-group" id="risco-group">
                        <label for="risco">Nº RISCO</label>
                        <input type="text" class="form-control" name="risco" id="risco" required>
                    </div>
                `);
            } else {
                $('#onu-group, #risco-group').remove();
            }
        });

        // Sincroniza unidades
        $(document).on('change', '.unidade-medida', function () {
            const selected = $(this).val();
            $('.unidade-medida').val(selected);
        });
    }
});


</script>

@stop

