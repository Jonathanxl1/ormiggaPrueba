@extends('layouts.app')
@section('content')
<h1 class="h1">Hi I'm add Students</h1>
<div class="container">
	<div class="row justify-content-center">
	
			<form method="post" action="/add" >
			@csrf
			<div class="form-group">
				<label for="name_student">Nombre</label>
				<input  class="form-control" type="text" name="name_student" placeholder="Ej:Pepito perez">
				<label for="age">Edad:</label>
				<input type="number" name="age" value="" placeholder="16" class="form-control">
				<label for="course">Cursos:</label>
			<select name="course" class="form-control" >
				<option value="Primero" >Primero</option>
				<option value="Segundo">Segundo</option>
				<option value="Tercero">Tercero</option>
				<option value="Cuarto">Cuarto</option>
				<option value="Quinto">Quinto</option>
			
			</select>
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
			</form>
		
	</div>
</div>
@endsection