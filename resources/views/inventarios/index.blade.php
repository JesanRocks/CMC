@extends('layouts.sistema')
@section('title'," Inventario" )
@section('content') 
<div class="container">
	<div class="col-xs-12">
		
		<div class="card text-center">
			<div class="card-header h4">
				Consultar inventario
				<div class="d-flex justify-content-between">
					<a href="{{ route('sistema') }}" class="btn btn-primary">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>

					<div class="btn-group">
						<a href="{{ route('descarga.pdf') }}" class="btn btn-danger">
							<i class="fas fa-file-pdf"></i> PDF 
						</a>

						<a href="#" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						</a>
						<div class="dropdown-menu">
						    <a class="dropdown-item" href="{{ route('pdf') }}">Ver listado completo</a>
						    <a class="dropdown-item" href="{{ route('etiquetas') }}">Etiquetas</a>
						    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
						    <div class="dropdown-divider"></div>
						    <a class="dropdown-item" href="{{ route('descarga.pdf') }}">Descargar listado</a>
						</div>
					</div>

					<a href="{{ route('inventarios.create') }}" class="btn btn-primary">
						<i class="fas fa-plus-square"></i> Registrar bien 
					</a>
				</div>
			</div>

			<div class="card-body pl-0 pr-0">

				<table id="table_id" class="table table-hover">
				    <thead class="bg-dark">
				        <tr>
					        <td class="d-none d-sm-block">ID</td>
							<td>Nombre</td>
							<td>Cod</td>
							{{-- <td>Grupo</td> --}}
							{{-- <td>N° I.</td> --}}
							<td>Opciones</td>
				        </tr>
				    </thead>
				    <tbody>
				@foreach($inventarios as $inventario)
					<tr>
						<td class="d-none d-sm-block">{{$inventario->id}}</td>
						<td class="text-justify">{{$inventario->articulo->dsc}}</td>
						<td>{{$inventario->codigo}}</td>
						{{-- <td>{{$inventario->grupo->codigo}}</td> --}}
						{{-- <td>{{$inventario->independiente}}</td> --}}

						<td class="d-flex bd-highlight">
							<a href="{{ route('inventarios.show', $inventario->id) }}" 
							class="btn btn-warning ml-3 d-none d-sm-block"><i class="far fa-eye"></i><span class="d-none d-md-block d-lg-none">Ver</span>  </a>

							<a href="{{ route('inventarios.edit', $inventario->id) }}" 
							class="btn btn-warning ml-3"><i class="fas fa-edit"></i><span class="d-none d-md-block d-lg-none">Editar</span> </a>

							{!! Form::open(['route' => ['inventarios.destroy',$inventario->id ], 
							'method'=> 'DELETE' ])  !!}
								<button type="" class="btn btn-danger ml-3"><i class="fas fa-trash-alt"></i>  <span class="d-none d-md-block d-lg-none">Eliminar</span></button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				    </tbody>   
				</table>

			</div>

			<div class="card-footer text-muted mt-3">
			</div>
			
		</div>

	</div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready( function () {
	    $('#table_id').DataTable();
	} );
</script>
@endsection