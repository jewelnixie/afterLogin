<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$userId = $_SESSION['user_id'];
$data = json_decode(file_get_contents('php://input'), true);
$destinationId = $data['destinationId'];
$action = $data['action'];

$conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit;
}

if ($action === 'add') {
    $stmt = $conn->prepare("INSERT IGNORE INTO favorites (user_id, destination_id) VALUES (?, ?)");
} elseif ($action === 'remove') {
    $stmt = $conn->prepare("DELETE FROM favorites WHERE user_id = ? AND destination_id = ?");
}

$stmt->bind_param("ii", $userId, $destinationId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Database query failed']);
}

$stmt->close();
$conn->close();
