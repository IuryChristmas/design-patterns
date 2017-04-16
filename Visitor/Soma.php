<?php

class Soma implements Expressao {
	
	private $esquerda;
	private $direita;
	
	function __construct(Expressao $esquerda, Expressao $direita) {
		$this->esquerda = $esquerda;
		$this->direita = $direita;
	}
	
	public function avalia() {
		$resultadoDaEsquerda = $this->esquerda->avalia();
		$resultadoDaDireita  = $this->direita->avalia();
		
		return $resultadoDaEsquerda + $resultadoDaDireita;
	}
	
	public function aceita(Visitor $impressora) {
		$impressora->visitaSoma($this);
	}
	
	public function getEsquerda() {
		return $this->esquerda;
	}
	
	public function getDireita() {
		return $this->direita;
	}
	
}