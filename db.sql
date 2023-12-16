-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 12:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp3m_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutp_section_aboutus`
--

CREATE TABLE `aboutp_section_aboutus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutp_section_aboutus`
--

INSERT INTO `aboutp_section_aboutus` (`id`, `judul`, `isi_konten`) VALUES
(3, 'Siapakah kami?', '<p>Badan Perencanaan, Pengembangan dan Penjaminan Mutu Politeknik Caltex Riau (BP3M PCR) merupakan salah satu bagian perangkat rektorat Politeknik Caltex Riau yang mengelola kegiatan perencanaan, pengembangan serta penjaminan mutu di Politeknik Caltex Riau. BP3M dibentuk pada tahun 2019 dengan tujuan untuk mengintegrasikan Bagian Perencanaan dan Pengembangan ke dalam Badan Penjaminan Mutu, sehingga kegiatan penjaminan mutu dapat selaras dengan kegiatan perencanaan dan pengembangan PCR.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `aboutp_section_struktur`
--

CREATE TABLE `aboutp_section_struktur` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutp_section_struktur`
--

INSERT INTO `aboutp_section_struktur` (`id`, `gambar`) VALUES
(1, 'struktur.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutp_section_tagline`
--

CREATE TABLE `aboutp_section_tagline` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutp_section_tagline`
--

INSERT INTO `aboutp_section_tagline` (`id`, `judul`, `isi_konten`) VALUES
(1, 'Jamin Kualitas, Kampus Berkelas', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `about_renbang`
--

CREATE TABLE `about_renbang` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_renbang`
--

INSERT INTO `about_renbang` (`id`, `judul`, `isi`) VALUES
(2, 'Apa itu Renbang?', '<p>Renbang merupakan singkatan dari Perencanaan dan Pengembangan yang tujuannya untuk merencanakan dan mengatur seluruh pelaksanaan kegiatan dan program yang diselenggarakan oleh institusi. Seluruh program kegiatan dapat diakses oleh publik menggunakan Sistem Kegiatan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `about_spmi`
--

CREATE TABLE `about_spmi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_spmi`
--

INSERT INTO `about_spmi` (`id`, `judul`, `isi`) VALUES
(1, 'Apa itu SPMI?', '<p>SPMI merupakan singkatan dari Sistem Penjaminan Mutu Internal yang tujuannya untuk meningkatkan pendidikan tinggi secara berencana dan berkelanjutan, yang dilakukan melalui penetapan, pelaksanaan, evaluasi dan peningkatan Standar Pendidikan Tinggi (SPT). Sistem ini dilakukan oleh setiap perguruan tinggi secara otonom untuk mengendalikan dan meningkatkan penyelenggara secara berencana dan berkelanjutan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default_berita.jpg',
  `status` varchar(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `kategori`, `judul`, `isi`, `gambar`, `status`, `tanggal`, `author`) VALUES
(12, 4, 'Workshop Audit Internal', '<p>Berikut kumpulan Workshop Audit Mutu Internal 2017</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/GUG.pdf\" rel=\"noopener\" target=\"_blank\">GUG</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/Kepemimpinan-Perguruan-Tinggi.pptx\" rel=\"noopener\" target=\"_blank\">Kepemimpinan Perguruan Tinggi</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/Materi-Pak-Hanafi.pptx\" rel=\"noopener\" target=\"_blank\">Materi Pak Hanafi</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/Semua-MAteri-TEORI-PERENCANAAN-PELAKSANAAN-AUDIT-MUTU-INTERNAL.pptx\" rel=\"noopener\" target=\"_blank\">Semua MAteri TEORI, PERENCANAAN, PELAKSANAAN AUDIT MUTU INTERNAL</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/TEORI-AUDIT-MUTU-INTERNAL.pdf\" rel=\"noopener\" target=\"_blank\">TEORI AUDIT MUTU INTERNAL</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/CHECKLIST-TEMUAN-AUDIT-00.xls\" rel=\"noopener\" target=\"_blank\">CHECKLIST-TEMUAN AUDIT-00</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006172120/http://bp3m.pcr.ac.id/wp-content/uploads/2018/04/Contoh-Laporan-KTS-Prodi-FILM-FIX-presentasi-EAZ.docx\" rel=\"noopener\" target=\"_blank\">Contoh Laporan KTS Prodi FILM FIX presentasi EAZ</a></li>\r\n</ul>\r\n', 'Maksum-PCR-SPMI-1024x768.jpg', 'Publish', '2018-04-16 09:06:01', 'admin'),
(13, 4, 'Seminar Budaya Mutu Bagi Pimpinan Perguruan Tinggi', '<p>Materi Seminar Budaya Mutu bagi Pimpinan Perguruan Tinggi yang diselenggarakan di Hotel Prime Park Pekanbaru pada 9 Agustus 2018.</p>\r\n\r\n<ol>\r\n	<li><a href=\"http://web.archive.org/web/20221006160117/http://bp3m.pcr.ac.id/wp-content/uploads/2018/08/Aris-Junaidi-9-Ags-2018.pptx\">Materi Pak Aris Junaidi, 9 Ags 2018</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006160117/http://bp3m.pcr.ac.id/wp-content/uploads/2018/08/Joni-H-Kepemimpinan-dalam-Manajemen-Mutu-PT.pdf\">Materi Pak Joni H, Kepemimpinan dalam Manajemen Mutu PT</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006160117/http://bp3m.pcr.ac.id/wp-content/uploads/2018/08/Kebijakan-Nasional-SPM-Dikti-dan-SPMI-2018.pdf\">Kebijakan Nasional SPM-Dikti dan SPMI&nbsp;2018</a></li>\r\n	<li><a href=\"http://web.archive.org/web/20221006160117/http://bp3m.pcr.ac.id/wp-content/uploads/2018/08/Panut-Budaya-Mutu-PT-PM-9-Agustus-2018.rar\">Materi Pak Panut, Budaya Mutu PT PM 9 Agustus 2018</a></li>\r\n</ol>\r\n', 'budaya-mutu-1024x6581.jpg', 'Publish', '2018-08-09 07:00:12', 'admin'),
(14, 2, 'Instrumen Akreditasi Perguruan Tinggi 3.0', '<p>Rangkuman Sosialisasi IAPT 3.0 di Hotel Prime Park Pekanbaru.<br />\r\nSabtu, 1 Desember 2018 oleh Prof. Dr.ing. Mulyadi Bur &ndash; UNAND.</p>\r\n\r\n<ul>\r\n	<li>Perbedaan Proses dan Paradigma\r\n	<ol>\r\n		<li>Tidak ada Borang, hanya Evaluasi Diri dan Laporan Kinerja</li>\r\n		<li>Asesor akan visit 1 hari lebih lama untuk proses pembuatan report</li>\r\n		<li>Hasil report akan diperiksa kembali 5 tahun yang akan datang, apakah rekomendasi yang diberikan dilakukan atau tidak.</li>\r\n		<li>LKPT akan diisi dalam format excel sampai akhir tahun 2020, mulai 2021 Data Sapto akan langsung sinkron dengan PD Dikti.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Pendahuluan\r\n	<ol>\r\n		<li>Sejarah akreditasi dimulai sejak 1989, milestone : 1994, 1996-1997, 1999-2001, 2006, 2009, 2011, 2013, 2015, 2017, dan pada 2018 dilaunching IAPT 3.0.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Penjelasan\r\n	<ol>\r\n		<li>Siklus Akreditasi dimulai dari Evaluasi Diri.</li>\r\n		<li>Laporan Monev dan AMI minimal 3 tahun terakhir.</li>\r\n		<li>Data Mahasiswa menjadi salah satu asesor, data tampung naik turun menjadi indikator ketidak konsistenan. (daya tampung sangat tergantung pada fasilitas dan sdm).</li>\r\n		<li>Dimensi yang diukur&nbsp; ;\r\n		<ul>\r\n			<li><strong>Mutu kepemimpinan dan Kinerja Tata Kelola</strong>: Integritas Visi dan Misi, kepemimpinan, sistem manajemen sumber daya, kemitraan stategis, dan SPMI</li>\r\n			<li><strong>Mutu dan Produktivitas luaran (outputs), capaian (outcomes), dan dampak (impacts)</strong>: Kualitas Lulusan, Produk Ilmiah dan Inovasi, serta Kebermanfaatan bagi masyarakat.</li>\r\n			<li><strong>Mutu Proses</strong>: Proses Pembelajaran, Penelitian, Pengabdian kepada Masyarakat, dan Suasana Akademik.</li>\r\n			<li><strong>Kinerja Mutu Input</strong>: Sumber Daya Manusia (dosen dan tenaga kependidikan), mahasiswa, kurikulum, sarana prasarana, keuangan (pembiayaan dan pendanaan)</li>\r\n		</ul>\r\n		</li>\r\n		<li>Mengapa Instrumen Akreditasi harus di-update?\r\n		<ul>\r\n			<li><em>Out of Date</em>: Penyesuaian dengan regulasi terkini</li>\r\n			<li><em>Perubahan Paradigma</em>: Input-Process-Based ke Output-Outcome-Based, Seribu perunggu tidak akan menggantikan 1 emas. Dosen Vokasi : Spesialis.</li>\r\n			<li><em>Kelemahan dalam Penelitian</em>: Peningkatan Akuntabilitas Proses Akreditasi.</li>\r\n		</ul>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n', 'sosialiasi-IAPT-30-1024x577.jpeg', 'Publish', '2018-12-01 06:32:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `kategori_doc` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default_docs.jpg',
  `status` varchar(255) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `kategori_doc`, `nama`, `url`, `gambar`, `status`, `tgl_upload`) VALUES
(1, 5, 'PTN Nusa Kambangan', 'https://drive.google.com/file/d/1oRtUvVUbvPufmmi9O9Ng0xEH1wzJbLNi/view?usp=drive_link', 'default_docs.jpg', 'Private', '0000-00-00 00:00:00'),
(2, 3, 'Tester', 'Test', 'default_docs.jpg', 'Private', '0000-00-00 00:00:00'),
(3, 1, 'Kebijakan SPMI 2018', 'https://drive.google.com/file/d/11pOJaaYSgZxoZzVET5S6ilyFb_dk0J8I/view', 'kebijakan_spmi_2018.png', 'Public', '0000-00-00 00:00:00'),
(4, 1, 'Manual SPMI 2018', 'https://drive.google.com/file/d/1MU_ic0o2OipCbWNtPkXyp7rxPY9pTPPG/view', 'manual_spmi_2018.png', 'Public', '0000-00-00 00:00:00'),
(5, 5, 'Renbang 1 Test', '#', 'default_docs.jpg', 'Public', '0000-00-00 00:00:00'),
(6, 1, 'Standar SPMI 2017', 'https://drive.google.com/drive/folders/1PAzxOkSao88aN37NBnBO5i5BeQCo_ibU', 'default_docs.jpg', 'Public', '0000-00-00 00:00:00'),
(8, 1, 'Manual Prosedur SPMI 2018', 'https://drive.google.com/drive/folders/1VHWBQB_INWV6BjvBtjQ-0rwg0bxUiga3', 'default_docs.jpg', 'Public', '0000-00-00 00:00:00'),
(9, 1, 'Buku Kumpulan Perundang-Undangan Tentang Sistem Penjaminan Mutu Pendidikan Tinggi', 'https://drive.google.com/file/d/1Fn8D_wf1d5tNFC58zUtn6TKlgJ6NWOYT/view', 'kpuu-spmti.png', 'Public', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_gambar`
--

CREATE TABLE `galeri_gambar` (
  `id` int(11) NOT NULL,
  `kategori_g` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_gambar`
--

INSERT INTO `galeri_gambar` (`id`, `kategori_g`, `nama`, `tanggal`, `gambar`) VALUES
(2, 4, 'Acara Pelatihan Test', '2023-08-14 23:51:52', '_DSC3653_(Custom).jpg'),
(4, 6, 'Kunjungan 1 [Test]', '2023-08-14 23:58:09', '_DSC0008_(1).JPG'),
(5, 4, 'Pelatihan 3 [Test]', '2023-08-14 23:58:54', 'ILCE-7RM3458_(Custom).JPG'),
(6, 6, 'Kunjungan 2 [Test]', '2023-08-15 00:01:02', 'DSC4137-Custom-scaled-e1654832457329-2048x916.jpg'),
(7, 6, 'Kunjungan 3 [Test]', '2023-08-15 00:01:26', 'SPME.jpg'),
(8, 6, 'Kunjungan 4 [Test]', '2023-08-15 00:05:12', '_DSC4350_(Custom).jpg'),
(9, 2, 'Akreditasi 1 [Test]', '2023-08-15 00:06:26', '_DSC2779_(1).JPG'),
(10, 2, 'Akreditasi 2 [Test]', '2023-08-15 00:06:46', '_DSC2312_(Custom).JPG'),
(11, 4, 'Pelatihan 4 [Test]', '2023-08-15 00:07:44', 'ILCE-7RM3440_(Custom).JPG');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `kategori_v` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'SPMI'),
(2, 'Akreditasi'),
(3, 'Sertifikasi'),
(4, 'Pelatihan '),
(5, 'Renbang'),
(6, 'Kunjungan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `tempat_kegiatan` varchar(255) NOT NULL,
  `waktu_kegiatan` datetime NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL DEFAULT 'default_keg.jpg',
  `deskripsi_kegiatan` text NOT NULL,
  `link_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `kategori`, `tempat_kegiatan`, `waktu_kegiatan`, `gambar_kegiatan`, `deskripsi_kegiatan`, `link_kegiatan`) VALUES
(2, 'Test Tanpa gambar', 4, 'Tempat Test', '2024-10-08 10:29:00', 'default_keg.jpg', '<p>Ini adalah test kegiatan. Ada yang <strong>bold</strong>, ada yang <em>itallic</em>, ada yang <u>underline</u>, dan juga ada yang <s>strike</s>. Berikutnya adalah teks panjang:&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '#'),
(3, 'Test Pakai Gambar ', 4, 'Tempat Test 1', '2024-05-13 10:30:00', '_DSC7867_(1).JPG', '<p>Ini adalah test kegiatan. Ada yang <strong>bold</strong>, ada yang <em>itallic</em>, ada yang <u>underline</u>, dan juga ada yang <s>strike</s>. Berikutnya adalah teks panjang:&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '#');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `title_member` varchar(255) NOT NULL,
  `gambar_member` varchar(100) NOT NULL DEFAULT 'default_profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_member`, `title_member`, `gambar_member`) VALUES
(2, 'Istianah Muslim, S.T.,M.T.', 'Kepala BP3M Politeknik Caltex Riau', 'buisti_ori1.png'),
(3, 'Nina Fadilah Najwa, S.Kom., M.Kom', 'Kepala Penjaminan Mutu Internal Politeknik Caltex Riau', 'bunina2.jpg'),
(4, 'Sugeng Purwantoro Edy Suranta G.S, S.T.,M.T.', 'Kepela Perencanaan dan Pengembangan Politeknik Caltex Riau', 'paksugeng.jpg'),
(5, 'Pak Afriyanto', 'Staf BP3M Politeknik Caltex Riau', 'default_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_umum`
--

CREATE TABLE `pertanyaan_umum` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan_umum`
--

INSERT INTO `pertanyaan_umum` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Pertanyaan 1', 'Ini adalah pertanyaan satu'),
(2, 'Pertanyaan 2', 'Ini adalah pertanyaan dua'),
(3, 'Ini pertanyaan 3', 'Ini adalah pertanyaan tiga');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `nama_ps` varchar(255) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id`, `nama_ps`, `nama_kaprodi`, `deskripsi`) VALUES
(3, 'Magister Teknik Komputer', '#', ''),
(4, 'Teknik Mekatronika', '#', ''),
(5, 'Teknologi Rekayasa Sistem Elektronika', '#', ''),
(6, 'Akuntansi Perpajakan', '#', ''),
(7, 'Teknologi Rekayasa Komputer', '#', ''),
(8, 'Teknologi Rekayasa Jaringan Telekomunikasi', '#', ''),
(9, 'Sistem Informasi', '#', ''),
(10, 'Teknik Elektronika', '#', ''),
(11, 'Teknik Informatika', '#', ''),
(12, 'Teknik Mesin', '#', ''),
(13, 'Teknik Listrik', '#', ''),
(14, 'Teknik Telekomunikasi', '#', '');

-- --------------------------------------------------------

--
-- Table structure for table `redirect_renbang`
--

CREATE TABLE `redirect_renbang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redirect_renbang`
--

INSERT INTO `redirect_renbang` (`id`, `nama`, `url`) VALUES
(1, 'Akses ke sistem Kegiatan', 'https://kegiatan.pcr.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `redirect_spmi`
--

CREATE TABLE `redirect_spmi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redirect_spmi`
--

INSERT INTO `redirect_spmi` (`id`, `nama`, `url`) VALUES
(1, 'Akses SPMI', 'https://spmi.pcr.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `judul`, `deskripsi`, `tanggal`) VALUES
(1, 'Test Timeline 1', '<p>Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adala', '2020-01-06'),
(2, 'Test Timeline 1', '<p>Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adala', '2020-01-06'),
(3, 'Test Timeline 1', '<p>Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adalah deskripsi.&nbsp;Ini adala', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `tm_ak_apt`
--

CREATE TABLE `tm_ak_apt` (
  `id` int(11) NOT NULL,
  `nama_instrumen` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_ak_apt`
--

INSERT INTO `tm_ak_apt` (`id`, `nama_instrumen`, `url`) VALUES
(1, 'Test APT 1', 'https://drive.google.com/'),
(5, 'Test APT 2', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tm_ak_lam`
--

CREATE TABLE `tm_ak_lam` (
  `id` int(11) NOT NULL,
  `nama_instrumen` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `kategori_ak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_ak_lam`
--

INSERT INTO `tm_ak_lam` (`id`, `nama_instrumen`, `url`, `kategori_ak`) VALUES
(10, 'Peraturan PerBAN-PT No. 6 Th 2022 ttg IAPS Sarjana Terapan Lingkup INFOKOM', 'https://laminfokom.or.id/official/file/Peraturan%20PerBAN-PT%20No.%206%20Th%202022%20ttg%20IAPS%20Sarjana%20Terapan%20Lingkup%20INFOKOM.zip', 'LAM Infokom'),
(11, 'Peraturan PerBAN-PT No. 7 Th 2022 ttg IAPS Magister Terapan INFOKOM', 'https://laminfokom.or.id/official/file/Peraturan%20PerBAN-PT%20No.%207%20Th%202022%20ttg%20IAPS%20Magister%20Terapan%20INFOKOM.zip', 'LAM Infokom'),
(12, 'Matriks Penilaian LED dan LKPS Sarjana Terapan APS Akademik dan Vokasi Teknik', 'https://lamteknik.or.id/download/2724/?tmstv=1691537997', 'LAM Teknik'),
(13, 'Matriks Penilaian LED dan LKPS Magister Terapan APS Akademik dan Vokasi Teknik', 'https://lamteknik.or.id/download/2727/?tmstv=1691537997', 'LAM Teknik'),
(14, 'Panduan Penyusunan Laporan Evaluasi Diri APS Akademik dan Vokasi', 'https://lamteknik.or.id/download/2633/?tmstv=1691537997', 'LAM Teknik'),
(15, 'Pedoman Penilaian APS Akademik dan Vokasi Teknik', 'https://lamteknik.or.id/download/2679/?tmstv=1691537997', 'LAM Teknik'),
(16, 'Naskah Akademik APS Akademik dan Vokasi	', 'https://lamteknik.or.id/download/1969/?tmstv=1691537997', 'LAM Teknik'),
(17, 'Template Laporan Kinerja Program Studi APS Akademik dan Vokasi (LKPS Excel)', 'https://lamteknik.or.id/download/2805/?tmstv=1691537997', 'LAM Teknik'),
(18, 'Template Laporan Evaluasi Diri Program Studi APS Akademik dan Vokasi (LED Word)	', 'https://lamteknik.or.id/download/3318/?tmstv=1691537997', 'LAM Teknik'),
(19, 'Template Dokumen Evaluasi Diri', 'https://lamemba.or.id/wp-content/uploads/2023/05/Template-DED-2.0.docx', 'LAM EMBA'),
(20, 'DL-8 Instrumen APS EMBA Formulir Komite Akreditasi', 'https://lamemba.or.id/wp-content/uploads/2022/05/Lampiran-8-Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA.xlsx', 'LAM EMBA'),
(21, 'DL-7 Instrumen APS EMBA Formulir Asesmen Lapangan', 'https://lamemba.or.id/wp-content/uploads/2022/05/Lampiran-7-Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA.xlsx', 'LAM EMBA'),
(22, 'DL-6 Instrumen APS EMBA Formulir Asesmen Kecukupan	', 'https://lamemba.or.id/wp-content/uploads/2022/05/Lampiran-6-Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA.xlsx', 'LAM EMBA'),
(23, 'DL-1 Instrumen APS EMBA Naskah Akademik', 'https://drive.google.com/file/d/15ZEnU2EhcI1wWkKc27P9x_MQO1_3e4ED/view?usp=sharing', 'LAM EMBA'),
(24, 'DL-2 Instrumen APS EMBA Kriteria dan Prosedur	', 'https://drive.google.com/file/d/1RugBBjDc3vmaNm0OsxMX2mlUEA9S8qku/view?usp=sharing', 'LAM EMBA'),
(25, 'DL-3 Instrumen APS EMBA Panduan DED', 'https://drive.google.com/file/d/1hQSMFqFzZd3YzP7r1He1qmRkx7wXz01L/view?usp=sharing', 'LAM EMBA'),
(26, 'DL-4 Instrumen APS EMBA Panduan DKPS', 'https://drive.google.com/file/d/10tD4dfO-qg1AhZ03QBj9uuRTHhu7yxeC/view?usp=sharing', 'LAM EMBA'),
(27, 'DL-5 Instrumen APS EMBA Panduan Pemantauan dan Evaluasi	', 'https://drive.google.com/file/d/1XAkDj32VRB6dUxgI3JEN1p3g1UsLFLk9/view?usp=sharing', 'LAM EMBA');

-- --------------------------------------------------------

--
-- Table structure for table `tm_ak_panduan`
--

CREATE TABLE `tm_ak_panduan` (
  `id` int(11) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_ak_panduan`
--

INSERT INTO `tm_ak_panduan` (`id`, `nama_dokumen`, `url`) VALUES
(6, 'tes Final edited OK', '#'),
(7, 'tes Final edited OK 2', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tm_sertifikat`
--

CREATE TABLE `tm_sertifikat` (
  `id` int(11) NOT NULL,
  `program_studi` int(11) NOT NULL,
  `strata` varchar(10) NOT NULL,
  `nama_sk` varchar(255) NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thn_sk` int(4) NOT NULL,
  `predikat_sk` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `expire_sertif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_sertifikat`
--

INSERT INTO `tm_sertifikat` (`id`, `program_studi`, `strata`, `nama_sk`, `no_sk`, `url`, `thn_sk`, `predikat_sk`, `status`, `expire_sertif`) VALUES
(2, 3, 'Magister', 'Sertifikat Magister Teknik Komputer', '2931/SK/BAN-PT/Ak/MTr/VII/2023', '#', 2023, 'A', NULL, NULL),
(3, 4, 'D-III', 'Sertifikat Teknik Mekatronika', '0035/SK/LAM Teknik/VD3/VIII/2022', '#', 2023, 'Unggul', NULL, NULL),
(4, 5, 'D-IV', 'Sertifikasi Rekayasa Sistem Elektronika', '6285/SK/BAN-PT/Ak-PNB/STr/IX/2022', '#', 2022, 'A', NULL, NULL),
(5, 6, 'D-IV', 'Sertifikasi Akuntansi Perpajakan', '6290/SK/BAN-PT/Ak-PNB/STr/IX/2022', '#', 2022, 'A', NULL, NULL),
(6, 7, 'D-IV', 'Sertifikat Rekayasa Komputer', '6274/SK/BAN-PT/Ak-PNB/STr/IX/2022', '#', 2022, 'A', NULL, NULL),
(7, 8, 'D-IV', 'Sertifikat Rekayasa Jaringan Telekomunikasi', '6308/SK/BAN-PT/Ak-PNB/STr/IX/2022', '#', 2022, 'B', NULL, NULL),
(8, 9, 'D-IV', 'Sertifikat Sistem Informasi', '1302/SK/BAN-PT/Akred/ST/III/2021', '#', 2021, 'A', NULL, NULL),
(9, 10, 'D-III', 'Sertifikat Teknik Elektronika', '8674/SK/BAN-PT/Ak-PPJ/ST/VI/2021', '#', 2021, 'Unggul', NULL, NULL),
(10, 11, 'D-IV', 'Sertifikat Teknik Informatika', '4554/SK/BAN-PT/Akred/ST/VIII/2020', '#', 2020, 'A', NULL, NULL),
(11, 12, 'D-IV', 'Sertifikat Teknik Mesin', '2568/SK/BAN-PT/Akred/ST/VII/2019', '#', 2019, 'B', NULL, NULL),
(12, 13, 'D-IV', 'Sertifikat Teknik Listrik', '2860/SK/BAN-PT/Akred/ST/VIII/2019', '#', 2019, 'B', NULL, NULL),
(14, 14, 'D-III', 'Sertifikat Teknik Telekomunikasi', '2410/SK/BAN-PT/Akred/Dipl-III/VIII/2018', '#', 2018, 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Bk8wSD6cDgYRPjPgxFy8Iu5X3ERv7prT6GXg8HUg4aTwPN7jsp6EG', 'default.jpg', 'Admin', 1621949209);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutp_section_aboutus`
--
ALTER TABLE `aboutp_section_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutp_section_struktur`
--
ALTER TABLE `aboutp_section_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutp_section_tagline`
--
ALTER TABLE `aboutp_section_tagline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_renbang`
--
ALTER TABLE `about_renbang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_spmi`
--
ALTER TABLE `about_spmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_doc` (`kategori_doc`);

--
-- Indexes for table `galeri_gambar`
--
ALTER TABLE `galeri_gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_g` (`kategori_g`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_kegiatan` (`kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redirect_renbang`
--
ALTER TABLE `redirect_renbang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redirect_spmi`
--
ALTER TABLE `redirect_spmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_ak_apt`
--
ALTER TABLE `tm_ak_apt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_ak_lam`
--
ALTER TABLE `tm_ak_lam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_ak_panduan`
--
ALTER TABLE `tm_ak_panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_sertifikat`
--
ALTER TABLE `tm_sertifikat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_studi` (`program_studi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutp_section_aboutus`
--
ALTER TABLE `aboutp_section_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutp_section_struktur`
--
ALTER TABLE `aboutp_section_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutp_section_tagline`
--
ALTER TABLE `aboutp_section_tagline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_renbang`
--
ALTER TABLE `about_renbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_spmi`
--
ALTER TABLE `about_spmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeri_gambar`
--
ALTER TABLE `galeri_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `redirect_renbang`
--
ALTER TABLE `redirect_renbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `redirect_spmi`
--
ALTER TABLE `redirect_spmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tm_ak_apt`
--
ALTER TABLE `tm_ak_apt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tm_ak_lam`
--
ALTER TABLE `tm_ak_lam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tm_ak_panduan`
--
ALTER TABLE `tm_ak_panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tm_sertifikat`
--
ALTER TABLE `tm_sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
