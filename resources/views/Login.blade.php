@extends('Plantillas.plantillaLogin')
@section('contenido')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<br>
				<h3 style="text-align: center;">Evaluación Egresados</h3>
				
			</div>
			<div class="card-body">
				<form method="post" action="{{route('verificar.login')}}" id="loginForm">
					{{ csrf_field() }}
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="name_user" id="user">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="name_password" id="user_password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	
</script>

@endsection