<?php
    include('scripts.php');
	include('database.php');
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
    <title>Document</title>
</head>
<body>
        <header class="navbar py-2">
            <h4 class="text-white ps-5 col-4"><span class="text-dark">You</span>-Book</h4>
            <ul class="text-white d-flex justify-content-evenly list-unstyled col-8">
                <li class=""><a href="index.php" class="text-decoration-none text-dark">Home</a></li>
                <li class="">Books</li>
                <li class="">About us</li>
                <li class="">Contact</li>
            </ul>
        </header>
        <!-- form -->
       <div class="content d-flex justify-content-center mt-3">
        <div class="left bg-white px-5 rounded">
            <h3 class="text-center mt-3">Sign<span class="text-info"> Up</span></h3>
            <form  id="singup" action="scripts.php" method="POST" class="mt-5">
                <label class="">Name</label><br> 
                <input id="" class="form-control mt-1" size="30" type="text" name="name"><br>		<!--form-control : let the input bar take 100 of the width-->
                <label>Email</label><br> 
                <input id="" class="form-control mt-1" type="email" name="email"><br>		<!--form-control : let the input bar take 100 of the width-->
                <label>Password</label><br> 
                <input id="" class="form-control mt-1" type="password" name="password"><br>		<!--form-control : let the input bar take 100 of the width-->
                <input type="submit" name="signUp" class="form-control text-white mt-4 btnColor" value="Sign up">
                <hr>
                <div class="d-flex justify-content-evenly mt-3">
                    <i class="fa fa-facebook text-info border border-info p-2"></i>
                    <i class="fa fa-google text-info border border-info p-2"></i>
                    <i class="fa fa-twitter text-info border border-info p-2"></i>
                </div><br>
                <p>I have a account?<a href="login.php"> Login</a></p><br>
             </form>
        </div>
       </div>
    
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>