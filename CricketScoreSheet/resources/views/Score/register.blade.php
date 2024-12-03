@extends('Score.layout1')
@section('contend')

<h2 style="text-align: center; margin-top: 20px;">Register</h2>
<h6 style="color: red; text-align: center;">@OnlineScore</h6>

<div style="margin-top: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
    <form action="{{ route('login.store') }}" method="post" style="padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
        @csrf

        <div style="margin-bottom: 15px; display: flex; align-items: center;">
            <label for="name" style="width: 40%; text-align: right; margin-right: 10px;">Name</label>
            <div style="width: 60%;">
                <input id="name" type="text" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" name="name" value="{{ old('name') }}" required>
                @error('name')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
        </div>

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
            <label for="password-confirm" style="width: 40%; text-align: right; margin-right: 10px;">Re-Password</label>
            <div style="width: 60%;">
                <input id="password-confirm" type="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" name="re_password" required>
            </div>
        </div>

        <div style="display: flex; justify-content: flex-end;">
            <div style="width: 60%; margin-left: auto;">
                <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                    Register
                </button>
            </div>
        </div>

        <div style="display: flex; justify-content: flex-end;">
            <div style="width: 60%; margin-left: auto;">
                <a href="{{route('login.create')}}" class="nav-link border border-white">I Have an Account.</a>
            </div>

        </div>

    </form>
</div>

@endsection
