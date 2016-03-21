$(document).on("ready", init);

function init(){
    
    $formulario=$("#formRegUsuario");
    
    $formulario.validate({
        rules:{
            email:{
                required:true
            },
            password:{
                required:true
            },
            id:{
                required:true
            }
        }
    });
    
    $("#btnRegistrarUsuario").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};