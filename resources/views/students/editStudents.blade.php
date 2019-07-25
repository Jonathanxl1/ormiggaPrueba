@extends('layouts.app')
@section('content')
<h1 class="h1">Hi I'm Edit Studentds {{$student->id}}</h1>
<div class="container">
	<div class="row justify-content-center">
	
			<form method="post" action="/up" >
			@method('PUT')
			@csrf
			<div class="form-group">
				<input type="hidden" name="id" value="{{$student->id}}">
				<label for="name_student">Nombre</label>
				<input  class="form-control" type="text" name="name_student" value="{{$student->name_student}}">
				<label for="age">Edad:</label>
				<input type="number" name="age" value="{{$student->age}}" placeholder="16" class="form-control">
				<label for="course">Cursos:</label>
			<select name="course" class="form-control" >
				

				@switch($student->course)
    				@case('Primero')
        				<option value="Primero" selected >Primero</option>
        				<option value="Segundo">Segundo</option>
						<option value="Tercero">Tercero</option>
						<option value="Cuarto">Cuarto</option>
						<option value="Quinto">Quinto</option>
        				@break
					@case('Segundo')
        			<option value="Primero" >Primero</option>
					<option value="Segundo" selected >Segundo</option>
					<option value="Tercero">Tercero</option>
					<option value="Cuarto">Cuarto</option>
					<option value="Quinto">Quinto</option>
        				@break
					@case('Tercero')
        				<option value="Primero" >Primero</option>
					<option value="Segundo">Segundo</option>
					<option value="Tercero" selected >Tercero</option>
					<option value="Cuarto">Cuarto</option>
					<option value="Quinto">Quinto</option>
        				@break
        			@case('Cuarto')
        				<option value="Primero" >Primero</option>
					<option value="Segundo">Segundo</option>
					<option value="Tercero">Tercero</option>
					<option value="Cuarto" selected >Cuarto</option>
					<option value="Quinto">Quinto</option>
        				@break
        			@case('Quinto')
        			<option value="Primero" >Primero</option>
					<option value="Segundo">Segundo</option>
					<option value="Tercero">Tercero</option>
					<option value="Cuarto">Cuarto</option>
					<option value="Quinto" selected >Quinto</option>
        				@break
	
    				

    				@default
        			Default case...
				@endswitch
			
			</select>
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
			</form>
		
	</div>
</div>
@endsection