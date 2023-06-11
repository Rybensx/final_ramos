<?php
require_once 'Conexion.php';

class Empleado extends Conexion{
    public $emp_id;
    public $emp_nom1;
    public $emp_nom2;
    public $emp_ape1;
    public $emp_ape2;
    public $emp_dpi;
    public $emp_edad;
    public $emp_puesto_id;
    public $emp_sexo_id;
    public $emp_situacion;


    public function __construct($args = [] )
    {
        $this->emp_id = $args['emp_id'] ?? null;
        $this->emp_nom1 = $args['emp_nom1'] ?? '';
        $this->emp_nom2 = $args['emp_nom2'] ?? '';
        $this->emp_ape1 = $args['emp_ape1'] ?? '';
        $this->emp_ape2 = $args['emp_ape2'] ?? '';
        $this->emp_dpi = $args['emp_dpi'] ?? '';
        $this->emp_edad = $args['emp_edad'] ?? '';
        $this->emp_puesto_id = $args['emp_puesto_id'] ?? '';
        $this->emp_sexo_id = $args['emp_sexo_id'] ?? '';
        $this->emp_situacion = $args['emp_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO empleados(emp_nom1, emp_nom2, emp_ape1, emp_ape2, emp_dpi, emp_edad, emp_puesto_id, emp_sexo_id) values('$this->emp_nom1','$this->emp_nom2', '$this->emp_ape1', '$this->emp_ape2', '$this->emp_dpi', '$this->emp_edad', '$this->emp_puesto_id', '$this->emp_sexo_id')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from empleados where emp_situacion = 1 ";

        if($this->emp_nom1 != ''){
            $sql .= " and emp_nom1 like '%$this->emp_nom1%' ";
        }

        if($this->emp_nom2 != ''){
            $sql .= " and emp_nom2 like '%$this->emp_nom2%' ";
        }

        if($this->emp_ape1 != ''){
            $sql .= " and emp_ape1 like '%$this->emp_ape1%' ";
        }

        if($this->emp_ape2 != ''){
            $sql .= " and emp_ape2 like '%$this->emp_ape2%' ";
        }

        if($this->emp_dpi != ''){
            $sql .= " and emp_dpi = $this->emp_dpi ";
        }

        if($this->emp_edad != ''){
            $sql .= " and emp_edad = $this->emp_edad ";
        }

        if($this->emp_puesto_id != ''){
            $sql .= " and emp_puesto_id = $this->emp_puesto_id ";
        }

        if($this->emp_sexo_id != ''){
            $sql .= " and emp_sexo_id = $this->emp_sexo_id ";
        }

        if($this->emp_id != null){
            $sql .= " and emp_id = $this->emp_id ";
        }
            $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE empleados SET emp_nom1 = '$this->emp_nom1', emp_nom2 = '$this->emp_nom2', emp_ape1 = '$this->emp_ape1', emp_ape2 = '$this->emp_ape2', emp_dpi = '$this->emp_dpi', emp_edad = '$this->emp_edad', emp_puesto_id = '$this->emp_puesto_id', emp_sexo_id = '$this->emp_sexo_id', emp_situacion = '$this->emp_situacion' where emp_id = $this->emp_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE empleados SET emp_situacion = 0 where emp_id = $this->emp_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
