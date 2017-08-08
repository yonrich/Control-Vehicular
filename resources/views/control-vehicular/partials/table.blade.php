<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Nombre</th>
           <th>Marca</th>
           <th>Submarca</th>
           <th>Modelo</th>
           <th>Serie</th>
           <th>Placas</th>
           <th>Seguro</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($vehiculos as $vehiculo)
              
               <tr>
                    <td>{{$vehiculo->vehiculo}}</td>
                    <td>{{$vehiculo->marca}}</td>
                    <td>{{$vehiculo->submarca}}</td>
                    <td>{{$vehiculo->modelo}}</td>
                    <td>{{$vehiculo->serie}}</td>
                    <td>{{$vehiculo->placas}}</td>
                    <td>{{$vehiculo->seguro}}</td>
                    <td>
                        <a href="{{ route('control-vehicular.edit', $vehiculo->id)}}" class="btn btn-info">Editar</a>
                        <a href="{{ route('control-vehicular.destroy', $vehiculo->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
</div>
</div>
</div>