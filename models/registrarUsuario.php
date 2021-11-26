<?php
include "db.php";

// RECIBIMOS LOS DATOS
$nombre = $_POST['Nombre'];
$email = $_POST['Correo_Electronico'];
$pass = $_POST['Contraseña'];

$db = new DB();
$query = $db->connect()->prepare("INSERT INTO sist_users (nombre, email, contraseña) VALUES (:nombre, :email, :pass)");

$query->execute(array(
    ':nombre' => $nombre,
    ':email' => $email,
    ':pass' => md5($pass)
));

// $query2 = $con->prepare("INSERT INTO hijo (hi_ID, pa_ID, hi_NOMBRE) VALUES(null, :pa_ID, :hi_NOMBRE)");

// $query2->execute(array(
//     ':pa_ID' => $con->lastInsertID(),
//     ':hi_NOMBRE' => $hi_NOMBRE,
// ));

header("Location: ../index.php");
