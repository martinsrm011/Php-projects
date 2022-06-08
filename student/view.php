<?php
session_start();  
  
  if(!$_SESSION['username'])  
  {  
    
      header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
  }  
  ?>
<!DOCTYPE html>
<head>
  <title>view</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <h1 class="in">Details</h1>
</head>
<body class="b">
<table border=5 bgcolor=cyan align=center>
<tr>
    <th>Sno</th>
    <th>Name</th>
    <th>Email</th>
    <th>Grade</th>
    <th>Action</th>
</tr>

<?php
       $sno=1;
 include("dbconfig.php");
 $res=mysqli_query($con,"select * from student");
 while($nu=mysqli_fetch_array($res))
  {
    $ab=$nu['sno'];

    echo "<tr>";
    echo "<td>".$sno."</td>";
    echo "<td>".$nu['name']."</td>";
    echo "<td>".$nu['email']."</td>";
    echo "<td>".$nu['grade']."</td>";
    echo "<td><a href=\"update.php?sno=$nu[sno]\">Edit</a>|<a href=\"delete.php?sno=$nu[sno]\">Delete</a></td>";
    echo "</tr>";
       $sno++;
  }
?>
</table>
</body>
</html>