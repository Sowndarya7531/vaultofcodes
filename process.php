<?php
session_start(); // Start the session

// Database credentials
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

// Create a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["register"])) {
        // Registration logic
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        // Insert the user details into the database
        $sql = "INSERT INTO details (name, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            // Registration successful
            $_SESSION['username'] = $username; // Store the username in the session
            header("Location: blog.php"); // Redirect to the blog page
            exit;
        } else {
            // Registration failed
            echo "Error registering: " . $stmt->error;
        }

        $stmt->close();
    } elseif (isset($_POST["login"])) {
        // Login logic
        $login_username = $_POST["login_username"];
        $login_password = $_POST["login_password"];

        // Query the database to retrieve the user's data
        $sql = "SELECT name, password FROM details WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $login_username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($db_username, $db_password);

        if ($stmt->num_rows == 1 && $stmt->fetch() && password_verify($login_password, $db_password)) {
            // Login successful
            $_SESSION['username'] = $login_username; // Store the username in the session
            header("Location: blog.php"); // Redirect to the blog page
            exit;
        } else {
            // Login failed
            echo "Login failed. The provided username or password is incorrect.";
        }
    } elseif (isset($_POST["logout"])) {
        // Handle logout
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        header('Location: blog.php'); // Redirect to the blog page
        exit;
    }

    $conn->close();
}
?>
