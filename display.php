<?php
$con= mysqli_connect("localhost","root","","library") or die("Can't connect". mysqli_connect_error());

    $query="select *from book";
    $x=mysqli_query($con,$query);
    if(mysqli_num_rows($x)>0)
    {
        echo "<table border='1'><tr><th>";
        echo "Book Id</th><th>Book Name</th><th>Due Date</th></tr>";
        while($row=mysqli_fetch_array($x))
        {
            echo "<tr>";
            echo "<td>",$row['Bookid'],"</td><td>",$row['Bookname'],"</td><td>",$row['Duedate'],"</td></tr>";
        }
    }
    
    mysqli_close($con);    
?>