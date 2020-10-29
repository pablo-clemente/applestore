<h2><?= $title ?></h2>
<br>
<?php foreach($Productos as $Producto):?>
	<h3><?php echo $Producto['Nombre'];?></h3>
	<small class="precio">Precio:$ <?php echo $Producto['Precio'];?></small>
	<br>
	<p><a class="btn btn-default" href="<?php echo site_url('/productos/'.$Producto['slug']); ?>">Ver más</a></p>
<?php endforeach; ?>
