<?php
/**
 * Description of iniciarSesion
 *
 * @author Beca98
 */
session_start();
require("modelo/clsUsuarioAcceso.php");

clsUsuarioAcceso: $user  = new clsUsuarioAcceso();


if(!empty($_SESSION['user'])){
    
    require("modelo/clsProductoAcceso.php");
    $datos = new clsProductoAcceso();
    $listadoProductos = $datos->listar();
    require('vista/paginaProductos.php');
    
    
}
else if (isset ($_POST ['username']) && isset ($_POST ['password'])){ 
    
    $userLogin = $_POST ['username'];
    $passwordLogin = $_POST ['password'];
    if($user->validarCredenciales($userLogin, $passwordLogin)){
        
        $_SESSION['user'] = array();
        $_SESSION['user']['usuario'] = $userLogin;
        //$user->info($userLogin);
        $_SESSION['user']['nombre'] = $user->getNombre();
        $_SESSION['user']['rol'] =$user->getRol();
       
        //$userSession->setUser($userLogin);
        require("modelo/clsProductoAcceso.php");
        $datos = new clsProductoAcceso();
        $listadoProductos = $datos->listar();
        require('vista/paginaProductos.php');

    }
    else{
        $error = "";
        require("vista/inicioSesion.php");
    }
}else{
    
    require("vista/inicioSesion.php");
}

