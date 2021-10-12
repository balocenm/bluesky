<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$id=$_GET['id'];
$sql="DELETE FROM empleado WHERE idEmpleado='".$id."'";
$var3=mysqli_query($var1, $sql);
if($var3){
	echo "<script> alert('correcto');
	location.href='LoginEmple.php';
	</script>";
}else{
	echo "<script> alert('incorrecto'); </script>";
}
?>