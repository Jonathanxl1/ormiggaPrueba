@extends('layouts.app')
@section('content')
<div class="row">
<h1 class="h1">Hi I'm home! Bienvenido</h1>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6 ">
			<li>
				<ol><a href="/add" class="btn btn-outline-success" >Agregar Estudiantes</a></ol>
				<ol><a href="/view" class="btn btn-outline-info">Ver Estudiantes</a></ol>
			</li>
		</div>
	</div>
</div>

@endsection