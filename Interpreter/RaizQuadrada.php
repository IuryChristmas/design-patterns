<?php

class RaizQuadrada implements Expressao {
	
	private $valor;
	
	function __construct(Expressao $valor) {
		$this->valor = $valor;
	}
	
	public function avalia() {
		$resultado = $this->valor->avalia();
		
		return sqrt($resultado);
	}
	
}