<?php

    /*Crear una clase de tipo usuario para gestionar los usuarios
    de un  sistema de regsitro web.
    Un usuario tiene dni, nombre, edad, n_usuario y clave.
    
    Hacer un registro que envie esos datos, cree un objeto
    de tipo usuario y lo guarde en un array.*/

     class Usuario {

        //Atributes
        private $dni;
        private $nombre;
        private $edad;
        private $n_usuario;
        private $clave;

        //Constructor
        public function __construct($dni, $nombre, $edad, $n_usuario, $clave){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->n_usuario = $n_usuario;
            $this->clave = $clave;
        }

        //Method
        //Getters and Setters
        //Dni
        public function setDni($dni){
            $this->dni = $dni;
        }
        
        public function getDni(){
            return $this->dni;
        }

        //Nombre
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->nombre;
        }

        //Edad
        public function setEdad($edad){
            $this->edad = $edad;
        }
        
        public function getEdad(){
            return $this->edad;
        }

        //N_Usuario
        public function setN_Usuario($n_usuario){
            $this->n_usuario = $n_usuario;
        }
        
        public function getN_Usuario(){
            return $this->n_usuario;
        }

        //Clave
        public function setClave($clave){
            $this->clave = $clave;
        }
        
        public function getClave(){
            return $this->clave;
        }
        
     }

 ?>