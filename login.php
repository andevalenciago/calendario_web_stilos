<!DOCTYPE html>
<html>
 <head>
    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>LOGIN ADMIN</title>
<link rel="stylesheet" href="stiloL.css">
</head>
<body id="cuerpo" style="padding-right: 340" >
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="container" >
               <div class="row justify-content-center">
                   <div class="col-md-7">
                       <h1 class="display-4">Login</h1>
                       <hr class="bg-info">
                       <p class=  "pb-0 mb-0">Inicia sesión con tu nombre de usuario y contraseña</p>
                       <p class= "text-danger small pt-0 mt-0">*Todos los campos son obligatorios</p>

                       <form class="sing-in" method="post" action="menu.php" >
                           <div class="row form-group">
                               <label for="user" class="col-form-label col-md-4">Usuario</label>

                               <div class="col-md-8 pb-0 mb-0">
                                   <input type="text" name="Usu" id = "Usu" class="form-control" required="Por favor escribe el usuario">
                               </div>
                           </div>
                           <div class="row form-group">
                               <label for="contra" class="col-form-label col-md-4" value = "contra">Contraseña</label>

                               <div class="col-md-8">
                                   <input type="password" name="contra" id = "contra" class="form-control" required="Ingresa la contraseña">
                               </div>
                           </div>
                           <div class="row form-group"> 
                               <div class="col-md-4">  
                               </div>
                               <div class="col-md-8">
                                   <button name="button0" onclick="location.href='">Iniciar</button><br><br>
                               </div>
                           </div>
                       </form>
                       <form class="sing-in" method="post" action="registro.php" >
                           <div class=center>
                       <div class="col-md-8">
                             <button name="button1" onclick="location.href='">Registrarse</button>  
                         </div>
                        </form>
                   </div>
               </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>