<?php
session_start();
//$a=isset($_SESSION['dni']);
  //header('location:session.html');
  if (!isset($_SESSION['dni'])){
    header('location:session.html');
   ?>
 <?php
  exit();
  }
  include ("conexion.php");
  $dni = $_SESSION['dni'];

  // Consulta SQL para obtener nombre y apellido del usuario
  $sel = "SELECT nombre, apellido FROM usuarios WHERE dni='$dni'";  
     $res=$con->query($sel);
      $fila=$res->fetch_assoc();
   ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src="icon" href="imagenes/logo.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
          <div align="right"> <a href="cerrar_session.php"><button > Cerrar sesion</button></a></div>
          <div align="right"> <a href="lista.php"><button > Modificar citas</button></a></div>
    
  
    <form action="guardar_turno.php" method="POST" class="form">   
        <font color="black"><h3 class="titulo">Bienvenido <?php echo $fila['nombre']; ?><br>
      Sacar turno con especialista</h3></font>
    
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
       <font color="black"><h4>Fecha y hora del turno</h4></font>
        <input class="cajas"  type="date" name="fecha"  placeholder="Fecha" value="" />
        <input class="cajas"  type="time" name="hora" placeholder="Hora" value="" />
        <font color="black"><h3 class="titulo">Paciente</h3></font>
    
        <input class="cajas"  type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre']; ?>" readonly/>
        <input class="cajas"  type="text" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido']; ?>" readonly/>
        <input class="cajas"  type="number" name="dni" placeholder="DNI" value="<?php echo $_SESSION['dni']; ?>" readonly/>
        
        <input type="submit" class="btn" value="Registrar">

        
    </form>
  
</body>
</html>
