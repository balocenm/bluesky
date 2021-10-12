<?php
$con = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp=$_POST['txtid'];
$nom = $_POST['txtNom'];
$ape = $_POST['txtApe'];
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$stat = $_POST['bxStat'];
$img = $_POST['txtImg'];
if($nom!=null||$ape!=null||$user!=null||$pass!=null||$stat!=null||$img!=null){
	$up="UPDATE cliente SET Nom_Clie='$nom', Ape_Clie='$ape', User_Clie='$user', Pass_Clie='$pass', id_Stat='$stat', img_clie='$img' WHERE idCliente='$idp'";
	$sql2=mysqli_query($con, $up);
	if($prod=1){
		header("location:LoginEmple.php");
	}
}
?>