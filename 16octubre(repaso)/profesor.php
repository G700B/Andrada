<?php
namespace Personal;
//extends
class Profesor extends Docente{
    private $cargos;

    public function __construct($n, $a, $d)
    {
        parent::__construct($n, $a, $d);
        parent::setDNI('0');
        $this->cargos=[];
    }

    
}