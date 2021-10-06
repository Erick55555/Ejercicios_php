<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej_1</title>
</head>
<body>
    <form method="get">
    <label>Numero de piso:</label>
    <input type="text" name="piso"><br><br>
    <label>Numero de puerta:</label>
    <input type="text" name="puerta"><br><br>
    <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>


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

    if(isset($_GET["piso"]) && isset($_GET["puerta"])){
        $Num_piso= $_GET["piso"];
        $Num_puertas= $_GET["puerta"];
    }
    

    $pis1 = new Pisos($Num_piso,$Num_puertas);
    echo "<br>Este es el numero de viviendas: ".$pis1->obtenerviviendas();


?>