<?php 

    class Arrojado implements Investimento{
    	public function investir(Saldo $saldo) {

			$porcentagem = mt_rand(1, 100);
    		
    		if($porcentagem <= 20) {
    			return $saldo->getSaldo() * 0.05;
    		}else if($porcentagem > 20 and $porcentagem <= 50) {
    			return $saldo->getSaldo() * 0.03;
    		}else if($porcentagem > 50) {
    			return $saldo->getSaldo() * 0.06;
    		}
    		
    	}
    }

?>