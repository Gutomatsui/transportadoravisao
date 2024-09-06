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
            <!-- SERVICOS -->
            <div class="col-md-12 home-item">
                <!-- LINHA -->
                <div class="row">

                    <!-- TITULO -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="titulo centro">
                            <h1>{{ $title }}</h1>
                            <p>Veja abaixo os serviços prestados por nossa empresa.</p>
                        </div>
                    </div>
                    <!-- /TITULO -->
                    <!-- SERVIÇOS -->                            
                    <div class="col-md-12 col-sm-12 col-xs-12 servicos">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#transporte-excedentes" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/cargas-excedentes.jpg">
                                            <img class="mobile" src="img/servicos/cargas-excedentes.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#transporte-excedentes" data-toggle="modal"><h3>Cargas Excedentes</h3></a>
                                <!-- MODAL TRANSPORTE-EXCEDENTES -->
                                <div class="modal fade" id="transporte-excedentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Transportes de Cargas Excedentes</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <img src="img/servicos/cargas-excedentes.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <p>S&atilde;o cargas que ultrapassam os limites de peso e/ou dimens&otilde;es determinadas pela legisla&ccedil;&atilde;o vigente.</p>
                                                    <p>Para atua&ccedil;&atilde;o nesta &aacute;rea complexa, a Transportadora Vis&atilde;o oferece as melhores solu&ccedil;&otilde;es, com equipamentos especiais, equipe de profissionais capacitados,  planejamento junto &agrave;s concession&aacute;rias e &oacute;rg&atilde;os competentes. Tudo para a realiza&ccedil;&atilde;o do transporte conforme legisla&ccedil;&atilde;o e normas de seguran&ccedil;a.</p>
                                                    
                                                    Caracter&iacute;sticas base para o transporte excedente da Transportadora Vis&atilde;o: 
                                                    <ul> 
                                                        <li class="text-primary">Equipe treinada para construir as melhores rotas para os destinos das cargas <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Sua carga pode ser rastreada em tempo real, independente do modal utilizado <i class="glyphicon glyphicon-check"></i></li>
                                                        <li class="text-primary">Seguran&ccedil;a e rapidez na entrega <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais treinados e capacidatos <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Custo benef&iacute;cio otimizado <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL TRANSPORTE-EXCEDENTES -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#transporte-rodoviario" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/transporte-rodoviario.jpg">
                                            <img class="mobile" src="img/servicos/mobile-transporte-rodoviario.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#transporte-rodoviario" data-toggle="modal"><h3>Transportes Rodoviários</h3></a>
                                <!-- MODAL TRANSPORTE-RODOVIARIO -->
                                <div class="modal fade" id="transporte-rodoviario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Transportes Rodoviários</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/transporte-rodoviario.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-9">
                                                    <p>A Transportadora Vis&atilde;o atua no segmento de transportes rodoviários com efici&ecirc;ncia, rapidez e seguran&ccedil;a. </p>
                                                    <p>Atendemos a todos os nichos de opera&ccedil;&otilde;es industriais, abrangendo empresas produtoras de mat&eacute;rias primas, empresas de bebidas e alimentos em geral. Com servi&ccedil;os especializados, profissionais treinados e capacitados, tecnologia de ponta, frota nova, programa de manuten&ccedil;&atilde;o preventiva e corretiva, a Transportadora Vis&atilde;o garante o m&aacute;ximo de desempenho e confiabilidade em suas opera&ccedil;&otilde;es. Os transportes obedecem ao m&aacute;ximo de rigor na presta&ccedil;&atilde;o de servi&ccedil;os, atendendo sempre as necessidades dos nossos clientes.</p>
                                                    Caracter&iacute;sticas do transporte rodovi&aacute;rio da Transportadora Vis&atilde;o: 
                                                    <ul> 
                                                        <li class="text-primary">Possuimos uma enorme frota de ve&iacute;culos <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Sua carga pode ser rastreada em tempo real <i class="glyphicon glyphicon-check"></i></li>
                                                        <li class="text-primary">Seguran&ccedil;a e rapidez na entrega <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais treinados e capacidatos <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL TRANSPORTE-RODOVIARIO -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#transporte-perigoso" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/transporte-de-produtos-perigosos.jpg">
                                            <img class="mobile" src="img/servicos/mobile-transporte-de-produtos-perigosos.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#transporte-perigoso" data-toggle="modal"><h3>Produtos Perigosos</h3></a>
                                <!-- MODAL TRANSPORTE-RODOVIARIO -->
                                <div class="modal fade" id="transporte-perigoso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Transportes de produtos perigosos</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/transporte-de-produtos-perigosos.jpg">
                                                </div>
                                                <div class="col-md-9">
                                                    <p>A Transportadora Vis&atilde;o atua no segmento de transporte de produtos perigosos, realizando opera&ccedil;&otilde;es de entrega, coleta e transfer&ecirc;ncia de cargas em &acirc;mbito nacional, bem como movimenta&ccedil;&atilde;o e armazenagem.</p>

                                                    <p>Desenvolvemos projetos personalizados para atender as necessidades de cada cliente, assegurando a continuidade dos servi&ccedil;os prestados, sempre realizados de acordo com as pol&iacute;ticas de seguran&ccedil;a e normas da legisla&ccedil;&atilde;o ambiental vigente, garantido a integridade do produto, com equipamentos espec&iacute;ficos e dedicados para cada aplica&ccedil;&atilde;o.</p>

                                                    Caracter&iacute;sticas do transporte de produtos perigosos na Transportadora Vis&atilde;o: 
                                                    <ul> 
                                                        <li class="text-primary">Certificados de transporte de produtos perigosos <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Equipamentos adequados para transporte <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Seguran&ccedil;a e rapidez na entrega <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais treinados e capacidatos <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL TRANSPORTE-PERIGOSOS -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#transporte-multimodal" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/otm.jpg">
                                            <img class="mobile" src="img/servicos/mobile-otm.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#transporte-multimodal" data-toggle="modal"><h3>Transporte Multimodal</h3></a>
                                <!-- MODAL TRANSPORTE-MULTIMODAL -->
                                <div class="modal fade" id="transporte-multimodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Transportes Multimodal</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/otm.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-9">
                                                    <p>A Transportadora Vis&atilde;o possui uma equipe voltada para a expans&atilde;o de modais na empresa.</p>
                                                    <p>Atendemos a diversos segmentos de transporte de cargas e ou mercadorias. Al&eacute;m da expans&atilde;o dos modais da empresa, focamos sempre na seguran&ccedil;a e velocidade da entrega da carga, com um custo beneficio excelente, garantimos a satisfa&ccedil;&atilde;o m&aacute;xima a cada um de nossos clientes.</p>
                                                    Caracter&iacute;sticas base para o transporte multimodal da Transportadora Vis&atilde;o: 
                                                    <ul> 
                                                        <li class="text-primary">Equipe treinada para construir as melhores rotas para os destinos das cargas <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Sua carga pode ser rastreada em tempo real, independente do modal utilizado <i class="glyphicon glyphicon-check"></i></li>
                                                        <li class="text-primary">Seguran&ccedil;a e rapidez na entrega <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais treinados e capacidatos <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Custo benef&iacute;cio otimizado <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL TRANSPORTE-MULTIMODAL -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#armazenagem-mercadorias" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/armazenagem-de-mercadorias.jpg">
                                            <img class="mobile" src="img/servicos/mobile-armazenagem-de-mercadorias.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#armazenagem-mercadorias" data-toggle="modal"><h3>Armazenagem de Mercadorias</h3></a>
                                <!-- MODAL ARMAZENAGEM-MERCADORIAS -->
                                <div class="modal fade" id="armazenagem-mercadorias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Armazenagem de Mercadorias</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/armazenagem-de-mercadorias.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-9">
                                                    <br>
                                                    <p>Para maior apoio &agrave;s opera&ccedil;&otilde;es log&iacute;sticas e portu&aacute;rias, a Transportadora Vis&atilde;o conta com servi&ccedil;os complementares que agilizam a manipula&ccedil;&atilde;o e escoamento das mercadorias de seus clientes.</p>
                                                    <p>Armazenagem de cont&#234;ineres, carga solta e granel l&#237;quido;</p>
                                                    
                                                    Caracter&iacute;sticas da Transportadora Vis&atilde;o para armazenagem de mercadorias: 
                                                    <ul> 
                                                        <li class="text-primary">Local organizado, limpo, e de f&aacute;cil acesso para a equipe de trabalho <i class="glyphicon glyphicon-check"></i></li>
                                                        <li class="text-primary">Sua carga pode ser rastreada em tempo real, independente do modal utilizado <i class="glyphicon glyphicon-check"></i></li>
                                                        <li class="text-primary">Seguran&ccedil;a e rapidez na entrega <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais treinados e capacidatos <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Custo benef&iacute;cio otimizado <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL ARMAZENAGEM-MERCADORIAS -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#locacao-equipamentos" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/locacao-de-equipamentos.jpg">
                                            <img class="mobile" src="img/servicos/mobile-locacao-de-equipamentos.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#locacao-equipamentos" data-toggle="modal"><h3>Locação de Equipamentos</h3></a>
                                <!-- MODAL LOCACAO-EQUIPAMENTOS -->
                                <div class="modal fade" id="locacao-equipamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Locação de Equipamentos</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/locacao-de-equipamentos.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-9">
                                                    <br>
                                                    <p>A Transportadora Vis&atilde;o possui uma gama de equipamentos separados exclusivamente para loca&ccedil;&atilde;o.</p>
                                                    <p>Estes equipamentos s&atilde;o regularmente vistoriados e passam por revis&otilde;es revis&atilde;o antes e depois de cada loca&ccedil;&atilde;o.</p>
                                                    
                                                    Caracter&iacute;sticas da Transportadora Vis&atilde;o para loca&ccedil;&atilde;o de equipamentos: 
                                                    <ul> 
                                                        <li class="text-primary">Equipamentos novos, seguros e revisados <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Contratos de loca&ccedil;&atilde;o flex&iacute;veis <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Equipamentos em estoque para emerg&ecirc;ncias <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Custo benef&iacute;cio otimizado <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL LOCACAO-EQUIPAMENTOS -->
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <div class="servicos-item">
                                    <a href="#" data-target="#transporte-mudancas" data-toggle="modal">
                                        <div class="servicos-item-azul"></div>
                                        <div class="servicos-item-imagem">
                                            <img src="img/servicos/transporte-de-mudancas.jpg">
                                            <img class="mobile" src="img/servicos/mobile-transporte-de-mudancas.jpg">
                                        </div>
                                    </a>
                                </div>
                                <a href="#" data-target="#transporte-mudancas" data-toggle="modal"><h3>Transporte de Mudanças</h3></a>
                                <!-- MODAL TRANSPORTE-MUDAN�AS -->
                                <div class="modal fade" id="transporte-mudancas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Transporte de Mudan&ccedil;as</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-3">
                                                    <img src="img/servicos/transporte-de-mudancas.jpg" class="img-responsive" alt="Transporte rodoviario">
                                                </div>
                                                <div class="col-md-9">
                                                    <br>
                                                    <p>A transportadora Vis&atilde;o possui equipes de mudan&#231;a residencial e comercial. As equipes s&#227;o altamente capacitadas e munidas dos equipamentos necess&#225;rios para que sua mudan&#231;a seja r&#225;pida e resolutiva.</p>
                                                    
                                                    Caracter&iacute;sticas da Transportadora Vis&atilde;o para transporte de mudan&ccedil;as: 
                                                    <ul> 
                                                        <li class="text-primary">Equipamentos de manuseio de mercadorias grandes <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Pl&aacute;stico bolha, caixas de madeira, caixas de papel&atilde;o <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Profissionais capacitados <i class="glyphicon glyphicon-check"></i></li> 
                                                        <li class="text-primary">Custo benef&iacute;cio otimizado <i class="glyphicon glyphicon-check"></i></li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL TRANSPORTE-MUDAN�AS -->
                            </div>
                        </div>
                    </div>                            
                    <!-- /SERVIÇOS -->

                </div>
                <!-- /LINHA -->
            </div>
            <!-- /SERVICOS -->
        </div>
    </div>
    <!-- /RECIPIENTE -->  

@stop