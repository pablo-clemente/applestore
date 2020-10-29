<h2><?php echo $Producto['Nombre']; ?></h2>
<?php
	if($Producto['slug'] == "iphone-11-pro"){
		$link = 'iphone11pro.jpg';
	}elseif($Producto['slug'] == "iphone-11-pro-max"){	
		$link = 'iphone11promax.jpg';
	}else{
		$link = 'iphone11.jpg';
	}
?>
<img src="<?php echo base_url();?>images/<?php echo $link?>" width="230" height="230">
<hr>
<table align=left width=35% border=1>
  <tr>

    <th scope="row">Propiedad</th>

    <th>Especificación</th>

  </tr>

  <tr>
    <th>Precio</th>

    <td>$ <?php echo $Producto['Precio']; ?></td>
  </tr>

  <tr>

    <th>Color</th>

    <td><?php echo $Producto['Color']; ?></td>
  </tr>

  <tr>

    <th>Capacidad</th>

    <td><?php echo $Producto['Capacidad']; ?></td>
  </tr>

   <tr>

    <th>Pantalla</th>

    <td><?php echo $Producto['Pantalla']; ?></td>
  </tr>

  <tr>

    <th>Cámara</th>

    <td><?php echo $Producto['Camara']; ?></td>
  </tr>

  <tr>

    <th>Procesador</th>

    <td><?php echo $Producto['Procesador']; ?></td>
  </tr>

  <tr>

    <th>Sistema Operativo</th>

    <td><?php echo $Producto['Sistema_operativo']; ?></td>
  </tr>

</table>

