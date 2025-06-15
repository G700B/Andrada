<?php 


$con = new mysqli("localhost", "root", "", "dim");

$especialista=$_REQUEST["especialista"];
$fecha=$_REQUEST["fecha"];
$hora=$_REQUEST["hora"];
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$dni=$_REQUEST["dni"];

$SQL="INSERT INTO turno (especialista, fecha, hora, nombre, apellido, dni) VALUES ('$especialista', '$fecha', '$hora','$nombre', '$apellido', '$dni')";
$con->query( $SQL );

header('location:turno.php');




