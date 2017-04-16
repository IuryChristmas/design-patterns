<?php

require "NotaFiscal.php";
require "Item.php";
require "NotaFiscalBuilder.php";

$nfBuilder = new NotaFiscalBuilder();
$nfBuilder->paraEmpresa("Christmas")->comCnpj("1234")->com(new Item("Tijolo", 250))->com(new Item("Cimento", 250))->comObservacoes("Nada")->naData();

$nf = $nfBuilder->builder();

echo "<pre>";
var_dump($nf);
?>