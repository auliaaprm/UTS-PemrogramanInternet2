<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Jadwal</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6a8bc5;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Absensi MYUCIC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Absen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="jadwal.php">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matakuliah.php">Matakuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Program Studi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <h1>Data Jadwal</h1>
        <a href="create_jadwal.php">Tambah Data</a>
        <br>
        <a href="print_jadwal.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Jadwal Id</th>
                    <th>Kode Dosen</th>
                    <th>Hari</th>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                    <th>Kode Matakuliah</th>
                    <th>Sesi</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Kelas</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th>Kelas Sesi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_jadwal();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id ?></td>
                            <td><?= $data->jadwalid ?></td> 
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->hari ?></td>
                            <td><?= $data->thnakademik ?></td>
                            <td><?= $data->semester ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->jammasuk ?></td> 
                            <td><?= $data->jamkeluar ?></td>
                            <td><?= $data->kelas ?></td>
                            <td><?= $data->ruang ?></td>
                            <td><?= $data->status ?></td>
                            <td><?= $data->kelassesi ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit_jadwal.php?id=<?= $data->id ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?jadwal_id=<?= $data->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel absen mahasiswa.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>