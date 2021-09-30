<?php 
    class Palindromo {
        private $frase;

        public function __construct($frase) {
            $this->frase = $frase;
            echo "<br>Esta es la frase: ".$frase;
        }

        public function esPalindromo() {
            $frase_bien= "";
            for($i=0;$i<strlen($this->frase); $i++){
                if($this->frase[$i] != " "){
                    $frase_bien .=strtolower($this->frase[$i]);
                }
            }
            $frase_inver="";
            for($i =strlen($frase_bien)-1;$i>=0;$i--){
                $frase_inver .=$frase_bien[$i];
            }

            for($i=0;$i<strlen($frase_inver);$i++){
                if($frase_inver[$i]!=$frase_bien[$i]){
                    return false;
                }
                return true;
            }
            
        }
    }

    $frase="sol los";

    $pal1 = new Palindromo($frase);
    if($pal1->esPalindromo()){
        echo "<br>Es palindromo";
    }else{
        echo "<br>no es palindromo";
    }

?>