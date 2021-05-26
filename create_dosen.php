<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Dosen</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="dosen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>NIDN</label>
        <br>
        <input type="text" name="nidn">
        <br>
        <label>NIP</label>
        <br>
        <input type="text" name="nip">
        <br>
        <label>Nama Dosen</label>
        <br>
        <input type="text" name="namadosen">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br><br>
        <button type="submit" name="submit_simpan_dosen">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>