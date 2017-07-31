@extends('layouts.myapp2')

@section('content')

<div id="captura-1">
    <div class="container">
        
        
        <div class="row">
            <div class="col-md-6 well">
                <br><br>
                <h1>Oportunidad Ahora!</h1>
                <h3>Aqui estan las propuestas que se han tomado enserio</h3>
                
                <button type="button" class="btn btn-success ">Persona<label class="radio-inline"><input type="radio" name="optradio"></label></button>
                <button type="button" class="btn btn-success">Empresa<label class="radio-inline"><input type="radio" name="optradio"></label></button>
                
                
               <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su nombre'])!!}

              </div>
                
                <div class="form-group">
                {!!Form::label('name', 'Email')!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {!!Form::email('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su email'])!!}

              </div>
                
                <div class="form-group">
                {!!Form::label('name', 'Ciudad')!!}&nbsp;&nbsp;
                {!!Form::text('ciudad', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Ciudad'])!!}

              </div>
            
            </div>
             
            <div class="col-md-6 well"> 
                
                <br><br>
                <img src="img/logo.png"
            
            </div>
          </div>
        
        <div id="division">
            h
        </div>
        
        
        
        <div id="videos">
          
            <div class="v" >
                <video src="videos/naturalesa.mp4" controls="controls"></video>
                 <div class="mensaje text-center">
                <h1>texto</h1>
                </div>
            </div>
            
            <div class="v">
                <div class="mensaje1 text-center">
                    <h1>texto</h1>
                </div>
                <video src="videos/naturalesa.mp4" controls="controls"></video>
                 
            </div>
            
           
            <div class="oportunidad text-center">
                
                        <h2>Oportunidad Unica</h2>
                        
            </div>
                    
                    
                    
                </div>
                
                
                
                
            </div>
            
            
            
            
        </div>
        
        
        
        
    </div><!--fin row-->

</div> <!--fin container-->


@endsection