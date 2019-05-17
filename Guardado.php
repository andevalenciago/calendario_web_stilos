<!doctype html>
<html>
<head><title>datos</title>
</head>
<body>
<form>
<?php
include ('conexion.php');
$id=$_REQUEST['id'];
$Nomb=$_REQUEST['Nomb'];
$Lname=$_REQUEST['Lname'];
$tel=$_REQUEST['tel'];
$Usu=$_REQUEST['Usu'];
$contra=$_REQUEST['contra'];


mysqli_query($sql,"INSERT INTO usuarios(ID,Nombre,Apellido,telefonos,Nombre_usuario,contraseña) VALUES ('$id','$Nomb','$Lname','$tel','$Usu','$contra')")
or die ("problemas en el select".mysqli_error($sql));
mysqli_close($sql);
echo $Nomb;

?>
</form>
</body>
</html>