<!DOCTYPE html>
<html>
<head>
	<title>Contratos</title>
</head>
<body>
<table>
	<tr>
		<th>Contrato</th>
		<th>Contratista</th>
		<th>Descripcion</th>
		<th>Monto</th>
	</tr>
	@foreach($contratos as $contrato)
	
	<tr>
		<th>{{$contrato->CONTRATO}}</th>
		<th>{{$contrato->CONTRATISTA}}</th>
		<th>{{$contrato->OBRA}}</th>
		<th>{{-- {{$contrato->MONTO_CONTRATADO}} --}}</th>
	</tr>
	@endforeach
</table>
</body>
</html>