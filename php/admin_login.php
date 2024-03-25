<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace "your_username" and "your_password" with your actual admin username and password
    if ($username === "your_username" && $password === "your_password") {
        // Authentication successful
        $_SESSION["admin"] = true;
        echo '<script>alert("Login successful!"); window.location.href = "/admin.html";</script>';
        exit;
    } else {
        // Wrong credentials
        echo '<script>alert("Wrong username or password. Please try again."); window.location.href = "/admin_login.php";</script>';
        exit;
    }
} else {
    // If accessed directly without submitting the form, show warning
    echo '<script>alert("Please login."); window.location.href = "/admin_login.php";</script>';
    exit;
}
?>
