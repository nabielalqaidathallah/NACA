<?php
session_start(); // Mulai sesi

// Hancurkan sesi
session_destroy();

// Alihkan ke halaman login atau halaman lain yang diinginkan
header("Location: index.php");
exit();
?>
