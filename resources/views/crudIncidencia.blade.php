@extends('layouts.plantilla')

@section('title', 'Incidencies')

@section('content')
    <h1>pagina d'incidencia</h1>
    <a href="/crearIncidencia"> Crear Incidencia</a>
    <ul>
        @foreach ($incidencia as $incidencia2)
            <li>{{$incidencia2->id}}</li>
        @endforeach
    </ul>
    {{$incidencia->links()}}
@endsection
