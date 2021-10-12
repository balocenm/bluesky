<?php
$con = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp=$_POST['txtid'];
$prod = $_POST['txtProduc'];
$prov = $_POST['bxProv'];
$stock = $_POST['txtStock'];
$costo = $_POST['txtCosto'];
if($prod!=null||$prov!=null||$stock!=null||$costo!=null){
	$up="UPDATE productos SET Nom_Produc='$prod', Nom_Prov='$prov', Stock='$stock', Precio='$costo' WHERE idProduc='$idp'";
	$sql2=mysqli_query($con, $up);
	if($prod=1){
		header("location:LoginEmple.php");
	}
}
?>