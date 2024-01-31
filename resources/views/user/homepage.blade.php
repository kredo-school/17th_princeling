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
                    <div class="col-4">
                        put image here
                    </div>
                    <div class="col-3 bg-white p-2">
                        <h6>2024.01.01</h6>
                        <h6 class="fw-bold">Breakfast</h6>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 bg-white p-3">
                        <h4 class="fw-bold text-center">200</h4>
                        <h6 class="text-muted text-center">kcal</h6>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        put image here
                    </div>
                    <div class="col-3 bg-white p-2">
                        <h6>2024.01.01</h6>
                        <h6 class="fw-bold">Lunch</h6>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 bg-white p-3">
                        <h4 class="fw-bold text-center">500</h4>
                        <h6 class="text-muted text-center">kcal</h6>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        put image here
                    </div>
                    <div class="col-3 bg-white p-2">
                        <h6>2024.01.01</h6>
                        <h6 class="fw-bold">Dinner</h6>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 bg-white p-3">
                        <h4 class="fw-bold text-center">700</h4>
                        <h6 class="text-muted text-center">kcal</h6>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        put image here
                    </div>
                    <div class="col-3 bg-white p-2">
                        <h6>2024.01.01</h6>
                        <h6 class="fw-bold">Snacks</h6>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 bg-white p-3">
                        <h4 class="fw-bold text-center">400</h4>
                        <h6 class="text-muted text-center">kcal</h6>
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