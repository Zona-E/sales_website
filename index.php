<?php

include_once 'models/usuario.php';
include_once 'models/sesion_usuario.php';

$sesionUsuario = new sesionUsuario();
$usuario = new Usuario();

if (isset($_SESSION['user'])) {
    $usuario->setUser($sesionUsuario->getCUser());
    include_once 'views/home.php';
} else if (isset($_POST['username']) and isset($_POST['password'])) {
    $nickname = $_POST['username'];
    $contraseña = $_POST['password'];

    if ($usuario->userExists($nickname, $contraseña)) {
        $sesionUsuario->setCUser($nickname);
        $usuario->setUser($nickname);

        include_once 'views/home.php';
    } else {
        $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
        include_once 'views/login.php';
    }
} else {
    include_once 'views/login.php';
}
