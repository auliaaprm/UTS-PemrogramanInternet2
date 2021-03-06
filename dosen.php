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
    <title>Data Dosen</title>
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
          <a class="nav-link active" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
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
        <h1>Data Dosen</h1>
        <a href="create_dosen.php">Tambah Data</a>
        <br>
        <a href="print_dosen.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Dosen</th>
                    <th>NIDN</th>
                    <th>NIP</th>
                    <th>Nama Dosen</th>
                    <th>Kode Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_dosen();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->nidn ?></td> 
                            <td><?= $data->nip ?></td>
                            <td><?= $data->namadosen ?></td>
                            <td><?= $data->kodeprodi ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit_dosen.php?id=<?= $data->kodedosen ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?dosen_id=<?= $data->kodedosen ?>">Delete</a>
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