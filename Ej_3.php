<?php 
    class Rango_edad {
        private $edad;

        public function __construct($edad) {
            $this->edad = $edad;
            echo "<br>Esta es la edad: ".$edad;
        }

        public function cal_Rango() {
            $division= explode(".",$this->edad/10);
            $primer_dig=$division[0];
            switch($primer_dig){
                case 0:
                    return "<br>El rango de edad esta entre 0-10";
                    break;
                case 1:
                    return "<br>El rango de edad esta entre 10-20";
                    break;
                case 2:
                    return "<br>El rango de edad esta entre 20-30";
                    break;
                case 3:
                    return "<br>El rango de edad esta entre 30-40";
                    break;
                case 4:
                    return "<br>El rango de edad esta entre 40-50";
                    break;
                case 5:
                    return "<br>El rango de edad esta entre 50-60";
                    break;
                case 6:
                    return "<br>El rango de edad esta entre 60-70";
                    break;
                case 7:
                    return "<br>El rango de edad esta entre 70-80";
                    break;
                case 8:
                    return "<br>El rango de edad esta entre 80-90";
                    break;
                case 9:
                    return "<br>El rango de edad esta entre 90-100";
                    break;
            }
        }
    }

    $edad=rand(1,100);

    $edad1 = new Rango_edad($edad);
    echo $edad1->cal_Rango();


?>