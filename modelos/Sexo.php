<?php
require_once 'Conexion.php';

class Sexo extends Conexion{
    public $sexo_id;
    public $sexo_descr;

    public function __construct($args = [] )
    {
        $this->sexo_id = $args['sexo_id'] ?? null;
        $this->sexo_descr = $args['sexo_descr'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO sexo(sexo_descr) values('$this->sexo_descr')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from sexo ";
    
        if($this->sexo_descr != ''){
            $sql .= " WHERE sexo_descr LIKE '%$this->sexo_descr%' ";
        }

        if($this->sexo_id != null){
            $sql .= " and sexo_id = $this->sexo_id ";
        }

    
        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE sexo SET sexo_descr = '$this->sexo_descr' where sexo_id = $this->sexo_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "DELETE FROM sexo WHERE sexo_id = $this->sexo_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
