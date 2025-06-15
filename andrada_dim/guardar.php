<?php 


//crear session
session_start();
// session_id es el idenficador de la seesion
//echo session_id();



$con = new mysqli("localhost", "root", "", "dim");

$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$telefono=$_REQUEST["telefono"];
$fecha=$_REQUEST["fecha_nacimiento"];
$dni=$_REQUEST["dni"];
$pass=password_hash($_POST['password'], PASSWORD_BCRYPT);




$SQL="SELECT * FROM usuarios WHERE dni = '$dni' ";
$res=$con->query($SQL);

if($res->num_rows>0){
    echo "<h1>DNI ya registrado</h1>";
}else {
        $SQL="INSERT INTO usuarios (nombre, apellido, telefono, fecha_na, dni, password) VALUES ('$nombre', '$apellido', '$telefono','$fecha', '$dni', '$pass')";
    $con->query( $SQL );
    
  
    echo "<h2>Registrado correctamente</h2>";
   
}
  header('location:session.html');

