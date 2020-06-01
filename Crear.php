<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar contenido</title>
        
    </head>
    <body>
        
    <?php include("template/header.php"); ?>
    <br>
        <div class="row">
    <!--Panel-->
    <div class="col-sm-5 central" style="width: auto; margin: auto auto;" >
        <div class="card" text-center>
            <div class="card-body">
                
                <form  action="controller/crearlibro.php" method="post">
                <h3 class="card-title" >Agregar nuevo libro</h3><br><br>
                <!--INICIO CUESTIONARIO-->
                <label class="card-text">Ingrese el titulo:</label><br>
                <input type="text" id="titulo" name="titulo" class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese el autor: </label>
                <input type="text" id="autor" name="autor"  class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese la categoria:</label><br>
                <input type="text" id="cat" name="cat" class="form-control form-control-sm" required="required" />
                <label class="card-text">Ingrese la editorial:</label><br>
                <input type="text" id="editorial" name="editorial" class="form-control form-control-sm" required="required" /><br>
               <input id="btn" type="submit" value="Guardar" class="btn btn-success" style="width: 330px; 
                     height: 40px; margin: 0 auto;"/>
                        </form>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
