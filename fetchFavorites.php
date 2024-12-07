<?php
session_start();

// Ensure database connection to visita_db
$conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    die(json_encode(["error" => "User not logged in"]));
}

// Fetch user's favorite destinations with full destination details
$stmt = $conn->prepare("
    SELECT d.id, d.name, d.image, d.price, d.duration, d.description 
    FROM destinations d
    JOIN favorites f ON d.id = f.destination_id 
    WHERE f.user_id = ?
");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

$favorites = [];
while ($row = $result->fetch_assoc()) {
    // Format price to ensure two decimal places
    $row['price'] = number_format($row['price'], 2);
    $favorites[] = $row;
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($favorites);

$stmt->close();
$conn->close();
?>