@extends('Plantillas.Administrador.plantillaUsuarios')
@section('contenido')
	
<div class="container" style="padding: 15% 0% 0% 15%;">
	<div class="row" >
		<div class="col-md-8 col-md-offset-2" >
			<div class="card" >
				<div class="card-body d-flex justify-content-between align-items-center"  >
					<input type="text" class="form-control pull-right" style="width:70%;" id="search" placeholder="Buscar Matricula">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarMatricula" >Agregar Matricula</button>
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
		    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Matricula">
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div style="padding: 1% 15%" class="card-body d-flex justify-content-between align-items-center">
    <!--Table-->
	<table class="table-bordered table pull-right" id="mytable"  style="background-color: rgba(0,0,0,0.7)">
	  <!--Table body-->
	  <tbody>
	   <thead>
		<tr role="row">
		 	<th colspan="6" style="text-align: center; color: white">Matricula</th>
		</tr>
	 </thead>
	    <tr>
	      
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700074</a></td>
	        <td><a href="">201700073</a></td>
	        <td><a href="">201700072</a></td>
	        <td><a href="">201700071</a></td>
	        <td><a href="">201700070</a></td>
	    </tr>
	    <tr>
	      
	       <td><a href="">201700069</a></td>
	        <td><a href="">201700068</a></td>
	        <td><a href="">201700067</a></td>
	        <td><a href="">201700066</a></td>
	        <td><a href="">201700065</a></td>
	        <td><a href="">201700064</a></td>
	    </tr>
	    <tr>
	      
	      <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	    </tr>
	    <tr>
	      <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	    </tr>
	    <tr>
	      
	       <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	    </tr>
	    <tr>
	      
	       <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	        <td><a href="">201700075</a></td>
	    </tr>
	  </tbody>
	  <!--Table body-->
	</table>
	<!--Table-->
</div>


@endsection