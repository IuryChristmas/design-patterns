<?php

class SemFormato implements Resposta {
        private $proximoFormato;
    public function responde(Requisicao $req, Conta $conta){
        return $conta->getTitular .' '. $conta->getSaldo();        
    }
    
    public function setProxima(Resposta $resposta) {
    }
}
?>