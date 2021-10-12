<?php
$var1 = mysqli_connect("localhost", "root", "", "bluesky_db");
$id=$_GET['id'];
$sql="SELECT * FROM productos WHERE idProduc='".$id."'";
$var3=mysqli_query($var1, $sql);
 while($fila=mysqli_fetch_array($var3)){    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Nl1ZmOD.png">
    <link rel="stylesheet" href="css/estilos_info.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Producto</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="shoeBackground">
               <img src="<?php echo $fila['img_pro']?>" width="100%">
            </div>
            <div class="info">
                <div class="shoeName">
                    <div>
                        <h1 class="big"><?php echo $fila['Nom_Produc'] ?></h1>
                        <span class="new">Nueva</span>
                    </div>
                    <h3 class="small"><?php echo $fila['Nom_Prov'] ?></h3>
                </div>
                <div class="description">
                    <h3 class="title">Información del producto</h3>
                    <p class="text"><?php echo $fila['info_pro'] ?></p>
                </div>
              
                <div class="buy-price">
                    <a href="bole_car.php?id=<?php echo $fila['Nom_Produc']?>" class="buy"><i class="fas fa-shopping-cart"></i>Añadir al carrito</a>
                    <div class="price">
                        <i class="fas fa-dollar-sign"></i>
                        <h1><?php echo $fila['Precio']?></h1>
                    </div>
                </div>
            </div>
        </div>
		 <?php } ?>
    </div>
    <script src="app.js"></script>
</body>
</html>