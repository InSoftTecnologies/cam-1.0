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
                    <h1 class="page-header">Gestión De Usuarios</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Usuarios/ Registrar usuario
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
                    
                    <form class="form-horizontal" action="/infoUsuarioEliminar" method="post" id="formEliUsuario">
                        
                        <!--<fieldset>-->
                            <legend>
                            <img src="{{asset('packages/media/Sort Right-48.png')}}" height="35px">Formulario de registro</legend>
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('packages/media/Forward-48.png')}}" height="35px">Información personal
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Correo electrónico</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control floating-label" id="email" name="email" placeholder="Correo electrónico del profesor" readonly="true" value="{{$usuario->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Contraseña</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control floating-label" id="password" name="password" placeholder="Contraseña para la cuenta" readonly="true" value="{{$usuario->password}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="id" class="col-md-4 control-label">ID del profesor</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control floating-label" id="id" name="id" placeholder="ID personal del profesor" readonly="true" value="{{$usuario->id}}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    
                                </div>
                                
                            </div>
                            
                        <!--</fieldset>-->
                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="button" class="btn btn-primary" id="btnRegistrarUsuario">Registrar</button>
                                    <a href="/usuarios" class="btn btn-danger" role="button">Cancelar</a>
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
    
@stop