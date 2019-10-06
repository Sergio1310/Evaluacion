@extends('Plantillas.Administrador.plantillaPreguntas')
@section('contenido')
	
<div class="container" style="padding: 10% 10% 10% ">
       
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>CRUD <b>Preguntas</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#AgregarPregunta" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Pregunta</span></a>						
					</div>
                </div>
            </div>
            
            <table class="table table-striped table-hover col-sm-6" >
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>ID</th>
                        <th>Sección</th>
						<th>Pregunta</th>
                        <th>Opc 1</th>
                        <th>Opc 2</th>
                        <th>Opc 3</th>
                        <th>Opc 4</th>
                        <th>Respuesta</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>1</td>
                        <td>Matematicas</td>
						<td>2+2</td>
                        <td>3</td>
                        <td>5</td>
                        <td>7</td>
                        <td>4</td>
                        <td>4</td>
                        <td>
                            <a href="#EditarPregunta" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#EliminarPregunta" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>1</td>
                        <td>Matematicas</td>
						<td>2+2</td>
                        <td>3</td>
                        <td>5</td>
                        <td>7</td>
                        <td>4</td>
                        <td>4</td>
                        <td>
                            <a href="#EditarPregunta" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#EliminarPregunta" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                   <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>1</td>
                        <td>Matematicas</td>
						<td>2+2</td>
                        <td>3</td>
                        <td>5</td>
                        <td>7</td>
                        <td>4</td>
                        <td>4</td>
                        <td>
                            <a href="#EditarPregunta" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#EliminarPregunta" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                   
                    		
					
                </tbody>
            </table>
			<div class="clearfix">
                
              
            </div>
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
                            <select class="form-control" id="sel1">
                                <option>Matematicas</option>
                                <option>Programación</option>
                                <option>Ingles</option>
                                <option>Habilidades cognitivas</option>
                            </select>
						<div class="form-group">
							<label>Pregunta</label>
							<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Escribe la pregunta" required>
						</div>
						<div class="form-group">
							<label>Opción 1</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 1" required>
						</div>
                        <div class="form-group">
							<label>Opción 2</label>
							<input type="text" class="form-control" placeholder="Escribe la opción 2" required>
						</div>
                        <div class="form-group">
							<label>Opción 3</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 3" required>
						</div>
                        <div class="form-group">
							<label>Opción 4</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 4" required>
						</div>
                        <div class="form-group">
							<label>Respuesta</label>
							<input type="text" class="form-control"  placeholder="Escribe la respuesta" required>
						</div>
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="EditarPregunta" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Editar Pregunta</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<label for="sel1">Sección</label>
                            <select class="form-control" id="sel1">
                                <option>Matematicas</option>
                                <option>Programación</option>
                                <option>Ingles</option>
                                <option>Habilidades cognitivas</option>
                            </select>
						<div class="form-group">
							<label>Pregunta</label>
							<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Escribe la pregunta" required>
						</div>
						<div class="form-group">
							<label>Opción 1</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 1" required>
						</div>
                        <div class="form-group">
							<label>Opción 2</label>
							<input type="text" class="form-control" placeholder="Escribe la opción 2" required>
						</div>
                        <div class="form-group">
							<label>Opción 3</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 3" required>
						</div>
                        <div class="form-group">
							<label>Opción 4</label>
							<input type="text" class="form-control"  placeholder="Escribe la opción 4" required>
						</div>
                        <div class="form-group">
							<label>Respuesta</label>
							<input type="text" class="form-control"  placeholder="Escribe la respuesta" required>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Eliminar -->
	<div id="EliminarPregunta" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Pregunta</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p class="text-warning">¿Esta seguro que desea elimnar esta pregunta?</p>
						<p class="text-warning"><small>Esta acción no se puede desacer</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection