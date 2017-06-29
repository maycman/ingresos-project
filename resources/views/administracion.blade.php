@extends("layout")
@section("content")
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a class="btn btn-primary btn-lg animated fadeInLeft" href="capturar">Registrar Ingreso</a>
			</div>
		</div>
	</div>
	<div id="space" class="container-fluid jumbotron">
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Concepto</th>
								<th>Monto</th>
								<th>Fecha Alta</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($ingresos as $ingreso)
							<tr>
								<form class="form" method=post action="{{ url('/') }}">
								<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id_ingreso" id="id_ingreso" value="{{ $ingreso->id_ingreso }}"/>
								<td>{{ $ingreso->id_ingreso }}</td>
								<td>{{ $ingreso->concepto }}</td>
								<td>{{ $ingreso->monto }}</td>
								<td>{{ $ingreso->fecha_alta }}</td>
								<td><button type="submit" class="btn btn-danger">Eliminar</button></td>
								</form>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection