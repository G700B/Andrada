<?php 
$con = new mysqli("localhost", "root", "", "poll");

$nombre = $_REQUEST["nombre"];
$pass = $_REQUEST["password"];


$SQL = "SELECT * FROM poll 
        WHERE nombre = '$nombre' ";

$res = $con->query( $SQL );

if( $res->num_rows > 0){
    echo "<h1>Ese nombre de usuario ya fue tomado</h1>";
}else {
    
$SQL = "INSERT INTO poll (nombre, password) 
VALUES ('$nombre', '$pass')";

    //ejecutar la consulta
    $con->query( $SQL );
    
}





