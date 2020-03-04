<!DOCTYPE html>
<html>
<head>
  <!--Titulo.-->
  <title>Registro</title>
</head>
<!--Boddy, con el color de fondo naranja.-->
<body bgcolor="CDC8C8" >
  <center >
    <!--Hace conexión con "Operacion_guardar.php"-->
    <!--El [Method="POST"] envia los datos. -->
    <form action="operacion_guardar.php" method="POST">
    </br></br></br></br></br></br>
          <h3><font face="Arial">Ingrese los datos</h3>
      <!--Acá están los textos donde vamos a introducir el nombre, apellido y el correo, más un botón para registrarse en la base de datos.-->
      <input type="text" required name="nombre" placeholder="Nombre" value="" /><br/><br/>
      <input type="text" required name="apellido" placeholder="Apellido" value="" /><br/><br/>
      <input type="email" required name="correo" placeholder="Correo" value="" /><br/><br/>
      <input type="submit" value="Registrarse" />
    </form>
  </center>
</body>
</html>
