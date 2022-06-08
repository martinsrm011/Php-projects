
<?php  

session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  

?>  

 
<!DOCTYPE html>
<head>
    <title>insert</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1 class="in">Please Enter The Details</h1>
<body bgcolor="green">
  <form method="POST" action="inserting.php">
  <table border=5 bgcolor=cyan align=center>
  <tr><th>Sno:</th><td><input type="number" name="sno" placeholder="Enter Serialno"></td></tr>
  <tr><th>Name:</th><td><input type="text" name="name" placeholder="Enter Name"></td></tr>
  <tr><th>Email:</th><td><input type="email" name="email" placeholder="Enter Email"></td></tr>
  <tr><th>Grade:</th><td><input type="text" name="grad" placeholder="Enter Grade"></td></tr>
  <tr><td><input type="submit" value="insert" name="submit"></td>
  <td><a href="logout.php">logout</a></td>
  </table>
  </form>
</body>
</html>
