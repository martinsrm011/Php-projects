<?php
 
 session_start();

include('dbconfig.php');


if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  



if(isset($_POST['submit']))
{
    $sno=$_POST['sno'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $grade=$_POST['grad'];


       if(empty($sno)&&empty($name)&&empty($email)&&empty($grade))
        {
        echo "<p style=color:red>Serial No Field Is Empty</p>";
        echo "<p style=color:red>Name Field Is Empty</p>";
        echo "<p style=color:red>Email Field Is Empty</p>";
        echo "<p style=color:red>Grade Field Is Empty</p>";
        }
       else if(empty($sno))
        {
            echo "<p style=color:red>Serial No Field Is Empty</p>";
        }
        else if(empty($name))
        {
            echo "<p style=color:red>Name Field Is Empty</p>";
        }
        else if(empty($email))
        {
            echo "<p style=color:red>Email Field Is Empty</p>";
        }
       else  if(empty($grade))
        {
            echo "<p style=color:red>Grade Field Is Empty</p>";
        }
        else
        {

          $qry="insert into student(sno,name,email,grade)values('$sno','$name','$email','$grade')";
          $result=mysqli_query($con,$qry);

          header('Location:view.php');
     
        }
   
   
    }







?>