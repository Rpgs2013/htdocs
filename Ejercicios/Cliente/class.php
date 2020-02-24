<?php
    Class Cliente {
        //Atirubutes
        private $cif;
        private $nombre;
        private $direccion;

        //Constructor
        function __construct ($cif, $nombre, $direccion) {
            $this -> cif = $cif;
            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
        }

        //Metodos
        //Getters and Setters   
        public function setCIF($cif){
            $this->cif = $cif;
        }
        
        public function getCIF(){
            return $this->cif;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        

        public function getNombre(){
            return $this->direccion;
        }

        public function setDirreccion($direccion){
            $this->direccion = $direccion;
        }
        

        public function getDireccion(){
            return $this->direccion;
        }

    }
 ?>