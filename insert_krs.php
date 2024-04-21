<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses penambahan data mahasiswa
    if (isset($_POST['mahasiswa_npm']) && isset($_POST['matakuliah_kodemik']) ) {
        $mahasiswa_npm = $_POST['mahasiswa_npm'];
        $matakuliah_kodemik = $_POST['matakuliah_kodemik'];

        $sql = "INSERT INTO krs (mahasiswa_npm, matakuliah_kodemik) VALUES ('$mahasiswa_npm', '$matakuliah_kodemik')";
        $result = $conn->query($sql);
    }    
}
$conn->close();

// Kembali ke index.php
header("Location: index.php");
exit();
?>