<div class="container">
  <div class="row"> 
  <div class="col-md-12"> 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">           
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
          <th>Id</th>
           <th>Código</th>
           <th>Descripción de Puesto</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($puestos as $puesto)
              
               <tr>
                    <td>{{$puesto->id}}</td>
                    <td>{{$puesto->codigo}}</td>
                    <td>{{$puesto->descripcion}}</td>
                    
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"
                                data-toggle="dropdown">
                                  Opciones
                                  <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li><a href="{{ route('Rpuestos.edit', $puesto->id)}}" ">Editar</a></li>
                                <li><a href="{{ route('eliminar-Puesto', $puesto->id)}}" ">Eliminar</a></li>
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