@extends('backend.master')
@section('backend.content')
    <!-- Page content -->
    <div id="page-content">
        <!-- Table Responsive Header -->

        <ul class="breadcrumb breadcrumb-top">
            <li>Listagem de Cotação</li>

        </ul>
        <!-- END Table Responsive Header -->

        <!-- Responsive Full Block -->
        <div class="block">
            <!-- Responsive Full Title -->
            <div class="block-title">
                <h2><strong>Listagem</strong> Cliente</h2>
            </div>
            <!-- END Responsive Full Title -->

            <!-- Responsive Full Content -->

            <div class="table-responsive">
                <table class="table table-vcenter table-striped">
                    <div class="col-md-4">
                        <div class="input-group">
                            <form action="{{ URL::to('orcamento/buscar') }}" method="POST">
                                {{ @csrf_field() }}
                                <input type="text" class="form-control" name="name"
                                    placeholder="Pesquisa: Cliente, Status " />
                                <span class="input-group-btn">
                                    <i class="fa fa-search"></i>
                                    <input type="submit" class="btn btn-primary" value="Buscar">

                                </span>
                            </form>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Telefone</th>
                            <th class="text-center">Endereço de Origem</th>
                            <th class="text-center">Endereço de Destino</th>
                            <th class="text-center">Data</th>
                            <th style="width: 150px;" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cotacao as $list )
                        <tr>
                            <td class="text-center">{{ $list->id }}</td>
                            <td class="text-center">{{ $list->nome }}</td>
                            <td class="text-center">{{ $list->email }}</td>
                            <td class="text-center">{{ $list->telefone }}</td>
                            <td class="text-center">{{ $list->endereco_origem }}</td>
                            <td class="text-center">{{ $list->endereco_destino }}</td>
                            <td class="text-center">{{ $list->created_at->format('d/m/Y') }}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs text-center">
                                    <a href="{{ URL::to('cotacao/ver/' . $list->id . '') }}" data-toggle="tooltip"
                                            title="Ver" class="btn btn-alt btn-sm btn-primary">
                                            <i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>

                <div class="col-md-12 text-right">
                    {{ $cotacao->links() }}
                </div>

            </div>
            <!-- END Responsive Full Content -->
        </div>
        <!-- END Responsive Full Block -->



        <div style="display: none;" id="ModalPrint" class="modal in" tabindex="-1" role="dialog" aria-hidden="true"
            style="display: block; padding-right: 16px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title">Pagina de Impressão<i style="color: green;" class="fa fa-Print"></i></h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 style="background-color: #ccc" class="title text-center">Orçamento</h4>


                                <h5 class="text-center"> <a id="orcamentolink" href="" class=""
                                        target="_blank"><i class="fa fa-print"></i> Imprimir Orçamento </a></h5>

                            </div>

                            <div class="col-sm-6">

                                <h4 style="background-color: #ccc" class="title text-center">Fatura</h4>

                                <h5 class="text-center"><a id="faturalink" href="" target="_blank" class=""><i
                                            class="fa fa-print"></i> Imprimir Fatura </a></h5>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h4 style="background-color: #ccc" class="title text-center">OS</h4>


                                <h5 class="text-center"> <a id="oslink" href="" class="" target="_blank"><i
                                            class="fa fa-print"></i> Imprimir Ordem de serviço </a></h5>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@stop


@section('scripts')
