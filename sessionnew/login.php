<?php
session_start();
include "conexion.php";
$nombre=$_REQUEST['nombre'];
$password=$_REQUEST['password'];//255 caracteres

$SQL="SELECT * FROM poll WHERE nombre ='$nombre' AND password='password'";
$res=$con->query($SQL);
$datos=$res->fetch_assoc();//todos los datos

if (password_verify($password, $datos['password'])) {
    $_SESSION['nombre']=$datos;
}else{
    header('location:logeo.php');
}


