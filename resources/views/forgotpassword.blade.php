@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="{{asset('css/forgotPass.css')}}">
        <div class="wrapper">
            <div class="title">
                Forget Your Password
            </div>
            <form action="#">
                <div class="field">
                    <label>Email</label>
                    <input type="text" required>
                </div>
                <div class="field">
                    <input type="submit" value="Send Verification Code">
                </div>
                <div class="login-link">
                    Back to <a href="/login">Log In</a>
                </div>
            </form>
        </div>
    @endsection