<?php 
    abstract class Imposto {

    	private $outroImposto;

        function __construct(Imposto $outroImposto = null) {
        	$this->outroImposto = $outroImposto;
        }

        protected function calculoDoOutroImposto(Orcamento $Orcamento) {
        	if(is_null($this->outroImposto)) return 0;

        	return $this->outroImposto->calcula($Orcamento);
        }

    	public abstract function calcula(Orcamento $Orcamento);
    }
?>