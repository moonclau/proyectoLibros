<?php
include('../config/db_connect.php');
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
    $email=$_POST['email'];
   // $password=$_POST['password'];
	$clave=md5($_POST['password']);
	$query="INSERT INTO usuario(nombre,apellidos,email,passwd) VALUES('$nombre','$apellido','$email','$clave')";
	if($mysqli->query($query)){
        header('Location: ../inicio.php');
	}else{
		echo "Ocurrio un error";
	}


?>