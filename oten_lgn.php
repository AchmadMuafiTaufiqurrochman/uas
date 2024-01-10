<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = $koneksi->real_escape_string($username);

$data = $koneksi->query("SELECT * FROM pengguna WHERE username = '$username'");

if ($data && $data->num_rows > 0) {
    $row = $data->fetch_assoc();
  
    if (password_verify($password, $row['password'])) {
      session_start();
      $_SESSION['username'] = $username;
      echo "success";
    } else {
      echo "Username atau password salah.";
    }
 } else {
    echo "Username atau password salah.";
 }

$koneksi->close();
?>