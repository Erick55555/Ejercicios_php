<?php 
    class ent_Positivo {
        private $num1;

        public function __construct($num1) {
            $this->num1 = $num1;
            echo "<br>Este es el numero 1: ".$num1; 
        }

        public function cal_seguida() {
            $result=$this->num1;
            while($result>1){
                if($result%2==0){
                    $result=$result/2;
                }else{
                    $result=($result*3)+1;
                }
                echo "<br>".$result.",";
            }   
                
        }
    }

    $num1=rand(1,99);

    $ent1 = new ent_Positivo($num1);
    echo $ent1->cal_seguida()
       

?>