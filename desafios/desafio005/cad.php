<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $vReal = (float) $_GET["numero"];
            $inteira = (int) $vReal;
            $fracionaria = $vReal - $inteira;

            echo "<p>Analisando o número <strong>$vReal</strong> informado pelo usuário:</p>";
            echo "<p>A parte inteira do número é <strong>$inteira</strong>.</p>";
            echo "<p>A parte fracionária do número é <strong>$fracionaria</strong>.</p>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>