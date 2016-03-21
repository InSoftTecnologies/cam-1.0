@extends('plantillas.administrativo')

    {{HTML::style('/packages/css/sb-admin.css')}}

@section('css')
    
@stop


@section('contenido')
    
<div id="wrapper">
    
    <div id="page-wrapper">
                
        <div class="container-fluid">
                   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gestión De Alumnos</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Alumnos/ Registrar alumno
                        </li>
                    </ol>
                </div>
            </div>
                   
            <!--<div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> <strong>Debes Completar Todos Los Cambios Para Registrar Un Nuevo Profesor</strong>
                    </div>
                </div>
            </div>-->
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <form class="form-horizontal" action="/registrarProfesor" method="post" id="formRegAlumno">
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Información personal</legend>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="curp" class="col-md-4 control-label">CURP</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="curp" name="curp" placeholder="CURP del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="nombre" name="nombre" placeholder="Nombre(s) del alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_pa" class="col-md-4 control-label">Apellido paterno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_pa" name="ap_pa" placeholder="Apellido paterno del alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_ma" class="col-md-4 control-label">Apellido materno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_ma" name="ap_ma" placeholder="Apellido materno del profesor">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sexo" class="col-md-4 control-label">Sexo:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="sexo" name="sexo">
                                                <option selected disabled>Sexo del alumno</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="taller" class="col-md-4 control-label">Taller:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="taller" name="taller">
                                                <option selected disabled>Taller asignado</option>
                                                <option value="Belleza">Belleza</option>
                                                <option value="Carpintería">Carpintería</option>
                                                <option value="Cocina">Cocina</option>
                                                <option value="Corte y confección">Corte y confección</option>
                                                <option value="Mantenimiento general y trapeadores">Mantenimiento general y trapeadores</option>
                                                <option value="Serigrafía y macetas">Serigrafía y macetas</option>
                                                <option value="Vida diaria">Vida diaria</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_cel" class="col-md-4 control-label">Teléfono celular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_cel" name="tel_cel" placeholder="Teléfono celular del alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_emer" class="col-md-4 control-label">Teléfono de emergencia</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_emer" name="tel_emer" placeholder="En caso de emergencia llamar al teléfono">
                                        </div>
                                    </div>
                                </div>
                                
                            </div><br>
                            
                        <!--</fieldset>-->
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Información del tutor</legend>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Información personal
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre_tr" class="col-md-4 control-label">Nombre</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="nombre_tr" name="nombre_tr" placeholder="Nombre(s) del tutor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_pa_tr" class="col-md-4 control-label">Apellido paterno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_pa_tr" name="ap_pa_tr" placeholder="Apellido paterno del tutor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_ma_tr" class="col-md-4 control-label">Apellido materno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_ma_tr" name="ap_ma_tr" placeholder="Apellido materno del tutor">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel_par_tr" class="col-md-4 control-label">Teléfono particular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_par_tr" name="tel_par_tr" placeholder="Teléfono particular del tutor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_cel_tr" class="col-md-4 control-label">Teléfono celular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_cel_tr" name="tel_cel_tr" placeholder="Teléfono celular del tutor">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Dirección
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="calle_tr" class="col-md-4 control-label">Calle</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="calle_tr" name="calle_tr" placeholder="Calle del domicilio actual del tutor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_tr" class="col-md-4 control-label">Numero</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="numero_tr" name="numero_tr" placeholder="Número del domicilio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="colonia_tr" class="col-md-4 control-label">Colonia</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="colonia_tr" name="colonia_tr" placeholder="Colonia donde reside el tutor">
                                        </div>
                                    </div>    
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cod_pos_tr" class="col-md-4 control-label">Código postal</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control floating-label" id="cod_pos_tr" name="cod_pos_tr" placeholder="Código postal de la zona donde reside el tutor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado_tr" class="col-md-4 control-label">Estado</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="estado_tr" name="estado_tr" placeholder="Estado donde reside el tutor">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        <!--</fieldset>-->
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Indicaciones médicas</legend>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="disc" class="col-md-4 control-label">Discapacidad:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="disc" name="disc">
                                                <option selected disabled>Discapacidad que padece el alumno</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                                <option value="">Inserte discapacidad aquí</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="peso" class="col-md-4 control-label">Peso en KG</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="peso" name="peso" placeholder="Peso del alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="talla" class="col-md-4 control-label">Talla</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="talla" name="talla" placeholder="Talla del alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="med_apr" class="col-md-4 control-label">Medicamentos aprobados</label>
                                        <div class="col-md-8">
                                            <textarea id="med_apr" placeholder="Medicamentos y dosis aprobada" name="med_apr" class="form-control floating-label" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="med_res" class="col-md-4 control-label">Medicamentos restringidos</label>
                                        <div class="col-md-8">
                                            <textarea id="med_res" placeholder="Medicamentos que no se deben administrar " name="med_res" class="form-control floating-label" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tip_san" class="col-md-4 control-label">Tipo sanguíneo:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="tip_san" name="tip_san">
                                                <option selected disabled>Tipo sanguíneo del alumno</option>
                                                <option value="Tipo A +">Tipo A +</option>
                                                <option value="Tipo A -">Tipo A -</option>
                                                <option value="Tipo B +">Tipo B +</option>
                                                <option value="Tipo B -">Tipo B -</option>
                                                <option value="Tipo AB +">Tipo AB +</option>
                                                <option value="Tipo AB -">Tipo AB -</option>
                                                <option value="Tipo O +">Tipo O +</option>
                                                <option value="Tipo O -">Tipo O -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="serv_medic" class="col-md-4 control-label">Servicio médico</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="serv_medic" name="serv_medic" placeholder="Servicio médico con el que cuenta el alumno">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="num_afi" class="col-md-4 control-label">Numero de afiliación</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="num_afi" name="num_afi" placeholder="Numero de afiliación del servicio médico">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="res_fis" class="col-md-4 control-label">Restricciones físicas</label>
                                        <div class="col-md-8">
                                            <textarea id="res_fis" placeholder="Restricciones físicas del alumno" name="res_fis" class="form-control floating-label" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        <!--</fieldset>-->
                        
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="button" class="btn btn-primary" id="btnRegistrarAlumno">Registrar</button>
                                    <a href="/alumnos" class="btn btn-danger" role="button">Cancelar</a>
                                </div>
                            </div>
                        
                    </form>
                    
                </div>
                
            </div>

        </div>

    </div>
        
</div>
    
@stop

@section('js')
    {{HTML::script('/packages/js/registrarAlumno.js')}}
    <script>
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','position', 'top-right');
        alertify.set('notifier','delay', 3);
        alertify.success('Todos los campos son obligatorios!');
        alertify.set('notifier','delay', delay);
    </script>
@stop