<?php
$host = 'localhost';
$user = "root"; 
$pass = ""; 
$db = 'kuliah';

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
