<!DOCTYPE html>
<html>
<head>
  <title>Tabla de usuarios</title>
</head>
<body bgcolor="CDC8C8" >
    <center>
        </br></br></br></br></br></br>
        <table bgcolor="#A9BCF5" border="4" >
            <thead>
                <tr>
                  <!--Acá usamos un href para crear un nuevo registro-->
                    <th colspan="1"><a href="formulario.php">Nuevo</a></th>
                    <th colspan="5">Lista de usuarios</th>
                </tr>
            </thead>
            <!--Se siguen añadiendo valores a la tabla de HTML (los correspondientes a nuestra base de daots)-->
            <tbody>
                <tr>
                  <td>ID</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Correo</td>
                  <td colspan="2">Operaciones</td>

                </tr>
            <?php
            //Hace conexión con la base de datos
                include("conexion.php");
            //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                $query="SELECT * FROM Usuarios";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['apellido']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <!--Se crea un href para los botones Modificar y Eliminar-->
                  <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                  <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>

                </tr>
            <?php
                }
            ?>

            </tbody>
        </table>
    </center>
</body>
</html>