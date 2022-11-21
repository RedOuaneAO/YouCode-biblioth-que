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
        <div class="row">
            <aside class="bg-dark col-2">
                <img src="../images/user_icon.png" alt="not found" class="rounded-circle opacity-75 m-5">
                <ul class="list-unstyled ms-4">
                    <li class="mb-4"><a class="text-decoration-none text-info" data-bs-toggle="offcanvas" href="#sidebarId" role="button" aria-controls="offcanvasExample"><i class="fa fa-pencil me-2"></i>Profile</a></li>
                    <li class="mb-4"><a herf="#" class="text-decoration-none text-info"><i class="fa fa-cog me-2"></i>setting</a></li>
                    <li><a name="logout" href="logout.php" class=" text-decoration-none text-info"><i class="fa fa-sign-out me-2"></i>log out</a></li>
                </ul>
            </aside>
            <main class="col-10">

                <div class="d-flex justify-content-between mt-3">
                    <h1 class="mt-2">Welcome <span class="text-info">
                    <?php 
                //    echo $owner['name'] ;
                   ?>!</span></h1>
                    <div class="mt-3">
                        <input type="text"><button class="bg-info border-0 p-2"><i class="fa fa-search"></i></button>
                    </div>
                    <a href="dashboard.php" class="text-decoration-none rounded-2 fw-bold border-0 btnColor text-white px-4 m-3">Go Back</a>
                </div><hr>

                <div class="d-flex justify-content-evenly">
                    <div class="d-flex bg-danger rounded stati">
                        <i class="fa fa-users text-info p-4"></i>
                        <div>
                            <h6 class="text-white">Users</h6>
                            <p>233</p>
                        </div>
                    </div>
                    <div class="d-flex bg-warning rounded stati">
                    <i class="fa fa-book text-info p-4"></i>
                        <div>
                            <h6 class="text-white">Books</h6>
                            <p><?php bookCounter()?></p>
                        </div>
                    </div>
                    <div class="d-flex bg-success rounded stati">
                    <i class="fa fa-shopping-cart text-info p-4"></i>
                        <div>
                            <h6 class="text-white">Sales</h6>
                            <p>176</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly mt-5">
                    <!-- <div class="card text-center" style="width: 18rem;">
                        <img src="../images/img1.jpg" height="100%" class="card-img-top" alt="Not Found" style="background-size:cover;">
                        <div class="card-body">
                            <h5 class="card-title">book title</h5>
                            <p class="card-text">Author</p>
                            <p class="card-text">Price</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 18rem;">
                        <img src="../images/img1.jpg" width="50" class="card-img-top" alt="..." style="background-size:cover;">
                        <div class="card-body">
                            <h5 class="card-title">book title</h5>
                            <p class="card-text">Author</p>
                            <p class="card-text">Price</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div> -->
                    <div class="card" style="width:15%">
                        <img src="../images/img1.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h5 class="text-info text-center"><b>A MILLION TO ONE</b></h5> 
                            <p class="text-secondary">John Doe</p> 
                            <p class="text-success">25$</p> 
                        </div>
                    </div>
                    <div class="card" style="width:15%">
                        <img src="../images/img1.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h5 class="text-info text-center"><b>A MILLION TO ONE</b></h5> 
                            <p class="text-secondary">John Doe</p> 
                            <p class="text-success">25$</p> 
                        </div>
                    </div>
                    <div class="card" style="width:15%">
                        <img src="../images/img1.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h5 class="text-info text-center"><b>A MILLION TO ONE</b></h5> 
                            <p class="text-secondary">John Doe</p> 
                            <p class="text-success">25$</p> 
                        </div>
                    </div>
                   
                </div>
                
               
               
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>