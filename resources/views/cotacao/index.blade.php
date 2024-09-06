@extends('master')
@section('content')

<div class="container-fluid wizard-container">
    <!-- Wizard Steps -->
    <div class="wizard">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#step1" data-toggle="tab">Informações pessoais</a></li>
            <li><a href="#step2" data-toggle="tab">Informações da carga</a></li>
            <li><a href="#step3" data-toggle="tab">Medidas da mercadoria</a></li>
        </ul>
    </div>

    <div class="tab-content">
        <!-- Step 1: Informações pessoais -->
        <div class="tab-pane active" id="step1">
            <h4>Informações pessoais</h4>
            <div class="form-group">
                <label for="nome">Nome ou Razão Social</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone (com DDD)</label>
                <input type="text" class="form-control" name="telefone" required>
            </div>
            <a class="btn btn-primary next-step">Próximo</a>
        </div>

        <!-- Step 2: Informações da carga -->
        <div class="tab-pane" id="step2">
            <h4>Informações da carga</h4>
            <div class="form-group">
                <label for="cidade-origem">Cidade de origem</label>
                <input type="text" class="form-control" name="cidade-origem">
            </div>
            <div class="form-group">
                <label for="estado-origem">Estado de origem</label>
                <input type="text" class="form-control" name="estado-origem">
            </div>
            <div class="form-group">
                <label for="cidade-destino">Cidade de destino</label>
                <input type="text" class="form-control" name="cidade-destino">
            </div>
            <div class="form-group">
                <label for="estado-destino">Estado de destino</label>
                <input type="text" class="form-control" name="estado-destino">
            </div>
            <a class="btn btn-default prev-step">Anterior</a>
            <a class="btn btn-primary next-step">Próximo</a>
        </div>

        <!-- Step 3: Medidas da mercadoria -->
        <div class="tab-pane" id="step3">
            <h4>Medidas da mercadoria</h4>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" name="quantidade">
            </div>
            <div class="form-group">
                <label for="comprimento">Comprimento</label>
                <input type="text" class="form-control" name="comprimento">
            </div>
            <div class="form-group">
                <label for="largura">Largura</label>
                <input type="text" class="form-control" name="largura">
            </div>
            <div class="form-group">
                <label for="altura">Altura</label>
                <input type="text" class="form-control" name="altura">
            </div>
            <div class="form-group">
                <label for="peso-total">Peso total (kg)</label>
                <input type="text" class="form-control" name="peso-total">
            </div>
            <a class="btn btn-default prev-step">Anterior</a>
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- Scripts para navegação entre os steps -->
<script>
    $('.next-step').click(function() {
        var $active = $('.wizard .nav-tabs .active');
        $active.next().removeClass('disabled');
        nextTab($active);
    });

    $('.prev-step').click(function() {
        var $active = $('.wizard .nav-tabs .active');
        prevTab($active);
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>

@stop
