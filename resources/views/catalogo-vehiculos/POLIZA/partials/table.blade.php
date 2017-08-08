<div class="container">
  <div class="row"> 
  <div class="col-md-12">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css ">            
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>ID</th>
           <th>Aseguradora</th>
           <th>Poliza</th>
           <th>Inciso</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($polizas as $poliza)
              
               <tr>
                    <td>{{$poliza->id}}</td>
                    <td>{{$poliza->Aseguradora}}</td>
                    <td>{{$poliza->Poliza}}</td>
                    <td>{{$poliza->Inciso}}</td>
                    
                    <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"
                              data-toggle="dropdown">
                                Opciones
                                <span class="caret"></span>
                          </button>
                            <ul class="dropdown-menu">
                              <li><a href="{{ route('Polizas.edit', $poliza->id)}}" >Editar</a></li>
                              <li><a href="{{ route('eliminar-Poliza', $poliza->id)}}" >Eliminar</a></li>
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