<?php

	class Finalizado implements EstadoDeUmOrcamento{

		public function aplicaDescontoExtra(Orcamento $Orcamento) {
			throw new Exception("Orçamentos finalizados não recebem desconto extra!");
		}

		public function aprova(Orcamento $Orcamento) {
			throw new Exception("Orçamentos finalizados não podem ser aprovados!");
		}
        public function reprova(Orcamento $Orcamento) {
        	throw new Exception("Orçamentos finalizados não podem ser reprovados!");
        }
        public function finaliza(Orcamento $Orcamento) {
        	throw new Exception("Orçamento já está finalizado!");
        }

	}