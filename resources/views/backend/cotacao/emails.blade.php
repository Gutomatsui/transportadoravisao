@extends('backend.master')
@section('backend.content')

<div id="page-content">
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ url('cotacao/listar') }}">Listagem de Cotações</a></li>
        <li>Emails de Cotação #{{ $cotacao->id }}</li>
    </ul>

    <div class="block">
        <div class="block-title">
            <h2>Emails da Cotação <strong>#{{ $cotacao->id }}</strong></h2>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-vcenter">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>status</th>
                        <th>Enviado em</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emails as $email)
                        <tr>
                            <td>{{ $email->id }}</td>
                            <td>{{ $email->titulo }}</td>
                            <td>{!! $email->conteudo !!}</td>
                            <td>{{ $email->status }}</td>
                            <td>{{ $email->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
