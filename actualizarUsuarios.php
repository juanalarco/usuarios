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
          $apellidos=$_POST["apellidos"];
          $edad=$_POST["edad"];
          $curso=$_POST["curso"];
          $puntuacion=$_POST["puntuacion"];
          $correo=$_POST["correo"];



// $probarconsulta="UPDATE usuarios SET nombre='.$nombre.', apellidos='.$apellidos.', edad=$edad, curso=$curso,  puntuacion=$puntuacion,  correo='.$correo.'  WHERE nombre='.$nombre.'";
// echo $probarconsulta;


          //Hacemos las consulta y las guardamos en variables

          $consulta=$mysqli->query("UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso,  puntuacion=$puntuacion,  correo='$correo'  WHERE id=$id");
          $consulta2=$mysqli->query("SELECT * FROM usuarios");

          echo "El usuario que has actualizado es: ".$nombre."<br>";
          echo "<br>";
          echo "<br>";


//Hacemos un while para mostrar los ultimos usuarios insertados
          while($actualizarUsuario=$consulta2->fetch_assoc()){
          	  echo "Usuario: ".$actualizarUsuario['nombre']."<br>";
              echo "Apellidos: ".$actualizarUsuario['apellidos']."<br>";
              echo "Edad: ".$actualizarUsuario['edad']."<br>";
              echo "curso: ".$actualizarUsuario['curso']."<br>";
              echo "Puntuacion: ".$actualizarUsuario['puntuacion']."<br>";
              echo "Correo: ".$actualizarUsuario['correo']."<br>";

               echo "<br>";
               echo "<hr>";
               echo "<br>";
        	}

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
