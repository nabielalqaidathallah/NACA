<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan validasi login (contoh sederhana, Anda perlu menggantinya dengan validasi yang sesuai dengan kebutuhan Anda)
    $query = "select * from tb_login where username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login berhasil
        // echo "Login successful!";
        $data = mysqli_fetch_array($result);
        if ($data["password"]==$password){
            session_start();
            echo "<script>window.location.href='index.php'</script>";
            $_SESSION["username"]=$data["username"];
        }
    } else {
        // Login gagal
        echo "Login failed. Invalid username or password.";
    }

}
?>