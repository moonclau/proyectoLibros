<?php

	$mysqli= new mysqli("localhost", "root", "", "unidad4y3");
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");