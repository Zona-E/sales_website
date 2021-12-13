<?php

class sesionUsuario
{
    public function __construct()
    {
        session_start();
    }

    public function setCEmail($email)
    {
        $_SESSION['email'] = $email;
    }

    public function getCEmail()
    {
        return $_SESSION['email'];
    }

    public function endSession()
    {
        session_unset();
        session_destroy();
    }
}
