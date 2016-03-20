@extends('plantillas.principal')


@section('css')
{{HTML::style('/packages/css/index.css')}}
@stop

@section('contenido')

    <div class="container">
        
        <!--<div class="row">
            
            <div class="col-md-12">

                <div id="ss" class="carousel slide" data-ride="carousel">
                        <!--indicadores
                        <ol class="carousel-indicators">
                            <li data-target="#ss" data-slide-to="0" class="active"></li>
                            <li data-target="#ss" data-slide-to="1"></li>
                            <li data-target="#ss" data-slide-to="2"></li>
                            <li data-target="#ss" data-slide-to="3"></li>
                            <li data-target="#ss" data-slide-to="4"></li>
                        </ol>
                        <!--contenedor de los slide
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{asset('packages/media/slide/abc-928383_1280.jpg')}}" class="img-responsive">
                                <div class="carousel-caption hidden-xs hidden-sm"><h3></h3></div>
                            </div>
                            <div class="item">
                                <img src="{{asset('packages/media/slide/board-928390_1280.jpg')}}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{asset('packages/media/slide/board-928381_1280.jpg')}}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{asset('packages/media/slide/board-928389_1280.jpg')}}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{asset('packages/media/slide/board-953154_1280.jpg')}}" class="img-responsive">
                            </div>
                        </div>
                        <!--controles
                        <a href="#ss" class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#ss" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>

            </div>
        
        </div><br>-->
        
        <div class="row">
            
            <div class="jumbotron">
                
            </div>
            
        </div><br>
        
        <div class="row">
            
            <div class="col-md-6">
                
                <div class="panel panel-primary">
                    
                    <div class="panel-heading">
                        <h3>Centro De Atención Múltiple Laboral</h3>
                    </div>
                    
                    <div class="panel-body" id="descripcion">
                        El centro de Atención Múltiple Laboral es una institución de Educación Especial, federal cuya misión es brindar a jóvenes alumnos con barreras laborales asociadas a discapacidad la oportunidad de acceso, permanencia y logro educativo en el proceso de formación y capacitación laboral que pueda desempeñar. Ofrecerles actividades diferenciadas en un ambiente de confianza y seguridad, estimular sus avances, esfuerzos y logros; promover en colaboración con los padres de familia una inclusión escolar, social y laboral exitosa con condiciones de equidad y justicia en una sociedad demandante de personas productivas, autónomas e independientes. 
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-md-6">
                
                <div class="panel panel-primary">
                    
                    <div class="panel-heading">
                        <h3>Nuestros Talleres</h3>
                    </div>
                    
                    <div class="panel-body">
                        
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingOne">
                                    
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria expanded="true" aria-controls="collapseOne">Belleza
                                        <img src="{{asset('packages/media/Barbershop-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Carpintería
                                        <img src="{{asset('packages/media/Hammer-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingThree">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cocina
                                        <img src="{{asset('packages/media/Cook-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingFour">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Corte y confección
                                        <img src="{{asset('packages/media/Needle-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingFive">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Mantenimiento general y trapeadores
                                        <img src="{{asset('packages/media/Maintenance-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingSix">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Serigrafía y macetas
                                        <img src="{{asset('packages/media/Paint Brush-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Vida diaria
                                        <img src="{{asset('packages/media/Classroom-48.png')}}" height="30px"></a>
                                    </h4>
                                    
                                </div>
                                
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-md-9">
                                                El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. 
                                            </div>
                                        
                                            <div class="col-md-3">
                                                <img src="{{asset('packages/media/User-96.png')}}" >
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                                        
                </div>
                
            </div>
            
        </div>
        
    </div>
        
        

@stop

@section('js')
@stop