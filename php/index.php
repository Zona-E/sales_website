<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();



if(isset($_SESSION['user'])){

echo 'Hay sesion';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo 'Validacion de login';

    $userform = $_POST['username'];
    $passform = $_POST['password'];

    if($user ->userExists($userform, $passform)){
        echo "usuario valido";

    }else{

            echo 'Usuario jodio';
    }

}else{
    //echo 'login';

    include_once 'login.php';
}


?>