<?php
/**
 * Description cerrarSesion
 *
 * @author Beca98
 */
session_start(); 
    session_unset();
    session_destroy();
    header("location: ../index.php");
?>