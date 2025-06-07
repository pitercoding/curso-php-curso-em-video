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
            $valorReal = $_GET["moeda"];
            $vDolarHoje = 5.56;
            $vConvertido = $valorReal / $vDolarHoje;

            echo "<p>Seus R$ $valorReal  equivalem a <strong>US$$vConvertido</strong>.</p>";
            echo "<p>* A cotação do dólar hoje é de <strong>US$$vDolarHoje</strong></p>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>