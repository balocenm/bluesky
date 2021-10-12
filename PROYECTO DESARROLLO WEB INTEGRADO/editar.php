<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$id=$_GET['id'];
$sql="SELECT * FROM productos WHERE idProduc='".$id."'";
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
		<form method="POST" action="edit.php">
			<center><h3>MODIFICAR PRODUCTO</h3></center>
			<input type="hidden" name="txtid" value="<?php echo $fila['idProduc'] ?>">
			<label>Producto:</label>
			<input type="text" name="txtProduc" value="<?php echo $fila['Nom_Produc'] ?>"><br>
		  <label>Proveedor:</label>
				<select name="bxProv" value="<?php echo $fila['Nom_Prov'] ?>">
					<option value="HP">HP</option>
					<option value="LENOVO">LENOVO</option>
					<option value="CYBERTEL">CYBERTEL</option>
					<option value="ANTRYX">ANTRYX</option>
					<option value="XBLADE">XBLADE</option>
					<option value="MICRONICS">MICRONICS</option>
				</select>
			<br>
			<label>Stock:</label>
			<input type="text" name="txtStock" value="<?php echo $fila['Stock'] ?>"><br>
			<label>Costo:</label>
			<input type="text" name="txtCosto" value="<?php echo $fila['Precio'] ?>"><br>
			<button type="submit">Modificar</button>
		</form>
	 <?php } ?>
	</div>
	</body>
</html>