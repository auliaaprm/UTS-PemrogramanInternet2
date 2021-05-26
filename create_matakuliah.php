<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Matakuliah</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Matakuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Nama Matakuliah</label>
        <br>
        <input type="text" name="namamk">
        <br>
        <label>SKS</label>
        <br>
        <input type="text" name="sks">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="smt">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br><br>
        <button type="submit" name="submit_simpan_mk">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>