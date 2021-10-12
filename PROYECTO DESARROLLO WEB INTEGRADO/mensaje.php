<?php
date_default_timezone_set('America/Lima');
$fecha_actual=date("Y-m-d H:i:s");
			//echo $fecha_actual;
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$emisor = $_POST['Nom_emisor'];
$email = $_POST['Correo'];
$asunto = $_POST['Asunto'];
$msj = $_POST['Mensaje'];
$var2="INSERT INTO mensajes (Nom_emisor, Correo, Asunto, Mensaje, Fecha) VALUES('$emisor', '$email', '$asunto', '$msj', '$fecha_actual')";	
	
$var3=mysqli_query($var1, $var2);


if($var3){
	echo "<script> alert('Se pudo mandar el mensaje');
	location.href='Tienda Virtual.php';
	</script>";
}else{
	echo "<script> alert('No se pudo mandar el mensaje); </script>";
}
	?>