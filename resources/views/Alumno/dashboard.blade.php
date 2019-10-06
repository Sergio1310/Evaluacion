@extends('Plantillas.Alumno.plantillaDash')
@section('contenido')
	
	<div class="principal-content flex">
		<div class="p-content column justify-center">
			<div class="matricula align-center ">
				<i class="fas fa-user-circle"></i>matricula
			</div>
			<div class="title justify-center">
				<h1 class="h1 text-center">EVALUACIONES</h1>
			</div>
			<div class="justify-center">
				<div class="black-container column">
					<div class="subjects-content">
						<div class="subjects align-center justify-center">
							<style type="text/css"> 
                                    a {color:black;} 
                                    
                                </style>
							<a href="preguntas1.html" style="text-decoration: none" class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center">Matemáticas</h2>
									</div>
									<div class="color-line bg-blue"></div>
								</div>
							</a>
							<a href="preguntas1.html" style="text-decoration: none" class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center">Matemáticas</h2>
									</div>
									<div class="color-line bg-lightgray"></div>
								</div>
							</a>
							<a  href="preguntas1.html" style="text-decoration: none" class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center">Matemáticas</h2>
									</div>
									<div class="color-line bg-blue"></div>
								</div>
							</a>
							<a href="preguntas1.html" style="text-decoration: none" class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center">Matemáticas</h2>
									</div>
									<div class="color-line bg-lightgray"></div>
								</div>
							</a>
							<a href="preguntas1.html" style="text-decoration: none" class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center">Matemáticas</h2>
									</div>
									<div class="color-line bg-blue"></div>
								</div>
							</a>
							<a href="preguntas1.html" style="text-decoration: none; " class="card">
								<div class="card-subject column">
									<div class="subject-name align-center justify-center">
										<h2 class="text-center" >Matemáticas</h2>
									</div>
									<div class="color-line bg-lightgray"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="buttons row">
						<div class="cedula justify-center">
							<a href="/alumno/cedula" style="text-decoration: none" class="btn-eval text-center"><i class="fas fa-pen"></i>&nbsp;Llenar cédula</a>

						</div>
						<div class="reporte justify-center">
							<a class="btn-eval text-center"><i class="fas fa-file-pdf"></i>&nbsp;Generar reporte</a>
						</div>
					</div>	
				</div>
			</div>
			<!--<div id="separar">
				<span class="boton4">Llenar cedula</span>
			</div>-->
		</div>
	</div>

@endsection