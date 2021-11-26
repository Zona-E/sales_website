<?php

include_once 'models/usuario.php';
include_once 'models/sesion_usuario.php';

$sesionUsuario = new sesionUsuario();
$usuario = new Usuario();

if (isset($_SESSION['email'])) {
    $usuario->setEmail($sesionUsuario->getCEmail());
    include_once 'views/home.php';
} else if (isset($_POST['Correo_Electronico']) and isset($_POST['Contraseña'])) {
    $email = $_POST['Correo_Electronico'];
    $contraseña = $_POST['Contraseña'];

    if ($usuario->userExists($email, $contraseña)) {
        $sesionUsuario->setCEmail($email);
        $usuario->setEmail($email);

        include_once 'views/home.php';
    } else {
        $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
        include_once 'views/login.php';
    }
} else {
    include_once 'views/login.php';
}
