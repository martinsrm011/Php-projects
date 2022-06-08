<?php
include('connection.php');
$state=false;
$no="";
$na="";
$em="";
$grd="";
if(isset($_POST['submit']))
{
    $sno=$_POST['sno'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $grade=$_POST['grade'];
     
    $query="insert into student(sno,name,email,grade)values('$sno','$name','$email','$grade')";
    mysqli_query($con,$query);
    header('Location:index.php');
}
    if(isset($_POST['update']))
    {
        $no=$_POST['sno'];
        $na=$_POST['name'];
        $em=$_POST['email'];
        $grd=$_POST['grade'];

        $pros=mysqli_query($con,"update student set name='$na',email='$em',grade='$grd' where sno='$no'");

        header("Location:index.php");
    }

    if(isset($_GET['del']))
    {
        $no=$_GET['del'];
        $del=mysqli_query($con,"delete from student where sno='$no'");
        header("Location:index.php");
        
    }

   
    $results=mysqli_query($con,"select * from student");
?>