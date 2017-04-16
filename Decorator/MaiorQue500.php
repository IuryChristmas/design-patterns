<?php

    class MaiorQue500 extends Filtro {

    	public function filtra($contas) {
    		$listaDeContas = array();
    		foreach ($contas as $value) {
    			if($value['saldo'] > 500.000) {
    				$listaDeContas[] = array(
    					'titular' => $value['titular'],
    					'saldo'   => $value['saldo'],
    					'data_abertura' => $value['data_abertura'],
    					'filtro'  => 'Saldo Maior que 500 mil reais'
    				);
    			}
    		}

    		return $listaDeContas;
    	}

    }

    /*forma instrutor
    class FiltroMaiorQue500MilReais extends Filtro {
      function __construct($outroFiltro = null) {
        parent::__construct($outroFiltro);
      }

      public function filtra($contas) {
       $filtrada = Array();
        foreach($contas as $c) {
          if($c->getValor() > 50000) $filtrada[] = $c;
        }

       foreach($this->proximo($contas) as $c)  {
             $filtrada[] = $c;
        }
        return $filtrada;
      }
    }*/