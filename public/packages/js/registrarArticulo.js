$(document).on("ready", init);

function init(){
    
    $formulario=$("#formRegArticulo");
    
    $formulario.validate({
        rules:{
            activo:{
                required:true
            },
            etiqueta:{
                required:true
            },
            articulo:{
                required:true
            },
            caracteristicas:{
                required:true
            },
            marca:{
                required:true
            },
            modelo:{
                required:true
            },
            costo:{
                required:true
            },
            fecha_servicio:{
                required:true
            }
        }
    });
    
    $("#btnRegArticulo").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};