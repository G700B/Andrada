<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
$idu=$_POST['idu'];
$a=$_POST['especialista'];
$n=$_POST['fecha'];
$t=$_POST['hora'];
$f=$_POST['nombre'];
$c=$_POST['apellido'];
$k=$_POST['dni'];


//generar consulta SSQL
$act="UPDATE turno SET especialista='$a', fecha='$n', hora='$t', nombre='$f', apellido='$c', dni='$k' WHERE id=$idu";
//llamara a la conexion
include('conexion.php');
//EJECUTAMOS
$con->query($act);
header('location:lista.php');


?>

</body>
</html>