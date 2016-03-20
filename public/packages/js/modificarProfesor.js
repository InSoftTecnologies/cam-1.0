$(document).on("ready", init);

function init(){
    
    $formulario=$("#formModProfesor");
    
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
    
    $("#btnModificarProfesor").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};