<?php 

    class ICPP extends TemplateDeImpostoCondicional {


    	public function deveUsarMaximaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() > 500;
    	}

    	public function maximaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * 0.07;
    	}

    	public function minimaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * 0.05;
    	}

    }

?>