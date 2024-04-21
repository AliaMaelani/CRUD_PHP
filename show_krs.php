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
        include 'connect.php';

        $sql = "SELECT krs.id, mahasiswa.nama AS nama_mahasiswa, matakuliah.nama AS nama_matakuliah, matakuliah.jumlah_sks 
                FROM krs
                JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
                JOIN matakuliah ON krs.matakuliah_kodemik = matakuliah.kodemik";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["nama_mahasiswa"]."</td>";
                echo "<td>".$row["nama_matakuliah"]."</td>";
                echo "<td><span class='red'>".$row["nama_mahasiswa"]."</span> Mengambil Mata Kuliah <span class='red'>".$row["nama_matakuliah"]."</span> (".$row["jumlah_sks"]." SKS)</td>";
                echo "<td><a href='edit_krs.php?id=".$row["id"]."'>Edit</a> | <a href='delete_krs.php?id=".$row["id"]."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
