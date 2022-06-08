<?php

session_start();

include('dbconfig.php');


if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  

$sno=$_GET['sno'];

$exe=mysqli_query($con,"select * from student where sno='$sno'");

while($nu=mysqli_fetch_array($exe))
{

$sno=$nu['sno'];
$name=$nu['name'];
$email=$nu['email'];
$grade=$nu['grade'];
}

if(isset($_POST['submit']))
{

$sno1=$_POST['sno'];
$name1=$_POST['name'] ;
$email1=$_POST['email'];
$grade1=$_POST['grad'];



$rest=mysqli_query($con,"update student set name='$name1',email='$email1',grade='$grade1' where sno='$sno1'");

header("Location:view.php");
}
?>

<!DOCTYPE html>
<head>
    <title>update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1 class="in">Update Informations</h1>
</head>
<body bgcolor=lightgreen>
    <form method="POST" action="update.php">
  <table border=5 align=center bgcolor=violet>
  <tr><th>Sno:</th><td><input type="number" name="sno" value="<?php echo $sno ?>"></td></tr>
  <tr><th>Name:</th><td><input type="text" name="name" value="<?php echo $name ?>"></td></tr>
  <tr><th>Email:</th><td><input type="text" name="email" value="<?php echo $email ?>" ></td></tr>
  <tr><th>Grade:</th><td><input type="text" name="grad" value="<?php echo $grade ?>" ></td></tr>
  <tr><th><input type="submit" value="Update" name="submit"></th></tr>
  </table>
    </form>
</body>
</html>
