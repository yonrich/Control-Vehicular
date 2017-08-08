<div class="container">
  <div class="row"> 
  <div class="col-md-12">  
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css ">   
       
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">

           <th>Id</th>
           <th>Empleado</th>
           <th>Tipo de Equipo</th>
           <th>Procesador</th>
           <th>Memoria</th>
           <th>Disco Duro</th>
           <th>Monitor</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody> 
           @foreach($solicitudes as $solicitud)
              
               <tr>
                    <td>{{$solicitud->id}}</td>
                    <td>{{$solicitud->id_empl}}</td>
                    <td>{{$solicitud->tipo}}</td>
                    <td>{{$solicitud->procesador}}</td>
                    <td>{{$solicitud->memoria}}</td>
                    <td>{{$solicitud->DD}}</td>
                    <td>{{$solicitud->monitor}}</td>
                    <td>
                        <a href="{{ route('modificar-solicitud', $solicitud->id)}}" >Editar</a>
                        <a href="{{ route('eliminar-Solicitud', $solicitud->id)}}">Eliminar</a>
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