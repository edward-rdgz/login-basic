<?php
function select() {
	if($_POST) {
		$correo = $_POST['txtCorreo'];
		$contrasena = $_POST['txtContrasena'];
		
		$connection = mysqli_connect("localhost", "root", "", "lista-encadenada") or die(mysqli_connect_error());
		$sql = "SELECT * FROM clientes WHERE Email = '$correo' and Password = '$contrasena'";
		$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$count = mysqli_num_rows($query); 
		if($count == 1) {
			return header("location:acceso_correcto.php");
		} else {
			return header("location:acceso_incorrecto.php");
		}
		mysqli_close($connection);
	}
}

function insert($usuario, $nombre, $correo, $contrasena) {
	$connection = mysqli_connect("localhost", "root", "", "lista-encadenada") or die(mysqli_connect_error());
	$insert = "INSERT INTO clientes (Usuario, Password, Activo, Nombre, Email) VALUES ('$usuario', '$contrasena', '', '$nombre', '$correo')";
	mysqli_query($connection, $insert) or die(mysqli_error($connection));
	mysqli_close($connection);
}
?>