<?php
include "Database.php";
include "Action-Sql.php";

$db = new Database();
$conn = $db->getConnection();
$Action = new Action($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Register
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username)) {
            header("Location: Register.html?error=4"); // Redirect to registration page with error message
            exit();
        } else if (empty($email)){
            header("Location: Register.html?error=5"); // Redirect to registration page with error message
            exit();
        } else if (empty($password)){
            header("Location: Register.html?error=6"); // Redirect to registration page with error message
            exit();
        } else {
            $Action->tambahkandataUser($username, $email,$password);
        }
    } else if(isset($_POST['username']) && isset($_POST['password'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $Action->cekDatauser($username, $password);

    }
}
