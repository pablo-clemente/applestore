<!DOCTYPE html>
<html>
<head>
        <title>hola</title>
</head>

<body>

<?php echo $this->session->userdata('$data');?>

<h2> Cliente Registrado Exitosamente! </h2>
<a href="<?php echo base_url();?>user/login" class="btn">Regresar</a>
<body>
</html>

