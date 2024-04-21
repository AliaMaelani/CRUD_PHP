<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['kodemk']) && isset($_POST['nama_mk']) && isset($_POST['sks']) && $_POST['sks'] != '') {
        $kodemk = $_POST['kodemk'];
        $nama_mk = $_POST['nama_mk'];
        $sks = $_POST['sks'];

        $sql = "INSERT INTO matakuliah (kodemik, nama, jumlah_sks) VALUES ('$kodemk', '$nama_mk', '$sks')";
        $result = $conn->query($sql);
    }
}

$conn->close();

header("Location: index.php");
exit();
?>