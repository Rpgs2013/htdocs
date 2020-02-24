<?php
class dataModel {
    
    private $db;
    private $data;
 
    public function __construct() {
        $this->db=Conectar::conexion();
        $this->data=array();
    }
  

    public function getData() {
        $consulta=$this->db->query("SELECT * FROM data");
        while($filas=$consulta->fetch_assoc()){
            $this->data[]=$filas;
        }
        return $this->data;
    }

    public function insertData() {
        if(isset($_POST['save'])) {
            $name = $_POST['save'];
            $location = $_POST['name'];

            $consulta=$this->db->query("INSERT INTO data (name, location)
            VALUES ('$name', '$location')");

            while($filas=$consulta->fetch_assoc()){
                $this->data[]=$filas;
            }
        }
        return $this->data;
    }

    public function deleteData() {
        $consulta=$this->db->query("DELETE FROM data WHERE name = 'Raul'");
        while($filas=$consulta->fetch_assoc()){
            $this->data[]=$filas;
        }
        return $this->data;
    }
}
 ?>