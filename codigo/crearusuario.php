<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

//conexion
$conexion = new PDO('sqlite:favoritos.sqlite');  

//consulta
/*
privilegios son:
1= administrador
2=controlador
3=usuario registrado
usuario invitado

*/
$insert= $conexion->query("INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','edad',3)");

?>