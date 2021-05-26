<?php
$idabsen = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($idabsen);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <a href="absen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Absen</label>
        <br>
        <input type="text" name="idabsen" value="<?php echo $data->idabsen ?>">
        <br>
        <label>Tanggal Absen</label>
        <br>
        <input type="date" name="tglabsen" value="<?php echo $data->tglabsen ?>">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="time" name="masuk" value="<?php echo $data->masuk ?>">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="time" name="keluar" value="<?php echo $data->keluar ?>">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
        <br>
        <label>Sesi</label>
        <br>
        <input type="text" name="sesi" value="<?php echo $data->sesi ?>">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
        <br><br>
        <button type="submit" name="submit_edit_absen">Submit</button>
    </form>
</body>

</html>