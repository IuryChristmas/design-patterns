<?php 

    class MesCorrente extends Filtro {

    	public function filtra($contas) {
    		$listaDeContas = array();
    		foreach ($contas as $value) {
    			$mesAbertura = explode('/',$value['data_abertura']);
    			$mesCorrente = explode('/', date('d/m/Y'));
    			if($mesAbertura[1] == $mesCorrente[1]) {
    				$listaDeContas[] = array(
    					'titular' => $value['titular'],
    					'saldo'   => $value['saldo'],
    					'data_abertura' => $value['data_abertura'],
    					'filtro'  => 'Abertura da Conta é o mesmo do mês corrente'
    				);
    			}
    		}

    		return $listaDeContas;
    	}

    }


    /*forma do instrutor
    class FiltroMesmoMes extends Filtro {
      function __construct($outroFiltro = null) {
        parent::__construct($outroFiltro);
      }

      public function filtra($contas) {
        $filtrada = Array();
        for($contas as $c) {
          if($c->getDataAbertura()->get("month") == date("m") && 
            $c->getDataAbertura()->get("year") == date("Y")) {
              $filtrada[] = $c;
          }
        }

        foreach($this->proximo($contas) as $c)  {
             $filtrada[] = $c;
        }
        return $filtrada;
      }
    }*/