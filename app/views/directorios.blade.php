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
                            Directorios
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Directorios
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <strong>En Esta Sección Puede Encontrar Los Directorios Existentes</strong>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div>
                        <center>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('packages/media/Singing Teacher-48.png')}}" height="35px"> Directorio de profesores <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ver directorio
                                    <img src="{{asset('packages/media/User Manual-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato PDF
                                    <img src="{{asset('packages/media/PDF 2-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato Excel
                                    <img src="{{asset('packages/media/MS Excel-48.png')}}" height="35px"></a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('packages/media/Student-48.png')}}" height="35px"> Directorio de profesores <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ver directorio
                                    <img src="{{asset('packages/media/User Manual-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato PDF
                                    <img src="{{asset('packages/media/PDF 2-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato Excel
                                    <img src="{{asset('packages/media/MS Excel-48.png')}}" height="35px"></a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('packages/media/User-48.png')}}" height="35px"> Directorio de profesores <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ver directorio
                                    <img src="{{asset('packages/media/User Manual-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato PDF
                                    <img src="{{asset('packages/media/PDF 2-48.png')}}" height="35px"></a></li>
                                    <li><a href="#">Descargar directorio en formato Excel
                                    <img src="{{asset('packages/media/MS Excel-48.png')}}" height="35px"></a></li>
                                </ul>
                            </div>
                        </center>
                    </div>
                </div>

            </div>

        </div>
        
</div>
    
@stop

@section('js')
    
@stop