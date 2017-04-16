<?php

	class EmAprovacao implements EstadoDeUmOrcamento{

		private static $contador = 1;
 /* private $descontoAplicado = false;
      public function aplicaDescontoExtra(Orcamento $orcamento) {
        if(!$this->descontoAplicado) {
          $orcamento->valor -= $orcamento->valor * 0.05;
          $this->descontoAplicado = true;
        }
        else {
          throw new Exception("Desconto já aplicado!");
        }
      }*/
		public function aplicaDescontoExtra(Orcamento $Orcamento) {
			if(self::$contador == 1) {
				$valor = $Orcamento->getValor();
				$Orcamento->setValor($valor - $valor * 0.05);
				self::$contador += 1;
			} else {
				throw new Exception("Este desconto já foi aplicado, não podendo ser aplicado novamente");
			}
			
		}

		public function aprova(Orcamento $Orcamento) {
			$Orcamento->setEstado(new Aprovado());
		}
        public function reprova(Orcamento $Orcamento) {
        	$Orcamento->setEstado(new Reprovado());
        }
        public function finaliza(Orcamento $Orcamento) {
        	throw new Exception("Orçamento em aprovação não pode ir para finalizado diretamente");
        	
        }

	}