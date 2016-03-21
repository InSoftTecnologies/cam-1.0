<html>
    
    <head>
        <title>Centro De Atención Múltiple Laboral</title>
        <link rel="Shortcut icon" type="image/x-icon" href="">
        {{HTML::style('/packages/css/bootstrap.min.css')}}
        {{HTML::style('/packages/js/css/alertify.min.css')}}
        {{HTML::style('/packages/css/roboto.min.css')}}
        {{HTML::style('/packages/css/material-fullpalette.min.css')}}
        {{HTML::style('/packages/css/ripples.min.css')}}
        {{HTML::style('/packages/css/sb-admin.css')}}
        {{HTML::style('/packages/css/plugins/morris.css')}}
        {{HTML::style('/packages/font-awesome/css/font-awesome.min.css')}}
        
        {{HTML::style('/packages/css/bootstrap.min.css')}}
        {{HTML::style('/packages/css/roboto.min.css')}}
        {{HTML::style('/packages/css/material-fullpalette.min.css')}}
        {{HTML::style('/packages/css/ripples.min.css')}}
        {{HTML::style('/packages/css/sb-admin.css')}}
        {{HTML::style('/packages/css/plugins/morris.css')}}
        {{HTML::style('/packages/font-awesome/css/font-awesome.min.css')}}
        {{HTML::style('/packages/js/css/alertify.min.css')}}
        @yield('css')
    </head>
    
    <body>
        
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Centro De Atención Múltiple Laboral</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$nombre}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/administrativo"><img src="{{asset('packages/media/Home-48.png')}}" height="30px"> Inicio</a>
                    </li>
                    <li>
                        <a href="/profesores"><img src="{{asset('packages/media/Singing Teacher-48.png')}}" height="30px"> Gestión  De     Profesores</a>
                    </li>
                    <li>
                        <a href="/alumnos"><img src="{{asset('packages/media/Student-48.png')}}" height="30px"> Gestión  De     Alumnos</a>
                    </li>
                    <li>
                        <a href="/usuarios"><img src="{{asset('packages/media/Find User-48.png')}}" height="30px"> Gestión  De     Usuarios</a>
                    </li>
                    <li>
                        <a href="/inventario"><img src="{{asset('packages/media/Report Card-48.png')}}" height="30px"> Gestión  De     Inventarios</a>
                    </li>
                    <li>
                        <a href="/directorios"><img src="{{asset('packages/media/User Manual-48.png')}}" height="30px"> Directorios</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        
        <!-- /#page-wrapper -->

    </div>
        
        @yield('contenido')
        
        
        {{HTML::script('/packages/js/jquery.validate.min.js')}}
        {{HTML::script('/packages/js/localization/messages_es.min.js')}}
        {{HTML::script('/packages/js/bootstrap.min.js')}}
        {{HTML::script('/packages/js/material.min.js')}}
        {{HTML::script('/packages/js/ripples.min.js')}}
        {{HTML::script('/packages/js/plugins/morris/raphael.min.js')}}
        {{HTML::script('/packages/js/plugins/morris/morris.min.js')}}
        {{HTML::script('/packages/js/plugins/morris/morris-data.js')}}
        
        {{HTML::script('/packages/js/plugins/morris/raphael.min.js')}}
        {{HTML::script('/packages/js/plugins/morris/morris.min.js')}}
        {{HTML::script('/packages/js/plugins/morris/morris-data.js')}}
        {{HTML::script('/packages/js/jquery-2.1.4.min.js')}}
        {{HTML::script('/packages/js/jquery.validate.min.js')}}
        {{HTML::script('/packages/js/localization/messages_es.min.js')}}
        {{HTML::script('/packages/js/bootstrap.min.js')}}
        {{HTML::script('/packages/js/material.min.js')}}
        {{HTML::script('/packages/js/ripples.min.js')}}
        {{HTML::script('/packages/js/alertify.min.js')}}
        
        <script type="text/javascript">
            $(document).ready(function(){
                $.material.init();
            });
        </script>
        
        
        
        @yield('js')
        
    </body>
    
</html>