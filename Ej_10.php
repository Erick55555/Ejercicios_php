<?php 
    class Tienda {
        private $total_compra;
        private $tipo_compra;

        public function __construct($total_compra,$tipo_compra) {
            $this->total_compra = $total_compra;
            $this->tipo_compra = $tipo_compra;
            echo "<br>Este es la venta: ".$total_compra.
            "<br> Este es el tipo de compra: ".$tipo_compra; 
        }

        public function compra() {
            $result=$this->total_compra;
            if($this->total_compra<=19){
               if($this->tipo_compra=="mascota"){
                    echo "<br> No se puede realizar la compra";
               }
               else{
                echo "<br>Los gastos de envio son 9 euros";
                $result=$result+($result*21/100)+9;
               }
            }
            else if(($this->total_compra>19) && ($this->total_compra<40)){
                echo "<br>Los gastos de envio son 9 euros";
                if($this->tipo_compra[1]){
                    $result=$result+($result*10/100)+9;
                }
                else{
                    $result=$result+($result*21/100)+9;
                }
            }
            else{
                echo "<br>Los gastos de envio son gratis";
                if($this->tipo_compra[1]){
                    $result=$result+($result*10/100);
                }
                else{
                    $result=$result+($result*21/100);
                }
            }
            echo "<br>Este es el precio de la compra: ".$result;
        }
    }

    $total_compra=rand(1,100);
    $tipo_compra=["ropa","mascota"];

    $tie1 = new Tienda($total_compra,$tipo_compra[rand(0,1)]);
    echo $tie1->compra()
       

?>