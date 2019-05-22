<html>
  <head>
    <title>buscar</title>
    <meta charset="utf-8">

  </head>
  <body>
    <h2>Datos del cliente</h2>

  <?php

    include ('conexion.php');
    $usuarios = mysqli_query ($conexion," SELECT * FROM usuarios WHERE ID = ($_REQUEST [txt_id]") 
    or die ("problemas en el select ".mysqli_error($conexion));

  ?>

  <table borde=1px>
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
  </body>
</html> 



