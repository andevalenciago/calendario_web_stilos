<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bus_sty.css">
</head>
<body>
<h2>Ingrese el id del cliente</h2>
<form action="busqueda.php" method="post">
  <input type="text" placeholder="Search.." name="txt_id">
  <button type="submit"><i class="fa fa-search"></i></button>

  <?php

    include ('conexion.php');
    $usuarios = mysqli_query ($conexion,"SELECT * FROM usuarios WHERE ID = $_REQUEST [txt_id]") 
    or die ("problemas en el select ".mysqli_error($conexion));

  ?>

  <table class= "table table-dark">
    <thead>
     <tr>
      <th scope="col"> id </th>
      <th scope="col"> Nombre </th>
      <th scope="col"> Apellidos </th>
      <th scope="col"> Telefono </th>
      <th scope="col"> usuario </th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($fila=mysqli_fethc_array($usuarios))
  {
    echo "<tr>";
    echo "<td>$fila[ID]</td>";
    echo "<td>$fila[Nombre]</td>";
    echo "<td>$fila[Apellido]</td>";
    echo "<td>$fila[telefonos]</td>";
    echo "<td>$fila[Nombre_usuario]</td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
</form>

</body>
</html> 