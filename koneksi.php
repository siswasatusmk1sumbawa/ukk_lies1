<?php
$servername = "localhost"; // Nama server
$dbuser = "root";    // Nama pengguna database
$dbpass = "";    // Kata sandi database
$dbname = "lies"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

// Memeriksa koneksi
// if (!$conn) {
    // die("Connection Failed: " . mysqli_connect_error());
// }

// echo "Connection Successful";
?>
