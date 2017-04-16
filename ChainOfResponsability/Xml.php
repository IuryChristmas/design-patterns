<?php

class Xml implements Resposta {
    private $proximoFormato;
    
    public function __construct(Resposta $resposta){
        $this->proximoFormato = $resposta;
    }
    
    public function responde(Requisicao $req, Conta $conta){
         /*outra forma
        if($req->getFormato() == Formato::XML) {
          echo $conta->getTitular() . "%" . $conta->getSaldo();
        }
        */
        if($req->getFormato() == 1) {
            return "<conta><titular>".$conta->getTitular()."</titular><saldo>".$conta->getSaldo()."</saldo></conta>
";
        }else {
            return $this->proximoFormato->responde($req, $conta);
        }
        
    }
    public function setProxima(Resposta $resposta) {
        $this->proximoFormato = $resposta;
    }
}