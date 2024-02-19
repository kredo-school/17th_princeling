@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    {{-- Create User's Profile --}}
    <div class="container">
        <div class="row mt-2">
            <div class="col-3">
                user's image
            </div>
            <div class="col-6">
                <form action="#" method="POST">
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
                    <hr class="hr1">
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
                    <div class="row mt-3">
                        <div class="col-6">
                            <button type="submit" class="btn button-color1 text-white w-100">Edit Profile</button>
                        </div>
                        <div class="col-6">
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn button-color2 text-white w-100">Delete Account</button>
                            </form>
                        </div>
                    </div>                     
                </form>            
            </div>
        
            <div class="col-3">
                <div class="container">
                    <canvas id="timelineChart" height="200" width="200">               
                    </canvas>  
                    <div class="mt-3">
                        <button class="btn btn-primary" onclick="updateChart('1M')">1 Month</button>
                        <button class="btn btn-primary" onclick="updateChart('6M')">6 Months</button>
                        <button class="btn btn-primary" onclick="updateChart('1Y')">1 Year</button>
                        <button class="btn btn-primary" onclick="updateChart('5Y')">5 Years</button>
                        <button class="btn btn-primary" onclick="updateChart('now')">Now</button>
                    </div> 
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var ctx = document.getElementById('timelineChart').getContext('2d');
                    var initialData = {
                        labels: <?= json_encode($timelineData['labels']) ?>,
                        data: <?= json_encode($timelineData['data']) ?>,
                    };
                    function updateChartWithData(labels, data) {
                        chart.data.labels = labels;
                        chart.data.datasets[0].data = data;
                        chart.update();
                    }
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: initialData.labels,
                            datasets: [{
                                label: 'Calorie Intake',
                                data: initialData.data,
                                backgroundColor: function (context) {
                                    var value = context.dataset.data[context.dataIndex];
                                    return value >= 2000 ? 'orange' : 'blue';
                                },
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1,
                                fill: false
                            }]
                        },
                        options: {
                            scales: {
                                x: {
                                    type: 'linear',
                                    position: 'bottom',
                                    title: {
                                        display: true,
                                        text: 'Dates'
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Calories'
                                    },
                                    ticks: {
                                        stepSize: 1000,
                                        callback: function (value, index, values) {
                                            return value.toLocaleString();
                                        }
                                    }
                                },
                                y1: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Calories'
                                    },
                                    position: 'right',
                                    ticks: {
                                        stepSize: 1000,
                                        callback: function (value, index, values) {
                                            return value.toLocaleString();
                                        }
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top',
                                }
                            }
                        }
                    });
                    var lineAt2000 = [{
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y1',
                        value: 2000,
                        borderColor: 'red',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        label: {
                            content: 'Calorie Goal',
                            enabled: true,
                            position: 'left'
                        }
                    }];
                    chart.options.annotation = {
                        annotations: lineAt2000
                    };
                    chart.update();
                    function updateChart(timeline) {
                        fetch(`/get-chart-data/${timeline}`)
                            .then(response => response.json())
                            .then(data => {
                                updateChartWithData(data.labels, data.data);
                            })
                            .catch(error => {
                                console.error('Error fetching chart data:', error);
                            });
                    }
                    document.getElementById('1M').addEventListener('click', function () {
                        updateChart('1M');
                    });
                    document.getElementById('6M').addEventListener('click', function () {
                        updateChart('6M');
                    });
                    document.getElementById('1Y').addEventListener('click', function () {
                        updateChart('1Y');
                    });
                    document.getElementById('5Y').addEventListener('click', function () {
                        updateChart('5Y');
                    });
                    document.getElementById('now').addEventListener('click', function () {
                        updateChart('now');
                    });
                    function updateChart(timeline) {
                        fetch(`/get-chart-data/${timeline}`)
                            .then(response => response.json())
                            .then(data => {
                                updateChartWithData(data.labels, data.data);
                            })
                            .catch(error => {
                                console.error('Error fetching chart data:', error);
                            });
                    }
                    function getChartDataForTimeline(timeline) {
                        var labels = [];
                        var data = [];
                        var currentDate = new Date();
                        for (var i = 0; i < 30; i++) {
                            labels.push(formatDate(currentDate));
                            data.push(Math.floor(Math.random() * 4000) + 1000);
                            currentDate.setDate(currentDate.getDate() - 1);
                        }
                        labels.reverse();
                        data.reverse();
                        return {
                            labels: labels,
                            data: data,
                        };
                    }
                    function formatDate(date) {
                        var year = date.getFullYear();
                        var month = (date.getMonth() + 1).toString().padStart(2, '0');
                        var day = date.getDate().toString().padStart(2, '0');
                        return year + month + day;
                    }
                });
            </script>
        </div>
    </div>
@endsection