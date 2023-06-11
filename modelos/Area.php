
<?php
require_once 'Conexion.php';

class Area extends Conexion{
    public $area_id;
    public $area_nom;
    public $area_situacion;

    public function __construct($args = [] )
    {
        $this->area_id = $args['area_id'] ?? null;
        $this->area_nom = $args['area_nom'] ?? '';
        $this->area_situacion = $args['area_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO areas(area_nom) values('$this->area_nom')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from areas where area_situacion = '1' ";

        if($this->area_nom != ''){
            $sql .= " and area_nom like '%$this->area_nom%' ";
        }

        if($this->area_id != null){
            $sql .= " and area_id = $this->area_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE areas SET area_nom = '$this->area_nom' where area_id = $this->area_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE areas SET area_situacion = '0' where area_id = $this->area_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}