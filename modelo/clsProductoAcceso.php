<?php

/**
 * Description of clsProductoAcceso
 *
 * @author Beca98
 */
class clsProductoAcceso {
    //variables 
    private $conexionProductos;
    
    //métodos 
    public function __construct() {
        $this->conexionProductos = new clsConexion();
    }
    
    public function listar(){
        $sql = 'SELECT * FROM PRODUCTO';
        $consulta = $this->conexionProductos->getConexion()->query($sql);
        $listadoProductos = [];
        $iterador=0;
        while($fila = $consulta->fetch_assoc()){
            $listadoProductos[$iterador] = $fila;
            $iterador++;
        }
        return $listadoProductos;
    }
    
}
