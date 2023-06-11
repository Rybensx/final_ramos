<?php
require_once 'Conexion.php';

class Puesto extends Conexion{
    public $puesto_id;
    public $puesto_descr;
    public $puesto_suel;
    public $puesto_situacion;

    public function __construct($args = [] )
    {
        $this->puesto_id = $args['puesto_id'] ?? null;
        $this->puesto_descr = $args['puesto_descr'] ?? '';
        $this->puesto_suel = $args['puesto_suel'] ?? '';
        $this->puesto_situacion = $args['puesto_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO puestos(puesto_descr, puesto_suel) values('$this->puesto_descr','$this->puesto_suel')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from puestos where puesto_situacion = '1' ";

        if($this->puesto_descr != ''){
            $sql .= " and puesto_descr like '%$this->puesto_descr%' ";
        }

        if($this->puesto_suel != null){
            $sql .= " and puesto_suel = $this->puesto_suel ";
        }

        if($this->puesto_id != null){
            $sql .= " and puesto_id = $this->puesto_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE puestos SET puesto_descr = '$this->puesto_descr', puesto_suel = $this->puesto_suel where puesto_id = $this->puesto_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE puestos SET puesto_situacion = '0' where puesto_id = $this->puesto_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}