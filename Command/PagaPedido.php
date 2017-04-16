<?php

    class PagaPedido implements Comando {
		private $pedido;
		
		function __construct(Pedido $pedido) {
			$this->pedido = $pedido;
		}
		
		public function executa() {
			echo "<br>Pagando pedido " . $this->pedido->getCliente() ."<br>";
			$this->pedido->paga();
		}
	}

?>