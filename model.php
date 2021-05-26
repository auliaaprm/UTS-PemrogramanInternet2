<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    //tabel absen
    public function insert_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
    {
        $sql = "INSERT INTO tblabsen (idabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi) 
        VALUES ('$idabsen', '$tglabsen', '$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_absen()
    {
        $sql = "SELECT * FROM tblabsen";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_absen($id)
    {
        $sql = "SELECT * FROM tblabsen WHERE idabsen='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
    {
        $sql = "UPDATE tblabsen SET tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelassesi' WHERE idabsen='$idabsen'";
        $this->conn->query($sql);
    }
    public function delete_absen($absen_id)
    {
        $sql = "DELETE FROM tblabsen WHERE idabsen='$absen_id'";
        $this->conn->query($sql);
    }

    //tbl dosen
    public function insert_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
    {
        $sql = "INSERT INTO tbldosen (kodedosen, nidn, nip, namadosen, kodeprodi) 
        VALUES ('$kodedosen', '$nidn', '$nip', '$namadosen', '$kodeprodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_dosen()
    {
        $sql = "SELECT * FROM tbldosen";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_dosen($id)
    {
        $sql = "SELECT * FROM tbldosen WHERE kodedosen='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
    {
        $sql = "UPDATE tbldosen SET nidn='$nidn', nip='$nip', namadosen='$namadosen', kodeprodi='$kodeprodi' WHERE kodedosen='$kodedosen'";
        $this->conn->query($sql);
    }
    public function delete_dosen($dosen_id)
    {
        $sql = "DELETE FROM tbldosen WHERE kodedosen='$dosen_id'";
        $this->conn->query($sql);
    }

    //tbl jadwal
    public function insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
    {
        $sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) 
        VALUES ('$id', '$jadwalid', '$kodedosen', '$hari', '$thnakademik', '$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang', '$status', '$kelassesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_jadwal()
    {
        $sql = "SELECT * FROM tbljadwal";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_jadwal($id)
    {
        $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
    {
        $sql = "UPDATE tbljadwal SET jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik', semester='$semester', kodemk='$kodemk', sesi='$sesi',
        jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi' WHERE id='$id'";
        $this->conn->query($sql);
    }
    public function delete_jadwal($jadwal_id)
    {
        $sql = "DELETE FROM tbljadwal WHERE id='$jadwal_id'";
        $this->conn->query($sql);
    }

    //tbl matakuliah
    public function insert_mk($kodemk, $namamk, $sks, $smt, $kodeprodi)
    {
        $sql = "INSERT INTO tblmkuliah (kodemk, namamk, sks, smt, kodeprodi) 
        VALUES ('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_mk()
    {
        $sql = "SELECT * FROM tblmkuliah";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_mk($id)
    {
        $sql = "SELECT * FROM tblmkuliah WHERE kodemk='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_mk($kodemk, $namamk, $sks, $smt, $kodeprodi)
    {
        $sql = "UPDATE tblmkuliah SET namamk='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi' WHERE kodemk='$kodemk'";
        $this->conn->query($sql);
    }
    public function delete_mk($mk_id)
    {
        $sql = "DELETE FROM tblmkuliah WHERE kodemk='$mk_id'";
        $this->conn->query($sql);
    }

    //tbl prodi
    public function insert_prodi($kodeprodi, $namaprodi)
    {
        $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) 
        VALUES ('$kodeprodi', '$namaprodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_prodi()
    {
        $sql = "SELECT * FROM tblprodi";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_prodi($id)
    {
        $sql = "SELECT * FROM tblprodi WHERE kodeprodi='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_prodi($kodeprodi, $namaprodi)
    {
        $sql = "UPDATE tblprodi SET namaprodi='$namaprodi' WHERE kodeprodi='$kodeprodi'";
        $this->conn->query($sql);
    }
    public function delete_prodi($prodi_id)
    {
        $sql = "DELETE FROM tblprodi WHERE kodeprodi='$prodi_id'";
        $this->conn->query($sql);
    }
}