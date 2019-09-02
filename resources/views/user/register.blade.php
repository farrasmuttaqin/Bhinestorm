@extends('layout/main_login_user')

@section('title','Client Register - Bhinestorm')
@section('description','Bhinestorm')

@section('form')

    <div class="page-links">
        <a href="{{ url('/login') }}">Login</a><a href="{{ url('/register') }}" class="active">Registers</a>
    </div>
    <form action = "{{ url('/register') }}" method="POST">
        @csrf
        <input class="form-control" type="text" id="userFullname" name="userFullname" placeholder="Full Name" required>
        <input class="form-control" type="email" id="userEmail" name="userEmail" placeholder="E-mail Address" required>
        <input class="form-control" type="number" id="userPhone" name="userPhone" placeholder="Phone Number" required>
        @error('userPhone') nomor telepon salah @enderror
        <input class="form-control" type="password" id="userPassword" name="userPassword" placeholder="Password" required>
        <input class="form-control" type="password" id = "userCPassword" name="userCPassword" placeholder="Confirm Password" required>
        <div class="form-button">
            <button id="submit" type="submit" class="ibtn">Register</button>
        </div>
    </form>
    <div class="other-links">
        <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
    </div>

@endsection