@extends('Score.layout')
@section('contend')

<h2>Register</h2>
<h6 class="text-danger">@OnlineScore</h6>

<div class="container">
<form action="{{route('login.store')}}" method="post">
@csrf

<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>
</div>

<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
</div>

<div class="row mb-3">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Re-Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="re_password" required autocomplete="new-password">
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </div>
</div>
</form>
</div>

@endsection