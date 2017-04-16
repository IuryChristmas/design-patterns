<?php 

    class EnviadorDeSms implements AcaoAposGerarNota {
		public function executa(NotaFiscal $notaFiscal) {
          echo "<br>enviando por sms<br>";
        }
	}

?>