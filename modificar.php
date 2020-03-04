<!DOCTYPE html>
<html>
<head>
  <title>Guardar</title>
</head>
<body bgcolor="CDC8C8" >
  <center>
    <?php
      //Declara variable ID
        $id=$_REQUEST['id'];
        //Hace conexión con la base de datos
        include("conexion.php");
        //Selecciona la ID de la tabla usuarios para modificar a partir de ella
        $query="SELECT * FROM Usuarios WHERE id='$id'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
      ?>
      <!--Hace conexión con el proceso de moficiar-->
    <form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
      <!--Inputs anteriormente escritos a modificar-->
      <br/><br/><br/>
      <input type="text" required name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" /><br/><br/>
      <input type="text" required name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>" /><br/><br/>
      <input type="text" required name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>" /><br/><br/>
      <input type="submit" value="aceptar" />
    </form>
  </center>
</body>
</html>
