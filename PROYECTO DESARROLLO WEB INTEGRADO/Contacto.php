<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
</head>
<body>
	
	<nav>
         <div class="logo">
            BlueSky
         </div>
         <ul>

            <li>
               <label for="btn-2" class="show">Redes +</label>
               <a href="Servicios.html">Redes Sociales</a>
               <ul>
                  <li><a href="https://www.facebook.com/BlueSky-103960541935658/">Facebook</a></li>
                  <li><a href="https://www.instagram.com/blue_sky_oficial6/">Instagram</a></li>
				   <li><a href="https://www.youtube.com/channel/UCWDeX6eaN_-pxt9vVwSU7_A">Youtube</a></li> 
               </ul>
            </li>
	
            <li><a href="Tienda Virtual.html">Volver</a>
			 </li>
         </ul>
      </nav>

	<div id="contenidos-paginas">
		<div id="centro3">
			<h2>
				<em class="encabezados t1">Puedes contactarnos por nuestras redes sociales</em> 
				<em class="encabezados t2"></em>
			</h2>
			<p class="descripcion-pagina">
				Consulta a nuestros especialistas
			</p>
			<hr>

			<div id="contenido-nosotros">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
						Contactanos al<br>
						Celular: <strong>987654321</strong><br>
						Teléfono: <strong>666-666</strong><br>
						Email: <strong><a href="mailto: atencionbluesky@gmail.com" class="email-contacto">atencionbluesky@gmail.com</a></strong>
					</p>
				</div>	


				<div id="derecha">
					<form action="mensaje.php" method="POST">
						<label>Nombre:</label><br>
						<input type="text" name="Nom_emisor" placeholder="Ingresa tu nombre" class="nombre-mensaje">
						<br>
						<label>Correo:</label><br>
						<input type="email" name="Correo" placeholder="Ingresa tu coreo" class="email-asunto"><br>
						<label>Asunto:</label><br>
						<input type="text" name="Asunto" placeholder="Ingresa el asunto" class="email-asunto"><br>
						<label>Mensaje:</label><br>
						<textarea name="Mensaje" placeholder="Ingrese su mensaje " class="nombre-mensaje"></textarea><br>
						<button type="submit">Enviar</button>

				  </form>
				</div>
				<div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.745045172656!2d-77.04458368578753!3d-12.06105504544889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9c79a4adbef%3A0x3226ab0d70a1a44c!2sPartido%20Per%C3%BA%20Libre!5e0!3m2!1ses-419!2spe!4v1624126593007!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="pie">
		<div id="centro-pie">
			<p>
				Copyright BlueSky
		          Perú  <a href="BlueSky@gmail.com" class="contacto"> Todos los derechos reservados </a> - 2021
			</p>
		</div>
	</div>
</body>
</html>