@extends('layouts.app')
@section('content')
<h1 class="h1">Estudiantes</h1>

<div class="contariner">
		<div class="row justify-content-center ">
<div class="col-6 ">
<table class="table justify-content-center">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Curso</th>
					<th scope="col">Actualizar</th>
					<th scope="col">Borrar</th>
				</tr>
			</thead>
			<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{$student->name_student}}</td>
					<td>{{$student->course}}</td>
					<td><a href="{{$student->id}}/edit">Actualizar</a></td>
					<td><a href="{{$student->id}}/delete">Borrar</a></td>
				</tr>
			@endforeach

	</tbody>
</table>
	</div>
		</div>
	</div>	


@endsection