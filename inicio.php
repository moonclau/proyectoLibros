<?php
	session_start();
	if(!$_SESSION['verificar']){
		header("Location: index.php");
	}
	echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <br>
<?php include("template/header.php"); ?>
<div class="contenedor">
		<h2>Libros </h2>
		
		<table>
			<tr class="head">
				<td>Id</td>
				<td>Titulo</td>
				<td>Autor</td>
				<td>Categoria</td>
                <td>Editorial</td>
              <!--  <td>pagina</td>
                <td>idioma</td>-->
			</tr>

        
		</table>
	</div>
</body>
</html>
