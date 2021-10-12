<?php
	$alert ='';
if(!empty($_SESSION['active'])){
	header("Location: index.php");
}else{
	
if(!empty($_POST)){
	if(empty($_POST['txtUsuario'])||empty($_POST['txtContrasena'])){
		$alert= 'Ingrese su usuario y su clave';
	}else{
		$conex = mysqli_connect("localhost", "root", "", "bluesky_db") or die("No se pudo realizar la conexion");
		
		$varUsuario= $_POST['txtUsuario'];
		$varContrasena=$_POST['txtContrasena'];
		
		$query= mysqli_query($conex, "SELECT * FROM empleado WHERE User_Emple='$varUsuario' AND Pass_Emple='$varContrasena'");
		$result = mysqli_num_rows($query);
		if($result > 0){
			$data = mysqli_fetch_array($query);
			session_start();
			print_r($data);
			$_SESSION['active'] = true;
			$_SESSION['nombre'] = $data['Nombre'];
			$_SESSION['apellido'] = $data['Apellido'];
			$_SESSION['user'] = $data['Usuario'];
			$_SESSION['pass'] = $data['Contraseña'];
			$_SESSION['usuario']= $varUsuario;
			$_SESSION['nombre'] = $varContrasena;
			header("Location: LoginEmple.php");
		}else{
			$alert= 'El usuario o la clave son incorrectos';
		}
	}
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
<title>Acceso Usuario</title>
	<link href="css/estilos_acesso.css" type="text/css" rel="stylesheet">
</head>
<body>
<form method="post" name="frm_ingreso">
	<center><h3>SESIÓN PARA ADMINISTRADORES</h3></center>
Usuario: <input name="txtUsuario" type="text" placeholder=""/><br>
Contraseña:   <input name="txtContrasena" type="password" placeholder=""/>
	<center><div class="alert"><?php echo isset($alert)? $alert: '';?></div></center><br>
	 <button type="submit">Ingresar</button>
</form></body></html>