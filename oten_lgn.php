<?php
session_start();

// Load file koneksi.php
require_once 'koneksi.php';

// Menerima data username dan password dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Menjalankan query untuk mengecek username dan password di database
$query = "SELECT * FROM pengguna WHERE username = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Jika username dan password ditemukan, login berhasil
    $_SESSION['username'] = $username;
    echo json_encode(['success' => true]);
} else {
    // Jika username atau password tidak ditemukan, login gagal
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>