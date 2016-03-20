$(document).on("ready", init);

function init(){
    
    $formulario=$("#formRegProfesor");
    
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
            numero_int:{
                required:true
            },
            numero_ext:{
                required:true
            },
            numero:{
                required:true
            },
            colonia:{
                required:true
            },
            cod_post:{
                required:true
            },
            municipio:{
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
            taller:{
                required:true
            },
            situacion:{
                required:true
            }
        }
    });
    
    $("#btnRegistrarProfesor").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};