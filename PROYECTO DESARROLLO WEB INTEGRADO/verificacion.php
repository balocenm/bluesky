<?php
session_start();
$varUsuario= $_POST['txtUsuario'];
$varContrasena=$_POST['txtContrasena'];
$conex = mysqli_connect("localhost", "root", "", "db_bluesky") or die("No se pudo realizar la conexion");
$consulta="SELECT * FROM login WHERE Usuario='$varUsuario' AND Contraseña='$varContrasena'";
$resultado= mysqli_query($conex, $consulta);
if($fila=mysqli_fetch_array($resultado)){
	$_SESSION['usuario']=$varUsuario;
	header("Location: index.php");
}
else{
echo '<script language = javascript>
alert("Usuario o Password errados, verificar.")
</script>';
}
?>