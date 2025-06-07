<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
            <p>
                <?php
                    //Cotação do Banco Central:
                    $início = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
                
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                    $dados = json_decode(file_get_contents($url), true);

                    $cotacao = $dados["value"][0]["cotacaoCompra"];


                    $real = $_GET["moeda"];
                    $dolar = $real / $cotacao;
                
                    //Formatação de moedas com internacionalização
                    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //criando padrão. Idioma e CURRENCY
                    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong>.</p>";
                    echo "* Cotação obtida diratemente do site do <strong>Banco Central do Brasil<strong>.";
                ?>
            </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>