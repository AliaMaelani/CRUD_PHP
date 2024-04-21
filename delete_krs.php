<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data KRS berdasarkan ID
    $sql = "DELETE FROM krs WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Data KRS berhasil dihapus.";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Permintaan tidak valid.";
}

$conn->close();
?>

