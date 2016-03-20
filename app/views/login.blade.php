@extends('plantillas.principal')


@section('css')
    {{HTML::style('/packages/css/login.css')}}
@stop


@section('contenido')
    <div class="container" id="login">
       
       <img src="{{asset('/packages/media/Museum-96.png')}}" alt="taxi" height="130px"><br>
       <p>Inicia sesión!</p><br>
       
        <form class="form-horizontal" action="/login" method="post" id="formLogin">
           
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label for="email">Usuario:&nbsp;</label>
                        <input class="form-control floating-label" name="usuario" id="usuario" type="text" placeholder="Introduce tu usuario">
                    </div>
                </div>
            </div>
                
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label for="password">Contraseña:&nbsp;</label>
                        <input class="form-control floating-label" name="password" id="password" type="password" placeholder="Introduce tu usuario">
                    </div>
                </div>
            </div>
            
            <button type="button" class="btn btn-primary" id="entrar">Entrar</button><br><br>
            ¿Aún no tienes cuenta? <a href="/registrarse">Regístrate</a>
            
       </form>
       
    </div>
@stop

@section('js')
@stop