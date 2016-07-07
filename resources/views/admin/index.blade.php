@extends('admin.template.main')
@section('title','LUNASOFTWARE')

@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Bienvenido {{Auth::user()->name}}!!!</h1>
		<p>COMO ESTÁS</p>
	</div>
</div>
@endsection