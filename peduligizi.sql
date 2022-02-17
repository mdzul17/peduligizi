-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 05:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peduligizi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `gambar`, `konten`, `tanggal`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Random Artikel', '', 'Random', '2022-01-24', '2022-01-24 03:37:44', '2022-01-24 03:23:26', '2022-01-24 03:37:44'),
(2, 'Tumis Buncis', '', 'Tumis Buncis', '2022-01-28', '2022-02-01 19:49:58', '2022-01-28 02:50:09', '2022-02-01 19:49:58'),
(3, 'Ini 5 Makanan Penambah Darah Guna Mencegah Anemia', 'assets/galeriartikel/vyT49r0Ur6h2SHKdFzTx3w1RaVNbgiHqBm7xGFiV.png', '<p>Kondisi anemia terjadi saat jumlah sel darah merah kadarnya cukup rendah. Jika jumlah sel darah merah rendah, maka tubuh harus bekerja lebih keras untuk mengirimkan oksigen ke seluruh tubuh. Tubuh menghasilkan jutaan sel darah merah setiap hari yang diproduksi di sumsum tulang dan beredar ke seluruh tubuh selama 120 hari. Kemudian, mereka pergi ke hati, untuk dihancurkan dan terjadi daur ulang komponen seluler mereka.</p>\r\n\r\n<p>Saat kamu mengidap anemia, kamu memiliki banyak risiko komplikasi kesehatan, jadi penting untuk mengembalikan kadar sel darah merah sesegera mungkin. Jangan khawatir, berikut ini jenis makanan penambha darah yang bisa dikonsumsi:</p>\r\n\r\n<ul>\r\n	<li><strong>Sayuran Berdaun Hijau Gelap</strong></li>\r\n</ul>\r\n\r\n<p>Tubuh membutuhkan zat besi untuk menghasilkan hemoglobin yang berfungsi membawa dan menyimpan oksigen di dalam tubuh. Tidak hanya itu, zat besi juga akan membantu menjaga sel-sel tubuh untuk menyimpan oksigen. Salah satu sumber makanan yang dapat menambah asupan zat besi di dalam tubuh adalah sayuran berdaun hijau gelap, seperti bayam dan kale. Masukkanlah jenis sayuran hijau ini ke dalam makanan kamu setiap hari untuk mengatasi anemia.</p>\r\n\r\n<ul>\r\n	<li><strong>Daging Merah</strong></li>\r\n</ul>\r\n\r\n<p>Daging merah, terutama daging sapi juga bisa menambah sel darah merah di dalam tubuh. Jika kamu mengidap anemia, maka disarankan untuk mengonsumsi daging sapi setidaknya 2 hingga 3 kali seminggu. Menurut National Diet and Nutrition Survey, 27 persen wanita berusia 19 hingga 64 tahun tidak mendapatkan cukup zat besi karena menghindari makan daging dan tidak menggantinya dengan makanan lain untuk asupan zat besi. Akibatnya mereka kerap mengalami anemia. Meskipun begitu, daging merah tetap disarankan asalkan dimakan secukupnya dan menghindari mengonsumsi bagian lemaknya.</p>\r\n\r\n<ul>\r\n	<li><strong>Buah Bit</strong></li>\r\n</ul>\r\n\r\n<p>Salah satu makanan penambah sel darah merah yang tergolong buah-buahan adalah buah bit. Ini karena di dalam buah bit terdapat vitamin B9 atau asam folat yang akan membantu produksi sel darah merah. Cara yang paling mudah untuk mengonsumsi bit adalah dengan membuatnya menjadi jus. Atau kamu bisa mencampurkan buah bit ke dalam salad.</p>\r\n\r\n<ul>\r\n	<li><strong>Telur</strong></li>\r\n</ul>\r\n\r\n<p>Telur ayam nyatanya tidak hanya sumber protein yang baik nan murah tetapi juga pilihan tepat untuk menambah sel darah merah. Ini karena di dalam telur terkandungan zat besi yang tinggi demikian juga gizi seperti kalsium, karbohidrat, vitamin B1, vitamin B2 yang disarankan untuk dikonsumsi para pengidap anemia. Oleh karena itu, tidak ada lagi alasan untuk tidak mengonsumsi telur setiap hari. Kamu bisa menjadikannya sebagai sarapan sehat dengan cara direbus, telur mata sapi, atau diorek.</p>\r\n\r\n<ul>\r\n	<li><strong>Susu</strong></li>\r\n</ul>\r\n\r\n<p>Minuman sehat satu ini memiliki banyak sekali manfaat, terutama untuk pengidap anemia. Susu adalah sumber kalsium yang tinggi dan juga kaya akan zat besi untuk pembentukan sel darah merah. Konsumsi susu sekali sehari dapat meningkatkan jumlah zat besi dalam tubuh sehingga terhindar dari risiko anemia.</p>', '2022-02-02', NULL, '2022-02-01 19:55:58', '2022-02-13 19:06:52'),
(4, 'Mengenal Berbagai Manfaat Buah Mahoni untuk Kesehatan', 'assets/galeriartikel/0xPJlTN7lLkbhix79OyGujVNTgDWfLnn0W6eRYjo.png', '<p>Pohon mahoni memiliki bentuk kayu yang tinggi dan besar. Tanaman ini memiliki buah yang berwarna cokelat dan berbentuk oval. Dalam buah mahoni terdapat biji mahoni yang berbentuk pipih dan bisa dimanfaatkan untuk kesehatan. Biji mahoni dikenal sebagai obat herbal yang bisa digunakan untuk mengatasi beberapa keluhan kesehatan hingga penyakit kronis. Biji tanaman ini memiliki rasa yang pahit. Meskipun pahit, terdapat berbagai kandungan senyawa di dalamnya. Kandungan senyawa dalam biji dan buah mahoni memiliki sifat antimikroba, antiperadangan, antioksidan, antikanker, antitumor, antimalaria dan antidiabetik. Selain itu, biji mahoni mengandung nutrisi, seperti serat, protein, flavonoid, saponin, dan phytochemicals. Dengan beragam kandungan senyawa dan nutrisi didalamnya, biji mahoni dipercaya memiliki banyak manfaat untuk kesehatan. Berikut manfaat biji dan buah mahoni:</p>\r\n\r\n<ul>\r\n	<li><strong>Menurunkan Tekanan Darah</strong></li>\r\n</ul>\r\n\r\n<p>Di beberapa negara, seperti Malaysia, biji dan buah mahoni dipercaya sebagai obat tradisional yang bisa menurunkan dan mengontrol tekanan darah. Hal ini disebabkan kandungan flavonoid pada buah mahoni yang bisa digunakan sebagai antihipertensi.</p>\r\n\r\n<ul>\r\n	<li><strong>Mengobati Diabetes</strong></li>\r\n</ul>\r\n\r\n<p>Diabetes adalah penyakit kronis yang ditandai dengan meningkatkan kadar gula darah dalam tubuh. Pola makan tepat bisa membantu kamu mengontrol gula darah. Selain itu, buah mahoni juga dipercaya memiliki manfaat yang serupa. Kamu bisa memanfaatkan ekstrak buah mahoni sebagai obat herbal diabetes. Menurut penelitian yang terdapat pada jurnal Heliyon, ekstrak buah mahoni memiliki anti diabetes yang sebanding dengan obat sintetis dan tidak menunjukkan efek toksik jika digunakan.</p>\r\n\r\n<ul>\r\n	<li><strong>Mengobati Malaria</strong></li>\r\n</ul>\r\n\r\n<p>Malaria adalah penyakit infeksi parasit yang penularannya disebabkan oleh gigitan nyamuk. Di Indonesia, biji dan buah mahoni terkenal menjadi salah satu obat herbal yang bisa mengatasi malaria. Hal ini disebabkan adanya kandungan senyawa yang memiliki sifat antimalaria di dalam buah mahoni.</p>\r\n\r\n<ul>\r\n	<li><strong>Melawan Infeksi</strong></li>\r\n</ul>\r\n\r\n<p>Dalam biji dan buah mahoni memiliki kandungan senyawa dengan sifat antimikroba, seperti anti bakteri dan anti jamur. Hal ini membuat biji dan buah mahoni bisa digunakan sebagai obat herbal untuk melawan pertumbuhan bakteri dan jamur yang memicu berbagai gangguan kesehatan. Mulai dari infeksi saluran kemih hingga gangguan pencernaan.</p>', '2022-02-06', NULL, '2022-02-06 03:33:59', '2022-02-13 19:08:25'),
(5, 'Daftar Buah-buahan yang Harus Dihindari saat Diet', 'assets/galeriartikel/jbkX604YgOU4WzsHh8yetNgMgmHAkMXXKFmtBDNY.png', '<p>Pada dasarnya, buah-buahan adalah jenis makanan yang dianjurkan untuk dikonsumsi. Kandungan nutrisi yang dimiliki membuat makanan ini bisa memberi manfaat sehat untuk tubuh. Namun, beberapa jenis buah mungkin tidak cocok untuk dikonsumsi saat diet, karena bisa menggagalkan program penurunan berat badan. Berikut ini daftar buah-buahan yang sebaiknya dihindari saat diet:</p>\r\n\r\n<ul>\r\n	<li><strong>Alpukat </strong></li>\r\n</ul>\r\n\r\n<p>Jika ingin menurunkan berat badan, sebaiknya hindari mengonsumsi buah alpukat secara berlebihan. Sebab, buah yang satu ini memiliki kandungan kalori yang cukup tinggi. Dalam 100 gram buah alpukat, terkandung setidaknya 160 kalori.</p>\r\n\r\n<ul>\r\n	<li><strong>Anggur</strong></li>\r\n</ul>\r\n\r\n<p>Buah selanjutnya yang sebaiknya dihindari adalah anggur. Pasalnya, jenis buah yang satu ini banyak mengandung gula dan lemak sehingga tidak cocok untuk dikonsumsi saat diet. Diketahui, dalam 100 gram anggur terkandung setidaknya 67 kalori dan 16 gram. Jika dikonsumsi secara berlebihan, buah ini bisa menyebabkan kenaikan berat badan.</p>\r\n\r\n<ul>\r\n	<li><strong>Mangga </strong></li>\r\n</ul>\r\n\r\n<p>Selain anggur dan alpukat, kamu yang sedang dalam program penurunan berat badan juga harus membatasi asupan mangga. Sebab, jenis buah-buahan tropis ini kalori tersembunyi yang dapat menghambat proses penurunan berat badan.</p>\r\n\r\n<ul>\r\n	<li><strong>Semangka </strong></li>\r\n</ul>\r\n\r\n<p>Semangka sebaiknya juga dihindari, karena kandungan gula dalam buah ini cukup tinggi. Memang, buah semangka banyak mengandung air dan serat, tetapi mengonsumsinya secara berlebihan bisa memicu penumpukan gula yang berpengaruh pada berat badan.</p>\r\n\r\n<ul>\r\n	<li><strong>Buah Kering</strong></li>\r\n</ul>\r\n\r\n<p>Buah-buahan kering sering menjadi pilihan karena cukup praktis dan mudah dikonsumsi. Namun tahukah kamu, kandungan kalori dalam jenis buah ini justru bisa lebih tinggi. Terutama karena buah kering sudah tidak lagi mengandung air, sehingga kandungan kalori di dalamnya akan lebih tinggi. Kandungan kalori dalam kismis, misalnya, disebut bisa lebih tinggi dibandingkan dengan buah anggur.</p>\r\n\r\n<ul>\r\n	<li><strong>Durian</strong></li>\r\n</ul>\r\n\r\n<p>Pencinta durian mungkin akan bersedih mendengar hal ini. Namun, buah durian sebaiknya dihindari atau dibatasi saat sedang diet. Sebab, buah yang memiliki aroma khas dan menggoda ini ternyata memiliki banyak kandungan kalori. Dalam satu porsi buah durian (sekitar 243 gram), setidaknya terkandung 357 kalori. Jika dikonsumsi secara berlebihan, tentu saja hal ini bisa menggagalkan usaha penurunan berat badan.</p>', '2022-02-07', NULL, '2022-02-06 05:24:17', '2022-02-13 19:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kalori` int(20) NOT NULL,
  `nm_makanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `kategori`, `kalori`, `nm_makanan`, `bahan`, `gambar`, `konten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Daging', 1200, 'Semur Sei Daging', '', '', 'Semur Sei daging', '2022-02-01 20:00:23', '2022-01-30 01:43:47', '2022-02-01 20:00:23'),
(2, 'SAYUR', 800, 'Sayur Bayam', '<ul>\r\n	<li>2 siung bawang putih, iris halus</li>\r\n	<li>2 sdt garam</li>\r\n	<li>300 gr daun bayam</li>\r\n	<li>1 sdt gula pasir</li>\r\n	<li>100 gr wortel, iris bulat tipis</li>\r\n	<li>1 liter air</li>\r\n	<li>4 butir bawang merah, iris halus</li>\r\n	<li>3 cm temu kunci (jika suka)</li>\r\n	<li>2 lembar daun salam</li>\r\n</ul>', 'assets/galerimenu/nyJLA7eAkRCLbukM2mIak37v45JTiGhIQY0Mh8v1.png', '<ol>\r\n	<li>Rebus air, lalu masukkan bawang merah, bawang putih, daun salam, dan temu kunci. Tunggu sampai layu.</li>\r\n	<li>Masukkan wortel, masak wortel setengah matang.</li>\r\n	<li>Masukkan daun bayam, didihkan lagi sebentar.</li>\r\n</ol>', NULL, '2022-02-01 20:00:38', '2022-02-13 19:20:29'),
(3, 'DAGING', 1000, 'Sapi Lada Hitam', '<ul>\r\n	<li>300 gram daging sapi bagian has</li>\r\n	<li>1/4 paprika merah iris</li>\r\n	<li>1/4 paprika hijau iris</li>\r\n	<li>1/4 paprika kuning iris</li>\r\n	<li>1/2 bawang bombai ukuran sedang iris</li>\r\n	<li>2 bawang putih cincang halus</li>\r\n	<li>saos tiram, kecap manis secukupnya</li>\r\n	<li>garam, gula kaldu bubuk</li>\r\n	<li>1/4 sdt lada hitam tumbuk</li>\r\n	<li>1 sdm tepung maizena larutkan dengan sedikit air</li>\r\n</ul>', 'assets/galerimenu/h8XTXLFH74zYULXmumuoPa5FBvwc1yYJ5vaiQbc5.png', '<ol>\r\n	<li>Cuci bersih daging, iris tipis, lumuri dengan kecap manis, saos tiram dan sedikit minyak goreng, remas remas diamkan beberapa saat.</li>\r\n	<li>Panaskan minyak, tumis bawang putih, lalu masukkan daging sapi. Aduk hingga daging berubah warna, tambahkan bawang bombai dan paprika .</li>\r\n	<li>Beri secukupnya air sambil diaduk rata, tambahkan kecap manis, saos tiram, gula, garam kaldu bubuk dan lada hitam.</li>\r\n	<li>Setelah matang beri larutan tepung maizena, aduk-aduk hingga agak mengental. Tes rasa.</li>\r\n</ol>', NULL, '2022-02-06 05:17:10', '2022-02-13 19:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_16_100541_create_artikel_table', 1),
(6, '2022_01_16_101553_create_list_bahan_table', 2),
(7, '2022_01_16_101830_create_galeri_table', 2),
(8, '2022_01_16_101952_create_galeri_artikel_table', 2),
(9, '2022_01_16_103026_create_kategori_makanan_table', 3),
(10, '2022_01_16_103200_create_list_makanan_table', 3),
(11, '2022_01_21_073933_add_roles_field_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ADMIN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$gIBuFiXURhNcwvoIEybjo.FMYn0RLlI71Mp0u2dhjvD8IlGvIEUPK', NULL, '2022-01-24 02:31:28', '2022-01-24 02:31:28', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
