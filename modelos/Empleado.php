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
        $sql = "SELECT * from empleados where emp_situacion = 1";

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

    // public function buscar(){
    //     $sql = "SELECT * from empleados where emp_situacion = 1 ";
    
    //     $busqueda = $this->buscar;
    
    //     if($busqueda != ''){
    //         $sql .= " AND (emp_nom1 like '%$busqueda%' ";
    //         $sql .= " OR emp_nom2 like '%$busqueda%' ";
    //         $sql .= " OR emp_ape1 like '%$busqueda%' ";
    //         $sql .= " OR emp_ape2 like '%$busqueda%' ";
    //         $sql .= " OR emp_dpi like '%$busqueda%' ";
    //         $sql .= " OR emp_edad like '%$busqueda%' ";
    //         $sql .= " OR emp_puesto_id like '%$busqueda%' ";
    //         $sql .= " OR emp_sexo_id like '%$busqueda%') ";
    //     }
    
    //     $resultado = self::servir($sql);
    //     return $resultado;
    // }
    
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



    public function mostrar(){
        $sql = "SELECT 
                    e.emp_id, 
                    e.emp_nom1, 
                    e.emp_nom2, 
                    e.emp_ape1, 
                    e.emp_ape2, 
                    e.emp_dpi, 
                    e.emp_edad, 
                    s.sexo_descr, 
                    p.puesto_descr, 
                    p.puesto_suel
                FROM empleados e
                JOIN puestos p ON e.emp_puesto_id = p.puesto_id
                JOIN sexo s ON e.emp_sexo_id = s.sexo_id
                WHERE e.emp_situacion = '1'";
    
        if($this->emp_nom1 != ''){
            $sql .= " AND e.emp_nom1 like '%$this->emp_nom1%' ";
        }
    
        if($this->emp_nom2 != ''){
            $sql .= " AND e.emp_nom2 like '%$this->emp_nom2%' ";
        }
    
        if($this->emp_ape1 != ''){
            $sql .= " AND e.emp_ape1 like '%$this->emp_ape1%' ";
        }
    
        if($this->emp_ape2 != ''){
            $sql .= " AND e.emp_ape2 like '%$this->emp_ape2%' ";
        }
    
        if($this->emp_dpi != ''){
            $sql .= " AND e.emp_dpi = $this->emp_dpi ";
        }
    
        if($this->emp_edad != ''){
            $sql .= " AND e.emp_edad = $this->emp_edad ";
        }
    
        if($this->emp_puesto_id != ''){
            $sql .= " AND e.emp_puesto_id = $this->emp_puesto_id ";
        }
    
        if($this->emp_sexo_id != ''){
            $sql .= " AND e.emp_sexo_id = $this->emp_sexo_id ";
        }
    
        if($this->emp_id != null){
            $sql .= " AND e.emp_id = $this->emp_id ";
        }
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    
    

    
}
