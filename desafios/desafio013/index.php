<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP #13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" min="0" required>
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        
        ?>
        <section>
            <h2>Saque de [] realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li>100 x0</li>
                <li>50 x0</li>
                <li>10 x0</li>
                <li>5 x0</li>
            </ul>
        </section>
</body>
</html>