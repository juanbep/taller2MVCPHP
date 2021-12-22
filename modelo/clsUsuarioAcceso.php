<?php

include ("modelo/clsConexion.php");
/**
 * Description of clsUsuarioAcceso
 *
 * @author Beca98
 */
class clsUsuarioAcceso {

   
    //variables 
    private $conexion;
    private $nombre;
    private $rol;
    
    //métodos 
    public function __construct() {
        $this->conexion = new clsConexion();
    }
    
   
    public function validarCredenciales ($user, $password){
        $sql = "SELECT * FROM usuario WHERE usuario = '".$user."' and clave='".$password."'";
        $consulta = $this->conexion->getConexion()->query($sql);
        while($fila = $consulta->fetch_assoc()){
            $this->nombre = $fila['nombre'];
            $this->rol = $fila['rol'];
            return true;
        }
        return FALSE;
    }
    
   
    public function getNombre (){
        return $this->nombre;
    }
    
    public function getRol () {
        return $this->rol;
    }
    
}
