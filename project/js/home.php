<?php
   include_once("config.php");

   $sql="SELECT * FROM movies";
   $selectedMovies=$conn->prepare("SELECT * FROM movies");
   $selectedMovies->execute();

   $movie_data=$selectedMovies->fetchAll();



?>


<html>
    <head>
        <title>Dashboard</title>
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/main.css" rel="stylesheet">
    </head>

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome to Dashboard</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="false" aria-label="Toggle Navigation"
            ><span class="navbar-toggler-icon4"></span></button>
            <input type="text" class="form-control form-control-dark w-50" placeholder="Search"
            aria-label="Search">
            
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a href="logout.php" class="nav-link px-3">Logout</a>
                </div>
            </div>
        </header>
