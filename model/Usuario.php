<?php
require_once 'modelobase.php';

class Usuario extends modelobase
    {
        public $id;
        public $Nombre;
        public $Apellido;
        public $Correo;


        public function __construct()
            {
                parent::__construct(); 
            }

            public function setid($id)
            {
                $this->id=$id;
            } 
            
            public function getid()
            {
                $this->id=$id;
            } 

          public function setNombre($Nombre)
            {
                $this->Nombre=$Nombre;
            } 
            
            public function getNombree()
            {
                $this->Nombre=$Nombre;
            } 

            public function setApellido($Apellido)
            {
                $this->Apellido=$Apellido;
            } 

            public function getApellido()
            {
                $this->Apellido=$Apellido;
            } 

            public function setCorreo($Correo)
            {
                $this->Correo=$Correo;
            } 

            public function getCorreo()
            {
                $this->Correo=$Correo;
            } 

            public function Create()
                {
                  $sql =  "INSERT INTO usuarios(Nombre,Apellido,Correo) VALUES ('{$this->Nombre}','{$this->Apellido}','{$this->Correo}')" ;
                  
                  $guardado = $this->db->query($sql);
                  
                  return $guardado;
                }
            
            public function actualizar($pk)
                { 
                  $sql =  "UPDATE usuarios SET Nombre='{$this->Nombre}', Apellido='{$this->Apellido}', Correo='{$this->Correo}' WHERE id=$pk";
                  $guardado = $this->db->query($sql);
                  return $guardado;
                }
            

            
            
            
            


    }
    ?>