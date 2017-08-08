@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('route' => 'bitacora.store')) }} 
            <h3>Crear Bitacora</h3> 
            <hr> 
            <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Vehiculo', 'Vehiculo:') !!}
                        {!! Form::select('vehiculo', $vehiculos, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Conductor', 'Conductor:') !!}
                        {!! Form::select('conductor', $empleados, null, ['class' => 'form-control']) !!}
                    </div>
                </div> 
             </div> 
             <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Fecha y Hora Salida', 'Fecha y Hora Salida*:') !!}
                        <input type="datetime-local" name="Hsalida" id="Hsalida">
                    </div> 
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Homeotraje', 'Homeotraje:') !!}
                        {!! Form::text('homeotraje',null,['placeholder'=>'homeotraje','class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div> 
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Destino', 'Destino:') !!}
                        {!! Form::text('destino',null,['placeholder'=>'destino','class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div> 
            </div>
            <div class="row well">
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Vigilante', 'Vigilante*:') !!}
                        {!! Form::text('vigilante',null,['placeholder'=>'vigilante','class'=>'form-control','required'=>'required']) !!}
                    </div> 
                </div>
             </div>
             
             <div class="row well">   
                          <div class="col-sm-12 col-md-12"> 
                    <div class="input-group"> 
                        {!! Form::Label('Obserbaciones', 'Observaciones*:') !!}
                        {!! Form::textarea('obs',null,['placeholder'=>'obs','class'=>'form-control','required'=>'required']) !!}
                    </div> 
                </div>
             </div>
             <div class="row well"> 
              <h3>Herramientas</h3>
                <div class="col-sm-2 col-md-2"> 
                    <div class="input-group"> 
                        {!! Form::label('gato','gato', array('class'=>'control-label'))!!} <br>
                        {!! Form::radios('gato', $option) !!} 
                    </div> 
                </div>
                <div class="col-sm-2 col-md-2">
                    <div class="input-group">
                        {!! Form::label('Refaccion','refacion', array('class'=>'control-label'))!!} <br>
                        {!! Form::radios('refaccion', $option) !!}
                    </div>
                </div> 
                <div class="col-sm-2 col-md-2">
                    <div class="input-group">
                        {!! Form::label('señalamiento','señalamiento', array('class'=>'control-label'))!!} <br>
                        {!! Form::radios('señalamiento', $option) !!}
                    </div>
                </div> 
                <div class="col-sm-2 col-md-2">
                    <div class="input-group">
                        {!! Form::label('herramientas','herramientas', array('class'=>'control-label'))!!} <br>
                        {!! Form::radios('herramientas', $option) !!}
                    </div>
                </div> 
                <div class="col-sm-2 col-md-2">
                    <div class="input-group">
                        {!! Form::label('verificacion','verificacion', array('class'=>'control-label'))!!} <br>
                        {!! Form::radios('verificacion', $option) !!}
                    </div>
                </div>
             </div>

              <div class="row well"> 
                 <div class="col-sm-2 col-md-2"> 
                     <div class="input-group"> 
                         {!! Form::label('extintor','extintor', array('class'=>'control-label'))!!} <br>
                         {!! Form::radios('extintor', $option) !!}
                     </div> 
                 </div>
                 <div class="col-sm-2 col-md-2">
                     <div class="input-group">
                         {!! Form::label('cables','cables', array('class'=>'control-label'))!!} <br>
                         {!! Form::radios('cables', $option) !!}
                     </div>
                 </div> 
                 <div class="col-sm-2 col-md-2">
                     <div class="input-group">
                         {!! Form::label('licencia','licencia', array('class'=>'control-label'))!!} <br>
                         {!! Form::radios('licencia', $option) !!}
                     </div>
                 </div> 
                 <div class="col-sm-2 col-md-2">
                     <div class="input-group">
                         {!! Form::label('tarjeton','tarjeton', array('class'=>'control-label'))!!} <br>
                         {!! Form::radios('tarjeton', $option) !!}
                     </div>
                 </div>
                 <div class="col-sm-2 col-md-2">
                     <div class="input-group">
                         {!! Form::label('poliza','poliza', array('class'=>'control-label'))!!} <br>
                         {!! Form::radios('poliza', $option) !!}
                     </div>
                 </div> 
              </div>  
            <a class="btn btn-warning" href="{{ route('bitacora.index') }}"> Regresar</a>
           {!! Form::submit('Confirmar Bitacora',['class'=>'btn btn-primary']) !!} 
           {!! Form::close() !!} 
          </div>
          </div>
        </div>
    </div>
</div> 
</div>

@endsection

