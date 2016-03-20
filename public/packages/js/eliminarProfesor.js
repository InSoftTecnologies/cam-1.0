$(document).on("ready", init);

function init(){
    
    $formulario=$("#formEliProfesor");
    
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
    
    $("#btnEliminarProfesor").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};