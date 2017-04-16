<?php 

    class Saldo {
    	private $valor;

    	function __construct($novoValor) {
    		$this->valor = $novoValor;
    	}

    	public function getSaldo() {
    		return $this->valor;
    	}

    	public function setSaldo($retorno) {
    		$this->valor = $this->valor + $retorno;
    	}
    }

?>