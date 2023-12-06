<?php
$servername = "localhost"; // Sesuaikan dengan nama server Anda
$username = "root"; // Sesuaikan dengan nama pengguna database Anda
$password = ""; // Sesuaikan dengan kata sandi database Anda
$dbname = "profil_naca"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
