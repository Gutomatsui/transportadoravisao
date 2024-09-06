@extends('master')
@section('content')

    <!-- RECIPIENTE FULL -->
    <div class="container-fluid">
        <!-- BREADCRUMB -->
        <div class="home-frase">
            <!-- RECIPIENTE -->
            <div class="container">
                <div class="pull-left"><a href="">Página Inicial</a> / {{ $title }} </div>
                <div class="login">
                    Acompanhe sua carga
                    <input type="text" placeholder="CNPJ">
                    <input type="text" placeholder="Senha">
                    <input type="button" value="Rastrear">
                </div>
            </div>
            <!-- RECIPIENTE -->
        </div>
        <!-- /BREADCRUMB -->
        <!-- RECIPIENTE -->
        <div class="container fundo-branco">
            <div class="row">
                <!-- COLUNA -->
                <div class="col-md-12">
                    <!-- LINHA -->
                    <div class="row">
                        <!-- TITULO -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="titulo centro">
                                <h1>A Empresa</h1>
                                <p>Conheça mais sobre nós, nossa historia, certificados e parceiros</p>
                            </div>
                        </div>
                        <!-- /TITULO -->
                        <!-- SESSÃO -->
                        <div class="col-md-12">
                            <hr>
                            <!-- QUEM SOMOS -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titulo">
                                        <h4><b>Quem Somos</b></h4>
                                    </div>
                                    <p class="text-justify">A <b>Transportadora Visão</b>, é uma empresa que atua no ramo de
                                        <b>transporte rodoviário</b>, há mais de 40 anos, buscando a otimização na qualidade
                                        dos serviços prestados.</p>
                                    <p class="text-justify">Seu objetivo é oferecer o melhor <b>apoio logístico</b> a seus
                                        clientes (importadores e exportadores), em território nacional, procurando superar
                                        suas expectativas e atingir a excelência no atendimento e na realização de suas
                                        ações.</p>
                                    <p class="text-justify">Atualmente, constituída por profissionais experientes no ramo, a
                                        <b>Transportadora Visão</b> é uma empresa que opera de forma ágil, prática e segura,
                                        por possuir uma equipe em constante aprimoramento, comprometida em conhecer as
                                        necessidades do negócio de seus clientes.</p>
                                </div>
                            </div>
                            <!-- /QUEM SOMOS -->
                            <hr>
                        </div>
                        <!-- /SESSÃO -->
                        <!-- SESSÃO -->
                        <div class="col-md-12">
                            <!-- CERTIFICADOS -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titulo centro">
                                        <h4><b>LICENÇAS</b></h4>
                                        <p class="text-center">A <b>Transportadora Visão</b> é uma das poucas empresas
                                            licenciadas, e prontas para qualquer tipo de transporte.</p>
                                        <hr class="col-xs-visivel">
                                    </div>
                                </div>
                                <div class="col-md-3 licencas">
                                    <h4 class="h4 titulo">Exército Brasileiro</h4>

                                    <div class="servicos-item" style="max-height: 150px;">
                                        <a href="">
                                            <div class="servicos-item-azul"></div>
                                            <div class="servicos-item-imagem">
                                                <img src="/img/certificados/exercito-empresa-aprovada-transporte-rodoviario.jpg"
                                                    class="center-block">
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-3 licencas">
                                    <h4 class="h4 titulo">Polícia Federal</h4>

                                    <div class="servicos-item" style="max-height: 150px;">
                                        <a href="">
                                            <div class="servicos-item-azul"></div>
                                            <div class="servicos-item-imagem">
                                                <img src="/img/certificados/policia-federal-empresa-aprovada-transporte-rodoviario.jpg"
                                                    class="center-block">
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-3 licencas">
                                    <h4 class="h4 titulo">Polícia Civil</h4>

                                    <div class="servicos-item" style="max-height: 150px;">
                                        <a href="">
                                            <div class="servicos-item-azul"></div>
                                            <div class="servicos-item-imagem">
                                                <img src="/img/certificados/policia-civil-empresa-aprovada-transporte-rodoviario.jpg"
                                                    class="center-block">
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-3 licencas">
                                    <h4 class="h4 titulo">Ibama</h4>

                                    <div class="servicos-item" style="max-height: 150px;">
                                        <a href="">
                                            <div class="servicos-item-azul"></div>
                                            <div class="servicos-item-imagem">
                                                <img src="/img/certificados/ibama-empresa-aprovada-transporte-rodoviario.gif"
                                                    class="center-block">
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!-- /CERTIFICADOS -->
                        </div>
                        <!-- /SESSÃO -->
                        <!-- SESSÃO -->
                        <div class="col-md-12">
                            <!-- NOSSOS PARCEIROS -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titulo centro">
                                        <h4><b>Nossos Parceiros</b></h4>
                                    </div>
                                    <p class="text-center">Ao longo dos anos a <b>Transportadora Visão</b> construiu
                                        inúmeras parcerias, amigos com quem podemos contar, veja alguns de nossos parceiros
                                        e referencias comerciais.</p>
                                    <hr class="col-xs-visivel">
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Auto Lins</h5>
                                    </div>
                                    <img src="/img/parceiros/autolins.png" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Cofipe</h5>
                                    </div>
                                    <img src="/img/parceiros/cofipe.jpg" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Divena</h5>
                                    </div>
                                    <img src="/img/parceiros/divena.png" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Freios Casqueiros</h5>
                                    </div>
                                    <img src="/img/parceiros/freios-casqueiro.png" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Della Via</h5>
                                    </div>
                                    <img src="/img/parceiros/della-via.jpg" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Link</h5>
                                    </div>
                                    <img src="/img/parceiros/link.png" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>DPaschoal</h5>
                                    </div>
                                    <img src="/img/parceiros/dpaschoal.jpg" class="center-block">
                                    <hr>
                                </div>
                                <div class="col-md-3 parceiros">
                                    <div class="titulo centro">
                                        <h5>Multieixo</h5>
                                    </div>
                                    <img src="/img/parceiros/multieixo.jpg" class="center-block">
                                    <hr class="col-xs-invisivel">
                                </div>
                            </div>
                            <!-- /NOSSOS PARCEIROS -->
                        </div>
                        <!-- /SESSÃO -->
                    </div>
                    <!-- /LINHA -->
                </div>
                <!-- /COLUNA -->
            </div>
        </div>
    </div>


    @stop
