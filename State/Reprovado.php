<?php

	class Reprovado implements EstadoDeUmOrcamento{

		public function aplicaDescontoExtra(Orcamento $Orcamento) {
			throw new Exception("Orçamentos reprovados não recebem desconto extra!");
		}

		public function aprova(Orcamento $Orcamento) {
			throw new Exception("Orçamento está em estado de reprovação e não pode ser aprovado");
			
		}
        public function reprova(Orcamento $Orcamento) {
        	throw new Exception("Orçamento já está em estado de reprovação");
        	
        }
        public function finaliza(Orcamento $Orcamento) {
        	throw new Exception("Um orçamento reprovado não pode ser finalizado");
        	
        }
	}