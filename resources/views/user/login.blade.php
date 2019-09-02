@extends('layout/main_login_user')

@section('title','Client Login - Bhinestorm')
@section('description','Bhinestorm')

@section('form')
    
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="page-links">
        <a href="{{ url('/login') }}" class="active">Login</a><a href="{{ url('/register') }}">Register</a>
    </div>
    <form>
        <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
        <input class="form-control" type="password" name="password" placeholder="Password" required>
        <div class="form-button">
            <button id="submit" type="submit" class="ibtn">Login</button>
        </div>
    </form>
    <div class="other-links">
        <span>Or login with</span><a href="{{ url('/myuniverse') }}">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
    </div>

@endsection