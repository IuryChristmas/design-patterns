<?php 

class Estado {
	private $contrato;
	
	function __construct(Contrato $contrato) {
		$this->contrato = $contrato;
	}
	
	public function getEstado() {
		return $this->contrato;
	}
}

?>