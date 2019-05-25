<?php

include ('conexion.php');


    // Manejar petición GET
    $fecha = $_POST["fecha"];
    $hora_ini = $_POST["H_ini"];
    $hora_fin = $_POST["H_fin"];
    $tipo_evento = $_POST["clase_evento"];
    $id_cliente = $_POST["id_cliente"];
    $descrip = $_POST["descripcion"];


        switch ($tipo_evento) {
    case "cita":
        $Color = "#1EB412";
        break;
    case "reunion":
        $Color = "#3568F0";
        break;
    case "interno":
        $Color = "#AB19EF";
    case "importante":
        $Color = "#F86045";
        break;}

        $hora_ini =  $fecha. " ". $hora_ini.  ":00.000000";
        $hora_fin =  $fecha. " ". $hora_fin.  ":00.000000";
          

$SQL ="INSERT INTO eventos VALUES ('$tipo_evento','$descrip','$Color','$id_cliente','$hora_ini','$hora_fin','$fecha')";


$guardar= $conexion->query($SQL);

if(!$guardar){
    echo "error";
}else{
    echo "Guardado";

}
   

?>