<?php 
$email = @$_POST['txtCorreo'];
$password = @$_POST['txtContrasena'];
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="exa.css">
    <meta charset="utf-8">
    <title>Registrate</title>
    <script language="javascript">
	function validar() { 
		var contrasena = new String(txtContrasena.value); 
		
		if(contrasena.length>=8) { 
			var numero=0;
			var mayuscula=0;
			var minuscula=0;
			var especial=0;
			
			for(var x=0; x<contrasena.length; x++) { 
			
				if((contrasena.charCodeAt(x)>=48) && (contrasena.charCodeAt(x)<=57) && numero<=2) {  //validando que sea numero 
					numero++;
				} else if ((contrasena.charCodeAt(x)>=65) && (contrasena.charCodeAt(x)<=90) && mayuscula<=2) { //validando mayuscula
					mayuscula++;
				} else if ((contrasena.charCodeAt(x)>=97) && (contrasena.charCodeAt(x)<=122) && minuscula<=2) { // validando minuscula
					minuscula++;
				} else if ((contrasena.charCodeAt(x)>=32) && (contrasena.charCodeAt(x)<=47) || (contrasena.charCodeAt(x)>=58) && (contrasena.charCodeAt(x)<=64) || (contrasena.charCodeAt(x)>=91) && (contrasena.charCodeAt(x)<=96) || (contrasena.charCodeAt(x)>=123) && (contrasena.charCodeAt(x)<=255) &&  especial<=2) { //validando caracter especial
					especial++;
				}
				
				if(numero==2 && mayuscula==2 && minuscula==2 && especial==2) {
					break;
				}
				
			}
			
			if(numero!=2 && mayuscula!=2 && minuscula!=2 && especial!=2) {
				alert("Su contraseña no cumple con los requisitos");
				//window.formRegistrar.txtContrasena.focus();
			} else {
				formRegistrar.action = "registrado.php";
			}
			
		} else {
			alert("contrasena muy corta");
			//window.formRegistrar.txtContrasena.focus();
		}
		formRegistrar.submit();
	} 
		
	function nivel() {
		var canvas=document.getElementById('lienzo');
		var contexto=canvas.getContext('2d');
		var contrasena=document.getElementById('txtContrasena').value;
		
		if(contrasena.length>=8) {
			contexto.fillStyle="green";
			contexto.fillRect(10,10,150,15);
		} else if(contrasena.length==6) {
			contexto.fillStyle="yellow";
			contexto.fillRect(10,10,100,15);
		} else if(contrasena.length==4) {
			contexto.fillStyle="red";
			contexto.fillRect(10,10,50,15);
		} else if(contrasena.length==0) {
			contexto.clearRect(10,10,150,15);
		}
	}
	</script>
</head>

<body>
<form action="#" enctype="multipart/form-data" method="post" name="formRegistrar" id="formRegistrar">
   <table border="0" align="center">
   <tr>
        <th height="30">
        <strong> REGISTRATE</strong>
        </th>
    </tr>
    <tr>
        <th height="30">
        <p><label>Nombre:</label></p>
        <input type="text" name="txtNombre" id="txtNombre" required/>
        </th>
    </tr>
    <tr>
        <th height="30">
        <p><label>Usuario:</label></p>
        <input type="text" name="txtUsuario" id="txtUsuario" required/>
        </th>
    </tr>
    <tr>
        <th height="30">
        <p><label>Email:</label></p>
        <input type="email" value="<?php echo $email; ?>" name="txtCorreo" id="txtCorreo"required/> 
        </th>
    </tr>
    <tr>
        <th height="30">
       <p> <label>Contraseña:</label></p>
        <input type="password" value="<?php echo $password; ?>" name="txtContrasena" id="txtContrasena" onKeyUp="nivel();" required/> 
        </th>
    </tr>
    <tr>
        <th height="30">
        <input type="hidden" name="btnGuardar" id="btnGuardar" value="Guardar" />
        <input type="button" value="Guardar" name="btnGuardar" id="btnGuardar" onClick="javascript:validar()"/>
        </th>
    </tr>
   </table>	
</form>
<canvas id="lienzo"></canvas>
</body>
</html>