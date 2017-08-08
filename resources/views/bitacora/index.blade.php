 @extends('layouts.public')

@section('content')
<div class="container">
    @include('alerts.success')
</div>
<div class="container">
  <div class="row"> 
    <div class="col-md-12">
      <h1>Bitacora del dia</h1>
        <nav class="navbar navbar-default">
          <a class="btn btn-success" aria-label="Left Align" href="{{ route('bitacora.create') }}"> Nueva</a>
          <a class="btn btn-warning" href="/bitacora"> Restablecer</a>
          <a class="btn btn-info" href="/home"> Regresar</a>
        </nav>
    </div>
  </div>
  <div class="row">
    <form   action="{{ url('buscar_bitacora') }}"  method="post"  >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
          <span class="input-group-btn">
          <input type="submit" class="btn btn-primary" value="buscar" >
          </span>

        </div>
            
        </form>
  </div>
</div>   
        @include('bitacora.partials.table')
@endsection
