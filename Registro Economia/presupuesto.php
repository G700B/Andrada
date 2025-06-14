<?php
//Clase : primera letra en Mayuscula funcion : segunda palabra Mayuscula (camello)
class Presupuesto{
   public $cantidad;
   public $moneda;
 

    //CONSTRUCTOR
    //
    public function __construct()
    {
        $this->cantidad= "555";
    }

    //Metodo
    function cantM(){
        echo "el usuario tiene $this->cantidad <br>";
    }

}

//declarando objetos
$usuario= new Presupuesto();

echo $usuario->cantM();

echo "<pre>";
print_r($usuario);


?>