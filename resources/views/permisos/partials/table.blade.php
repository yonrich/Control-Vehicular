<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Id </th>
           <th>Nombre</th>
           <th>Slug</th>
           <th>Descripcion</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody> 
           @foreach($permisos as $permiso)
              
               <tr>
                    <td>{{$permiso->id}}</td>
                    <td>{{$permiso->name}}</td>
                    <td>{{$permiso->slug}}</td>
                    <td>{{$permiso->description}}</td>
                    <td>
                        <a href="{{ route('permisos.edit', $permiso->id)}}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('permisos.destroy', $permiso->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
</div>
</div>
</div>