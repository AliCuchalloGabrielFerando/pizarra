@extends('layout')
@section('titulo','Login')

@section('contenido')
<h1>esta en login</h1>
<pre>{{ Auth::user() }}}</pre>
    <form  method="POST">
        @csrf

        <label>
            <input name="email" type="email"  required  autofocus value="{{ old('email') }}" placeholder="ingrese correo">
        </label>
        @error('email')
        {{ $message }}
        @enderror
            
       
        <br>
        <label>
            <input name="password" type="password" required placeholder="ingrese contraseña">    
        </label>
        @error('password')
        {{ $message }}
        @enderror
        <br>
        <label>
        <input type="checkbox" name="remember" > Recordar
    </label><br>
        <button type="submit">Login</button>
    </form>
@endsection