@extends('admin.template.main')
@section('title','Nuevo Alumno')
@section('content')
{!! Form::open(['route'=>'admin.alumno.store','method'=>'POST']) !!}
<table width="100%">
	<caption><b>NUEVO PRACTICANTE</b></caption>
	<tr>
		<td>
			<div class="form-group">
			{!! Form::label('carrera','Carrera') !!}
			{!! Form::text('carrera',null,['class'=>'form-control','placeholder'=>'Carrera','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('semestre','Semestre') !!}
			{!! Form::text('semestre',null,['class'=>'form-control','placeholder'=>'Semestre','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('coordinador','Coordinador Academico') !!}
			{!! Form::text('coordinador',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div class="form-group">
			{!! Form::label('practicante','PRACTICANTE') !!}
			{!! Form::text('practicante',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div class="form-group">
			{!! Form::label('empresa','Razón Social') !!}
			{!! Form::text('empresa',null,['class'=>'form-control','placeholder'=>'Razón Social','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
			{!! Form::label('direccion','Dirección') !!}
			{!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('telefono','Teléfono') !!}
			{!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="1">
			<div class="form-group">
			{!! Form::label('nombre_tutor','Nombre Tutor') !!}
			{!! Form::text('nombre_tutor',null,['class'=>'form-control','placeholder'=>'Nombre Tutor','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('cargo','Cargo') !!}
			{!! Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Cargo','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('area_asignada','Area Asignada') !!}
			{!! Form::text('area_asignada',null,['class'=>'form-control','placeholder'=>'Area Asignada','required']) !!}
			</div>
		</td>
	</tr>
</table>
		<div class="form-group">
		{!! Form::submit('SIGUIENTE',['class'=> 'btn btn-primary'])!!}
		</div>
{!! Form::close() !!}
@endsection
