<?php 

    class EnviadorEmail implements AcaoAposGerarNota {
		public function executa(NotaFiscal $notaFiscal) {
          echo "<br>enviando por e-mail<br>";
        }
	}

?>