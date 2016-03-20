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
                    <h1 class="page-header">Gestión De Profesores</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Profesores/ Registrar profesor
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
                    
                    <form class="form-horizontal" action="/registrarProfesor" method="post" id="formRegProfesor">
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Formulario de registro</legend>
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Información personal
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
                                            <input type="text" class="form-control floating-label" id="nombre" name="nombre" placeholder="Nombre(s) del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_pa" class="col-md-4 control-label">Apellido paterno</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="ap_pa" name="ap_pa" placeholder="Apellido paterno del profesor">
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
                                        <label for="tel_par" class="col-md-4 control-label">Teléfono particular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_par" name="tel_par" placeholder="Teléfono particular del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_cel" class="col-md-4 control-label">Teléfono celular</label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control floating-label" id="tel_cel" name="tel_cel" placeholder="Teléfono celular del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Correo electrónico</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control floating-label" id="email" name="email" placeholder="Correo electrónico del profesor ">
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
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Información del centro</legend>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cat_fun" class="col-md-4 control-label">Categoría función:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="cat_fun" name="cat_fun">
                                                <option selected disabled>Seleccione la categoría del profesor</option>
                                                <option value="Apoyo administrativo">Apoyo administrativo</option>
                                                <option value="Directivos">Directivos</option>
                                                <option value="Docentes">Docentes</option>
                                                <option value="Equipo paradocente">Equipo paradocente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="funcion" class="col-md-4 control-label">Función:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="funcion" name="funcion">
                                                <option selected disabled>Seleccione la función del profesor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="taller" class="col-md-4 control-label">Taller:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="taller" name="taller">
                                                <option selected disabled>Seleccione el taller asignado</option>
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
                                </div>
                                
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="situacion" class="col-md-4 control-label">Situación:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="situacion" name="situacion">
                                                <option selected disabled>Situación actual</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Acuerdo presidencial">Acuerdo presidencial</option>
                                                <option value="Beca comisión">Beca comisión</option>
                                                <option value="Beca laboral">Beca laboral</option>
                                                <option value="Cambio de actividad">Cambio de actividad</option>
                                                <option value="Comisionad(a)">Comisionad(a)</option>
                                                <option value="Cubre licencia ">Cubre licencia </option>
                                                <option value="Licencia por asuntos particulares">Licencia por asuntos particulares</option>
                                                <option value="Licencia por comisión sindical">Licencia por comisión sindical</option>
                                                <option value="Licencia por gravidez">Licencia por gravidez</option>
                                                <option value="Prejubilatorio">Prejubilatorio</option>
                                                <option value="Proceso jurídico">Proceso jurídico</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comentarios" class="col-md-4 control-label">Comentarios de la situación actual</label>
                                        <div class="col-md-8">
                                            <textarea id="comentarios" placeholder="Comentarios respecto a situación actual" name="comentarios" class="form-control floating-label" rows=4></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="button" class="btn btn-primary" id="btnRegistrarProfesor">Registrar</button>
                                    <a href="/profesores" class="btn btn-danger" role="button">Cancelar</a>
                                </div>
                            </div>
                            
                        <!--</fieldset>-->
                        
                    </form>
                    
                </div>
                
            </div>

        </div>

    </div>
        
</div>
    
@stop

@section('js')
    <script>
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','position', 'top-right');
        alertify.set('notifier','delay', 3);
        alertify.success('Todos los campos son obligatorios!');
        alertify.set('notifier','delay', delay);
    </script>
    {{HTML::script('/packages/js/registrarProfesor.js')}}
@stop