<?php
$con = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp=$_POST['txtid'];
$nom = $_POST['txtNom'];
$ape = $_POST['txtApe'];
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$img = $_POST['txtImg'];
if($nom!=null||$ape!=null||$user!=null||$pass!=null||$img!=null){
	$up="UPDATE cliente SET Nom_Clie='$nom', Ape_Clie='$ape', User_Clie='$user', Pass_Clie='$pass', img_clie='$img' WHERE idCliente='$idp'";
	$sql2=mysqli_query($con, $up);
	if($prod=1){
	echo "<script> alert('Cambios correctos. Se tiene que reiniciar su cuenta para efectuar cambios');
	location.href='Tienda Virtual.html';
	</script>";
	}
}
?>