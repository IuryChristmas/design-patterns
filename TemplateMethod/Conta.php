<?php

	class Conta {
	    private $titular;
	    private $agencia;
	    private $numeroDaConta;
	    private $saldo;

	    function __construct($titular, $agencia, $numeroDaConta, $saldo) {
	    	$this->titular = $titular;
	    	$this->agencia = $agencia;
	    	$this->numeroDaConta = $numeroDaConta;
	    	$this->saldo = $saldo;
	    }

	    public function getTitular() {
	    	return $this->titular;
	    }

	    public function getAgencia() {
	    	return $this->agencia;
	    }

	    public function getNumeroConta() {
	    	return $this->numeroDaConta;
	    }

	    public function getSaldo() {
	    	return $this->saldo;
	    }

	}