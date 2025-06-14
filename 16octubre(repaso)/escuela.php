<?php 
//include
//require . 
//require_once

/*
require_once('personal/docente.php');
require_once('personal/profesor.php');*/

spl_autoload_register( function($clase){
    //verifica si el archivo de la clase existe
    if ( file_exists( str_replace('\\', '/', $clase). '.php'))
        //require_once ---> trae el archivo una sola vez
        require_once str_replace('\\', '/', $clase). '.php';
});


use Personal\Profesor;

$a = new Profesor('nico', 'andrada', '12345678');
a->nombre='Jose';