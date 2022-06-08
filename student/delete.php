<?php

include("dbconfig.php");

$sno=$_GET['sno'];

$res=mysqli_query($con,"delete from student where sno='$sno'");

header("Location:view.php");

?>