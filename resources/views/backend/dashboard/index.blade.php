@extends('backend.master')
@section('backend.content')
<!-- Page content -->
<div id="page-content">

    <!-- Dashboard 2 Header -->
    <div class="content-header">
    
    </div>
    <!-- END Dashboard 2 Header -->


</div>
<!-- END Page Content -->

@stop

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Função para buscar cotações não visualizadas
        function checarNovasCotacoes() {
            $.ajax({
                url: '/cotacoes/novas',
                method: 'GET',
                success: function(data) {
                    // Se houver cotações não visualizadas, exibir o contador
                    if (data.contador > 0) {
                        $('#contadorCotacoes').text(data.contador).show();
                    } else {
                        $('#contadorCotacoes').hide(); // Esconde se não houver novas cotações
                    }
                }
            });
        }

        // Chama a função a cada 30 segundos
        setInterval(checarNovasCotacoes, 30000); 

        // Função para marcar cotações como visualizadas quando o usuário clicar
        $('#verCotacoes').on('click', function() {
            $.ajax({
                url: '/cotacoes/marcar-visualizadas',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    // Resetar o contador após visualizar
                    $('#contadorCotacoes').hide();
                }
            });
        });

        // Executa a função quando a página carrega
        checarNovasCotacoes();
    });
</script>
