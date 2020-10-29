<!DOCTYPE html>

<head>
        <title>Usuarios</title> 
	<style> table { 
			border-collapse: collapse;
			width 100%;}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
			}	
	</style>
</head>


<body>
<table align=center width=65% border=1>
        <tr><th align=center>ID</th>
        <th align=center>Nombre</th>
        <th align=center>Correo</th>
        <th align=center>Dirección</th>
        <th align=center>Estado</th>
        <th align=center>Municipio</th> </tr>



<?php
foreach ($Usuarios as $usuario)
        {
                echo "<tr>"."<td>".$usuario->ClienteID."</td>".
                '<td>'.$usuario->Nombre.'</td>'.
                '<td>'.$usuario->Correo.'</td>'.
                '<td>'.$usuario->Direccion.'</td>'.
                '<td>'.$usuario->Estado.'</td>'.
                '<td>'.$usuario->Municipio.'</td>'.'</tr>';

         }
?>
</table>
<hr>
<a href="<?php echo base_url();?>user/login" class="btn btn-default">Regresar</a>
</body>
</html>

