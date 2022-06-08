<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['submit']))
{
    $_SESSION['username']='martin';
    if($username=='martin'&&$password=='123')
    {
        header("Location:insert.php");
    }
    else
    {
      
     echo   "<h1 style=color:red>Invalid username or password</h1>";  

    }
}


?>