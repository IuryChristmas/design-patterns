<?php

    class MenorQue100 extends Filtro {
    	
    	public function filtra($contas) {
    		$listaDeContas = array();
    		foreach ($contas as $value) {
    			if($value['saldo'] < 100) {
    				$listaDeContas[] = array(
    					'titular' => $value['titular'],
    					'saldo'   => $value['saldo'],
    					'data_abertura' => $value['data_abertura'],
    					'filtro'  => 'Saldo Menor que 100 reais'
    				);
    			}
    		}

    		return $listaDeContas;
    	}
    
    }
    /*filtro menor que 100
    class FiltroMenorQue100Reais extends Filtro {
      function __construct($outroFiltro = null) {
        parent::__construct($outroFiltro);
      }

      public function filtra($contas) {
        $filtrada = new Array();
        foreach($contas as $c) {
          if($c->getValor() < 100) $filtrada[] = $c;
        }

        foreach($this->proximo($contas) as $c)  {
             $filtrada[] = $c;
        }

        return $filtrada;
      }
    }*/