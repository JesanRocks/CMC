@extends('layouts.sistema')
@section('title'," Editar usuario" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Modificar usuario
				<div class="d-flex justify-content-between">
					<a href="{{ route('usuarios.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver
					</a>
				</div>
			</div>
			<div class="card-body">
			{!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 
			'method'=> 'PUT'])  !!}
				@include('usuarios.partials.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection