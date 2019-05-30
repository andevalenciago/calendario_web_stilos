<?php
  if(!empty($_POST['Usu']) && (!empty($_POST['contra1'])) && (!empty($_POST['contra2']))){
  include_once "conexion.php";

   $id=$_REQUEST['id'];
   $Nomb=$_REQUEST['Nomb'];
   $Lname=$_REQUEST['Lname'];
   $tel=$_REQUEST['tel'];

   $usuario=htmlentities($_POST['Usu']);
   $contra1=htmlentities($_POST['contra1']);
   $contra2=htmlentities($_POST['contra2']);
        
   $usuario=mysqli_real_escape_string($conexion,$usuario);
   $contra1=mysqli_real_escape_string($conexion,$contra1);
   $contra2=mysqli_real_escape_string($conexion,$contra2);
        
  if($contra1===$contra2){
     $sql_verificar_reg="SELECT Nombre_usuario FROM usuarios WHERE Nombre_usuario= '".$usuario."'";
     $verificar_reg=mysqli_query($conexion, $sql_verificar_reg);
  if($verificar_reg->num_rows>0){
?>
     
<a href="registro.php" class="btn btn-primary">No se pudo realizar el registro debido a que el Usuario ya esta registrado.</a>
<?php
   }else{
      $contra1=password_hash($contra1,PASSWORD_DEFAULT);
      $sql="INSERT INTO usuarios (ID,Nombre,Apellido,telefonos,Nombre_usuario,contrasena) VALUES ('".$id."','".$Nomb."','".$Lname."','".$tel."','".$usuario."','".$contra1."')";
      $verificar=mysqli_query($conexion, $sql);
    if($verificar){
?>
<a href="login.php" class="btn btn-primary">Registro completo, inicia sesi&oacute;n</a>
<?php
   }else{
?>
<a href="registro.php" class="btn btn-primary">No se pudo realizar el registro intentalo de nuevo</a>
<?php
 }
  }
  }else{
?>
<a href="registro.php" class="btn btn-primary">Las contrase&ntilde;as no son iguales</a>
 <?php
   }
   mysqli_close($conexion);
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--jquery-->
</head>
<body class="bg-dark p-3">
    <div class="container bg-light p-3 ">
        <form action="#" method="post" onsubmit="return validar_contrasena();">
           <div class="form-group">
               <h2 class="title">Registrarse</h2>
           </div>

  <div class="form-group">
    <label for="userID">Id</label>
    <input type="text" class="form-control" name="id" id="id" aria-describedby="idHelp" placeholder="Ingrese su identificaci&oacute;n" required>
  </div>

  <div class="form-group">
    <label for="userNomb">Nombre</label>
    <input type="text" class="form-control" name="Nomb" id="Nomb" aria-describedby="NombHelp" placeholder="Nombre" required>
  </div>

  <div class="form-group">
    <label for="userLa">Apellidos</label>
    <input type="text" class="form-control" name="Lname" id="Lname" aria-describedby="LnameHelp" placeholder=" apellidos" required>
  </div>

  <div class="form-group">
    <label for="userT">Telefono</label>
    <input type="tel" class="form-control" name="tel" id="tel" aria-describedby="telHelp" placeholder="telefono" required>
  </div>

  <div class="form-group">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" name="Usu" id="Usu" aria-describedby="UsuHelp" placeholder="Usuario" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contrase&ntilde;a</label>
    <input type="password" class="form-control" name="contra1" id="contra1" placeholder="Contrase&ntilde;a" required>
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Confirma tu contrase&ntilde;a</label>
    <input type="password" class="form-control" name="contra2" id="contra2" placeholder="Confirma tu contrase&ntilde;a" required>
  </div>
  <button type="submit" class="btn btn-info">Registrarse</button>
<a class="btn btn-primary btn-outline-primary " href="login.php">Iniciar sesi&oacute;n</a>
</form>
        
</div>
<script>
  function validar_contrasena(){
    var contra1=$("#contra1").val();
    var contra2=$("#contra2").val();
 if(pass1!=pass2){
    alert("Las contraseñas deben ser iguales");
  return false;
     }
  }
</script>
</body>
</html>