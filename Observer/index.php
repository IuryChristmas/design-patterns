<?php

require "NotaFiscal.php";
require "Item.php";
require "AcaoAposGerarNota.php";
require "NotaFiscalBuilder.php";
require "NotaFiscalDAO.php";
require "EnviadorEmail.php";
require "EnviadorDeSms.php";
require "Impressora.php";
require "Multiplicador.php";

$acoes[] = new EnviadorDeSms();
$acoes[] = new EnviadorEmail();
$acoes[] = new NotaFiscalDAO();
$acoes[] = new Impressora();
$acoes[] = new Multiplicador(5);

$nfBuilder = new NotaFiscalBuilder($acoes);
/*$nfBuilder->adicionaAcao(new EnviadorDeSms());
$nfBuilder->adicionaAcao(new EnviadorEmail());
$nfBuilder->adicionaAcao(new NotaFiscalDAO());
$nfBuilder->adicionaAcao(new Impressora());
$nfBuilder->adicionaAcao(new Multiplicador(5));*/

$nfBuilder->paraEmpresa("Christmas")->comCnpj("1234")->com(new Item("Tijolo", 250))->com(new Item("Cimento", 250))->comObservacoes("Nada")->naData();

$nf = $nfBuilder->builder();

echo "<pre>";
var_dump($nf);
?>