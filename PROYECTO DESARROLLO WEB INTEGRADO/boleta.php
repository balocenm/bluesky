<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp=$_POST['txtid'];
$prod = $_POST['Nom_Produc'];
$cant = $_POST['Cant'];
$var2="INSERT INTO boleta (Nom_Clie, Nom_Produc, Cantidad) VALUES('$idp', '$prod', '$cant')";	
	
$var3=mysqli_query($var1, $var2);


if($var3){
	echo "<script> alert('Se pudo agregar el producto');
	location.href='LoginCliente.php';
	</script>";
}else{
	echo "<script> alert('No se puedo agregar el producto'); </script>";
}
?>