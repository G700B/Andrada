<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>Saque su turno</p>
<form action="guardar.php" method="get">
	ingrese su nombre
	<input type="text" name="nombre">
    ingrese su apellido
	<input type="text" name="apellido">	
    ingrese su numero de telefono
	<input type="number" name="telefono">
	<input type="date" name="fecha">

	<select name="hora">
	<?php
    for ($i=9; $i <=20 ; $i++) { 
	echo "<option>$i:00</option>";
    }
	?>
	</select>
	<br>
	<input type="submit" value="reservar">
</form>
<br>
<a href="eliminar.php">eliminar turno</a><br>
<a href="modificar.php">modificar turno</a>

</body>
</html>