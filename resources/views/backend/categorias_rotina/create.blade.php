@extends('backend.master')
@section('backend.content')

<div id="page-content">

    <div class="row">
        <!-- Coluna de Informações do Cliente -->
        <div class="col-lg-4">
            <!-- Customer Info Block -->
            <div class="block">
                <!-- Customer Info Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Informações</strong> da Categoria</h2>
                </div>
                <!-- END Customer Info Title -->

                <form method="POST" action="{{ route('categorias_rotina.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome da Categoria</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome da Categoria" required>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Salvar</button>
                    <a href="{{ route('categorias_rotina.index') }}" class="btn btn-secondary mt-2">Voltar</a>

                </form>
            </div>
        </div>
    </div>
</div>


@stop