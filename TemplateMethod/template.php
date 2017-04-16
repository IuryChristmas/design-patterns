<?php

	require_once "TemplateRelatorio.php";
	require_once "Banco.php";
	require_once "Conta.php";
	require_once "RelatorioComplexo.php";
	require_once "RelatorioSimples.php";

	$banco = new Banco("BrBanco", "3214-0000", "R.Tanto Faz, 120", "brbanco@banco.com");

	$banco->addConta(new Conta("José das Capivara", "094", "2352", 252));

	echo "Relatorio Simples <br/>";
	$relatorioSimples = new RelatorioSimples();
	$relatorioSimples->imprimirRelatorio($banco);
    echo "<br/><br/>";

    echo "Relatorio Complexo <br/>";
    $relatorioComplexo = new RelatorioComplexo();
    $relatorioComplexo->imprimirRelatorio($banco);
    echo "<br/>";