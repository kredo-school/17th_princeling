@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <img src="{{ asset('img/logo 1.jpg') }}" class="logo-size" alt="Logo Image">            
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none float-end text-dark icon-size me-5"><i class="fa-solid fa-circle-user"></i></a>
        </div>    
    </div>
        
    <nav class="navbar navbar-expand-lg bg-color1 position-relative">
        <a class="navbar-brand text-white ms-3 fw-bold" href="#">My Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse position-absolute end-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Upload Meal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Exercises</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Create Edit Profile --}}
    <div class="container">
        <form action="#" method="POST">
            <div class="row mt-2">
                <div class="col-2">
                    user's image
                </div>
                <div class="col-5 my-auto">            
                    <div class="row">
                        <div class="col-6">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first-name" id="first-name" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last-name" id="last-name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" name="gender" id="gender" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" name="birthday" id="birthday" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="height" class="form-label">Height</label>
                            <div class="text-field">
                                <input type="number" name="height" id="height" class="form-control">
                                <span class="add-on input">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label for="weight" class="form-label">Weight</label>
                            <div class="text-field">
                                <input type="number" name="weight" id="weight" class="form-control">
                                <span class="add-on input">kg</span>  
                            </div>                            
                        </div>                       
                        <div class="col-4">
                            <label for="target-weight" class="form-label fw-bold">Target Weight</label>
                            <div class="text-field">
                                <input type="number" name="target-weight" id="target-weight" class="form-control">
                                <span class="add-on input">kg</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="bmi" class="form-label fw-bold">BMI</label>
                            <input type="number" name="bmi" id="bmi" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="introduction" class="form-label">Introduction</label>
                            <textarea class="form-control" id="introduction" rows="3"></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row mt-5" style="padding-left: 450px">
                <div class="col-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="col-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <p class="text-center mt-3">Forgot your <a href="#" data-bs-toggle="modal" data-bs-target="#forgot-password" class="text-dark fw-bold">Password</a>?</p>
            @include('profile.modals.forgotpassword')
            <button type="submit" class="btn button-color1 text-white confirm-button" style="width: 15%">Confirm</button>
        </form>
    </div>
@endsection