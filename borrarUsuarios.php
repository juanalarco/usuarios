<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de conexion</title>
  </head>
  <body>

    <?php
    // conexion a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
        }else {

          //Hacemos variabes para los $_POST
          $id=$_POST["id"];
          $nombre=$_POST["nombre"];



// $probarconsulta="UPDATE usuarios SET nombre='.$nombre.', apellidos='.$apellidos.', edad=$edad, curso=$curso,  puntuacion=$puntuacion,  correo='.$correo.'  WHERE nombre='.$nombre.'";
// echo $probarconsulta;


          //Hacemos las consulta y las guardamos en variables

          $consulta=$mysqli->query("DELETE FROM usuarios WHERE id=$id");
          $consulta2=$mysqli->query("SELECT * FROM usuarios");

          echo "El usuario que has borrado es: ".$nombre."<br>";
          echo "<br>";
          echo "<br>";




    }
    ?>

    <form action="insertarUsuarios.php">
      <input type="submit" value="Volver a insertar">
    </form>
    <br> <br>
    <form action="actualizarUsuariosForm.php">
      <input type="submit" value="Volver a actualizar">
    </form>


  </body>
</html>
