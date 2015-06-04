<?php 

//obtener variables
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];
//crear conexion
$conexion= sqlite_open('favoritos.db');

//consulta
$consulta = "SELECT * usuarios;";

//lanzar la consulta
$resultado = sqlite_query($conexion);

//repasar lo resultados
while ( $fila<= sqlite_fetch_array($resultado)) {
$usuariobasedatos = $fila['usuario'];
$contrasenabasedatos = $fila['contrasena'];
if ($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos) {
	//si el resultado es positivo entonces asignar
	$_SESSION['usuario'] = $usuario;
	$_SESSION['contrasena'] = $contrasena;

echo '
<html>
<head>
<meta http-equiv= "REFRESH" content="0; url= formlogin.php">

</head>
</html>
';

}else{
//si el resultado es negativo no hacer nada	

}

}
//cerramos conexion
sqlite_close($conexion);

?>