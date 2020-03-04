<?php
//Hace conexión con la base de datos
include("conexion.php");
//Hace la variable "ID"
  $id= $_REQUEST['id'];
//Selecciona a usuarios a partir de la ID para evitar borrar en cuyo caso haya datos repetidos (ya que la ID no se repite)
  $query="DELETE FROM usuarios WHERE id='$id'";
  //Acá nos dice básicamente que si todo sale bien nos va a llevar a la tabla donde vamos a ver que el usuario se eliminó con exito
  $resultado= $conexion->query($query);
  if($resultado){
    header("Location: tabla.php");
  }
  //Si la conexión falla nos aparecerá el siguiente error
  else{
    echo "Insercion no exitosa";
  }

?>
