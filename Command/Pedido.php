<?php

    class Pedido {
		
		private $cliente;
		private $valor;
		private $status;
		private $dataFinalizacao;
		
		function __construct($cliente, $valor) {
			$this->cliente = $cliente;
			$this->valor   = $valor;
		}
		
		public function paga() {
			$this->status = new Paga();
		}
		
		public function finaliza() {
			$this->dataFinalizacao = date("Y-m-d");
			$this->status = new Entregue();
		}
		
		public function getCliente() {
			return $this->cliente;
		}
		
		public function getValor() {
			return $this->valor;
		}
		
		public function getStatus() {
			return $this->status;
		}
		
		public function getDataFinalizacao() {
			return $this->dataFinalizacao;
		}
	}

?>