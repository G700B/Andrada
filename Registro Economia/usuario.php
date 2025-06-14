<?php
//Clase : primera letra en Mayuscula funcion : segunda palabra Mayuscula (camello)
class Usuario{
   public $nombre;
   public $apellido= "Acosta";
   public $telefono= "1172638728";
   public $monto= "$9999999999";
   public $mail= "holaprofe@gmail.com";
   private $DNI= "";

    //CONSTRUCTOR
    //
    public function __construct()
    {
        $this->nombre= "Fede";
    }

    //Metodo
    function dictandoClases(){
        echo "el usuario $this->nombre esta dando clase <br>";
    }

    function benjaminV(){
        echo "el usuario $this->nombre esta estudiando<br>";
    }
}
//declarando objetos 
$usuario2= new Usuario();
$cumple= new Usuario();

//acceder atributo

echo "bienvenido $usuario->nombre <br>";
$usuario2->nombre="pollo";
echo "bienvenido $usuario2->nombre <br>";

$usuario->dictandoClases();

$cumple->nombre="benja";

$cumple->benjaminV();

echo "<pre>";
print_r($usuario);


?>