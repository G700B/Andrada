<?php 
//conexion a bd
$con = new mysqli("localhost", "root", "", "turnos");

//recibimos los datos del formulario
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$telefono = $_REQUEST["telefono"];
$fecha = $_REQUEST["fecha"];
$hora = $_REQUEST["hora"];

//consulta de busqueda en el turno con la misma fecha y hora
$SQL = "SELECT * FROM turnos 
        WHERE fecha = '$fecha' AND hora = '$hora' ";

//ejecutar la consulta
$res = $con->query( $SQL );

//num_rows sirve para saber la cantidad de resgistros encontrados
if( $res->num_rows > 0){
    echo "<h1>Ese turno ya fue tomado</h1>";
}else {
    //consulta de insercion
    $SQL = "INSERT INTO turnos (nombre, apellido, telefono, fecha, hora) 
                VALUES ('$nombre', '$apellido', $telefono , '$fecha', '$hora')";

    //ejecutar la consulta
    $con->query($SQL);
    
}