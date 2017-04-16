<?php
    require_once "Orcamento.php";
    require_once "ChainOfResponsability/Desconto.php";
    require_once "CalculadoraDeImpostos.php";
    require_once "CalculadoraDeDescontos.php";
    require_once "ChainOfResponsability/Desconto5Itens.php";
    require_once "ChainOfResponsability/Desconto500Reais.php";
    require_once "ChainOfResponsability/DescontoPorVendaCasada.php";
    require_once "ChainOfResponsability/SemDesconto.php";
    require_once "Item.php";
    require_once "Strategy/Imposto.php";
    require_once "Strategy/ICMS.php";
    require_once "Strategy/ISS.php";
    require_once "Strategy/KCV.php";
    require_once "Strategy/ICCC.php";
    require_once "TemplateMethod/TemplateDeImpostoCondicional.php";
    require_once "TemplateMethod/ICPP.php";
    require_once "TemplateMethod/IKCV.php";
    require_once "TemplateMethod/IHIT.php";
    
    /*require "Strategy/Saldo.php";
    require "Strategy/RealizadorDeInvestimentos.php";
    require "Strategy/Investimento.php";
    require "Strategy/Conservador.php";
    require "Strategy/Moderado.php";
    require "Strategy/Arrojado.php";*/

    $reforma = new Orcamento(510);

    $calculadora = new CalculadoraDeImpostos();


    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ISS());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new KCV());

    echo "<br/>";

    $reforma->addItem(new Item("Tijolo", 250));
    $reforma->addItem(new Item("Tijolo", 250));

    echo $calculadora->calcula($reforma, new IKCV());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new ICPP());

    echo "<br/>";

    echo $calculadora->calcula($reforma, new IHIT());

    echo "<br/>";

    $ref = new Orcamento(1000);
    echo $calculadora->calcula($ref, new ICCC());


    // Descontos

    //echo " <br/>Testes de descontos <br/>";

    //$calculadoraDeDescontos = new CalculadoraDeDescontos();
    
    //echo "Desconto <br/>";

    //$reforma->addItem(new Item("Tijolo", 250));
    //$reforma->addItem(new Item("Cimento 1kg", 250));
    //$reforma->addItem(new Item("Caneta", 50));
    //$reforma->addItem(new Item("Cimento 1kg", 250));
    //$reforma->addItem(new Item("lapis", 50));

    //echo $calculadoraDeDescontos->desconto($reforma) . "<br/>";
    /*$saldo = new Saldo(500);

    $investimento = new RealizadorDeInvestimentos();

    $saldo->setSaldo($investimento->investir($saldo, new Conservador()));

    echo $saldo->getSaldo();

    echo "<br/>";

    $saldo2 = new Saldo(500);

    $saldo2->setSaldo($investimento->investir($saldo2, new Moderado()));

    echo $saldo2->getSaldo();

    echo "<br/>";

    $saldo3 = new Saldo(500);

    $saldo3->setSaldo($investimento->investir($saldo3, new Arrojado()));

    echo $saldo3->getSaldo();*/
?>