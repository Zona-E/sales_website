<?php

include_once('db.php');

class Usuario extends DB
{
    private $nombre;
    private $email;

    public function userExists($email, $pass)
    {
        $md5password = md5($pass);
        $SQLquery = $this->connect()->prepare('SELECT * FROM sist_users WHERE email = :email AND contraseña = :pass');
        $SQLquery->execute(['email' => $email, 'pass' => $md5password]);

        if ($SQLquery->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setEmail($email)
    {
        $SQLquery = $this->connect()->prepare('SELECT * FROM sist_users WHERE email = :email');
        $SQLquery->execute(['email' => $email]);

        foreach ($SQLquery as $cEmail) {
            $this->nombre = $cEmail['nombre'];
            $this->email = $cEmail['email'];
        }
    }

    public function getName()
    {
        return $this->nombre;
    }
}
