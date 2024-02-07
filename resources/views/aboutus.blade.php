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
 <div class="opa-first"></div>
 <div class="aboutus-text">
  <h1 class="about1">What is <br>Princelling Project?</h1>
  <h1 class="about2">Empowering Your Health, <br>One Calorie at a Time</h1>
  <h1 class="about3">At the heart of the Princeling Project lies a simple yet profound belief: everyone deserves a healthy, vibrant life. Our journey began with a vision to transform the way people approach their daily nutrition. We understand that health is not just a goal; it's a way of living. That's why the Princeling Project is more than just a calorie tracker—it's your personal companion on the path to wellness.</h1>
  <h1 class="about2">Together, Make Health a Habit</h1>
  <h1 class="about3">We invite you to embark on this journey with us. Track, learn, and grow as you embrace a healthier lifestyle. With the Princeling Project, every calorie counts towards a happier, healthier you.</h1>
</div>
</div>

@endsection