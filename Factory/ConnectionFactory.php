<?php

    class ConnectionFactory {
		
		public function getConnection() {
			/*$host = "localhost";
			$user = "root";
			$password = "123456";
			$banco = "alura";
			
			$con = mysqli_connect($host, $user, $password, $banco);*/
			
			$database = parse_ini_file("config.ini");
			
			$host = $database['host'];
			$user = $database['username'];
			$password = $database['password'];
			$banco = $database['db'];
			$tipo = $database['tipoBanco'];
			
			if($tipo == 'mysql') {
				$con = mysqli_connect($host, $user, $password, $banco);
			} elseif($tipo == 'postgres') {
				$con = pg_connect('host='.$host.' port=5432 dbname='.$banco.' user='.$user.' password='.$password.'');
			}
	
			
			return $con;
		}
		
	}

?>