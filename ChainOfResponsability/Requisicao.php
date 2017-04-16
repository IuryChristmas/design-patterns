<?php

require_once "Formato.php";

class Requisicao {
    private $formato;
    
    public function __construct(Formato $formato) {
        $this->formato = $formato;
    }

    public function getFormato() {
        return $this->formato->getFormato();
    }
}