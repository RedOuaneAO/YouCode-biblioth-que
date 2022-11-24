<?php
    include('scripts.php');
    include('database.php');
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }
    $id = $_SESSION['id'];
    $request = "SELECT `name`, `email`, `password` FROM `admins` WHERE id=$id";
    $result=mysqli_query($conn,$request);
    $owner=mysqli_fetch_assoc($result);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <title>You-Book</title>
</head>
<body>
        <header class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <h4 class="navbar-brand fw-bold mx-4"><span class="text-info">You</span>-Book</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#linksId"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="linksId">
                    <div class="navbar-nav">
                        <a href="../../index.php" class="nav-link mx-5 text-dark fw-bold">Home</a>
                        <a href="#" class="nav-link mx-5 text-dark fw-bold">Books</a>
                        <a href="#" class="nav-link mx-5 text-dark fw-bold">About</a>
                        <a href="#" class="nav-link mx-5 text-dark fw-bold">Contact</a>
                    </div>
                </div>
            </div>
        </header>


<div class="container-fluid">
    <div class="row">
        <aside class="bg-dark col-1 col-sm-2">
            <div class=" w-100">
                <img src="../images/user_icon.png" alt="not found" class="rounded-circle opacity-75 w-50 my-5 d-none d-sm-inline">
            </div>
            <ul class="list-unstyled mt-5 mt-sm-0">
                <li class="mb-4"><a class="text-decoration-none text-info" data-bs-toggle="offcanvas" href="#sidebarId" role="button" aria-controls="offcanvasExample"><i class="fa fa-pencil me-2 "></i><span class="d-none d-sm-inline">Profile</span></a></li>
                <li class="mb-4"><a herf="#" class="text-decoration-none text-info"><i class="fa fa-cog me-2"></i><span class="d-none d-sm-inline">setting</span></a></li>
                <li><a name="logout" href="logout.php" class=" text-decoration-none text-info"><i class="fa fa-sign-out me-2"></i><span class="d-none d-sm-inline">logout</span></a></li>
            </ul>
        </aside>
        <main class="col-11 col-sm-10">

            <div class="d-md-flex justify-content-between mt-3 text-center">
                <h1 class="mt-2">Welcome <span class="text-info">
                <?php 
               echo $owner['name'] ;
               ?>!</span></h1>
                <!-- <div class="mt-4">
                    <input type="text" placeholder="Search">
                </div> -->
                <button class="rounded-2 fw-bold border-0 btnColor text-white px-4 my-4"  data-bs-toggle="modal" data-bs-target="#addModal" id="addBookBtn" onclick="addd()">ADD BOOK</button>
            </div><hr>

            <div class="row gap-1 justify-content-evenly">
                <div class="d-flex bg-danger rounded col-md-3 col-6">
                    <div class="px-4 py-2">
                        <h6 class="text-white">Users</h6>
                        <i class="fa fa-users text-info"></i>
                    </div>
                    <p class="fw-bold fs-3 py-2">233</p>
                </div>
                <div class="d-flex bg-warning rounded col-md-3 col-6">
                    <div class="px-4 py-2">
                        <h6 class="text-white">Books</h6>
                        <i class="fa fa-book text-info"></i>
                    </div>
                    <p class="fw-bold fs-3 py-2"><?php bookCounter()?></p>
                </div>
                <div class="d-flex bg-success rounded col-md-3 col-6">
                    <div class="px-4 py-2">
                        <h6 class="text-white">Total Price</h6>
                        <i class="fa fa-shopping-cart text-info"></i>
                    </div>
                    <p class="fw-bold fs-3 py-2"><?php totalPrice()?></p>
                </div>
            </div>
            
            <div class="table-responsive mt-5 tb rounded">
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
                        displayBooks();
                        ?>
                    </tbody>
                </table>
            </div>    
        </main>
    </div>
</div>

<!-----------------------------------------------sidebar---------------------------------->

<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="sidebarId" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Edit<span class="text-info"> Profile</span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div>
            <div class="profilImage">
                <img src="../images/user_icon.png" width="100px" alt="not found" class="rounded-circle opacity-75 m-5"><br>
            </div>
        <form action="scripts.php" method="POST">
                    <table class="table mt-3" class="border-0">
                            <tr class="border-0" hidden>
                                <th><label class="text-info">id</label></th>
                                <th><input type="number" name="idInput" value="<?php echo $_SESSION['id']?>"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Name</label></th>
                                <th><input type="text" name="nameInput" value="<?php echo $owner['name']?>"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Email</label></th>
                                <th><input type="email" name="emailInput" value="<?php echo $owner['email']?>"></th>
                            </tr>
                            <tr class="border-0">
                                <th>  <label for="" class="text-info">Password</label></th>
                                <th><input type="password" name="passwordInput" value="<?php echo $owner['password']?>"></th>
                            </tr>
                            <!-- <tr class="border-0">
                                <th>  <label for="" class="text-info">Phone Number</label></th>
                                <th><input type="number"></th>
                            </tr> -->
                            <tr class="border-0">
                                <th class="text-end"><button name="editProfi" class="px-4 py-2 mt-4 rounded-2 fw-bold border-0 btnColor text-white">Enregistrer</button><th>
                            </tr>
                    </table>
        </form>
        </div>
    </div>

    <!---------------------------------Add books Modal------------------------->

<div class="modal fade" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formId" action="scripts.php" method="POST">
            <!-- for update -->
            <input type="text" name="id" id="bookId" hidden><br>
            <!-- for update -->
            <label for="">Title</label><br>
            <input type="text" name="title" class="form-control" id="titleId" data-parsley-minlength="25" required><br>
            <label for="">Author</label><br>
            <input type="text" name="author" class="form-control" id="authorId" required><br>
            <label for="">Price</label><br>
            <input type="number" name="price" class="form-control" id="priceId" required><br>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="addBook" class="btn btn-primary" id="addBtn">Add</button>
              <button type="submit" name="update" class="btn btn-primary" id="updateId" >Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
       
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/parsley.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>