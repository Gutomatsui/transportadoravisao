@extends('master')
@section('content')
<!-- RECIPIENTE -->
<div class="container-fluid wizard-containercontainer-fluid wizard-container">
    <!-- SERVICOS -->
    <div class="col-md-12">
        <!-- LINHA -->
        <div class="row">
            <!-- TITULO -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="titulo centro">
                    <h1></h1>
                    <p>Veja abaixo nossa localização</p>
                </div>
            </div>
            <!-- /TITULO -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="mapa-localizacao">
                    <div class="mapa-unidade-santos">
                        <div class="titulo">
                            <h4>Unidade <strong>Santos/SP</strong></h4>
                            Endereço: Praça da República, 62 conj 144 Centro - Santos - SP CEP: 11013-921
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="724" height="335" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Pra%C3%A7a%20da%20Rep%C3%BAblica,%2062%20conj%20144%20Centro%20-%20Santos%20-%20SP&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://123movies-to.org"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 335px;
                                        width: 724px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embed a google map</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 335px;
                                        width: 724px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- /LINHA -->
    </div>
    <!-- /SERVICOS -->

</div>
<!-- /RECIPIENTE -->

@stop