$(document).on("ready", init);

function init(){
    
    $formulario=$("#formEliAlumno");
    
    $formulario.validate({
        rules:{
            nombre:{
                required:true
            },
            ap_pa:{
                required:true
            },
            ap_ma:{
                required:true
            }
        }
    });
    
    $("#btnEliminarAlumno").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};