<?php
session_start();

//Database connection

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'contact_info';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if(!$conn)
{
    echo"Connection Failed:",mysqli_connect_error();
    exit;
}

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="Insert into contact(Name,Email,Number,Subject,Message) values ('$name','$email','$number','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "We will contact you soon";
    mysqli_close($conn);

?>