
<html>
<head>
<title>Entrar</title>





</head>
<body>
	<div class="container">
    <form action="<?php echo base_url();?>User/login_post" class="form-signin" method="POST">
      <h2 class="form-signin-heading">Iniciar sesión</h2>

  	  <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo electronico" required>
  		
      <label for="inputPassword" class="sr-only">Contraseña</label>
      
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <a class="btn btn-lg btn-primary btn-block" href="register">Registrar</a>
      <a class="btn btn-lg btn-primary btn-block" href="UsuariosReg">Ver Clientes Registrados</a>
   </form>
</div>
</body>
</html>

