<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet">
    <title>authentication</title>
</head>
<body class="bg-gray-600">
    <nav class="">
        <ul class="">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href= "{{route('dashboard')}}">Dashboard</a>
            </li>
        </ul>

        <ul>
            @auth
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @endauth

            @guest
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>

            <li>
                <a href="{{route('register')}}">Register</a>
            </li>
            @endguest
                
                        
        </ul>
    </nav>
   @yield('content')
</body>
</html>