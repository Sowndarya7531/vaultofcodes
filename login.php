<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the database connection
$message = ""; // Initialize a variable to store messages

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["login"])) {
        // Login logic
        // ... (same login logic as in your existing code)
        $username = $_POST["login_username"];
        $password = $_POST["login_password"];

        $sql = "SELECT name, password FROM details WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($db_username, $db_password);

        if ($stmt->num_rows == 1 && $stmt->fetch() && password_verify($password, $db_password)) {
            $message = "Login successful. Welcome, $db_username!";
            // After successful registration
            $_SESSION['username'] = $username;

        } else {
            $message = "Login failed. The provided username or password is incorrect.";
        }
    }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
    <form action="process.php" method="post">
        <label for="login_username">Username:</label>
        <input type="text" name="login_username" required><br>
        <label for="login_password">Password:</label>
        <input type="password" name="login_password" required><br>
        <input type="submit" name="login" value="Login">
    </form>

    <!-- Display the appropriate message based on the user's choice -->
    <div>
        <?php
        if (!empty($message)) {
            echo $message;
        }
        ?>
    </div>
</body>
</html>
