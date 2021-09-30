<?php 
    class base {
        private $num1;

        public function __construct($num1) {
            if($num1%2==0){
                throw new Exception("Este numerto es par");
            }else{
               $this->num1 = $num1;
               echo "<br>Este es el numero 1: ".$num1; 
            }
        }

        public function construir() {
            for($i=1;$i<=$this->num1;$i= $i+2){
                echo "<br>";
                for($x=0;$x<($this->num1-$i);$x++){
                    echo "&nbsp";
                }
                for($j=0;$j<$i;$j++){
                    echo "*";
                }
            } 
        }
    }

    $num1=rand(1,15);
    try{
       $bas1 = new base($num1);
       echo $bas1->construir();
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
    
       

?>
