-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2025 pada 18.33
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_divi_d1a240038`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(1, 'Saya Divi Agung Satria , Mahasiswa dari Universitas Subang , Saya Seorang Mahasiswa Aktif di Fakultas Ilmu Komputer, Prodi Sistem Informasi Semester 2.\r\n\r\nIni Adalah Halaman PHP Pertama Saya yang Dibuat dengan Tailwindcss.CDN.4.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(1, 'Fc Barcelona', 'FC Barcelona: Lebih dari Sekadar Klub Sepak Bola\r\nFC Barcelona, atau yang sering disebut Barça, adalah salah satu klub sepak bola paling ikonik dan sukses di dunia. Berbasis di kota Barcelona, Catalonia, Spanyol, klub ini telah mencuri perhatian penggemar sepak bola sejak berdiri pada 29 November 1899 oleh sekelompok pemain asing yang dipimpin oleh Joan Gamper.\r\nMoto yang Mendunia: “Més que un club”\r\nFC Barcelona memiliki moto terkenal “Més que un club” yang berarti “Lebih dari sekadar klub”. Moto ini mencerminkan nilai-nilai sosial, budaya, dan politik yang dipegang klub ini. Barça tidak hanya menjadi kebanggaan Catalonia, tetapi juga menjadi simbol perjuangan dan identitas daerah tersebut.\r\n\r\nPrestasi dan Sejarah Gemilang\r\nBarça telah memenangkan berbagai gelar domestik dan internasional, di antaranya:\r\nLa Liga: Lebih dari 25 kali juara\r\nCopa del Rey: Puluhan kali juara, menjadi salah satu klub tersukses di kompetisi ini\r\nLiga Champions UEFA: 5 kali juara (terakhir pada tahun 2015)\r\nPiala Dunia Antarklub: 3 kali juara\r\nSalah satu masa keemasan klub terjadi di era Pep Guardiola (2008–2012), ketika permainan tiki-taka mereka mendominasi dunia, dengan pemain seperti Lionel Messi, Xavi Hernández, dan Andrés Iniesta menjadi tulang punggung tim.\r\nLa Masia: Pabrik Bintang Dunia\r\nKeberhasilan FC Barcelona juga tak lepas dari akademi sepak bola La Masia, yang terkenal mencetak banyak pemain kelas dunia. Dari sinilah lahir bintang-bintang seperti Lionel Messi, Gerard Piqué, Sergio Busquets, dan Ansu Fati. Filosofi permainan menyerang, penguasaan bola, dan teknik tinggi ditanamkan sejak dini di akademi ini.\r\nRivalitas Abadi: El Clásico\r\nPertandingan antara FC Barcelona dan Real Madrid, yang dikenal dengan El Clásico, adalah salah satu pertandingan paling ditunggu dalam dunia sepak bola. Pertarungan ini bukan sekadar duel antar dua tim besar, tetapi juga membawa muatan sejarah dan politik antara Catalonia dan pemerintah pusat Spanyol.\r\nMasa Kini dan Masa Depan\r\nSaat ini, meskipun menghadapi tantangan finansial dan transisi pasca-kepergian Messi, FC Barcelona tetap menunjukkan komitmennya untuk membangun tim masa depan dengan pemain muda dan filosofi permainan yang menyerang. Di bawah pelatih-pelatih muda dan berbakat seperti Xavi Hernández, klub ini perlahan bangkit kembali.'),
(2, 'Leo Messi', 'Lionel Messi: Si Kecil dengan Kaki Emas\r\nLionel Andrés Messi, atau yang akrab dikenal dengan Lionel Messi, adalah salah satu pesepakbola terbaik sepanjang masa. Lahir pada 24 Juni 1987 di Rosario, Argentina, Messi dikenal bukan hanya karena bakat luar biasanya, tetapi juga karena dedikasi, kerja keras, dan kerendahan hatinya.\r\n Awal Karier: Dari Rosario ke Barcelona\r\nMessi memulai karier sepak bolanya di klub lokal bernama Newell’s Old Boys. Namun pada usia 11 tahun, ia didiagnosis dengan kekurangan hormon pertumbuhan. Keluarganya tidak mampu membiayai pengobatan, hingga akhirnya FC Barcelona menawarkan kontrak dan biaya pengobatan dengan syarat Messi pindah ke Spanyol dan bergabung dengan akademi La Masia.\r\nTak butuh waktu lama, Messi menunjukkan kualitas luar biasa. Ia memulai debut profesional bersama Barcelona pada usia 17 tahun dan langsung mencuri perhatian.\r\n Kejayaan di Barcelona\r\nSelama lebih dari 17 tahun di Barcelona (2004–2021), Messi memenangkan:\r\n* 10 gelar La Liga\r\n* 4 Liga Champions UEFA\r\n* 7 Copa del Rey\r\n* 6 Ballon d\'Or (sampai 2021)\r\n* Mencetak lebih dari **670 gol** untuk klub, menjadikannya top skor sepanjang masa Barcelona\r\nMessi terkenal dengan gaya bermain yang elegan, dribel tajam, visi luar biasa, dan penyelesaian akhir yang mematikan. Kombinasinya dengan Xavi dan Iniesta membentuk era keemasan Barcelona dengan filosofi tiki-taka.\r\n Tantangan & Pembuktian: PSG dan Inter Miami\r\nTahun 2021, Messi terpaksa meninggalkan Barcelona karena masalah finansial klub dan bergabung dengan Paris Saint-Germain (PSG). Meski awalnya penuh tantangan, Messi tetap menunjukkan kelasnya dengan membawa PSG juara Ligue 1.\r\nTahun 2023, Messi memilih melanjutkan karier di **Inter Miami** di Major League Soccer (MLS), menunjukkan bahwa ia tetap ingin bermain dan menginspirasi di luar Eropa.\r\nPuncak Karier: Juara Dunia 2022\r\nSetelah lama dianggap belum lengkap tanpa trofi Piala Dunia, Messi akhirnya membawa Argentina menjadi **juara dunia di Qatar 2022**. Ia tampil gemilang dan menjadi pemain terbaik turnamen, menjawab semua keraguan bahwa ia adalah GOAT — Greatest of All Time.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(7, 'MENG BALL', 'foto2.jpg'),
(9, 'HIMASI CUP', 'personal1.jpg'),
(10, 'MENG BALL PART 2', 'img3.jpg'),
(11, 'KAMI ?', 'personal7.jpg'),
(12, 'CILEAT', 'foto7 (3).jpg'),
(13, 'NGOPI', 'NGOPI.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('divi', 'divi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
