<?php
session_start();

//Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'register';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // more generic error message
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        
        $sql = "SELECT password FROM register WHERE email = '$email' LIMIT 1";
        
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            if ($password === $storedPassword) {
                // Successful login
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                echo "Logged in successfully";
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "User does not exist!";
        }

        $conn->close();
    }
}
?>

