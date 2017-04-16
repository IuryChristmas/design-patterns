<?php
    class Orcamento {
    	private $valor;
        private $itens;
        private $estado;

    	function __construct($novoValor) {
    		$this->valor = $novoValor;
            $this->itens = array();
            $this->estado = new EmAprovacao();
    	}
        
        public function addItem(Item $novoItem) {
            $this->itens[] = $novoItem;
        }
        
        public function getItens() {
            return $this->itens;
        }

    	public function getValor() {
    		return $this->valor;
    	}

        public function setValor($novoValor) {
            $this->valor = $novoValor;
        }

        public function setEstado(EstadoDeUmOrcamento $estado) {
            $this->estado = $estado;
        }

        public function aplicaDescontoExtra() {
            $this->estado->aplicaDescontoExtra($this);
        }

        public function aprova() {
            $this->estado->aprova($this);
        }
        public function reprova() {
            $this->estado->reprova($this);
        }
        public function finaliza() {
            $this->estado->finaliza($this);
        }
    }
?>