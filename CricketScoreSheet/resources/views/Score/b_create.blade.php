@extends('Score.layout')
@section('contend')

<h2> B Player Register</h2>
<h6 class="text-danger">@OnlineScore</h6>

<div class="container">
<a href="{{route('register.index')}}" class="btn btn-warning">Back</a>
    <a href="{{route('register.create')}}" class="btn btn-success">Team A Register </a>
    

    <form action="{{route('b_register.store')}}" method="post">
    @csrf

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
@endif

    <div class="container pb-5">
    <div class="container mt-2">
            <label for="">Name</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="name"  placeholder="Enter the Name..!">
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Age</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="age" placeholder="Enter the Age..!">
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">E-mail</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="email" placeholder="Enter the E-mail..!">
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Town</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="town" placeholder="Enter the Town..!">
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Reg NO</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="rno" placeholder="Enter the Register Number..!">
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Card Name / Pet Name</label>
            <div class="container">
                <input type="text" class="form-group form-control form-control-sm" name="card" placeholder="Enter the Card Name..!">
            </div> 
        </div>

        <div class="container mt-2">
        <label for="">Faculty of: 
            <select class="form-group form-select form-control-sm" name="faculty" id="">
            <option value="fot">Technology</option>
            <option value="mgt">Managment</option>
            <option value="eng">Engrineer</option>
            <option value="science">Science</option>
            <option value="arabic">Arabic</option>
            <option value="art">Art Culture</option>
        </select>
        </label>
        </div>

        <div class="container mt-2">
            <label for="">Postures</label>
            <div class="container">
                <input type="radio" value="Batting" name="postures" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Batting</label><br>
                <input type="radio" value="Balling" name="postures" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Balling</label><br>
                <input type="radio" value="3X Action" name="postures" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">postures </label> <br>
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Balling Postures</label>
            <div class="container">
                <input type="radio" value="Spring" name="balling_postures" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Spring</label><br>
                <input type="radio" value="Pace" name="balling_postures" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Pace</label><br>
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Batting Side</label>
            <div class="container">
                <input type="radio" value="Right" name="batting_side" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Right</label><br>
                <input type="radio" value="Left" name="batting_side" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Left</label><br>
            </div> 
        </div>

        <div class="container mt-2">
            <label for="">Bolling Hand</label>
            <div class="container">
                <input type="radio" value="Right" name="bolling_hand" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Right</label><br>
                <input type="radio" value="Left" name="bolling_hand" class="btn-check" id="">
                <label class="form-check-label" for="inlineCheckbox1">Left</label><br>
            </div> 

            <div class="container pt-5">
                <input type="reset" value="Clear" class="btn btn-danger">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            
        </div>
    </div>
    </form>

</div>

@endsection