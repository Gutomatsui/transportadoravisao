<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cotação Transportadora Visão</title>
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .buttonwrapper { background-color: transparent !important; }
            body[yahoo] .button { padding: 0 !important; }
            body[yahoo] .button a { background-color: #0984e3; padding: 15px 25px !important; }
        }

        @media only screen and (min-device-width: 601px) {
            .content { width: 600px !important; }
            .col387 { width: 387px !important; }
        }
        .center {
            text-align: center;
        }
        .progress-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .progress-item {
            text-align: center;
        }
        .progress-line {
            width: 100px;
            height: 2px;
            background-color: #0984e3;
        }
    </style>
</head>
<body bgcolor="#192a56" style="margin: 0; padding: 0;" yahoo="fix">
    <!-- Container -->
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
        <tr>
            <td align="center" bgcolor="#0984e3" style="padding: 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                <img src="https://transportadoravisao.com.br/img/logo-transportadora-visao.png" alt="Transportadora Visão Logo" width="500" height="200" style="display:block;" /><br/>
                Agradecemos seu contato, {{ $cotacao->nome }}
            </td>
        </tr>

        <!-- Seção de Caminhões -->
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px;">
                <div class="progress-container">
                    <!-- Ícone de Caminhão Origem -->
                    <div class="progress-item">
                        <img src="https://www.transportadoravisao.com.br/img/truck-origem.png" alt="Origem" width="50" style="display:block;" />
                        <p><strong>Origem</strong></p>
                        <p>{{ $cotacao->endereco_origem }} - {{ $cotacao->cidade_origem }}</p>
                    </div>

                    <!-- Linha entre caminhões -->
                    <div class="progress-line"><img src="https://www.transportadoravisao.com.br/img/seta-direita.png" alt="Origem" width="50" style="display:block;" /></div>

                    <!-- Ícone de Caminhão Destino -->
                    <div class="progress-item">
                        <img src="https://www.transportadoravisao.com.br/img/truck-origem.png" alt="Destino" width="50" style="display:block;" />
                        <p><strong>Destino</strong></p>
                        <p>{{ $cotacao->endereco_destino }} - {{ $cotacao->cidade_destino }}</p>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Conteúdo Adicional -->
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px 20px 10px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
                <!-- Conteúdo adicional ou informações adicionais sobre a cotação -->
                {!! $conteudo !!}
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td align="center" bgcolor="#f9f9f9" style="padding: 30px 20px; font-family: Arial, sans-serif;">
                <p style="color: #555555; font-family: Arial, sans-serif; font-size: 12px;">Transportadora Visão, Todos os direitos reservados.</p>
            </td>
        </tr>
    </table>
</body>
</html>
