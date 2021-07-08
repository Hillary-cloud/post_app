<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
    <script src="{{url('assets/bootstrap/js/bootstrap.js')}}"></script>
    <title>authentication</title>
</head>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <img class="img-thumbnail img-fluid " src="thumbnail.jpg" alt="" style="width:50px; height:50px;">
    <a class="navbar-brand" href=""><h3>Simple Post Web</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>                  
        
                    @auth
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    @endauth
        
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    @endguest                                  
                </ul>
            </div>
        </nav>
   @yield('content')
</body>
</html>