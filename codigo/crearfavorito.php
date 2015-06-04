<?php

session_start();
//crear variables
$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];

$addtitulo= $_POST['titulo'];
$adddireccion= $_POST['direccion'];
$addcategoria= $_POST['categoria'];
$addcomentario= $_POST['comentario'];
$addvaloracion= $_POST['valoracion'];

//conexion

$conexion = new PDO('sqlite:favoritos.sqlite');  
//consulta
$insert = $conexion->query("INSERT INTO favoritos VALUES ('$usuario', '$contraseña', 'addtitulo', 'adddireccion', 'addcategoria', '$addcomentario','$addvaloracion')");

echo "
<html>
<head>
<meta http-equiv='REFRESH' content='0; url=principal.php'>
</head>
</html>";

?>