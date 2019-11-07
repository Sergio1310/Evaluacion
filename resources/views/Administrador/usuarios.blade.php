@extends('Plantillas.Administrador.plantillaUsuarios')
@section('contenido')
	
<div class="container" style="padding: 15% 0% 0% 15%;">
	<div class="row" >
		<div class="col-md-8 col-md-offset-2" >
			<div class="card" >
				<div class="card-body d-flex justify-content-between align-items-center"  >
					<input type="text" class="form-control pull-right" style="width:70%;" id="search" placeholder="Buscar Matricula">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarMatricula">Agregar Matricula</button>
				</div>
			</div>
		</div>
	</div>
</div>
      <!-- Modal -->
<div class="modal fade" id="AgregarMatricula" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Matricula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="input-group mb-3">
		    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Matricula" id="input_matricula">
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary"  id="guardarMatricula">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div id="tabla_usuarios"></div>

<script>
	$('#tabla_usuarios').load('/administrador/TablaUsuarios');

	$('#guardarMatricula').on('click', function(){
		var matricula = $('#input_matricula').val();
	    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	    var route = "{{route('insert.Matricula')}}";
		
		$.ajax({
			url: route,
			type: 'get',
			data: {_token: CSRF_TOKEN, matricula: matricula},
			success:function(data){
			 	if(data == 1){
			 		$('#tabla_usuarios').load('/administrador/TablaUsuarios');
			 		alert("Se inserto aca bien vergas.");
			 	}else{
			 		alert("La matricula ya existe.");
			 	}
			}
		});
	});
</script>

@endsection