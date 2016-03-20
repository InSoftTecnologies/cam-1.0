@extends('plantillas.administrativo')

    {{HTML::style('/packages/css/sb-admin.css')}}

@section('css')
    
@stop


@section('contenido')
    
<div id="wrapper">
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestión de inventarios
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> inventarios
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <strong>En Esta Sección Puede Gestionar A Los Alumnos Existentes</strong>
                        </div>
                    </div>
                </div>-->
                
                <div class="row">
                    <div>
                        <center>
                            <label for="taller" class="control-label">Seleccione el taller:</label>
                                <div>
                                    <select class="form-control" id="taller" name="taller">
                                        <option selected disabled>Taller</option>
                                        <option value="Belleza">Belleza</option>
                                        <option value="Carpintería">Carpintería</option>
                                        <option value="Cocina">Cocina</option>
                                        <option value="Corte y confección">Corte y confección</option>
                                        <option value="Mantenimiento general y trapeadores">Mantenimiento general y trapeadores</option>
                                        <option value="Serigrafía y macetas">Serigrafía y macetas</option>
                                        <option value="Vida diaria">Vida diaria</option>
                                    </select>
                                </div>    
                        </center>
                    </div>
                </div>
                
                <div class="row">
                    <div>
                        <center>
                            <a href="/registrarAlumno" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Plus-48.png')}}" height="30px"> Registrar Articulo</a>
                            <a href="/modificarAlumno" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Edit-48.png')}}" height="30px"> Modificar Articulo</a>
                            <a href="/eliminarAlumno" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Cancel-48.png')}}" height="30px"> Eliminar Articulo</a>
                        </center>
                    </div>
                </div>
                
                <div class="row">
                    <div>
                        <center>
                            <a href="/directorioAlumnos" class="btn btn-primary" role="button">
                            <img src="{{asset('packages/media/User Manual-48.png')}}" height="35px"> Ver Inventario</a>
                            <a href="#" class="btn btn-primary" role="button">
                            <img src="{{asset('packages/media/PDF 2-48.png')}}" height="35px"> Descargar Inventario</a>
                            <a href="#" class="btn btn-primary" role="button">
                            <img src="{{asset('packages/media/MS Excel-48.png')}}" height="35px"> Descargar Inventario</a>
                        </center>
                    </div>
                </div>
                
                <div class="row">
                
                <div class="col-md-12">
                    
                    <form class="form-horizontal" action="/registrarProfesor" method="post" id="formRegArticulo">
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Formulario de registro</legend>
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="activo" class="col-md-4 control-label">Activo</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="activo" name="activo" placeholder="Numero de activo" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="etiqueta" class="col-md-4 control-label">Etiqueta</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="etiqueta" name="etiqueta" placeholder="Etiqueta asignada" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="articulo" class="col-md-4 control-label">Articulo</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="articulo" name="articulo" placeholder="Nombre del artículo " maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="color" class="col-md-4 control-label">Color</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="color" name="color" placeholder="Color del artículo" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="caracteristicas" class="col-md-4 control-label">Características</label>
                                        <div class="col-md-8">
                                            <textarea id="caracteristicas" placeholder="Características del artículo" name="caracteristicas" class="form-control floating-label" rows=4></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="marca" class="col-md-4 control-label">Marca</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="marca" name="marca" placeholder="Marca del artículo" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="modelo" class="col-md-4 control-label">Modelo</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="modelo" name="modelo" placeholder="Modelo del artículo" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="serie" class="col-md-4 control-label">Serie</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="serie" name="serie" placeholder="Número de serie del artículo " maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="costo" class="col-md-4 control-label">Costo</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="costo" name="costo" placeholder="Costo del artículo" maxlength="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_servicio" class="col-md-4 control-label">Fecha servicio</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control floating-label" id="fecha_servicio" name="fecha_servicio" placeholder="" maxlength="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div><br>
                            
                        <!--</fieldset>-->
                        
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="button" class="btn btn-primary" id="btnRegArticulo">Registrar</button>
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
    {{HTML::script('/packages/js/registrarArticulo.js')}}
@stop