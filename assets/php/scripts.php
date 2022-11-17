<?php
//INCLUDE DATABASE FILE
include('database.php');
session_start();


if(isset($_POST['signUp']))     signup();
if(isset($_POST['login']))      login();
if(isset($_POST['addBook']))    addBooks();
if(isset($_GET['id']))          delete();



function signup(){

    global $conn;

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $request="INSERT INTO admins VALUES(null,'$Name','$Email','$Password');";
    mysqli_query($conn,$request);
    header('location: login.php');
}

function login(){
    global $conn;
    $_SESSION["name"]=$_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $request="SELECT * FROM admins WHERE email='".$Email."' AND password='".$Password."' " ;
    $result=mysqli_query($conn,$request);
    if(mysqli_num_rows($result)==1){
        header('location: dashboard.php');
    }else{
        echo("you dont have account");
    }

}


function addBooks(){
    global $conn;
    $Title=$_POST['title'];
    $Author=$_POST['author'];
    $Price=$_POST['price'];
    $request="INSERT INTO books VALUE(null,'$Title','$Author','$Price')";
    mysqli_query($conn,$request);
    header('location:dashboard.php');
} 

function showBooks(){
    global $conn;
    $request="SELECT * FROM books ";
    $result=mysqli_query($conn,$request);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        echo'
        <tr>
        <td>'.$row['title'].'</td>
        <td>'.$row['author'].'</td>
        <td>'.$row['price'].'$</td>
        <td class="text-center"><a class="text-decoration-none bg-danger border-0 rounded px-2 py-1" href="dashboard.php?id='.$id.'">DELETE</a><button class="bg-success border-0 rounded px-2 py-1 ms-2">UPDATE</button></td>
        </tr>
        ';
    }
}


function delete(){
    global $conn;
    $id=$_GET['id'];
    $Delete="DELETE FROM books WHERE id=$id";
    mysqli_query($conn,$Delete);
}