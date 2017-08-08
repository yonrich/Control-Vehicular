 @extends('layouts.public')

@section('content')
<div class="container">
    @include('alerts.success')
</div>
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h1>Listado de empleados</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-success" aria-label="Left Align" href="{{ route('empleados.create') }}"> Nueva</a>
          <a class="btn btn-primary" aria-label="Left Align" href=""> Carga Masiva</a>
          <a class="btn btn-warning" href="/empleados"> Restablecer</a>
          <a class="btn btn-info" href="/home"> Regresar</a>
        </nav>
    </div>
  </div>
</div>   
        @include('empleados.partials.table')
@endsection
