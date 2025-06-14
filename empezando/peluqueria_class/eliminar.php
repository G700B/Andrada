<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        contacto
        <input type="tel" name="contacto">
        <input type="submit" value="eliminar">
</form>
<?php
echo isset($_REQUEST["contacto"]);
include "conexion.php";

$cont=$_REQUEST["contacto"];

$sql="SELECT * FROM turnos WHERE telefono = $cont";
$res=$con->query($sql);
$fila=$res->fetch_assoc();

echo "turno <br>
fecha:$fila[fecha] <br>
hora:$fila[hora]   <br>";
echo "estas seguro que quieres eliminarlo? $fila[nombre]";
?>

</body>
</html>