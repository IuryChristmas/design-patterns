<?php

require "EstadoDeUmaConta.php";
require "Positivo.php";
require "Negativo.php";
require "Conta.php";

$conta = new Conta(580);

echo $conta->getEstado() . "<br>";

$conta->deposita(10);

echo $conta->getSaldo() . "<br>";

$conta->saque(620);

echo $conta->getSaldo() . "<br>";

$conta->deposita(20);

echo $conta->getSaldo() . "<br>";

echo $conta->getEstado();