<?php

class Finalizado implements TipoDeContrato {
	public function avanca(Contrato $contrato) {
		throw new Exception("Este Contrato já se encontra finalizado");
	}
}

?>