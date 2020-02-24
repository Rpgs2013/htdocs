<?php

    Class usuarioModel{


        private $db;
        private $nombre;
        private $edad;
        private $usuarios;

        public function __construct()
        {

            $this->db = Conexion::conectar();
            $this->usuarios = array();
            
        }


        public function getUsers(){

            $sql = "SELECT * FROM USUARIOS";
            $result = $this->db->query($sql);

            foreach($result as $fila){

                $this->usuarios[] = $fila;

            }

            return $this->usuarios;

        }

        public function insertUser($nombre, $edad){
            
            $sql = "INSERT INTO USUARIOS VALUES(0, '$nombre', $edad)";
            $this->db->query($sql);

        }

        public function deleteUser($id){

            $sql = "DELETE FROM USUARIOS WHERE id_usuario = $id";
            $this->db->query($sql);

        }

        public function updateUser($id, $nombre, $edad){

            $sql = "UPDATE USUARIOS SET nombre = '$nombre', edad = $edad WHERE id_usuario = $id";
            $this->db->query($sql);

        }

    }

?>