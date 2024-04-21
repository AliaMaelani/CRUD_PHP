<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data KRS berdasarkan ID
    $sql = "SELECT * FROM krs WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $mahasiswa_npm = $row['mahasiswa_npm'];
        $matakuliah_kodemik = $row['matakuliah_kodemik'];

        // Tampilkan form edit
        echo "<h2>Edit Data KRS</h2>";
        echo "<form action='update_krs.php' method='post'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<label for='mahasiswa_npm'>Mahasiswa (NPM):</label><br>";
        echo "<input type='text' id='mahasiswa_npm' name='mahasiswa_npm' value='$mahasiswa_npm'><br>";
        echo "<label for='matakuliah_kodemik'>Matakuliah (Kode MK):</label><br>";
        echo "<input type='text' id='matakuliah_kodemik' name='matakuliah_kodemik' value='$matakuliah_kodemik'><br>";
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";
    } else {
        echo "Data KRS tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}

$conn->close();
?>

