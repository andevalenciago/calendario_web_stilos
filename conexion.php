<?php

/* Datos de conexion a la base de datos
$servidor='localhost';
$usuario='root';
$pass='1017196928';
$bd='calendario';*/

$servidor='localhost';
$usuario='id9509155_and';
$pass='1017196928';
$bd='id9509155_calendario';


// Nos conectamos a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

$conexion->set_charset('utf8');

// verificamos si hubo algun error y lo mostramos
if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}


?>
