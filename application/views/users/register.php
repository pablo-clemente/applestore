<html>
<head>
<title>Registro de usuario</title>

</head>
<body>	<div class="container">

  <form class="form-signin" method="POST">
    <h2 class="form-signin-heading">Ingresar Datos</h2>
    
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required>	 
    <label for="inputCorreo" class="sr-only">Correo electronico </label>
    <input type="text" name="correo" id="inputCorreo" class="form-control" placeholder="Correo electronico" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="text" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
    <label for="inputPassword" class="sr-only">Confirmar Contraseña</label>
    <input type="text" name="passwordagain" id="inputPassword" class="form-control" placeholder="Confirmar Contraseña" required>
    
    <p>Sexo:</p>
    <input type="radio"  name="sexo" id="femenino" value="F"  >
    <label for="femenino"> Femenino</label>

    <input type="radio" name="sexo" id="masculino"  value="M"  > 
    <label for="masculino">Masculino</label>
    

    </br>

    <label for="fecha" >Fecha de nacimiento:</label>
    <input type="date" id="fecha" name="fecha"
       value="2020-08-03"
       min="1900-01-01" max="2025-12-31"  >
    

    <label for="inputDireccion" class="sr-only">Direccion</label>
    <input type="text" name="direccion" id="inputDireccion" class="form-control" placeholder="Dirección" >
 
    <label for="inputEstado" class="sr-only">Estado</label>
    <input type="text"  name="estado" id="inputEstado" class="form-control" placeholder="Estado" >

    <label for="inputMunicipio" class="sr-only">Municipio</label>
    <input type="text" name="municipio" id="inputMunicipio" class="form-control" placeholder="Municipio" >





    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
    <a class="btn btn-lg btn-primary btn-block" href="login">Regresar</a>
  </form>
</div>
</body>
</html>
