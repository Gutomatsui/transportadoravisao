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
                </div>

                <!-- Informações da Carga abaixo da Informações do Cliente -->
                <div class="block">
                    <!-- Carga Info Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-cube"></i> <strong>Informações</strong> da Carga</h2>
                    </div>

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
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Informações de Origem -->
            <div class="col-lg-8">
                <div class="block">
                    <div class="block-title">
                        <h2><i class="fa fa-truck fa-flip-horizontal"></i> <strong>Informações de Origem</strong></h2>
                    </div>
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
                </div>
            </div>

            <!-- Informações de Destino -->
            <div class="col-lg-8">
                <div class="block">
                    <div class="block-title">
                        <h2><i class="fa fa-truck"></i> <strong>Informações de Destino</strong></h2>
                    </div>
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

                        <!-- Botão para abrir a modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal">
                            Enviar Email
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal para enviar o email -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailModalLabel">Enviar Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cotacao_id" value="{{ $cotacao->id }}">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $cotacao->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea class="form-control ckeditor" id="conteudo" name="conteudo" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- Inclua o CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('conteudo');
    </script>

@stop
