<?php

    class IKCV extends TemplateDeImpostoCondicional {

    	public function deveUsarMaximaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($Orcamento);
    	}

    	public function maximaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * 0.10;
    	}

    	public function minimaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * 0.06;
    	}

    	private function temItemMaiorQue100ReaisNo(Orcamento $Orcamento) {
            foreach ($Orcamento->getItens() as $item) {
            	if($item->getValor() > 100) return true;
            }

            return false;
    	}
    }