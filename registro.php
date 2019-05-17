<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                       <h1 class="display-4">Registro</h1>
                       <hr class="bg-info">
                       <p class=  "pb-0 mb-0">Llena los campos requeridos</p>
                       <p class= "text-danger small pt-0 mt-0">Todos los campos son obligatorios</p>
                       <form class="sing-in" method="post" action="guardado.php" >
                            <div class="row form-group">
                                    <label for="user" class="col-form-label col-md-4">Tipo de usuario</label>
                                    <div class="col-md-8 pb-0 mb-0">
                            <select name="cars" required>
                                    <option value="admin">Admin</option>
                                    <option value="Colab">Colaborador</option>
                                    <option value="Client">Cliente</option>
                            </select>
                            </div>
                            </div>
                            <div class="row form-group">
                               <label for="user" class="col-form-label col-md-4">Id</label>

                               <div class="col-md-8 pb-0 mb-0">
                                   <input type="text" name="id" id = "id" class="form-control" required="Por favor escribe el usuario">
                               </div>
                           </div>
                           <div class="row form-group">
                               <label for="user" class="col-form-label col-md-4">Nombre</label>

                               <div class="col-md-8 pb-0 mb-0">
                                   <input type="text" name="Nomb" id = "Nomb" class="form-control" required="Por favor escribe el usuario">
                               </div>
                           </div>
                           <div class="row form-group">
                               <label for="user" class="col-form-label col-md-4">Apellidos</label>

                               <div class="col-md-8 pb-0 mb-0">
                                   <input type="text" name="Lname" id = "Lname" class="form-control" required>
                               </div>
                           </div>
                           <div class="row form-group">
                                <label for="user" class="col-form-label col-md-4">Teléfono</label>
 
                                <div class="col-md-8 pb-0 mb-0">
                                    <input type="tel" name="tel" id = "tel" class="form-control" required pattern="([0-9]{3}[0-9]{2}[0-9]{2})|([0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2})">
                                </div>
                            </div>
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
                                   <button   onclick="location.href='">Registrar</button>
                               </div>

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