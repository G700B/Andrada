<?php

$con = new mysqli("localhost", "root", "", "peluqueria");

$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$telefono = $_REQUEST["telefono"];
$fecha = $_REQUEST["fecha"];
$hora = $_REQUEST["hora"];

//conaula de busqueda en el turno con la mimsa fehca y hora.
$sql="SELECT fecha, hora FROM turnos
  WHERE fecha = '$fecha' AND hora = '$hora' OR telefono = '$telefono' AND  (fecha)>DATE(NOW())" ;

$res = $con -> query($sql);

//num_rows sirve para saber la cantidad de registros encontrados
if ($res->num_rows > 0){
    echo "ese turno ya fue tomado";
}else {
    $sql = "INSERT INTO turnos (nombre, apellido, telefono, fecha, hora) VALUES ('$nombre', '$apellido', $telefono, '$fecha', '$hora')";
$con -> query($sql);
}
header('location:index.php');
?>
