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
                            <i class="fa fa-dashboard"></i> Profesores/ Modificar profesor
                        </li>
                    </ol>
                </div>
            </div>
                   
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> <strong>Usted está apunto de modificar la información de un profesor exístete en el sistema</strong>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <form class="form-horizontal" action="/modificarProfesor" method="post" id="formModProfesor">
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Buscar profesor</legend>
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Información personal del profesor
                            
                            <div class="row">
                                
                                <div class="col-md-6">
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
                                
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="button" class="btn btn-primary" id="btnModificarProfesor">Buscar</button>
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
    {{HTML::script('/packages/js/modificarProfesor.js')}}
@stop