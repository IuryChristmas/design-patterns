<?php 

    class ConcluiPedido implements Comando {
		private $pedido;
		
		function __construct(Pedido $pedido) {
			$this->pedido = $pedido;
		}
		
		public function executa() {
			echo "<br>Finalizando pedido " . $this->pedido->getCliente() ."<br>";
			$this->pedido->finaliza();
		}
	}

?>