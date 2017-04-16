<?php 

class Historico {
	private $estadosSalvos;
	
	function __construct() {
		$this->estadosSalvos = Array();
	}
	
	public function pega($index) {
		return $this->estadosSalvos[$index];
	}
	
	public function adiciona(Estado $estado) {
		$this->estadosSalvos[] = $estado;
	}
}
?>