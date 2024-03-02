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
<div class="bg-color2">
    <div class="container-fluid vh-100 mt-n5 position-relative">
        <div class="row h-100 ">
            <!-- Left Section for Picture -->
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center" style="min-height: 100%;">
                    <div style="width: 250px; height: 250px; background-color: white; border: 1px solid #ccc;">
                        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                            <div style="font-size: 24px;">Picture Here!</div>
                        </div>
                    </div>
                </div>

            </div>





    
            <!-- Middle Section for Input Elements -->
            <div class="col-4">
                <div class="d-flex flex-column align-items-start justify-content-center mt-6">
                    <h4>Which Date?</h4>
                    <input type="date" name="date" id="date" class="form-control mb-5">
                    
                    <div class="form-group mb-5">
                        <label for="meal"><h4>When?</h4></label>
                        <select class="form-control" id="meal">
                            <option>Breakfast</option>
                            <option>Blunch</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                    </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn button-color1 mb-5 button-color1:hover text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            What did you eat?
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-body">
                                        <form method="GET">
                                            <div class="modal-body">
                                                <table class="table table-striped wid">
                                                    <thead>
                                                        
                                                        <tr>
                                                            <th>What you ate</th>
                                                            <th>How much you ate</th>
                                                               
                                                        </tr>
                                                    </thead>
                                                    <tbody id="container">
                                                        {{-- <tr class="row"> --}}
                                                             <td class="input-container">
                                                                
                                                                <input type="text" class="inputField">
                                                              </td>
                                                              <td class="input-container">
                                                                <input type="text" class="inputField">
                                                              </td>
                                                        {{-- </tr> --}}
                                                         
                                                      </tbody>
                                                </table>
                                                <button type="button" name="addHeaders" class="btn-centered" id="addHeaders"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                            <script>
                                                document.getElementById("addHeaders").addEventListener("click", function () {
                                                    var container = document.getElementById("container");
                                            
                                                    var newField = document.createElement("tr");
                                                    newField.classList.add("field");
                                            
                                                    var input1 = document.createElement("td");
                                                    var input2 = document.createElement("td");
                                            
                                                    input1.classList.add("input-container");
                                                    input2.classList.add("input-container");
                                            
                                                    var inputField1 = document.createElement("input");
                                                    var inputField2 = document.createElement("input");
                                            
                                                    inputField1.type = "text";
                                                    inputField1.classList.add("inputField");
                                            
                                                    inputField2.type = "text";
                                                    inputField2.classList.add("inputField");
                                            
                                                    input1.appendChild(inputField1);
                                                    input2.appendChild(inputField2);
                                            
                                                    newField.appendChild(input1);
                                                    newField.appendChild(input2);
                                            
                                                    container.appendChild(newField);
                                                });
                                                
                                            </script>
                                        </form>
                                
                                <div class="modal-footer d-flex justify-content-center align-items-center text-center">
                                <h4>If you can't find...</h4>
                                <button type="button" class="btn button-color1 button-color1:hover">Add new</button>
                                </div>
                            </div>
                            </div>
                        </div>   </div> 
                    <h4>Want to write more?</h4>
                    <input type="search" name="search" id="search" class="form-control" style="height: 200px;">
                </div>
            </div>
    
            <!-- Right Section (Empty) -->
            
            <div class="col-4 d-flex flex-column justify-content-center align-items-center" style="min-height: 100%;">
                <div style="height: 2rem;"></div>
                <div style="width: 250px; height: 250px; background-color: white; border: 1px solid #ccc;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                        <div style="font-size: 64px; font-weight: bold;">100</div>
                        <div style="font-size: 24px;">kcal</div>
                    </div>
                </div>
                <a href="#" class="btn button-color1 button-color1:hover text-white btn-lg" style="width: 250px; position: relative; top: 10rem;">Upload!</a> 
            </div>
            
            
            
            


    </div>
</div>
</div>

@endsection




   