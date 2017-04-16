<?php

    class RelatorioSimples extends TemplateRelatorio {

    	protected function cabecalho(Banco $Banco) {
    		echo $Banco->getNome() . '<br/>';
    	}

    	protected function corpo(Banco $Banco) {
    		foreach ($Banco->getContas() as $conta) {
    			echo "Titular: ". $conta->getTitular() . "<br>";
    			echo "Saldo: ". $conta->getSaldo() . "<br>";
    		}
    	}

    	protected function rodape(Banco $Banco) {
    		echo $Banco->getTelefone();
    	}

    }