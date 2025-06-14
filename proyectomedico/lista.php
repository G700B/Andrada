<?php
include 'conexion.php';

session_start();

$id_usuario = $_SESSION['dni'];


$sel = "SELECT * FROM turno WHERE dni = $id_usuario";
$resultado = $con->query($sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de citas</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body >
<style>
td{
    background:#cccc99;
}
th{
    background:#ffcc66;
}
a{
    color: #3333ff;
}
a:hover{
    color:#ff3366
}
    </style>
<div class="colour">
   <center><font size="5"><h3 ><i><u>Lista de Registros de Usuarios</h3></u></i></font></center>
    <font size="4"><table border=5 bordercolor="white" width="100%" >
        <tr>
            <th>Especialista</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Nombre</th>
            <th>apellido</th>
            <th>DNI</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    <?php $cont=0;
while ($fila=$resultado->fetch_assoc()){
    $cont=$cont+1;
    ?>
    <tr>
        <!-- <td><?php echo $cont ?></td> -->
        
        <td><?php echo $fila['especialista']?></td>
        <td><?php echo $fila['fecha']?></td>
        
       
        <td><?php echo $fila['hora']?></td>
         <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['apellido']?></td>
        <td><?php echo $fila['dni']?></td>
      
        <td><a href='modificar.php?id=<?php echo $fila['id']?>'>Actualizar</a></td>
        <td><a href='eliminar.php?id=<?php echo $fila['id']?>'>Borrar</a></td>
    </tr>
<?php 
}
?>
</table></font>
<h3><u>Cantidad de registros encontrados: <?php echo $cont ?></u></h3>
<br>
<font size="4"><a href="turno.php"><button>Sacar otro turno</button></a></font>
</body></div>
</html>



