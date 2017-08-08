 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h1>Configuracion de Catalogos</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('tipoUsuarios.index')}}"> Nivel</a>
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('Rpuestos.index')}}"> Tipo de Puesto</a>
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('Departamentos.index')}}"> Departamento</a>
          <a class="btn btn-default" aria-label="Left Align" href="{{ route('Unidad.index')}}"> Unidad</a>
          <a class="btn btn-default" href="/home"> Regresar</a>
        </nav>
    </div>
  </div>
</div>  
@endsection
