<?php

class Impressora {
	
	public function visitaSoma(Soma $soma) {
		echo "(";
		$soma->getEsquerda()->aceita($this);
		echo " + ";
		$soma->getDireita()->aceita($this);
		echo ")";
	}
	
	public function visitaSubtracao(Subtracao $sub) {
		echo "(";
		$sub->getEsquerda()->aceita($this);
		echo " - ";
		$sub->getDireita()->aceita($this);
		echo ")";
	}
	
	public function visitaNumero(Numero $numero) {
		echo $numero->getNumero();
	}
}