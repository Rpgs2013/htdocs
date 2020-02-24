<?php
Class Equipo {
    // Atributos
    private $db;
    private $equipo;

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
            $this->equipo[] = $fila;
        }

        return $this->equipo;

    }
}