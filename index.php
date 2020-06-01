<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
    <script src="http:\\kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img class="wave" src="resources/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="resources/images/books.svg">
		</div>
		<div class="login-content">
			<form action="controller/login.php" method="post">
				<img src="resources/images/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="email" id="email" name="email" class="input" placeholder='email'>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" id="password" name="password" class="input" placeholder='contraseña'>
            	   </div>
            	</div>
            	<a href="registro.php">¿Olvido su contraseña?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>