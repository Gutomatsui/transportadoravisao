@extends('master')
@section('content')
<!-- RECIPIENTE FULL -->
<div class="container-fluid">
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
</div>
<!-- /BREADCRUMB -->
    <div class="container fundo-branco">                
        <!-- COLUNA -->
        <div class="col-md-12">
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo centro">
                        <h1>{{ $title }}</h1>
                    </div>
                    <p class="text-center">Conheça alguns de nossos clientes</p>
                </div>
                <!-- /TITULO -->
                <!-- SESSÃO -->
                <div class="col-md-12 col-sm-12 col-xs-12">                            
                    <!-- CLIENTES -->
                    <div id="clientes" class="row">                                
                        <div class="item col-md-3">
                            <img src="img/clientes/01.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/02.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/03.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/04.gif" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/05.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/06.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/07.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/08.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/09.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/10.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/11.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/12.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/13.jpg" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/14.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/15.png" class="center-block">
                        </div>
                        <div class="item col-md-3">
                            <img src="img/clientes/16.png" class="center-block">
                        </div>                                
                    </div>
                    <!-- /CLIENTES -->                                                    
                </div>
                <!-- /SESSÃO -->
            </div>
            <!-- /LINHA -->
        </div>
        <!-- /COLUNA -->
    </div>
    <!-- /RECIPIENTE -->  
@stop