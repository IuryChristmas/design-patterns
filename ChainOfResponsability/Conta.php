<?php

class Conta {
    private $saldo;
    private $titular;
    
    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    
    public function getTitular() {
        return $this->titular;
    }

}