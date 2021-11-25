<?php

  require '../models/db.php'; //FALLOS CON LA CONEXION.

  $message = '';

  if (!empty($_POST['Nombre']) &&!empty($_POST['Nombre']) && !empty($_POST['Contraseña'])) {
    $sql = "INSERT INTO Registro VALUES (:Nombre, :Correo_Electornico, :Contraseña)";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':Nombre', $_POST['Nombre']);
    $stmt->bindParam(':Correo_Electronico', $_POST['Correo Electronico']);
    $password = password_hash($_POST['Contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':Contraseña', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

   
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro</h1>
    <span>O <a href="/views/login.php">Login</a></span>

    <form action="Registro.php" method="POST">
    <input name="Nombre" type="text" placeholder="Escribe tu nombre">
      <input name="Correo Electronico" type="text" placeholder="Escribe tu correo">
      <input name="Contraseña" type="password" placeholder="Escribe tu clave">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>