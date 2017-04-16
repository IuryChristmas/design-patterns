<?php 

    class Impressora implements AcaoAposGerarNota {
		public function executa(NotaFiscal $notaFiscal) {
          echo "<br>imprimindo notaFiscal <br>";
        }
	}

?>