<?php 
    class Pisos {
        private $Num_piso;
        private $Num_puertas;

        public function __construct($Num_piso, $Num_puertas) {
            $this->Num_piso = $Num_piso;
            $this->Num_puertas = $Num_puertas;
            echo "Numero de piso: ".$this->Num_piso.", Numero Puertas: ".$this->Num_puertas.":";
        }

        public function obtenerviviendas() {
            $viviendas= $this->Num_puertas * $this->Num_piso;
            return $viviendas;
        }
    }

    $Num_piso=rand(1,100);
    $Num_puertas=rand(1,100);


    $pis1 = new Pisos(2,30);
    echo "<br>Este es el numero de viviendas: ".$pis1->obtenerviviendas();


?>