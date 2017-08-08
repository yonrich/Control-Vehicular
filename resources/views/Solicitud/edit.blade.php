@extends('layouts.public')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {!! Form::model($solicitudes, ['route' => ['modificar-solicitud',$solicitudes->id]]) !!}
              <h3>Editar Solicitud</h3> 
              <hr> 
              <div class="row well"> 
                  
                      <div class="input-group"> 
                          {!! Form::Label('numeroE', 'Nombre de Empleado:') !!}
                          {!! Form::number('id_empl',null,['placeholder'=>'Nombre Empleado','class'=>'form-control','required'=>'required']) !!}
                      </div>
                      <div class="input-group"> 
                          {!! Form::Label('tipo', 'Tipo de Equipo:') !!}
                          {!! Form::text('tipo',null,['placeholder'=>'Tipo de Equipo','class'=>'form-control','required'=>'required']) !!}
                      </div>
                      <div class="input-group">
                          {!! Form::Label('procesador', 'Tipo de Procesador:') !!}
                          {!! Form::text('procesador',null,['placeholder'=>'Procesador','class'=>'form-control','required'=>'required']) !!}
                      </div>
                      <div class="input-group">
                          {!! Form::Label('DD', 'Disco Duro:') !!}
                          {!! Form::text('DD',null,['placeholder'=>'Capacidad de Disco Duro','class'=>'form-control','required'=>'required']) !!}
                      </div>
                      <div class="input-group">
                          {!! Form::Label('memoria', 'Memoria RAM:') !!}
                          {!! Form::email('memoria',null,['placeholder'=>'Memoria RAM','class'=>'form-control','required'=>'required']) !!}
                      </div>
                      <div class="input-group">
                          {!! Form::Label('monitor', 'Monitor:') !!}
                          {!! Form::email('monitor',null,['placeholder'=>'Tipo de Monitor','class'=>'form-control','required'=>'required']) !!}
                      </div>
              </div>

                <div class="row well">
                    {!! Form::hidden('id',$empleados->id) !!}
                    <a class="btn btn-warning" href="{{ route('solicitud.index') }}"> Regresar</a>
                    {!! Form::submit('Confirmar Datos',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div> 
</div>

@endsection