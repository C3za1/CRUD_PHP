<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables nombre, apellido, correo
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $correo= $_POST['correo'];
//Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO usuarios(nombre,apellido,correo) VALUES('$nombre','$apellido','$correo')";
//Abre conexión
  $resultado= $conexion->query($query);
//Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: tabla.php");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Insercion no exitosa";
  }

?>
