<html>
<head>
    <h2><center>Library management system </center></h2>
    <style>
        .stl
        {
            background-color:rgb(150,238,150);
            border:1px black;
            width:30%;
            padding:10px;
        }
    </style>
    <script>
        function vali()
		{
		    name=document.getElementById("bn").value;
            if(name=="")
            {
                window.alert("Enter the Name ");
                document.getElementById("bn").focus();
                return false;
            }
        }
    </script>

</head>
<body>
    <center>
    <div class="stl">
    <form action="" method="POST" onSubmit="return vali()">
        Book Name : <br> <input type="text" name="bname" id="bn"><br>
        Author : <br> <input type="text" name="author"><br>
        Publications : <br> <input type="text" name="publication"> <br>
        Issue Date : <br> <input type="text" name="issue"> <br>
        Due Date : <br> <input type="text" name="due"> <br>
        <input type="submit" value="Submit" name="btm">&nbsp&nbsp&nbsp
        <input type="reset" value="Reset">
    </form>
    </div>
    </center>
</body>
</html>

<?php
$con= mysqli_connect("localhost","root","","library") or die("Can't connect". mysqli_connect_error());
if(isset($_POST['btm']))
{
    $name=$_POST['bname'];
    $author=$_POST['author'];
    $publication=$_POST['publication'];
    $issue=$_POST['issue'];
    $due=$_POST['due'];
    
    $query="insert into book (Bookname,Author,Publications,Issuedate,DueDate) 
        values('$name','$author','$publication','$issue','$due')";
    $x=mysqli_query($con,$query);
    print($x);
    if($x>0)
        echo "<script>alert('Data entered');</script>";
    else
        echo "fail";
    mysqli_close($con);    

}     
?>