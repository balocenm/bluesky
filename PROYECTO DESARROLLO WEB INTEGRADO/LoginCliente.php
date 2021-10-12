<?php $conex = mysqli_connect("localhost", "root", "", "bluesky_db") or die ("No se pudo realizar la conexion");
session_start();
if(isset($_SESSION['usuario'])){
	$varBien=  $_SESSION['usuario'];
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
	   <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
      <title><?php echo $varBien;?></title>
      <link rel="stylesheet" href="css/estilos_loginusuarios.css">
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
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
              <?php echo $varBien;?>
            </div>
            <ul class="list-items">
               <li><a href="#tab1"><i class="fas fa-user"></i>Perfil</a></li>
               <li><a href="#tab2"><i class="fas fa-cart-plus"></i>Carrito</a></li>
               <li><a href="#tab3"><i class="fas fa-envelope"></i>Contacto</a></li>
               <li><a href="#tab4"><i class="fas fa-comments"></i>ChatBot</a></li>
            </ul>
         </nav>
      </div>
   <div class="secciones">
<article id="tab1">
		<h1><div class="head">
         Un gusto verte,
			<?php echo $varBien;?>  
         </div></h1>	
<form class="info">
		<?php
	    $sql=mysqli_connect("localhost", "root", "", "bluesky_db");
		$tb="Select e.idCliente, e.Nom_Clie, e.Ape_Clie, e.User_Clie, e.Pass_Clie,c.Nom_Stat, e.img_clie
			from cliente E
			INNER JOIN stat_uclient C on (e.id_Stat=c.id_Stat)
			Where User_Clie='$varBien'";
		$conex=mysqli_query($sql, $tb);
	   
	?>
		<br><table width="951" height="282" border="0" class="ventas">
		  <tbody>
			   <?php while($filas=mysqli_fetch_array($conex)){
	  ?>
			  
		    <tr>
		      <th width="118" height="34" style="text-align: left" scope="col">DATOS</th>
		      <th width="401" style="text-align: justify" scope="col"></th>
		      <th width="63" rowspan="7" style="text-align: justify" scope="col">&nbsp;</th>
		      <th width="351" rowspan="7" style="text-align: justify" scope="col"><img src="<?php echo $filas['img_clie']?>" width="200"></th>
				
	        </tr>
			  <tr>
		      <td height="33">Id:</td>
		      <td style="text-align: justify"><?php echo $filas['idCliente']?></td>
	        </tr>
		    <tr>
		      <td height="37">Nombre:</td>
		      <td style="text-align: justify"><?php echo $filas['Nom_Clie']?></td>
	        </tr>
		    <tr>
		      <td height="38">Apellido:</td>
		      <td style="text-align: justify"><?php echo $filas['Ape_Clie']?></td>
	        </tr>
		    <tr>
		      <td height="43">Usuario:</td>
		      <td style="text-align: justify"><?php echo $filas['User_Clie']?></td>
	        </tr>
		    <tr>
		      <td height="43">Contraseña:</td>
		      <td style="text-align: justify"><?php echo $filas['Pass_Clie']?></td>
	        </tr>
			  <tr>
		     <td>Estado del Usuario:</td>
		      <td style="text-align: justify"><?php echo $filas['Nom_Stat']?></td>
	        </tr>
			  <tr>
			    <td>&nbsp;</td>
			    <td style="text-align: justify">&nbsp;</td>
			    <th style="text-align: justify" scope="col">&nbsp;</th>
			    <th style="text-align: justify" scope="col"><a href="edit_perfil.php?id=<?php echo $filas['idCliente'] ?>">Editar</a>
				  </th>
		    </tr>
		      </tr>
			  <?php } ?>
	      </tbody>
    </table>
	</form>
</article>
<article id="tab2">
	<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$sql="SELECT * FROM productos";
$var3=mysqli_query($var1, $sql);
      
?>
<label>Productos:</label><br>
	<form method="POST" action="boleta.php">
		
			<label for="">
				<select name="Nom_Produc" id="">
				<?php foreach ($var3 as $opciones):?>
					<option value="<?php echo $opciones['Nom_Produc']?>"> <?php echo $opciones['Nom_Produc']?></option>
				<?php endforeach?>
				</select>
			</label>
			<label for="">Cantidad:</label>
			<input type="number" value="1" min="1" class="input1" name="Cant"><br>
		<input type="hidden" name="txtid" value="<?php echo $varBien?>">
<button type="submit">Añadir</button>
		</form>
</article>
<article id="tab3">
	 
	<form action="#" method="POST" class="msj">
						<!--<label>Nombre:</label><br>
						<input type="text" name="Nom_emisor" placeholder="Ingresa tu nombre" class="nombre-mensaje">
						<br>-->
						<label>Correo:</label><br>
						<input type="email" name="Correo" placeholder="Ingresa tu coreo" class="email-asunto"><br>
						<label>Asunto:</label><br>
						<input type="text" name="Asunto" placeholder="Ingresa el asunto" class="email-asunto"><br>
						<label>Mensaje:</label><br>
						<textarea name="Mensaje" placeholder="Ingrese su mensaje " class="nombre-mensaje"></textarea><br>
						<button type="submit">Enviar</button>
				  </form>
</article>
<article id="tab4">
	 <link rel="stylesheet" href="css/estilos_bot.css">
<div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='https://st3.depositphotos.com/8950810/17657/v/600/depositphotos_176577870-stock-illustration-cute-smiling-funny-robot-chat.jpg' class='imgRedonda'/> Blue </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">¡Hola! Soy Blue un bot y estoy para responder preguntas relacionadas con la tienda. Espero poder ayudarte. Te puedo orientar en los siguientes temas: <br>

<br>[1] Delivery. <br>
[2] Servicios. <br>
[3] Entrega incompleta de tu pedido. <br>
[4] Tu producto presenta daño. <br>
[5] Solicitar instalación o armado. <br></p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style="font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn_bot">
                                </div>
                    </form>
        </div>
    </div>
    
    <script src="app_bot.js"></script>
</article>
</div>
	   
   </body>
</html>
