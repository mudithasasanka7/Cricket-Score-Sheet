<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Score</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        /* Custom navigation styling */
        .custom-navbar {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Blurred background effect */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .custom-navbar .nav-link {
            color: #fff; /* White text color */
            font-weight: 500; /* Slightly bold */
            transition: color 0.3s ease;
        }
        .custom-navbar .nav-link:hover {
            color: #f0a500; /* Highlight color on hover */
        }
        .custom-navbar .navbar-brand {
            color: #f0a500; /* Brand color */
            font-size: 1.5rem; /* Slightly larger font size */
            font-weight: bold; /* Bold font */
        }
        .custom-navbar .navbar-toggler {
            border-color: #fff; /* White border for toggler */
        }
        .custom-navbar .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" fill="%23ffffff"%3E%3Cpath stroke="rgba%28155, 155, 155, 1%29" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }
    </style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url({{URL ('image/15.jpg')}});">

<div class="bg-gray">
    <nav class="navbar navbar-expand-sm custom-navbar">
        <a href="{{route('onlinescore.index')}}" class="navbar-brand">
            OnlineScore
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navid">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navid">
            <ul class="navbar-nav">
                <li class="nav-item mx-2"><a href="{{route('sheet.index')}}" class="nav-link">Score Sheet</a></li>
                <li class="nav-item mx-2"><a href="{{route('sheet.create')}}" class="nav-link">Team Register</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">News</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Videos</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Stats</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Upcoming</a></li>
                <li class="nav-item mx-2"><a href="{{route('onlinescore.create')}}" class="nav-link">About Us</a></li>
            </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item mx-2"><a href="{{route('login.create')}}" class="nav-link border border-white">Logout</a></li>
        </ul>
    </nav>

    @yield('home')
    <div class="container bg-light closeopa">
        @yield('contend')
    </div>

    <footer class="text-center text-white" style="background-color: #343a40;">
        <div class="btn-back-to-top"></div>
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-light" href="{{route('onlinescore.index')}}">OnlineScore.com</a>
        </div>
    </footer>
</div>
</body>
</html>
