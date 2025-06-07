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
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"];
            $antecessor = $n-1;
            $sucessor = $n+1;

            echo "<p>O número escolhido foi <strong>$n</strong>.</p>";
            echo "<p>O seu <i>antecessor</i> é $antecessor.</p>";
            echo "<p>O seu <i>sucessor</i> é $sucessor.</p>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>