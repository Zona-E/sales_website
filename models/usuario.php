<?php

include_once('db.php');

class Usuario extends DB
{
    private $nombre;
    private $nickname;

    public function userExists($user, $pass)
    {
        $md5password = md5($pass);
        $SQLquery = $this->connect()->prepare('SELECT * FROM sist_users WHERE nickname = :user AND contraseña = :pass');
        $SQLquery->execute(['user' => $user, 'pass' => $md5password]);

        if ($SQLquery->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user)
    {
        $SQLquery = $this->connect()->prepare('SELECT * FROM sist_users WHERE nickname = :user');
        $SQLquery->execute(['user' => $user]);

        foreach ($SQLquery as $cUser) {
            $this->nombre = $cUser['nombre'];
            $this->nickname = $cUser['nickname'];
        }
    }

    public function getName()
    {
        return $this->nombre;
    }
}
