<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp= $_GET['id'];
$var2="INSERT INTO boleta (Nom_Clie, Nom_Produc, Cantidad) VALUES('prueba', '$idp', '2')";	
	
$var3=mysqli_query($var1, $var2);


if($var3){
	echo "<script> alert('Se pudo agregar el producto');
	location.href='LoginCliente.php';
	</script>";
}else{
	echo "<script> alert('No se puedo agregar el producto'); </script>";
}
?>