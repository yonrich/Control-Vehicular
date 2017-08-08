<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Nombre</th>
           <th>correo</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($empleados as $empleado)
              
               <tr>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->correo}}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id)}}" class="btn btn-info">Editar</a>
                        <a href="{{ route('empleados.destroy', $empleado->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
</div>
</div>
</div>