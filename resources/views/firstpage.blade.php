@extends('layouts.app')

@section('content')
    <h2>firstpage</h2>
        <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
        <br>
        <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
@endsection
