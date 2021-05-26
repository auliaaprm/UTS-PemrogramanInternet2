<!doctype html>
<html lang="en">
<div class="container">
<head>
    <title>Tambah Data Absen Mahasiswa</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="absen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Absen</label>
        <br>
        <input type="text" name="idabsen">
        <br>
        <label>Tanggal Absen</label>
        <br>
        <input type="date" name="tglabsen">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="time" name="masuk">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="time" name="keluar">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Sesi</label>
        <br>
        <input type="text" name="sesi">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi">
        <br><br>
        <button type="submit" name="submit_simpan_absen">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</div>
</html>