-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 04:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_demak`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `faq_number` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `operasional_days` varchar(255) NOT NULL,
  `operasional_times` varchar(255) NOT NULL,
  `twitter_url` text NOT NULL,
  `facebook_url` text NOT NULL,
  `instagram_url` text NOT NULL,
  `maps_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone_number`, `faq_number`, `email1`, `email2`, `operasional_days`, `operasional_times`, `twitter_url`, `facebook_url`, `instagram_url`, `maps_url`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Kyai Jebat No.29, Demak Kode Pos 59511', '(0291) 681011', '(0291) 681644', 'dinpmptsp@demakkab.go.id', 'dinkominfo@demakkab.go.id', 'Senin - Jumat', '9:00AM - 05:00PM', 'https://x.com/dinpmptsp', 'https://www.facebook.com/bpptpm.kabdemak', 'https://www.instagram.com/dpmptsp_demak/', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.988250747389!2d110.637513!3d-6.891305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ebe72352dc0f%3A0x87fc1da9f1ccaea5!2sDinas%20Penanaman%20Modal%20dan%20Pelayanan%20Terpadu%20Satu%20Pintu%20(DPMPTSP)%20Kabupaten%20Demak!5e0!3m2!1sen!2sid!4v1738907803176!5m2!1sen!2sid', '2025-03-14 08:39:54', '2025-03-16 01:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(4, 'Bagaimana cara mendaftar dan mengajukan permohonan perizinan melalui portal ini?', 'Untuk mengajukan permohonan perizinan, langkah pertama adalah mendaftar sebagai pengguna dengan membuat akun melalui portal ini. Setelah akun Anda aktif, pilih jenis perizinan yang diinginkan (misalnya perizinan investasi, OPSGAS, NADIN, atau Paten), lengkapi formulir aplikasi dengan data yang diperlukan, dan unggah dokumen pendukung sesuai persyaratan yang berlaku. Seluruh proses pengajuan dapat dipantau melalui dashboard pengguna yang menyediakan informasi status secara real-time.', '2025-03-16 01:08:19', '2025-03-16 01:08:19'),
(5, 'Apa saja dokumen yang diperlukan untuk pengajuan perizinan?', 'Fotokopi identitas (KTP) Dokumen usaha (akta pendirian, SIUP, atau dokumen legalitas lainnya) NPWP Dokumen pendukung tambahan sesuai dengan jenis izin, seperti rencana investasi, analisis lingkungan, atau dokumen teknis lainnya.', '2025-03-16 01:08:39', '2025-03-16 01:08:39'),
(6, 'Bagaimana cara memantau status permohonan perizinan saya?', 'Untuk memantau status permohonan perizinan Anda di Kabupaten Demak, Anda dapat menggunakan layanan \"Tracking Izin\" yang disediakan oleh Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kabupaten Demak.', '2025-03-16 01:09:36', '2025-04-07 18:02:44'),
(7, 'Bagaimana prosedur pengajuan perizinan investasi?', 'Prosedur pengajuan perizinan investasi melibatkan pendaftaran melalui sistem online, pengisian data usaha, unggahan dokumen yang diperlukan, dan proses verifikasi oleh instansi terkait sebelum izin diterbitkan', '2025-03-16 01:09:57', '2025-04-07 18:03:17'),
(9, 'Apa itu layanan OPSGAS, NADIN, dan Paten, dan bagaimana cara mengajukannya?', 'Layanan OPSGAS, NADIN, dan Paten adalah layanan perizinan terkait sektor usaha tertentu. Cara mengajukannya adalah dengan mendaftar di portal perizinan, mengisi data yang diperlukan, dan memenuhi persyaratan yang telah ditentukan oleh regulasi yang berlaku', '2025-03-16 01:10:21', '2025-04-07 18:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_12_141710_create_profiles_table', 1),
(5, '2025_03_12_141735_create_news_table', 1),
(6, '2025_03_12_141840_create_services_table', 1),
(7, '2025_03_12_141854_create_faqs_table', 1),
(8, '2025_03_12_142000_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `visit_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `content`, `image_path`, `user_id`, `visit_count`, `created_at`, `updated_at`) VALUES
(4, 'Syawalan Tiga Desa Pesisir Demak: Larung Kepala Kerbau Jadi Simbol Syukur dan Kebersamaan', 'syawalan-tiga-desa-pesisir-demak-larung-kepala-kerbau-jadi-simbol-syukur-dan-kebersamaan', '<p>Demak - Suasana sakral dan meriah mewarnai pelaksanaan tradisi Syawalan di wilayah pesisir Kecamatan Bonang, Kabupaten Demak yang melibatkan tiga desa sekaligus, yakni Morodemak, Margolinduk, dan Purworejo, Senin (7/4/2025).&nbsp;</p>\r\n\r\n<p>Tradisi tahunan ini menjadi wujud rasa syukur para nelayan atas limpahan hasil laut serta harapan akan keselamatan dalam menjalankan kehidupan sehari-hari.</p>\r\n\r\n<p>Kegiatan dipusatkan di kawasan Tempat Pelelangan Ikan (TPI) Morodemak, yang dihiasi kapal-kapal nelayan dengan ornamen khas laut. Tradisi puncak berupa larung kepala kerbau ke laut lepas menjadi simbol utama sedekah laut, diiringi dengan doa bersama, istighotsah, serta pagelaran wayang kulit pada malam harinya.</p>\r\n\r\n<p>Kepala Desa Purworejo, Rifki Salafudin, menyampaikan bahwa tradisi larungan ini telah berlangsung turun-temurun dan menjadi pengikat kuat antar warga tiga desa pesisir.</p>\r\n\r\n<p>&quot;Selama setahun terakhir, hasil tangkapan nelayan cukup baik. Melalui sedekah laut ini, kita bersyukur kepada Allah SWT sekaligus memohon perlindungan bagi para nelayan agar terhindar dari bahaya saat melaut,&rdquo; tuturnya.</p>\r\n\r\n<p>Ia menambahkan bahwa sedekah laut tidak hanya sebagai perwujudan syukur manusia, tetapi juga bagian dari kesadaran untuk menjaga keseimbangan dengan alam dan seluruh makhluk ciptaan Tuhan.</p>\r\n\r\n<p>Tradisi ini diprakarsai oleh Paguyuban Nelayan dari tiga desa tersebut, dengan dukungan penuh dari pemerintah desa, karang taruna, serta berbagai unsur masyarakat. Kehadiran pejabat setempat, unsur Forkompincam, hingga para ulama dari tiga desa, turut menambah khidmat jalannya acara.</p>\r\n\r\n<p>Lebih dari sekadar ritual, Syawalan tiga desa ini menjadi momentum mempererat persaudaraan, gotong royong, dan identitas kultural masyarakat pesisir Demak.</p>\r\n\r\n<p>&quot;Tradisi ini mengingatkan kita bahwa kebersamaan adalah kekuatan utama. Jika masyarakat kompak dan saling mendukung, insyaAllah segala tantangan bisa kita hadapi bersama,&rdquo; pungkas Rifki. (Red-kmf/apj).</p>', 'news_images/Qn0J6NClGyogJM5FmGj6OHQOc0RBjXVij3fnKdxU.jpg', 1, 1, '2025-03-22 06:56:12', '2025-04-09 21:45:24'),
(5, 'Hari Pertama Bekerja Bupati Eistianah Diserbu Pegawai Untuk Halal Bihalal', 'hari-pertama-bekerja-bupati-eistianah-diserbu-pegawai-untuk-halal-bihalal', '<p>Demak - Ratusan ASN di lingkungan pemkab Demak memenuhi Pendopo Satya Bhakti Praja, mereka berjubel baik di dalam maupun di luar pendopo. Para ASN dari lintas sektor ini ingin berjabat tangan dalam acara halal bihalal bersama Bupati Demak Eisti&#39;anah dan para pejabat di jajaran Pemkab Demak ,Selasa, (08/04/2025)</p>\r\n\r\n<p>Sambil menunggu kehadiran Bupati dan pejabat lainya, para tamu ASN ini dipersilahkan menikmati hidangan makan siang dengan prasmanan. Dari kerumunan tersebut terlihat mereka saling bersalaman dam menyapa saat bertemu teman lainya yang berbeda tempat tugasnya.&nbsp;</p>\r\n\r\n<p>Sesaat setelah bupati dan para pejabat datang dan menuju tempat yang di sediakan panitia, terdengar melalui sound sistem suara petugas protokol mempersilahkan para ASN yang sudah menunggu dan berbaris rapi untuk bersalaman dan saling memaafkan.&nbsp;</p>\r\n\r\n<p>Sebelumnya pada hari pertama Idul Fitri Senin 31 April lalu, bupati juga menggelar open house di pendopo bersama unsur Forkopimda Demak. Tak sedikit ASN dan warga masyarakat yang datang pada momen tersebut untuk berhalal bi halal.&nbsp;</p>', 'news_images/TbsfHFxx4EveAEgwScGxtrQBXSjvdfE8EgMZSJSo.jpg', 1, 12, '2025-03-22 06:56:25', '2025-04-09 21:35:22'),
(6, 'Dinkominfo Terima Kuker Dari Forum OSIS Demak', 'dinkominfo-terima-kuker-dari-forum-osis-demak', '<p>Demak - Dinas Komunikasi dan Informatika Kabupaten Demak menerima kunjungan kerja dari Forum OSIS Demak. Rombongan yang dipimpin Ketua Forum OSIS Demak Ahmad Haikal Hamami diterima Kepala Bidang IKP Agus Pramono di Ruang Rapat Dinkominfo, Rabu (09/04/25).</p>\r\n\r\n<p>Maksud dan tujuan kuker dalam rangka memperkenalkan organisasi Forum OSIS Demak serta melakukan kerjasama terkait kegiatan kepemudaan.</p>\r\n\r\n<p>&rdquo;Forum OSIS Demak merupakan organisasi yang menaungi Forum OSIS SMA, SMK, MA di Kabupaten Demak. Tujuan organisasi ini untuk menggerakkan insan-insan pemuda di Kabupaten Demak agar lebih baik lagi, &rdquo;kata Ketua Forum OSIS Demak Ahmad Haikal Hamami.</p>\r\n\r\n<p>Selain itu, dirinya berharap Forum OSIS Demak dan Dinas Kominfo dapat melakukan kolaborasi dalam setiap kegiatan kepemudaan.</p>\r\n\r\n<p>Sementara, Kabid IKP Agus Pramono menyambut baik atas kunjungan tersebut.&nbsp;</p>\r\n\r\n<p>Dikatakan Agus Pramono, jika pihak Forum OSIS Demak memiliki agenda maupun kegiatan positif dapat bekerjasama dengan Dinkominfo Demak, khususnya dibidang informasi dan publikasi.&nbsp;</p>\r\n\r\n<p>&quot;Hal ini sejalan dengan tupoksi Dinkominfo bidang IKP yaitu melakukan diseminasi melalui komunitas informasi masyarakat (KIM),&quot;pungkasnya.(red-kmfo/ist)</p>', 'news_images/qSDv9HaZ4UunmUGzpKovfJfF4KEl5cByUlO3Zbwk.jpg', 1, 16, '2025-03-22 06:56:38', '2025-04-09 21:35:11'),
(8, 'Kapolres Demak Apresiasi Sinergitas dalam Operasi Ketupat Candi 2025', 'kapolres-demak-apresiasi-sinergitas-dalam-operasi-ketupat-candi-2025', '<p>Demak - Kapolres Demak, AKBP Ari Cahya Nugraha, menyampaikan apresiasi dan terima kasih kepada seluruh personel serta instansi yang tergabung dalam Operasi Ketupat Candi 2025 atas dedikasi dan kerja kerasnya dalam menjaga keamanan selama masa mudik dan perayaan Lebaran di Kabupaten Demak.</p>\r\n\r\n<p>Kapolres mengungkapkan bahwa situasi kamtibmas selama Lebaran terjaga dalam kondisi aman dan kondusif.</p>\r\n\r\n<p>&ldquo;Alhamdulillah, seluruh rangkaian Operasi Ketupat Candi 2025 di wilayah Kabupaten Demak berjalan lancar. Keberhasilan ini tidak lepas dari komitmen dan kerja sama seluruh pihak yang terlibat,&rdquo; kata AKBP Ari Cahya Nugraha. Saat apel pagi di Lapangan Wicaksana Leghawa Mapolres Demak, Rabu (9/4/2025).</p>\r\n\r\n<p>Menurutnya, terwujudnya keamanan dan kelancaran arus mudik merupakan hasil dari sinergi yang solid antar lembaga.</p>\r\n\r\n<p>&quot;Terima kasih kepada Pemerintah Kabupaten Demak, Kodim 0716/Demak, Satpol PP, Dinas Kesehatan, Dinas Perhubungan, PMI, BPBD, Senkom, Saka Bhayangkara, serta berbagai organisasi masyarakat yang telah berperan aktif mendukung tugas kepolisian,&quot; lanjutnya.</p>\r\n\r\n<p>Kapolres juga mengingatkan seluruh anggota untuk tetap menjaga kesehatan dan menjalin kekompakan, terutama dalam memperkuat koordinasi lintas instansi guna meningkatkan kualitas pelayanan kepada masyarakat.</p>\r\n\r\n<p>&ldquo;Semangat setelah libur Lebaran ini harus menjadi momentum untuk bekerja lebih maksimal. Mari kita terus berkomitmen mengayomi, melindungi, dan melayani masyarakat dengan sepenuh hati,&rdquo; tutupnya. (Red-kmf/apj).</p>', 'news_images/Uu5dp8dChR1yLN47CtAb54lZF5LpSLdUi1GgxdaB.jpg', 2, 6, '2025-04-08 22:54:58', '2025-04-12 03:13:46'),
(9, 'Jamaah Haji Demak Tertinggi Di Jateng 2025', 'jamaah-haji-demak-tertinggi-di-jateng-2025', '<p>Demak - Kepala Kantor Kemenag Demak, Taufiqur Rahman menyampaikan, Kabupaten Demak menjadi penyumbang jamaah haji tertinggi se-Jawa Tengah yang akan berangkat di tahun 2025.</p>\r\n\r\n<p>&quot;Ini terbanyak se-Jawa Tengah dari 35 Kabupaten/kota, untuk jamaah dengan usia tertua sekitar 93 Tahun, dan termuda 20 tahun,&rdquo; katanya.</p>\r\n\r\n<p>Sementara itu ia juga menjelaskan calon jamaah haji Kabupaten Demak terbagi menjadi enam kloter, yakni dua kloter campuran dan empat kloter utuh dan akan diberangkatkan pada pertengahan Bulan Mei 2025.&nbsp;</p>\r\n\r\n<p>&ldquo;Insyallah ini nanti akan terbagi dalam 6 kloter, Yang kloter campuran itu di kloter 38 nanti campuran dengan Grobogan dan Salatiga, kemudian 43 nantinya campuran dengan Jepara. Kemudian kloter 39-42 itu kloter utuh,&rdquo; jelasnya.</p>\r\n\r\n<p>Manasik Haji</p>\r\n\r\n<p>Sementara sebanyak 1.497 calhaj mengikuti bimbingan manasik haji tingkat kabupaten tahap I (satu) &nbsp;di Aula Gedung Ikatan Persaudaraan Haji Indonesia (IPHI) Demak.&nbsp;<br />\r\nTahun 2025 kuota haji Kabupaten Demak mencapai 1.636 calon jamaah haji, namun hingga pelaksanaan bimbingan manasik haji tingkat kabupaten tahap I sebanyak 1.497 orang yang hadir mengikuti bimbingan.</p>\r\n\r\n<p>&quot;Alhamdulillah, ini gabungan dari tahap I dan tahap II, sehingga ini hampir 100 persen jamaah haji Demak telah melunasi,&rdquo; kata Kepala Kantor Kemenag Demak, Taufiqur Rahman.</p>', 'news_images/5JmMQHosUxeQmxR9laSrQEjF62KvWhL2QYI1hEiC.jpg', 2, 7, '2025-04-09 19:49:30', '2025-04-12 03:13:19'),
(10, 'sertifikat', 'sertifikat', '<p>hello</p>', 'news_images/t1JdF7xEItga50XfeqIM3pLE7N1cJBKVRVtG2LAM.png', 2, 2, '2025-04-10 21:04:49', '2025-04-12 03:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `position`, `image_path`, `order`, `created_at`, `updated_at`) VALUES
(4, 'Drs. Umar Surya Suksmana, M.Kom', 'Kepala Dinas Komunikasi dan Informatika', 'profile_images/xaqfRukMxcHehTsqpWajyBFtluFYjzCCWowDypMJ.png', 1, '2025-03-16 01:15:11', '2025-03-16 01:15:11'),
(5, 'INDRIJANTO WIDODO, SE. MM', 'Sekretariat Dinas Komunikasi Dan Informatika', 'profile_images/MRMzuc9CcIhA01QizzgC7oCDHjtpVwqKXcyBTWk1.png', 2, '2025-03-16 01:15:41', '2025-03-16 01:15:41'),
(6, 'HARSO GUTOMO, ST', 'Bidang Aplikasi Informatika', 'profile_images/8PcXrcjJeS4iZLI6obFJSLPR5YfhTcltpgEelfiR.png', 3, '2025-03-16 01:16:13', '2025-03-16 01:16:13'),
(7, 'ANDY KURNIAWAN, S. Kom. MM.', 'Kepala Seksi Sistem dan Program Aplikasi', 'profile_images/ENsddZErn7kZ5DLwLM0QlSqUZAdqOtlArVzgESQg.png', 4, '2025-03-16 01:16:34', '2025-03-23 00:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `url`, `icon_url`, `created_at`, `updated_at`) VALUES
(2, 'BKPM', 'Kementerian Investasi dan Hilirisasi/Badan Koordinasi Penanaman Modal (Kemeninveshil/BKPM) adalah suatu kementerian di lingkungan Pemerintah Indonesia yang membidangi urusan investasi dan hilirisasi serta berada di bawah dan bertanggung jawab kepada Presiden.', 'https://bkpm.go.id/', 'icons/DxlQrpgLpiXEorXLZCUiu90filIggSCYUOayDEkk.png', '2025-03-16 01:24:35', '2025-03-16 01:24:35'),
(3, 'Si Invest', 'Aplikasi pengelolaan proses pengurusan perizinan berusaha di daerah yang menjadi komitmen bagi investor pasca terbitnya Peraturan Pemerintah Nomor 24 Tahun 2018 tentang Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik atau dikenal dengan Online Single Submission ( OSS ).', 'https://perizinan.demakkab.go.id/invest/', 'icons/wemBjeeYXuuDevQW0XSv2yV98oWIkn3BRoL9sneM.png', '2025-03-16 01:26:07', '2025-03-16 01:26:07'),
(4, 'SKM Online', 'Aplikasi Survei Kepuasan Masyarakat (SKM) secara online bertujuan untuk memudahkan penyelenggaraan SKM serta mendapatkan data indeks kepuasan masyarakat setiap unit pelayanan secara aktual dan berkala.', 'https://skm.go.id/', 'icons/6tERjE8V58jmakIUNlHMuXHTdCLrbv4JaQrIvqsh.jpg', '2025-03-16 01:27:03', '2025-03-16 01:27:03'),
(5, 'OPSGAS', 'OPSGAS adalah sistem yang digunakan oleh Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DINPMPTSP) Kabupaten Demak untuk mengelola berbagai jenis perizinan dan pendapatan daerah.', 'https://perizinan.demakkab.go.id/opsgas/', 'icons/hlsfDMon00hqKjsqd4mfF8sSQNvSCFuu7rm4fir6.png', '2025-03-16 01:27:44', '2025-03-16 01:27:44'),
(6, 'Si Nadin', 'Nadin adalah singkatan dari \"Naskah Dinas\", sebuah sistem yang digunakan oleh Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kabupaten Demak untuk mengelola dokumen resmi dan surat-menyurat secara elektronik.', 'https://perizinan.demakkab.go.id/nadin/', 'icons/mrRYP2g0e2I2QwvzEI296x7kpHli6JqAWpOtcfPc.png', '2025-03-16 01:28:19', '2025-03-16 01:28:19'),
(7, 'Paten Online', 'PATEN Online adalah platform yang disediakan oleh Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kabupaten Demak untuk memfasilitasi pengajuan berbagai jenis perizinan secara daring.', 'https://perizinan.demakkab.go.id/paten/', 'icons/Z9piZJDAg8ejpEPOjr0VbJIdpLPhYyzcdIXFtnCV.png', '2025-03-16 01:29:03', '2025-03-16 01:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fuSeaWGeaP2Mx9hTm4TIGuYllSMifZJXwx744yIL', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkhTOUs0eE5Jb2Y3RmVWWVJ2QWpuejdBaXdvbFRHS3ZmU1YwMkNLVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9uZXdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1744596632),
('h7VSmhf5Kl6hwhWPXsGr1RjqZjdtW2RXeLA4AbQZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieWtLeGIwc1hBbnZZYUVjYmRyazB5R2VIM1hiNjE3eG92c0VQN2o2diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1744539369),
('jCMWwSuq6UYyF5paeur1h3XHRSZ6lEdgLxRhDFp6', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRHIwTDhrVGNCU2F2a09taHZPS0pMNmR5dTV3OXJFcnZ4QXNTTHZIaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1744454028),
('OXjseYh4T9GC3qXlctBGxoDi2jqc6X9udkB7snCZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTFRjbzJMMTBld1cxUk15WDBNVG1qQ1BKY3MzZTN0Y0E5NEQ0a3p5MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1744346590);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','super_admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `position`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User edit', 'Administrator', 'admin@example.com', '2025-03-14 08:08:56', '$2y$12$E7pSYF.PLOsVzcSjepcbfO0jWnK5TwY4FmJ88zAeGkTBFJ4vb1OUS', 'admin', NULL, '2025-03-14 08:08:56', '2025-04-09 21:13:43'),
(2, 'Super Admin', 'Super Administrator', 'superadmin@example.com', '2025-03-14 08:08:56', '$2y$12$den0atcpK9j/QXdWmZ2kBe7kJ5Q9Mq7PZwfpkAYCNQ8oLtOE3plJy', 'super_admin', NULL, '2025-03-14 08:08:57', '2025-03-14 08:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_order_unique` (`order`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
