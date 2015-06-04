 <html>
<head>
	<meta charset="UTF-8">
</head>
</html>
<?php

session_start();
echo "Tu usuario es ".$_SESSION['usuario']."<br> Tu contraseña es: ". $_SESSION['contrasena'];


$conexion = new PDO('sqlite:favoritos.sqlite');  

$consult= $conexion->exec("select * from favoritos where usuario='".$_SESSION['usuario']."' and contrasena='".$_SESSION['contrasena']."';");
$data = $conexion->query($consult);
foreach ($data as $row) {
	echo "<table><tr><td>".$row['artista']."</td><td>".$row['disco']."</td><td>".$row['anio']."</td></tr></table>";	
	echo '
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comenttario</td>
<td>Valoracion>/td>
<td></td>
<td></td>
</tr>';

	echo "<tr>
	<td>".$row['titulo']."</td>
	<td>".$row['direccion']."</td>
	<td>".$row['categoria']."</td>
	<td>".$row['comentario']."</td>
	<td>".$row['valoracion']."</td>
	<td><a href='eliminarfavorito.php?titulo=".$row['titulo']."&direccion=".$row['direccion']."&categoria=".$row['categoria']."&comentario=".$row['comentario']."&valoracion=".$row['valoracion']."'>Eliminar</a></td>
	<td><a href='foractualizar.php?titulo=".$row['titulo']."&direccion=".$row['direccion']."&categoria=".$row['categoria']."&comentario=".$row['comentario']."&valoracion=".$row['valoracion']."'>Actualizar</a></td>
	</tr>";
}

echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select name='categoria'>
<option value='salud'>Salud</option>
<option value='trabajo'>Trabajo</option>
<option value='hobby'>Hobby</option>
<option value='personal'>Personal</option>
<option value='otros'>Otro</option>
</select>
</td>
<td><input type='text' name='comentario'></td>
<td><input type='text' name='valoracion'></td>
<td><input type='submit'ssss></td>
<td></td>
</tr>

";

echo "</table>";

$conexion=null;

?>