<?php 
    class Venta {
        private $num1;

        public function __construct($num1) {
            $this->num1 = $num1;
            echo "<br>Este es la venta: ".$num1; 
        }

        public function comision() {
            $result=$this->num1;
            if($this->num1<10000){
                $result=($result*5/100);
            }
            else if($this->num1>10000 && $this->num1<20000){
                $result=($result*8/100);
            }
            else if($this->num1>20000 && $this->num1<40000){
                $result=($result*10/100);
            }
            else{
                $result=($result*13/100);
            }
            echo "<br>Esta es la comision: ".$result;
        }
    }

    $num1=rand(1,40000);

    $ven1 = new Venta($num1);
    echo $ven1->comision()
       

?>