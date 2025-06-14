<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body >
    <?php
   $idu=$_GET['idu'];
   $a=$_GET['apellido'];
   $n=$_GET['nombre'];
   $t=$_GET['telefono'];
   $f=$_GET['fecha'];
   $c=$_GET['hora'];
   
   //generar consulta SSQL
   $act="UPDATE turnos SET apellido='$a', nombre='$n', telefono=$t, fecha='$f', hora='$c' WHERE id=$idu";
   //llamara a la conexion
   include ('conexion.php');
   //EJECUTAMOS
   $con->query($act);
   header('location:index.php');
   
   
   ?>

</body>
</html>