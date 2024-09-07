@extends('backend.master')
@section('backend.content')
<!-- Page content -->
<div id="page-content">

    <!-- Dashboard 2 Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="{{URL::to('cliente/cadastro')}}"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li>
                <a href="{{URL::to('orcamento/cadastro')}}"><i class="gi gi-paperclip"></i> Orçamentos</a>
            </li>
            <li>
                <a href="{{URL::to('fatura/listar')}}"><i class="gi gi-barcode"></i> Faturas</a>
            </li>
            <li>
                <a href="#"><i class="gi gi-charts"></i> Relatorios</a>
            </li>



        </ul>
    </div>
    <!-- END Dashboard 2 Header -->


</div>
<!-- END Page Content -->

@stop