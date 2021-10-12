<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
<title>Registro</title>
	<link href="css/estilos_agregar.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div>
		<form method="POST" action="regis_log.php">
			<center><h3>REGISTRO</h3></center>
			<label>Nombre:</label><br>
			<input type="text" name="txtNom" placeholder="Ingrese un nombre"><br>
		    <label>Apellido:</label><br>
			<input type="text" name="txtApe" placeholder="Ingrese un apellido"><br>
			<label>Usuario:</label><br>
			<input type="text" name="txtUser" placeholder="Ingrese nombre de usuario"><br>
			<label>Contraseña:</label><br>
			<input type="password" name="txtPass" placeholder=""><br>
			<button type="submit">Registrar</button>
		</form>
	</div>
</body>
</html>