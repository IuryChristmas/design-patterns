<?php

    class NotaFiscalBuilder {
		
		private $razaoSocial;
		private $cnpj;
		private $dataDeEmissao;
		private $valorBruto;
		private $impostos;
		public $itens;
		public $observacoes;
		private $acoes;
		
		public function __construct(array $acao) {
			$this->valorBruto = 0;
			$this->impostos = 0;
			$this->itens = array();
			$this->acoes = $acao;
		}
		
		public function paraEmpresa($razaoSocial) {
			$this->razaoSocial = $razaoSocial;
			
			return $this;
		}
		
		public function comCnpj($cnpj) {
			$this->cnpj = $cnpj;
			
			return $this;
		}
		
		/*public function comItem(Item $novoItem) {
			$this->itens[] = $novoItem;
			$this->valorBruto += $novoItem->getValor();
			$this->impostos += $novoItem->getValor() * 0.05;
			
			return $this;
		}*/
		
		public function com($itemNovo) {
			$this->itens[] = $itemNovo;
			$this->valorBruto += $itemNovo->getValor();
			$this->impostos += $itemNovo->getValor() * 0.05;
			
			return $this;
		}
		
		public function comObservacoes($observacoes) {
			$this->observacoes = $observacoes;
			
			return $this;
		}
		
		public function naData($dataDeEmissao = null) {
			if(is_null($dataDeEmissao)){
				$this->dataDeEmissao = date('Y-m-d h:i:s');
			} else {
				$this->dataDeEmissao = $dataDeEmissao;
			}
			
			return $this;
		}
		
		public function builder() {
			$nf = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->dataDeEmissao, $this->valorBruto, $this->impostos, $this->itens, $this->observacoes);
			
			foreach ($this->acoes as $acao) {
				$acao->executa($nf);
			}
			
			return $nf;
		}
		
		public function adicionaAcao(AcaoAposGerarNota $acao) {
			$this->acoes[] = $acao;
		}
	}

?>