<?php
session_start(); // Start the session

if (isset($_SESSION['username'])) {
    // User is logged in, so we can log them out
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
}

// Redirect back to the blog page
header('Location: blog.php');
exit;
?>
