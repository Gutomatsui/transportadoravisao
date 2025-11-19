@extends('backend.master')
@section('backend.content')

<!-- INDEX -->
<div id="page-content">
    <ul class="breadcrumb breadcrumb-top">
        <li>Listagem de Rotinas</li>
    </ul>

    <div class="block">
        <div class="block-title">
            <h2><strong>Rotinas</strong> Cadastradas</h2>
            <div class="pull-right">
                <a href="{{ route('rotinas.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nova Rotina</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rotinas as $rotina)
                    <tr>
                        <td>{{ $rotina->id }}</td>
                        <td>{{ $rotina->title }}</td>
                        <td>{{ $rotina->categoria->nome ?? 'Sem categoria' }}</td>
                        <td>
                            <a href="{{ route('rotinas.edit', $rotina->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('rotinas.destroy', $rotina->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right">
                {{ $rotinas->links() }}
            </div>
        </div>
    </div>
</div>
@stop
