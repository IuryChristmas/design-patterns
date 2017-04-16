<?php

	class Positivo implements EstadoDeUmaConta {

		public function deposita(Conta $Conta, $valorDeposito) {
			if($Conta->getSaldo() > 0) {
				$Conta->setSaldo($Conta->getSaldo() + $valorDeposito * 0.98);
			} else {
				$Conta->setEstado(new Negativo());
				$Conta->deposita($Conta, $valorDeposito);
			}
		}
		public function saque(Conta $Conta, $valorSaque) {
			return $Conta->setSaldo($Conta->getSaldo() - $valorSaque);
		}
		public function getEstadoConta() {
			return "Saldo Positivo";
		}
	}

	/*class Positivo implements EstadoDaConta {
      public function saca(Conta $conta, $valor) {
        $conta->saldo -= $valor;

        if($conta->saldo < 0) $conta->estado = new Negativo();

      }

      public function deposita(Conta $conta, $valor) {
        $conta->saldo += $valor * 0.98;
      }

    }*/