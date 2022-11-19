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
                    <li><button name="logout" class="border-0 bg-dark text-info"><i class="fa fa-sign-out me-2"></i>log out</button></li>
                </ul>
            </aside>
            <main class="col-10">
                <div class="d-flex justify-content-between">
                    <h1 class="mt-2">Welcome <span class="text-info">
                    <?php 
                      $_SESSION["name"]=$_POST['name'];

                   if(isset($_SESSION["name"]))
                   echo $_SESSION["name"] ;
                   ?>!</span></h1>
                    <div class="mt-3">
                        <input type="text"><button class="bg-info border-0 p-2"><i class="fa fa-search"></i></button>
                    </div>
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
                            <h6 class="text-white">Sell</h6>
                            <p>176</p>
                        </div>
                    </div>
                    <button class="bg-info border-0 rounded-pill px-3"  data-bs-toggle="modal" data-bs-target="#addModal">ADD BOOK</button>
                </div>
                
                <div class="d-flex justify-content-center mt-5 tb rounded">
                    <table class="table" border="1px" >
                        <thead class="">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">AUTHOR</th>
                            <th scope="col">PRICE</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            showBooks();
                            ?>
                        </tbody>
                    </table>
                </div>    
            </main>
        </div>

        <!-- sidebar -->
    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="sidebarId" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div>
        <img src="../images/user_icon.png" width="100px" alt="not found" class="rounded-circle opacity-75 m-5"><br>
        <form>
                    <table class="table" class="border-0">
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Name</label></th>
                                <th><input type="text"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Email</label></th>
                                <th><input type="email"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Password</label></th>
                                <th><input type="password"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Phone Number</label></th>
                                <th><input type="number"></th>
                            </tr>
                            <tr class="border-0">
                                <th class="text-end"><button>Enregistrer</button><th>
                            </tr>
                    </table>
        </form>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="scripts.php" method="POST">
            <label for="">Title</label><br>
            <input type="text" name="title" class="form-control" id="titleId"><br>
            <label for="">Author</label><br>
            <input type="text" name="author" class="form-control" id="authorId"><br>
            <label for="">Price</label><br>
            <input type="number" name="price" class="form-control" id="priceId"><br>
            <!-- <label for="">Cover</label><br>
            <input type="file" class="form-control"> -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="addBook" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
       
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>