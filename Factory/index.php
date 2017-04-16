<?php

	function autoloadDeClasses($nomeDaClasse) {
		require $nomeDaClasse.".php";
	}

	spl_autoload_register("autoloadDeClasses");
	
	$conexao = new ConnectionFactory();
	
	
	var_dump($conexao->getConnection());
?>