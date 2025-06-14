<?php

//crear session
session_start();
// session_id es el idenficador de la seesion
echo session_id();

$usuario=[
    'nombre' => 'jose',
    'id' => 359,
    'fecha' => "2006/08/13"
];
$_SESSION['usuario']=$usuario;











?>