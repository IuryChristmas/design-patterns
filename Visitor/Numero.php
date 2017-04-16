<?php

class Numero implements Expressao {
	
	private $numero;
	
	function __construct($numero) {
		$this->numero = $numero;
	}
	public function avalia() {
		return $this->numero;
	}
	
	public function aceita(Visitor $impressora) {
		$impressora->visitaNumero($this);
	}
	
	public function getNumero() {
		return $this->numero;
	}
}