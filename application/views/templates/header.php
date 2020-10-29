<!DOCTYPE html>
<html>
	<head>
		<title>Appel Store</title>
		<link rel="icon" href="https://img.icons8.com/nolan/96/mac-os.png">
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
		<link rel="stylesheet" href ="<?php echo base_url();?>/assets/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>
			table {
                        border-collapse: collapse;
                        width 100%;
                        align:left;
                        }
                th, td {
                        padding: 6px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
			color: white;
              		}
		.nav-item {
    			margin-left: 10px;
    			background-color: black;
    			padding: 10px 20px;
    			border-radius: 12%;
			}
		#ul  {
  			list-style-type: none;
  			margin: 0;
  			padding: 0;
  			overflow: hidden;
			}

		#li {
  			float: left;
			}

		#a {
  			display: block;
  			text-align: center;
		}
		</style>
  	</head>
	<body>
	<nav class="navbar">
	  <div class="container">
	    <div class="navbar-header">
		<a class="nav-brand" href="<?php echo base_url(); ?>">Appel Store</a>
	    </div>
		<ul id="ul" class="navbar-nav">
		  <li id="li" class="nav-item "><a id="a" href="<?php echo base_url();?>">Inicio</a></li>
		  <li id="li" class="nav-item "><a id="a" href="<?php echo base_url();?>productos">Productos</a></li>
		  <li id="li" class="nav-item "><a id="a" href="<?php echo base_url();?>comprar/index">Comprar</a></li>
		  <li id="li" class="nav-item "><a id="a" href="<?php echo base_url();?>user/login">Registro</a></li>
		  <li id="li" class="nav-item "><a id="a" href="<?php echo base_url();?>acerca">Acerca De</a></li>
		</ul>
		<form class="form-inline" action="#!">
    			<input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    			<button class="btn " type="submit">Buscar</button>
  		</form>
	     </div>
	</nav>
	<div class="container">
	<hr>
