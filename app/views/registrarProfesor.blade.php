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
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Información personal</legend>
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
                                            <input type="email" class="form-control floating-label" id="calle" name="calle" placeholder="Calle del domicilio actual">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero" class="col-md-4 control-label">Numero</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="numero" name="numero" placeholder="Número del domicilio ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="colonia" class="col-md-4 control-label">Colonia</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="colonia" name="colonia" placeholder="Colonia donde reside">
                                        </div>
                                    </div>    
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cod_pos" class="col-md-4 control-label">Código postal</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control floating-label" id="cod_pos" name="cod_pos" placeholder="Código postal de la zona">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado" class="col-md-4 control-label">Estado</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="estado" name="estado" placeholder="Estado donde reside">
                                        </div>
                                    </div>
                                </div>
                                
                            </div><br>
                            
                        <!--</fieldset>-->
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Información del centro</legend>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cat_fun" class="col-md-4 control-label">Categoría función</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="cat_fun" name="cat_fun" placeholder="Categoría del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="funcion" class="col-md-4 control-label">Función</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="funcion" name="funcion" placeholder="Función del profesor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="situ" class="col-md-4 control-label">Situación:</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="situ" name="situ">
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
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="comentarios" class="col-md-4 control-label">Comentarios de la situación</label>
                                        <div class="col-md-8">
                                            <textarea id="comentarios" placeholder="Comentarios respecto a situación actual" name="comentarios" class="form-control floating-label" rows="7"></textarea>
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