@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {!! Form::model($bitacora, ['route' => ['bitacoraEntrada',$bitacora->id]]) !!}
            <h3>Checar Entrada</h3> 
            <hr> 
             <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Fecha y Hora Entrada', 'Fecha y Hora Entrada*:') !!}
                        <input type="datetime-local" name="Hentrada" id="Hentrada">
                    </div> 
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Homeotraje Final', 'Homeotraje Final:') !!}
                        {!! Form::text('homeotrajeFinal',null,['placeholder'=>'homeotraje','class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div> 
            </div>
             <div class="row well">   
                          <div class="col-sm-12 col-md-12"> 
                    <div class="input-group"> 
                        {!! Form::Label('Observaciones Finales', 'Observaciones Finales:') !!}
                        {!! Form::textarea('obs2',null,['placeholder'=>'obs','class'=>'form-control','required'=>'required']) !!}
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
            {!! Form::hidden('id',$bitacora->id) !!}
            <a class="btn btn-warning" href="{{ route('bitacora.index') }}"> Regresar</a>
            {!! Form::submit('Confirmar Entrada',['class'=>'btn btn-primary']) !!} 
            {!! Form::close() !!} 
          </div>
          </div>
        </div>
    </div>
</div> 
</div>

@endsection

