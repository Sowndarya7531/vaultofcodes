<?php
// Include your database connection and registration logic here
// Database credentials
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; // Initialize a variable to store messages

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["register"])) {
        // Registration logic
        // ... (same registration logic as in your existing code)
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        $sql = "INSERT INTO details (name, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $message = "Registration successful. You can now log in.";
            // After successful registration
            $_SESSION['username'] = $username;

        } else {
            $message = "Error registering: " . $stmt->error;
        }
    } 
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
    <form action="process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="register" value="Register">
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
