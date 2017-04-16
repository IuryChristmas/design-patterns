<?php

class Subtracao implements Expressao {
	
	private $esquerda;
	private $direita;
	
	function __construct(Expressao $esquerda, Expressao $direita) {
		$this->esquerda = $esquerda;
		$this->direita = $direita;
	}
	
	public function avalia() {
		$resultadoDaEsquerda = $this->esquerda->avalia();
		$resultadoDaDireita  = $this->direita->avalia();
		
		return $resultadoDaEsquerda - $resultadoDaDireita;
	}
	
}