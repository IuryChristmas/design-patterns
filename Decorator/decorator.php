<?php

require "Filtro.php";
require "MenorQue100.php";
require "MaiorQue500.php";
require "MesCorrente.php";

$contas = array ();
$contas[0] = array(
	'titular' => 'José',
    'saldo'   => 50,
    'data_abertura' => '10/11/2015',
);
$contas[1] = array(
	'titular' => 'Andrea',
    'saldo'   => 501.000,
    'data_abertura' => date('d/m/Y'),
);
$contas[2] = array(
	'titular' => 'Carlos',
    'saldo'   => 55,
    'data_abertura' => date('d/m/Y'),
);
$contas[3] = array(
	'titular' => 'Aline',
    'saldo'   => 100,
    'data_abertura' => date('d/m/Y'),
);


$menor =  new MenorQue100();
echo "<pre>";
echo "Menor que 100 <br>";
var_dump($menor->filtra($contas));
$maior = new MaiorQue500();
echo "Maior que 500 mil <br>";
var_dump($maior->filtra($contas));
$MesCorrente = new MesCorrente();
echo "Mes corrente <br>";
var_dump($MesCorrente->filtra($contas));
