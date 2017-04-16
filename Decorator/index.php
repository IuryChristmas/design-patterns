<?php
    require_once "Orcamento.php";
    require_once "CalculadoraDeImpostos.php";
    require_once "Item.php";
    require_once "Imposto.php";
    require_once "ICMS.php";
    require_once "ISS.php";
    require_once "KCV.php";
    require_once "ICCC.php";
    require_once "TemplateDeImpostoCondicional.php";
    require_once "ICPP.php";
    require_once "IKCV.php";
    require_once "IHIT.php";
    require_once "ImpostoMuitoAlto.php";
    

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraDeImpostos();


    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ISS(new ICMS()));

    echo "<br/>";

    echo $calculadora->calcula($reforma, new KCV(new IKCV()));

    echo "<br/>";

    $reforma->addItem(new Item("Tijolo", 250));
    $reforma->addItem(new Item("Tijolo", 250));

    echo $calculadora->calcula($reforma, new IKCV());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ICPP());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new IHIT());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ImpostoMuitoAlto(new ISS()));
?>