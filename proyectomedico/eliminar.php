<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ('conexion.php');
$id=$_REQUEST['id'];
//generar una consulta para eliminar
$kk="SELECT * FROM turno WHERE id = $id AND fecha>NOW()";
$ok=$con->query($kk);

if ($ok->num_rows>0) {
    # code...//llamamos a laconexion dela BBDD
$del="DELETE FROM turno WHERE id =$id";
$dele=$con->query($del);
//ejecutamos consulta
if ($ok) {
header ('location; lista.php');
}else {
    echo "no se puede eliminar porque la fecha ya paso";
}

}else {
    echo '<script>alert("No se puede eliminar la cita porque está vencida");';
    echo 'window.location.href = "lista.php";</script>';
}


?>
</body>
</html>