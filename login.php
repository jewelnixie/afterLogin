<?php
session_start(); // Start the session

$conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userId, $hashedPassword);

    if ($stmt->fetch() && password_verify($password, $hashedPassword)) {
        // Set session variables
        $_SESSION['user_id'] = $userId; // Store the user's ID in the session
        $_SESSION['email'] = $email; // Optional: store the user's email
        
        header("Location: afterLogin.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}

$conn->close();
?>
