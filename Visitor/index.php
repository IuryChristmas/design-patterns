<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$esquerda = new Subtracao(new Numero(10), new Numero(5));
$direita = new Soma(new Numero(2), new Numero(10));

$conta = new Soma($esquerda, $direita);
$impressora = new Impressora();

$resultado = $conta->avalia();

$conta->aceita($impressora);
echo " = ";
echo $resultado;

/*$raizQuadrada = new RaizQuadrada(new Numero(25));

$resultado = $raizQuadrada->avalia();
echo "<br>".$resultado;*/
?>