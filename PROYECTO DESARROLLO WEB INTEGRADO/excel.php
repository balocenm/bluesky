<?php
header("Content-Type: aplication/xls");
header("Content-Disposition: attachment; filename= archivo.xls");
?>
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
      <th style="text-align: center" scope="col">&nbsp;</th>
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
