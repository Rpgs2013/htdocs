<?php

Class gatoModelo{

    private $bd;
    private $nombre;
    private $edad;
    private $num_patas;
    private $gato;

    public function __construct()
    {

        $this->bd = Conexion::conectar();
        $this->gato = array();
        
    }

    public function getGato(){

        $sql = "SELECT* FROM GATO";
        $result = $this->bd->query($sql);

        foreach($result as $fila){

            $this->gato[] = $fila;

        }

        return $this->gato;

    }

    public function getComida(){

        $sql = "SELECT* FROM COMIDA";
        $result = $this->bd->query($sql);

        foreach($result as $fila){

            $this->gato[] = $fila;

        }

        return $this->gato;

    }

    public function insertComida($descripcion){
        
        $sql = "INSERT INTO comida VALUES('$descripcion')";
        $this->bd->query($sql);

    }

    public function insertGato($nombre, $edad, $num_patas, $descripcion){
        
        $sql = "INSERT INTO gato VALUES(0, '$nombre', $edad, $num_patas, '$descripcion')";
        $this->bd->query($sql);

    }

    public function deleteGato($id){

        $sql = "DELETE FROM gato WHERE id_gato = $id";
        $this->bd->query($sql);

    }


}



?>