@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-4">
    
        <img src="{{ $pelicula['poster'] }}" alt="">
    
    </div>
    <div class="col-sm-8">
    
    <h1>{{ $pelicula['title'] }}</h1>
    <h2>{{ $pelicula['director'] }} - {{ $pelicula['year'] }}</h2>
    <p>{{ $pelicula['synopsis'] }}</p>

    @if ( $pelicula['rented'] )
    <p><span>Estado:</span> Película disponible</p>
    <a href="" class="btn btn-default btn-primary">Alquilar película</a>
    @else
    <p><span>Estado:</span> Película actualmente alquilada</p>
    <a href="" class="btn btn-default btn-danger">Devolver película</a>
    @endif

    <a href="{{ route('catalog.edit', $pelicula->id) }}" class="btn btn-defaul btn-warning">Editar película</a>
    <a href="" class="btn btn-defaul border">Volver al listado</a>
    </div>
</div>

@endsection