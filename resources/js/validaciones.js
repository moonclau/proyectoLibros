var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
var expr1 = /^[a-zA-Z]*$/;
 
$(document).ready(function () {
    $("#boton").click(function (){ //función para el boton de enviar
        //recolectamos en variables, lo que tenga cada input.
        //Para mejor manipulación en los if's
        var nombre = $("#nombre").val();
        var apellidos = $("#apellidos").val();
        var correo = $("#correo").val();
        var passw = $("#pass").val();
        var repass = $("#repass").val();
 
        //Secuencia de if's para verificar contenido de los inputs
 
        //Verifica que no este vacío y que sean letras
        if(nombre == "" || !expr1.test(nombre)){// los #mensajes estan puestos cob un div 
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                  // con false sale de la secuencia
        }
        else{
            $("#mensaje1").fadeOut();   //Si el anterior if cumple, se oculta el error
 
            if(apellidos == "" || !expr1.test(apellidos)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();
 
                if(correo == "" ){
                    $("#mensaje3").fadeIn("slow");
                    return false;
                }
                else{
                    $("#mensaje3").fadeOut();
 
                    if(passw == ""){
                        $("#mensaje4").fadeIn("slow");
                        return false;
                    }
                }
            }
        }
 
    });//fin click


});