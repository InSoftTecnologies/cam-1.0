@extends('plantillas.principal')


@section('css')
    {{HTML::style('/packages/css/nosotros.css')}}
@stop


@section('contenido')

    <div class="container">
        
        <div class="panel panel-primary" id="p1">
            
            <div class="panel-heading">
                <h3 class="panel-title">Conócenos de cerca</h3>
            </div>
            
            <div class="panel-body">
                        
                <h4>Misón</h4>
                El centro de Atención Múltiple Laboral es una institución de Educación Especial, federal cuya misión es brindar a jóvenes alumnos con barreras laborales asociadas a discapacidad la oportunidad de acceso, permanencia y logro educativo en el proceso de formación y capacitación laboral que pueda desempeñar. Ofrecerles actividades diferenciadas en un ambiente de confianza y seguridad, estimular sus avances, esfuerzos y logros; promover en colaboración con los padres de familia una inclusión escolar, social y laboral exitosa con condiciones de equidad y justicia en una sociedad demandante de personas productivas, autónomas e independientes. 
                
                <h4>Visión</h4>
                Ser un centro de formación que desarrolle competencias laborales con base en estándares de reforma emanados de Marcos Curriculares, documento normativo y plan de atención para la eliminación de las barreras en la inclusión laboral en los contextos regionales, empresariales y familiares de jóvenes alumnos con discapacidad. 
                
            </div>
            
        </div>
           
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h3 class="panel-title">Nuestra ubicación</h3>
            </div>
            
            <div class="panel-body">
                        
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.7317393473613!2d-103.50403446593407!3d25.580590250966303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd836b668baa1%3A0x9b1e9f6079671ee1!2sAv+Victoria+%26+Austria!5e0!3m2!1ses-419!2smx!4v1456615241429" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                        
                <div class="col-md-5">
                    <center><h2>Nuestros Horarios</h2></center>
                    <table class="table table-hover">
                                
                        <tr>
                            <td align="left">Lunes - Viernes</td>
                            <td align="right">08:00 AM – 15:00 PM</td>
                        </tr>
                                
                    </table>
                </div>
                
            </div>
            
        </div>
        
    </div>

@stop

@section('js')
@stop