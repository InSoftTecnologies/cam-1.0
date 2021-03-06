$(document).on("ready", init);

function init(){
    
    $formulario=$("#formRegAlumno");
    
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
            sexo:{
                required:true
            },
            taller:{
                required:true
            },
            tel_cel:{
                required:true
            },
            tel_emer:{
                required:true
            },
            nombre_tr:{
                required:true
            },
            ap_pa_tr:{
                required:true
            },
            ap_ma_tr:{
                required:true
            },
            tel_par_tr:{
                required:true
            },
            tel_cel_tr:{
                required:true
            },
            calle_tr:{
                required:true
            },
            numero_tr:{
                required:true
            },
            colonia_tr:{
                required:true
            },
            cod_pos_tr:{
                required:true
            },
            estado_tr:{
                required:true
            },
            disc:{
                required:true
            }
            ,
            peso:{
                required:true
            }
            ,
            talla:{
                required:true
            }
            ,
            med_apr:{
                required:true
            }
            ,
            med_res:{
                required:true
            }
            ,
            tip_san:{
                required:true
            }
            ,
            serv_medic:{
                required:true
            }
            ,
            num_afi:{
                required:true
            }
            ,
            res_fis:{
                required:true
            }
        }
    });
    
    $("#btnRegistrarAlumno").click(function(){
        
        if($formulario.valid())
        {
            $formulario.submit();
        }
    });
};