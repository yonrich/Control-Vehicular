<div class="container">
  <div class="row"> 
  <div class="col-md-12">  
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css ">         
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Empleado</th>
           <th>Nombre</th>
           <th>Apellido Paterno</th>
           <th>Apellido Materno</th>
           <th>Correo</th>
           <th>Nivel</th>
           <th>CURP</th>
           <th>Código Puesto</th>
           <th>Puesto</th>
           <th>Unidad</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody> 
           @foreach($empleados as $empleado)
              
               <tr>
                    <td>{{$empleado->numeroE}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->Apaterno}}</td>
                    <td>{{$empleado->Amaterno}}</td>
                    <td>{{$empleado->correo}}</td>
                    <td>{{$empleado->nivel}}</td>
                    <td>{{$empleado->curp}}</td>
                    <td>{{$empleado->id_puesto}}</td>
                    <td>{{$empleado->puesto_empleado['descripcion']}}</td>
                    <td>{{$empleado->unidad}}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"
                                data-toggle="dropdown">
                                  Opciones
                                  <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li><a href="{{ route('empleados.edit', $empleado->id)}}" >Editar</a></li>
                                <li><a href="{{ route('eliminar-Empleado', $empleado->id)}}">Eliminar</a></li>
                              </ul>
                          </div>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
    <script type="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#se-table').DataTable();
});
    </script>
</div>
</div>
</div>