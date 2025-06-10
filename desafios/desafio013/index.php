<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP #13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? '0';
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="idsaque" min="0" required step="1" value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Valores disponíveis: R$100, R$50, R$20, R$10, R$2 e R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
        <?php 
            $sobra = $saque;

            $cem = (int) ($sobra / 100);
            $sobra = $sobra % 100;

            $cinquenta = floor($sobra / 50); //floor arredonda para baixo
            $sobra %= 50; //Simplificando

            $vinte = floor($sobra / 20);
            $sobra %= 20;

            $dez = floor($sobra / 10);
            $sobra %= 10;

            $cinco = floor($sobra / 5);
            $sobra %= 5;

            $dois = floor($sobra / 2);
            $sobra %= 2;

            $um = floor($sobra / 1);
            $sobra %= 1;

        ?>
        <section>
            <h2>Saque de <?=$saque?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="img/100-reais.jpg" alt="100R$" class="nota"> x<?=$cem?></li>
                <li><img src="img/50-reais.jpg" alt="50R$" class="nota"> x<?=$cinquenta?></li>
                <li><img src="img/20-reais.jpg" alt="20R$" class="nota"> x<?=$vinte?></li>
                <li><img src="img/10-reais.jpg" alt="10R$" class="nota"> x<?=$dez?></li>
                <li><img src="img/5-reais.jpg" alt="5R$" class="nota"> x<?=$cinco?></li>
                <li><img src="img/2-reais.jpg" alt="2R$" class="nota"> x<?=$dois?></li>
                <li><img src="img/1-real.jpg" alt="1R$" class="nota"> x<?=$um?></li>
            </ul>
        </section>
</body>
</html>