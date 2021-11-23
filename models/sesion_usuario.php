<?php

class sesionUsuario
{
    public function __construct()
    {
        session_start();
    }

    public function setCUser($user)
    {
        $_SESSION['user'] = $user;
    }

    public function getCUser()
    {
        return $_SESSION['user'];
    }

    public function endSession()
    {
        session_unset();
        session_destroy();
    }
}
