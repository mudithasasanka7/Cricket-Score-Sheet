@extends('Score.layout1')
@section('contend')

<h2 style="text-align: center; margin-top: 20px;">Login</h2>
<h6 style="color: red; text-align: center;">@OnlineScore</h6>

<div style="margin-top: 40px; margin-bottom: 82px; max-width: 600px; margin-left: auto; margin-right: auto;">
    <form action="{{ route('check.store') }}" method="post" style="padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
        @csrf
        <div style="margin-bottom: 15px; display: flex; align-items: center;">
            <label for="email" style="width: 40%; text-align: right; margin-right: 10px;">E-mail</label>
            <div style="width: 60%;">
                <input id="email" type="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div style="margin-bottom: 15px; display: flex; align-items: center;">
            <label for="password" style="width: 40%; text-align: right; margin-right: 10px;">Password</label>
            <div style="width: 60%;">
                <input id="password" type="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" name="password" required>
                @error('password')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div style="margin-bottom: 15px; display: flex; align-items: center;">
            <div style="width: 60%; margin-left: auto;">
                <div style="display: flex; align-items: center;">
                    <input type="checkbox" name="remember" id="remember" style="margin-right: 5px;">
                    <label for="remember" style="margin: 0;">Remember Me..</label>
                </div>
            </div>
        </div>

        <div style="display: flex; justify-content: flex-end;">
            <div style="width: 60%; margin-left: auto;">
                <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                    Login
                </button>
            </div>

        </div>

        <div style="display: flex; justify-content: flex-end;">
            <div style="width: 60%; margin-left: auto;">
                <a href="{{route('login.index')}}" class="nav-link border border-white">I Don't Have an Account</a>
            </div>
            
        </div>
    </form>
</div>
@endsection
