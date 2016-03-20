$(document).on("ready", init);

function init(){
    
    $formulario=$("#formEditProfesor");
    
    $formulario.validate({
        rules:{
            curp:{
                required:true
            },
            nombre:{
                required:true
            },
            ap_pa:{
                required:true
            },
            ap_ma:{
                required:true
            },
            tel_par:{
                required:true
            },
            tel_cel:{
                required:true
            },
            email:{
                required:true,
                email:true
            },
            calle:{
                required:true
            },
            numero:{
                required:true
            },
            colonia:{
                required:true
            },
            cod_pos:{
                required:true
            },
            estado:{
                required:true
            },
            cat_fun:{
                required:true
            },
            funcion:{
                required:true
            },
            situ:{
                required:true
            }
        }
    });
    
    $("#btnEditarProfesor").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};