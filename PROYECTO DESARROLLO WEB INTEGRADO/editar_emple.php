<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$id=$_GET['id'];
$sql="SELECT * FROM empleado WHERE idEmpleado='".$id."'";
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
		<form method="POST" action="edit_emple.php">
			<center><h3>MODIFICAR EMPLEADO</h3></center>
			<input type="hidden" name="txtid" value="<?php echo $fila['idEmpleado'] ?>">
			<label>Nombre:</label>
			<input type="text" name="txtNom" value="<?php echo $fila['Nom_Emple'] ?>"><br>
		    <label>Apellido:</label>
			<input type="text" name="txtApe" value="<?php echo $fila['Ape_Emple'] ?>"><br>
			<label>Usuario:</label>
			<input type="text" name="txtUser" value="<?php echo $fila['User_Emple'] ?>"><br>
			<label>Contraseña:</label>
			<input type="text" name="txtPass" value="<?php echo $fila['Pass_Emple'] ?>"><br>
			<label>Descripción:</label>
			<input type="text" name="txtDes" value="<?php echo $fila['Descripcion'] ?>"><br>
			<label>Enlace de foto:</label>
			<input type="text" name="txtImg" value="<?php echo $fila['img_emple'] ?>"><br>
			<button type="submit">Modificar</button>
		</form>
	 <?php } ?>
	</div>
	</body>
</html>