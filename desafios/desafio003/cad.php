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
            <?php
                $real = $_GET["moeda"];
                $cotacao = 5.56;
                $dolar = $real / $cotacao;
                
                //Formatação de moedas com internacionalização
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //criando padrão. Idioma e CURRENCY

                echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong>.</p>";

                echo "* A cotação hoje é de <strong>" . numfmt_format_currency($padrão, $cotacao, "BRL") . "</strong> para <strong>1US$</strong>.";
            ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>