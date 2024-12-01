<?php
include 'db_connection.php';

$id = intval($_GET['id']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($id <= 0) {
    die("Invalid ID");
}

$stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Pemesanan berhasil dihapus!";
    header("Location: view_bookings.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>