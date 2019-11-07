@extends('Plantillas.Administrador.plantillaPreguntas')
@section('contenido')
	
<div class="container" style="padding: 10% 10% 10% ">
       
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Preguntas</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#AgregarPregunta" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Pregunta</span></a>						
					</div>
                </div>
            </div>
            
            <div id="tabla_preguntas"></div>
			<div class="clearfix"></div>
        </div>
    </div>
	
	<div id="AgregarPregunta" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Pregunta</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                        <label for="sel1">Sección</label>
                            <select class="form-control" id="sel_asignatura">
                                @foreach($asignaturas as $asignaturas2)
									<option value="{{$asignaturas2->id_asignatura}}">{{$asignaturas2->nombre}}</option>}
                                @endforeach
                            </select>
						<div class="form-group">
							<label>Pregunta</label>
							<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="input_pregunta" placeholder="Escribe la pregunta" required>
						</div>
						<div class="form-group">
							<label>Opción 1</label>
							<input type="text" class="form-control" id="input_opcion1" placeholder="Escribe la opción 1" required>
						</div>
                        <div class="form-group">
							<label>Opción 2</label>
							<input type="text" class="form-control" id="input_opcion2" placeholder="Escribe la opción 2" required>
						</div>
                        <div class="form-group">
							<label>Opción 3</label>
							<input type="text" class="form-control" id="input_opcion3" placeholder="Escribe la opción 3" required>
						</div>
                        <div class="form-group">
							<label>Opción 4</label>
							<input type="text" class="form-control" id="input_opcion4" placeholder="Escribe la opción 4" required>
						</div>
                        <div class="form-group">
							<select class="form-control" id="sel_respuesta">
                                <option value="1">Opcion 1</option>
                                <option value="2">Opcion 2</option>
                                <option value="3">Opcion 3</option>
                                <option value="4">Opcion 4</option>
                            </select>
						</div>
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" data-dismiss="modal" id="botonCrear" value="Crear">
					</div>
				</form>
			</div>
		</div>
	</div>

<script>
	$('#tabla_preguntas').load('/administrador/TablaPreguntas');

	$('#botonCrear').on('click', function(){

		var asignatura = $('#sel_asignatura').val();
		var pregunta = $('#input_pregunta').val();
		var opcion1 = $('#input_opcion1').val();
		var opcion2 = $('#input_opcion2').val();
		var opcion3 = $('#input_opcion3').val();
		var opcion4 = $('#input_opcion4').val();
		var respuesta = $('#sel_respuesta').val();

	    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	    var route = "{{route('insert.Pregunta')}}";
		
		$.ajax({
			url: route,
			type: 'get',
			data: {_token: CSRF_TOKEN, asignatura: asignatura, pregunta: pregunta, opcion1: opcion1, opcion2: opcion2, opcion3: opcion3, opcion4: opcion4, respuesta: respuesta},
			success:function(data){
			 	if(data == 1){
			 		$('#tabla_preguntas').load('/administrador/TablaPreguntas');
			 		alert("Se inserto aca bien vergas.");
					$('#input_pregunta').val("");
					$('#input_opcion1').val("");
					$('#input_opcion2').val("");
					$('#input_opcion3').val("");
					$('#input_opcion4').val("");
			 	}else{
			 		alert("La pregunta ya existe.");
			 		$('#input_pregunta').val("");
					$('#input_opcion1').val("");
					$('#input_opcion2').val("");
					$('#input_opcion3').val("");
					$('#input_opcion4').val("");
			 	}
			}
		});

	});
</script>

@endsection