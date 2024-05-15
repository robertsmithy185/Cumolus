<?php
require "connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: main.html");
        exit();
    } else {
        header("Location: Login.html?error=1");
    }
?>
