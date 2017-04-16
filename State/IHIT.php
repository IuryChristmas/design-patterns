<?php

    class IHIT extends TemplateDeImpostoCondicional {

        
    	public function deveUsarMaximaTaxacao(Orcamento $Orcamento) {
    		return $this->verificaItensComMesmoNome($Orcamento);
    	}

    	public function maximaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * 0.13 + 100;
    	}

    	public function minimaTaxacao(Orcamento $Orcamento) {
    		return $Orcamento->getValor() * (0.01 * count($Orcamento->getItens()));
    	}

    	private function verificaItensComMesmoNome($Orcamento) {
    		$i = 0;
    		$nome = '';

    		while($i < count($Orcamento->getItens())) {
				foreach ($Orcamento->getItens() as $item) {
					if($nome == '') {
						$nome = $item->getNome();
					}elseif ($nome == $item->getNome()) {
						return true;
					}
    			}
    			$i++;
    		}
    		return false;
    		
    	}

    	/*outra forma de calcular
    	public function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        $noOrcamento = Array();

        foreach($orcamento->getItens() as $item) {
          if(in_array($item->getNome(),$noOrcamento)) return true;
          else $noOrcamento[] = $item->getNome();
        }

        return false;
      }*/

    }