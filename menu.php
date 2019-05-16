<?php
$conexion = new mysqli("localhost", "root", "", "peluqueria");
#Comprobar la conexión
if ($conexion->connect_errno) {
printf("Conexión fallida: %s
", $conexion->connect_error);
exit();
}
$consulta = "INSERT INTO usuarios(ID,Nombre,Apellido,telefonos,Nombre_usuario,contraseña) VALUES('id','Nomb','Lname','tel','tel','Usu','contra')";
;
$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");
if($resultado)
{
 echo "hola mundo";
}
else
{
echo "Ha ocurrido un error";
}

?>