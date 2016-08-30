<?php 
include('conexion.php');
if(isset($_POST['btnGuardar'])) {
	insert($_POST['txtUsuario'], $_POST['txtNombre'], $_POST['txtCorreo'], $_POST['txtContrasena']);
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrado</title>
</head>

<body>
	<h1>Se registro, exitosamente!</h1>
</body>
</html>