<?php 

class DescontoPorVendaCasada implements Desconto{
    private $proximoDesconto;
    private $caneta = 'caneta';
    private $lapis = 'lapis';
    
    public function desconto(Orcamento $Orcamento) {
        if($this->existe($Orcamento)) {
            return $Orcamento->getValor() * 0.05;
        }else {
            return $this->proximoDesconto->desconto($Orcamento);
        }
        
    }
    public function setProximo(Desconto $proximo) {
        $this->proximoDesconto = $proximo;
    }
    
    private function existe(Orcamento $orcamento) {
        $verificador = 0;
        foreach ($orcamento->getItens() as $item) {
            if(strcasecmp($item->getNome(),$this->caneta) == 0){
                $verificador += 1;
            } else if (strcasecmp($item->getNome(),$this->lapis) == 0) {
                $verificador += 1;
            }
            
            if($verificador == 2) {
                return true;
            }
        }
        return false;
    }
    
    
    /*outra maneira de se fazer
    public function calcula(Orcamento $orcamento) {
            if(aconteceuVendaCasadaEm($orcamento)) return $orcamento->getValor() * 0.05;
            else return $proximo->calcula($orcamento);
        }

        private function aconteceuVendaCasadaEm(Orcamento $orcamento) {
            return $this->existe("CANETA", $orcamento) && $this->existe("LAPIS", $orcamento);
        }

        private function existe($nomeDoItem, Orcamento $orcamento) {
            foreach ($orcamento->getItens() as $item) {
                if($item->getNome() == $nomeDoItem) return true;
            }
            return false;
        }
    */
}

?>