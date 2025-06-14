<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <a>ingrese su numero</a>
        <input type="number" name="telefono">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php
include ("conexion.php");
//$id=$_REQUEST['id'];
 $tel=$_REQUEST['telefono'];
   $sel="SELECT * FROM turnos WHERE telefono='$tel'";
   $res=$con->query($sel);
    $fila=$res->fetch_assoc();

    if ($res->num_rows==0) {
       echo "ese numero no esta registrado";
    }else {  
?>
 
<form action="mod.php" method="get"><br>
   modificar
   <!--<input type="hidden" name="idu" value="<?php //echo $id?>">-->
    <input type="text" name="nombre" value="<?php echo $fila['nombre']?>">
    <input type="text" name="apellido" value="<?php echo $fila['apellido']?>">
    <input type="number" name="telefono" value="<?php echo $fila['telefono']?>">
    <input type="date" name="fecha" value="<?php echo $fila['fecha']?>">
    <input type="time" name="hora" value="<?php echo $fila['hora']?>">
    <input type="submit" value="modificar">
    </form>
    <?php
    }
    ?>
 </body>
 </html>