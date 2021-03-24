-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2020 pada 11.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(18, 'Keceriaan Peserta Didik Di MINU ', '<p>Di awal Semester Genap 2018/2019 ini, peserta didik di Madrasah Ibtidaiyah NU &quot;Putri&quot; Kota Malang (MINU Putri) sangat bersemangat untuk mengikuti kegiatan pembelajaran. Hal ini bisa dilihat dari antusiasme peserta didik dalam belajar dan berkreasi sesuai dengan materi yang diberikan guru.</p><p><!--[if gte vml 1]><v:shapetype\r\n id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\"\r\n path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\r\n <v:stroke joinstyle=\"miter\"/>\r\n <v:formulas>\r\n  <v:f eqn=\"if lineDrawn pixelLineWidth 0\"/>\r\n  <v:f eqn=\"sum @0 1 0\"/>\r\n  <v:f eqn=\"sum 0 0 @1\"/>\r\n  <v:f eqn=\"prod @2 1 2\"/>\r\n  <v:f eqn=\"prod @3 21600 pixelWidth\"/>\r\n  <v:f eqn=\"prod @3 21600 pixelHeight\"/>\r\n  <v:f eqn=\"sum @0 0 1\"/>\r\n  <v:f eqn=\"prod @6 1 2\"/>\r\n  <v:f eqn=\"prod @7 21600 pixelWidth\"/>\r\n  <v:f eqn=\"sum @8 21600 0\"/>\r\n  <v:f eqn=\"prod @7 21600 pixelHeight\"/>\r\n  <v:f eqn=\"sum @10 21600 0\"/>\r\n </v:formulas>\r\n <v:path o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\"/>\r\n <o:lock v:ext=\"edit\" aspectratio=\"t\"/>\r\n</v:shapetype><v:shape id=\"_x0000_s1026\" type=\"#_x0000_t75\" style=\'position:absolute;\r\n left:0;text-align:left;margin-left:72.5pt;margin-top:177.3pt;width:61.6pt;\r\n height:61.6pt;z-index:251651584;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image001.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]--><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1027\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:136.1pt;margin-top:177.35pt;width:60.75pt;\r\n height:60.7pt;z-index:251652608;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image003.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->Peserta didik dari Kelas 1A mencoba <!--[if gte vml 1]><v:shape id=\"_x0000_s1028\" type=\"#_x0000_t75\"\r\n style=\'position:absolute;left:0;text-align:left;margin-left:480.8pt;\r\n margin-top:178.35pt;width:57.3pt;height:57.1pt;z-index:251653632;\r\n mso-position-horizontal-relative:page;mso-position-vertical-relative:page\'\r\n o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image005.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->berkreasi membuat lempung terigu (sejenis plastisin berbahan dasar tepung terigu yang diberi pewarna makanan).</p><p>&nbsp;</p><p>Kelas 2A belajar berdiskusi <!--[if gte vml 1]><v:shape id=\"_x0000_s1030\" type=\"#_x0000_t75\"\r\n style=\'position:absolute;left:0;text-align:left;margin-left:347.55pt;\r\n margin-top:250.9pt;width:109.25pt;height:61.55pt;z-index:251655680;\r\n mso-position-horizontal-relative:page;mso-position-vertical-relative:page\'\r\n o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image007.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->untu<!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1029\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:457.5pt;margin-top:250.9pt;width:81.55pt;height:61.2pt;\r\n z-index:251654656;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image009.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->k meningkatkan kecerdasan berbicara dan mengemukakan pendapat. Sedangkan Kelas 2B berkreasi membuat vas bunga dari plastisin.</p><p><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1031\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:71.05pt;margin-top:324.5pt;width:78.5pt;height:62.45pt;\r\n z-index:251656704;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image011.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]--><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1032\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:151.65pt;margin-top:324.85pt;width:44.4pt;\r\n height:61.95pt;z-index:251657728;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image013.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]--><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1033\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:197.25pt;margin-top:324.95pt;width:101.85pt;\r\n height:61.55pt;z-index:251658752;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image015.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->Digelarnya Festival Makanan Khas Daerah oleh Kelas 3 yang juga melibatkan Kepala Madrasah beserta guru-guru dari kelas lain, merupakan salah satu kegiatan penanaman <em>Hubbul Wathon</em> di MINU Putri.</p><p>Kegiatan pembelajaran juga dilaksanakan di luar kelas, sepert<!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1037\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:475.7pt;margin-top:411.5pt;width:64.85pt;height:57.1pt;\r\n z-index:251662848;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image017.jpg\"\r\n  o:title=\"\" croptop=\"22270f\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->i yang <!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1036\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:410.3pt;margin-top:410.95pt;width:63.75pt;\r\n height:58pt;z-index:251661824;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image019.jpg\"\r\n  o:title=\"\" croptop=\"15335f\" cropbottom=\"5445f\" cropleft=\"-1571f\" cropright=\"1571f\"\r\n  embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->dilakukan oleh Kelas 4. Mereka diajak untuk membuat media persemaian bibit tanaman menggunakan polibag.</p><p>&nbsp;</p><p><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1035\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:72.35pt;margin-top:479.25pt;width:74.55pt;\r\n height:50.5pt;z-index:251660800;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image021.jpg\"\r\n  o:title=\"\" cropleft=\"2699f\" cropright=\"8398f\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]--><!--[if gte vml 1]><v:shape\r\n id=\"_x0000_s1034\" type=\"#_x0000_t75\" style=\'position:absolute;left:0;\r\n text-align:left;margin-left:148.3pt;margin-top:479.4pt;width:89.4pt;height:50.3pt;\r\n z-index:251659776;mso-position-horizontal-relative:page;\r\n mso-position-vertical-relative:page\' o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image023.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]-->Jiwa seni peserta didik Kelas 5 juga terasah melalui materi Pola Lantai Dalam Seni Tari Daerah yaitu Tari Jaran Kepang dari Jawa Timur.<!--[if gte vml 1]><v:shape id=\"_x0000_s1038\"\r\n type=\"#_x0000_t75\" style=\'position:absolute;left:0;text-align:left;\r\n margin-left:459.9pt;margin-top:534.25pt;width:80.3pt;height:53.4pt;z-index:251663872;\r\n mso-position-horizontal-relative:page;mso-position-vertical-relative:page\'\r\n o:preferrelative=\"f\">\r\n <v:fill rotate=\"t\"/>\r\n <v:imagedata src=\"file:///C:\\Users\\AKHIMU~1\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image025.jpg\"\r\n  o:title=\"\" embosscolor=\"white\"/>\r\n <w:wrap type=\"square\" anchorx=\"page\" anchory=\"page\"/>\r\n</v:shape><![endif]--></p><p>Sedangkan Kelas 6, dengan bimbingan guru melaksanakan Uji Coba Ujian Berbasis IT (Try Out BK), yang beberapa waktu belakangan ini mulai dilaksanakan di semua lembaga pendidikan.</p><p>Berbagai kegiatan pembelajaran di MINU Putri dilaksanakan dengan mengacu pada Kurikulum 2013 yang dikombinasikan dan dikembangkan oleh masing-masing guru serta diterapkan sesuai dengan kondisi lingkungan madrasah, agar hasil pembelajaran yang dicapai optimal. (dp).</p>', '2020-06-27', '20200627-keceriaan-peserta-didik-di-minu-.jpg', 3),
(20, 'Lomba Pramuka', '<p>Gerakan pramuka dalam melaksanakan tugas pokoknya mencapai tujuan, dengan menyelenggarakan Pendidikan kepramukaan dalam bentuk kegiatan yang sehat, menarik, terarah terencana, dialam. Terbuka menggunakan prinsip dasar kepramukaan dan metode kepramukaan.</p><p>Sasaran kepramukaan di Indonesia adalah mempersiapkan kader bangsa yang memiliki kepribadian dan kepimimpinan yang berjiwa Pancasila, disiplin, sehat mental, moral dan fisiknya berjiwa patriot, berkemampuan untuk berkarya dengan semangat kemandirian, bertanggung jawab, peduli dan komitmen terhadap kode kehormatan pramuka.</p><p>Kegiatan-kegiatan dalam kepramukaan untuk mencapai sasaran tersebut merupakan kegiatan yang menantang, sesuai dengan kepentingan dan kepentingan pramuka serta situasi dan kondisi, dengan menerapkan prinsip modern, bermanfaat dan atas dasar asas.</p><p>Kegiatan yang berkelompok, bekerjasama dan berkompetisi merupakan salah satu metode Pendidikan yang efektif dalam mencapai tujuan dan sasaran gerakan pramuka. Lomba dalam Gerakan pramuka adalah kegiatan Pendidikan yang menarik.</p><p>Berlomba bukan hanya untuk menang tetapi berlomba untuk mengamalkan kode kehormatan pramuka yaitu Trisatya dan Dasadarma. Lomba tingkat regu pramuka siaga/ penggalang merupakan salah satu cara untuk mencapai maksud tersebut diatas.</p>', '2020-06-27', '20200627-lomba-pramuka.jpg', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(50) DEFAULT NULL,
  `pembina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id`, `nama_ekskul`, `pembina`) VALUES
(3, 'Pramuka', 21),
(4, 'Pagar Nusa', 16),
(5, 'Drum Band', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`) VALUES
(15, 'Lailatuk Qomaria, S.Odl', 1, 'P', '081273737377', 'Malang', '1970-08-20', 'MTK', 'Malang', 'lailatuk-qomaria,-s.odl.jpg'),
(16, 'Ryan Andriansyah, S.Pd', 2, 'L', '0812733633', 'Malang', '1996-02-21', 'Kelas', 'Malang', 'ryan-andriansyah,-s.pd.jpg'),
(17, 'Dra. SRI AKHATIN', 3, 'P', '087655363', 'Malang', '1970-07-21', 'Kelas', 'Malang', 'dra.-sri-akhatin.jpg'),
(18, 'Dra. AINI SOFIATI', 4, 'P', '08973613', 'Malang', '1978-03-21', 'Kelas', 'Malang', 'dra.-aini-sofiati.jpg'),
(19, 'ZAHROTUR ROSYIDAH', 5, 'P', '08533733', 'Malang', '1989-12-31', 'Kelas', 'Malang', 'zahrotur-rosyidah.jpg'),
(20, 'A GHULAM', 6, 'L', '0832555222', 'Malang', '1980-07-09', 'Kelas', 'Malang', 'a-ghulam.jpg'),
(21, 'ASYA\'ADAH, S.Pd', 7, 'P', '0876566622', 'Malang', '1990-12-09', 'Kelas', 'Malang\r\n', '.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
(3, 'Kegiatan Sekolah'),
(10, 'Event');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  `walikelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama_kelas`, `walikelas`) VALUES
(9, '6A', 15),
(12, '6B', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` int(4) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(80) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nama`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `foto`, `id_kelas`) VALUES
(5, 'ABDUL QODIR', 1, 'L', 'Malang', '2006-02-08', 'Malang', '08766373', 'abdul-qodir.jpg', 9),
(6, 'KAMILATUN NAZILAH', 2, 'P', 'Malang', '2006-09-21', 'Malang', '0876788778', 'kamilatun-nazilah.jpg', NULL),
(7, 'KHILMI KHAIDAR FACHI', 3, 'L', 'Malang', '2005-02-02', 'Malang', '0878787', 'khilmi-khaidar-fachi.jpg', NULL),
(8, 'MOCH WILDAN HARUN AL RASYID', 4, 'L', 'Malang', '2006-06-12', 'Malang', '089877676', 'moch-wildan-harun-al-rasyid.jpg', NULL),
(9, 'MUCHAMAD ADAM FADHILAL', 5, 'L', 'Malang', '2006-08-09', 'Malang', '0876565', 'muchamad-adam-fadhilal.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentang_website`
--

CREATE TABLE `tbl_tentang_website` (
  `id` int(11) NOT NULL,
  `tentang_website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tentang_website`
--

INSERT INTO `tbl_tentang_website` (`id`, `tentang_website`) VALUES
(1, '<p><strong>PROFIL MADRASAH</strong></p><p><strong>A.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>IDENTITAS MADRASAH</strong></p><p>Nama Madrasah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; MINU &ldquo;Putri&rdquo;</p><p>Nomor Statistik Madrasah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 111235730026</p><p>Alamat Madrasah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Jl. Yulius Usman 14 B</p><p>Kelurahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Kasin</p><p>Kecamatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Klojen</p><p>Kota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Malang</p><p>Propinsi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Jawa Timur</p><p>Kode Pos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 65117</p><p>Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; (0341) 359490</p><p>e-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; <a href=\"mailto:minu.putri@yahoo.co.id\">minu.putri@yahoo.co.id</a></p><p>Daerah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Perkotaan</p><p>Status Madrasah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Swasta</p><p>Akreditasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; B</p><p>No. Akreditasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Dd. 200472</p><p>Penerbit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; BAN-SM</p><p>Tahun Berdiri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 1933</p><p>Tahun Perubahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 1960</p><p>K B M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Masuk Pagi</p><p>Bangunan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Milik Sendiri</p><p>Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Dekat Perkampungan</p><p>Jarak ke Kecamatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; &plusmn; 3 km</p><p>Jarak ke Otoda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; &plusmn; 1 km</p><p>Terletak pada lintasan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Kecamatan</p><p>Organisasi Penyelenggara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Yayasan LP Maarif NU Kota Malang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>IDENTITAS KEPALA MADRASAH</strong></p><p>Nama Kepala Madrasah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; KARSONO, S.Pd.I</p><p>N I P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; -</p><p>Tempat / Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Banjarnegara, 10 Desember 1967</p><p>Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Laki-laki</p><p>Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Islam</p><p>Pendidikan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Sarjana ( S1 )</p><p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Jl. LA. Sucipto Gang Stasiun No. 28 Malang</p><p>No. Telp / Hp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 085100103921</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
(1, '<p><strong>&nbsp;&nbsp;</strong><strong>Visi Madrasah</strong></p><p>&ldquo;Unggul dalam Prestasi, Disiplin dalam belajar, Terbina dalam keteladanan, dengan bernuansa iman dan taqwa serta ilmu pengetahuan dan teknologi&rdquo;</p><p>Indikator :</p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya pengembangan kurikulum yang berkualitas</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya proses pembelajran aktif.</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya lulusan yang cerdas dan berkompetitif, beriman dan bertaqawa,&nbsp; serta berbudi pekerti luhur.</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya kegiatan pengembangan diri.</p><p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya sarana dan prasarana serta media pendidikan seimbang dengan perkembangan iptek.</p><p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya optimalisasi tenaga kependidikan yang berkompeten, berdedikasi tinggi.</p><p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya manajemen pendidikan yang tanggap dan tangguh, serta optimalisasi partisipasi stakeholder.</p><p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terwujudnya pengelolaan sumber dana dan biaya pendidikan yang memadai.</p><p><strong>&nbsp;</strong></p><p><strong>&nbsp;&nbsp; Misi Madrasah</strong></p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mewujudkan madrasah unggulan, unggul dalam prestasi akademis dan ekstrakurikuler.</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menciptakan budaya belajar, bekerja serta kerja kondusif dengan bernuansa imtaq dan iptek serta kedisiplinan yang tinggi.</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembinaan siswa, kinerja guru dan personil dengan semangat keteladanan dan dedikasi tinggi</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengintensifkan 9K (keteladanan, keterbukaan, keamanan, kebersihan, ketertiban, keindahan, kerindangan, kekeluargaan, kesehatan).</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `username`, `password`, `pass`) VALUES
(1, 'Sutan Kumala', 'Cikampek Karawang', '089650007015', 'sutanhost@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` longtext NOT NULL,
  `tgl_posting` date NOT NULL,
  `penerbit` varchar(10) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `isi`, `tgl_posting`, `penerbit`, `status`) VALUES
(1, 'Alma Prayuda Menjadi Hacker', 'Siapa yang tidak tahu Hack Bae ? ya, ternyata HackBae adalah Alma Prayuda', '2019-11-19', 'admin', 'aktif'),
(2, 'COVID-19', 'Gausah keluar, biar aku aja yang kerumah :)\r\n#DirumahAja', '2020-04-14', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file_materi`
--

CREATE TABLE `tb_file_materi` (
  `id_materi` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `id_mapel` int(4) NOT NULL,
  `nama_file` varchar(250) NOT NULL,
  `tgl_posting` date NOT NULL,
  `pembuat` varchar(10) NOT NULL,
  `hits` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file_materi`
--

INSERT INTO `tb_file_materi` (`id_materi`, `judul`, `id_kelas`, `id_mapel`, `nama_file`, `tgl_posting`, `pembuat`, `hits`) VALUES
(6, 'Membuat Halaman Registrasi pada Website', 2, 5, 'p1-2.png', '2019-10-13', 'admin', 3),
(7, 'Contoh Website Bangkrut', 5, 5, 'icon.png', '2019-11-19', 'admin', 4),
(8, 'COVID-19', 5, 6, 'hacker (2).jpg', '2020-04-14', '2', 1),
(9, 'Materi IPA', 6, 7, 'kelas06_ipa_dwi.pdf', '2020-06-27', '6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_history`
--

INSERT INTO `tb_history` (`id_history`, `id_siswa`, `id_kelas`) VALUES
(10, 22, 12),
(11, 22, 12),
(12, 43, 12),
(13, 43, 11),
(14, 43, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id` int(11) NOT NULL,
  `id_tq` int(4) NOT NULL,
  `id_soal` int(4) NOT NULL,
  `id_siswa` int(4) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id`, `id_tq`, `id_soal`, `id_siswa`, `jawaban`) VALUES
(59, 6, 9, 10, 'Formulir Pendaftaran pada website'),
(63, 23, 16, 14, 'gajah'),
(68, 26, 18, 43, 'jawab'),
(69, 28, 21, 13, 'soal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `wali_kelas` int(5) NOT NULL,
  `ketua_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `ruang`, `wali_kelas`, `ketua_kelas`) VALUES
(6, '6A', '6-A', 7, 14),
(7, '6B', '6-B', 5, 0),
(8, '5', '5', 6, 0),
(9, '4', '4', 8, 0),
(10, '3', '3', 9, 0),
(11, '2', '2', 10, 0),
(12, '1', '1', 11, 0),
(13, '1A', '1A', 0, 0),
(14, '1B', '1B', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas_ajar`
--

CREATE TABLE `tb_kelas_ajar` (
  `id` int(11) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_pengajar` int(5) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas_ajar`
--

INSERT INTO `tb_kelas_ajar` (`id`, `id_kelas`, `id_pengajar`, `keterangan`) VALUES
(8, 6, 6, '6A'),
(9, 8, 7, '5 Ceria'),
(10, 8, 9, ''),
(11, 12, 6, '1 A'),
(12, 14, 6, '1B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id`, `kode_mapel`, `mapel`) VALUES
(7, 'IPA01', 'Ilmu Pengetahuan Alam'),
(8, 'MTK01', 'Matematika'),
(9, 'BI01', 'Bahasa Indonesia'),
(10, 'BIG01', 'Bahasa Indonnesia'),
(11, 'IPS01', 'Ilmu Pengetahuan Sosial'),
(12, 'PKN01', 'Pendidikan Kewarganegaraan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel_ajar`
--

CREATE TABLE `tb_mapel_ajar` (
  `id` int(11) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_pengajar` int(5) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel_ajar`
--

INSERT INTO `tb_mapel_ajar` (`id`, `id_mapel`, `id_kelas`, `id_pengajar`, `keterangan`) VALUES
(2, 7, 6, 6, '6A'),
(3, 7, 8, 7, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_essay`
--

CREATE TABLE `tb_nilai_essay` (
  `id` int(11) NOT NULL,
  `id_tq` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_essay`
--

INSERT INTO `tb_nilai_essay` (`id`, `id_tq`, `id_siswa`, `nilai`) VALUES
(16, 23, 14, 80),
(21, 26, 43, 70),
(22, 28, 13, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_pilgan`
--

CREATE TABLE `tb_nilai_pilgan` (
  `id` int(11) NOT NULL,
  `id_tq` int(4) NOT NULL,
  `id_siswa` int(4) NOT NULL,
  `benar` int(4) NOT NULL,
  `salah` int(4) NOT NULL,
  `tidak_dikerjakan` int(4) NOT NULL,
  `presentase` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_pilgan`
--

INSERT INTO `tb_nilai_pilgan` (`id`, `id_tq`, `id_siswa`, `benar`, `salah`, `tidak_dikerjakan`, `presentase`) VALUES
(41, 23, 14, 5, 4, 0, 56),
(44, 24, 18, 3, 5, 1, 33),
(45, 25, 13, 1, 0, 0, 100),
(49, 26, 43, 5, 0, 0, 100),
(50, 28, 13, 1, 0, 0, 100),
(54, 23, 13, 1, 0, 0, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `web` varchar(60) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `email`, `alamat`, `jabatan`, `tahun_ajar`, `foto`, `web`, `username`, `password`, `pass`, `status`) VALUES
(5, '1', 'LAILATUL QOMARIA, S. PdI', 'Malang', '1970-08-20', 'P', 'Islam', '08127373773', 'qomariyah@gmail.com', 'Malang', 'Guru MTK', '2020/2021', 'laila.PNG', '', 'qomariyah', '44e2801fa13880bb27bf2c1ad385d99b', 'qomariyah', 'aktif'),
(6, '2', 'RYAN ANDRIANSYAH, S. Pd', 'Malang', '1996-02-21', 'L', 'Islam', '0812733633', 'ryan@gmail.com', 'Malang', 'Guru Kelas', '2020/2021', 'ryan.PNG', '', 'ryan', '10c7ccc7a4f0aff03c915c485565b9da', 'ryan', 'aktif'),
(7, '3', 'Dra. SRI AKHATIN', 'Malang', '1970-07-21', 'P', 'Islam', '087655363', 'sri@gmail.com', 'Malang\r\nmlg', 'Guru Kelas', '2021/2022\r\n2022/2023', 'sri.PNG', '', 'sri', 'd1565ebd8247bbb01472f80e24ad29b6', 'sri', 'aktif'),
(8, '4', 'Dra. AINI SOFIATI', 'Malang', '1978-03-21', 'P', 'Islam', '08973613', 'aini@gmail.com', 'Malang', 'Guru Kelas', '2020/2021', 'aini.PNG', '', 'aini', '8274b82aa057f3df1908084f14c55ec3', 'aini', 'aktif'),
(9, '5', 'ZAHROTUR ROSYIDAH', 'Malang', '1989-12-31', 'P', 'Islam', '08533733', 'zahro@gmail.com', 'Malang', 'Guru Ekskul', '', 'anonim.png', '', 'zahroh', '78c595f082ac974abeb797a381552d0a', 'zahroh', 'aktif'),
(10, '6', 'A GHULAM', 'Malang', '1980-07-08', 'L', 'Islam', '0832555222', 'ghulam@gmail.com', 'Malang', 'Guru Kelas', '2020/2021', 'foto ayah.jpg', '', 'ghulam', 'f691d2e02b9fba535b691392d886902c', 'ghulam', 'aktif'),
(11, '7', 'ASYA’ADAH, S. Pd', 'Malang', '1990-12-09', 'P', 'Islam', '0876566622', 'asya@gmail.com', 'Malang', 'Guru Kelas', '2020/2021', 'IMG_20200202_151339.jpg', '', 'asya', 'd32eb4766e76a8b4986325016593e4ab', 'asya', 'aktif'),
(12, '121', 'cb', 'malang', '2020-07-05', 'L', 'Islam', '0893737733', 'cb@gmail.com', 'malang', 'kelas', '', 'arin.jpg', '', 'cb', 'd0d7fdb6977b26929fb68c6083c0b439', 'cb', 'aktif'),
(13, '121212', 'lagi', 'mlg', '2020-06-28', 'L', 'Kristen', '089373663', 'lg@gmail.com', 'malang\r\n', 'Guru Kelas', '2020/2023', 'karsono,-s.-pdi.jpg', '', 'lg', 'a608b9c44912c72db6855ad555397470', 'lg', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumus`
--

CREATE TABLE `tb_rumus` (
  `id_rumus` int(11) NOT NULL,
  `esay` decimal(4,2) NOT NULL,
  `pilgan` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rumus`
--

INSERT INTO `tb_rumus` (`id_rumus`, `esay`, `pilgan`) VALUES
(1, '0.60', '0.40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `thn_masuk` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `nama_ayah`, `nama_ibu`, `no_telp`, `email`, `alamat`, `id_kelas`, `thn_masuk`, `foto`, `username`, `password`, `pass`, `status`) VALUES
(13, '1', 'ABDUL QODIR', 'Malang', '2006-02-08', 'L', 'Islam', 'Abdul Munir', 'Qorina', '08767777765', 'abdul@gmail.com', 'Malang', '6', 2014, 'anonim.png', 'abdul', '82027888c5bb8fc395411cb6804a066c', 'abdul', 'aktif'),
(14, '2', 'KAMILATUN NAZILAH', 'Malang', '2006-09-21', 'P', 'Islam', 'Zamroh', 'Zahroh', '08765643334', 'kamil@gmail.com', 'Malang', '6', 2014, 'anonim.png', 'kamil', '11d462a4a1b14b00580d8020d6f64998', 'kamil', 'aktif'),
(15, '3', 'KHILMI KHAIDAR FACHI', 'Malang', '2005-02-02', 'L', 'Islam', 'Teguh', 'Susi', '0896466444', 'khilmi@gmail.com', 'Malang', '6', 2014, 'anonim.png', 'khilmi', 'd613e3e68f4f9c16e788fa8299ab0edb', 'khilmi', 'aktif'),
(16, '4', 'MOCH WILDAN HARUN AL RASYID', 'Malang', '2006-06-12', 'L', 'Islam', 'wahyu', 'yuni', '08977767765', 'wildan@gmail.com', 'Malang', '6', 2015, 'anonim.png', 'wildan', 'af6b3aa8c3fcd651674359f500814679', 'wildan', 'aktif'),
(17, '5', 'MUCHAMAD ADAM FADHILAH', 'Malang', '2006-08-09', 'L', 'Islam', 'Adam', 'Hawa', '0876756567', 'adam@gmail.com', 'Malang', '6', 2014, 'anonim.png', 'adam', '1d7c2923c1684726dc23d2901c4d8157', 'adam', 'aktif'),
(18, '12', 'Ahmad Riza', 'Malang', '2010-09-21', 'L', 'Islam', 'Mohammad', 'Aisyah', '08292737738', 'ahmad@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'ahmad', 'aktif'),
(19, '191', 'ACHMAD JAMIL MAULANA ISHAQ', 'Malang', '2012-12-28', 'L', 'Islam', 'SOLEH', 'SITI', '087483839877', 'jamil@gmail.com', 'Malang', '12', 2019, 'anonim.png', 'jamil', '0e2cc23df7e37a854499f9d918b0219d', 'jamil', 'aktif'),
(20, '192', 'ACHMAD ASADULLAH', 'Malang', '2012-06-08', 'L', 'Islam', 'Iqbal', 'Indah', '08123647733', 'asa@gmail.com', 'Malang', '12', 2019, 'anonim.png', 'asa', '457391c9c82bfdcbb4947278c0401e41', 'asa', 'aktif'),
(21, '193', 'AHMAD ARYAN', 'Malang', '2012-11-03', 'L', 'Islam', 'Safiin', 'Siti', '087656533334', 'aryan@gmail.com', 'Malang', '12', 2019, 'anonim.png', 'aryan', 'e2071528cf1aa685779d9898ccd9b308', 'aryan', 'aktif'),
(22, '194', 'AHMAD SALMAN BAIHAQY', 'Malang', '2012-04-09', 'L', 'Islam', 'Rio', 'Nurul', '0812345267', 'salman@gmail.com', 'Malang', '7', 2019, 'anonim.png', 'salman', '03346657feea0490a4d4f677faa0583d', 'salman', 'aktif'),
(23, '195', 'AISYAH APRILLYANA LAILATUL MUFIDAH', 'Malang', '2012-04-09', 'P', 'Islam', 'Jamroni', 'Nikmatul', '0828773873', 'aisyah@gmail.com', 'Malang', '12', 2019, 'anonim.png', 'aisyah', '26bb533df5747c7a3f2a9cc48a8cf3ee', 'aisyah', 'aktif'),
(24, '196', 'ALYA NUR NAFISHA', 'Malang', '2012-04-13', 'P', 'Islam', 'Widodo', 'Dian', '0892877737', 'alya@gmail.com', 'Malang', '12', 2019, 'anonim.png', 'alya', '11928ca22a60b25479e3f0799a0a3d5f', 'alya', 'aktif'),
(25, '181', 'ABDULLAH', 'Malang', '2012-04-26', 'L', 'Islam', 'Abdul', 'Warda', '0881283833', 'abdul@gmail.com', 'Malang', '11', 2018, 'anonim.png', 'abdullah', 'd93ec75bca4b7ef88df5a6c591654422', 'abdullah', 'aktif'),
(26, '182', 'ABDULLAH AHMAD', 'Malang', '2011-08-29', 'L', 'Islam', 'Achmadi', 'Abdul', '0837374432', 'abdullah@gmail.com', 'Malang', '11', 2018, 'anonim.png', 'ahmadul', '37325057d6e1a9ec63e806e7dc02f0d5', 'ahmadul', 'aktif'),
(27, '171', 'ACHMAD FAUZI', 'Malang', '2010-12-03', 'L', 'Islam', 'ABDUL CHOLIQ', 'CHOLILAH', '08978666765', 'fauzi@gmail.com', 'Malang', '10', 2017, 'anonim.png', 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', 'fauzi', 'aktif'),
(28, '172', 'AFRIZAL RIZQY ARDIAN', 'Bondowoso', '2010-10-12', 'L', 'Islam', 'ARIF KURNIAWAN', 'SRI DIAH ROMLAH', '08737664527', 'afrizal@gmail.com', 'Malang', '10', 2017, 'anonim.png', 'afrizal', '8dd1c41fe9a651884fa0a7802a6aeb85', 'afrizal', 'aktif'),
(29, '173', 'AISYAH AULIA MUTIARA PUTRI', 'Malang', '2010-11-19', 'P', 'Islam', 'AKHMAD GOZALI', 'ENY IRAWATI', '08127362677', 'aisyahaulia@gmail.com', 'Malang', '10', 2017, 'anonim.png', 'aulia', '614913bc360cdfd1c56758cb87eb9e8f', 'aulia', 'aktif'),
(30, '174', 'DZAHABIYATUL QULUQ ABIDAH', 'Malang', '2011-07-13', 'P', 'Islam', 'SUKARDI', 'INDRI ASTRI', '087654356', 'dza@gmail.com', 'Malang', '10', 2017, 'anonim.png', 'dza', 'f3cfd8e7b97e82dad6cca964ddc71804', 'dza', 'aktif'),
(31, '161', 'ABDUS SALAM PUTRA HANDOKO', 'Malang', '2010-04-12', 'L', 'Islam', 'EMA DWI HANDOKO', 'RESTI MAIMUNAH H', '086545433', 'abdus@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'abdus', '99ceebb831df570c46a501727a94897c', 'abdus', 'aktif'),
(32, '162', 'ACHMAD ALFAREZI', 'Malang', '2007-10-15', 'L', 'Islam', 'SUTRISNO', 'UMI KOMARIYAH', '0876534532', 'alfa@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'alfa', '56aed7e7485ff03d5605b885b86e947e', 'alfa', 'aktif'),
(33, '163', 'ADLY FAYRUZ', 'PAMEKASAN', '2009-10-09', 'L', 'Islam', 'MOH PUHAM', 'ROMHANA', '0876534322', 'adly@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'adly', 'b57364a56db3e45edd2c768a7c1fd150', 'adly', 'aktif'),
(34, '164', 'AHMAD FAKHRI BASYIRUDIN', 'Malang', '2009-09-25', 'L', 'Islam', 'ARIF SUBASIR, AMD', 'DIAN PUSPARINI', '08765434655', 'fakhri@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'fakhri', '68b91a181c612783782742faf60f1dff', 'fakhri', 'aktif'),
(35, '165', 'AISYAH SAFITRI', 'Malang', '2010-06-04', 'P', 'Islam', 'ASPIRIN', 'SITI HANDAYANI', '08765676767', 'safitri@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'safitri', '69506b30694abfc7fe7a43b197188180', 'safitri', 'aktif'),
(36, '166', 'FATIMAH ', 'Malang', '2010-05-01', 'P', 'Islam', 'AHMAD HUSAIRI', 'ERNA IRAWATI', '08543434326', 'fatimah@gmail.com', 'Malang', '9', 2016, 'anonim.png', 'fatimah', '3610528e7fee68c6ffb0445603ef2c8e', 'fatimah', 'aktif'),
(37, '151', 'ALFINATUZ ZAHRA ALIYA', 'Malang', '2008-03-13', 'P', 'Islam', 'ACHMAD ZAMRONI ALFAN', 'DIAN ARIANI', '08543232356', 'aliya@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'aliya', 'e3cb970693574ea75d091a6049f8a3ff', 'aliya', 'aktif'),
(38, '152', 'ATHIYAH FADI AFHIYAH RAMADHANI', 'Blitar', '2008-09-20', 'P', 'Islam', 'ADY WAHYONO', 'ULFA INDAH', '08976765567', 'athi@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'athi', '1b47e01486bbd74137716457e828a709', 'athi', 'aktif'),
(39, '153', 'CHALWA MUMTAZAH AHSANIAH', 'Malang', '2009-05-19', 'P', 'Islam', 'M. AHSAN', 'BADIATUL CHUSNIAH', '08125377849', 'chalwa@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'chalwa', 'd8c8a932a4a6bce135c8b329c1488287', 'chalwa', 'aktif'),
(40, '154', 'IZZATUL MAULA', 'Malang', '2009-01-21', 'P', 'Islam', 'USMAN', 'NURUL HIDAYATI', '0876567997', 'izza@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'izza', '4b569f5568af7aea0bd5b56c8267d22c', 'izza', 'aktif'),
(41, '155', 'MALEEK CHAMZAH SYAHPUTRA', 'Makang', '2009-11-11', 'L', 'Islam', 'HARI SUSANTO', 'EMMY HARTANTI', '08123465545', 'maleek@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'maleek', 'a3f859f5a3f7f8764b6db9c17b5aa457', 'maleek', 'aktif'),
(42, '156', 'M. AZHAR SYARIF ZARKASYI', 'Malang', '2008-10-09', 'L', 'Islam', 'ARIEF ZAKARIA', 'LILIK KAROMAH', '0854347988', 'azhar@gmail.com', 'Malang', '8', 2015, 'anonim.png', 'azhar', '838e24a98647b16ed33f20774b2e3502', 'azhar', 'aktif'),
(43, '2017', 'Siswa Kelas 1', 'Malang', '2020-07-05', 'P', 'Islam', 'Ayah', 'Ibu', '07786633', 'siswa@gmail.com', 'malang', '10', 2020, 'arin.jpg', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_essay`
--

CREATE TABLE `tb_soal_essay` (
  `id_essay` int(11) NOT NULL,
  `id_tq` int(5) NOT NULL,
  `pertanyaan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_essay`
--

INSERT INTO `tb_soal_essay` (`id_essay`, `id_tq`, `pertanyaan`, `gambar`, `tgl_buat`) VALUES
(18, 26, 'bahasa indonesia', 'arin.jpg', '2020-07-28'),
(19, 25, 'soal\r\n', '', '2020-07-28'),
(20, 25, 'soal', '', '2020-07-28'),
(21, 28, 'soal', '', '2020-07-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_pilgan`
--

CREATE TABLE `tb_soal_pilgan` (
  `id_pilgan` int(11) NOT NULL,
  `id_tq` int(5) NOT NULL,
  `pertanyaan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pil_a` text NOT NULL,
  `pil_b` text NOT NULL,
  `pil_c` text NOT NULL,
  `pil_d` text NOT NULL,
  `pil_e` text NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_pilgan`
--

INSERT INTO `tb_soal_pilgan` (`id_pilgan`, `id_tq`, `pertanyaan`, `gambar`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `pil_e`, `kunci`, `tgl_buat`) VALUES
(64, 26, 'Cermati kalimat berikut!\nPantai Merubetiri merupakan tempat penangkaran penyu hijau di Pulau Jawa\nArti kata bercetak miring adalah ', '1', 'tempat tinggal', 'tempat merawat', 'tempat pembiakan', 'tempat memelihara', 'tempat bermain', 'A', '0000-00-00'),
(65, 26, 'Bacalah teks berikut!\nHutan bakau atau disebut juga hutan mangrove adalah hutan yang tumbuh di air payau,dan dipengaruhi oleh pasang-surut air laut. Hutan ini tumbuh khususnya di tempat-tempat di mana terjadi pelumpuran dan akumulasi bahan organik. Baik di teluk-teluk yang terlindung dari gempuran ombak, maupun di sekitar muara sungai di mana air melambat dan mengendapkan lumpur yang dibawanya dari hulu\nEkosistem hutan bakau bersifat khas, baik karena adanya pelumpuran yang mengakibatkan kurangnya abrasi tanah; salinitas tanahnya yang tinggi; serta mengalami daur penggenangan oleh pasang-surut air laut. Hanya sedikit jenis tumbuhan yang bertahan hidup di tempat semacam ini, dan jenis-jenis ini kebanyakan bersifat khas hutan bakau karena telah melewati proses adaptasi dan evolusi.\nAntonim kata melambat adalah  ….', '2', 'berpelan-pelan', 'bergelombang', 'mempercepat', 'menuju', 'melambat', 'A', '0000-00-00'),
(66, 26, 'Bacalah teks berikut!\nHutan bakau atau disebut juga hutan mangrove adalah hutan yang tumbuh di air payau,dan dipengaruhi oleh pasang-surut air laut. Hutan ini tumbuh khususnya di tempat-tempat di mana terjadi pelumpuran dan akumulasi bahan organik. Baik di teluk-teluk yang terlindung dari gempuran ombak, maupun di sekitar muara sungai di mana air melambat dan mengendapkan lumpur yang dibawanya dari hulu.\nEkosistem hutan bakau bersifat khas, baik karena adanya pelumpuran yang mengakibatkan kurangnya abrasi tanah; salinitas tanahnya yang tinggi; serta mengalami daur penggenangan oleh pasang-surut air laut. Hanya sedikit jenis tumbuhan yang bertahan hidup di tempat semacam ini, dan jenis-jenis ini kebanyakan bersifat khas hutan bakau karena telah melewati proses adaptasi dan evolusi.\nKalimat informasi yang sesuai dengan paragraf pertama adalah ...\n', '3', 'hutan bakau merupakan hutan yang tumbuh di air payau', 'hutan mangrove tidak dipengaruhi adanya pasangnya air laut', 'hanya sedikit jenis tumbuhan yang bertahan hidup di tepi pantai', 'tumbuhan pinus hidup di tempat-tempat di mana terjadi pelumpuran dan akumulasi bahan organik', '', 'A', '0000-00-00'),
(67, 26, 'Bacalah teks berikut!\nHutan bakau atau disebut juga hutan mangrove adalah hutan yang tumbuh di air payau,dan dipengaruhi oleh pasang-surut air laut. Hutan ini tumbuh khususnya di tempat-tempat di mana terjadi pelumpuran dan akumulasi bahan organik. Baik di teluk-teluk yang terlindung dari gempuran ombak, maupun di sekitar muara sungai di mana air melambat dan mengendap-kan lumpur yang dibawanya dari hulu.\n       Ekosistem hutan bakau bersifat khas, baik karena adanya pelumpuran yang mengakibatkan kurangnya abrasi tanah, salinitas tanah yang tinggi, serta mengalami daur penggenangan oleh pasang-surut air laut. Hanya sedikit jenis tumbuhan yang bertahan hidup di tempat semacam ini, dan jenis-jenis ini kebanyakan bersifat khas hutan bakau karena telah melewati proses adaptasi dan evolusi\nKalimat utama pada paragraf pertama adalah ...', '4', 'Hutan ini tumbuh khususnya di tempat-tempat di mana terjadi pelumpuran dan akumulasi bahan organik.', 'Hutan bakau atau disebut juga hutan mangrove adalah hutan yang tumbuh di air payau,dan dipengaruhi oleh pasang-surut air laut.', 'Baik di teluk-teluk yang terlindung dari gempuran ombak, maupun di sekitar muara sungai di mana air melambat dan mengendapkan lumpur yang dibawanya dari hulu.', 'Ekosistem hutan bakau bersifat khas, baik karena adanya pelumpuran yang mengakibatkan kurangnya abrasi tanah, salinitas tanah yang tinggi, serta mengalami daur penggenangan oleh pasang-surut air laut.', '', 'A', '0000-00-00'),
(68, 26, 'Bacalah teks berikut!\nPergilah Hasanah ke pasar menggunakan sepeda butut. Sesampai di pasar, dibelilah kebutuhan hidupnya bersama sang ibu yang sakit-sakitan. Setelah semua barang terbeli, ia kembali mengayuh sepeda tua menuju rumahnya yang hanya berupa gubuk di pinggir sungai.\nJenis paragraf tersebut adalah ….', '8', 'narasi', 'deskripsi', 'eksposisi', 'argumentasi', '', 'A', '0000-00-00'),
(69, 25, 'soal', 'Untitled.jpg', 'A', 'B', 'C', 'D', 'E', 'E', '2020-07-28'),
(70, 25, 'Siapa yang paling cantik', 'gambar.PNG', 'Pak Yuri', 'Bu Rosi', 'Bu Annisa', 'Nia', 'Ayu', 'A', '2020-07-28'),
(71, 28, 'Siapa yang paling cantik', 'gambar.PNG', 'Pak Yuri', 'Bu Rosi', 'Bu Annisa', 'Nia', 'Ayu', 'A', '2020-07-28'),
(72, 23, 'bla', '', 'a', 'b', 'c', 'd', 'e', 'C', '2020-08-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_topik_quiz`
--

CREATE TABLE `tb_topik_quiz` (
  `id_tq` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `tgl_buat` date NOT NULL,
  `pembuat` varchar(10) NOT NULL,
  `waktu_soal` int(8) NOT NULL,
  `info` varchar(250) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_topik_quiz`
--

INSERT INTO `tb_topik_quiz` (`id_tq`, `judul`, `id_kelas`, `id_mapel`, `tgl_buat`, `pembuat`, `waktu_soal`, `info`, `status`) VALUES
(18, 'Latihan Ujian MATEMATIKA', 6, 8, '2020-06-26', 'admin', 5400, 'Kerjakan dengan teliti\n', 'aktif'),
(20, 'Latihan Ujian Bahasa Indonesia', 7, 9, '2020-06-26', 'admin', 4200, 'KERJAKAN', 'aktif'),
(23, 'Latihan Ujian IPA', 6, 7, '2020-06-27', '6', 1800, 'Kerjakan', 'aktif'),
(24, 'Latihan Ujian', 8, 7, '2020-07-15', '7', 300, 'Kerjakan', 'aktif'),
(25, 'latian ujian ipa', 6, 7, '2020-07-28', '6', 120, 'Kerjakan', 'aktif'),
(26, 'Latihan Ujian Bi', 12, 9, '2020-07-28', '6', 1800, 'Kerjakan', 'aktif'),
(27, 'Latihan IPA', 6, 7, '2020-07-28', 'admin', 1800, 'KERJAKAN', 'aktif'),
(28, 'QUIZ IPA', 6, 7, '2020-07-28', '6', 1200, 'KERJAKAN', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembina` (`pembina`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_jurusan_ibfk_1` (`walikelas`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_kelas`);

--
-- Indeks untuk tabel `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_file_materi`
--
ALTER TABLE `tb_file_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_kelas_ajar`
--
ALTER TABLE `tb_kelas_ajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mapel_ajar`
--
ALTER TABLE `tb_mapel_ajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai_essay`
--
ALTER TABLE `tb_nilai_essay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai_pilgan`
--
ALTER TABLE `tb_nilai_pilgan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indeks untuk tabel `tb_rumus`
--
ALTER TABLE `tb_rumus`
  ADD PRIMARY KEY (`id_rumus`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_soal_essay`
--
ALTER TABLE `tb_soal_essay`
  ADD PRIMARY KEY (`id_essay`);

--
-- Indeks untuk tabel `tb_soal_pilgan`
--
ALTER TABLE `tb_soal_pilgan`
  ADD PRIMARY KEY (`id_pilgan`);

--
-- Indeks untuk tabel `tb_topik_quiz`
--
ALTER TABLE `tb_topik_quiz`
  ADD PRIMARY KEY (`id_tq`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_file_materi`
--
ALTER TABLE `tb_file_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas_ajar`
--
ALTER TABLE `tb_kelas_ajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel_ajar`
--
ALTER TABLE `tb_mapel_ajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_essay`
--
ALTER TABLE `tb_nilai_essay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_pilgan`
--
ALTER TABLE `tb_nilai_pilgan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_rumus`
--
ALTER TABLE `tb_rumus`
  MODIFY `id_rumus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_essay`
--
ALTER TABLE `tb_soal_essay`
  MODIFY `id_essay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_pilgan`
--
ALTER TABLE `tb_soal_pilgan`
  MODIFY `id_pilgan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_topik_quiz`
--
ALTER TABLE `tb_topik_quiz`
  MODIFY `id_tq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD CONSTRAINT `tbl_ekskul_ibfk_1` FOREIGN KEY (`pembina`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD CONSTRAINT `tbl_kelas_ibfk_1` FOREIGN KEY (`walikelas`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
