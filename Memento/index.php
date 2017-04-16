<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$historico = new Historico();

$contrato = new Contrato(date("Y-m-d"),"Renan");
$historico->adiciona($contrato->salvaEstado());

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());

$contrato->avanca();
$historico->adiciona($contrato->salvaEstado());

//$contrato->avanca();
//$historico->adiciona($contrato->salvaEstado());

var_dump($historico->pega(1));
?>