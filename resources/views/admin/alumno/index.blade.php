@extends('admin.template.main')
@section('title','Alumno')
@section('content')
<h3 class="text-center">Alumno</h3>
<a href="{{route('admin.alumno.create')}}">
<button class="btn btn-success">REGISTRAR ALUMNO</button>
</a>
<a href="{{route('admin.alumno.pdf_all',3322)}}">
<button class="btn btn-primary">REPORTE ALUMNOS</button>
</a>
<table class="table table-striped">
	<thead>
		<th>Nombre(s) y Apellido(s)</th>
		<th>Carrera</th>
		
		<th>ACCION</th>
	</thead>
	<tbody>
		@foreach($alumno as $alu)
		<tr>
			<td>{{$alu->practicante}}</td>
			<td>{{$alu->carrera}}</td>
			<td>				
				<a href="{{ route('admin.alumno.edit',$alu->id) }}"><button class="btn btn-warning">EDITAR</button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$alumno->render()!!}
@endsection
