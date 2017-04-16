<?php

	interface EstadoDeUmaConta {
		public function deposita(Conta $Conta, $valorDeposito);
		public function saque(Conta $Conta, $valorSaque);
		public function getEstadoConta();
	}

	/*
    interface EstadoDaConta {
      public function saca(Conta $conta, $valor);
      public function deposita(Conta $conta, $valor);
    }*/