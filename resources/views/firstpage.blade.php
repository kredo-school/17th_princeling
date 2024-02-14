   @extends('layouts.app')
   @section('content')   
   
   <div class="body-first">
    <nav class="navbar navbar-expand-sm fixed-top bg-color1">
      <a href="{{ route('firstpage') }}" ><img src="{{ asset('image/logo_1.jpg') }}" class="img-size-second" alt="Login Image" ></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">SignUp</a>
        </li>
      </ul>
    </nav>
    <div class="opa-first">
    <div class="banner-text">
      <h1 class="intro">Your Personal <br>Calorie Tracker</h1>
      <a href="{{ route('register') }}" class="button">Sign Up</a>
      <a href="{{ route('about-us') }}" class="button">Learn More</a>
    </div>
   </div>
   
  @endsection
