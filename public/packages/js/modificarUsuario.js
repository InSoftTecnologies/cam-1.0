$(document).on("ready", init);

function init(){
    
    $formulario=$("#formModUsuario");
    
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
    
    $("#btnModificarUsuario").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};