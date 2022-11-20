<?php
//INCLUDE DATABASE FILE
include('database.php');
session_start();


if(isset($_POST['signUp']))     signup();
if(isset($_POST['login']))      login();
if(isset($_POST['addBook']))    addBooks();
if(isset($_GET['id']))          delete();


//================================================================================================================================================================================//
//================================================================================= SING UP FUNCTION =============================================================================//
//================================================================================================================================================================================//

function signup(){



//     global $conn;
//     $Name = $_POST['name'];
//     $Email = $_POST['email'];
//     $Password = $_POST['password'];

//     $sql="SELECT * FROM admins";
//     $sen=mysqli_query($conn,$sql);
//     $result=mysqli_fetch_assoc($sen);
//    if($Email=$result['email']){
//     header("location:signup.php");
//    }else{
//        $request="INSERT INTO admins VALUES(null,'$Name','$Email','$Password');";
//        mysqli_query($conn,$request);
    
//     //    header('location: login.php');
//    }


    global $conn;

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $request="INSERT INTO admins VALUES(null,'$Name','$Email','$Password');";
    mysqli_query($conn,$request);
    header('location: login.php');
}
//================================================================================================================================================================================//
//================================================================================= LOGIN FUNCTION ===============================================================================//
//================================================================================================================================================================================//

function login(){
    global $conn;
    
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $request="SELECT * FROM admins WHERE email='$Email' AND password='$Password' " ;
    $result=mysqli_query($conn,$request);
    if(mysqli_num_rows($result)==1){
        $owner=mysqli_fetch_assoc($result);
        $_SESSION["name"]=$owner['name'];
        header('location: dashboard.php');
    }else{
        header('location: login.php');
    }
}

//================================================================================================================================================================================//
//================================================================================= ADD BOOKS FUNCTION ===========================================================================//
//================================================================================================================================================================================//

function addBooks(){
    global $conn;
    $Title=$_POST['title'];
    $Author=$_POST['author'];
    $Price=$_POST['price'];
    $request="INSERT INTO books VALUE(null,'$Title','$Author','$Price')";
    mysqli_query($conn,$request);
    header('location:dashboard.php');
} 

//================================================================================================================================================================================//
//================================================================================= DISPLAY FUNCTION =============================================================================//
//================================================================================================================================================================================//

function displayBooks(){
    global $conn;
    $request="SELECT * FROM books ";
    $result=mysqli_query($conn,$request);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        echo'
        <tr id="'.$id.'">
            <td>'.$row['id'].'</td>
            <td class="book-title">'.$row['title'].'</td>
            <td class="book-author">'.$row['author'].'</td>
            <td class="book-price">'.$row['price'].'</td>
            <td class="text-center">
            <a class="text-decoration-none bg-danger border-0 rounded px-2 py-1 text-dark" href="dashboard.php?id='.$id.'">DELETE</a>
            <button class="bg-success border-0 rounded px-2 py-1 ms-2" data-bs-toggle="modal" data-bs-target="#addModal"  onclick="popUp('.$id.')">UPDATE</button>
            </td>
        </tr>
        ';
    }
}

//================================================================================================================================================================================//
//================================================================================= DELETE FUNCTION =============================================================================//
//================================================================================================================================================================================//

function delete(){
    global $conn;
    $id=$_GET['id'];
    $Delete="DELETE FROM books WHERE id=$id";
    mysqli_query($conn,$Delete);
}

//================================================================================================================================================================================//
//=================================================================================BOOK COUNTER DISPLAY FUNCTION =============================================================================//
//================================================================================================================================================================================//

function bookCounter(){
    global $conn;
    $request="SELECT * FROM books";
    if ($result=mysqli_query($conn,$request)){
    $rowcount=mysqli_num_rows($result);
    echo $rowcount;
    }
}

if(isset($_POST['update'])){
    update();
}
function update(){
    global $conn;
    $id=$_POST['id'];
    $Title=$_POST['title'];
    $Author=$_POST['author'];
    $Price=$_POST['price'];
    $request="UPDATE `books` SET `title`='$Title',`author`='$Author',`price`=$Price WHERE  id = $id";
    mysqli_query($conn,$request);
    header('location:dashboard.php');
}