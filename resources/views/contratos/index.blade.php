@extends("layouts.app")
@section("title","Contratos")
@section("content")
	<div class="big-padding text-center blue-grey white-text">
	<h1>Contratos</h1>
	</div>
	<div class="container  ">
		<table class="table table-striped table-white">
			<thead>
				<tr>
					<td>CONTRATO</td>
					<td>CONSTRUCTORA</td>
					<td>M.CONTRARADO</td>
					<td>AV.FISICO</td>
					<td>ANTICIPO</td>
					

				</tr>
			</thead>
			<tbody class="table-white">
				@foreach($contratos as $contrato)
				<tr>
					<td>{{$contrato->numero}}</td>
					<td>{{$contrato->monto}}</td>
					<td>{{$contrato->avance_fisico}}</td>
					@foreach($constructoras as $constructora)
						<td>{{$constructora->nombre_constructoras}}</td>
					@endforeach
					<td>
								<table class="table table-striped table-white">
								<thead>
									<tr>
									<td>ANTICIPO</td>
									<td>ESTATUS</td>
									<td>FECHA</td>
									<td>AV. FIS EST</td>
									<td>NETO A PAGAR</td>
									</tr>
								</thead>
								@foreach($estimaciones as $estimacion)
									<tr>
										<td>{{$estimacion->nombre}}</td>
										<td>{{$estimacion->estatus}}</td>
										<td>{{$estimacion->fecha}}</td>
										<td>{{$estimacion->avance_fisico_estimado}}</td>
										<td>{{$estimacion->neto_pagar}}</td>
									</tr>
								@endforeach							
								</table>	
							
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="floating">
	<a href="{{url('/contratos/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">+</i>
	</a>
	</div>
@endsection