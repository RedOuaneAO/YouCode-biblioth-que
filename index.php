<?php
    include ("assets/php/database.php");
    session_start();
    if(isset($_SESSION["id"])){
        header('location: assets/php/dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
        <header class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <h4 class="navbar-brand fw-bold mx-4 text-white"><span class="text-dark">You</span>-Book</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#linksId"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="linksId">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-link mx-5 text-dark fw-bold">Home</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">Books</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">About</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">Contact</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="mt-5">
            <div class="container-fluid">
                <h1 class="text-center text-info">Welcome</h1>
                <p class="text-center text-info mt-3">dolor sit amet consectetur adipisicing elit.</p>
                <div class="text-center mt-5">
                    <a class="rounded px-4 py-2 border-0 text-white btnColor text-decoration-none" href="assets/php/login.php">Get started</a>
                </div>
            </div>
        </section>
       
    
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>