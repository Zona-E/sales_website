<?php
include_once 'sesion_usuario.php';

$sesionUsuario = new sesionUsuario();
$sesionUsuario->endSession();

header("Location: ../index.php");