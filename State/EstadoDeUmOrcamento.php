<?php

	interface EstadoDeUmOrcamento {
		public function aplicaDescontoExtra(Orcamento $Orcamento);
		public function aprova(Orcamento $Orcamento);
        public function reprova(Orcamento $Orcamento);
        public function finaliza(Orcamento $Orcamento);
	}