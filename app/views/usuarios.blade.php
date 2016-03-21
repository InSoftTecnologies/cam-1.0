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
                            Gestión De Usuarios
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Usuarios
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <strong>En Esta Sección Puede Gestionar A Los Usuarios Existentes</strong>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div>
                        <center>
                            <a href="/registrarUsuario" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Plus-48.png')}}" height="30px"> Registrar usuario</a>
                            <a href="/modificarUsuario" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Edit-48.png')}}" height="30px"> Modificar usuario</a>
                            <a href="/eliminarUsuario" class="btn btn-primary" role="button">
                            <img src="{{asset('/packages/media/Cancel-48.png')}}" height="30px"> Eliminar usuario</a>
                        </center>
                    </div>
                </div>

            </div>

        </div>
        
</div>
    
@stop

@section('js')
    
@stop