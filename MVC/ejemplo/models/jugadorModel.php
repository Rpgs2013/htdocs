<?php

    Class jugadorModel{

        private $db;
        private $jugadores;


        public function __construct()
        {
            $this->db = Conexion::conectar();
            $this->jugadores = array();
        }


        public function getJugadores(){

            $sql = "SELECT * FROM jugadores";
            $result = $this->db->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $this->jugadores[] = $row;
                }
            } else {
                echo "0 results";
            }
            
            return $this->jugadores;

        }

        public function getJugador($id){

            $sql = "SELECT * FROM jugadores WHERE id_jugador = $id";
            $result = $this->db->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $this->jugadores[] = $row;
                }
            } else {
                $result = 0;
            }

            return $this->jugadores;

        }

        public function insertJugador($nombre, $edad, $nacionalidad, $id_equipo){

            $sql = "INSERT INTO jugadores VALUES(0, $nombre, $edad, $nacionalidad, $id_equipo)";
            
            
            if($this->db->query($sql)){

                $result = "Ya esta";

            }else{

                $result = "No esta Dani callate";

            }

        }

    }

?>