@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('route' => 'control-vehicular.store')) }} 
              <h3>Registrar Vehiculo</h3> 
              <hr> 
              <div class="row well"> 
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Vehiculo', 'Vehiculo:') !!}<br>
                          <select id="vehiculo" name="vehiculo" class="form-control">
                              <option value="automovil">automovil</option>
                              <option value="camioneta">camioneta</option>
                            </select>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Marca', 'Marca:') !!}
                          {!! Form::select('marca', $marcas, null, ['class' => 'form-control']) !!}
                      </div>
                  </div> 
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                        {!! Form::Label('Submarca', 'Submarca:') !!}
                        {!! Form::select('submarca', $submarca, null, ['class' => 'form-control']) !!}
                      </div>
                  </div> 
               </div> 
               <div class="row well"> 
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Modelo', 'Modelo*:') !!}
                          {!! Form::text('modelo',null,['placeholder'=>'modelo','class'=>'form-control','required'=>'required']) !!}
                      </div> 
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Numero Serie', 'Numero Serie:') !!}
                          {!! Form::text('serie',null,['placeholder'=>'numero serie','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Numero Placas', 'Numero de Placas:') !!}
                          {!! Form::text('placas',null,['placeholder'=>'numero placas','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
              </div>
              <div class="row well">
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Numero Seguro', 'Numero Seguro:') !!}
                          {!! Form::text('seguro',null,['placeholder'=>'numero seguro','class'=>'form-control','required'=>'required']) !!}
                      </div> 
                  </div>
               </div>

                <div class="row well">
                    <a class="btn btn-warning" href="{{ route('control-vehicular.index') }}"> Regresar</a>
                    {!! Form::submit('Confirmar Marca',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>

@endsection

