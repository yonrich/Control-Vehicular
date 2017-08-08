<div class="container">
  <div class="row"> 
  <div class="col-md-12">          
    <table id="se-table" class="table table-bordered table-striped display" style="font-size:12px"> 
       <thead>
          <tr  class="info" align="center">
           <th>Id</th>
           <th>Tipo Vehiculo</th>
           <th>Conductor</th>
           <th>Hora salida</th>
           <th>Hora entrada</th>
           <th>homeotraje Inicial</th>
           <th>homeotraje Final</th>
           <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
           @foreach($bitacoras as $bitacora)
              
               <tr>
                    <td>{{$bitacora->id}}</td>
                    <td>{{$bitacora->vehiculo}}</td>
                    <td>{{$bitacora->conductor}}</td>
                    <td>{{$bitacora->Hsalida}}</td>
                    <td>{{$bitacora->Hentrada}}</td>
                    <td>{{$bitacora->homeotraje}}</td>
                    <td>{{$bitacora->homeotrajeFinal}}</td>
                    <td>
                      <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#favoritesModal" onclick="vModal('{{$bitacora->id}}')">Adjuntar Oficio</a>
                      <a href="{{ route('bitacora.edit', $bitacora->id)}}" class="btn btn-danger">Checar Entrada</a>
                    </td>
               </tr>
           @endforeach
        </tbody>  
    </table>
  </div>
  </div>
</div>
<!--  *******************Ventana Modal  ********************************* -->
<div class="container">
  <div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="favoritesModalLabel">Agregar Folio</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('route' => 'agregarFolio', 'files' => true, 'method' => 'post')) }}
            <div class="row well"> 
                <div class="col-sm-4 col-md-4"> 
                    <div class="input-group"> 
                        {!! Form::Label('Folio', 'Folio:') !!}
                        {!! Form::text('folio',null,['placeholder'=>'folio','class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="input-group">
                       {!! Form::Label('Documento', 'Documento:') !!}
                        {!! Form::file('documento',null,['placeholder'=>'documento','class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div> 
             </div>
        <input type="hidden" name="id" id="id">
        {!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
        {{ Form::close()}}
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  function vModal(id) {
    document.getElementById("id").value = id;
  }
</script>