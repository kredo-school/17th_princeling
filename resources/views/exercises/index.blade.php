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

        <h2 class="fw-bold ms-2 mt-2 mb-3">
            Exercise Diary
            <span class="h5 ms-3">Let's burn calories!!!</span>
        </h2>

        {{-- Create My Home --}}
        <div class="vertical-menu-container">
            <div class="vertical-menu">
              <a href="#" class="active">2024.01</a>
              <div class="submenu">
                <a href="#">2023.12</a>
                <a href="#">2023.11</a>
              </div>
              <a href="#">11.19 - 11.25</a>
              <div class="submenu">
                <a href="#">11.25</a>
                <a href="#">11.24</a>
              </div>
              <a href="#">11.12 - 11.18</a>
              <div class="submenu">
                <a href="#">11.18</a>
                <a href="#">11.17</a>
              </div>
            </div>
          
            <div class="rightonopage ms-3 bg-color2" style="width: 1000px;">
                <div class="row p-3">
                    <div class="col-4 bg-white">
                        put bar chart here
                    </div>

                    <div class="col-4 p-2">
                        put pie chart here
                    </div>
                    <div class="col-4">
                        <div class="row bg-white">
                            <div class="col">
                                <ul class="menu">
                                    <li class="item">
                                      <span id="square1" class="name"></span>
                                      <span><hr class="hr2"></span>
                                      <span class="price">steps</span>
                                    </li>
                                    <li class="item">
                                      <span id="square2" class="name"></span>
                                      <span class="price">cardiovascular</span>
                                    </li>
                                    <li class="item">
                                      <span id="square3" class="name"></span>
                                      <span class="price">strength training</span>
                                    </li>
                                    <li class="item">
                                      <span id="square4" class="name"></span>
                                      <span class="price">others</span>
                                    </li>
                                  </ul>
                            </div>    
                        </div>
                        <div class="row">
                            <img src="{{ asset('img/exercise.jpeg') }}" class="exercise-img" alt="Logo Image">
                        </div>
                    </div>
                </div>

                <div class="row p-3 ms-5">
                    <div class="col-3 bg-white p-2" style="height: 150px">
                        <h6 class="fw-bold">Cardiovascular</h6>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 bg-white p-2">
                            <h6 class="fw-bold">Strength Training</h6>
                    </div>
                        <div class="col-1"></div>
                        <div class="col-3 bg-white p-2">
                            <h6 class="fw-bold">Others</h6>
                        </div>
                        <div class="col-1"></div> 
                </div>
            </div>

            <div class="vertical-menu float-end">
                <h4 class="fw-bold p-3">Calorie</h4>
                <p class="ms-5 text-start">Food <span class="ms-5 text-end">Exercise</span></p>
                <p class="ms-5 text-start">1800 <span class="ms-5 text-end">800</span></p>
                <br>
                <div class="progress ms-4">
                    <div class="outer">
                        <div class="inner">
                            <div id="cals">
                                <h3 class="text-dark">1000/2000</h3>
                                <h4 class="text-muted text-center">kcal</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
              var menuItems = document.querySelectorAll('.vertical-menu a');
            
              menuItems.forEach(function (menuItem) {
                menuItem.addEventListener('click', function () {
                  menuItems.forEach(function (item) {
                    if (item !== menuItem) {
                      item.classList.remove('active');
                    }
                  });
            
                  menuItem.classList.toggle('active');
                });
              });
            });
        </script>
@endsection