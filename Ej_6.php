<?php 
    class Potencia {
        private $num1;
        private $num2;

        public function __construct($num1,$num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
            echo "<br>Este es el numero 1: ".$num1."<br>
            Este es el numero 2: ".$num2;
            
        }

        public function cal_Potencia() {
            $result=0;
            $seguir=true;
            $i=1;
            do{
                $result= pow($i, $this->num1 );
                if($result>$this->num2){
                    $seguir=false;
                }else{
                    echo "<br>".$i."-".$result;
                }
                $i++;
            }while($seguir);
        }
    }

    $num1=rand(1,10);
    $num2=rand(1,20);

    $pot1 = new Potencia($num1,$num2);
    echo $pot1->cal_Potencia()
       

?>