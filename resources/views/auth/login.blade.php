<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/mycustom.css') }}">
</head>

<body>      
    <div class="mytop-content" >
        <div class="container" > 
          
                <div class="col-sm-12 " style="background-color:rgba(0, 0, 0, 0.9); height: 60px; " >
                  
                   <h3>Instituto Nacional del Suelo Sustentable</h3>
                   <!--<a class="mybtn-social pull-right" href="{{ url('/register') }}">
                       Register
                  </a>

                  <a class="mybtn-social pull-right" href="{{ url('/login') }}">
                       Login
                  </a>-->
               
                </div>
                
                
             
               
            
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                    <div class="myform-top">
                        <div class="myform-top-left">
                         <!--<img  src="{{ url('img/logo_plusis.png') }} " class="img-responsive logo" />-->
                          <h4>Sistema de Administración.</h4>
                            <p>Escribe tu email y contraseña:</p>
                        </div>
                        <div class="myform-top-right">
                          <i class="fa fa-key"></i>
                        </div>
                    </div>

            @if (count($errors) > 0)
                 <div class="col-sm-12" >
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Error de Accesso 
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>
                @endif
                    <div class="myform-bottom">
                      
                      <form role="form" action="{{ url('/login') }}" method="post" >
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico Institucional..." class="form-control" id="form-username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Contraseña..." class="form-control" id="form-password">
                        </div>


                        <button type="submit" class="mybtn">Ingresar al Sistema</button>
                      </form>

                    </div>
              </div>
            </div>
            <div class="row">
                <div style="color: #333;";>
                    <h4>...¿Problemas con el Acceso?...</h4>
                    <h4><strong>(55) 50809600</strong>   ext.9640</h4>
                    
                </div>
            </div>
        </div>
      </div>

    <!-- Enlazamos el js de Bootstrap, y otros plugins que usemos siempre al final antes de cerrar el body -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
  </body>

</html>





