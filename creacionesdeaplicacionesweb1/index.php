<?php
session_start();


$_SESSION['usuario']="sasa";
$_SESSION['contrasena']="12345";

$conexion= new PDO ('sqlite:favoritos:sqlite');
echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>

';
$conexion=null;

?>