<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Score</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url({{URL ('image/15.jpg')}});";>

<div class="bg-gray">


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="{{route('onlinescore.index')}}" class="navbar-brand">
            OnlineScore
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navid"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navid">
            <ul class="navbar-nav">
                <li class="nav-item mx-2"><a href="{{route('sheet.index')}}" class="nav-link">Score Sheet</a></li>
                <li class="nav-item mx-2"><a href="{{route('sheet.create')}}" class="nav-link">Team Register</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">News</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Videos</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Stats</a></li>
                <li class="nav-item mx-2"><a href="#" class="nav-link">Upcommimg</a></li>
                <li class="nav-item mx-2"><a href="{{route('onlinescore.create')}}" class="nav-link">About Us</a></li>
            </ul>
        </div>
        <ul  class="navbar-nav">
            <li class="nav-item mx-2"><a href="{{route('login.index')}}" class="nav-link border border-white">Register</a></li>
            <li class="nav-item mx-2"><a href="{{route('login.create')}}" class="nav-link border border-white">Login</a></li>
        </ul>
    </nav>

@yield('home')
    <div class="container bg-light closeopa">

    @yield('contend')
        
    </div>



<footer class="text-center text-white" style="background-color: #343a40;">
<div class="btn-back-to-top">

 <!-- Grid container -->
 <div class="container pt-1">

       <p>M..S.Kodikara <br>
        mudithasasanka7@gmail.com <br>
        +9477-5077307 <br>
        #11680 <br>
        Sri Lanka <br></p>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-light" href="{{route('onlinescore.index')}}">OnlineScore.com</a>
  </div>
  <!-- Copyright -->
</footer>



</div>
 

</div>
</body>
</html>