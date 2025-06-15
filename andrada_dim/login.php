<?php
session_start();
include "conexion.php";
$dni=$_REQUEST['dni'];
$password=$_REQUEST['password'];//255 caracteres

$SQL="SELECT * FROM usuarios WHERE dni ='$dni' ";
$res=$con->query($SQL);

    if ($res->num_rows > 0) {
        $datos=$res->fetch_assoc();//todos los datos
        if( password_verify( $password , $datos['password'] ) ){
            $_SESSION['dni'] = $datos; 
        }else{
            header('location:session.html');}
    }

if ($password=$datos['password'] &&  $_SESSION['dni']=$datos['dni']) {
    //$_SESSION['dni']=$datos['dni'];
    header('location:turno.php');
}else{
    header('location:session.html');
}
    /*
    if( password_verify( $password , $datos['password'] ) ){
        $_SESSION['dni'] = $datos; 
    }else{
        header('location:session.html');
    }*/
?>

