<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $mahasiswa_npm = $_POST['mahasiswa_npm'];
    $matakuliah_kodemik = $_POST['matakuliah_kodemik'];

    // Update data KRS berdasarkan ID
    $sql = "UPDATE krs SET mahasiswa_npm='$mahasiswa_npm', matakuliah_kodemik='$matakuliah_kodemik' WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Data KRS berhasil diperbarui.";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Permintaan tidak valid.";
}

$conn->close();
?>
