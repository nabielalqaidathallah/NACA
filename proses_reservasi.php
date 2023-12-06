<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tujuan = $_POST["tujuan"];
    $tanggal = $_POST["tanggal"];
    $jumlah_peserta = $_POST["jumlah_peserta"];
    // Lakukan validasi login (contoh sederhana, Anda perlu menggantinya dengan validasi yang sesuai dengan kebutuhan Anda)
    $query = "INSERT INTO tb_reservasi (nama, email, tujuan, tanggal, jumlah_peserta) 
            VALUES ('$nama','$email', '$tujuan', '$tanggal', '$jumlah_peserta')";
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