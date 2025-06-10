<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP #12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET['seg'] ?? '0';
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="idseg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total;

        $semanas = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;

        $dias = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;

        $horas = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;

        $minutos = (int) ($sobra / 60);
        $sobra = $sobra % 60;

        $segundos = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você você digitou, <strong><?=number_format($total, 0, "," , ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>