<?php 

    class Conservador implements Investimento{
    	public function investir(Saldo $saldo) {
    		return $saldo->getSaldo() * 0.08;
    	}
    }

?>