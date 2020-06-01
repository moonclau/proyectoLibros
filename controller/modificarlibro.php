<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modificarlibro
 *
 * @author claudia
 */

include('../config/db_connect.php');
$idlibto=$_POST['idtitulo'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$cat=$_POST['cat'];
$editorial=$_POST['editorial'];
$valores="titulo = '".$titulo."'";
/*
$cons="SELECT * FROM libro WHERE id='$id'";
		$consulta1=$mysqli->query($cons);
        $fila=$consulta1->fetch_array(MYSQLI_ASSOC);
  */
        $campos="titulo = '$titulo',autor='$autor',categoria = '$cat', editorial = '$editorial'";
        //"titulo = '$titulo',autor='$autor',categoria = '$cat', editorial = '$editorial'","id=".$idlibto."
        $query="UPDATE libro SET $campos WHERE id='$idlibto'";
	if($mysqli->query($query)){
        header('Location: ../inicio.php');
	}else{
		echo "Error no se pudo actualizar los datos";
	}
?>
