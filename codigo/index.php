<?php
session_start();

$_SESSION['usuario']="victor";
$_SESSION['contrasena']="victor";

echo '
<htlm>
<head>
<meta http-equiv="REFRESH" content="0; url= formlogin.php">
</head>
</html>
';
?>