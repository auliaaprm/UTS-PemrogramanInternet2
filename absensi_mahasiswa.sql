-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 12.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(5) NOT NULL,
  `tglabsen` date NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `sesi` char(1) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(1, '2021-05-25', '08:00:00', '09:30:00', 'DCIC3', '1', 'Pagi'),
(2, '2021-05-25', '09:30:00', '11:30:00', 'DCIC1', '1', 'Pagi'),
(3, '2021-05-26', '12:30:00', '14:30:00', 'DCIC4', '2', 'Siang'),
(4, '2021-05-26', '12:30:00', '14:30:00', 'DCIC2', '1', 'Siang'),
(5, '2021-05-26', '15:00:00', '17:30:00', 'DCIC5', '2', 'Sore');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldosen`
--

CREATE TABLE `tbldosen` (
  `kodedosen` varchar(5) NOT NULL,
  `nidn` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `namadosen` varchar(80) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbldosen`
--

INSERT INTO `tbldosen` (`kodedosen`, `nidn`, `nip`, `namadosen`, `kodeprodi`) VALUES
('DCIC1', '0416089303', '199308162111', 'Reza Ilyasa, M.Kom.', '2'),
('DCIC2', '0401127701', '197712012112', 'Lena Magdalena., S.Kom.,MMSI.', '5'),
('DCIC3', '0211049301', '199304112113', 'Rifqi Fahrudin, M.Kom.', '4'),
('DCIC4', '0504049602', '199604042114', 'Yuni Awalaturrohmah Solihah, M.Pd. ', '1'),
('DCIC5', '0211017501', '197501112112', ' Marsani Asfi', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(4) NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `thnakademik` varchar(10) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `kodemk` varchar(15) NOT NULL,
  `sesi` char(1) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `jadwalid`, `kodedosen`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`) VALUES
(1, 1, 'DCIC1', 'Senin', '2021', '4', 'SI001', '1', '09:30:00', '11:30:00', 'SIB', 'R-101', 1, 'Pagi'),
(2, 2, 'DCIC2', 'Rabu', '2021', '2', 'KA005', '1', '08:00:00', '09:30:00', 'KA', 'Audit', 1, 'Pagi'),
(3, 3, 'DCIC3', 'Selasa', '2021', '4', 'DKV003', '2', '12:30:00', '14:30:00', 'DKV2', 'R-101', 2, 'Siang'),
(4, 4, 'DCIC4', 'Kamis', '2021', '2', 'TI002', '1', '09:30:00', '11:30:00', 'TI1', 'R-102', 1, 'Pagi'),
(5, 5, 'DCIC5', 'Jumat', '2021', '4', 'MB004', '2', '15:00:00', '17:00:00', 'MB2', 'Audit', 2, 'Sore');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmkuliah`
--

CREATE TABLE `tblmkuliah` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(60) NOT NULL,
  `sks` int(2) NOT NULL,
  `smt` int(1) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmkuliah`
--

INSERT INTO `tblmkuliah` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('DKV003', 'UI & UX Design', 2, 2, '4'),
('KA005', 'Pengembangan Karakter', 2, 2, '5'),
('MB004', 'Bussiness Intelligence', 3, 4, '3'),
('SI001', 'Pemrograman Internet 2', 3, 4, '2'),
('TI002', 'Bahasa Inggris', 2, 4, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(1) NOT NULL,
  `namaprodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('1', 'Teknik Informatika'),
('2', 'Sistem Informasi'),
('3', 'Manajemen Bisnis'),
('4', 'Desain Komunikasi Visual'),
('5', 'Komputerisasi Akuntasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indeks untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`kodedosen`);

--
-- Indeks untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodedosen` (`kodedosen`),
  ADD KEY `kodemk` (`kodemk`);

--
-- Indeks untuk tabel `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  MODIFY `idabsen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD CONSTRAINT `tblabsen_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tblmkuliah` (`kodemk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD CONSTRAINT `tblmkuliah_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
