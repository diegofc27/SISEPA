@extends("layouts.app")
@section("title","Agregar Contrato")
@section("content")
	<div class="container white">
	<h1>Contrato</h1>
	@include('contratos.form', ['contrato' => $contrato,'constructora' => $constructora, 'estimacion' => $estimacion,  'url' => '/contratos', 'method' => 'POST'])	
	</div>
@endsection