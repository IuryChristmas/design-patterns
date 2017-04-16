<?php 

    class Moderado implements Investimento{
    	public function investir(Saldo $saldo) {
    		$porcentagem = mt_rand(1, 100) <= 50 ? 0.07 : 0.025;

    		return $saldo->getSaldo() * $porcentagem;
    	}
    }

?>