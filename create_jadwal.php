<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Jadwal</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="jadwal.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id</label>
        <br>
        <input type="text" name="id">
        <br>
        <label>Jadwal Id</label>
        <br>
        <input type="text" name="jadwalid">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Hari</label>
        <br>
        <input type="text" name="hari">
        <br>
        <label>Tahun Akademik</label>
        <br>
        <input type="text" name="thnakademik">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="semester">
        <br>
        <label>Kode Matakuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Sesi</label>
        <br>
        <input type="text" name="sesi">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="time" name="jammasuk">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="time" name="jamkeluar">
        <br>
        <label>Kelas</label>
        <br>
        <input type="text" name="kelas">
        <br>
        <label>Ruang</label>
        <br>
        <input type="text" name="ruang">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi">
        <br><br>
        <button type="submit" name="submit_simpan_jadwal">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>