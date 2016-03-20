<html>
    
    <head>
        <title>Centro De Atención Múltiple Laboral</title>
        <link rel="Shortcut icon" type="image/x-icon" href="">
        {{HTML::style('/packages/css/bootstrap.min.css')}}
        {{HTML::style('/packages/js/css/alertify.min.css')}}
        {{HTML::style('/packages/css/roboto.min.css')}}
        {{HTML::style('/packages/css/material-fullpalette.min.css')}}
        {{HTML::style('/packages/css/ripples.min.css')}}
        {{HTML::style('/packages/font-awesome/css/font-awesome.min.css')}}
        @yield('css')
    </head>
    
    <body>
        
        <header>
            
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">Centro De Atención Múltiple Laboral</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/nosotros">Nosotros</a></li>
                            <li><a href="/contacto">Contacto</a></li>
                            <li><a href="/acceso">Acceso</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>
        
        @yield('contenido')
        
        {{HTML::script('/packages/js/jquery-2.2.1.min.js')}}
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