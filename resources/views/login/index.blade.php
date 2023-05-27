@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<section>
<div class="wrapper">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        @endif
            <div class="title">Login</div>
            <form action="/login" method="post">
                @csrf
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required>
                </div>
                <div class="field">
                    <input type="submit" name="Login" value="Login">
                </div>
                <div class="signup-link">
                    Don't have an account? <a href="register">Register</a>
                </div>
            </form>
        </div>
    </section>
@endsection