<?php

require '../models/db.php';


$nombre = $_POST['Nombre'];
$email = $_POST['Corre_Electronico'];
$Contraseña = $_POST['Contraseña'];


$insertar = "INSERT INTO Registro (Nombre, Correo_Electronico, Contraseña) VALUES ('$nombre, $email, $Contraseña')";

$query = mysqli_query($connection, $insertar);

if($query){

    echo "Correcto";

}else{

    echo "Incorrecto";
}


?>