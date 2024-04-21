<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Mahasiswa & Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="insert.php" method="post">
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="jurusan">Jurusan:</label><br>
        <select id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Operasi">Sistem Operasi</option>
        </select><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>
        <input type="submit" value="Tambah Data">
    </form>

    <h2>Tambah Data Matakuliah</h2>
    <form action="insert_mk.php" method="post">
        <label for="kodemk">Kode MK:</label><br>
        <input type="text" id="kodemk" name="kodemk"><br>
        <label for="nama_mk">Nama MK:</label><br>
        <input type="text" id="nama_mk" name="nama_mk"><br>
        <label for="sks">SKS:</label><br>
        <input type="text" id="sks" name="sks"><br>
        <input type="submit" value="Tambah Data">
    </form>

    <h2>Tambah Data KRS</h2>
    <form action="insert_krs.php" method="post">
        <label for="mahasiswa_npm">Mahasiswa (NPM):</label><br>
        <input type="text" id="mahasiswa_npm" name="mahasiswa_npm"><br>
        <label for="matakuliah_kodemik">Matakuliah (Kode MK):</label><br>
        <input type="text" id="matakuliah_kodemik" name="matakuliah_kodemik"><br>
        <input type="submit" value="Tambah Data">
    </form>

</body>
</html>
