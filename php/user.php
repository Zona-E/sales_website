<?php

include_once 'conexion.php';

class User extends DB{


private $nombre;
private $username;


public function userExists($user,$pass){

$md5pass = md5($pass);

$query = $this -> connect()->prepare('SELECT * FROM usuario WHERE username = :user AND password = :pass ');
$query-> execute (['user' => $user, 'pass' => $md5pass]);


if($query->rowcount()){

    return true;
}else{
    return false;
}





 }


public function setUser($user){

    $query = $this->connect()->preapre('SELECT * FROM usuarios WHERE username = :user');
    $query->execute(['user' => $user]);
    


    foreach ($query as $currentUser) {
        $this-> nombre = $currentUser['nombre'];
        $this->username = $currentUser['username'];


    }


}


    public function getNombre(){
        return $this->nombre;


    }




}



?>