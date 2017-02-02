@extends('layout')
@section('cuerpo')

<div class="col-md-12">
    <div class="panel-body">
        <h2>Consulta rapida</h2>
			<p></p>

        <table width="100%" class="table table-striped" id="dataTables-example">
            <thead>
                <tr>
                    <th>Region</th>
                    <th>Cluster</th>
                    <th>Controladora</th>
                    <th>Celda</th>
                    <th>AZ</th>
                    <th>TE</th>
                    <th>TM</th>
                    <th>RET</th>
                    <th>ANTENA</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $celdas as $celda )
                <tr>
                    <td>{{ $celda -> estacion -> region }}</td>
                    <td>{{ $celda -> estacion -> cluster -> nombre }}</td>
                    <td>{{ $celda -> controladora -> nombre }}</td>
                    <td><a href="{{asset('/celdas/' . $celda -> id)}}"> {{ $celda -> nombre }} </a></td>
                    <td>{{ $az -> where('celda_id', $celda -> id) -> first() -> valor }}</td>
                    <td>{{ $te -> where('celda_id', $celda -> id) -> first() -> valor }}</td>
                    <td>{{ $tm -> where('celda_id', $celda -> id) -> first() -> valor }}</td>
                    <td>{{ $celda -> ret }}</td>
                    <td>{{ $celda -> antenas -> modelo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.panel-body -->
</div>

@endsection