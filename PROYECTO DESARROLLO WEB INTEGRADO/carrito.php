<?php $conex = mysqli_connect("localhost", "root", "", "bluesky_db") or die ("No se pudo realizar la conexion");
session_start();
if(isset($_SESSION['usuario'])){
	$varBien=  $_SESSION['usuario'];
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<title>Tienda Virtual</title>
	<link href="css/filtros.css" type="text/css" rel="stylesheet">

	<nav>
         <div class="logo">
            BlueSky
         </div>
         <ul>

            <li>
               <label for="btn-1" class="show">Nosotros +</label>
               <a href="#tab1">Comprar</a>
               <input type="checkbox" id="btn-1">
				<ul>
                  <li><a href="Contacto.php">Contacto</a></li>
               </ul>
            </li>
            <li>
               <label for="btn-2" class="show">Servicios +</label>
               <a href="Servicios.html">Servicios</a>
               <input type="checkbox" id="btn-2">
               <ul>
                  <li><a href="#">Arma tu PC</a></li>
                  <li><a href="#">Delivery</a></li>
				  <li><a href="#">Asistencia</a></li> 
               </ul>
            </li>
			 <li>
			 <label for="btn-3" class="show">Productos +</label>
               <a href="#">Productos</a>
               <input type="checkbox" id="btn-3">
               <ul>
                  <li><a href="#">Laptops</a></li>
                  <li><a href="#">Pc</a></li>
                  <li><a href="#">Accesorios</a></li>
               </ul>
				 </li>
            <li><a href="">Iniciar Sesión</a>
			 <input type="checkbox" id="btn-4">
               <ul>
                  <li><a href="Acceso_Clien.php">Cliente</a></li>
                  <li><a href="Acceso_Emple.php">Empleado</a></li>
               </ul>
			 </li>
         </ul>
      </nav>
</head>
<body>
	<div id="slider">
	<figure>
		<img src="https://i.imgur.com/GLdOoOZ.jpg">
		<img src="https://i.imgur.com/57DpHcD.jpg">
		<img src="https://i.imgur.com/s0BIQE1.jpg">
	  <img src="https://i.imgur.com/05ZXpcU.jpg">
	</figure>
	</div> <br>
      <header>
        <div class="container">
            <h1>Filtro</h1>
            <!-- BOTÓN DE BÚSQUEDA -->
            <div class="search-box">
                <form action="" onsubmit="return false">
                    <input type="text" id="search" placeholder="Buscar">
                </form>
            </div>
            <div class="filter-box">
                <a href="#" class="btn active" data-filter="todo">Todo</a>
                <a href="#" class="btn" data-filter="laptop">Laptops</a>
                <a href="#" class="btn" data-filter="headsets">Headsets</a>
                <a href="#" class="btn" data-filter="mouse">Mouse</a>
                <a href="#" class="btn" data-filter="teclado">Teclados</a>
            </div>
        </div>
    </header>
    
    <main>
		
        <div class="slide-container">
        <section class="container" id="store-products">
        
        <div class="store-product laptop">
          <img src="https://i.imgur.com/Njbsc9v.jpg" alt="">
          <div class="product-details">
			  <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 1";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/5000.00</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
        <div class="store-product laptop">
            <img src="https://i.imgur.com/Sgaze6c.jpg" alt="">
            <div class="product-details">
                <h2>LAPTOP LENOVO S340-14 TWO COLORS</h2>
                <p> <span>s/2853.00</span> s/2359.00</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product laptop">
          <img src="https://i.imgur.com/WcSyqh1.jpg" alt="">
            <div class="product-details">
               <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 2";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/2270.00</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
        <div class="store-product headsets">
          <img src="https://i.imgur.com/wZ9kd7U.jpg" alt="">
            <div class="product-details">
                <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 6";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/70.00</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
        <div class="store-product headsets">
          <img src="https://i.imgur.com/01V1NEj.jpg" alt="">
            <div class="product-details">
                <h2>LUDICO MIC HG801R GAMER</h2>
                <p> <span>s/135.00</span> s/119.00</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product headsets">
          <img src="https://i.imgur.com/55iIqex.jpg" alt="">
            <div class="product-details">
                <h2>AUDIFONO GH 520 GAMER EDITION</h2>
                <p> <span>s/99.99</span> s/95.00</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product mouse">
          <img src="https://i.imgur.com/jgpykmj.jpg" alt="">
            <div class="product-details">
                <h2>MOUSE GAMING LENOVO IDEAPAD M100RB</h2>
                <p> <span>s/69.99</span> s/59.99</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product headsets">
          <img src="https://i.imgur.com/xCNbEtI.jpg" alt="">
            <div class="product-details">
                <h2>AUDIFONO GAMING ORCUS NEGRO</h2>
                <p> <span>s/85.90</span> s/79.90</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product headsets">
          <img src="https://i.imgur.com/5kr5Kkn.jpg" alt="">
            <div class="product-details">
                <h2>AUDIFONO GH 530 GAMER EDITION</h2>
                <p> <span>s/99.99</span> s/95.00</p>
                <a href="#">Agotado</a>
            </div>
        </div>
        <div class="store-product teclado">
            <img src="https://i.imgur.com/uDlE46z.jpg" alt="">
            <div class="product-details">
               <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 3";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/95.50</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
        <div class="store-product teclado">
            <img src="https://i.imgur.com/SbvTJ0e.jpg" alt="">
            <div class="product-details">
                 <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 5";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/89.00</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
        <div class="store-product teclado">
          <img src="https://i.imgur.com/xTMFgmM.jpg" alt="">
            <div class="product-details">
              <?php
			  	$sql=mysqli_connect("localhost", "root", "", "bluesky_db");
			  	$tb="select * from productos where idProduc = 4";
			  	$conex=mysqli_query($sql, $tb);
			  	while($filas=mysqli_fetch_array($conex)){
			  	?>
                <h2><?php echo $filas['Nom_Produc']?></h2>
                <p> <span>s/110.00</span>  s/<?php echo $filas['Precio']?></p>
                <a href="Info_produc.php?id=<?php echo $filas['idProduc'] ?>">Ver más</a>
			  	<?php } ?>
            </div>
        </div>
    </section>
</div>
</main>
<script>
	const btns = document.querySelectorAll('.btn');
    const storeProducts = document.querySelectorAll('.store-product');
for (i = 0; i < btns.length; i++) {

    btns[i].addEventListener('click', (e) => {
        e.preventDefault()
        
        const filter = e.target.dataset.filter;
        console.log(filter);
        
        storeProducts.forEach((product)=> {
            if (filter === 'todo'){
                product.style.display = 'block'
            } else {
                if (product.classList.contains(filter)){
                    product.style.display = 'block'
                } else {
                    product.style.display = 'none'
                }
            }
        });
    });
};

// FILTRO DE BÚSQUEDA
const search = document.getElementById("search");
const productName = document.querySelectorAll(".product-details h2");

// UNA MEJOR MANERA DE FILTRAR A TRAVÉS DE LOS PRODUCTOS
search.addEventListener("keyup", filterProducts);


function filterProducts(e) {
    const text = e.target.value.toLowerCase();
    productName.forEach(function(product) {
        const item = product.firstChild.textContent;
        if (item.toLowerCase().indexOf(text) != -1) {
            product.parentElement.parentElement.style.display = "block"
        } else {
            product.parentElement.parentElement.style.display = "none"
        }
    })
}

	</script>

	<footer class="footer">
        <div class="footer-left">
		<p><h2>BlueSky es una empresa enfocada a la venta online de Laptops, Computadoras y Accesorios.</h2></p>
		</div>
		<ul class="footer-right">
		   <li><h2>Productos</h2>
		    	<ul class="box">
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Computadoras</a></li>
						<li><a href="#">Accesorios</a></li>
				</ul>
			</li>
			<li><h2>Servicios</h2>
		    	<ul class="box">
						<li><a href="#">Arma tu PC</a></li>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Atención al cliente</a></li>
				</ul>
			</li>
			<li><h2>Dirección</h2>
		    	<ul class="box">
						<li><a href="#">San Isidro 123, Los Ruiseñores 45</a></li>
				</ul>
			</li>
		</ul>
		<div class="footer-bottom">
			<p>Todos los derechos reservados &copy;</p>
		</div>
   </footer>
</body>
</html>
