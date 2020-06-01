<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
	<script src="http:\\kit.fontawesome.com/a81368914c.js"></script>
<script type="text/javascript" src="resources/js/validaciones.js" ></script>
</head>
<body>
    <img class="wave" src="resources/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="resources/images/leer.svg">
		</div>
		<div class="login-content">
			<form action="controller/registrar.php" method="post">
				<h2 class="title">Registro</h2>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
							  <input type="text" id="nombre" name="nombre" class="input" placeholder='Nombre'>
							<!--  <div id="mensaje1" class="errores"> Mail no valido</div>-->
           		   </div>
           		</div>
				   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" id="apellido" name="apellido" class="input" placeholder='Apellido'>
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="email" id="email" name="email" class="input" placeholder='Email'>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" id="password" name="password"class="input" placeholder='Contraseña'>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" id="rpassword" name="rpassword" class="input"  placeholder='Repite contraseña'>
            	   </div>
            	</div>
            	<a href="index.php">Iniciar sesion</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>