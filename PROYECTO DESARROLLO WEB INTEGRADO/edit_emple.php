<?php
$con = mysqli_connect("localhost", "root", "", "bluesky_db");
$idp=$_POST['txtid'];
$nom = $_POST['txtNom'];
$ape = $_POST['txtApe'];
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$des = $_POST['txtDes'];
$img = $_POST['txtImg'];
if($nom!=null||$ape!=null||$user!=null||$pass!=null||$des!=null||$img!=null){
	$up="UPDATE empleado SET Nom_Emple='$nom', Ape_Emple='$ape', User_Emple='$user', Pass_Emple='$pass', Descripcion='$des', img_emple='$img' WHERE idEmpleado='$idp'";
	$sql2=mysqli_query($con, $up);
	if($prod=1){
	echo "<script> alert('Cambios correctos. Se tiene que reiniciar para efectuar cambios');
	location.href='Tienda Virtual.html';
	</script>";
	}
}
?>