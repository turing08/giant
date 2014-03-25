<?php
class Alumno {  
    public $nombre;  
    public $correo;  
    public $URL;
    public $github;
    public $celular;
    public $codigo;
    public $equipo;
    public $carrera; 
      
    public function __construct($nombre, $correo, $URL, $github, $celular, $codigo, $equipo, $carrera)    
    {    
        $this->nombre = $nombre;  
        $this->correo = $correo;  
        $this->URL = $URL;
        $this->github = $github;
        $this->celular = $celular;
        $this->codigo = $codigo;
        $this->equipo = $equipo;
        $this->carrera = $carrera;  
    }   
} 

?>