<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP #07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salmin = 1_518.00;
        $sal = $_GET['sal'] ?? $salmin;
        
    ?>

    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário:</label>
            <input type="number" name="sal" id="idsal" required value="<?=$sal?>" min="<?=$salmin?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salmin, 2, "," , ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        $tot = intdiv($sal, $salmin);
        $dif = $sal % $salmin;
        echo "<p>Quem recebe um salário mínimo de R\$" . number_format($sal, 2, "," , ".") . " ganha <strong>$tot salários mínimos</strong> + R\$ ". number_format($dif, 2, "," , ".") . ".</p>";
        ?>
    </section>
</body>
</html>