@extends('plantillas.principal')


@section('css')
    {{HTML::style('/packages/css/login.css')}}
@stop


@section('contenido')
    <div class="container" id="login">
       
       <img src="{{asset('/packages/media/Museum-96.png')}}" alt="taxi" height="130px"><br>
       <p>Inicia sesión!</p><br>
       
        <form class="form-horizontal" action="/acceso" method="post" id="formLogin">
           
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label for="correo">Usuario:&nbsp;</label>
                        <input class="form-control floating-label" name="correo" id="correo" type="text" placeholder="Introduce tu correo">
                    </div>
                </div>
            </div>
                
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <label for="password">Contraseña:&nbsp;</label>
                        <input class="form-control floating-label" name="password" id="password" type="password" placeholder="Introduce tu contraseña">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" id="entrar" name="entrar">Entrar</button><br><br>
            ¿Aún no tienes cuenta? <a href="/registrarse">Regístrate</a>
            
       </form>
       
    </div>
@stop

@section('js')
<script>
$("#entrar").click(function(){
    if($("#formLogin").valid()){ 
        $("#formLogin").submit();
    }                
});
</script>
@stop