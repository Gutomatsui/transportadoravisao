<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow, all">
<meta name="googlebot" content="index, follow, all">
<meta name="google" content="notranslate">
<meta name="author" content="matsuitecnologia.com.br">
<title>{{ $title ?? 'Transportadora visao' }}</title> <!-- Título dinâmico -->

<link href="{{ URL::to('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/estilo/estilo.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/responsivo/responsivo.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<div class="topo">
    <!-- RECIPIENTE -->
    <div class="container">
        <!-- MENU RESPONSIVO -->
        <div class="menu-responsivo">
            <div class="navbar" role="navigation">
                <!-- LOGO -->
                <div class="logo-responsivo">
                    <a href="">
                        <img class="img-responsive" src="img/logo-transportadora-visao.png">
                    </a>
                </div>
                <!-- /LOGO -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Trocar Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="">Início</a></li>
                        <li><a href="a-empresa">Empresa</a></li>
                        <li><a href="sassmaq">Sassmaq</a></li>
                        <li><a href="servicos">Serviços</a></li>
                        <li><a href="frota">Frota</a></li>
                        <li><a href="clientes">Clientes</a></li>
                        <li><a href="cotacao">Cotação</a></li>
                        <li><a href="contato">Fale Conosco</a></li>
                        <li><a href="localizacao">Localização</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /MENU RESPONSIVO -->

        <!-- MENU INSTITUCIONAL -->
        <div class="menu-institucional">
            <ul>
                <li>Endereço: Praça da República, 62 conj 144 Centro - Santos - SP CEP: 11013-921</li>
                <li class=""><i class="glyphicon glyphicon-earphone"></i> <a href="contato">Fale Conosco</a></li>
                <li class=""><i class="glyphicon glyphicon-map-marker"></i> <a href="localizacao">Localização</a>
                </li>
            </ul>
        </div>
        <!-- /MENU INSTITUCIONAL -->

        <!-- LOGO -->
        <div class="logo">
            <a href=""><img class="img-responsive" src="img/logo-transportadora-visao.png"></a>
            <img class="img-responsive" src="img/sassmaq-empresa-aprovada-transporte-rodoviario.png">
        </div>
        <!-- /LOGO -->

        <!-- MENU DE NAVEGAÇÃO -->
        <div class="menu-navegacao">
            <ul>
                <li class="{{ $title == '' ? 'ativo' : '' }}">
                    <a href="/">Início</a>
                </li>

                <li class="{{ $title == 'A Empresa' ? 'ativo' : '' }}">
                    <a href="a-empresa">A Empresa</a>
                </li>

                <li class="{{ $title == 'SASSMAQ' ? 'ativo' : '' }}">
                    <a href="sassmaq">SASSMAQ</a>
                </li>

                <li class="{{ $title == 'Serviços' ? 'ativo' : '' }}">
                    <a href="servicos">Serviços</a>
                </li>

                <li class="{{ $title == 'Frota' ? 'ativo' : '' }}">
                    <a href="frota">Frota</a>
                </li>

                <li class="{{ $title == 'Clientes' ? 'ativo' : '' }}">
                    <a href="clientes">Clientes</a>
                </li>

                <li class="{{ $title == 'Cotação' ? 'ativo' : '' }}">
                    <a href="cotacao">Cotação</a>
                </li>
            </ul>
        </div>
        <!-- /MENU DE NAVEGAÇÃO -->
    </div>
</div>
    <!-- RECIPIENTE -->


@yield('content')

{{-- Roda pé --}}
<div class="rodape">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="rodape-dados-de-contato">
                    <div class="titulo">
                        <h4>Dados de Contato</h4>
                    </div>
                    <ul>
                        <li><i class="glyphicon glyphicon-earphone"></i> Telefone
                            <h5>+55 (13) 3216-1910</h5>
                            <h5>+55 (13) 3219-1033</h5>
                            <h5>+55 (13) 3219-1699</h5>
                        </li>
                        <li><i class="glyphicon glyphicon-envelope"></i> E-mail
                            <h5>falecom@transportadoravisao.com.br</h5>
                        </li>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Endereço
                            <h5>Endereço: Praça da República, 62 conj 144 Centro - Santos - SP CEP: 11013-921</h5>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="rodape-mapa-do-site">
                    <div class="titulo">
                        <h4>Mapa do site</h4>
                    </div>
                    <ul>
                        <li><a href="/">Início</a></li>
                        <li><a href="a-empresa">A Empresa</a></li>
                        <li><a href="sassmaq">SASSMAQ</a></li>
                        <li><a href="servicos">Serviços</a></li>
                        <li><a href="frota">Frota</a></li>
                        <li><a href="clientes">Clientes</a></li>
                        <li><a href="cotacao">Cotação</a></li>
                        <li><a href="contato">Fale Conosco</a></li>
                        <li><a href="localizacao">Localização</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="rodape-links-uteis">
                    <div class="titulo">
                        <h4>Links Úteis</h4>
                    </div>
                    <ul>
                        <div class="row">
                            <div class="col-md-6">
                                <li><a href="" target="_blank"></a></li>
                            </div>
                            <div class="col-md-6">
                                <li><a href="" target="_blank"></a></li>
                                <li><a href="links-uteis">Veja todos...</a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="desenvolvimento">
    <div class="container">
        <div class="pull-left">
            Transportadora Visão &copy; <?php echo date('Y'); ?> - Todos os direitos são reservados.
        </div>
        <div class="pull-right">
            Desenvolvido por:
            <a href="http://incatel.com.br" target="_blank" title="Incatel TI">
                <img src="img/logotipo-incatel-ti.png" alt="Incatel TI" title="Incatel TI">
            </a>
        </div>
    </div>
</div>

<script src="{{ URL::to('js/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::to('js/bootstrap/bootstrap.min.js') }}"></script>


<script src="http://maps.google.com/maps/api/js?sensor=true&async=2"></script>
<script type="text/javascript">
    if (window.innerWidth > 764) {
        var directionsDisplay;
        var mapa1;
        var marcador1 = new google.maps.LatLng(-23.933810457048406, -46.32714580000004);
        var minhaImagem = 'img/icone-mapa.png';

        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(-23.933810457048406, -46.32714580000004),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };
        mapa1 = new google.maps.Map(document.getElementById("mapa-unidade-santos"), myOptions);

        /*
        var mapa2;
        var marcador2 = new google.maps.LatLng(-3.8082246010570433, -38.41715969999996);
        
        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(-3.8082246010570433, -38.41715969999996),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };    
        mapa2 = new google.maps.Map(document.getElementById("mapa-unidade-fortaleza"), myOptions);
        */
        /*
        var mapa_personalizado = [
            {
                elementType: "labels.text",            //Cor dos textos do mapa
                stylers: [
                  { color: "#ffffff" }
                ]
            }, {             
                elementType: "labels.text.stroke",     //Cor da Borda dos textos do mapa
                stylers: [
                    { visibility:"off" }            //Oculta a Borda
                ] 
            }, {
                "elementType": "geometry.fill",     //Cor do mapa
                "stylers": [
                    { "color": "#007ecb" }
                ]
            }, {
                "elementType": "geometry.stroke",    //Cor das Bordas do mapa
                "stylers": [
                    { "color": "#0064AB" }
                ]
            }, {
                "featureType": "road",                 //Cor das Ruas
                "elementType": "geometry.fill",
                "stylers": [
                    { "color": "#0064AB" }
                ]
            }
        ];
        */
        var mapa_personalizado = [


        ];
        mapa1.setOptions({
            styles: mapa_personalizado
        });
        //mapa2.setOptions({styles: mapa_personalizado});

        var marker = new google.maps.Marker({
            position: marcador1,
            map: mapa1,
            title: "Transportadora Visão",
            icon: minhaImagem
        });

        /*
        var marker = new google.maps.Marker({
              position: marcador2,
              map: mapa2,
              title:"Transportadora Visão",
              icon: minhaImagem
          });
        */

        directionsDisplay = new google.maps.DirectionsRenderer();
        directionsDisplay.setMap(mapa1);
        //directionsDisplay.setMap(mapa2);
        //google.maps.event.addDomListener(window, 'load', initialize);
    }
</script>
