<?php


class UserSession{

public function _construct(){
    session_start();

}


public function setcurrentUser($user){
    $_SESSION['user'] = $user;


}


public function get_current_user(){
    return $_SESSION['user'];

}


public function closeSession(){

session_unset();
session_destroy();


}


}
?>