<?php 

    abstract class TemplateDeImpostoCondicional extends Imposto {

        function __construct(Imposto $outroImposto = null) {
            parent::__construct($outroImposto);
        }

    	public function calcula(Orcamento $Orcamento) {
    		if($this->deveUsarMaximaTaxacao($Orcamento)) {
    			return $this->maximaTaxacao($Orcamento) + $this->calculoDoOutroImposto($Orcamento);
    		} else {
    			return $this->minimaTaxacao($Orcamento) + $this->calculoDoOutroImposto($Orcamento);
    		}
    	}


    	abstract function deveUsarMaximaTaxacao(Orcamento $Orcamento);

    	abstract function maximaTaxacao(Orcamento $Orcamento);

    	abstract function minimaTaxacao(Orcamento $Orcamento);

    }