<?php
    session_start();
    if(isset($_SESSION['user'])){
?>
<html lang="ES" >
        <head>
            <meta charset="utf-8"/>
            <title>Mi web</title>
            <link rel="preconnect" href="https://fonts.gstatic.com"/>
            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"/>
            <link rel="stylesheet" type="text/css" href="css/infUsuario.css"/>
        </head>
        <body>
            <nav>
                <ul>
                    <li class= "item-r">
                            <a href="../controlador/cerrarSesion.php">CERRAR SESIÓN</a>
                    </li>
                    <li class= "item-r">
                            <a href="">INFORMACIÓN USUARIO</a>
                    </li>
                    <li class= "item-r">
                            <a href="../index.php">LISTAR PRODUCTOS</a>
                    </li>
                    <h2>Tienda Online</h2>
                </ul>
            </nav>
            <img id=imgFondo src="recursos/users.png"/>
            <h1 id="info">Información Usuario</h1>
            <h1 id = datos1>Nombre: </h1>
            <h1 id = datos2><?php echo $_SESSION['user']['nombre']?></h1>
            <h1 id = datos1>Rol: </h1>
            <h1 id = datos2><?php echo $_SESSION['user']['rol']?></h1> 
        </body>
</html>
<?php
    }else{
        header("location: ../index.php");
    }
?>
