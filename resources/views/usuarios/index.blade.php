 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h1>Usuarios</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-success" aria-label="Left Align" href="{{ route('usuarios.create') }}"> Nuevo</a>
          <a class="btn btn-warning" href="/usuarios"> Restablecer</a>
          <a class="btn btn-info" href="/home"> Regresar</a>
        </nav>
    </div>
  </div>
</div>   
        @include('usuarios.partials.table')
@endsection
