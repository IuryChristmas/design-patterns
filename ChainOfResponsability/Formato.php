<?php

class Formato {
      public static $XML = 1;
      public static $CSV = 2;
      public static $PORCENTO = 3;
    
    private $formato;
    
    public function setFormato($formato) {
        $this->formato = $formato;
    }
    
    public function getFormato() {
        return $this->formato;
    }
}
