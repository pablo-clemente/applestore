<h2><?= $title ?></h2>
<br>
<form action="<?php base_url();?>insert" method="post">
<label for="producto">Producto:</label><br>
<select class="form-control" name="producto" required>
<option value="" selected>Seleciona un producto</option>
<?php foreach($Productos as $Producto):?>
	<option value="<?php echo $Producto['ProductoId'];?>"><?php echo $Producto['Nombre']." precio:$".$Producto['Precio'];?></option>
<?php endforeach; ?>

</select>

<br>
<label for="cliente">Cliente:</label><br>
<select class="form-control" name="cliente" required>
<option value="" selected>Seleciona un cliente</option>
<?php foreach($Clientes as $Cliente):?>
        <option value="<?php echo $Cliente['ClienteId'];?>"><?php echo $Cliente['Nombre'];?></option>
<?php endforeach; ?>

</select><br>
<button class="btn btn-lg btn-primary btn-block" type="submit">Comprar</button>
</form>
<a class="btn btn-lg btn-primary btn-block" href="view">Ver Pedidos</a>
