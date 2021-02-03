@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}" />
        </div>
        <div class="col-sm-8">
        <h2>{{$pelicula['title']}}</h2>
            <h4>Año: {{$pelicula['year']}}</h4>
            <h4>Director: {{$pelicula['director']}}</h4>
            <p><b>Resumen: </b> {{$pelicula['synopsis']}}</p>
            <p><b>Estado: </b> {{ ($pelicula['rented'])?'Película actualmente alquilada':'Alquilar película'  }}</p>

            @if($pelicula['rented'])
                <a href="{{url('/catalog/noRented/'.$pelicula['id'])}}" class="btn btn-danger">Devolver película</a>
            @else
                <a href="{{url('/catalog/rented/'.$pelicula['id'])}}" class="btn btn-success">Alquilar película</a>
            @endif
            <a href="{{url('/catalog/edit/'.$pelicula['id'])}}" class="btn btn-warning">Editar película</a>
            <a href="{{url('/catalog')}}" class="btn btn-outline-info"><i class="fas fa-arrow-left"></i>Volver al listado</a>
            
        </div>
    </div>
    
@stop