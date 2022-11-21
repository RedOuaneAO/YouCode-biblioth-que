<?php
    session_start();
    if(isset($_SESSION["id"])){
        header('location: dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <title>You-Book</title>
</head>
<body>
        <header class="navbar py-2">
            <!-- <img class="col-4 w-2" src="COFFE-TIME.png" alt="not found" > -->
            <h4 class="text-white ps-5 col-4"><span class="text-dark">You</span>-Book</h4>
            <ul class="text-white d-flex justify-content-evenly list-unstyled col-8">
                <li class=""><a class="text-decoration-none text-dark" href="../../index.php">Home</a></li>
                <li class="">Books</li>
                <li class="">About us</li>
                <li class="">Contact</li>
            </ul>
        </header>
        <!-- modal -->
       <div class="content d-flex justify-content-center mt-3">
        <div class="left bg-white px-5 rounded">
            <h3 class="text-center mt-3 text-dark">Log<span class="text-info">in</span></h3>
            <form  id="login" action="scripts.php" method="POST" data-parsley-validate>
                <label >Email</label><br> 
                <input id="titleId" class="form-control mt-1" type="text" name="email" size="30" data-parsley-type="email" required><br>		<!--form-control : let the input bar take 100 of the width-->
                <label >Password</label><br> 
                <input id="titleId" class="form-control mt-1" type="password" name="password" data-parsley-length="[6, 10]" required><br>		<!--form-control : let the input bar take 100 of the width-->
                <input type="checkbox" class="check-box" ><span class="ms-2">Remember Password</span><br>
                <input type="submit" name="login" class="form-control text-white mt-4 btnColor" value="Login">
                <hr>
                <div class="d-flex justify-content-evenly mt-3">
                    <i class="fa fa-facebook text-info border border-info p-2"></i>
                    <i class="fa fa-google text-info border border-info p-2"></i>
                    <i class="fa fa-twitter text-info border border-info p-2"></i>
                </div><br>
                <p>Not a member?<a href="signup.php"> Sing up</a></p><br>
             </form>
        </div>
       </div>
    
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/parsley.js"></script>

</body>
</html>