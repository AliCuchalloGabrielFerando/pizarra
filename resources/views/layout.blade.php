<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo','Pizarra')</title>
</head>
<body>
    <div>
    <a href="/">Inicio</a> |
    @guest
    <a href="/login">login</a> |
    
    @else
    <a href="/dashboard"> Dashboard</a> |

    <form action="/logout" method="POST" style="display: inline">
        @csrf
         <a href="#" onclick="this.closest('form').submit()">Logout</a>

    </form>
    @endguest
   
</div>
    @yield('contenido')
</body>
</html>