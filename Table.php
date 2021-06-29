<?php
$con= mysqli_connect("localhost","root","","library") or die("Can't connect". mysqli_connect_error());
$query="create table book(Bookid int not null auto_increment,
        Bookname varchar(25) not null,
        Author varchar(30) not null,
        Publications varchar(30) not null,
        Issuedate varchar(10) not null,
        Duedate varchar(10) not null, 
        primary key(Bookid))";
$q=mysqli_query($con,$query);
if($q>0)
{
    echo "Table created";
}
else
{
    echo "Table can't created";    
}
mysqli_close($con)
?>


