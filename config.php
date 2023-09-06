<?php
session_start();

//Database connection

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'register';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if(!$conn)
{
    echo"Connection Failed:",mysqli_connect_error();
    exit;
}

$firstname=$_POST['firstname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="Insert into register(firstname,age,email,password) values ('$firstname','$age','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "Registered successfully";
    mysqli_close($conn);

?>