-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Nov 2014 pada 20.02
-- Versi Server: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ktm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmhs`
--

CREATE TABLE IF NOT EXISTS `tblmhs` (
  `jenis_id` varchar(10) NOT NULL,
  `nim` char(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `photo_url` mediumtext NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmhs`
--

INSERT INTO `tblmhs` (`jenis_id`, `nim`, `nama`, `jk`, `tempat`, `tanggal`, `no_hp`, `photo_url`, `alamat`) VALUES
('', '', '', 'Laki-laki', '', '0000-00-00', 0, 'http://localhost/idcard/photo/20141030004849.jpg', ''),
('', '1', 'mantap', 'Laki-laki', 'blitar', '2014-10-29', 0, 'http://localhost/idcard/photo/20141030003633.jpg', ''),
('', '102367', 'saya', 'Laki-laki', 'adalah', '2014-11-04', 2147483647, 'http://localhost/idcard/photo/20141105000229.jpg', ''),
('', '109238', 'werwer', 'Laki-laki', 'werewr', '2014-10-27', 0, 'http://localhost/idcard/photo/20141030005003.jpg', ''),
('', '11', 'mantap', 'Laki-laki', 'blitar', '2014-11-03', 0, 'http://localhost/idcard/photo/20141103202142.jpg', ''),
('', '111', 'yasin yusuf', 'Perempuan', 'Telkomsel', '2014-10-30', 0, 'http://localhost/idcard/photo/20141030221615.jpg', ''),
('KTP', '11111', 'Agungd', 'Laki-laki', 'Ag', '2014-11-06', 0, 'http://10.250.2.214/idcard/photo/20141107002358.jpg', ''),
('', '112233', 'jojo', 'Laki-laki', 'maka', '2014-10-26', 0, 'http://localhost/idcard/photo/20141030173610.jpg', ''),
('KTP', '11223344', 'Didik Prastyo', 'Laki-laki', 'Medianet', '2014-11-10', 987654321, 'http://10.250.2.217/bukutamu/photo/20141110215951.jpg', 'Gak jelas'),
('', '1133', 'Yasin Yusuf', 'Laki-laki', 'Kisel', '2014-11-04', 0, 'http://10.250.2.217/bukutamu/photo/20141104215125.jpg', ''),
('', '11333', 'Yasin Yusuf', 'Laki-laki', 'Kisel', '2014-11-04', 0, 'http://10.250.2.217/bukutamu/photo/20141104215548.jpg', ''),
('', '12', '', 'Perempuan', '', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141103184959.jpg', ''),
('', '1234', 'agung', 'Laki-laki', 'boyolali', '2014-10-01', 0, 'http://10.250.2.217/bukutamu/photo/20141030005433.jpg', ''),
('', '12345', 'Alex Musfi', 'Perempuan', 'Makan ', '2014-10-01', 0, 'http://10.250.2.217/bukutamu/photo/20141031011610.jpg', ''),
('KTP', '1234567777', 'Agungd', 'Laki-laki', 'Ag', '2014-11-06', 2222222, 'http://10.250.2.217/bukutamu/photo/20141107002321.jpg', ''),
('', '123467', 'agung', 'Laki-laki', 'boyolali', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141103202001.jpg', ''),
('', '124', 'qwerty', 'Perempuan', 'boyolali', '2014-10-26', 0, 'http://10.250.2.217/bukutamu/photo/20141030005835.jpg', ''),
('', '234', 'sdf', 'Laki-laki', 'dfgdf', '2014-10-01', 0, 'http://10.250.2.217/bukutamu/photo/20141030194633.jpg', ''),
('', '33', '33', 'Laki-laki', '33', '2014-10-31', 0, 'http://10.250.2.217/bukutamu/photo/20141031215331.jpg', ''),
('', '456', '67', 'Perempuan', '', '2014-11-02', 0, 'http://10.250.2.217/bukutamu/photo/20141102223405.jpg', ''),
('', '567', '11', 'Laki-laki', 'werewr', '2014-10-30', 0, 'http://10.250.2.217/bukutamu/photo/20141030010114.jpg', ''),
('SIM', '59eypxj7', 'wati', 'Perempuan', 'Telkomsel', '2014-11-06', 1234567890, 'http://10.250.2.217/bukutamu/photo/20141106202128.jpg', 'madura'),
('', '993003', 'Oya Suryana', 'Laki-laki', 'Kuningan', '1980-03-19', 0, 'http://10.250.2.217/bukutamu/photo/20140103184133.jpg', ''),
('', 'asking', 'alexandria', 'Perempuan', 'underground', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141104071442.jpg', ''),
('', 'erty', 'werty', 'Laki-laki', 'sdfgn', '2014-10-01', 0, 'http://10.250.2.217/bukutamu/photo/20141031193250.jpg', ''),
('', 'fdfg', 'fdgfgdf', 'Perempuan', '', '2014-11-02', 0, 'http://10.250.2.217/bukutamu/photo/20141102224601.jpg', ''),
('', 'ghjk', '', 'Laki-laki', '', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141103222003.jpg', ''),
('Laki-laki', 'jkl123', 'sdfsdfsdf', 'Laki-laki', 'sdfdsfsd', '2014-11-06', 0, 'http://10.250.2.217/bukutamu/photo/20141106200518.jpg', 'werwerewr'),
('', 'okok', 'koko', 'L', 'koko', '0000-00-00', 0, 'http://10.250.2.217/bukutamu/photo/20141031215057.jpg', ''),
('', 'qwdf', 'sdf', '', '', '0000-00-00', 0, 'http://10.250.2.217/bukutamu/photo/20141031205732.jpg', ''),
('Laki-laki', 'qwe123', 'abie', 'Laki-laki', 'Medianet', '2014-11-06', 2147483647, 'http://10.250.2.217/bukutamu/photo/20141106194734.jpg', 'Bekasi'),
('Laki-laki', 'qwerty12', 'abi', 'Laki-laki', 'medianet', '2014-11-06', 1234567890, 'http://10.250.2.217/bukutamu/photo/20141106195832.jpg', 'bekasi'),
('', 'saya1', 'ertyui', '', 'fghj', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141104011926.jpg', ''),
('', 'saya2', 'qwert', '', 'sdfg', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141104012713.jpg', ''),
('', 'saya3', 'erty', '', 'fghgfh', '2014-11-03', 0, 'http://10.250.2.217/bukutamu/photo/20141104012855.jpg', ''),
('Laki-laki', 'sdfgh', 'sdgfg', '', 'dfgdf', '2014-11-06', 0, 'http://10.250.2.217/bukutamu/photo/20141106195505.jpg', ''),
('', 'ty', 'ty', 'L', 'ty', '0000-00-00', 0, 'http://10.250.2.217/bukutamu/photo/20141031215213.jpg', ''),
('', 'zxcds', 'sdsd', '', 'sdfsd', '2014-11-06', 0, 'http://10.250.2.217/bukutamu/photo/20141106195128.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE IF NOT EXISTS `tbl_tamu` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `no_id` varchar(30) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_keluar` datetime NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `id_visitor` varchar(20) NOT NULL,
  `foto_wajah` varchar(90) NOT NULL,
  `lantai` varchar(5) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`no`, `no_id`, `tgl_masuk`, `tgl_keluar`, `keperluan`, `id_visitor`, `foto_wajah`, `lantai`, `lokasi`, `status`) VALUES
(1, '1', '2014-11-06 10:19:54', '2014-11-12 11:47:18', 'meeting', '123456', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '1', '', 1),
(2, '111', '2014-11-06 10:21:53', '0000-00-00 00:00:00', 'bertemu client', '12345', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '2', '', 0),
(3, 'jkl123', '2014-11-06 11:10:34', '2014-11-12 11:47:18', 'test', '123456', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '3', '', 1),
(7, '59eypxj7', '2014-11-06 15:22:27', '2014-11-12 11:46:33', 'bekerja', '123', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '6', '', 1),
(8, '11111', '2014-11-06 15:24:51', '2014-11-07 14:53:57', 'AAAAA', 'A!', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '4', '', 0),
(9, '111', '2014-11-06 16:48:23', '0000-00-00 00:00:00', 'sdfgh', '1234', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '4', '', 0),
(10, '59eypxj7', '2014-11-06 17:38:48', '2014-11-17 10:53:38', 'y', '098', 'http://10.250.2.217/bukutamu/photo/20141107023642.jpg', '9', '', 1),
(11, '11223344', '2014-11-10 13:40:31', '2014-11-12 11:46:33', 'kerja', '123', 'http://10.250.2.217/bukutamu/photo/20141110224017.jpg', '1', 'BSD Office', 0),
(12, '3309', '2014-11-11 08:59:46', '0000-00-00 00:00:00', 'ABCV', '6789', 'http://10.250.2.217/bukutamu/photo/20141111175848.jpg', '5', 'BSD TTC', 0),
(17, '11', '2014-11-11 15:03:17', '2014-11-12 14:50:12', '23423', '1111', 'http://10.250.2.217/bukutamu/photo/20141112000226.jpg', '2', 'TBS', 1),
(18, '11223344', '2014-11-11 15:06:54', '2014-11-17 10:53:38', 'sdfghjkl', '098', 'http://10.250.2.217/bukutamu/photo/20141112000632.jpg', '90', 'BSD Office', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
