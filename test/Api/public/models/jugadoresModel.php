<?php
Class Jugadores {
    // Atributos
    private $db;
    private $jugadores;

    // Construct
    public function __construct() {
        $this->db=Conectar::conn();
        $this->personas = [];
    }

    // Metodos
    public function getJugadores(){

        $sql = "SELECT * FROM JUGADOR";
        $result = $this->db->query($sql);

        foreach($result as $fila){
            $this->jugadores[] = $fila;
        }

        return $this->jugadores;

    }
}