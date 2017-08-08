@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('route' => 'empleados.store')) }} 
              <h3>Registrar Empleado</h3> 
              <hr> 
               
              <div class="row well"> 
                  <div class="col-sm-4 col-md-12"> 
                      <div class="input-group"> 
                          {!! Form::Label('numeroE', 'Número de Empleado:') !!}
                          {!! Form::number('numeroE',null,['placeholder'=>'Número Empleado','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>

               </div> 
              <div class="row well"> 
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Nombre', 'Nombre(s):') !!}
                          {!! Form::text('nombre',null,['placeholder'=>'Nombre(s)','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Apellido1', 'Apellido Paterno:') !!}
                          {!! Form::text('Apaterno',null,['placeholder'=>'Apellido Paterno','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
                                    <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Apellido2', 'Apellido Materno:') !!}
                          {!! Form::text('Amaterno',null,['placeholder'=>'Apellido Materno','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
               </div> 

               <div class="row well"> 
                  <div class="col-sm-4 col-md-4"> 
                      <div class="input-group">
                          {!! Form::Label('Correo', 'Correo:') !!}
                          {!! Form::email('correo',null,['placeholder'=>'Correo','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Nivel', 'Nivel:') !!}
                          {!! Form::select('nivel', $nivel, null, ['placeholder'=>'Seleccione un Nivel','class'=>'form-control','required'=>'required' ]) !!}
                      </div>
                  </div> 
                <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('CURP', 'CURP:') !!}
                          {!! Form::text('curp',null,['placeholder'=>'CURP','class'=>'form-control','required'=>'required']) !!}
                      </div>
                  </div> 
               </div> 

               <div class="row well"> 
                     <div class="col-sm-4 col-md-4"> 
                      <div class="input-group"> 
                          {!! Form::Label('Puesto', 'Puesto:') !!}
                           {!! Form::select('cod_puesto', $puestos, null, ['placeholder'=>'Seleccione un Puesto','class'=>'form-control','required'=>'required' ]) !!}
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="input-group">
                          {!! Form::Label('Unidad', 'Unidad de Adscripción:') !!}
                           {!! Form::select('Unidad', $Unidad, null, ['placeholder'=>'Unidad de Adscripción','class'=>'form-control','required'=>'required' ]) !!}
                      </div>
                  </div> 

               </div> 
                <div class="row well">
                    <a class="btn btn-warning" href="{{ route('empleados.index') }}"> Regresar</a>
                    {!! Form::submit('Registrar Empleado',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>

@endsection

