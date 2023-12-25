<?php
$firstname=$_REQUEST['firstName'];
$lastname=$_REQUEST['lastName'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


if(isset($_POST['asytest']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="ibrahim test";

    $conn = mysqli_connect($host,$user,$password,$db);
    $insert= "insert into ibrahiminfo values('$firstname','$lastname','$email'.'$password')";
    mysqli_query($conn,$insert);

    if($conn)
    {
        echo("<h1 style=color:green;>your registration is done!</h1>");
    }
    else{
        echo("<h1 style=color:red;>your registration is failed!</h1>");
    }

}
?>
