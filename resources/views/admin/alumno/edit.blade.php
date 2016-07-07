@extends('admin.template.main')

@section('title','Editar alumno '.$alumno->name)

@section('content')
	{!! Form::open(['route'=>['admin.alumno.update',$alumno],'method'=>'put']) !!}
	<table>
		<tr>
		<td>
			<div class="form-group">
			{!! Form::label('carrera','Carrera') !!}
			{!! Form::text('carrera',$alumno->carrera,['class'=>'form-control','placeholder'=>'Carrera','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('semestre','Semestre') !!}
			{!! Form::text('semestre',$alumno->semestre,['class'=>'form-control','placeholder'=>'Semestre','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('coordinador','Coordinador Academico') !!}
			{!! Form::text('coordinador',$alumno->coordinador,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div class="form-group">
			{!! Form::label('name','PRACTICANTE') !!}
			{!! Form::text('name',$alumno->name,['class'=>'form-control','placeholder'=>'Nombre(s)','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="form-group">
			{!! Form::label('evaluacion_inicio','Evaluacion Inicio') !!}
			{!! Form::date('evaluacion_inicio',$alumno->evaluacion_inicio,['class'=>'form-control','placeholder'=>'Evaluacion Inicio','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('evaluacion_final','Evaluacion Final') !!}
			{!! Form::date('evaluacion_final',$alumno->evaluacion_final,['class'=>'form-control','placeholder'=>'Evaluacion Final','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('total_hrs','Total Horas') !!}
			{!! Form::number('total_hrs',$alumno->total_hrs,['class'=>'form-control','placeholder'=>'Total Horas','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div class="form-group">
			{!! Form::label('razon_social','Razón Social') !!}
			{!! Form::text('razon_social',$alumno->razon_social,['class'=>'form-control','placeholder'=>'Razón Social','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
			{!! Form::label('direccion','Dirección') !!}
			{!! Form::text('direccion',$alumno->direccion,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('telefono','Teléfono') !!}
			{!! Form::number('telefono',$alumno->telefono,['class'=>'form-control','placeholder'=>'Teléfono','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="1">
			<div class="form-group">
			{!! Form::label('nombre_tutor','Nombre Tutor') !!}
			{!! Form::text('nombre_tutor',$alumno->nombre_tutor,['class'=>'form-control','placeholder'=>'Nombre Tutor','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('cargo','Cargo') !!}
			{!! Form::text('cargo',$alumno->cargo,['class'=>'form-control','placeholder'=>'Cargo','required']) !!}
			</div>
		</td>
		<td>
			<div class="form-group">
			{!! Form::label('area_asignada','Area Asignada') !!}
			{!! Form::text('area_asignada',$alumno->area_asignada,['class'=>'form-control','placeholder'=>'Area Asignada','required']) !!}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div class="form-group">
			{!! Form::label('tarea_asignada','Tareas asignada') !!}
			{!! Form::textarea('tarea_asignada',$alumno->tarea_asignada,['class'=>'form-control','placeholder'=>'tareas asignada','required']) !!}
			</div>
		</td>
	</tr>

	</tr>
	</table>

	<div class="div-group">
		{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	</div>
{!! Form::close() !!}
@endsection
