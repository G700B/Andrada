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
<input type="date" name="fecha" id="fecha">
<input type="submit" value="verificar" id="btn_ver">
<label for="hora"></label>


<?php
include "conexion.php";
if (isset($_REQUEST["fecha"])) {
$fecha= $_REQUEST["fecha"];
$sql="SELECT * FROM turnos
			WHERE fecha= 'fecha'";
			$res= $con->query($sql);
			
			while($fila=$res->fetch_assoc()){
			echo "<p>$fila[hora]</p>";
			$a[]=$fila['hora']; //+
			}
	//	 var_dump($a);
}

echo "<select name=hora>"
for ($i=9; $i <=20 ; $i++) { 
	$tiempo ="$i:00:00";
	
}
$ocupado=false;
//for ($x=0; $x < count($a); $x++) { 
	/*foreach ($a as $x) {
		var_dump($x);
	if ($tiempo !=$x) {
		echo "<option>$i:00</option>";
	}else {
		echo "<option>esta ocupado</option>";
	}
  }
}*/
for ($x=0; $x < count($a); $x++) { 
	foreach ($a as $x) {
		var_dump($x);
	if ($tiempo ==$x) {
		echo "<option>esta ocupado</option>";
		$ocupado=true;
		break;
	}elseif(!$ocupado) {
		echo "<option>$i:00</option>";
	}
  }
}

?>
</select>
<br>
<input type="submit" value="reservar">

<?php/*
if (isset($_POST)) {
	echo "<input type='text' name='nombre' value='$_REQUEST[nombre]'>";
	echo "<input type='text' name='apellido' value='$_REQUEST[apellido]'>";
	echo "<input type='date' name='fecha' value='$_REQUEST[fecha]'>";
}*/
?>
</form>
<br>
<a href="eliminar.php">eliminar turno</a><br>
<a href="modificar.php">modificar turno</a><br>
<a href="lista.php">lista</a>

<scrip src="index.js/"></scrip>


</body>
</html>