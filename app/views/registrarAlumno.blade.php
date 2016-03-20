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
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Formulario de registro</legend>
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Información personal
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="curp" class="col-md-4 control-label">CURP</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="curp" name="curp" placeholder="CURP del alumno" maxlength="18">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="nombre" name="nombre" placeholder="Nombre(s) del alumno" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_pa" class="col-md-4 control-label">Apellido paterno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_pa" name="ap_pa" placeholder="Apellido paterno del alumno" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_ma" class="col-md-4 control-label">Apellido materno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_ma" name="ap_ma" placeholder="Apellido materno del alumno" maxlength="15">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sexo" class="col-md-4 control-label">Sexo:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="sexo" name="sexo">
                                                <option selected disabled>Sexo del alumno</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fech_naci" class="col-md-4 control-label">Fecha de nacimiento</label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="fech_naci" name="fech_naci">
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
                                        <label for="img_alumno" class="col-md-4 control-label">Imagen</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" id="img_alumno" name="img_alumno">
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
                                            <input type="text" class="form-control floating-label" id="nombre_tr" name="nombre_tr" placeholder="Nombre(s) del tutor" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_pa_tr" class="col-md-4 control-label">Apellido paterno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_pa_tr" name="ap_pa_tr" placeholder="Apellido paterno del tutor" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_ma_tr" class="col-md-4 control-label">Apellido materno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_ma_tr" name="ap_ma_tr" placeholder="Apellido materno del tutor" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_tr" class="col-md-4 control-label">Correo electrónico</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control floating-label" id="email_tr" name="email_tr" placeholder="Correo electrónico del tutor" maxlength="50">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel_par_tr" class="col-md-4 control-label">Teléfono particular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_par_tr" name="tel_par_tr" placeholder="Teléfono particular del tutor" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_cel_tr" class="col-md-4 control-label">Teléfono celular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_cel_tr" name="tel_cel_tr" placeholder="Teléfono celular del tutor" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_trabajo" class="col-md-4 control-label">Teléfono de trabajo</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_trabajo" name="tel_trabajo" placeholder="Teléfono del lugar donde labora" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comentarios" class="col-md-4 control-label">Observaciones</label>
                                        <div class="col-md-8">
                                            <textarea id="comentarios" placeholder="Observaciones adicionales" name="comentarios" class="form-control floating-label" rows=2></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Dirección
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="calle" class="col-md-4 control-label">Calle</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="calle" name="calle" placeholder="Calle donde se ubica el domicilio" maxlength="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_ext" class="col-md-4 control-label">Numero interior</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="numero_ext" name="numero_ext" placeholder="Número interior del domicilio" maxlength="7">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_int" class="col-md-4 control-label">Numero exterior</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="numero_int" name="numero_int" placeholder="Número exterior del domicilio" maxlength="7">
                                        </div>
                                    </div>    
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="colonia" class="col-md-4 control-label">Colonia</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="colonia" name="colonia" placeholder="Colonia donde se ubica el domicilio" maxlength="25">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cod_post" class="col-md-4 control-label">Código postal</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control floating-label" id="cod_post" name="cod_post" placeholder="Código postal de la zona donde se ubica el domicilio" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="municipio" class="col-md-4 control-label">Municipio</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="municipio" name="municipio" placeholder="Municipio de residencia" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado" class="col-md-4 control-label">Estado</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="estado" name="estado" placeholder="Estado de residencia" maxlength="15">
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
                                        <label for="discapacidad" class="col-md-4 control-label">Discapacidad:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="discapacidad" name="discapacidad">
                                                <option selected disabled>Discapacidad que padece el alumno</option>
                                                <option value="Aptitud sobresaliente artística">Aptitud sobresaliente artística</option>
                                                <option value="Aptitud sobresaliente creativa">Aptitud sobresaliente creativa</option>
                                                <option value="Aptitud sobresaliente intelectual">Aptitud sobresaliente intelectual</option>
                                                <option value="Aptitud sobresaliente psicomotriz">Aptitud sobresaliente psicomotriz</option>
                                                <option value="Aptitud sobresaliente socioafectiva">Aptitud sobresaliente socioafectiva</option>
                                                <option value="Baja visión ">Baja visión </option>
                                                <option value="Ceguera">Ceguera</option>
                                                <option value="Discapacidad intelectual">Discapacidad intelectual</option>
                                                <option value="Discapacidad mental o psocosocial">Discapacidad mental o psocosocial</option>
                                                <option value="Discapacidad motriz">Discapacidad motriz</option>
                                                <option value="Discapacidad múltiple">Discapacidad múltiple</option>
                                                <option value="Hipoacusia">Hipoacusia</option>
                                                <option value="Problema de lenguaje">Problema de lenguaje</option>
                                                <option value="Problemas de aprendizaje">Problemas de aprendizaje</option>
                                                <option value="Problemas de conducta">Problemas de conducta</option>
                                                <option value="Problemas de salud">Problemas de salud</option>
                                                <option value="Sin especificar">Sin especificar</option>
                                                <option value="Sordera">Sordera</option>
                                                <option value="Sordoceguera">Sordoceguera</option>
                                                <option value="Trastorno de espectro autista">Trastorno de espectro autista</option>
                                                <option value="Trastorno por déficit de atención e hiperactividad">Trastorno por déficit de atención e hiperactividad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="peso" class="col-md-4 control-label">Peso en KG</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control floating-label" id="peso" name="peso" placeholder="Peso del alumno" step="0.01" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="talla" class="col-md-4 control-label">Talla</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="talla" name="talla" placeholder="Talla del alumno">
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
                                </div>
                                
                            </div>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Indicaciones adicionales
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label for="alergias" class="col-md-5"><input type="checkbox" id="alergias" name="alergias"> Alergias</label>
                                        <label for="rest_fis" class="col-md-5"><input type="checkbox" id="rest_fis" name="rest_fis"> Restricciones físicas</label>
                                        <label for="cirugias" class="col-md-5"><input type="checkbox" id="cirugias" name="cirugias"> Cirugías</label>
                                        <label for="med" class="col-md-5"><input type="checkbox" id="med" name="med"> Medicamentos controlados</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <!--Formularios para cada checkbox en tiempo de ejecucion-->
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
    <!--<script>
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','position', 'top-right');
        alertify.set('notifier','delay', 3);
        alertify.success('Todos los campos son obligatorios!');
        alertify.set('notifier','delay', delay);
    </script>-->
@stop