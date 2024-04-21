<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses penambahan data mahasiswa
    if (isset($_POST['npm']) && isset($_POST['nama']) && isset($_POST['jurusan']) && isset($_POST['alamat'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO mahasiswa (npm, nama, jurusan, alamat) VALUES ('$npm', '$nama', '$jurusan', '$alamat')";
        $result = $conn->query($sql);
    }

    // Proses penambahan data matakuliah
    if (isset($_POST['kodemk']) && isset($_POST['nama_mk']) && isset($_POST['sks']) && $_POST['sks'] != '') {
        $kodemk = $_POST['kodemk'];
        $nama_mk = $_POST['nama_mk'];
        $sks = $_POST['sks'];

        $sql = "INSERT INTO matakuliah (kodemik, nama, jumlah_sks) VALUES ('$kodemk', '$nama_mk', '$sks')";
        $result = $conn->query($sql);
    }
}

$conn->close();

// Kembali ke index.php
header("Location: index.php");
exit();
?>



File : show_krs.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel KRS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tabel KRS</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Mata Kuliah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Include file koneksi ke database
        include 'connect.php';

        // Kueri SQL untuk mengambil data dari tabel KRS
        $sql = "SELECT krs.id, mahasiswa.nama AS nama_mahasiswa, matakuliah.nama AS nama_matakuliah, matakuliah.jumlah_sks FROM krs
                JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
                JOIN matakuliah ON krs.matakuliah_kodemik = matakuliah.kodemik";
        $result = $conn->query($sql);

        // Periksa apakah ada data yang diambil
        if ($result->num_rows > 0) {
            $no = 1;
            // Tampilkan data dalam tabel
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["nama_mahasiswa"]."</td>";
                echo "<td>".$row["nama_matakuliah"]."</td>";
                echo "<td>".$row["nama_mahasiswa"]." Mengambil Mata Kuliah ".$row["nama_matakuliah"]." (".$row["jumlah_sks"]." SKS)</td>";
                echo "<td><a href='edit_krs.php?id=".$row["id"]."'>Edit</a> | <a href='delete_krs.php?id=".$row["id"]."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            // Jika tidak ada data, tampilkan pesan
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }

        // Tutup koneksi ke database
        $conn->close();
        ?>
    </table>
</body>
</html>
