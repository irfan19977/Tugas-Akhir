-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2024 pada 03.51
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk-wima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `audio`
--

CREATE TABLE `audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `audio`
--

INSERT INTO `audio` (`id`, `title`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(5, 'dj1', 'bb1', 'KHnswKP4fobDYNyG5fWdT9wPFUx1AnjQDVQfKWyO.mp3', '2024-02-26 03:34:37', '2024-02-26 03:34:37'),
(6, 'dj2', 'n', 'MYn6ZHEI6EtzfWBUKYCeH6AQnsnlSo4ahUZBe7S3.mp3', '2024-02-26 03:35:05', '2024-02-26 03:35:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `kategori_id`, `judul`, `sampul`, `slug`, `keterangan`, `isi`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'Pentas Seni di SMK Wiyata Mandala: Meriahnya Ekspresi Kreatifitas Siswa dalam Sorotan Publik', 'public/sampul/MIfJ3OCbk4CG4zSPMIxLmt6JVDiYAJsdZeWnzlKx.png', 'pentas-seni-di-smk-wiyata-mandala-meriahnya-ekspresi-kreatifitas-siswa-dalam-sorotan-publik', 'Pentas Seni', '<p><em>SMK Wiyata Mandala, 8 April 2024</em> - Dengan semangat yang membara, SMK Wiyata Mandala menggelar acara pentas seni yang spektakuler pada hari Kamis, 7 April 2024. Acara ini menjadi sorotan utama bagi seluruh siswa dan staf sekolah, serta menarik perhatian masyarakat karena menampilkan berbagai karya seni yang inspiratif.</p>\r\n\r\n<p>Pentas seni yang diadakan di aula sekolah ini mempersembahkan beragam bentuk seni, mulai dari musik, tarian, drama, hingga seni rupa. Siswa-siswi SMK Wiyata Mandala telah menyiapkan diri dengan sungguh-sungguh selama berbulan-bulan untuk memberikan penampilan terbaik mereka.</p>\r\n\r\n<p>Salah satu sorotan utama dalam acara ini adalah penampilan paduan suara sekolah yang memukau. Dengan harmoni yang menyentuh hati, para siswa menghadirkan berbagai lagu pilihan, termasuk lagu-lagu daerah dan lagu-lagu pop terkini. Keberadaan mereka di atas panggung berhasil memukau penonton dan mengundang tepuk tangan meriah.</p>\r\n\r\n<p>Tidak hanya itu, pentas seni ini juga menampilkan beragam pertunjukan tarian yang mengagumkan. Mulai dari tarian tradisional Indonesia hingga tarian modern yang enerjik, setiap gerakan ditampilkan dengan penuh semangat, menunjukkan keahlian dan dedikasi siswa dalam seni tari.</p>\r\n\r\n<p>Bagi para penggemar teater, pentas seni ini juga menampilkan pertunjukan drama panggung yang menghibur. Dengan cerita yang mendalam dan penampilan aktor yang memukau, para penonton diajak dalam perjalanan emosional yang tak terlupakan.</p>\r\n\r\n<p>Seni rupa juga tidak kalah menarik dalam acara ini. Galeri seni di sekitar aula memamerkan karya-karya seni visual yang luar biasa dari para siswa. Mulai dari lukisan realistis hingga lukisan abstrak yang penuh warna, setiap karya menunjukkan bakat dan imajinasi yang mengagumkan.</p>\r\n\r\n<p>Kepala Sekolah SMK Wiyata Mandala, Ibu Siti, menyatakan kebanggaannya atas kesuksesan acara pentas seni ini. &quot;Pentas seni adalah momen yang sangat penting bagi kami untuk merayakan keberagaman bakat dan kreativitas siswa kami. Kami sangat bangga melihat mereka tumbuh dan berkembang dalam seni, dan kami berharap acara ini dapat menginspirasi banyak orang.&quot;</p>\r\n\r\n<p>Acara pentas seni di SMK Wiyata Mandala bukan hanya sebagai hiburan semata, tetapi juga sebagai wadah untuk mendorong siswa-siswa untuk mengeksplorasi dan mengekspresikan diri melalui seni. Dengan semangat yang tinggi dan dedikasi yang kuat, acara ini berhasil mempersembahkan karya-karya luar biasa dari para siswa, menambahkan warna dan kehidupan dalam lingkungan sekolah yang dinamis.</p>', 1, '2024-04-07 23:16:50', '2024-04-07 23:16:50'),
(4, 1, 'Peringatan Maulid Nabi Muhammad SAW di SMK Wiyata Mandala 1445 H', 'public/sampul/8dhlWT0NgCZMvXCZFZ6nOawS5sAisPhIsnfI2fwJ.png', 'peringatan-maulid-nabi-muhammad-saw-di-smk-wiyata-mandala-1445-h', 'peringatan Maulid Nabi SMK Wiyata Mandala', '<p>Di tengah semangat keagamaan yang membara, SMK Wiyata Mandala menggelar peringatan Maulid Nabi Muhammad SAW dengan meriah pada hari Rabu, 10 April 2024. Acara yang dihadiri oleh siswa, guru, dan staf sekolah ini bertujuan untuk memperingati kelahiran Nabi Muhammad SAW serta memperkuat nilai-nilai kebersamaan dan kedamaian dalam lingkungan pendidikan.</p>\r\n\r\n<p>Dengan tema &quot;Membawa Cahaya Kebenaran&quot;, perayaan Maulid Nabi di SMK Wiyata Mandala menjadi momen berharga untuk menggali makna dan ajaran-ajaran yang ditinggalkan oleh Nabi Muhammad SAW. Acara tersebut dipenuhi dengan kegiatan yang bernuansa islami, seperti pembacaan shalawat, tadarusan Al-Quran, serta ceramah agama yang menginspirasi.</p>\r\n\r\n<p>Kepala Sekolah SMK Wiyata Mandala, Bapak Ahmad Fauzi, menyatakan bahwa peringatan Maulid Nabi merupakan bagian tak terpisahkan dari agenda tahunan sekolah. &quot;Kami selalu berupaya untuk menjadikan momen ini sebagai sarana memperkuat kebersamaan, menjunjung tinggi nilai-nilai kesederhanaan dan kasih sayang yang diajarkan oleh Nabi Muhammad kepada umatnya,&quot; ujarnya.</p>\r\n\r\n<p>Selain kegiatan keagamaan, peringatan Maulid Nabi di SMK Wiyata Mandala juga diwarnai dengan berbagai kegiatan sosial. Siswa dan guru secara bersama-sama melakukan aksi sosial dengan membagikan paket sembako kepada masyarakat kurang mampu di sekitar sekolah, sebagai wujud nyata dari ajaran kepedulian dan berbagi yang diajarkan oleh Nabi Muhammad SAW.</p>\r\n\r\n<p>Acara tersebut diakhiri dengan doa bersama untuk keberkahan dan kemajuan sekolah serta umat muslim secara umum. Para peserta meninggalkan peringatan Maulid Nabi dengan hati yang penuh kehangatan, semangat, dan tekad untuk mengikuti jejak Nabi Muhammad SAW dalam berbuat kebaikan dan menyebarkan cahaya kebenaran di sekitar mereka.</p>', 1, '2024-04-11 01:47:04', '2024-04-11 07:49:22'),
(5, 3, 'Penerimaan Pendaftaran Peserta Didik Baru SMK Wiyata Mandala Gelombang 1: 1-20 April', 'public/sampul/Hgs4Ija7fWwTJlzUOl3cILLY1kOyIhscqdBTbSEe.jpg', 'penerimaan-pendaftaran-peserta-didik-baru-smk-wiyata-mandala-gelombang-1-1-20-april', 'ppdb smk wima', '<p>SMK Wiyata Mandala dengan bangga mengumumkan bahwa penerimaan pendaftaran peserta didik baru untuk gelombang pertama akan dibuka mulai tanggal 1 hingga 20 April. Ini adalah kesempatan yang sangat dinanti bagi para calon siswa untuk bergabung dengan sekolah yang berkomitmen untuk menyediakan pendidikan berkualitas dengan pendekatan praktis dan holistik.</p>\r\n\r\n<p>Berikut adalah informasi penting terkait penerimaan pendaftaran:</p>\r\n\r\n<p><strong>Tanggal Pendaftaran:</strong></p>\r\n\r\n<ul>\r\n	<li>Gelombang 1: 1 April - 20 April</li>\r\n</ul>\r\n\r\n<p><strong>Prosedur Pendaftaran:</strong></p>\r\n\r\n<ol>\r\n	<li>Calon siswa dapat mengakses formulir pendaftaran secara online melalui situs web resmi SMK Wiyata Mandala.</li>\r\n	<li>Lengkapi semua informasi yang diminta dengan cermat dan benar pada formulir pendaftaran.</li>\r\n	<li>Setelah formulir terisi, harap mengirimkannya secara online sesuai dengan instruksi yang diberikan.</li>\r\n</ol>\r\n\r\n<p><strong>Syarat Pendaftaran:</strong></p>\r\n\r\n<ul>\r\n	<li>Calon siswa harus menyerahkan dokumen-dokumen yang diperlukan seperti ijazah terakhir, kartu keluarga, dan foto kopi identitas diri.</li>\r\n	<li>Pastikan untuk memenuhi syarat usia dan kualifikasi yang ditetapkan oleh sekolah.</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas yang Ditawarkan:</strong></p>\r\n\r\n<ul>\r\n	<li>Kurikulum yang berfokus pada pengembangan keterampilan praktis dan pengetahuan yang relevan dengan dunia industri.</li>\r\n	<li>Lingkungan belajar yang kondusif dengan fasilitas modern dan dukungan akademis yang komprehensif.</li>\r\n	<li>Program ekstrakurikuler yang beragam untuk mengembangkan bakat dan minat siswa.</li>\r\n</ul>\r\n\r\n<p><strong>Tentang SMK Wiyata Mandala:</strong></p>\r\n\r\n<p>SMK Wiyata Mandala adalah sekolah menengah kejuruan yang telah terbukti memberikan pendidikan berkualitas tinggi dalam bidang-bidang seperti Teknik, Bisnis, dan Kesehatan. Dengan staf pengajar yang berpengalaman dan kurikulum yang selalu diperbarui sesuai dengan perkembangan industri, SMK Wiyata Mandala bertujuan untuk mencetak generasi muda yang siap bersaing dalam pasar kerja global.</p>\r\n\r\n<p>Jangan lewatkan kesempatan ini untuk menjadi bagian dari komunitas belajar yang dinamis dan progresif di SMK Wiyata Mandala. Segera daftarkan diri Anda dan raih impian masa depan Anda bersama kami!</p>\r\n\r\n<p>Untuk informasi lebih lanjut dan untuk mengakses formulir pendaftaran, silakan kunjungi situs web resmi kami di www.smkwiyatamandala.sch.id</p>', 1, '2024-04-11 08:01:54', '2024-04-11 08:01:54'),
(6, 1, 'Wima Sahur On the Road: Berkah Saat Malam', 'public/sampul/KrS0i4up2x7sWGvKe9Gh5WI31JUuHglYL9siWfOb.jpg', 'wima-sahur-on-the-road-berkah-saat-malam', 'pembagian makanan sahur', '<p>Setiap tahun, semangat berbagi dan kepedulian memenuhi bulan Ramadan di seantero negeri. Namun, di tengah gemerlap kegiatan amal, satu kegiatan khusus menonjol, menghadirkan kilauan harapan dan keceriaan yang luar biasa. Ia adalah &quot;Wima Sahur On the Road,&quot; sebuah acara yang telah menjadi agenda tahunan yang ditunggu-tunggu, dipersembahkan oleh Organisasi Siswa Intra Sekolah (OSIS) SMK Wiyata Mandala.</p>\r\n\r\n<p>&quot;Wima Sahur On the Road&quot; bukan hanya sekadar sahur bersama, tetapi lebih dari itu. Acara ini adalah bentuk nyata dari semangat sosial dan kepedulian yang mengalir dari hati para siswa SMK Wiyata Mandala. Di bawah langit gelap yang terhampar, mereka berkumpul untuk mempersiapkan segala sesuatunya dengan penuh antusiasme.</p>\r\n\r\n<p>Sebagai pagi mulai merangkak naik, tim &quot;Wima Sahur On the Road&quot; bersiap-siap dengan semangat yang membara. Mereka membawa bekal kehangatan sahur, tersenyum dalam keceriaan, dan penuh tekad untuk menyebarkan kebahagiaan kepada sesama. Mobil-mobil pun dipersiapkan dengan penuh kasih sayang, dipenuhi oleh makanan lezat dan minuman segar yang siap untuk disebarkan ke sudut-sudut kota.</p>\r\n\r\n<p>Tidak terbatas pada satu lokasi, tim &quot;Wima Sahur On the Road&quot; menjelajahi berbagai wilayah di sekitar mereka. Mereka menyusuri jalan-jalan kota dengan penuh semangat, siap untuk menemui siapa pun yang membutuhkan. Dari sudut gang sempit hingga perumahan yang jauh, tidak ada tempat yang terlupakan oleh kebaikan hati mereka.</p>\r\n\r\n<p>Setiap sajian yang mereka bagikan adalah lebih dari sekadar makanan. Ia adalah harapan bagi mereka yang terlupakan, cahaya bagi mereka yang kehilangan, dan kehangatan bagi mereka yang merasa sepi. Tidak ada yang terlupakan oleh kebaikan mereka, dan setiap senyum yang mereka terima adalah ganjaran terindah bagi kerja keras mereka.</p>\r\n\r\n<p>Acara ini tidak hanya tentang memberi, tetapi juga tentang membangun kedekatan dan kebersamaan. Di balik setiap hidangan yang disajikan, terdapat kehangatan persaudaraan dan rasa saling menghargai. &quot;Wima Sahur On the Road&quot; adalah cermin dari semangat Ramadhan yang sejati, yang mengajarkan kita semua untuk berbagi dan peduli kepada sesama.</p>\r\n\r\n<p>Oleh karena itu, di tahun ini dan seterusnya, mari bergabung bersama &quot;Wima Sahur On the Road.&quot; Mari kita sambut bulan suci dengan tangan terbuka dan hati yang lapang, siap untuk menyebarkan kebaikan dan cinta kepada mereka yang membutuhkan. Karena dengan bersama, kita dapat mewujudkan berkah yang lebih besar, tidak hanya bagi diri kita sendiri, tetapi juga bagi dunia di sekitar kita.</p>', 1, '2024-04-12 04:08:55', '2024-04-12 04:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `no_wa`, `content`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Irfan Adi', 'irfan@gmail.com', '085802733781', 'tes aja', 'dibalas', '2024-02-24 04:36:32', '2024-02-24 04:49:56'),
(9, 'hekel', 'hekel@gmail.com', '082331386189', 'coba 2', 'dibalas', '2024-02-24 04:39:17', '2024-02-24 04:39:40'),
(11, 'irfan adi prastyo11111111', 'akbar@gmail.com', '082331386189', 'bismillah', 'sudah dibaca', '2024-02-24 05:26:09', '2024-02-24 05:27:13'),
(12, 'irfan adi prastyo', 'irfanadiprastyo22@gmail.com', '082233088346', 'saya mau bertanya', 'sudah dibaca', '2024-04-12 12:54:18', '2024-04-24 06:59:24'),
(13, 'irfan adi prastyo', 'irfan_21310012@stimata.ac.id', '085802733781', 'sdsd', 'sudah dibaca', '2024-04-27 01:55:04', '2024-04-27 01:55:24'),
(14, 'irfan adi prastyo', 'irfan_21310012@stimata.ac.id', '082233088346', 'min mau bertanya, untuk pembukaan pendaftaran tanggal berapa', 'belum dibaca', '2024-05-06 14:15:36', '2024-05-06 14:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `title`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Jurnal', 'Jurnal Ujian Online', 'oGEWv9yxix2vLvcn7egYTB6zQ8kjss3ly8bwSAyr.pdf', '2021-04-28 16:27:00', '2021-04-28 16:27:00'),
(2, 'TA', 'gatau ah', 'HVGXZEZ04RWlhw6OSKYEFoke0ovwSQIHDZue2FNY.docx', '2024-02-25 09:39:41', '2024-02-25 09:39:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exams`
--

INSERT INTO `exams` (`id`, `name`, `time`, `total_question`, `status`, `start`, `end`, `created_by`, `created_at`, `updated_at`) VALUES
(25, 'Matematika', 90, 10, 'Ready', '2024-04-04 08:00:00', '2025-04-30 23:59:00', '1', '2024-04-11 04:26:55', '2024-04-26 01:18:05'),
(26, 'Bahasa Inggris', 120, 10, 'Ready', '2024-04-26 08:14:00', '2025-04-26 08:14:00', '1', '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(27, 'Ilmu Pengetahuan Alam', 120, 1, 'Ready', '2024-04-26 13:14:00', '2025-04-26 13:14:00', '1', '2024-04-26 06:14:43', '2024-04-26 06:14:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam_question`
--

CREATE TABLE `exam_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam_question`
--

INSERT INTO `exam_question` (`id`, `exam_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 6, 2, '2021-04-30 03:17:47', '2021-04-30 03:17:47'),
(2, 7, 3, '2021-04-30 03:25:32', '2021-04-30 03:25:32'),
(3, 7, 2, '2021-04-30 03:25:32', '2021-04-30 03:25:32'),
(6, 12, 8, '2021-05-01 16:07:06', '2021-05-01 16:07:06'),
(7, 12, 5, '2021-05-01 16:09:49', '2021-05-01 16:09:49'),
(8, 12, 7, '2021-05-01 16:17:42', '2021-05-01 16:17:42'),
(9, 12, 3, '2021-05-01 16:17:42', '2021-05-01 16:17:42'),
(10, 12, 2, '2021-05-01 16:17:42', '2021-05-01 16:17:42'),
(11, 11, 3, '2021-05-02 16:26:17', '2021-05-02 16:26:17'),
(12, 12, 6, '2021-05-03 11:07:53', '2021-05-03 11:07:53'),
(13, 12, 4, '2021-05-03 11:07:53', '2021-05-03 11:07:53'),
(14, 11, 8, '2021-05-03 11:08:25', '2021-05-03 11:08:25'),
(15, 11, 7, '2021-05-03 11:08:25', '2021-05-03 11:08:25'),
(16, 11, 6, '2021-05-03 11:08:25', '2021-05-03 11:08:25'),
(17, 11, 5, '2021-05-03 11:08:25', '2021-05-03 11:08:25'),
(18, 11, 4, '2021-05-03 11:08:25', '2021-05-03 11:08:25'),
(23, 9, 8, '2021-05-03 11:34:06', '2021-05-03 11:34:06'),
(24, 14, 8, '2021-05-08 13:24:26', '2021-05-08 13:24:26'),
(25, 14, 7, '2021-05-08 13:24:26', '2021-05-08 13:24:26'),
(27, 13, 8, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(28, 13, 7, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(29, 13, 6, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(30, 13, 5, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(31, 13, 4, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(32, 13, 3, '2021-05-08 13:28:40', '2021-05-08 13:28:40'),
(33, 15, 8, '2021-05-08 21:20:59', '2021-05-08 21:20:59'),
(34, 15, 7, '2021-05-08 21:20:59', '2021-05-08 21:20:59'),
(35, 16, 8, '2021-05-08 21:44:29', '2021-05-08 21:44:29'),
(36, 16, 7, '2021-05-08 21:44:29', '2021-05-08 21:44:29'),
(37, 17, 8, '2021-05-08 22:09:37', '2021-05-08 22:09:37'),
(39, 19, 6, '2021-05-15 12:32:49', '2021-05-15 12:32:49'),
(40, 19, 4, '2021-05-15 12:32:49', '2021-05-15 12:32:49'),
(41, 19, 2, '2021-05-15 12:32:49', '2021-05-15 12:32:49'),
(44, 20, 16, '2024-01-27 06:14:34', '2024-01-27 06:14:34'),
(45, 20, 15, '2024-01-27 06:14:34', '2024-01-27 06:14:34'),
(46, 20, 14, '2024-01-27 06:14:34', '2024-01-27 06:14:34'),
(47, 21, 8, '2024-02-20 06:26:34', '2024-02-20 06:26:34'),
(48, 21, 7, '2024-02-20 06:26:34', '2024-02-20 06:26:34'),
(49, 21, 17, '2024-02-24 09:07:21', '2024-02-24 09:07:21'),
(50, 19, 18, '2024-02-25 09:41:52', '2024-02-25 09:41:52'),
(52, 19, 20, '2024-02-25 10:09:48', '2024-02-25 10:09:48'),
(54, 18, 22, '2024-02-25 10:46:43', '2024-02-25 10:46:43'),
(59, 18, 23, '2024-02-25 10:59:47', '2024-02-25 10:59:47'),
(60, 18, 24, '2024-02-25 12:18:06', '2024-02-25 12:18:06'),
(61, 18, 25, '2024-02-26 03:07:31', '2024-02-26 03:07:31'),
(62, 18, 18, '2024-02-26 03:17:48', '2024-02-26 03:17:48'),
(63, 18, 6, '2024-02-26 03:17:48', '2024-02-26 03:17:48'),
(64, 18, 26, '2024-02-26 06:02:12', '2024-02-26 06:02:12'),
(65, 22, 33, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(66, 22, 32, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(67, 22, 31, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(68, 22, 30, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(69, 22, 28, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(70, 22, 27, '2024-02-26 06:39:56', '2024-02-26 06:39:56'),
(71, 22, 34, '2024-02-26 06:44:12', '2024-02-26 06:44:12'),
(77, 23, 49, '2024-04-11 02:41:50', '2024-04-11 02:41:50'),
(78, 24, 49, '2024-04-11 02:45:07', '2024-04-11 02:45:07'),
(101, 25, 154, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(102, 25, 155, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(103, 25, 156, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(104, 25, 157, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(105, 25, 158, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(106, 25, 159, '2024-04-26 01:12:04', '2024-04-26 01:12:04'),
(107, 26, 160, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(108, 26, 161, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(109, 26, 162, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(110, 26, 163, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(111, 26, 164, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(112, 26, 165, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(113, 26, 166, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(114, 26, 167, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(115, 26, 168, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(116, 26, 169, '2024-04-26 01:15:08', '2024-04-26 01:15:08'),
(117, 25, 153, '2024-04-26 01:18:05', '2024-04-26 01:18:05'),
(118, 25, 150, '2024-04-26 01:18:06', '2024-04-26 01:18:06'),
(119, 25, 151, '2024-04-26 01:18:06', '2024-04-26 01:18:06'),
(120, 25, 152, '2024-04-26 01:18:06', '2024-04-26 01:18:06'),
(121, 27, 153, '2024-04-26 06:14:43', '2024-04-26 06:14:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam_user`
--

CREATE TABLE `exam_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `history_answer` text DEFAULT NULL,
  `score` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam_user`
--

INSERT INTO `exam_user` (`id`, `exam_id`, `user_id`, `history_answer`, `score`, `created_at`, `updated_at`) VALUES
(86, 25, 27, '{\"154\":\"154-A\",\"155\":\"155-B\",\"156\":\"156-C\",\"157\":\"157-A\",\"158\":\"158-C\",\"159\":\"159-D\",\"153\":\"153-D\",\"150\":\"150-C\",\"151\":\"151-A\",\"152\":\"152-C\"}', 20, '2024-04-26 01:15:30', '2024-04-26 01:42:18'),
(87, 25, 25, '{\"154\":\"154-A\",\"155\":\"155-B\",\"156\":\"156-C\",\"157\":\"157-D\",\"158\":\"158-E\",\"159\":\"159-A\",\"153\":\"153-C\",\"150\":\"150-B\",\"151\":\"151-D\",\"152\":\"152-E\"}', 10, '2024-04-26 01:15:30', '2024-04-26 01:19:24'),
(88, 26, 27, '{\"154\":\"154-A\",\"155\":\"155-B\",\"156\":\"156-C\",\"157\":\"157-A\",\"158\":\"158-C\",\"159\":\"159-D\",\"153\":\"153-D\",\"150\":\"150-C\",\"151\":\"151-A\",\"152\":\"152-C\",\"160\":\"160-D\",\"161\":\"161-C\",\"162\":\"162-B\",\"163\":\"163-C\",\"169\":\"169-D\"}', 30, '2024-04-26 01:15:46', '2024-04-26 01:42:55'),
(89, 26, 26, '{\"160\":\"160-A\",\"169\":\"169-E\"}', 0, '2024-04-26 01:15:46', '2024-04-26 01:44:36'),
(90, 26, 25, '{\"154\":\"154-A\",\"155\":\"155-B\",\"156\":\"156-C\",\"157\":\"157-D\",\"158\":\"158-E\",\"159\":\"159-A\",\"153\":\"153-C\",\"150\":\"150-B\",\"151\":\"151-D\",\"152\":\"152-E\",\"160\":\"160-A\",\"161\":\"161-A\",\"162\":\"162-D\",\"163\":\"163-B\",\"164\":\"164-A\",\"165\":\"165-A\",\"166\":\"166-A\",\"167\":\"167-A\",\"168\":\"168-A\",\"169\":\"169-E\"}', 40, '2024-04-26 01:15:46', '2024-04-26 01:25:05'),
(91, 25, 26, '{\"160\":\"160-A\",\"169\":\"169-E\",\"154\":\"154-A\",\"155\":\"155-B\",\"152\":\"152-D\"}', 0, '2024-04-26 01:15:58', '2024-04-26 01:45:01'),
(93, 27, 26, NULL, NULL, '2024-04-26 06:15:04', '2024-04-26 06:15:04'),
(94, 27, 25, '{\"153\":\"153-C\"}', 0, '2024-04-26 06:15:04', '2024-04-26 06:15:29'),
(95, 25, 28, '{\"154\":\"154-A\",\"155\":\"155-D\",\"156\":\"156-D\",\"157\":\"157-D\",\"158\":\"158-D\",\"159\":\"159-C\",\"153\":\"153-D\",\"150\":\"150-A\",\"151\":\"151-B\",\"152\":\"152-E\"}', 20, '2024-04-27 01:42:35', '2024-04-27 01:44:16'),
(96, 27, 27, '{\"153\":\"153-A\"}', 100, '2024-04-30 08:09:12', '2024-04-30 08:09:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `title`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(5, 'ada', 'aaa', '5TGzkHIVMNgHtuYhg4bPGVxQYBrqjSgHK3nEh7Eo.jpg', '2024-01-21 00:54:46', '2024-01-21 00:54:46'),
(6, 'tw', 'aa', 'xSesWyUObhnuE3HnhnURnuko7sjKIoeFh9dx06EF.jpg', '2024-02-26 03:36:26', '2024-02-26 03:36:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Berita Sekolah', 'berita-sekolah', '2024-04-07 21:45:29', '2024-04-07 21:45:29'),
(2, 'Prestasi Siswa', 'prestasi-siswa', '2024-04-07 23:13:41', '2024-04-07 23:13:41'),
(3, 'Kesiswaan', 'kesiswaan', '2024-04-07 23:13:52', '2024-04-07 23:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_24_095022_create_permission_tables', 1),
(5, '2021_04_24_105557_create_exams_table', 1),
(6, '2021_04_24_105611_create_questions_table', 1),
(7, '2021_04_24_105627_create_subjects_table', 1),
(8, '2021_04_24_165632_create_photos_table', 1),
(9, '2021_04_24_165646_create_videos_table', 1),
(10, '2021_04_27_223437_create_documents_table', 1),
(11, '2021_04_27_223454_create_images_table', 1),
(12, '2021_04_27_224752_create_exam_user_table', 1),
(13, '2021_04_27_225109_create_exam_question_table', 1),
(14, '2021_04_28_224455_create_audio_table', 2),
(17, '2023_12_30_163431_create_ppdb_table', 4),
(28, '2023_12_30_114709_create_pengumuman_table', 6),
(33, '2024_02_23_172425_create_contact_table', 7),
(34, '2023_12_31_134400_create_kategori_berita_table', 8),
(35, '2023_12_31_134500_create_berita_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$CSIOdEp5L6tyNhxPCphiqem7EOr1mI1EIaLtgZz5KgF5BISS0pY8K', '2024-02-01 01:05:44'),
('irfan_21310012@stimata.ac.id', '$2y$10$1AVPZUoaPMAIUar2WHue7.b7cwCw6gur8MaMK8.xY0WrZVkTd3bIO', '2024-02-16 07:22:26'),
('irfanadiprasetyo27@gmail.com', '$2y$10$y4ud5dfdQ48ZIYlr9/ouUuauMmo/.HnZ/6o/1bDAEzK950ZjtPh4O', '2024-05-06 14:19:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `file_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `title`, `slug`, `caption`, `file_id`, `created_at`, `updated_at`) VALUES
(14, 'Pengumuman Penting untuk Calon Siswa SMK Wiyata Mandala: Mohon Mengisi Formulir Pendaftaran', 'pengumuman-penting-untuk-calon-siswa-smk-wiyata-mandala-mohon-mengisi-formulir-pendaftaran', 'Kepada para calon siswa SMK Wiyata Mandala yang belum melengkapi proses pendaftaran,\r\n\r\nKami ingin mengingatkan bahwa formulir pendaftaran untuk tahun ajaran baru masih belum lengkap bagi beberapa calon siswa. Oleh karena itu, kami menghimbau agar segera melengkapi formulir pendaftaran untuk memastikan keikutsertaan Anda dalam proses seleksi.\r\n\r\nKami sangat mengapresiasi antusiasme Anda untuk bergabung dengan keluarga besar SMK Wiyata Mandala. Kami percaya bahwa setiap calon siswa memiliki potensi yang luar biasa, dan kami ingin memberikan kesempatan yang sama kepada semua untuk mengikuti proses seleksi.\r\n\r\nFormulir pendaftaran dapat diakses melalui situs web resmi SMK Wiyata Mandala atau dapat diambil langsung di kantor pendaftaran kami selama jam kerja.\r\n\r\nDeadline untuk pengisian formulir adalah [masukkan tanggal]. Mohon untuk memperhatikan batas waktu ini karena proses seleksi akan segera dimulai dan kami tidak dapat memperpanjangnya.\r\n\r\nTerima kasih atas perhatian dan kerjasamanya. Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami di [masukkan kontak].\r\n\r\nHormat kami,\r\nSMK Wiyata Mandala\r\n\r\n\r\nMoh. Anas, S.Kom', NULL, '2024-04-24 08:42:07', '2024-04-24 08:42:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'exams.index', 'web', 'digunakan untuk menampilkan halaman ujian.', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(2, 'exams.create', 'web', 'digunakan untuk menampilkan halaman untuk menambahkan ujian baru.', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(3, 'exams.edit', 'web', 'digunakan untuk menampilkan halaman untuk mengubah ujian.', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(4, 'exams.delete', 'web', 'digunakan untuk menampilkan halaman untuk menghapus ujian.', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(5, 'subjects.index', 'web', 'digunakan untuk menampilkan halaman kategori soal.', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(6, 'subjects.create', 'web', 'digunakan untuk menampilkan halaman untuk tambah kategori soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(7, 'subjects.edit', 'web', 'digunakan untuk menampilkan halaman edit kategori soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(8, 'subjects.delete', 'web', 'digunakan untuk menghapus data kategori soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(9, 'questions.index', 'web', 'digunakan untuk menampilkan halaman soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(10, 'questions.create', 'web', 'digunakan untuk menampilkan halaman tambah soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(11, 'questions.edit', 'web', 'digunakan untuk menampilkan halaman edit soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(12, 'questions.delete', 'web', 'digunakan untuk melakukan hapus data soal', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(28, 'roles.index', 'web', 'digunakan untuk menampilkan halaman role', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(29, 'roles.create', 'web', 'digunakan untuk menampilkan halaman tambah data role', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(30, 'roles.edit', 'web', 'digunakan untuk menampilkan halaman edit data role', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(31, 'roles.delete', 'web', 'digunakan untuk menghapus data role', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(32, 'permissions.index', 'web', 'digunakan untuk menampilkan halaman daftar hak akses', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(33, 'users.index', 'web', 'digunakan untuk menampilkan halaman user', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(34, 'users.create', 'web', 'digunakan untuk menampilkan halaman tambah data user', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(35, 'users.edit', 'web', 'digunakan untuk menampilkan halaman edit data user', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(36, 'users.delete', 'web', 'digunakan untuk hapus data user', '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(37, 'pengumuman.index', 'web', 'digunakan untuk menampilkan halaman pengumuman', NULL, NULL),
(38, 'pengumuman.create', 'web', 'digunakan untuk menampilkan halaman tambah pengumuman', NULL, NULL),
(39, 'pengumuman.edit', 'web', 'digunakan untuk menampilkan halaman edit data pengumuman', NULL, NULL),
(40, 'pengumuman.delete', 'web', 'digunakan untuk melakukan delete data pengumuman', NULL, NULL),
(41, 'pengumuman.showuser', 'web', 'digunakan untuk menampilkan halaman data pengumuman untuk user', NULL, NULL),
(42, 'pengumuman.showadmin', 'web', 'digunakan untuk menampilkan data pengumuman untuk admnin', NULL, NULL),
(43, 'ppdb.index', 'web', 'digunakan untuk menampilkan halaman pendaftaran', NULL, NULL),
(44, 'ppdb.create', 'web', '', NULL, NULL),
(45, 'ppdb.edit', 'web', 'digunakan untuk menampilkan halaman edit data pendaftaran', NULL, NULL),
(46, 'ppdb.delete', 'web', '', NULL, NULL),
(47, 'ppdb.showadmin', 'web', 'digunakan untuk menampilkan data pendaftar untuk admin', NULL, NULL),
(48, 'ppdb.detail_data', 'web', 'digunakan untuk menampilkan halaman data diri pendaftar jika sudah melakukan pendaftaran', NULL, NULL),
(49, 'beritaadmin.index', 'web', 'digunakan untuk menampilkan halaman berita', NULL, NULL),
(50, 'beritaadmin.create', 'web', 'digunakan untuk menampilkan halaman tambah berita', NULL, NULL),
(51, 'beritaadmin.edit', 'web', 'digunakan untuk menampilkan halaman edit data berita', NULL, NULL),
(52, 'beritaadmin.delete', 'web', 'digunakan untuk hapus data berita', '2024-04-15 07:20:27', '2024-04-15 07:20:27'),
(53, 'message.index', 'web', 'digunakan untuk menampilkan halaman pesan', '2024-04-15 07:20:27', '2024-04-15 07:20:27'),
(54, 'message.show', 'web', 'digunakan untuk menampilkan halaman detail pesan', '2024-04-15 07:20:27', '2024-04-15 07:20:27'),
(55, 'kategori.index', 'web', 'digunakan untuk menampilkan halaman ketgori berita', '2024-04-15 07:20:27', '2024-04-15 07:20:27'),
(56, 'kategori.create', 'web', 'digunakan untuk menampilkan halaman tambah kategori berita', '2024-04-15 07:20:27', '2024-04-15 07:20:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jkel` varchar(255) NOT NULL,
  `tmp_lh` varchar(255) NOT NULL,
  `tgl_lh` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `jlh_sdr` varchar(255) NOT NULL,
  `sakit` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `jrs_1` varchar(255) NOT NULL,
  `alasan_1` varchar(255) NOT NULL,
  `jrs_cd` varchar(255) NOT NULL,
  `alasan_cd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ppdb`
--

INSERT INTO `ppdb` (`id`, `user_id`, `nama`, `jkel`, `tmp_lh`, `tgl_lh`, `agama`, `alamat`, `sekolah`, `no_wa`, `ayah`, `ibu`, `jlh_sdr`, `sakit`, `hobi`, `organisasi`, `jrs_1`, `alasan_1`, `jrs_cd`, `alasan_cd`, `created_at`, `updated_at`) VALUES
(5, 8, 'Irfanadiprasetyo', 'Laki-laki', 'Kediri', '2024-01-02', 'Islam', 'Kediri', 'Dkk', '552', 'X', 'D', '3', 'T', 'ngoding', 'Tapak SUci', 'AK', 'G', 'AK', 'B', '2024-01-02 22:43:10', '2024-01-03 08:24:05'),
(6, 20, 'Afifah Fauziah', 'Perempuan', 'Malang', '2002-05-18', 'Islam', 'Lawang Malang', 'Bangil', '085755700661', 'Bapak', 'Ibu', '3', '-', 'Tidur', '-', 'DKV', 'Minat', 'AK', 'Terpaksa', '2024-01-07 17:25:03', '2024-01-07 17:25:03'),
(7, 24, 'irfan adi prastyo', 'Laki-laki', 'Kediri', '2002-05-27', 'Islam', 'Dsn. Wonorejo Ds. Kampungbaru Kec. Kepung Kab. Kediri', 'SMK Wiyata Mandala', '085802733781', 'Riyono', 'Sunarsih', '2', 'alhamdulillah tidak', 'Ngoding dan Rebahan', 'Osis', 'TKJ', 'Karena saya suka tkj', 'TKJ', 'pokoknya harus tkj', '2024-02-06 08:35:03', '2024-02-06 08:35:03'),
(8, 25, 'irfan adi prastyo', 'Perempuan', 'Kediri', '2002-05-27', 'Islam', 'Dsn. Wonorejo Ds. Kampungbaru Kec. Kepung Kab. Kediri', 'SMK Wiyata Mandala', '085802733781', 'Riyono', 'Sunarsih', '2', 'alhamdulillah tidak', 'Ngoding dan Rebahan', 'osis', 'TKJ', 'Karena saya suka tkj', 'TKJ', 'pokoknya harus tkj', '2024-02-16 10:21:03', '2024-05-08 05:23:47'),
(9, 28, 'agus yuliono', 'Laki-laki', 'kediri', '1990-08-06', 'Islam', 'Dsn. Wonorejo Ds. Kampungbaru Kec. Kepung Kab. Kediri', 'SDN Kampungbaru 1', '081223453442', 'muhammad', 'winarti', '1', 'alhamdulillah tidak', 'ngoding', 'bismillah', 'TKJ', 'Karena saya suka tkj', 'ASPER', 'pokoknya harus tkj', '2024-04-27 01:38:01', '2024-04-27 01:38:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `detail` text NOT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `audio_id` varchar(255) DEFAULT NULL,
  `image_id` varchar(255) DEFAULT NULL,
  `document_id` varchar(255) DEFAULT NULL,
  `option_A` varchar(255) DEFAULT NULL,
  `option_B` varchar(255) DEFAULT NULL,
  `option_C` varchar(255) DEFAULT NULL,
  `option_D` varchar(255) DEFAULT NULL,
  `option_E` varchar(255) DEFAULT NULL,
  `answer` text NOT NULL,
  `explanation` text DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `detail`, `video_id`, `audio_id`, `image_id`, `document_id`, `option_A`, `option_B`, `option_C`, `option_D`, `option_E`, `answer`, `explanation`, `created_by`, `created_at`, `updated_at`) VALUES
(150, 8, 'Diketahui suku pertama (a1) = 7 dan beda (d) = 4. Jumlah suku (n) = 10. Tentukan suku ke-10 (an).', NULL, NULL, NULL, NULL, '43', '47', '51', '55', '59', 'A', 'Jawaban A', '1', '2024-04-24 09:57:22', '2024-04-24 09:57:22'),
(151, 8, 'Sebuah deret aritmatika memiliki suku pertama (a1) = 3 dan suku terakhir (an) = 33. Jumlah suku (n) = 7. Tentukan beda (d).', NULL, NULL, NULL, NULL, '3', '4', '5', '6', '7', 'C', 'Jawaban C', '1', '2024-04-24 09:57:22', '2024-04-24 09:57:22'),
(152, 8, 'Diketahui suku pertama (a1) = -6 dan jumlah suku (n) = 9. Tentukan suku terakhir (an).', NULL, NULL, NULL, NULL, '15', '18', '21', '24', '27', 'B', 'jawaban B', '1', '2024-04-24 09:57:22', '2024-04-24 09:57:22'),
(153, 8, 'Diketahui U = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10} dan A = {2, 4, 6, 8}. Mana yang merupakan himpunan komplemen A (A’)?', NULL, NULL, NULL, NULL, '{1, 3, 5, 7, 9, 10}', '{1, 2, 3, 4, 5, 6, 7, 8, 9, 10}', '{1, 5, 7, 9}', '{3, 5, 7, 9}', '{2, 4, 8}', 'A', 'Jawaban A', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(154, 8, 'Diberikan A = {a, b, c} dan B = {b, c, d}. Mana yang merupakan himpunan gabungan A dan B (A ∪ B)?', NULL, NULL, NULL, NULL, '{a, b, c}', '{a, b, c, d}', '{a, d}', '{b, c}', '{c, d}', 'B ', 'Jawaban B', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(155, 8, 'Jika A = {2, 4, 6, 8} dan B = {1, 2, 3, 4}, mana yang merupakan himpunan irisan A dan B (A ∩ B)?', NULL, NULL, NULL, NULL, '{2, 4}', '{1, 3, 6, 8}', '{2, 4, 6}', '{1, 2, 3, 4, 6, 8}', '{1, 2, 4}', 'A', 'jawaban A', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(156, 8, 'Diketahui suku pertama (a1) = 5 dan beda (d) = 3. Tentukan suku ke-7 (a7).', NULL, NULL, NULL, NULL, '17', '20', '23', '26', '29', 'C', 'jawaban C', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(157, 8, 'Jumlah suku (n) dari sebuah deret aritmatika adalah 10. Suku pertama (a1) = 2 dan suku terakhir (an) = 32. Tentukan beda (d).', NULL, NULL, NULL, NULL, '2', '3', '4', '5', '6', 'B', 'jawaban b', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(158, 8, 'Diketahui deret aritmatika: 5, 11, 17, 23, ... . Suku ke-10 dari deret ini adalah:', NULL, NULL, NULL, NULL, '53', '55', '57', '59', '61', 'D', 'jawaban D', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(159, 8, ' Diketahui deret aritmatika: 3, 8, 13, 18, ... . Suku ke-5 dari deret ini adalah:', NULL, NULL, NULL, NULL, '20', '21', '22', '23', '24', 'D', NULL, '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(160, 9, 'Choose the correct sentence with the right verb tense:', NULL, NULL, NULL, NULL, 'I was playing soccer when it will start raining.', 'I play soccer when it was raining.', 'I played soccer when it is raining.', 'I played soccer when it was raining.', 'I play soccer when it will rain.', 'D', 'Jawaban D', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(161, 9, 'Choose the correct modal verb: \"You _____ take an umbrella, it might rain.\"', NULL, NULL, NULL, NULL, 'can', 'could', 'may', 'must', 'might', 'E', 'jawaban E', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(162, 9, 'Identify the correct form of the verb in the present continuous tense: \"She ____ a book now.\"', NULL, NULL, NULL, NULL, 'reading', 'read', 'reads', 'is reading', 'will read', 'D', 'jawaban D', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(163, 9, 'Identify the correct question tag for: \"She doesn\'t like coffee, _____?\"', NULL, NULL, NULL, NULL, 'does she?', 'isn\'t she?', 'doesn\'t she?', 'does her?', 'is she?', 'A', 'jawaban A', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(164, 9, 'Choose the correct option to complete the sentence: \"She _____ to the cinema every weekend.\"', NULL, NULL, NULL, NULL, 'go', 'goes', 'going', 'goed', 'gone', 'B', 'jawaban B', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(165, 9, 'Identify the correct sentence:', NULL, NULL, NULL, NULL, 'He don\'t like pizza.', 'He doesn\'t likes pizza.', 'He doesn\'t like pizza.', 'He not like pizza.', 'He no likes pizza.', 'C', 'jawaban C', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(166, 9, 'Choose the appropriate word to complete the sentence: \"I will visit my grandparents _____ the weekend.\"', NULL, NULL, NULL, NULL, 'on', 'at', 'in', 'for', 'during', 'A', 'jawaban A', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(167, 9, 'Choose the correct conjunction to complete the sentence: \"She wanted to go out _____ it was raining.\"', NULL, NULL, NULL, NULL, 'but', 'an', 'or', 'so', 'because', 'A', 'jawaban A', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(168, 9, 'Which sentence is in the present continuous tense?', NULL, NULL, NULL, NULL, 'She will visit her grandparents.', 'They go to school by bus.', 'I am writing a letter.', 'He swam in the pool.', 'We have finished our homework.', 'C', 'jawaban C', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(169, 9, 'Choose the correct word to complete the sentence: \"I am ______ in reading books.\"', NULL, NULL, NULL, NULL, 'interesting', 'interest', 'interested', 'interests', 'interestly', 'C', 'jawaban C', '1', '2024-04-24 09:57:23', '2024-04-24 09:57:23'),
(170, 10, 'wedsd', NULL, NULL, NULL, NULL, 'gatau', 'sd', 'ds', 'sd', 'sd', 'C', NULL, '1', '2024-04-30 07:26:31', '2024-04-30 07:27:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-04-27 17:15:26', '2021-04-27 17:15:26'),
(3, 'student', 'web', '2021-04-27 17:15:26', '2021-04-27 17:15:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 3),
(38, 1),
(39, 1),
(40, 1),
(41, 3),
(42, 1),
(43, 1),
(43, 3),
(44, 3),
(45, 3),
(47, 1),
(48, 3),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Ilmu Pengetahuan Alam', 'ilmu-pengetahuan-alam', '2024-04-11 01:50:44', '2024-04-14 03:09:03'),
(8, 'Matematika', 'matematika', '2024-04-11 01:50:56', '2024-04-14 03:10:58'),
(9, 'Bahasa Inggris', 'bahasa-inggris', '2024-04-11 01:51:06', '2024-04-11 01:51:06'),
(10, 'Tes Penjurusan', 'tes-penjurusan', '2024-04-11 01:51:13', '2024-04-11 01:51:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$JUIbXI7tpE36vmcV5Osv8.q57sLvdwSrUT3mr1buN0zlt8Pqh1G7y', NULL, '2021-04-27 17:15:27', '2021-04-27 17:15:27'),
(2, 'Jono', 'jono@gmail.com', NULL, '$2y$10$Jln3Y.GqSW4FX5GVz98BEeSbJQDpzepXi5eNZOpKmJyPS6eNgQCLq', NULL, '2021-05-08 22:24:36', '2021-05-08 22:24:36'),
(3, 'Joni', 'joni@gmail.com', NULL, '$2y$10$i2gFzI8MIpXgSUjvBFGtTuwrzjEv50Gh2SsfXEzCqStfDskOPQz7i', NULL, '2021-05-08 22:25:00', '2021-05-08 22:25:00'),
(11, 'Irfan Adi Prastyo', 'irfanadiprasetyo27@gmail.com', NULL, '$2y$10$AqTDcUofAzjOaA8y9bcQoePT40Lp24Sskj8QVxawQdrHRM3/9RNSq', NULL, '2024-01-03 15:58:13', '2024-01-03 15:58:13'),
(24, 'User', 'user@gmail.com', NULL, '$2y$10$MJvyMeMP2bKBweHnxk2NiuddxrfxhW/D.56TjRK6N6wdiDxg0Bgh2', NULL, '2024-02-06 07:41:47', '2024-02-06 07:41:47'),
(25, 'irfan_21.31.0012', 'irfan_21310012@stimata.ac.id', NULL, '$2y$10$U0O7FOVMgcP3Ti3McRzUdeFn5TCRjTqVH7sgiD/A9mYLSo.FZEdPC', 'qFt24iOew1EYdHYxBBCaXKuwhhZMBAqF7PX87G9SAQClINu3w3L78TAHNFCI', '2024-02-16 07:13:54', '2024-02-16 07:16:00'),
(26, 'W. Dwi Achbar Prasetya', 'achbar@gmail.com', NULL, '$2y$10$sD8LlFnv500S1MN3/J6A6.pYqC3QE3LELYiegOY6WgNBki585c97u', NULL, '2024-02-24 10:31:26', '2024-02-24 10:31:26'),
(27, 'bayu', 'masbay589@gmail.com', NULL, '$2y$10$djYOKfyHCjKNV7.5/NQVPemsu6xf2wAc5CAount5TNmAMZXdDMA2K', NULL, '2024-04-23 01:20:49', '2024-04-23 01:20:49'),
(28, 'coba', 'coba@gmail.com', NULL, '$2y$10$jLqBUtMG8.rpKRxuMbciMe3Jlk7logZe1kf.NZK8hfFII7UMBB5Se', NULL, '2024-04-27 01:35:18', '2024-04-27 01:35:18'),
(29, 'irfan adi prastyo', 'gatau@gmail.com', NULL, '$2y$10$Furfe0Sl9SF/FOHFOBndF.m40uiV1ShK9EV381zFGF8heW2nrNv6W', NULL, '2024-05-06 14:18:32', '2024-05-06 14:18:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `title`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(5, 'tes', 'aa', 'QoXdqpZyVq1MZOcGQMDAYZ5i8AsFVTqmxWvhl0ZJ.mp4', '2024-02-25 12:08:05', '2024-02-25 12:08:05'),
(6, 'bismillah', 'semoga bisa', 'XW3k5WKklnJxnoXcV4Zk5fNo1g5IfMsvIEo372cp.mp4', '2024-02-26 03:06:26', '2024-02-26 03:06:26'),
(7, 'aa', 'ss', '5e809b4k0IuzGvS9KKLL55pBYkyM1bKW6nWExkGO.mp4', '2024-02-26 04:15:17', '2024-02-26 04:15:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_kategori_id_foreign` (`kategori_id`),
  ADD KEY `berita_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exam_user`
--
ALTER TABLE `exam_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `audio`
--
ALTER TABLE `audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `exam_user`
--
ALTER TABLE `exam_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_berita` (`id`),
  ADD CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
