@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <h2>put image here</h2>
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
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    <button type="submit" class="btn button-color1 text-white">Sign up</button>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
