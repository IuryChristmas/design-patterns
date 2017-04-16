<?php

	class Aprovado implements EstadoDeUmOrcamento{

		private static $contador = 1;
/*
  private $descontoAplicado = false;
    public function aplicaDescontoExtra(Orcamento $orcamento) {
       if(!$this->descontoAplicado) {
         $orcamento->valor -= $orcamento->valor * 0.02;
         $this->descontoAplicado = true;
       }
       else {
         throw new Exception("Desconto já aplicado!");
       }
     }

*/
		public function aplicaDescontoExtra(Orcamento $Orcamento) {
			if(self::$contador == 1) {
				$valor = $Orcamento->getValor();
				$Orcamento->setValor($valor - $valor * 0.02);
				self::$contador += 1;
			} else {
				throw new Exception("Este desconto já foi aplicado, não podendo ser aplicado novamente");
			}
			
		}

		public function aprova(Orcamento $Orcamento) {
			throw new Exception("Orçamento já está em estado de aprovação");
			
		}
        public function reprova(Orcamento $Orcamento) {
        	throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
        	
        }
        public function finaliza(Orcamento $Orcamento) {
        	$Orcamento->setEstado(new Finalizado());
        	
        }

	}