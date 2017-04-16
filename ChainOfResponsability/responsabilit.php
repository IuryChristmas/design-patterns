<?php

require_once "ChainOfResponsability/Resposta.php";
require_once "ChainOfResponsability/VerificaFormato.php";
require_once "ChainOfResponsability/Requisicao.php";
require_once "ChainOfResponsability/Formato.php";
require_once "ChainOfResponsability/Conta.php";
require_once "ChainOfResponsability/Csv.php";
require_once "ChainOfResponsability/Xml.php";
require_once "ChainOfResponsability/Porcento.php";
require_once "ChainOfResponsability/SemFormato.php";

$conta = new Conta("Iury", 900);
$formato = new Formato();
$formato->setFormato(2);

//em outra forma, a requisição recebe apenas uma var qualquer com o numero representnado o númeral e não uma instancia de formato
$requisicao = new Requisicao($formato);

$resposta = new VerificaFormato();

echo $resposta->responde($requisicao, $conta);