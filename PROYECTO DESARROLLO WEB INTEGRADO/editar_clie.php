<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$id=$_GET['id'];
$sql="SELECT * FROM cliente WHERE idCliente='".$id."'";
$var3=mysqli_query($var1, $sql);
 while($fila=mysqli_fetch_array($var3)){    
?>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
<title>Modificar</title>
	<link href="css/estilos_agregar.css" type="text/css" rel="stylesheet">
</head>
<body>
<div>
	
	<link href="css/estilos_agregar.css" type="text/css" rel="stylesheet">
		<form method="POST" action="edit_clie.php">
			<center><h3>MODIFICAR CLIENTE</h3></center>
			<input type="hidden" name="txtid" value="<?php echo $fila['idCliente'] ?>">
			<label>Nombre:</label>
			<input type="text" name="txtNom" value="<?php echo $fila['Nom_Clie'] ?>"><br>
		    <label>Apellido:</label>
			<input type="text" name="txtApe" value="<?php echo $fila['Ape_Clie'] ?>"><br>
			<label>Usuario:</label>
			<input type="text" name="txtUser" value="<?php echo $fila['User_Clie'] ?>"><br>
			<label>Contraseña:</label>
			<input type="text" name="txtPass" value="<?php echo $fila['Pass_Clie'] ?>"><br>
			<label>Estado:</label>
			 <select name="bxStat">
					<option value="1">Disponible</option>
					<option value="2">Bloqueado</option>
					<option value="3">Suspendido</option>
			</select><br><br>
			<label>Enlace de foto:</label>
			<input type="text" name="txtImg" value="<?php echo $fila['img_clie'] ?>"><br>
			<button type="submit">Modificar</button>
		</form>
	 <?php } ?>
	</div>
	</body>
</html>