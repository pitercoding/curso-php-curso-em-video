<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP #8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = (int) $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="idnum" required value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $rq = sqrt($num);
            $rc = pow($num, (1/3));

            echo "<p>Analisando o <strong>número " . $num . "</strong>, temos:</p>";
            echo "<ul>";
            echo "<li><p>A sua raíz quadrada é <strong>" . number_format($rq, 3, "," , ".") . "</strong>.</p></li>";
            echo "<li>A sua raíz cúbica é <strong>" . number_format($rc, 3, "," , ".") . "</strong>.</li></ul>";
        ?>
    </section>
</body>
</html>