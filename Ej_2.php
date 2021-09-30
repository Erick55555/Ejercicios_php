<?php 
    class Numero_mayor {
        private $numeros;

        public function __construct($numeros) {
            $this->numeros = $numeros;
            for($i=0;$i<count($this->numeros);$i++){
                echo "<br>Estos son los numeros: ".$numeros[$i];
            }
        }

        public function cal_Mayor() {
            $mayor= 0;
            for($i=0;$i<count($this->numeros);$i++){
                if($mayor<$this->numeros[$i]){
                    $mayor=$this->numeros[$i];
                }
            }
            return $mayor;
        }
    }

    $numeros;
    for($i=0;$i<3;$i++){
        $numeros[$i]=rand(1,100);
    }

    $num1 = new Numero_mayor($numeros);
    echo "<br>Este numero es el mayor: ".$num1->cal_Mayor();


?>