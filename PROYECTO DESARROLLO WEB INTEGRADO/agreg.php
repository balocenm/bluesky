<?php

$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$prod = $_POST['txtProduc'];
$prov = $_POST['Nom_Prov'];
$stock = $_POST['txtStock'];
$costo = $_POST['txtCosto'];
$var2="INSERT INTO productos (Nom_Produc, Nom_Prov, Stock, Precio) VALUES('$prod', '$prov', '$stock', '$costo')";	
	
$var3=mysqli_query($var1, $var2);


if($var3){
	echo "<script> alert('Se pudo agregar el producto');
	location.href='LoginEmple.php';
	</script>";
}else{
	echo "<script> alert('No se puedo agregar el producto'); </script>";
}
?>