<?php
Class Partido {
    // Atributos
    private $db;
    private $partido;

    // Construct
    public function __construct() {
        $this->db=Conectar::conn();
        $this->personas= [];
    }

    // Metodos
    public function getJugadores(){

        $sql = "SELECT * FROM JUGADOR";
        $result = $this->db->query($sql);

        foreach($result as $fila){
            $this->partido[] = $fila;
        }

        return $this->partido;
        
    }
}