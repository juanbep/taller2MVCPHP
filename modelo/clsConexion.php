<?php


/**
 * Description of clsConexion
 *
 * @author Beca98
 */
class clsConexion {
    //put your code here
    
    //variables
    private $conexion;

    //método de conexión
    public function __construct() {
        $this->conexion = new mysqli('localhost','root','','bdusuarios');
    }
    
    public function getConexion(){
        return $this->conexion;
    }
}
