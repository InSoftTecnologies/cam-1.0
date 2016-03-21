$(document).on("ready", init);

function init(){
    
    $formulario=$("#formEliUsuario");
    
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
    
    $("#btnEliminarUsuario").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};