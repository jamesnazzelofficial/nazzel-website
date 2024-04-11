<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if username and password are correct (replace this with your authentication logic)
        if ($username === "your_username" && $password === "your_password") {
            // Authentication successful, set session variable and redirect to home page
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit();
        } else {
            // Authentication failed, redirect back to login page with error message
            header("Location: login.html?error=1");
            exit();
        }
    }
} else {
    // Redirect to login page if form is not submitted
    header("Location: login.html");
    exit();
}
?>
