<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-dark justify-content-around">
            <a href="{{route('home')}}">HOME PAGE</a>
            <a href="{{route('about')}}">ABOUT</a>
            <a href="{{route('contact')}}">CONTACTS</a>
            <a href="{{route('profile')}}">PROFILE</a>
            @if(auth()->check())
                <a href="{{route('logout')}}">LOG OUT</a>
            @else
                <a href="{{route('login')}}">LOG IN</a>
                <a href="{{route('register')}}">REGISTER</a>
            @endif
            
        </nav>
    </header>

    @yield('content')
    
</body>
</html>