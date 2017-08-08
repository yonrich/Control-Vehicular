@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
            <div class="col-md-12">
            {!! Form::model($usuarios, ['route' => ['modificarUsuario',$usuarios->id]]) !!}
              <h3>Editar Usuario</h3> 
              <hr> 
            <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Usuario', 'Usuario:') !!}
                        <select class="form-control" id="usuario" name="usuario">
                         @foreach($usuarios as $usuario)
                           <option value="{{$usuario->id}}"> {{ $usuario->nombre }} </option>
                         @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Correo', 'Correo:') !!}
                        <input type="text" id="login" class="form-control" name="login" disabled="true"></input>
                    </div>
                </div> 
             </div> 
             <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Password', 'Password*:') !!} <br>
                        {!! Form::password('password',null,['placeholder'=>'password','class'=>'form-control','required'=>'required']) !!}
                    </div> 
                </div> 
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                        {!! Form::Label('Rol', 'Rol:') !!}
                        {!! Form::select('rol', $roles, null, ['class' => 'form-control']) !!}
                    </div>
                </div> 
            </div>
             
            <a class="btn btn-warning" href="{{ route('usuarios.index') }}"> Regresar</a>
           {!! Form::submit('Registrar Usuario',['class'=>'btn btn-primary']) !!} 
           {!! Form::close() !!} 
          </div>
          </div>
        </div>
    </div>
</div> 

@endsection