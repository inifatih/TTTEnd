@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="css/register.css">
<section>
        <div class="wrapper">
            <div class="title">
                Create an Account
            </div>
            <form action="/register" method="post">
                @csrf
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="field">
                    <label for="name">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2" required>
                </div>
                <div class="field">
                    <input type="submit" name="register" value="SignUp">
                </div>
                <div class="signup-link">
                    Already have account? <a href="login">Log In</a>
                </div>
            </form>
        </div>
    </section>
@endsection