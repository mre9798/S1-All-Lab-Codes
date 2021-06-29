<?php
$con = new mysqli("localhost", "root","") or die("Can't connect".mysqli.error());
$query="create database library";
$x=mysqli_query($con,$query);
    if($x>0)
        echo"Database created";
    else
    {
        echo "Database can't created";
    }
mysqli_close($con);
?>

