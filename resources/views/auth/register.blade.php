@extends('layouts.app')

@section('content')
    <div class="registerpage">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-7">
                    <img src="{{ asset('img/register.jpeg') }}" class="img-size" alt="Register Image">
                </div>

                {{-- Create register --}}
                <div class="col">
                    <h2 class="fw-bold">Create an Account</h2>
                    <p>Have your account? <a href="{{ route('login') }}" class="text-decoration-none text-dark fw-bold">login</a></p>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first-name" id="first-name"  class="form-control">
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last-name" id="last-name"  class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
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
                    <div class="row mt-2">
                        <div class="col">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm-password" id="confirm-password"  class="form-control">    
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn button-color1 text-white">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
