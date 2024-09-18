@extends('backend.master')
@section('backend.content')

    <!-- Customer Content -->
    <!-- Page content -->
    <div id="page-content">

        <div class="row">
            <!-- Coluna de Informações do Cliente -->
            <div class="col-lg-4">
                <!-- Customer Info Block -->
                <div class="block">
                    <!-- Customer Info Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-file-o"></i> <strong>Informações</strong> do Cliente</h2>
                    </div>
                    <!-- END Customer Info Title -->

                    <!-- Customer Info -->
                    <div class="block-section text-center">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::to('backend/img/placeholders/avatars/avatar4@2x.jpg') }}" alt="avatar"
                                class="img-circle">
                        </a>
                        <h3>
                            <strong>{{ $cotacao->nome }}</strong><br><small></small>
                        </h3>
                    </div>
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Responsável do Frete</strong></td>
                                <td>{{ $cotacao->resp_mercadoria }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Email</strong></td>
                                <td>{{ $cotacao->email }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Telefone</strong></td>
                                <td>{{ $cotacao->telefone }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>CNPJ do Emitente</strong></td>
                                <td>{{ $cotacao->cnpj_emitente }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Customer Info -->
                </div>

                <!-- Informações da Carga abaixo da Informações do Cliente -->
                <div class="block">
                    <!-- Carga Info Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-cube"></i> <strong>Informações</strong> da Carga</h2>
                    </div>
                    <!-- END Carga Info Title -->

                    <!-- Carga Info -->
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Tipo de Mercadoria</strong></td>
                                <td>{{ $cotacao->tipo_mercadoria }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Valor da Nota Fiscal</strong></td>
                                <td>{{ $cotacao->valor_nota }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Quantidade</strong></td>
                                <td>{{ $cotacao->quantidade }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Comprimento</strong></td>
                                <td>{{ $cotacao->comprimento }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Largura</strong></td>
                                <td>{{ $cotacao->largura }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Peso Total</strong></td>
                                <td>{{ $cotacao->peso_total }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Valor da Nota Fiscal</strong></td>
                                <td>{{ $cotacao->valor_nota }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Carga Info -->
                </div>
            </div>
            <!-- END Coluna de Informações do Cliente e Carga -->

            <!-- Coluna de Conteúdo Adicional -->
            <div class="col-lg-8">
                <!-- Block for Additional Content -->
                <div class="block">
                    <!-- Content Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-truck fa-flip-horizontal"></i> <strong>Informações de Origem</strong></h2>
                    </div>
                    <!-- END Content Title -->

                    <!-- Content Section -->
                    <div class="block-section">
                        <table class="table table-borderless table-striped table-vcenter">
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>Cep</strong></td>
                                    <td>{{ $cotacao->cep_origem }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Endereço</strong></td>
                                    <td>{{ $cotacao->endereco_origem }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Número</strong></td>
                                    <td>{{ $cotacao->numero_origem }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Complemento</strong></td>
                                    <td>{{ $cotacao->complemento_origem }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Cidade</strong></td>
                                    <td>{{ $cotacao->cidade_origem }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>UF</strong></td>
                                    <td>{{ $cotacao->uf_origem }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Content Section -->
                </div>
            </div>
            <!-- END Coluna de Conteúdo Adicional -->

            <!-- Coluna de Conteúdo Adicional -->
            <div class="col-lg-8">
                <!-- Block for Additional Content -->
                <div class="block">
                    <!-- Content Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-truck"></i> <strong>Informações de Destino</strong></h2>
                    </div>
                    <!-- END Content Title -->

                    <!-- Content Section -->
                    <div class="block-section">
                        <table class="table table-borderless table-striped table-vcenter">
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>Cep</strong></td>
                                    <td>{{ $cotacao->cep_destino }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Endereço</strong></td>
                                    <td>{{ $cotacao->endereco_destino }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Número</strong></td>
                                    <td>{{ $cotacao->numero_destino }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Complemento</strong></td>
                                    <td>{{ $cotacao->complemento_destino }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Cidade</strong></td>
                                    <td>{{ $cotacao->cidade_destino }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>UF</strong></td>
                                    <td>{{ $cotacao->uf_destino }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Content Section -->
                </div>
            </div>
            <!-- END Coluna de Conteúdo Adicional -->
        </div>
        <!-- END Row -->
    </div>
    <!-- END Customer Content -->

@stop
