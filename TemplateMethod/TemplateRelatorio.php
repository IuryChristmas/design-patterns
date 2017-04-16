<?php

    abstract class TemplateRelatorio {

    	public function imprimirRelatorio(Banco $Banco) {
    		$this->cabecalho($Banco);
    		$this->corpo($Banco);
    		$this->rodape($Banco);
    	}

    	protected abstract function cabecalho(Banco $Banco);

    	protected abstract function corpo(Banco $Banco);

    	protected abstract function rodape(Banco $Banco);

    }