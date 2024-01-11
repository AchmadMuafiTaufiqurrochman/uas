<?php
header('Content-Type: application/json');

// Load file koneksi.php
include 'koneksi.php';

// Otentikasi login
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$sql = "SELECT * FROM pengguna WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $data['username'], $data['password']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(array("success" => true, "message" => "Login berhasil"));
} else {
    echo json_encode(array("success" => false, "message" => "Username atau password salah"));
}

$stmt->close();
$conn->close();
?>