<?php

interface Visitor {
	public function visitaSoma(Soma $soma);
	public function visitaSubtracao(Subtracao $sub);
	public function visitaNumero(Numero $numero);
}