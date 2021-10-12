<?php

$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$nombre = $_POST['txtNom'];
$apellido = $_POST['txtApe'];
$usuario = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$var2="INSERT INTO cliente (Nom_Clie, Ape_Clie, User_Clie, Pass_Clie, id_Stat) VALUES('$nombre', '$apellido', '$usuario', '$pass', 1)";	
	
$var3=mysqli_query($var1, $var2);


if($var3){
	echo "<script> alert('Registro correcto');
	location.href='Tienda Virtual.html';
	</script>";
}else{
	echo "<script> alert('No se puedo completar el registro'); </script>";
}
?>