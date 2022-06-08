<?php

include('logic.php');

if(isset($_GET['edit']))
{
    $no=$_GET['edit'];
    $state=true;
    $exec=mysqli_query($con,"select * from student where sno='$no'");
    $data=mysqli_fetch_array($exec);
    $no=$data['sno'];
    $na=$data['name'];
    $em=$data['email'];
    $grd=$data['grade'];
}

?>

<html>
<head>
    <title>index</title>
</head>
<body>
<table border=5 align=center>
    <thead>
        <tr>
            <th>SerialNo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Grade</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($results))
        {  ?>
            <tr>
            <td><?php echo $row['sno']; ?> </td>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['grade'];?></td>
            <td><a href="index.php?edit=<?php echo $row['sno'] ?>">Edit</td>
            <td><a href="logic.php?del=<?php echo $row['sno'] ?>">Delete</td>
    </tr>
       <?php }?>
        
    </tbody>
</table>
<form method="post" action="logic.php">
    <table border=5 align=center>
    <tr><th>Serialno:</th><td><input type="number" name="sno" value="<?php echo $no; ?>"></td></tr>
    <tr><th>Name:</th><td><input type="text" name="name" value="<?php echo $na; ?>" ></td></tr>
    <tr><th>Email:</th><td><input type="text" name="email" value="<?php echo $em; ?>" ></td></tr>
    <tr><th>Grade:</th><td><input type="text" name="grade" value="<?php echo $grd; ?>"></td></tr>
    <?php if($state==false): ?>
    <tr><td><input type="submit" value="save" name="submit"></td>
    <?php else: ?>
    <td><input type="submit" value="update" name="update"></td></tr>   
    <?php endif ?>
    </form>
    </table>
</body>