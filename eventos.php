<?php

header('Content-Type: application/json');

$pdo =  new PDO("mysql:dbname=peluqueria;host=localhost","root", "1017196928");

//seleccionar los eventos del calendario
$sql = $pdo->prepare("SELECT * FROM eventos");

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);// necesitamos esto como arreglo para darselo de recurso al calendario  en (sources)
?>