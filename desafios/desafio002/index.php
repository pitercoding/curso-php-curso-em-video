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
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $naleatorio = rand(1, 100);
            echo "O valor gerado foi: <strong>$naleatorio</strong>.";
        ?>
        <button><a href="javascript:window.location.reload()">Gerar outro</a></button>
    </main>
</body>
</html>