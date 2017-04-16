<?php 

    abstract class TemplateDeImpostoCondicional implements Imposto {

    	public function calcula(Orcamento $Orcamento) {
    		if($this->deveUsarMaximaTaxacao($Orcamento)) {
    			return $this->maximaTaxacao($Orcamento);
    		} else {
    			return $this->minimaTaxacao($Orcamento);
    		}
    	}


    	abstract function deveUsarMaximaTaxacao(Orcamento $Orcamento);

    	abstract function maximaTaxacao(Orcamento $Orcamento);

    	abstract function minimaTaxacao(Orcamento $Orcamento);

    }