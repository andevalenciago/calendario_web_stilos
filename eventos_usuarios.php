<?php

require 'conexion.php';

class eventos_usuarios
{
 public static function insertar_ev($Tipo,$Descripcion,$Color,$Id_Usuario,$Hora_Inicio,$Hora_fin,$Fecha)
    {
        // Sentencia INSERT


       // $consulta = "INSERT INTO eventos VALUES(?,?,?,?,?,?,?)";
		mysqli_query($conexion,"INSERT INTO eventos(Tipo,Descripcion,Color,Id_Usuario,Hora_Inicio,Hora_fin,Fecha) VALUES ('$Tipo','$Descripcion','$Color','$Id_Usuario','$Hora_Inicio','$Hora_fin','$Fecha')")
or die ("problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo $Nomb." sus datos han sido guardados ";
    }

     public  function obtener_xidsuario($idU)
    {
        // Consulta de un usuario en login
        $consulta = "SELECT * FROM eventos
                             WHERE id = ?";

        try {
            // Preparar sentencia
			$comando = Database::getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($idU,$passU));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;

        } catch (PDOException $e) {
            // Clasificar el error para presentarlo en la respuesta Json
            return -1;
        }
    }

 }
 ?>