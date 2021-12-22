<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="utf-8"/>
        <title>َLogin</title>
        <link rel="stylesheet" type="text/css" href="vista/css/inicioSesion.css"/>
    </head>
    <?php
    if(isset($error)){
    ?>
    <body onload="window.alert('Usuario y/o contraseña incorrecta');">
    <?php
    }   
    ?>
        <form class="box" action="" method="post">
            <h1>Iniciar Sesión</h1>
            <input type="text" name="username" placeholder="Username" id="username" required/>
            <input type="password" name="password" placeholder="Password" id="password" required/>
            <input type="submit" name="submit" value="login"/>
        </form>
    </body>
</html>
