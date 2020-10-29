<table>
        <tr><th>ID</th>
        <th>id_producto</th>
	<th>id_cliente</th>
	<th>Status</th>
	<th>Fecha</th>

<?php
foreach ($Pedidos as $Pedido)
        {
                echo "<tr>"."<td>".$Pedido['PedidoId']."</td>".
                '<td>'.$Pedido['ProductoId'].'</td>'.
                '<td>'.$Pedido['ClienteId'].'</td>'.
                '<td>'.$Pedido['Status'].'</td>'.
                '<td>'.$Pedido['Fecha'].'</td>'.'</tr>';

         }
?>
</table>
<hr>
<a href="<?php echo base_url();?>comprar/index" class="btn btn-default">Regresar</a>

