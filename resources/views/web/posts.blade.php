@extends('layouts.blog')
@section('content')
@section('titulo'," Inicio")

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">        
        <div class="carousel-item active bg-secondary">
            <img style="height: 250px;" src="{{ asset('image/concejales.jpg') }}" class="d-block w-100" alt="...">
           	<div class="carousel-caption d-none d-md-block ">
            	<h5 class="text-danger display-4">Somos un equipo</h5>
	        </div>
	    </div>

        <div class="carousel-item bg-warning">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h5>Trabajamos por ti</h5>
        	</div>
        </div>

        <div class="carousel-item bg-dark ">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Somos un equipo</h5>
        	</div>
        </div>
	</div>
</div>

<div class="container">
	<div class="col-md-12 mt-3">
		<div class="shadow-lg p-3 mb-4 bg-danger rounded">
			<h1 class="text-left">Publicaciones</h1>
		</div>

		<div class="card-columns">
		@foreach($posts as $post)

			<div class="card">
			    @if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
			    <div class="card-body">
			      <h5 class="card-title">
			      	<a href="{{ route('post',$post->slug) }}">
			      		{{ $post->name }}
			      	</a>
			      </h5>
			      <p class="card-text">{{ $post->excerpt}}</p>
			      <p class="card-text">
			      	<small class="text-muted">Publicado el: {{ $post->created_at }}</small>
			      </p>
			    </div>
			</div>
		@endforeach
		</div>
	</div>
		
	<div class="col-12">
		{{ $posts->render() }}
	</div>
</div>
@endsection
