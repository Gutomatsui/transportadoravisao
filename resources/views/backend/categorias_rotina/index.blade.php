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
            <h2><strong>Listagem</strong> Categoria de Rotinas</h2>
        </div>
        <!-- END Responsive Full Title -->

        <!-- Responsive Full Content -->
        <div class="text-right mb-3">
            <a href="{{ route('categorias_rotina.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Adicionar Categoria
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
               
                <thead>
                    <tr>
                        <th style="width: 150px;" class="text-center">ID</i></th>
                        <th class="text-center">Cliente</th>
                        <th style="width: 150px;" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $list)
                        <tr>
                            <td class="text-center">{{ $list->id }}</td>
                            <td class="text-center">{{ $list->nome }}</td>
                            <td class="text-center">
                                <form action="{{ route('categorias_rotina.destroy', $list->id) }}" method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-alt btn-sm btn-danger" title="Excluir">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="col-md-12 text-right">
                {{ $categorias->links() }}
            </div>

        </div>
        <!-- END Responsive Full Content -->
    </div>
    <!-- END Responsive Full Block -->

</div>

@stop


@section('scripts')