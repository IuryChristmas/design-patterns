<?php

    class RelatorioComplexo extends TemplateRelatorio {


    	protected function cabecalho(Banco $Banco) {
    		echo $Banco->getNome() .' '. $Banco->getEndereco() .' '. $Banco->getTelefone(). '<br/>';
    	}

    	protected function corpo(Banco $Banco) {
    		foreach ($Banco->getContas() as $conta) {
    			echo "Titular: ". $conta->getTitular() . "<br>";
    			echo "Agência: ". $conta->getAgencia() . "<br>";
    			echo "Número da Conta: ". $conta->getNumeroConta() . "<br>";
    			echo "Saldo: ". $conta->getSaldo() . "<br>";
    		}
    	}

    	protected function rodape(Banco $Banco) {
    		echo $Banco->getEmail() .' '. date('d/m/Y');
    	}



    }