<?php

	class Conta {

		private $saldo;
		private $estado;

		public function __construct($novoSaldo) {
			$this->saldo = $novoSaldo;
			$this->estado = new Positivo();
		}

		public function deposita($valorDeposito) {
			$this->estado->deposita($this, $valorDeposito);
		}

		public function saque($valorDoSaque) {
			$this->estado->saque($this, $valorDoSaque);
		}

		public function setSaldo($novoSaldo) {
			$this->saldo = $novoSaldo;
		}

		public function getSaldo() {
			return $this->saldo;
		}

		public function setEstado(EstadoDeUmaConta $estado) {
			$this->estado = $estado;
		}

		public function getEstado() {
			return $this->estado->getEstadoConta();
		}

	}

	/*class Conta {
      protected $saldo;
      protected $estado;

      public function saca($valor) {
        $this->estado->saca($this, $valor);
      }

      public function deposita($valor) {
        $this->estado->deposita($this, $valor);
      }
    }*/