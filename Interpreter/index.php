<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}

spl_autoload_register("autoloadDeClasses");

$esquerda = new Subtracao(new Numero(10), new Numero(5));
$direita = new Soma(new Numero(2), new Numero(10));

$conta = new Multiplicacao($esquerda, $direita);

$resultado = $conta->avalia();
echo $resultado;

$raizQuadrada = new RaizQuadrada(new Numero(25));

$resultado = $raizQuadrada->avalia();
echo "<br>".$resultado;
?>