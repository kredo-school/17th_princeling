@extends('layouts.app')

@section('content')
    <div class="loginpage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7">
                    <img src="{{ asset('img/login.jpeg') }}" class="img-size" alt="Login Image">
                </div>

                {{-- Create login --}}
                <div class="col">
                    <h2 class="fw-bold">Log in</h2>
                    <p>Don't have your account? <a href="{{ route('register') }}" class="text-decoration-none text-dark fw-bold">Sign up</a></p>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email"  class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password"  class="form-control">    
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn button-color1 text-white">Log in</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
