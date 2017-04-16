<?php

    function autoload($class) {
		require $class.".php"; 
	}
	
	spl_autoload_register("autoload");
	
    $pedido1 = new Pedido("Renan", 150.0);
    $pedido2 = new Pedido("Marcelo", 250.0);

    $fila = new FilaDeTrabalho();

    $fila->adiciona(new PagaPedido($pedido1));
    $fila->adiciona(new PagaPedido($pedido2));
    $fila->adiciona(new ConcluiPedido($pedido1));

    $fila->processa();

?>