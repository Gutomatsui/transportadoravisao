@extends('master')
@section('title', $title) 

@section('content')
<div class="topo">
    <div class="banner">
        <div id="carousel-padrao" class="carousel slide" data-ride="carousel">
            <div class="transparencia-banner"></div>
            <!-- 'BOLINHAS' PARA AVANÇAR/RETROCEDER -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-padrao" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-padrao" data-slide-to="1" class=""></li>
                <li data-target="#carousel-padrao" data-slide-to="2" class=""></li>
                <li data-target="#carousel-padrao" data-slide-to="3" class=""></li>
            </ol>
            <!-- /'BOLINHAS' PARA AVANÇAR/RETROCEDER -->
            <!-- CONTEÚDO DO SLIDER -->
            <div class="carousel-inner slider">
                <!-- SLIDE 4 -->
                <div class="item">
                    <h1>A Transportadora Visão<br>oferece as melhores soluções,<br>com equipamentos especiais<br>para cargas
                        excedentes.</h1>
                    <img src="img/transparencia-banner.png" class="img-responsive transparencia-banner">
                    <img src="img/banner-06.png" class="img-responsive" alt="Banner 4" title="Banner 4">
                </div>
                <!-- /SLIDE 4 -->
                <!-- SLIDE 2 -->
                <div class="item active">
                    <h1>Qualquer que seja sua <br>demanda temos o veículo <br>ideal para sua carga.</h1>
                    <img src="img/transparencia-banner.png" class="img-responsive transparencia-banner">
                    <img src="img/banner-05.png" class="img-responsive" alt="Banner 2" title="Banner 2">
                </div>
                <!-- /SLIDE 2 -->
                <!-- SLIDE 3 -->
                <div class="item">
                    <h1>Com os melhores<br> equipamentos para os <br>trabalhos mais pesados.</h1>
                    <img src="img/transparencia-banner.png" class="img-responsive transparencia-banner">
                    <img src="img/banner-04.png" class="img-responsive" alt="Banner 3" title="Banner 3">
                </div>
                <!-- /SLIDE 3 -->
                <!-- SLIDE 1 -->
                <div class="item">
                    <h1>Sua carga transportada<br>com qualidade e segurança.</h1>
                    <img src="img/transparencia-banner.png" class="img-responsive transparencia-banner">
                    <img src="img/banner-01.jpg" class="img-responsive" alt="Banner 1" title="Banner 1">
                </div>
                <!-- /SLIDE 1 -->
            </div>
            <!-- /CONTEÚDO DO SLIDER -->
            <!-- BOTÕES LATERAIS PARA AVANÇAR/RETROCEDER -->
            <a class="left carousel-control" href="#carousel-padrao" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-padrao" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <!-- /BOTÕES LATERAIS PARA AVANÇAR/RETROCEDER -->
        </div>
    </div>
</div>

    <div class="home-frase">
        <!-- RECIPIENTE -->
        <div class="container">
            <div class="pull-left">Sua carga transportada com qualidade e segurança.</div>
            <div class="login">
                Acompanhe sua carga
                <input type="text" placeholder="CNPJ">
                <input type="text" placeholder="Senha">
                <input type="button" value="Rastrear">
            </div>
        </div>
        <!-- RECIPIENTE -->
    </div>

    <!-- RECIPIENTE -->
    <div class="container">
        <!-- SERVICOS -->
        <div class="row">
            <!-- COLUNA -->
            <div class="col-md-3 home-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titulo">
                            <h1>Serviços</h1>
                            <p>Confira ao lado nossos principais serviços.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-0">
                        <div class="home-bloco">
                            <a href="cotacao">
                                <div class="home-bloco-imagem">
                                    <img src="img/home-cotacao-online.jpg" class="img-responsive">
                                </div>
                                <span>Cotação Online</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /COLUNA -->
            <!-- COLUNA -->
            <div class="col-md-9 home-item">
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-transporte-rodoviario.jpg">
                        </div>
                        <h4>Transportes Rodoviários</h4>
                    </a>
                    <p>A Transportadora Vis&atilde;o atua no segmento de transportes rodoviários com efici&ecirc;ncia,
                        rapidez e seguran&ccedil;a. <a href="servicos">ver mais</a></p>
                </div>
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-transporte-de-produtos-perigosos.jpg">
                        </div>
                        <h4>Produtos Perigosos</h4>
                    </a>
                    <p>A Transportadora Vis&atilde;o atua no segmento de transporte de produtos perigosos, realizando
                        opera&ccedil;&otilde;es de entrega, coleta e transfer&ecirc;ncia de cargas em &acirc;mbito nacional,
                        bem como movimenta&ccedil;&atilde;o e armazenagem. <a href="servicos">ver mais</a></p>
                </div>
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-otm.jpg">
                        </div>
                        <h4>Operador de Transporte Multimodal</h4>
                    </a>
                    <p>Atendemos a diversos segmentos de transporte de cargas e ou mercadorias. Al&eacute;m da
                        expans&atilde;o dos modais da empresa, focamos sempre na seguran&ccedil;a e velocidade da entrega da
                        carga, com um custo beneficio excelente, garantimos a satisfa&ccedil;&atilde;o m&aacute;xima a cada
                        um de nossos clientes. <a href="servicos">ver mais</a></p>
                </div>
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-armazenagem-de-mercadorias.jpg">
                        </div>
                        <h4>Armazenagem de Mercadorias</h4>
                    </a>
                    <p>Para maior apoio &agrave;s opera&ccedil;&otilde;es log&iacute;sticas e portu&aacute;rias, a
                        Transportadora Vis&atilde;o conta com servi&ccedil;os complementares que agilizam a
                        manipula&ccedil;&atilde;o e escoamento das mercadorias de seus clientes. <a href="servicos">ver
                            mais</a></p>
                </div>
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-locacao-de-equipamentos.jpg">
                        </div>
                        <h4>Locação de Equipamentos</h4>
                    </a>
                    <p>A Transportadora Vis&atilde;o possui uma gama de equipamentos separados exclusivamente para
                        loca&ccedil;&atilde;o. <a href="servicos">ver mais</a></p>
                </div>
                <div class="col-md-4 home-servicos-item">
                    <a href="">
                        <div class="home-servicos-item-imagem">
                            <img class="mobile" src="img/servicos/mobile-transporte-de-mudancas.jpg">
                        </div>
                        <h4>Transporte de Mudanças</h4>
                    </a>
                    <p>A transportadora Vis&atilde;o possui equipes de mudan&#231;a residencial e comercial. As equipes
                        s&#227;o altamente capacitadas e munidas dos equipamentos necess&#225;rios para que sua mudan&#231;a
                        seja r&#225;pida e resolutiva. <a href="servicos">ver mais</a></p>
                </div>
            </div>
            <!-- COLUNA -->
        </div>
        <!-- /SERVICOS -->
    </div>
    <!-- /RECIPIENTE -->


    <div class="mapa">
        <div class="mapa-unidade-santos">
            <div class="mapa-legenda"><img src="img/bandeira-de-sao-paulo.png"> Unidade Santos</div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="330" id="gmap_canvas" src="https://maps.google.com/maps?q=Pra%C3%A7a%20da%20Rep%C3%BAblica,%2062%20conj%20144%20Centro%20-%20Santos%20-%20SP&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

    


@stop
