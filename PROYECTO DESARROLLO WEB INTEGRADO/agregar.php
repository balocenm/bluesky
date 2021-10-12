<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$sql="SELECT * FROM proveedores";
$var3=mysqli_query($var1, $sql);
      
?>

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
		<form method="POST" action="agreg.php">
			<center><h3>AGREGAR PRODUCTO</h3></center>
			<label>Producto:</label><br>
			<input type="text" name="txtProduc" placeholder="Nombre del producto"><br>
		    <label>Proveedor:</label><br>
			<label for=""><select name="Nom_Prov" id="">
			<?php foreach ($var3 as $opciones):?>
			<option value="<?php echo $opciones['Nom_Prov']?>"> <?php echo $opciones['Nom_Prov']?></option>
			<?php endforeach?>
				
				</select></label>
			<br><br>
			<label>Stock:</label><br>
			<input type="text" name="txtStock" placeholder="Cantidad disponible"><br>
			<label>Costo:</label><br>
			<input type="text" name="txtCosto" placeholder="Valor unitario"><br>
			<button type="submit">Agregar</button>
		</form>
	</div>
</body>
</html>
