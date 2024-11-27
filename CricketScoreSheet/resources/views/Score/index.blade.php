@extends('Score.layout')
@section('contend')

<h2>Player Register</h2>
<h6 class="text-danger">@OnlineScore</h6>

<div class="container">
    <a href="{{route('sheet.create')}}" class="btn btn-warning">Back</a>
    <a href="{{route('register.create')}}" class="btn btn-success">Team A Register </a>
    <a href="{{route('b_register.create')}}" class="btn btn-success">Team B Register </a>
    

    <div class="container">

    @if($mgs = Session::get('add'))
    <div class="alert alert-success">
        <p>{{$mgs}}</p>
    </div>
@endif
        <!-- <div class="container alert alert-success pt-3 pb-2 mt-3">
            <p>
                1. Firstly Enter the Captan Namebr.  <br>
                2. Secondly Entr the Wicket Keeper. <br>
                3. Threely Enter the 9 players Name.
            </p>
        </div> -->
        <table class="table">
            <div class="container">
                <h4>Team A</h4>
            </div>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Reg-NO</th>
                <th>Action</th>
            </tr>

        </table>
<hr class="alert alert-danger">
        <table class="table">
            <div class="container">
                <h4>Team B</h4>
            </div>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Reg-NO</th>
                <th>Action</th>
            </tr>

        </table>

    </div>
</div>

@endsection