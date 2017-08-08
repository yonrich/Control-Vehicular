 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h1>Área de Adscripción</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('Unidad.create') }}"> Nueva</a>
          <a class="btn btn-default btn-sm" href="/Unidad"> Restablecer</a>
          <a class="btn btn-default btn-sm" href="/catalogos"> Regresar</a>
        </nav>
    </div>
  </div>

</div>   
        @include('catalogos.Cunidad.partials.table')
                 
@endsection
