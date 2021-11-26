
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="#">
  </head>
  <body>



    <h1>Registro</h1>
    <span>O <a href="../index.php">Login</a></span>

    <form action="../models/Guardar.php" method="POST">
    <input name="Nombre" type="text" placeholder="Escribe tu nombre">
      <input name="Correo_Electronico" type="text" placeholder="Escribe tu correo">
      <input name="Contraseña" type="password" placeholder="Escribe tu clave">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>