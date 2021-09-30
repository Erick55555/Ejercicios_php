<?php 
    class Persona {
        private $edad;
        private $altura;
        private $acompanado;

        public function __construct($edad,$altura,$acompanado) {
            $this->edad = $edad;
            $this->altura = $altura;
            $this->acompanado = $acompanado;
            echo "<br>Esta es la edad: ".$edad."<br>
            Esta es la altura: ".$altura."<br>
            Esta acompañado: ".$acompanado;
            
        }

        public function puedeSubir() {
            if($this->acompanado==false){
                if(($this->edad>10) || ($this->altura>120)){
                    return true;
                }
            }else{
                if($this->edad>=6){
                    return true;
                }
            }
        }
    }

    $edad=rand(1,6);
    $altura=rand(100,119);
    $acompanado=(bool)mt_rand(0,1);

    $per1 = new Persona($edad,$altura,$acompanado);
    if($per1->puedeSubir()){
        echo "<br>Se puede subir a la atraccion";
    }else{
        echo "<br>No se puede subir a la atraccion";
    }

?>