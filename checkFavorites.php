<?php
session_start();

$conn = new mysqli("localhost", "root", "iceicebabybaby99!", "visita_db");
$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT destination_id FROM favorites WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

$favorites = [];
while ($row = $result->fetch_assoc()) {
    $favorites[] = $row['destination_id'];
}

echo json_encode($favorites);
$stmt->close();
$conn->close();
?>