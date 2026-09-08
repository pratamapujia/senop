-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2026 at 08:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_senopv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `status` enum('draft','review','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `kategori_id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839828-iUJ1z.webp', '2026-09-08 03:57:08', '2026-09-08 03:57:08'),
(2, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839828-YOLTM.webp', '2026-09-08 03:57:09', '2026-09-08 03:57:09'),
(3, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839829-JanSz.webp', '2026-09-08 03:57:09', '2026-09-08 03:57:09'),
(4, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839829-vX9DL.webp', '2026-09-08 03:57:09', '2026-09-08 03:57:09'),
(5, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839829-UYSDF.webp', '2026-09-08 03:57:09', '2026-09-08 03:57:09'),
(6, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839829-DLFtW.webp', '2026-09-08 03:57:10', '2026-09-08 03:57:10'),
(7, 'Dokumentasi Teknik Kendaraan Ringan', NULL, 9, 'teknik-kendaraan-ringan-1788839830-R2C7I.webp', '2026-09-08 03:57:11', '2026-09-08 03:57:11'),
(8, 'Dokumentasi Desain Komunikasi Visual', NULL, 5, 'desain-komunikasi-visual-1788854024-ET3YJ.webp', '2026-09-08 07:53:44', '2026-09-08 07:53:44'),
(9, 'Dokumentasi Desain Komunikasi Visual', NULL, 5, 'desain-komunikasi-visual-1788854024-Ezn3e.webp', '2026-09-08 07:53:44', '2026-09-08 07:53:44'),
(10, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-tqL7R.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(11, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-6ugwC.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(12, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-p3WZL.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(13, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-wDRbt.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(14, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-Byua0.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(15, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-ebMxd.webp', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(16, 'Dokumentasi Manajemen Perkantoran', NULL, 6, 'manajemen-perkantoran-1788854437-I7GMG.webp', '2026-09-08 08:00:38', '2026-09-08 08:00:38'),
(17, 'Dokumentasi Rekayasa Perangkat Lunak', NULL, 7, 'rekayasa-perangkat-lunak-1788855330-iRmQF.webp', '2026-09-08 08:15:31', '2026-09-08 08:15:31'),
(18, 'Dokumentasi Rekayasa Perangkat Lunak', NULL, 7, 'rekayasa-perangkat-lunak-1788855331-cWE0K.webp', '2026-09-08 08:15:31', '2026-09-08 08:15:31'),
(19, 'Dokumentasi Teknik Sepeda Motor', NULL, 10, 'teknik-sepeda-motor-1788855688-mN8iy.webp', '2026-09-08 08:21:28', '2026-09-08 08:21:28'),
(20, 'Dokumentasi Teknik Sepeda Motor', NULL, 10, 'teknik-sepeda-motor-1788855688-vgklt.webp', '2026-09-08 08:21:28', '2026-09-08 08:21:28'),
(21, 'Dokumentasi Teknik Sepeda Motor', NULL, 10, 'teknik-sepeda-motor-1788855688-p19kC.webp', '2026-09-08 08:21:28', '2026-09-08 08:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kode_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hero` text COLLATE utf8mb4_unicode_ci,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `peluang_kerja` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kategori_id`, `kode_jurusan`, `nama_jurusan`, `deskripsi_hero`, `konten`, `peluang_kerja`, `created_at`, `updated_at`) VALUES
(1, 9, 'TKR', 'Teknik Kendaraan Ringan', 'Teknik Kendaraan Ringan merupakan program keahlian yang mempelajari tentang teknologi, perawatan, pemeriksaan, dan perbaikan meliputi sistem mesin, sistem sasis, sistem pemindah tenaga, sistem kelistrikan, konversi energi, dan teknologi modern dari kendaraan bermotor, khususnya kendaraan roda 4/mobil.', '<p><strong class=\"ql-size-large\">Pengertian jurusan</strong></p><p>‎Program keahlian Teknik Kendaraan Ringan merupakan program keahlian yang mempelajari tentang teknologi, perawatan, pemeriksaan, dan perbaikan meliputi sistem mesin, sistem sasis, sistem pemindah tenaga, sistem kelistrikan, konversi energi, dan teknologi modern dari kendaraan bermotor, khususnya kendaraan roda 4/mobil.&nbsp;</p><p>‎Pada program keahlian teknik kendaraan ringan juga di berikan pelatihan penerapan standart prosedur, K3 (kesehatan keselamatan kerja), dan etika kerja sesuai dengan kebutuhan industri otomotif sehingga lulusan dari jurusan Teknik Kendaraan Ringan diharapkan bisa langsung dapat diterima pada industri yang sesuai.</p><p>‎</p><p>‎<strong class=\"ql-size-large\">Kelebihan</strong></p><ol><li>Selain pembelajaran teori peserta didik juga diajarkan untuk praktik secara langsung.</li><li>Pembelajaran yang diterapkan mengikuti perkembangan teknologi industri.</li><li>Peserta didik diberikan Pengalaman Kerja Lapangan secara langsung pada program Magang di bengkel seperti (Auto 2000 Toyota, Mitsubishi sunstar, Daihatsu Asco, Wuling Pradana, Hyundai daya sukses sejati, DLL.)</li><li>Pembelajaran melibatkan pihak industri secara langsung pada program \"Kelas Pintar Bersama Toyota\"</li></ol><p>‎</p><p>‎<strong class=\"ql-size-large\">Hasilnya</strong></p><ol><li>Mengenal teknologi dasar sampai teknologi terbaru pada kendaraan&nbsp;</li><li>Terampil dalam melakukan perawatan dan pemeriksaan kendaraan</li><li>Terampil dalam menggunakan peralatan-peralatan di bengkel</li><li>Memiliki kesiapan untuk menjadi teknisi kendaraan profesional</li></ol>', '[\"Mekanik Kendaraan\",\"Service Advisor\",\"Partman\",\"Wirausahawan Otomotif\",\"Sales Showroom\"]', '2026-09-08 03:57:08', '2026-09-08 07:29:41'),
(3, 5, 'DKV', 'Desain Komunikasi Visual', '(DKV) adalah jurusan yang mempelajari cara membuat konten visual yang menarik dan menjual.', '<p><strong class=\"ql-size-large\">Pengertian Jurusan</strong></p><p>Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari cara membuat konten visual yang menarik dan menjual. Jika kamu suka menggambar, suka fotografi, suka main sosmed (Instagram/TikTok), suka bikin logo, atau suka editing video, maka jurusan ini sangat tepat untukmu.</p><p>Di DKV mengubah hobimu menjadi skill profesional. Kamu akan dididik menjadi Desainer Muda yang Siap Kerja setelah lulus. Kamu akan lebih banyak memegang kamera, menggambar,&nbsp;mengedit dan mengoperasikan software desain.</p><p><br></p><p><strong class=\"ql-size-large\">Kelebihan</strong></p><p>Kami paham sekali, zaman sekarang siswa itu butuh pembelajaran yang seru, relevan, dan nggak ketinggalan jaman. Makanya, kami merancang jurusan DKV ini dengan standar industri kreatif masa kini.</p><ul><li>Belajar Anti Bosan (Learning by Doing)</li><li>Menguasai Software Standar Industri</li><li>Magang Langsung di Dunia Kerja (PKL / Prakerin)</li><li>Guru Berpengalaman &amp; Aktif</li><li>Fasilitas Kelas &amp; Lab yang lengkap</li></ul><p><br></p><p><strong class=\"ql-size-large\">Hasil</strong></p><ul><li>Jago Desain Grafis</li><li>Jago Fotografi</li><li>Jago Videografi</li><li>Jago Editing</li><li>Jago Ilustrasi</li><li>Jago Branding</li></ul>', '[\"Desainer Grafis\",\"Fotografer & Videografer\",\"Editor Foto & Video\",\"Ilustrator\",\"Konten Creator\",\"Pengusaha Percetakan\"]', '2026-09-08 07:53:44', '2026-09-08 07:53:44'),
(4, 6, 'MP', 'Manajemen Perkantoran', 'Program keahlian Manajemen Perkantoran merupakan program keahlian yang mempelajari tentang perencanaan, pengelolaan, dan pengawasan tugas-tugas administratif serta operasional kantor.', '<p><strong class=\"ql-size-large\">Pengertian Jurusan&nbsp;</strong></p><p>Program keahlian Manajemen Perkantoran merupakan program keahlian yang mempelajari tentang perencanaan, pengelolaan, dan pengawasan tugas-tugas administratif serta operasional kantor. Pembelajarannya meliputi korespondensi bisnis, manajemen kearsipan, otomatisasi tata kelola perkantoran, manajemen humas dan keprotokolan, serta pemanfaatan teknologi informasi dan perangkat lunak perkantoran modern. Pada program keahlian Manajemen Perkantoran juga diberikan pelatihan penerapan Standar Operasional Prosedur (SOP), pelayanan prima (service excellence), K3 perkantoran, dan etika profesi (komunikasi dan penampilan) sesuai dengan standar kebutuhan dunia usaha dan dunia industri (DUDI), sehingga lulusan dari jurusan ini diharapkan bisa langsung diserap sebagai tenaga profesional di berbagai instansi pemerintah maupun swasta.</p><p><br></p><p><strong class=\"ql-size-large\">Kelebihan</strong></p><ul><li>Praktik simulasi perkantoran modern secara langsung di laboratorium perkantoran (seperti penanganan telepon, rapat, dan presentasi bisnis).</li><li>Peserta didik diberikan Pengalaman Kerja Lapangan secara langsung pada program Magang (PKL) di instansi terkemuka seperti (PT. Aero Food Indonesia ,PT . SRA Indonesia Cargo , PT. GATRANS ,PT PAREWA ,BUMN seperti PT Pos Indonesia, Perusahaan Swasta Nasional, DLL.)</li><li>Penguasaan Teknologi Terkini (sistem pengarsipan digital, Google Workspace, Microsoft Office tingkat lanjut).</li><li>Pengembangan Karakter Profesional yang dimana siswa dilatih secara khusus untuk memiliki service excellence (pelayanan prima), etika profesi yang kuat, dan penampilan profesional.</li><li>Fleksibilitas Lintas Sektor sehingga lulusan jurusan ini sangat fleksibel dan dibutuhkan di hampir semua sektor industri.</li></ul><p><br></p><p><strong class=\"ql-size-large\">Hasilnya</strong></p><ul><li>Mengenal dan menguasai alur administrasi serta sistem kearsipan baik yang berbasis konvensional maupun digital.</li><li>Terampil dalam mengoperasikan berbagai perangkat lunak perkantoran (Ms. Office, Ms.Excel serta sistem database, korespondensi email) dan mesin-mesin kantor.</li><li>Memiliki kemampuan komunikasi yang baik, luwes dalam public relations, serta mampu memberikan pelayanan prima kepada pelanggan/klien.</li><li>Memiliki kesiapan, ketelitian, dan kedisiplinan tinggi untuk menjadi tenaga administrasi profesional.</li></ul>', '[\"Staf Administrasi\",\"Sekretaris Perusahaan \\/ Asisten Manajer\",\"Resepsionis \\/ Frontliner\",\"Staf Personalia (HRD) \\/ Staf Kearsipan\",\"Customer Service \\/ Staf Hubungan Masyarakat (Humas)\"]', '2026-09-08 08:00:37', '2026-09-08 08:00:37'),
(5, 7, 'RPL', 'Rekayasa Perangkat Lunak', 'Mencetak Programmer Hebat, Berkarakter, dan Siap Kerja Industri 4.0', '<p><strong class=\"ql-size-large\">Pengertian Jurusan</strong></p><p>Rekayasa Perangkat Lunak / RPL adalah program keahlian di bidang Teknologi Informasi yang fokus mempelajari cara menganalisis, merancang, membuat, menguji, dan memelihara software/aplikasi.</p><p>Siswa RPL SMK Senopati tidak hanya belajar \"<strong><em>coding</em></strong>\". Tapi belajar dari hulu ke hilir:&nbsp;</p><p><em>Ide</em> → <em>Desain</em> → <em>Coding</em> → <em>Testing</em> → <em>Deploy</em> →<em> Maintenance</em></p><p><br></p><p><strong class=\"ql-size-large\">Kelebihan</strong></p><ul><li>Teaching Factory Siswa langsung mengerjakan project nyata dari sekolah &amp; DUDI. Contoh: Website PPDB, Aplikasi Absensi Guru</li><li>Link &amp; Match dengan Industri MoU dengan perusahaan IT Sidoarjo &amp; Surabaya. Siswa PKL di Software House &amp; Startup</li><li>Fasilitas Lab Lengkap	2 Lab Komputer dengan PC Core i5, RAM 8GB, SSD, Internet 50 Mbps. Software: VS Code, Android Studio, Laravel, Figma</li><li>Sertifikasi Kompetensi Siswa kelas 12 wajib Uji Kompetensi Keahlian UKK + Sertifikasi LSP dari BNSP</li><li>Guru Produktif Kompeten Guru bersertifikat BNSP &amp; punya pengalaman di dunia industri IT</li><li>Portofolio &amp; GitHub Setiap siswa wajib punya portofolio project di GitHub. Ini bekal melamar kerja</li><li>Ekstrakurikuler IT Ada Club Coding, Robotik, dan Cyber Security</li></ul><p><br></p><p><strong class=\"ql-size-large\">Hasil</strong> </p><p>Hasil karya siswa tidak hanya untuk nilai, tapi sudah dipakai sekolah dan masyarakat:</p><p><br></p><ul><li>Aplikasi PPDB Online SMK Senopati&nbsp;</li></ul><p class=\"ql-indent-1\">Dibuat tim RPL kelas 12. Digunakan untuk pendaftaran siswa baru 100% online</p><ul><li>Website Profil SMK Senopati + Sistem Absensi Guru&nbsp;</li></ul><p class=\"ql-indent-1\">Terintegrasi dengan QR Code. Efisien dan paperless</p><ul><li>Aplikasi Kasir &amp; Inventaris Koperasi Sekolah&nbsp;</li></ul><p class=\"ql-indent-1\">Berbasis Web dan Android. Memudahkan bendahara koperasi</p><ul><li>Aplikasi Mobile \"Siap Kerja\"&nbsp;</li></ul><p class=\"ql-indent-1\">Aplikasi lowongan kerja khusus alumni SMK Senopati</p><ul><li>Desain UI/UX Aplikasi&nbsp;</li></ul><p class=\"ql-indent-1\">Project siswa untuk UMKM di Sedati: Toko Ikan, Warung Kopi, Bengkel</p><p><br></p><p>Kerjasama Magang 90% Siswa di DUDI IT</p><p>Mitra: AXIOO class program, Software House Surabaya inixindo surabaya, Startup Sidoarjo, Diskominfo Sidoarjo</p><p><br></p>', '[\"Programmer\",\"Android & Web Developer\",\"UI\\/UX Desainer\",\"Wirausaha Digital\",\"Freelancer\",\"Staff IT Perusahaan\"]', '2026-09-08 08:15:30', '2026-09-08 08:15:30'),
(6, 10, 'TSM', 'Teknik Sepeda Motor', '(TSM) merupakan program keahlian yang mempelajari tentang teknologi, perawatan, pemeriksaan, perbaikan, dan pengembangan sepeda motor', '<p><strong class=\"ql-size-large\">Pengertian Jurusan</strong></p><p>Program keahlian Teknik Sepeda Motor (TSM) merupakan program keahlian yang mempelajari tentang teknologi, perawatan, pemeriksaan, perbaikan, dan pengembangan sepeda motor. Materi yang dipelajari meliputi sistem mesin, sistem bahan bakar, sistem pemindah tenaga, sistem sasis, sistem kelistrikan, sistem pengereman, sistem suspensi, serta teknologi sepeda motor modern.</p><p>Program keahlian Teknik Sepeda Motor juga bekerja sama dengan Honda dalam memberikan pembelajaran dan pelatihan yang sesuai dengan standar industri otomotif. Siswa dibekali dengan keterampilan praktik menggunakan peralatan dan teknologi yang digunakan di dunia kerja, serta memahami SOP (Standar Operasional Prosedur), K3 (Keselamatan dan Kesehatan Kerja), budaya kerja, dan etika kerja industri.</p><p>Keunggulan Kelas Honda di SMK SENOPATI (Satu Hati Education Program) Sebagai sekolah yang bermitra resmi dengan pabrikan otomotif terkemuka (Honda), kami menghadirkan pengalaman belajar yang berbeda. Kurikulum yang diajarkan telah disinkronisasikan langsung dengan kebutuhan industri otomotif saat ini dan Dengan adanya kerja sama dengan Honda, siswa diharapkan memiliki kompetensi yang sesuai dengan kebutuhan industri, mampu melakukan perawatan dan perbaikan sepeda motor dengan baik, serta memiliki kesiapan untuk melanjutkan pendidikan maupun bekerja di bengkel resmi Honda (AHASS), industri otomotif, maupun membuka usaha bengkel secara mandiri.</p><p><br></p><p><strong class=\"ql-size-large\">Kelebihan</strong></p><ul><li>Fasilitas Praktik Standar Industri: Siswa berlatih menggunakan alat dan unit motor dengan teknologi terbaru, sesuai standar bengkel resmi.</li><li>Pengajar Profesional: Dididik oleh guru-guru produktif yang telah lulus sertifikasi khusus dari industri (sertifikasi Honda).</li><li>Budaya Kerja Nyata: Siswa tidak hanya dilatih hard skill, tetapi juga soft skill. Kami menerapkan kedisiplinan tinggi, Standar Operasional Prosedur (SOP) resmi, etika pelayanan, serta Kesehatan dan Keselamatan Kerja (K3) layaknya di dunia industri profesional.</li></ul><p><br></p><p><strong class=\"ql-size-large\">Hasil</strong></p><p>Selama menempuh pendidikan di jurusan Kelas Honda, siswa tidak hanya dibekali teori di dalam kelas, tetapi juga didorong untuk membuktikan kompetensi mereka melalui berbagai hasil karya dan pencapaian nyata, di antaranya:</p><ul><li>Penguasaan Teknis Berstandar Industri: Siswa mampu melakukan servis berkala, perbaikan kelistrikan, analisis sistem injeksi canggih (PGM-FI), hingga overhaul mesin secara mandiri dan akurat sesuai SOP bengkel resmi Honda.</li><li>Pengalaman Praktik Kerja Lapangan (PKL) Berkualitas: program magang terjadwal secara langsung di jaringan bengkel resmi AHASS</li><li>Daya Saing di Ajang Vokasi: Pembelajaran di sekolah secara aktif mencetak siswa yang siap bersaing dan unjuk gigi dalam berbagai ajang kompetisi keahlian otomotif bergengsi.</li></ul>', '[\"Mekanik \\/ Teknisi Bengkel\",\"Service Advisor\",\"Wirausaha Otomotif\",\"Mekanik Manufaktur Otomotif\"]', '2026-09-08 08:21:28', '2026-09-08 08:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan', 'kegiatan', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(2, 'Prestasi', 'prestasi', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(3, 'Ekstrakurikuler', 'ekstrakurikuler', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(4, 'Fasilitas', 'fasilitas', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(5, 'DKV', 'dkv', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(6, 'MP', 'mp', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(7, 'RPL', 'rpl', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(8, 'TKJ', 'tkj', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(9, 'TKR', 'tkr', '2026-09-08 03:52:42', '2026-09-08 03:52:42'),
(10, 'TSM', 'tsm', '2026-09-08 03:52:42', '2026-09-08 03:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_24_022300_create_strukturs_table', 1),
(5, '2026_07_07_185209_create_kategori_table', 1),
(6, '2026_08_26_001446_create_agenda_table', 1),
(7, '2026_08_26_051059_create_berita_table', 1),
(8, '2026_08_26_062908_add_status_to_berita_table', 1),
(9, '2026_08_27_143932_create_galeri_table', 1),
(10, '2026_08_28_095149_create_testimoni_table', 1),
(11, '2026_09_07_183231_create_jurusan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8mOt4aW3KEjWXpZqzwnI4ninoipvYlIFNym2zpeV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36 Edg/152.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzRrM0ZmMzFCSm1ZaEpFNXZnNkw4Nk5SUXZVeTZVZ3BSSUpEZG5OeSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9qdXJ1c2FuL3RrciI7czo1OiJyb3V0ZSI7czoxMjoianVydXNhbi5zaG93Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1788855798),
('XTu2LeC8BgAbr0MA3Q06xZbkxG9T9XrKRFapmoPQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36 Edg/152.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicFluTFpkNjR2aVE1RzhxallzWTNYZDhhbWNzemdFbmdvb01YZEdTeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2RtLWdhbGVyaSI7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZG0tanVydXNhbiI7czo1OiJyb3V0ZSI7czoxNjoiZG0tanVydXNhbi5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1788855688);

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','non-aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimoni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@mail.com', NULL, '$2y$12$4Ei4bjy/AiYcz00Yv9Fzm.h.wboU723ZtdTRQId7hHMQYbdcNXH3e', NULL, '2026-09-08 03:52:42', '2026-09-08 03:52:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `berita_slug_unique` (`slug`),
  ADD KEY `berita_kategori_id_foreign` (`kategori_id`),
  ADD KEY `berita_user_id_foreign` (`user_id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_kategori_id_foreign` (`kategori_id`);

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
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurusan_kode_jurusan_unique` (`kode_jurusan`),
  ADD KEY `jurusan_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
