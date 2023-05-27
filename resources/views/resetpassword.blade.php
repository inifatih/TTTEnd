@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <section>
        <div class="wrapper">
            <div class="title">
                Reset Password
            </div>
            <form action="#">
                <div class="field">
                    <label>Password</label>
                    <input type="text" required>
                </div>
                <div class="field">
                    <label>Confirm Password</label>
                    <input type="text" required>
                </div>
                <div class="field">
                    <input type="submit" value="Reset Password">
                </div>
                <div class="login-link">
                    Back to <a href="login.html">Log In</a>
                </div>
            </form>
        </div>
    </section>
@endsection