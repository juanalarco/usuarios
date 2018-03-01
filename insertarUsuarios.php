<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulario</title>
  </head>
  <body>

    <form action="mostrarUsuarios.php" method="post">

      	Nombre:<br>
      	<input type="text" name="nombre">

        <br><br>

      	Apellidos:<br>
      	<input type="text" name="apellidos">

      	<br><br>

        Edad:<br>
        <input type="text" name="edad">

        <br><br>

        Curso:<br>
      	<input type="text" name="curso">

      	<br><br>

        Puntuacion:<br>
      	<input type="text" name="puntuacion">

      	<br><br>



      	<input type="submit" value="Insertar"> <br><br>

        </form>

        <form action="actualizarUsuariosForm.php">
          <input type="submit" value="Actualizar">
        </form>
<br>
        <form action="borrarUsuariosForm.php">
          <input type="submit" value="Borrar">
        </form>





  </body>
</html>
