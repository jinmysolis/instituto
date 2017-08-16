@extends('layouts.myapp3')

@section('content')
<nav id="menu-icono-welcpme">
      <ul >
      <li>
          
            <a class="btn btn-s" href="#">
                <h6 class="text-center" >Empleo</h6><img src="img/empleo.png" alt="">
            </a>
          
      </li>
       <li>
          <a class="btn  btn-s" href="#">
              <h6 class="text-center" >Proyectos</h6><img src="img/proyectos.png" alt="">
          </a>
      </li>
       <li>
          <a class="btn btn-s" href="#">
              <h6 class="text-center" >Networking</h6><img src="img/networ.png" alt="">
          </a>
      </li>
      <li>
          <a class="btn btn-s" href="#">
              <h6 class="text-center" >Eventos</h6><img src="img/eventos.png" alt="">
          </a>
      </li>
       <li>
          <a class="btn  btn-s" href="#">
              <h6 class="text-center" >Alumnos</h6><img src="img/alumnos.png" alt="">
          </a>
      </li>
      <li>
          <a class="btn  btn-s" href="#">
              <h6 class="text-center" >Profesores</h6><img src="img/profesores.png" alt="">
          </a>
      </li>
       <li>
          <a class="btn  btn-s" href="#">
              <h6 class="text-center" >Campus virtual</h6><img src="img/campus.png" alt="">
          </a>
      </li>
     
      

      </ul>
  
  </nav>
<div id="welcome-parte-1">
    
    <div class="container">
        <div class="row">
          
            
            
            
            
            
      <div id="formula-welcome">
        <div class="col-md-6 ">
                <br><br>
                <h1 class=" text-center">Oportunidad Ahora!</h1>
                <h3>Aqui estan las propuestas que se han tomado enserio</h3>
                <div id="w-p" class=" text-center">
                <button type="button" class="btn btn-info ">Persona</button>
                <button type="button" class="btn btn-info">Empresa</button>
                </div>
                <br><br>

               <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su nombre'])!!}

              </div>
                
                <div class="form-group">
                {!!Form::label('name', 'Email')!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {!!Form::email('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su email'])!!}

              </div>
                
                <div class="form-group">
                {!!Form::label('name', 'Ciudad')!!}&nbsp;&nbsp;&nbsp;
                {!!Form::text('ciudad', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Ciudad'])!!}

              </div>
            {!!Form::close()!!}
            
             </div>
          </div>   
            
        <div class="col-md-6 text-center"> 
                
                <br><br>
                <img src="img/logo.png">
            
         </div>
            </div>
    </div>
    </div>
<!--//fin-welcme-parte1////////      -->




        
        <div id="division" class="text-center">
           
        </div>  
        
        
<div class="container">
    <div class="row">
        
    
        <div id="videos">
          
            <div class="v" >
                <iframe width="400" height="280" src="https://www.youtube.com/embed/EsIwvilcdbA" frameborder="0" allowfullscreen></iframe>
                 
            </div>
            
            <div class="mensaje text-center">
                  <h1>texto</h1>
           </div>
            
            <div class="mensaje text-center">
                  <h1>texto</h1>
           </div>
            
            <div class="v" >
               <iframe width="400" height="280" src="https://www.youtube.com/embed/EsIwvilcdbA" frameborder="0" allowfullscreen></iframe>
                 
            </div>
            <div class="oportunidad text-center">
               
                      <img src="img/oportunidad.png" alt=""  class="img-responsive">  
            </div>
            
            
            
<!--            <div class="v text-center">
                <div class="mensaje1 text-center">
                    <h1>texto</h1>
                </div>
                <video src="videos/naturalesa.mp4" controls="controls"></video>
                 
            </div>-->
            
           
<!--            <div class="oportunidad text-center">
                
                        <h2>Oportunidad Unica</h2>
                        
            </div>-->
                    
                    
                    
        </div>
                
   </div>
</div>
                
          
            
            
            
       


@endsection