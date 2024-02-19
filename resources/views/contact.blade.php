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
 <a href="{{ route('register') }}" class="text-decoration-none">Register</a>

          <div class="banner" id="banner">
            <div class="contact-text">
              <h1 class="Contactmsg">Feel free to <br>contact us!</h1>
              <h1 class="ContactDetail">Email: <br>0123456789@gamil.com</h1>
          
              <h1 class="ContactDetail">Phone Number: <br>000-0000-0000</h1>
            </div>
          </div>
</div>

@endsection

