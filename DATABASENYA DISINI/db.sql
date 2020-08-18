-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 10:46 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `No.` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`No.`, `username`, `password`) VALUES
(1, 'adminkuke', 'kuke');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`firstname`, `lastname`, `email`, `username`, `password`, `Address`, `Phone`) VALUES
('adit', 'adit', 'asdaf@gmail.com', 'adit', '123123', '', 0),
('admin', 'admin', 'admin', 'admin', '123123', '', 0),
('alwi', 'alwi', 'alwi', 'alwi', 'alwi', '', 0),
('Bambang', 'Arwana', 'ao_am27@yahoo.com', 'budi', 'admin', 'sdasd', 2147483647),
('ajoh', 'ajohh', 'bayus', 'eki', '123123', '', 0),
('bayu', 'nursetya', 'bayuichigo@gmail.com', 'nursetya', '123123', '', 0),
('bayu', 'bayu', 'ao_am27@yahoo.com', 'nursetya12', '123123', '', 0),
('bayu', 'dassd', 'bayuichigo@gmail.com', 'nursetya1222', '123456123456', '', 0),
('hjkh', 'jkhkjh', 'kjhjkh', 'suci', '123123', '', 0),
('Tukul', 'Arwana', 'baskom mantap', 'ui', 'loveyou', '', 0),
('ayam', 'goreng', 'bayueren27@yahoo.com', 'yuy', '123123', 'Jln. Sisingamaharaja', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE IF NOT EXISTS `kue` (
  `id` int(5) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL,
  `Kategori` varchar(20) NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`id`, `Judul`, `Keterangan`, `Kategori`, `Rating`, `Harga`, `Gambar`) VALUES
(1, 'Nastar', 'Nastar selalu hadir di hari-hari istimewa keluarga. Adonan yang empuk dan gurih\r\ndiisi selai nanas yang manis segar. Tambahan keju dalam adonan membuatnya lebih istimewa.', 'Anak-Anak', '90%', '40000', 'Kering-Kastengel.jpg'),
(2, 'Telur Gabus Capuchino', 'Bosan dengan rasa telur gabus yang itu-itu saja? Coba saja resep spesial Telur Gabus Capucino ini. Yap, telur gabus berlapis rasa kopi capucino! Tips untuk menghasilkan telur gabus yang bagus, saat menggoreng gunakanlah minyak dingin dengan api kecil. ', 'Anak-Anak', '75%', '45000', 'telur gabus cappucino.jpg'),
(3, 'Chocolate Ginger Loves ', '  Chocolate Ginger Loves ini kue unik berwarna cokelat gelap berbentuk hati. Rasanya manis, dengan paduan rasa cokelat, jahe dan kayu manis. Taburan gula kasar di atasnya membuat kue ini tampak lebih istimewa.  ', 'Anak-Anak', '75%', '30000', 'Untitle-2.jpg'),
(4, 'Kue Batang Kacang', 'Kue Batang Kacang menghasilkan cita rasa yang istimewa dengan kombinasi kacang yang gurih dan aroma kopi capucino yang tajam . Siraman cokelat putih dan taburan kacang cincang menambah kaya cita rasanya.', 'Anak-Anak', '80%', '30000', 'atitled-1.jpg'),
(5, 'Muffin Durian Kismis', 'Muffin Durian Kismis terlihat cantik untuk sajian pesta di rumah. Dijadikan sebagai camilan sore hari pun tidak akan ditolak oleh anggota keluarga, tuh.', 'Rekomendasi', '80%', '50000', 'muffin durian.jpg'),
(6, 'Lapis Cery', 'Kue Kering Lapis Ceri memiliki lapisan ceri yang berwarna merah cerah sehingga terlihat lebih menarik. Bila digigit ada kejutan rasa manis segar khas buah ceri. ', 'Rekomendasi', '80%', '35000', 'Untitled-2.jpg'),
(7, 'Kue Almond Salju', 'Kue Almond Salju ini merupakan variasi dari kue putri salju. Kali ini ditambahkan almond bubuk dengan tampilan berbeda, dibentuk huruf U. Bila tidak suka manis, campur gula bubuk dengan sedikit susu bubuk untuk taburan..\r\n ', 'Rekomendasi', '85%', '50000', 'Untitled-1.jpg'),
(8, 'Kue Kismis Havermut ', 'Kue Kismis Havermut sangat mudah dibuat, tak perlu alat khusus untuk membentuknya, cukup ditaruh dalam loyang dengan sendok. Meskipun sederhana, rasanya istimewa. Apalagi dengan tambahan kismis di dalamnya.', 'Rekomendasi', '75%', '40000', 'Kue Harvemut.jpg'),
(9, 'Gingerbread Spice ', 'Gingerbread Spice Macaron ini memiliki rasa rempah yang sempurna. Ditambah dengan mascarpone, lengkaplah kelezatan macaron ini.', 'Ekstra Besar', '75%', '30000', 'gingerbread spice macaron.jpg'),
(10, 'Kue Rambut', 'Salah satu ragam kuliner Khas Nusa Tenggara Timur yang renyah legit dan sedikit manis ini memiliki tekstur sekilas seperti bihun yang digoreng kering, helaian kue rambut bertekstur kriting. Kue rambut dibuat dengan bahan tepung beras, gula aren, santan, air nira, dan sedikit garam agar rasanya semakin gurih. Camilan kue khas pulau Flores dan pulau Alor ini sering disajikan saat upacara-upacara adat daerah NTT Masa Ketahanan : 3 Bulan', 'Ekstra Besar', '70%', '40000', 'pes-kuerambutkupang-lee.jpg'),
(13, 'Kue Sapik Meises', 'Kue yang sangat fenomenal di Sumatera Barat ini juga mirip dengan kue yang berasal dari Pulau Jawa yaitu Kue Semprong. Hanya saja kue Sapik lebih tebal dan renyah. Rasanya yang lezat dibuat dari Tepung Beras, Gula Pasir, Terigu, Santan, Telur dan Meises. biasanya Kue Sapik kita temukan hanya pada saat hari raya saja, tapi kali ini Anda tak perlu khawatir. karena kelezatan kue sapik bisa Anda nikmati dimanapun dan kapanpun.', 'Ekstra Besar', '75%', '42000', 'pes-kuesapikmeises.jpg'),
(15, 'Tambak Banjar', 'Siapa yang tak kenal kue tradisional yang fenomenal ini? meskipun bentuknya menyerupai tali tambang, tapi ternyata kue Tambak Anyar ini memiliki tekstur yang super renyah. Dijamin siapapun yang mencobanya akan ketagihan. Sajikan Kue Tambak Anyak kapanpun dan dimanapun.', 'Ekstra Besar', '75%', '42500', 'pes-kuetambakb.jpg'),
(17, 'Stik Kepiting Original ', 'Renyahnya Stik Kepiting Original khas Bontang diolah dari Kepiting segar berkualitas. Berpadu dari kerenyahan dan cita rasanya yang gurih membuat Stik Kepiting Original selalu menjadi primadona ditengah waktu kumpul bersama keluarga. Masa Ketahanan : 3 Bulan', 'Kue Kering', '80%', '30000', 'pes-stikkepitingorib.jpg'),
(18, 'Kembang Rumput Laut ', 'Renyahnya Kembang Rumput Laut Khas Bontang diolah dari Rumput Laut pilihan yang berkualitas. Tekstur yang renyah berpadu dengan cita rasa yang manis ini sangat cocok dijadikan cemilan untuk waktu kumpul bersama keluarga. Masa Ketahanan : 3 Bulan', 'Kue Kering', '70%', '40000', 'pes-kembangrumputlautb_4.jpg'),
(20, ' Chizmol Tiramisu Berbi', 'Molen dengan lapisan kulit rasa tiramisu, dengan perpaduan isi pisang dan cream cheese rasa tiramisu (coffee and cheese. Cocok buat cemilan bersama keluarga. Masa Ketahanan : 3 Hari', 'Kue Kering', '75%', '42000', 'tiramisu_1.jpg'),
(21, 'Amplang Lada Hitam', 'Amplang renyah khas Bontang yang satu ini memiliki kelezatan yang tiada duanya. Diolah dari ikan pilhan nan segar menghasilkan cita rasa Amplang Lada Hitam Aiko begitu digemari leh para pecinta kuliner. Masa Ketahanan : 3 Bulan', 'Snack', '80%', '35000', 'pes-amplangladahitamb.jpg'),
(22, 'AMPYANG KACANG COKLAT', '     Lezatnya kepingan cokelat bertabur kacang renyah ini siap memeriahkan suasana anda. Nikmati renyahnya Ampyang Kacang Coklat untuk setiap waktu spesial anda bersama orang orang terdekat. Masa Ketahanan : 5 Bulan     ', 'Snack', '70%', '15000', 'pes-ampyangkccoklatb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`username`) VALUES
('admin'),
('admin'),
(''),
(''),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
('admin'),
(''),
(''),
('adminkuke'),
('adminkuke'),
('adminkuke'),
('admin'),
('adminkuke'),
('adminkuke'),
('admin'),
('admin'),
('adit'),
('admin'),
('admin'),
('admin'),
('adminkuke'),
('admin'),
('adminkuke'),
('admin'),
('admin'),
('adminkuke'),
('adminkuke'),
('adminkuke'),
('adminkuke'),
('admin'),
('adit'),
('adit'),
('adminkuke'),
('adminkuke'),
('adminkuke'),
('adit'),
('yuy'),
('adminkuke');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `Nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `No_hp` int(50) NOT NULL,
  `Kode_pos` int(20) NOT NULL,
  `Provinsi` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `usernamebeli` varchar(200) NOT NULL,
  `Total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Nama`, `email`, `No_hp`, `Kode_pos`, `Provinsi`, `Alamat`, `usernamebeli`, `Total`) VALUES
('', 'bayuichigo@gmail.com', 0, 12123, 'Banten', 'hjagsjdg', 'adit', 0),
('', 'bayuichigo@gmail.com', 0, 12123, 'Banten', 'hjagsjdg', 'adit', 0),
('kunkun', 'bayuichigo@gmail.com', 2147483647, 12123, 'Banten', 'hjagsjdg', 'adit', 90000),
('Flan', 'bayuichigo@gmail.com', 122123123, 12123, 'Banten', 'Jln. pancing', 'adit', 30000),
('', '', 0, 0, '', '', 'adit', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `value` int(100) NOT NULL,
  `usernamebeli` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan2`
--

CREATE TABLE IF NOT EXISTS `pesanan2` (
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `value` int(100) NOT NULL,
  `usernamebeli` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan2`
--

INSERT INTO `pesanan2` (`id_order`, `id_product`, `value`, `usernamebeli`) VALUES
(72, 4, 1, 'dv9217249p8joq2r8kk7gsbdu7'),
(75, 3, 1, 'admin'),
(79, 8, 1, 'admin'),
(80, 4, 1, 'admin'),
(81, 8, 1, 'admin'),
(82, 6, 1, 'admin'),
(83, 3, 1, 'admin'),
(84, 3, 1, 'admin'),
(85, 1, 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kue`
--
ALTER TABLE `kue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pesanan2`
--
ALTER TABLE `pesanan2`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `No.` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `pesanan2`
--
ALTER TABLE `pesanan2`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
