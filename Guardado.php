<!doctype html>
<html>
<head>
<title>datos</title>
<link rel="stylesheet" href="estiloL.css">
</head>
<body>
<form method="post"action="/carpetas/index.html">
<?php
include ('conexion.php');
$cars=$_REQUEST['cars'];
$id=$_REQUEST['id'];
$Nomb=$_REQUEST['Nomb'];
$Lname=$_REQUEST['Lname'];
$tel=$_REQUEST['tel'];
$Usu=$_REQUEST['Usu'];
$contra=$_REQUEST['contra'];

mysqli_query($conexion,"INSERT INTO usuarios(ID,Nombre,Apellido,telefonos,Nombre_usuario,contrasena,tipo_usuario) VALUES ('$id','$Nomb','$Lname','$tel','$Usu','$contra','$cars')")
or die ("problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo $Nomb." sus datos han sido guardados ";
?>



<br>
<input type="submit" name="A_Citas" value="Asignar citas">
</form>
</body>
</html>