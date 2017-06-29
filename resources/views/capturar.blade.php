@extends("layout")
@section("content")
	<div class="container jumbotron">
		<div class="row">
			<div class="col-sm-offset-5 col-sm-4 animated fadeIn">
				<h2>Nuevo ingreso</h2>
			</div>
		</div>
		@if(! $errors->isEmpty())
		<div class="row">
			<div class="col-sm-offset-5 col-sm-3">
				<div class="alert alert-danger">
					<h4><strong>Oh no!</strong> por favor corrige los siguientes errores:</h4>
					<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-sm-offset-5 col-sm-5 animated fadeIn">
				<form class="form-horizontal" name="capturar" method="post" action="{{ url('capturar') }}">
        			{!! csrf_field() !!}
        			<div class="row">
        				<div class="col-sm-6">
        					<div class="form-group">
        						<label for="fecha">Fecha alta</label>
                				<div class="input-group date">
    								<input type="text" class="form-control" name="fecha_alta" id="fecha_alta"/>
    								<div class="input-group-addon">
        								<span class="glyphicon glyphicon-th"></span>
    								</div>
								</div>
            				</div>
        					<div class="form-group">
        						<label for="concepto">Concepto</label>
        						<input class="form-control" type="text" name="concepto" id="concepto" value="{{ old('concepto') }}" required autocomplete="off" />
        					</div>
        					<div class="form-group">
        						<label for="monto">Monto</label>
        						<input class="form-control" type="text" name="monto" id="monto" value="{{ old('monto') }}" required autocomplete="off" />
        					</div>
        					<div class="form-group">
        						<button type="submit" class="btn btn-success btn-lg">Guardar</button>
        						<a class="btn btn-warning btn-lg" href="/">Atras</a>
        					</div>
        				</div>
        			</div>
        		</form>
			</div>
		</div>
	</div>
      			
@endsection