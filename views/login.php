<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    



    
</body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form action="" method="POST">
        <?php
        if (isset($errorLogin)) {
            echo $errorLogin;
        }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
            <input type="text" name="username">
        </p>
        <p>Password: <br>
            <input type="password" name="password">
        </p>

        <p>Aun no te haz registrado? <a href="/views/Registro.php">Regristate aqui.</p>

        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>

    


</body>

</html>