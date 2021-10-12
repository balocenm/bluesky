<?php $conex = mysqli_connect("localhost", "root", "", "bluesky_db") or die ("No se pudo realizar la conexion");
session_start();
if(isset($_SESSION['usuario'])){
	$varBien=  $_SESSION['usuario'];
	$varNombre= $_SESSION['nombre'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
<title><?php echo $varBien;?></title>
	 <link rel="stylesheet" href="css/estilos_loginempleados.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="main.js"></script>
	<nav id="barra">
         <div class="logo">
            BlueSky
         </div>
         <ul>
            <li><a href="Cerrar.php">Cerrar sesión</a></li>
         </ul>
</nav>
</head>
<body>
	<div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-user"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
              <?php echo $varBien;?>
            </div>
            <ul class="list-items">
               <li><a href="#tab1"><i class="fas fa-user"></i>Perfil</a></li>
               <li><a href="#tab2"><i class="fas fa-database"></i>Productos</a></li>
               <li><a href="#tab3"><i class="fas fa-users "></i>Clientes</a></li>
               <li><a href="#tab4"><i class="fas fa-address-card"></i>Empleados</a></li>
				<li><a href="#tab5"><i class="fas fa-envelope"></i>Bandeja</a></li>
				<li><a href="#tab6"><i class="fas fa-table "></i>Reporte</a></li>
            </ul>
         </nav>
      </div>
      <div class="content">
         
      </div>
<div class="secciones">
<article id="tab1">
		<h1><div class="header">
         Un gusto verte,
			<?php echo $varBien;?>  
         </div></h1>	
<form class="info">
		<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
		$tb="select * from empleado where User_Emple='$varBien'";
		$conex=mysqli_query($sql, $tb);
	   
	?>
		<br><table width="951" height="282" border="0">
		  <tbody>
			   <?php while($filas=mysqli_fetch_array($conex)){
      $img =$filas['img_emple']
	  ?>
			  
		    <tr>
		      <th width="118" height="34" style="text-align: left" scope="col">DATOS</th>
		      <th width="401" style="text-align: justify" scope="col"></th>
		      <th width="63" rowspan="7" style="text-align: justify" scope="col">&nbsp;</th>
		      <th width="351" rowspan="7" style="text-align: justify" scope="col"><img src="<?php echo $filas['img_emple']?>" width="200"></th>
				
	        </tr>
			  <tr>
		      <td height="33">Id:</td>
		      <td style="text-align: justify"><?php echo $filas['idEmpleado']?></td>
	        </tr>
		    <tr>
		      <td height="37">Nombre:</td>
		      <td style="text-align: justify"><?php echo $filas['Nom_Emple']?></td>
	        </tr>
		    <tr>
		      <td height="38">Apellido:</td>
		      <td style="text-align: justify"><?php echo $filas['Ape_Emple']?></td>
	        </tr>
		    <tr>
		      <td height="43">Usuario:</td>
		      <td style="text-align: justify"><?php echo $filas['User_Emple']?></td>
	        </tr>
		    <tr>
		      <td height="43">Contraseña:</td>
		      <td style="text-align: justify"><?php echo $filas['Pass_Emple']?></td>
	        </tr>
			  <tr>
		     <td>Descripción:</td>
		      <td style="text-align: justify"><?php echo $filas['Descripcion']?></td>
	        </tr>
		      </tr>
			  <?php } ?>
	      </tbody>
    </table>
	</form>
</article>
<article id="tab2">
	<?php
  //ESTABLECEMOS CONEXION CON LA BASE DE DATOS
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
  //SELECIONAMOS UNA TABLA
        $tb="select * from productos";
        $conex=mysqli_query($sql, $tb);
	?>
<form action="">
  <!--CREAMOS UNA TABLA PARA RELLENAR LOS DATOS OBTENIDOS-->
<table width="1083" height="197" border="0" class="ventas">
  <tbody>
    <tr>
      <th height="60" style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col"><a href="agregar.php">Agregar</a></th>
    </tr>
    <tr>
      <th width="63" height="60" style="text-align: center" scope="col">ID</th>
      <th width="281" style="text-align: center" scope="col">PRODUCTO</th>
      <th width="128" style="text-align: center" scope="col">PROVEEDOR</th>
      <th width="109" style="text-align: center" scope="col">STOCK</th>
      <th width="154" style="text-align: center" scope="col">COSTO s/.</th>
      <th width="353" style="text-align: center" scope="col">ACCIONES</th>
    </tr>
	  <?php while($filas=mysqli_fetch_array($conex)){
      
	  ?>
    <tr>
      <td height="69" style="text-align: center"><?php echo $filas['idProduc']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Produc']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Prov']?></td>
      <td style="text-align: center"><?php echo $filas['Stock']?></td>
      <td style="text-align: center"><?php echo $filas['Precio']?></td>
      <td style="text-align: center">
		  <a href="editar.php?id=<?php echo $filas['idProduc'] ?>">Editar</a>
		  <a href="eliminar.php?id=<?php echo $filas['idProduc'] ?>">Eliminar</a>
		</td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
</form>
</article>
<article id="tab3">
	<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
        $tb="select * from cliente";
        $conex=mysqli_query($sql, $tb);
	   
	?>
<form action="">
	<table width="1087" height="139" border="0" class="ventas">
  <tbody>
    <tr>
      <th width="41" height="60" style="text-align: center" scope="col">ID</th>
      <th width="212" style="text-align: center" scope="col">NOMBRE</th>
      <th width="133" style="text-align: center" scope="col">APELLIDO</th>
      <th width="129" style="text-align: center" scope="col">USUARIO</th>
      <th width="181" style="text-align: center" scope="col">CONTRASEÑA</th>
      <th width="162" style="text-align: center" scope="col"><a href="javascript:abrir()">ESTADO<</a></th>
		 <th width="275" style="text-align: center" scope="col">ACCIONES</th>
    </tr>
	  <?php while($filas=mysqli_fetch_array($conex)){
      
	  ?>
    <tr>
      <td height="69" style="text-align: center"><?php echo $filas['idCliente']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Clie']?></td>
      <td style="text-align: center"><?php echo $filas['Ape_Clie']?></td>
      <td style="text-align: center"><?php echo $filas['User_Clie']?></td>
      <td style="text-align: center"><?php echo $filas['Pass_Clie']?></td>
	 <td style="text-align: center"><?php echo $filas['id_Stat']?></td>
      <td style="text-align: center">
		  <a href="editar_clie.php?id=<?php echo $filas['idCliente'] ?>">Editar</a>
		  <a href="eliminar_clie.php?id=<?php echo $filas['idCliente'] ?>">Eliminar</a>
		</td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
</form>
	
	<div class="ventana" id="vent">
		<div id="cerrar"><a href="javascript:cerrar()"><img src="https://i.imgur.com/KGq2x5J.png"></a></div>
<center>
	<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ESTADO</th>
    </tr>
    <tr>
      <td style="text-align: center">1</td>
      <td style="text-align: center">Disponible</td>
    </tr>
    <tr>
      <td style="text-align: center">2</td>
      <td style="text-align: center">Bloqueado</td>
    </tr>
	  <tr>
      <td style="text-align: center">3</td>
      <td style="text-align: center">Supendido</td>
    </tr>
  </tbody>
</table>
		</center>
	</div>	
</article>
<article id="tab4">
	<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
		$tb="select * from empleado";
		$conex=mysqli_query($sql, $tb);
	   
	?>
<form action="">
<table width="1084" height="136" border="0" class="ventas">
  <tbody>
    <tr>
      <th width="46" height="60" style="text-align: center" scope="col">ID</th>
      <th width="248" style="text-align: center" scope="col">NOMBRE</th>
      <th width="155" style="text-align: center" scope="col">APELLIDO</th>
      <th width="150" style="text-align: center" scope="col">USUARIO</th>
      <th width="212" style="text-align: center" scope="col">CONTRASEÑA</th>
		 <th width="286" style="text-align: center" scope="col">ACCIONES</th>
    </tr>
	  <?php while($filas=mysqli_fetch_array($conex)){
      
	  ?>
    <tr>
      <td height="69" style="text-align: center"><?php echo $filas['idEmpleado']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Emple']?></td>
      <td style="text-align: center"><?php echo $filas['Ape_Emple']?></td>
      <td style="text-align: center"><?php echo $filas['User_Emple']?></td>
      <td style="text-align: center"><?php echo $filas['Pass_Emple']?></td>
      <td style="text-align: center">
		  <a href="editar_emple.php?id=<?php echo $filas['idEmpleado'] ?>">Editar</a>
		  <a href="eliminar_emple.php?id=<?php echo $filas['idEmpleado'] ?>">Eliminar</a>
		</td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
</form>
</article>
<article id="tab5">
	<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
        $tb="select * from mensajes";
        $conex=mysqli_query($sql, $tb);
	   
	?>
<form action="">
	<table width="1084" height="139" border="0">
  <tbody>
    <tr>
      <th width="41" height="60" style="text-align: center" scope="col">EMISOR</th>
      <th width="212" style="text-align: center" scope="col">CORREO</th>
      <th width="133" style="text-align: center" scope="col">ASUNTO</th>
      <th width="129" style="text-align: center" scope="col">MENSAJE</th>
      <th width="181" style="text-align: center" scope="col">FECHA</th>
    </tr>
	  <?php while($filas=mysqli_fetch_array($conex)){
      
	  ?>
    <tr>
      <td height="69" style="text-align: center"><?php echo $filas['Nom_emisor']?></td>
      <td style="text-align: center"><?php echo $filas['Correo']?></td>
      <td style="text-align: center"><?php echo $filas['Asunto']?></td>
      <td style="text-align: center"><?php echo $filas['Mensaje']?></td>
      <td style="text-align: center"><?php echo $filas['Fecha']?></td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
</form>
</article>
	<article id="tab6">
	<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
        $tb="Select b.Nom_Clie, p.Nom_Produc, p.Nom_Prov, round(p.Precio, 2) as Precio, b.Cantidad , round(p.Precio * b.Cantidad, 2) as Total
from productos p
INNER JOIN boleta b on (b.Nom_Produc = p.Nom_Produc)";
        $conex=mysqli_query($sql, $tb);
	   
	?>
<form action="">
	<table width="1085" height="204" border="0" class="ventas">
  <tbody>
    <tr>
      <th height="60" style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col">VENTAS</th>
      <th style="text-align: center" scope="col">&nbsp;</th>
      <th style="text-align: center" scope="col"><a href="excel.php">Generar Excel</a></th>
    </tr>
    <tr>
      <th width="81" height="60" style="text-align: center" scope="col">Cliente</th>
      <th width="329" style="text-align: center" scope="col">Producto</th>
      <th width="206" style="text-align: center" scope="col">Proveedor</th>
      <th width="200" style="text-align: center" scope="col">Precio</th>
		<th width="200" style="text-align: center" scope="col">Cantidad</th>
      <th width="271" style="text-align: center" scope="col">Total</th>
    </tr>
	  <?php while($filas=mysqli_fetch_array($conex)){
      
	  ?>
      
      <tr>
      <td height="69" style="text-align: center"><?php echo $filas['Nom_Clie']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Produc']?></td>
      <td style="text-align: center"><?php echo $filas['Nom_Prov']?></td>
      <td style="text-align: center"><?php echo $filas['Precio']?></td>
		  <td style="text-align: center"><?php echo $filas['Cantidad']?></td>
      <td style="text-align: center"><?php echo $filas['Total']?></td>
    </tr>
	  <tr>
	  <?php } ?>
  </tbody>
</table>
</form>

</article>
</div>
	<script>
	function abrir(){
    document.getElementById("vent").style.display="block";
	}
		function cerrar(){
			document.getElementById("vent").style.display="none";
		}
	</script>
</body>
</html>
