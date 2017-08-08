 @extends('layouts.public')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
    <h1>Puestos</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-default btn-sm" aria-label="Left Align" href="{{ route('Rpuestos.create') }}"> Nueva</a>
          <a class="btn btn-default btn-sm" href="/Rpuestos"> Restablecer</a>
          <a class="btn btn-default btn-sm" href="/catalogos"> Regresar</a>
        </nav>
    </div>
  </div>

</div>   
        @include('catalogos.Tpuestos.partials.table')
                 
@endsection
