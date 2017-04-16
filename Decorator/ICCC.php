<?php

	class ICCC extends Imposto{

		function __construct(Imposto $outroImposto = null) {
    		parent::__construct($outroImposto);
    	}

		public function calcula(Orcamento $orcamento){
			$valor = $orcamento->getValor();
			if($valor < 1000){
		        return $valor * 0.05 + $this->calculoDoOutroImposto($orcamento); 
			}else if($valor >= 1000 and $valor <= 3000) {
				return $valor * 0.07 + $this->calculoDoOutroImposto($orcamento);
			}else {
				return ($valor * 0.08 + 30) + $this->calculoDoOutroImposto($orcamento);
			}
		}
	}

?>