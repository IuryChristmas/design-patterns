<?php 

    class RealizadorDeInvestimentos {
    	public function investir(Saldo $saldo, Investimento $investimento) {
    		return $investimento->investir($saldo) * 0.75;
    	}
    }

?>