@extends('layouts.app')
@section('content')   

<div class="row">
    <div class="col">
        <img src="{{ asset('img/logo 1.jpg') }}" class="logo-size img-fluid" alt="Logo Image">
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
<div class="col-6 mt-5">
    <div class="welcome">
        {{-- <h1>Welcome <?php echo htmlspecialchars($users['first_name']); ?>!!</h1> --}}
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <div class="input-group mb-3" style="max-width: 50%;">
                <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 table-responsive">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th class=>ID</th>
                        <th class=>Firstname</th>
                        <th class=>Lastname</th>
                        <th class=>Email</th>
                        <th class=>Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td ><?php echo htmlspecialchars($user['id']); ?></td>
                            <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                            <td><?php echo htmlspecialchars($user['last_name']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td> <?php if ($user['status'] == 'active'): ?>
                                <span class="green-dot"></span>
                            <?php endif; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Pagination -->
            {{-- <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="?page=1"><<</a></li>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $prev_page; ?>"><</a></li>
                    <!-- Dynamically generate page numbers... -->
                    <li class="page-item active"><a class="page-link" href="?page=<?php echo $current_page; ?>"><?php echo $current_page; ?></a></li>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $next_page; ?>">></a></li>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $total_pages; ?>">>></a></li>
                </ul>
            </nav> --}}
        </div>
    </div>
</div>