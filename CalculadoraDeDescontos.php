<?php 

    require_once "ChainOfResponsability/Desconto5Itens.php";
    require_once "ChainOfResponsability/Desconto500Reais.php";
    require_once "ChainOfResponsability/DescontoPorVendaCasada.php";
    require_once "ChainOfResponsability/SemDesconto.php";

    class CalculadoraDeDescontos {
        
        public function desconto(Orcamento $Orcamento) {
            $desconto5Itens = new Desconto5Itens();
            $desconto500Reais = new Desconto500Reais();
            $descontoPorVendaCasada = new DescontoPorVendaCasada();
            $semDesconto = new SemDesconto();
            
            $desconto5Itens->setProximo($desconto500Reais);
            $desconto500Reais->setProximo($descontoPorVendaCasada);
            $descontoPorVendaCasada->setProximo($semDesconto);
            $valorDoDesconto = $desconto5Itens->desconto($Orcamento);
            
            return $valorDoDesconto;
        } 
    }

?>