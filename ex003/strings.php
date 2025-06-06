<?php 
    $nome = "Piter";
    $sobrenome = "Gomes";
    $apelido = "Gafanhoto";
    
    echo "Meu nome é $nome $sobrenome \u{1F590}" . "\n";
    //echo '$nome $sobrenome \u{1F590}';

    const ESTADO = "Rio de Janeiro \u{1F499}";
    echo "Eu amo o " . ESTADO . "\n";

    echo "Estamos no ano de " . date('Y') . "\n";

    echo "$nome \t \"$apelido\" $sobrenome" . "\n";

    $curso = "PHP";
    $ano = date('d/M/Y');
    echo <<< TESTE
        Olá!
            Estou estudando $curso!
                Hoje é $ano. 
            Abraço! \u{1F596}

    TESTE;
?>