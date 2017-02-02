@extends('layout')
@section('cuerpo')
<style>
	.ul-none{
       list-style:none;
       }
</style>
<h1>Detalle</h1>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
  			<div class="panel-heading"><strong>Estacion</strong></div>
	  			<div class="panel-body">
	  				<div class="row">
	  				<div class="col-md-12">
						<h4>
						<p>
						<strong>Nombre de la estacion: </strong>
						{{ $celda -> estacion -> nombre }}
						</p>
						</h4>
					</div>
					</div>
					<div class="panel panel-default">
  					<div class="panel-body">
					<div class="row">
	  				<div class="col-md-3">
						<p>
						<strong>Region: </strong>
						{{ $celda -> estacion -> region }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
						<strong>Cluster: </strong>
						{{ $celda -> estacion -> cluster -> nombre }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
						<strong>Estado: </strong>
						{{ $celda -> estacion -> estado }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
						<strong>Ciudad: </strong>
						{{ $celda -> estacion -> ciudad }}
						</p>
					</div>
					</div>
					<div class="row">
	  				<div class="col-md-3">
						<p>
						<strong>Municipio: </strong>
						{{ $celda -> estacion -> municipio }}
						</p>
					</div>
					<div class="col-md-3">
						<p>
						<strong>Parroquia: </strong>
						{{ $celda -> estacion -> parroquia }}
						</p>
					</div>
					<div class="col-md-6">
						<p>
						<strong>Direccion: </strong>
						{{ $celda -> estacion -> direccion }}
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
							<strong>Latitud: </strong>
							{{ $celda -> estacion -> latitud }}
							</li>
							<li>
							<strong>Longitud: </strong>
							{{ $celda -> estacion -> longitud }}</li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>Numero de celdas</strong></p>
						<h4>
						<span class="label label-danger">2G</span> <span class="label label-danger">GSM900 <span class="badge">{{ $nroceldasGSM900 }}</span></span> <span class="label label-danger">DSC1800 <span class="badge">{{ $nroceldasDSC1800 }}</span></span>
						</h4>

						<h4>
						<span class="label label-primary">3G</span> <span class="label label-primary">F1 <span class="badge">{{ $nroceldasF1 }}</span>
						</span>  <span class="label label-warning">F2 <span class="badge">{{ $nroceldasF2 }}</span></span>
						</h4>

						<h4>
						<span class="label label-success">4G</span> <span class="badge">{{ $nroceldasLTE }}</span>
						</h4>
						<!--
						<ul class="ul-none">
							<h4><li><span class="label label-danger">2G</span> <span class="label label-danger">GSM900 <span class="badge">3</span></span> <span class="label label-danger">DSC1800 <span class="badge">3</span></span></li></h4>
							<h4><li><span class="label label-primary">3G</span> <span class="label label-primary">F1 <span class="badge">3</span></span> <span class="label label-warning">F2 <span class="badge">3</span></span></li></h4>
							<h4><li><span class="label label-success">4G</span> <span class="badge">3</span></li></h4>
						</ul>
						-->
					</div>
					<div class="col-md-4">
						<p><strong>Controladoras</strong></p>
							<ul class="ul-none">
							@foreach( $controladoras as $controladora)
								<li><span class="label label-default">{{ $controladora->controladora->nombre}}</span></li>
							@endforeach
							</ul>
					</div>
					</div>
					<br>
					<div class="row">
	  				<div class="col-md-4">
						<p><strong>Estructura</strong></p>
						<ul class="ul-none">
							<li><strong>Tipo: </strong>{{ $celda -> estacion -> estructura }}</li>
							<li><strong>Altura: </strong>{{ $celda -> estacion -> altura }} m</li>
							<li><strong>Pisos: </strong>{{ $celda -> estacion -> pisos }}</li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>Co-ubicacion</strong></p>
						<ul class="ul-none">
							<li><strong>Operadora: </strong>{{ $celda -> estacion -> coubi_op }}</li>
							<li><strong>Acceso: </strong>{{ $celda -> estacion -> coubi_acc }}</li>
						</ul>
					</div>
					<div class="col-md-4">
						<p><strong>Otros</strong></p>
							<ul class="ul-none">
								<li><strong>Vendor: </strong>{{ $celda -> estacion -> vendor }}</li>
								<li><strong>Back-to Back: </strong>{{ $celda -> estacion -> back2back }}</li>
							</ul>
					</div>
					</div>
					</div>
					</div>
				</div>
	  		</div>
		</div>
</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
  			<div class="panel-heading"><strong>Celda</strong></div>
	  			<div class="panel-body">
	  				<div class="row">
	  				<div class="col-md-12">
	  					<h4><strong>{{ $celda -> nombre }}</strong></h4>
	  					<h5>{{ $celda -> cellid }}</h5> 
	  				</div>
	  				</div>
					<br>
					<div class="row">
	  				<div class="col-md-3">
						<p><strong>Azimut magnetico</strong></p>
						<ul class="list-group">
						@foreach( $azimuts as $azimut )
							@if( $loop->first)
							<li class="list-group-item">{{ $azimut -> valor }}° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@else
							<li class="list-group-item"><del>{{ $azimut -> valor }}</del>° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@endif
						@endforeach
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Tilt electrico {{ $celda -> ret }}</strong></p>
						<ul class="list-group">
						@foreach( $tes as $te )
							@if( $loop->first)
							<li class="list-group-item">{{ $te -> valor }}° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@else
							<li class="list-group-item"><del>{{ $te -> valor }}</del>° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@endif
						@endforeach
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Tilt mecanico</strong></p>
						<ul class="list-group">
						@foreach( $tms as $tm )
							@if( $loop->first)
							<li class="list-group-item">{{ $tm -> valor }}° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@else
							<li class="list-group-item"><del>{{ $tm -> valor }}</del>° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
							@endif
						@endforeach
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Altura antena</strong></p>
						<ul class="list-group">
							<li class="list-group-item">6° <span class="label label-info">01/01/2016</span> <span class="label label-success">alurdaneta</span></li>
						</ul>
					</div>
					</div>
					<p><strong>Antena</strong></p>
					<div class="panel panel-primary">
  					<div class="panel-body">
					<div class="row">
	  				<div class="col-md-3">
						<p><strong>Marca: </strong>{{ $celda -> antenas -> marca }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>Modelo: </strong>{{ $celda -> antenas -> modelo }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>Tipo: </strong>{{ $celda -> antenas -> tipo }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>Banda(s): </strong>{{ $celda -> antenas -> bandas }} MHz</p>
					</div>
					</div>
					<br>
					<div class="row">
	  				<div class="col-md-3">
						<p><strong>Apertura vertical:</strong></p>
						<ul class="ul-none">
							<li><strong>900 MHz: </strong>{{ $celda -> antenas -> AV_900 }}°</li>
							<li><strong>1800 MHz: </strong>{{ $celda -> antenas -> AV_1800 }}°</li>
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Apertura horizontal: </strong>
						<ul class="ul-none">
							<li><strong>900 MHz: </strong>{{ $celda -> antenas -> AH_900 }}°</li>
							<li><strong>1800 MHz: </strong>{{ $celda -> antenas -> AH_1800 }}°</li>
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Tilt electrico: </strong>
						<ul class="ul-none">
							<li><strong>900 MHz: </strong>{{ $celda -> antenas -> TE_900 }}</li>
							<li><strong>1800 MHz: </strong>{{ $celda -> antenas -> TE_900 }}</li>
							<li><strong>RET: </strong>RCU</li>
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>Ganancia: </strong></p>
						<ul class="ul-none">
							<li><strong>900 MHz: </strong>{{ $celda -> antenas -> GAN_900 }} dBi</li>
							<li><strong>1800 MHz: </strong>{{ $celda -> antenas -> GAN_1800 }} dBi</li>
						</ul>
					</div>
					</div>
					<br>
					<div class="row">
	  				<div class="col-md-8">
						<p><strong>Antena anterior: </strong></p>
						<ul class="ul-none">
							<li><strong>Marca: </strong>Agisson</li>
							<li><strong>Modelo: </strong>XXXXX</li>
							<li><strong>Motivo del reemplazo: </strong>XXXXX</li>
						</ul>
					</div>
					</div>
					</div>
					</div>

					<p><strong>Configuracion</strong></p>
					<div class="panel panel-primary">
  					<div class="panel-body">
					<div class="row">
	  				<div class="col-md-3">
						<p><strong>Scrambling code: </strong>{{ $celda -> psc }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>LAC: </strong>{{ $celda -> lac }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>RAC: </strong>{{ $celda -> rac }}</p>
					</div>
					<div class="col-md-3">
						<p><strong>URA: </strong>{{ $celda -> ura }}</p>
					</div>
					</div>
					<br>
					<div class="row">
	  				<div class="col-md-3">
						<p><strong>UARFCNUL:</strong></p>
						<ul class="ul-none">
						@if($celda->subtecno_id === 3)
							<li><strong>F1: </strong>{{ $celda -> uarfcnUl }}</li>
						@else
							<li><strong>F2: </strong>{{ $celda -> uarfcnUl }}</li>
						@endif
						</ul>
					</div>
					<div class="col-md-3">
						<p><strong>UARFCNDL: </strong>
						<ul class="ul-none">
						@if($celda->subtecno_id === 3)
							<li><strong>F1: </strong>{{ $celda -> uarfcnDl }}</li>
						@else
							<li><strong>F2: </strong>{{ $celda -> uarfcnDl }}</li>
						@endif
						</ul>
					</div>
					<div class="col-md-3">
						
					</div>
					<div class="col-md-3">
					
					</div>
					</div>
					</div>
					</div>
				</div>
	  		</div>
		</div>
</div>
</div>

@endsection