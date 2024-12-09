<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['destination_id'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$destination_id = intval($data['destination_id']);

// Connect to the database
$conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit;
}

// Insert or delete favorite
$sql = "SELECT * FROM favorites WHERE user_id = $user_id AND destination_id = $destination_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Remove from favorites
    $delete_sql = "DELETE FROM favorites WHERE user_id = $user_id AND destination_id = $destination_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Removed from favorites']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to remove favorite']);
    }
} else {
    // Add to favorites
    $insert_sql = "INSERT INTO favorites (user_id, destination_id) VALUES ($user_id, $destination_id)";
    if ($conn->query($insert_sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Added to favorites']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add favorite']);
    }
}

$conn->close();
?>
