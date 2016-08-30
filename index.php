<?php 
include('conexion.php'); 
select();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="exa.css">
    <title>Iniciar Sesión</title>
	<script language="javascript">
	function mostrar() {
		if(formSesion.chkNuevoUsuario.checked==true) {
			formSesion.action="registrar.php";
		}
		formSesion.submit();
	}
    </script>
</head>

<body>
<form action="#" enctype="multipart/form-data" method="post" name="formSesion" id="formSesion">
   <table border="0" align="center">
    <tr>
        <th height="30">
        <strong>INICIO DE SESIÓN</strong>
        </th>
    </tr>
 	<tr>
        <th height="30">
        <label>Email:</label>
        </th>
    </tr>
    <tr>
        <th height="30">
        <input type="email" name="txtCorreo" id="txtCorreo" required/>
        </th>
    </tr>
    <tr>
        <th height="30">
        <label>Contraseña:</label>
        </th>
    </tr>
    <tr>
        <th height="30">
        <input type="password" name="txtContrasena" id="txtContrasena" required/>
        </th> 
    </tr>
    <tr>
        <th height="30">
        <input type="checkbox" name="chkNuevoUsuario" id="chkNuevoUsuario"/>Nuevo usuario
        </th>
 	</tr>
    <tr>
        <th height="30">
        <input type="button" value="Iniciar Sesión" name="btnSesion" id="btnSesion" onClick="mostrar();"/> 
        </th>
    </tr>
   </table>
</form>
</body>
</html>