<?php
include('scripts.php');
include('database.php');
?>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashStyle.css">
    <title>Document</title>
</head>
<body>
        <header class="navbar py-2">
            <!-- <img class="col-4 w-2" src="COFFE-TIME.png" alt="not found" > -->
            <h4 class="ps-5 col-4"><span class="text-info">You</span>-Book</h4>
            <ul class="d-flex justify-content-evenly list-unstyled col-8">
                <li class="text-dark"><a class="text-decoration-none text-dark fw-bold" href="../../index.php">Home</a></li>
                <li class="fw-bold">Books</li>
                <li class="fw-bold">About us</li>
                <li class="fw-bold">Contact</li>
            </ul>
        </header>
        <div class="">
            <main class="">
                <div class="d-flex justify-content-between">
                    <h1 class="mt-2">Welcome <span class="text-info">
                    <?php 
                //    if(isset($_SESSION["name"]))
                //    echo $_SESSION["name"] ;?>!</span></h1>
                    <div class="mt-3">
                        <input type="text"><button class="bg-info border-0 p-2"><i class="fa fa-search"></i></button>
                    </div>
                </div><hr>
               
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>