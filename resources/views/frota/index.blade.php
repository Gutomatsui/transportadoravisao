@extends('master')
@section('content')

  <!-- RECIPIENTE FULL -->
  <div class="container-fluid">
  
    <!-- BREADCRUMB -->
    <div class="home-frase">
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

    <!-- RECIPIENTE -->
    <div class="container fundo-branco">                
        
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo centro">
                        <h1>{{ $title }}</h1>
                        <p>A frota é composta por mais de 120 caminhões, entre próprios, agregados e terceirizados, todos devidamente cadastrados e monitorados e rastreados, 24 horas por dia.</p>
                    </div>
                </div>
                <!-- /TITULO -->                        
            </div>
            <!-- /LINHA --> 
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo">
                        <h4>Possuimos:</h4>
                    </div>
                </div>
                <!-- /TITULO -->
                <!-- CAVALOS -->
                 <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Caminhoneta:
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/caminhoneta.jpg" />
                            Veículo misto destinado ao transporte de passageiros e carga no mesmo compartimento. Permitindo o transporte rápido de pequenas cargas e o acesso a cidades com restrição de horário para caminhões
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Veículo Urbano de Carga (VUC):
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/vuc.png" />
                            O VUC é o caminhão de menor porte, mais apropriado para áreas urbanas. Esta característica de veículo deve respeitar as seguintes características: largura máxima de 2,2 metros; comprimento máximo de 6,3 metros e limite de emissão de poluentes.  A capacidade do VUC é de 3 toneladas.
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Toco ou caminhão semi-pesado:
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/toco.png" />
                            Caminhão que tem eixo simples na carroceria, ou seja,  um eixo frontal e outro traseiro de rodagem simples. Sua capacidade é de até 6 toneladas, tem peso bruto máximo de 16 toneladas e comprimento máximo de 14 metros.
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Truck ou caminhão pesado:
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/truck.png" />
                            Caminhão que tem o eixo duplo na carroceria, ou seja, dois eixos juntos. O objetivo é poder carregar carga maior e proporcionar melhor desempenho ao veículo. Um dos eixos traseiros deve necessariamente receber a força do motor. Sua capacidade é de 10 a 14 toneladas, possui peso bruto máximo de 23 toneladas e seu comprimento é também de 14 metros, como no caminhão toco.
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Cavalo Mecânico ou caminhão extra-pesado:
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/cm.png" />
                            É o conjunto formado pela cabine, motor e rodas de tração do caminhão com eixo simples (apenas 2 rodas de tração). Pode-ser engatado em vários tipos de carretas e semi-reboques, para o transporte.
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="altura-minima-cavalos">
                        <p>
                            <b><h5>
                                Cavalo Mecânico Trucado ou LS:
                            </h5></b>
                            </br>
                            <img class="img-cavalos" src="img/cavalos/cm-trucado.png" />
                            Tem o mesmo conceito do cavalo mecânico, mas com o diferencial de ter eixo duplo em seu conjunto, para poder carregar mais peso. Assim o peso da carga do semi-reboque distribui-se por mais rodas, e a pressão exercida por cada uma no chão é menor.
                        </p>
                    </div>
                    <hr>
                </div>
                <!-- /CAVALOS -->
            </div>
            <!-- /LINHA -->
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo">
                        <h4>Equipamentos especiais:</h4>
                    </div>
                </div>
                <!-- /TITULO -->
                <!-- CARACTERISTICAS EQUIPAMENTOS ESPECIAIS -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th><b>EQUIPAMENTOS</b></th>
                                <th class="text-center"><b>PBTC/DOC</b></th>
                                <th class="text-center"><b>Eixos</b></th>                                        
                            </tr>
                            <tr>
                                <td>Carreta Extensiva</td>
                                <td class="text-center">35,0 TONS</td>
                                <td class="text-center">3</td>                                        
                            </tr>                                                                               
                            <tr>
                                <td>Carreta Longa / Loks</td>
                                <td class="text-center">35,6 TONS</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>CPC Rebaixado</td>
                                <td class="text-center">40,0 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>CPC Super Rebaixado</td>
                                <td class="text-center">40,0 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>Prancha 20’</td>
                                <td class="text-center">20,0 TONS</td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td>Prancha 20’ Reta</td>
                                <td class="text-center">25,0 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>Prancha Extensível</td>
                                <td class="text-center">55,0 TONS</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>Prancha Rebaixada</td>
                                <td class="text-center">57,0 TONS</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>Prancha Rebaixada</td>
                                <td class="text-center">55,0 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>Prancha Reta</td>
                                <td class="text-center">57,0 TONS</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>Prancha Lagartixa extensiva e pneum&aacute;tica</td>
                                <td class="text-center">27 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>Prancha Lagartixa</td>
                                <td class="text-center">37,5 TONS</td>
                                <td class="text-center">3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                       
                <!-- /CARACTERISTICAS EQUIPAMENTOS ESPECIAIS -->
            </div>
            <!-- /LINHA -->
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">                            
                    <p class="text-justify">Não encontrou o equipamento que você procura? Entre em contato. Nós temos a solução certa para você!</p>
                </div>
                <!-- /TITULO -->                        
            </div>
            <!-- /LINHA -->
    </div>
    <!-- /RECIPIENTE -->  

@stop