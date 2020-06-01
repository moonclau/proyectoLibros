<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Libro</title>
         <?php include("template/header.php"); ?>
    </head>
    <body>
        <?php
include('config/db_connect.php');
$id=$_POST['id'];

        $query="SELECT * FROM libro WHERE id='$id'";
//$consultatitulo=$query->select('*','libros','id="'.$id.'"');
         $consulta1=$mysqli->query($query);
         while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
    ?>
        <div class="row">
    <!--Panel-->
    <div class="col-sm-5 central" style="width: auto; margin: auto auto;" >
        <div class="card" text-center>
            <div class="card-body">
                <form  action="controller/modificarlibro.php" method="post">
                <h3 class="card-title" >Modificar Libro</h3>
                <!--INICIO CUESTIONARIO-->
                <label class="card-text">ID:</label><br>
                <input type="text" id="idtitulo" name="idtitulo" readonly="readonly" value='<?php echo $fila['id']?>' class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese el titulo:</label><br>
                <input type="text" id="titulo" name="titulo" value='<?php echo $fila['titulo']?>'class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese el autor: </label>
                <input type="text" id="autor" name="autor" value='<?php echo  	$fila['autor']?>' class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese la categoria:</label><br>
                <input type="text" id="cat" name="cat" value='<?php echo $fila['categoria']?>' class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese la editorial:</label><br>
                <input type="text" id="editorial" name="editorial" value='<?php echo $fila['editorial']?>'class="form-control form-control-sm" required="required" /><br>
               <input id="btn" type="submit" value="Guardar" class="btn btn-success" style="width:330px; height: 40px; margin: 0 auto;"/>
                        </form>
         <?php }?>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
