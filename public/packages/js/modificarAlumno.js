$(document).on("ready", init);

function init(){
    
    $formulario=$("#formModAlumno");
    
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
    
    $("#btnModificarAlumno").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};