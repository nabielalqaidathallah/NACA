<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan validasi login (contoh sederhana, Anda perlu menggantinya dengan validasi yang sesuai dengan kebutuhan Anda)
    $query = "INSERT INTO tb_login (username, password) VALUES ('$username','$password')";
    $result = $conn->query($query);

    if ($result) {
        // Login berhasil
        // echo "Login successful!";
        echo "<script>alert('Berhasil daftar')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // Login gagal
        echo "Login failed. Invalid username or password.";
    }

}
?>