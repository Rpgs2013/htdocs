<?php
class personas_model{
    private $db;
    private $personas;
 
    public function __construct() {
        $this->db=Conectar::conexion();
        $this->personas=array();
    }

    public function get_personas() {
        $consulta=$this->db->query("SELECT * FROM personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function insert_personas() {
        $consulta=$this->db->query("INSERT INTO personas
        VALUES (0, 'Raul', 'Gallego', 'Snadoval');");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function delete_personas() {
        $consulta=$this->db->query("DELETE FROM personas");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}
?>