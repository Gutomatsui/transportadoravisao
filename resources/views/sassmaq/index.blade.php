@extends('master')
@section('content')

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
            <!-- LINHA -->
            <div class="row">
                <!-- TITULO -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo centro">
                        <h1>{{ $title }}</h1>
                        <p>Pesquisa de satisfação do cliente</p>
                    </div>
                </div>
                <!-- /TITULO -->
                <!-- SESSÃO -->
                <div class="col-md-12">
                    <!-- PESQUISA -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titulo">
                                <h4>Pesquisa</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th rowspan="2"><b>Requesitos avaliados</b></th>
                                        <th class="text-center" colspan="2"><b>Pontuação</b></th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><b>Visão</b></td>
                                        <td class="text-center"><b>Concorrência</b></td>
                                    </tr>
                                    <tr>
                                        <td>Condições gerais do veículo</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">2</td>
                                    </tr>
                                    <tr>
                                        <td>Conduta dos motoristas</td>
                                        <td class="text-center color-red">3</td>
                                        <td class="text-center">2</td>
                                    </tr>
                                    <tr>
                                        <td>Pontualidade na entrega</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Condições da mercadoria na entrega</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Uniformização dos motoristas</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Atendimento a regras do cliente</td>
                                        <td class="text-center color-red">3</td>
                                        <td class="text-center">2</td>
                                    </tr>
                                    <tr>
                                        <td>Facilidade de contato</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Flexibilidade</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Atendimento e confiabilidade</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td>Sistema de gestão</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Total obtido:</b></td>
                                        <td class="text-center color-red">29</td>
                                        <td class="text-center">27</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /PESQUISA -->
                </div>
                <!-- /SESSÃO -->
            </div>
            <!-- /LINHA -->
            <!-- LINHA -->
            <div class="row">
                <div class="col-md-12">
                    <div class="titulo">
                        <h4>Orientação para pontuação</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-center"><b>Pontuação</b></td>
                                <td><b>Descrição</b></td>
                                <td><b>Situação</b></td>
                            </tr>
                            <tr>
                                <td class="text-center">0</td>
                                <td>Não atende</td>
                                <td>Ruim</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Atende com restrições maiores</td>
                                <td>regular</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>atende com restrições menores</td>
                                <td>Bom</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Atende totalmente</td>
                                <td>Ótimo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /LINHA -->
            <!-- LINHA -->
            <div class="row">
                <div class="col-md-12">
                    <div class="titulo">
                        <h4>Gráficos</h4>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-01.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-02.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-03.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-04.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-06.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-07.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-08.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-09.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive full-image-grafico" src="img/graficos/grafico-05.png">
                    <hr>
                </div>
                <div class="col-md-6 col-xs-12 sasmaq-declaracao-final">
                    <p class="text-justify">A <b>Transportadora Visão</b> está sempre em constante evolução, procurando a
                        todo
                        momento melhorar seus resultados. Trazendo para o cliente sem o melhor que temos a oferecer.</p>
                </div>
            </div>
            <!-- /LINHA -->
        </div>
    </div>
@stop