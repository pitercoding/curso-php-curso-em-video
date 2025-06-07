<?php 
    $nome = "Piter";
    $sobrenome = "Gomes";
    const PAIS = "Brasil"; //consts não recebem $ na declaração

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS; //consts não podem ser interpoladas dentro das ""
?>