-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 03:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technonews`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(7) NOT NULL,
  `tanggal` int(2) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(2) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal`, `bulan`, `tahun`, `penulis`, `judul`, `isi`, `thumbnail`) VALUES
(2, 24, 12, 2019, 'admin', 'Facebook Akuisisi Layanan Cloud Gaming PlayGiga', '<p>Jakarta - Facebook telah mengakuisisi perusahaan penyedia layanan cloud gaming asal Spanyol, PlayGiga. Akuisisi tersebut dikonfirmasi Facebook kepada CNBC, sebagaimana dikutip dari The Verge, Senin (23/12/2019), menyusul laporan pekan lalu dari Cinco Diaz yang mengklaim kesepakatan itu bernilai USD 78 juta (sekitar Rp 1 trilun).\r\n\r\n<p>Cloud gaming merupakan tipe permainan daring berbasis video streaming dan file streaming. Akun Twitter resmi Facebook Gaming mengatakan, \"Kami sangat senang menyambut @PlayGigaOficial ke tim Facebook Gaming.\"\r\nSebuah pesan di situs web PlayGiga juga mengatakan timnya tengah beralih ke sesuatu yang baru, tetapi akan tetap melanjutkan fokusnya di cloud gaming.</p>\r\n\r\n<p>Sebagai perbandingan bulan lalu Google meluncurkan layanan Stadia, sementara Microsoft meninjau platform xCloud sebelum peluncuran resminya pada tahun 2020. Sementara Sony telah memiliki layanan cloud gaming sendiri, PlayStation Now, selama beberapa tahun ini. </p>\r\n\r\n<p><b>Fokus Facebook</b></p>\r\n\r\n<p>Dibandingkan dengan Sony, PlayGiga adalah perusahaan cloud gaming yang jauh lebih kecil, tetapi PlayGiga mempunyai rencana untuk ekspansi.</p>\r\n\r\n<p>Selain empat pasarnya yang sudah ada, yakni Italia, Argentina, Cili, dan Spanyol, Variety mencatat bahwa perusahaan akan berencana meluncurkan layanannya di Timur Tengah.</p>\r\n\r\n<p>Memang tidak ada jaminan bahwa Facebook akan memanfaatkan akuisisi ini untuk meluncurkan layanan cloud gaming sendiri, tetapi kehadiran PlayGiga akan memungkinkan hal itu lebih mudah untuk direalisasikan.</p>\r\n\r\n<p>Gaming juga telah menjadi fokus yang meningkat untuk Facebook dalam beberapa tahun terakhir. Bulan Maret lalu perusahaan menambah bagian gaming ke bilah navigasi yang menyatukan layanan Facebook Gaming dan Instant Games.</p>', 'img/5db934183d6b2.jpg'),
(3, 24, 12, 2019, 'admin', 'Telkomsel CloudX Tawarkan Layanan Komunikasi Terintegrasi Cloud untuk Perusahaan', '<p>Jakarta - Telkomsel menjadi operator telekomunikasi pertama di Indonesia yang menawarkan solusi Virtual Private Automatic Branch Exchange (PABX), akses jaringan komunikasi telepon secara internal dan eksternal untuk optimalisasi operasional korporasi yang terintegrasi ke layanan komputasi awan (cloud computing).</p>\r\n\r\n<p>\"Solusi komunikasi lengkap dan mudah dioperasikan dapat mendukung perusahaan dalam menjalankan operasional lebih fleksibel, sehingga karyawan pun semakin dipermudah dalam menuntaskan tugasnya secara mobile, khususnya di era digital seperti sekarang,\" ujar Senior Vice President Enterprise Telkomsel Dharma Simorangkir dalam keterangannya. </p>\r\n\r\n<p>Oleh sebab itu, lanjut Dharma, melalui produk ini Telkomsel berupaya untuk \"menjawab kebutuhan perusahaan terhadap jaringan komunikasi terintegrasi yang tidak memerlukan investasi besar dan tetap memiliki fitur yang kaya dan pengamanan data terdepan.\"</p>\r\n\r\n<p>Layanan ini menyasar segmen perusahaan, pemerintahan, hingga UMKM. Selain Virtual PABX, CloudX juga menyediakan fitur lain seperti Hosted Contact Center dan Unified Communication untuk mengoptimalkan komunikasi perusahaan yang dapat menghubungkan seluruh karyawan sekaligus terhubung dengan pelanggan di mana pun dan kapan pun.</p>\r\n\r\n<p>Integrasi cloud diklaim dapat meningkatkan efisiensi dari aspek biaya dan operasional ketimbang menggunakan infrastruktur on-premises.</p>\r\n\r\n<p><b>Tingkatkan produktivitas karyawan</b></p>\r\n\r\n<p>Telkomsel juga meyakini CloudX dapat meningkatkan produktivitas karyawan dengan meningkatkan kolaborasi antarkaryawan karena layanan ini dapat diakses dari berbagai macam medium, mulai dari deskphone, perangkat mobile, hingga laptop.</p>\r\n\r\n<p>Selain itu, melalui konfigurasi terpadu dalam satu sistem dashboard terintegrasi, pelanggan korporasi juga dapat memantau seluruh pengguna secara mudah. Hal ini memungkinkan perusahaan untuk lebih fleksibel dalam melakukan perluasan implementasi CloudX ke berbagai lokasi operasional perusahaan yang tidak perlu membangun infrastruktur jaringan baru.</p>\r\n\r\n<p>\"Telkomsel Enterprise juga memastikan layanan CloudX memiliki sistem pengamanan data yang terjamin, sehingga akan menghadirkan rasa aman bagi penggunanya. Untuk itu, Telkomsel Enetrprise telah berkolaborasi dengan mitra terkemuka dan berpengalaman yakni Metaswitch Network, sebuah perusahaan penyedia software dan infrastruktur telekomunikasi terkemuka asal Inggris,\" kata Dharma.</p>\r\n\r\n<p>Kehadiran CloudX diharapkan akan dapat mendukung akselerasi penerapan teknologi digital untuk kegiatan operasional para pelanggan korporasi, instansi pemerintahan, hingga pelaku bisnis UMKM guna menghadapi tantangan transformasi digital.</p>', 'img/092300500_1577073626-Layanan_CloudX.jpg'),
(4, 24, 12, 2019, 'admin', 'Kemkominfo Blokir 1.130 Situs Web Streaming Ilegal selama 2019, Termasuk IndoXXI', '<p>Jakarta - Situs web streaming ilegal IndoXXI tengah menjadi sorotan. Mulai dari Polri hingga Kemkominfo telah angkat suara.</p>\r\n\r\n<p>Dalam keterangannya, Kemkominfo menyebut ada seribu lebih situs web streaming ilegal yang diblokir, tak terkecuali IndoXXI, selama tahun 2019.</p>\r\n\r\n<p>\"Iya, kami sudah blokir IndoXXI. Total 1.130 web streaming ilegal yang sudah diblokir Kemkominfo termasuk IndoXXI,\" kata Direktur Jenderal Aplikasi Informatika Kemkominfo, Semuel Abrijani Pangerapan kepada TechnoNews.com.\r\nMenurut data yang kami peroleh, Kemkominfo pada bulan Mei 2019 memblokir 32 situs web streaming ilegal, lalu 69 situs pada bulan Juli, 115 situs pada bulan Agustus, dan 288 situs pada bulan September.</p>\r\n\r\n<p>Selanjutnya 91 situs web streaming diblokir pada bulan Oktober, 79 situs web diblokir pada bulan November, dan 456 situs web diblokir pada bulan Desember.</p>\r\n\r\n<p>Beberapa alamat situs web streaming itu adalah movieindoxxi.live, movieindoxxi.net, indoxxi.art, indoxxi.bar, dan lain-lain.</p>', 'img/012061700_1577153563-indoxxi.jpg'),
(5, 24, 12, 2019, 'admin', 'Huawei P40 Pro Dukung Optical Zoom 10x', '<p>Jakarta - Huawei saat ini tengah menyiapkan flagship baru, P40 Pro, yang diprediksi akan diumumkan pada periode kuartal I 2020. Menjelang kehadirannya, semakin banyak informasi yang beredar tentang smartphone tersebut.</p>\r\n\r\n<p>Dilansir GSM Arena, Senin (23/12/2019), analis terkemuka Ming-Chi Kuo mengungkapkan Huawei P40 Pro akan memiliki fitur optical zoom 10x. Lebih besar dibandingkan zoom 5x pada pendahulunya, P30 Pro.\r\nFitur optical zoom 10x tersebut akan disandingkan dengan lensa kamera 8MP. Sementara bukaan lensanya adalah f/4.0.</p>\r\n\r\n<p>Sementara itu, varian non-Pro dari P40 juga akan memiliki lensa periscope telephoto. Namun, smartphone tersebut hanya akan bisa melakukan optical zoom 5x.</p>\r\n\r\n<p>Huawei P40 Pro akan menjadi salah satu varian flagship Huawei pada pada awal tahun depan. Perusahaan asal Tiongkok tersebut biasanya merilis dua varian flagship setiap tahun, yakni dari seri P dan Mate. Seri Mate biasanya dirilis pada periode semester II.</p>', 'img/055901000_1531460436-Lab1.jpg'),
(6, 24, 12, 2019, 'admin', 'Mata-matai Pengguna, Pesaing WhatsApp Dihapus dari Google Play', '<p>Jakarta - Aplikasi pesan pesaing WhatsApp, ToTok, ternyata melakukan pengintaian terhadap penggunanya. Menurut informasi dari seorang pejabat intelijen Amerika, aplikasi ini digunakan oleh Pemerintah Uni Emirat Arab untuk melacak tiap percakapan, gerakan, hubungan, janji temu, suara, dan gambar dari pengguna yang memasang ToTok di smartphone mereka.</p>\r\n\r\n<p>Mengutip laman The New York Times, Selasa (24/12/2019), ToTok diperkenalkan beberapa bulan lalu dan sudah diunduh jutaan kali dari toko aplikasi Google dan Apple.</p>\r\n\r\n<p>Kebanyakan penggunanya berasal dari Timur Tengah, Eropa, Asia, Afrika, dan Amerika Utara. Mayoritas penggunanya dari Emirat Arab. Karena popularitasnya, App Annie menobatkan ToTok sebagai aplikasi medsos yang paling banyak diunduh di AS pada pekan lalu.</p>\r\n\r\n<p>Google kemudian menghapus aplikasi ToTok di PlayStore setelah menentukan bahwa aplikasi ini melanggar kebijakan. Tak hanya itu, Apple juga menghapus ToTok App Store dan masih meneliti aplikasi tersebut.</p>', 'img/003574600_1466768072-appsstore.jpg'),
(7, 24, 12, 2019, 'admin', 'Google Hapus Avast dan AVG dari Chrome Web Store, Kenapa?', '<p>Jakarta - Awal bulan ini, peneliti keamanan internet melaporkan ekstensi bikinan AVG dan Avast di browser kedapatan mengumpulkan data pengguna tanpa sepengetahuan mereka.</p>\r\n\r\n<p>Mendapati laporan tersebut, pihak Mozilla dan Opera pun langsung menonaktifkan dan menghapusnya dari toko. Entah kenapa, Google tidak mengambil tindakan, setidaknya pada saat itu.</p>\r\n\r\n<p>Terkini, Google telah memutuskan untuk mengambil tindakan tentang hal tersebut dengan menghapus kedua ekstensi itu dari Chrome Web Store. Demikian yang dilansir Ubergizmo, Kamis (19/12/2019).</p>\r\n\r\n<p>Dengan begini, pengguna Chrome tidak akan lagi dapat menemukan Avast dan AVG di Chrome Web Store meskipun sengaja mencarinya.</p>', 'img/046521800_1538995157-Hacker__istockPhoto__landscape.jpg'),
(8, 24, 12, 2019, 'admin', 'Samsung Siapkan Galaxy Buds+ dengan Kapasitas Baterai Besar', '<p>Jakarta - Samsung dilaporkan sedang menyiapkan Galaxy Buds+ dengan nomor kode SM-R175. Wireless bluetooth earbuds tersebut diprediksi akan hadir pada tahun depan.</p>\r\n\r\n<p>Dilansir Phone Arena, Senin (23/12/2019), berdasarkan keterangan di dokumen FCC yang beredar, regulator telah menyetujui earbuds itu. Sebuah gambar di dokumen FCC itu terdapat keterangan bahwa earbud memiliki kapasitas baterai 150mAh, sedangkan case-nya 600mAh.</p>\r\n\r\n<p>Galaxy Buds+ juga dilaporkan akan meluncur dengan varian warna putih, perak, hitam, dan kuning.</p>\r\n\r\n<p>Galaxy Buds+ diprediksi hadir pada tahun depan bersamaan dengan seri Galaxy S11. Aksesoris ini diprediksi hadir sebagai kompetitor AirPods Pro milik Apple.</p>\r\n\r\n<p>Jika benar, maka produk tersebut kemungkinan juga akan memiliki fitur active noise cancellation</p>', 'img/097203500_1551778356-IMG_20190304_104629.jpg'),
(9, 24, 12, 2019, 'admin', 'Motorola Tunda Penjualan Razr, Ada Masalah Apa?', '<p>Jakarta - Motorola dilaporkan baru saja memutuskan untuk menunda penjualan Razr yang diperkenalkan November lalu. Namun penundaan ini ternyata bukan diakibatkan masalah di perangkat, melainkan permintaan yang terlalu banyak.</p>\r\n\r\n<p>Dikutip dari GSM Arena, Senin (23/12/2019), Motorola mengaku permintaan Razr ternyata melebih prediksi perusahaan, sehingga mereka harus menunda peluncuran termasuk pre-sale dari smartphone ini. </p>\r\n\r\n<p>Perlu diketahui, Motorola Razr versi terbaru ini seharusnya sudah dapat dipesan mulai 26 Desember 2019 untuk konsumen di Amerika Serikat. Lalu, perangkat ini akan mulai tersedia pada 9 Januari 2020. </p>\r\n\r\n<p>\"Konsumen banyak yang menyambut dan menunggu-nunggu Motorola Razr baru yang diumumkan November. (Akibatnya), permintaan terlalu tinggi, sehingga melampui prediksi pasokan kami,\" tutur Motorola dalam pernyataannya.</p>', 'img/090732800_1573716052-Moto_Razr.jpg'),
(10, 24, 12, 2019, 'admin', 'Ini Deretan Vendor yang Bakal Rilis Smartphone 5G dengan Chipset Snapdragon', '<p>Maui - Qualcomm merilis chipset terbarunya yang mendukung 5G, yakni Snapdragon 865 dan Snapdragon 765 (dan 765G untuk seri gaming).</p>\r\n\r\n<p>Snapdragon 865 menjadi chipset flagship milik Qualcomm, sementara Snapdragon 765 hadir untuk perangkat yang lebih terjangkau, tetapi tetap mendukung 5G.</p>\r\n\r\n<p>Pengumuman yang dimaksud adalah kehadiran smartphone 5G di 2020 menggunakan chipset terbaru Qualcomm di atas.</p>\r\n\r\n<p>Ada perwakilan empat dari vendor smartphone yang naik ke panggung Qualcomm Snapdragon Tech Summit 2019 di Maui, Hawaii, Amerika Serikat. Keempat vendor tersebut antara lain adalah Xiaomi, Oppo, Motorola, dan HMD Global selaku pemilik lisensi smartphone Nokia.</p>\r\n\r\n<p>Pertama adalah Co-Founder sekaligus Vice Chairman Xiaomi Corporation Xiaomi, Lin Bin, yang langsung menyebut, flagship smartphone Mi 10 yang dirilis tahun 2020 akan menggunakan chipset Snapdragon 865.</p>\r\n\r\n<p>Tak hanya satu, Xiaomi memperkirakan ada lebih dari 10 smartphone 5G yang akan dirilis tahun ini, kemungkinan besar semuanya menggunakan chipset Snapdragon 865.\r\nSekadar informasi, Xiaomi Mi 10 sendiri merupakan penerus dari Mi 9 yang pada 2019 ini dirilis menggunakan chipset Snapdragon 855.</p>\r\n\r\n<p>Xiaomi Mi 10 sendiri merupakan penerus dari Mi 9 yang pada 2019 ini dirilis menggunakan chipset Snapdragon 855.</p>\r\n\r\n<p>\"Tahun ini, kami merilis smartphone Mi 9 dengan chipset Snapdragon 855. Kalau diingat-ingat, semua flagship smartphone kami mulai dari Mi 1, Mi 2, Mi 3, Mi 4, Mi Note, sampai ke seri Mi Mix semuanya ditenagai Snapdragon seri 8. Kini, saya umumkan Mi 10 akan jadi salah satu smartphone pertama yang pakai Snapdragon 865,\" kata Lin Bin di acara Qualcomm Snapdragon Tech Summit 2019 di Maui, Selasa (3/12/2019).</p>', 'img/054701700_1575427423-snapdragon-07.jpg'),
(11, 24, 12, 2019, 'admin', 'Pengapalan Smartphone Huawei Tahun Ini Diprediksi Tembus 230 Juta Unit', '<p>Jakarta - Huawei tetap optimistis mengenai perkembangan bisnisnya di pasar smartphone. Di tengah pemblokiran perdagangan oleh pemerintah Amerika Serikat (AS), Huawei memperkirakan pengapalan smartphone miliknya bisa mencapai 230 juta unit pada akhir tahun ini.</p>\r\n\r\n<p>Dilansir GSM Arena, Selasa (24/12/2019), CEO [Huawei]( 4138787 \"\"), Richard Yu, dalam sebuah pertemuan internal memperkirakan pengapalan smartphone Huawei pada akhir tahun ini akan bisa mencapai 230 juta unit.</p>\r\n\r\n<p>Strategy Analytics sebelumnya memperkirakan Huawei akan mendekati juara bertahan, Samsung, yang saat ini menguasai pengapalan smartphone global. Samsung diprediksi mengapalkan 251 juta unit smartphone pada tahun ini.</p>\r\n\r\n<p>Bisnis Huawei pada tahun depan diprediksi masih terganjal pemblokiran oleh AS. Kebijakan ini salah satunya membuat smartphone baru Huawei tidak bisa menggunakan layanan-layanan Google, termasuk Chrome, YouTube, Maps, dan Play Store</p>', 'img/080925400_1544065665-huawei.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id_guestbook` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `tanggal` int(2) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `komentar` text NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `jam`, `tanggal`, `bulan`, `tahun`, `komentar`, `user`) VALUES
(1, 3, '16:08', 24, 12, 2019, 'bagus kali', 'meily'),
(10, 10, '20:48', 5, 1, 2020, 'mantap', 'meily'),
(11, 10, '21:02', 5, 1, 2020, 'bagus', 'meily'),
(12, 11, '21:09', 5, 1, 2020, 'WOW', 'ti19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `tipe`, `nama`, `email`) VALUES
(1, 'admin', 'admin123', 'admin', 'admin', 'admin@gmail.com'),
(2, 'meily', 'meilybnd', 'user', 'Meily Benedicta', 'meilybenedicta2001@gmail.com'),
(3, 'user', 'user123', 'user', 'user', 'user@gmail.com'),
(4, 'ti19', '12345', 'user', 'TI 19', 'ti19@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id_guestbook`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id_guestbook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
