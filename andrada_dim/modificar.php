<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
    <link rel="stylesheet" href="CSS/form.css">
</head>
<body >
    <?php
$id=$_REQUEST['id'];
$sel="SELECT * FROM turno WHERE id='$id'";
include 'conexion.php';
$res=$con->query($sel);
$row=$res->fetch_assoc();




//generar una consulta para eliminar
$kk="SELECT * FROM turno WHERE id = $id AND fecha>NOW()";
$ok=$con->query($kk);

if ($ok->num_rows>0) {
    # code...//llamamos a laconexion dela BBDD
//$del="UPDATE SET FROM turno WHERE id =$id";
//$dele=$con->query($del);
//ejecutamos consulta
if ($ok) {
header ('location; lista.php');
}


}else {
    echo '<script>alert("No se puede modificar la cita porque está vencida");';
    echo 'window.location.href = "lista.php";</script>';
}

?>
 <form action="actualizar.php" method="POST" class="form">   
 <input class="cajas"  type="hidden" name="idu"  placeholder="id" value="<?php echo $id;?>" />
        
       <select class="cajas" name="especialista"> 
         <option value="0">Selecione un especialista</option>
         <option>Odontologia</option>
         <option>Oftalmologia</option>
         <option>Nutricionista</option>
         <option>Pediatra</option>
         <option>Kinesiologia</option>
         <option>Traumatologia</option>
         <option>Cardiologia</option>
         <option>Cirujano</option>
         <option>Otorrinolaringologia</option>
         <option>Dermatologia</option>
       </select>
        <input class="cajas"  type="date" name="fecha"  placeholder="Fecha" value="<?php echo $row['fecha']?>" />
        <input class="cajas"  type="time" name="hora" placeholder="Hora" value="<?php echo $row['hora']?>" />
        <font color="black"><h3 class="titulo">Paciente</h3></font>
    
        <input class="cajas"  type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']?>" disabled/>
        <input class="cajas"  type="text" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']?>" disabled/>
        <input class="cajas"  type="number" name="dni" placeholder="DNI" value="<?php echo $row['dni']?>" disabled/>
        
        <input type="submit" class="btn" value="Actualizar">

        
    </form>


</body>
</html>