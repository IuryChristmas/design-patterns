<?php

	class Negativo implements EstadoDeUmaConta {

		public function deposita(Conta $Conta, $valorDeposito) {
			if($Conta->getSaldo() < 0) {
				$Conta->setSaldo($Conta->getSaldo() + $valorDeposito * 0.95);
			} else {
				$Conta->setEstado(new Positivo());
				$Conta->deposita($Conta, $valorDeposito);;
			}
		}
		public function saque(Conta $Conta, $valorSaque) {
			throw new Exception("Saldo negativo, não é permitido realizar saques");
			
		}
		public function getEstadoConta() {
			return "Saldo Negativo";
		}

	}

	/*class Negativo implements EstadoDaConta {
      public function saca(Conta $conta, $valor) {
        throw new Exception("Sua conta está no vermelho. Não é possível sacar!");
      }

      public function deposita(Conta $conta, $valor) {
        $conta->saldo += $valor * 0.95;
        if($conta->saldo > 0) $conta->estado = new Positivo();
      }

    }*/