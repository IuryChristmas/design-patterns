<?php 

class Contrato {
	private $data;
	private $cliente;
	private $tipo;
	
	function __construct($data, $cliente, $tipo = null) {
		$this->data = $data;
		$this->cliente = $cliente;
		if(!is_null($tipo)) {
			$this->tipo = $tipo;
		} else {
		    $this->tipo = new Novo();	
		}
	}
	
	public function getData() {
		return $this->data;
	}
	
	public function setData($data) {
		$this->data = $data;
	}
	
	public function getCliente() {
		return $this->cliente;
	}
	
	public function setCliente($cliente) {
		$this->cliente = $cliente;
	}
	
	public function getTipo() {
		return $this->tipo;
	}
	
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	
	public function avanca() {
		$this->tipo->avanca($this);
	}
	
	public function salvaEstado() {
		return new Estado(new Contrato($this->data, $this->cliente, $this->tipo));
	}
	
	public function restaura(Estado $estado) {
        $this->data = $estado->getEstado()->getData();
        $this->cliente = $estado->getEstado()->getCliente();
        $this->tipo = $estado->getEstado()->getTipo();
    }
}

?>