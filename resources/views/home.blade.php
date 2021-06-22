{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('title', 'Inicio')

@section('inicio_menu', 'active')

@section('content')
    
    <!-- Seccion 1 -->
	<div class="bloque parallax image-1">
		<div class="container">
		</div>
	</div>

	<div class="bloque">
		<div class="container">
            <h2>TODO LO QUE IMAGINES, LO CONSTRUIMOS</h2>
			<p>SOMOS UNA EMPRESA CONSTRUCTORA MEXICANA CON MÁS DE 10 AÑOS
                DE EXPERIENCIA. CONTAMOS CON ARQUITECTOS, INGENIEROS Y DEMÁS 
                PERSONAL CALIFICADOS EN LAS NORMAS DE CALIDAD Y SATISFACCIÓN 
                PARA NUESTROS CLIENTES. 
            </p>
			<div class="sobre">
				<img src="{{asset('images/logo.png')}}" alt="" width="150" height="50">
			</div>
		</div>
	</div>

	<!-- Seccion 2 -->
	<div class="bloque parallax image-2">
		<div class="container">
			<h1>CLIENTES</h1>
		</div>
	</div>

	<div class="bloque">
		<div class="container">
			<h2>AL SERVICIO DE: </h2>
		</div>
	</div>

	<!-- Seccion 3 -->
	<div class="bloque parallax image-3">
		<div class="container">
			<h1>CERTIFICACIONES</h1>
		</div>
	</div>

	<div class="bloque">
		<div class="container">
			<h2>NUESTRA EXPERIENCIA NOS RESPALDA</h2>
			<p>PARA OFRECERLE LOS MEJORES SERVICIOS DE DISEÑO ARQUITECTÓNICO E
				INGENIERÍA CIVIL CONTAMOS CON LAS SIGUIENTES CERTIFICACIONES.
            </p>
		</div>
	</div>

@endsection
