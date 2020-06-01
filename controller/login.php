<?php
include('../config/db_connect.php');
$email=$_POST['email'];
$clave=md5($_POST['password']);
$query="SELECT * FROM usuario WHERE email='$email' AND passwd='$clave'";
$consulta2=$mysqli->query($query);
if($consulta2->num_rows>=1){
    $fila=$consulta2->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['user']=$fila['Nombre'];
    $_SESSION['verificar']=true;
    header("Location:../inicio.php");
}else{
    echo "Los datos son incorrectos";
}
?>
