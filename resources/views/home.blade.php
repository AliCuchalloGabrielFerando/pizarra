@extends('layout')
@section('titulo','home')

@section('contenido')
<h2>contenido</h2>
@forelse ($arreglo as $elemento )
   <li> {{ $elemento['nombre'] }}</li>
   <pre>{{$loop->last ? 'es el ultimo':''}}</pre>
@empty
    
@endforelse
@endsection