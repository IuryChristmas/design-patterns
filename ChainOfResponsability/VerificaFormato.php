<?php
require_once "Conta.php";
require_once "Csv.php";
require_once "Xml.php";
require_once "Porcento.php";
require_once "SemFormato.php";

class VerificaFormato {
    
    public function responde(Requisicao $requisicao, Conta $conta) {
        $xml = new Xml(new Csv(new Porcento(new SemFormato())));
        /*$csv = new Csv(new Porcento());
        $porcento = new Porcento(new SemFormato());
        $semFormato = new SemFormato();*/
        
        /*$xml->setProxima($csv);
        $csv->setProxima($porcento);
        $porcento->setProxima($semFormato);*/
        
        $resposta = $xml->responde($requisicao, $conta); 
        
        return $resposta;
    }
}