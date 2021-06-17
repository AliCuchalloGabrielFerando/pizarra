@extends('layout')
@section('titulo','dashh')
@section('contenido')

mucho contedio
@if (session('estatus'))
<br>
{{ session('estatus') }}    
@endif
@endsection