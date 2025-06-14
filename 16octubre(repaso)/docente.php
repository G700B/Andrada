<?php
//objetos : 



namespace Personal;
//clases
class Docente{
    
    public $nombre, $apellido;
    protected $dni;
//constructor : 
    public function __construct($n, $a = 'Lopez', $d = '00000000')
    {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->dni = $d;
    }

    public function setDni($d){
        if(strlen($d) == 8 AND is_numeric($d)){
            $this->dni = $d;
            return true;
        }
        return false;
    }
//metodos=funciones 
    public function getDni(){
        return $this->dni;
    }

    public function nombreCompleto(){
        return $this->apellido. ", " .$this->nombre;
    }
}