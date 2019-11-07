@extends('Plantillas.plantillaMenu')
@section('contenido')
	
	<div class="contenedor">
       
        <section class=botones>
            <h1 class=titulo> Menú</h1>
        <div class="contenedorB">
             
    <div id="separar">
	    <br/>
	    <span class="botonU"><a href="/administrador/usuarios">Usuarios</a></span>
    </div>
        		<div id="separar">
   					<br/>
    				<span class="botonP"><a href="/administrador/preguntas">Preguntas</a></span>
        		</div>
            </div>
        </section>
    </div>

@endsection