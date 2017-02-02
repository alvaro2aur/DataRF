@extends('layout')
@section('cuerpo')
<style>
	.ul-none{
       list-style:none;
       }
</style>
<div class="page-header container">
  <h1>Crear nueva estación</h1>
</div>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
  			<div class="panel-heading"><strong>Estación</strong></div>
	  			<div class="panel-body">
	  				{!! Form::open(['route' => 'estaciones.store', 'class' => 'form-inline']) !!}
	  				<div class="row">
	  				<div class="col-md-12">
	  					<h4>
						<p>
							{{ Form::label('nombre', 'Nombre de la estacion: ') }}
							{{ Form::text('nombre', null, ['class' => 'form-control']) }}
						</p>
						</h4>
					</div>
					</div>
					<div class="panel panel-default">
  					<div class="panel-body">
					<div class="row">
	  				<div class="col-md-3">
						<p>
							{{ Form::label('region', 'Región: ') }}
							{{ Form::text('region', null, ['class' => 'form-control']) }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
							{{ Form::label('cluster_id', 'Cluster: ') }}
							{{ Form::text('cluster_id', null, ['class' => 'form-control']) }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
							{{ Form::label('estado', 'Estado: ') }}
							{{ Form::text('estado', null, ['class' => 'form-control']) }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
							{{ Form::label('ciudad', 'Ciudad: ') }}
							{{ Form::text('ciudad', null, ['class' => 'form-control']) }}
						</p>
					</div>
					</div>
					<div class="row">
	  				<div class="col-md-3">
						<p>
							{{ Form::label('municipio', 'Municipio: ') }}
							{{ Form::text('municipio', null, ['class' => 'form-control']) }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
							{{ Form::label('parroquia', 'Parroquia: ') }}
							{{ Form::text('parroquia', null, ['class' => 'form-control']) }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
							{{ Form::label('direccion', 'Dirección: ') }}
							{{ Form::text('direccion', null, ['class' => 'form-control']) }}
						</p>
					</div>
					</div>
					</div>
	  				</div>
					<div class="panel panel-default">
  					<div class="panel-body">
					<div class="row">
	  				<div class="col-md-4">
						<p><strong>Coordenadas</strong></p>
						<ul class="ul-none">
							<li>
								{{ Form::label('longitud', 'Longitud: ') }}
								{{ Form::text('longitud', null, ['class' => 'form-control']) }}
							</li>
							<li>
								{{ Form::label('latitud', 'Latitud: ') }}
								{{ Form::text('latitud', null, ['class' => 'form-control']) }}
							</li>
						</ul>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
					</div>
					</div>
					<br>
					<div class="row">
	  				<div class="col-md-4">
						<p><strong>Estructura</strong></p>
						<ul class="ul-none">
							<li>
								{{ Form::label('estructura', 'Tipo: ') }}
								{{ Form::text('estructura', null, ['class' => 'form-control']) }}
							</li>
							<li>
								{{ Form::label('altura', 'Altura: ') }}
								{{ Form::text('altura', null, ['class' => 'form-control']) }}
							</li>
							<li>
								{{ Form::label('pisos', 'Pisos: ') }}
								{{ Form::text('pisos', null, ['class' => 'form-control']) }}
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>Co-ubicacion</strong></p>
						<ul class="ul-none">
							<li>
								{{ Form::label('coubi_op', 'Operadora: ') }}
								{{ Form::text('coubi_op', null, ['class' => 'form-control']) }}
							</li>
							<li>
								{{ Form::label('coubi_acc', 'Acceso: ') }}
								{{ Form::text('coubi_acc', null, ['class' => 'form-control']) }}
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>Otros</strong></p>
							<ul class="ul-none">
								<li>
									{{ Form::label('vendor', 'Vendor: ') }}
									{{ Form::text('vendor', null, ['class' => 'form-control']) }}
								</li>
								<li>
									{{ Form::label('back2back', 'Back-to-Back: ') }}
									{{ Form::text('back2back', null, ['class' => 'form-control']) }}
								</li>
							</ul>
					</div>
					</div>
					</div>
					</div>
					{{ Form::submit('Crear estación', ['class' => 'btn btn-success']) }}
					{!! Form::close() !!}
  				</div>
		</div>
	</div>
</div>
</div>


@endsection