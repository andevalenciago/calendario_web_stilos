<?php

include ('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Manejar petición GET
    $fecha = $_GET["fecha"];
    $hora_ini = $_GET["H_ini"];
    $hora_fin = $_GET["H_fin"];
    $tipo_evento = $_GET["clase_evento"];
    $id_cliente = $_GET["id_cliente"];
    $descrip = $_GET["descripcion"];


        switch ($tipo_evento) {
    case "cita":
        $Color = "1EB412";
        break;
    case "reunion":
        $Color = "3568F0";
        break;
    case "interno":
        $Color = "AB19EF";
    case "importante":
        $Color = "F86045";
        break;
$SQL ="INSERT INTO eventos VALUES ($tipo_evento,$descrip,$Color,$id_cliente,$Hora_ini,$Hora_fin,$fecha)";

$conexion->execute($SQL);

echo "string";
   }
}
?>