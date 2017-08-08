 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h1>Listado de unidades</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-success" aria-label="Left Align" href="{{ route('control-vehicular.create') }}"> Nueva</a>
          <a class="btn btn-warning" href="/control-vehicular"> Restablecer</a>
          <a class="btn btn-info" href="/home"> Regresar</a>
        </nav>
    </div>
  </div>
</div>   
        @include('control-vehicular.partials.table')
@endsection
