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
        <header class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <h4 class="navbar-brand fw-bold mx-4 text-white"><span class="text-dark">You</span>-Book</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#linksId"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="linksId">
                    <div class="navbar-nav">
                        <a href="../../index.php" class="nav-link mx-5 text-dark fw-bold">Home</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">Books</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">About</a>
                        <a href="#" class="nav-link mx-5 text-white fw-bold">Contact</a>
                    </div>
                </div>
            </div>
        </header>

        <!------------------------------------------ form -------------------------------------->

       <div class="content d-flex justify-content-center mt-3">
        <div class="left bg-white px-5 rounded">
            <h3 class="text-center mt-3 text-black">Sign<span class="text-info"> Up</span></h3>
            <form  id="singup" action="scripts.php" method="POST" class="mt-5" data-parsley-validate>
            <?php if (isset($_SESSION['already'])): ?> 						<!--the message of wrong data -->
						<div class="alert alert-danger alert-dismissible fade show">
						<strong>Ooups!</strong>
						<?php 
						echo $_SESSION['already']; 
						unset($_SESSION['already']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
			<?php endif ?>
                <label class="">Name</label><br> 
                <input id="" class="form-control mt-1" size="40" type="text" name="name"><br>		<!--form-control : let the input bar take 100 of the width-->
                <label>Email</label><br> 
                <input id="" class="form-control mt-1" type="email" name="email" data-parsley-type="email" required><br>		<!--form-control : let the input bar take 100 of the width-->
                <label>Password</label><br> 
                <input id="" class="form-control mt-1" type="password" name="password" data-parsley-minlength="6" required><br>		<!--form-control : let the input bar take 100 of the width-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/parsley.js"></script>
</body>
</html>