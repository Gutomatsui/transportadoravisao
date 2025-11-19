@extends('master')
@section('title', $title)

@section('content')

<div class="container-fluid">
    <div class="home-frase">
        <div class="container">
            <div class="pull-left"><a href="/">Página Inicial</a> / <a href="{{ route('rotinas.site.index') }}">Rotinas</a> / {{ $title }}</div>
            <div class="login">
                Acompanhe sua carga
                <input type="text" placeholder="CNPJ">
                <input type="text" placeholder="Senha">
                <input type="button" value="Rastrear">
            </div>
        </div>
    </div>
    <div class="container fundo-branco">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="titulo centro">
                            <h1>{{ $rotina->title }}</h1>
                            <p><small>Categoria: {{ $rotina->categoria->nome ?? 'N/A' }}</small></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        @if($rotina->img)
                            <div class="text-center" style="margin-bottom: 20px;">
                                <img src="{{ asset('public/'.$rotina->img) }}" class="img-responsive" alt="{{ $rotina->title }}" style="max-width: 80%; height: auto;">
                            </div>
                        @endif

                        <div class="conteudo-rotina" style="margin-bottom: 30px;">
                            {!! $rotina->descricao !!} {{-- Use {!! !!} para renderizar HTML do CKEditor --}}
                        </div>

                        <div class="text-center" style="margin-bottom: 20px;">
                            <a href="{{ route('rotinas.site.index') }}" class="btn btn-default">Voltar para Rotinas</a>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection