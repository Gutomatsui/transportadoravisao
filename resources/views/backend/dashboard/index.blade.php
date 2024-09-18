@extends('backend.master')
@section('backend.content')
<!-- Page content -->
<div id="page-content">

    <!-- Dashboard 2 Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="{{URL::to('cotacao/listar')}}"><i class="fa fa-truck" style="color: #000" ></i> Cotação</a>
            </li>
        </ul>
    </div>
    <!-- END Dashboard 2 Header -->


</div>
<!-- END Page Content -->

@stop