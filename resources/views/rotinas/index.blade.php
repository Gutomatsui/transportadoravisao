@extends('master')
@section('title', $title)

@section('content')

    <div class="container-fluid">
        <div class="home-frase">
            <div class="container">
                <div class="pull-left"><a href="/">Página Inicial</a> / {{ $title }}</div>
            </div>
        </div>
        <div class="container fundo-branco">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="titulo centro">
                                <h1>{{ $title }}</h1>
                                <p>Confira nossas rotinas e operações</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="block">
                                        <div class="block-title">
                                            <h4><strong>Categorias de Rotinas</strong></h4>
                                        </div>
                                        <ul class="nav nav-pills nav-stacked">
                                            {{-- Link para todas as rotinas --}}
                                            <li class="{{ request('categoria') == '' ? 'active' : '' }}">
                                                <a href="{{ route('rotinas.site.index') }}">
                                                    Todas as Rotinas
                                                    <span
                                                        class="badge pull-right">{{ $categorias->sum('rotinas_count') }}</span>
                                                </a>
                                            </li>
                                            {{-- Links para categorias individuais --}}
                                            @foreach($categorias as $categoria)
                                                <li class="{{ request('categoria') == $categoria->id ? 'active' : '' }}">
                                                    <a
                                                        href="{{ route('rotinas.site.index', ['categoria' => $categoria->id]) }}">
                                                        {{ $categoria->nome }}
                                                        <span class="badge pull-right">{{ $categoria->rotinas_count }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        @forelse($rotinas as $rotina)
                                            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px;">
                                                <div class="servicos-item">
                                                    <a href="{{ route('rotinas.site.show', $rotina->id) }}">
                                                        <div class="servicos-item-azul"></div>
                                                        <div class="servicos-item-imagem"
                                                            style="height: 200px; overflow: hidden;">
                                                            @if($rotina->img)
                                                                <img src="{{ asset('public' . $rotina->img) }}"
                                                                    class="img-responsive center-block" alt="{{ $rotina->title }}"
                                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                                            @else
                                                                <img src="{{ asset('img/default-rotina.jpg') }}"
                                                                    class="img-responsive center-block" alt="Sem Imagem"
                                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                                            @endif
                                                        </div>
                                                        <div class="servicos-item-titulo">
                                                            <h4>{{ $rotina->title }}</h4>
                                                            <p><small>Categoria: {{ $rotina->categoria->nome ?? 'N/A' }}</small>
                                                            </p>
                                                        </div>
                                                        <div class="servicos-item-texto">
                                                            <p>{{ Str::limit(strip_tags($rotina->descricao), 100, '...') }}</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-12 text-center">
                                                <p>Nenhuma rotina encontrada na categoria selecionada.</p>
                                            </div>
                                        @endforelse
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            {{ $rotinas->appends(request()->query())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {{-- Não precisamos de JavaScript para o filtro agora, já que a navegação é via links (GET). --}}
    {{-- O JS anterior 'filterRotinas()' não é mais necessário aqui. --}}
@endsection
