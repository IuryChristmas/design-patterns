<?php

class Porcento implements Resposta {
    private $proximoFormato;
    
    public function __construct(Resposta $resposta){
        $this->proximoFormato = $resposta;
    }
    
    public function responde(Requisicao $req, Conta $conta){
        
        /*outra forma
        if($req->getFormato() == Formato::PORCENTO) {
          echo $conta->getTitular() . "%" . $conta->getSaldo();
        }
        */
        if($req->getFormato() == 1) {
            return "Titular: ".$conta->getTitular()." Saldo: ".$conta->getSaldo();
        }else {
            return $this->proximoFormato->responde($req, $conta);

        }
        
    }
    public function setProxima(Resposta $resposta) {
        $this->proximoFormato = $resposta;
    }
}