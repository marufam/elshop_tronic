-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2016 pada 07.35
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('AD0001', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `kdberita` char(5) NOT NULL,
  `judul` char(50) NOT NULL,
  `tanggal` char(20) NOT NULL,
  `isi` text NOT NULL,
  `gambar` char(100) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`kdberita`, `judul`, `tanggal`, `isi`, `gambar`, `count`) VALUES
('BR001', 'Kendala dan Solusi Belanja Online', '27-12-2015', 'Meskipun belanja online sudah dinikmati khalayak ramai, namun pandangan skeptis mengenai belanja online masih tetap ada. Sehingga berbagai kendala dan keraguan terkadang masih sering dijumpai.\r\n\r\nNamun, jangan khawatir untuk Anda yang masih ragu untuk berbelanja secara online ada beberapa solusi yang sudah diterapkan oleh situs-situs belanja online besar di Indonesia yang patut Anda Ketahui.\r\n\r\nPertama, beberapa calon pelanggan ragu karena meraka berpikir barang yang akan mereka beli tidak dapat disentuh atau dicoba fisiknya. Untuk itu, pilih situs belanja online yang memiliki layanan penukaran produk busana dengan batas waktu 30 hari. Beberapa situs belanja bahkan menyediakan layanan pengembalian produk apabila ternyata produk yang dikirimkan cacat dengan batas waktu 14 hari setelah produk diterima.\r\n\r\nKedua, sebagian orang masih tidak dapat melakukan pembayaran melalui kartu kredit secara online maupun bank transfer. Keraguan akan kepastian transaksi yang akan dilakukan, seringkali membuat para calon pembeli membatalkan niatnya berbelanja. Namun kini, penawaran layanan cash on delivery dari beberapa situs belanja online dapat dimanfaatkan dengan baik. Para pelanggan dapat membayar langsung pembelanjaan mereka kepada kurir pengantar barang dengan uang tunai.\r\n\r\nKetiga, terkadang pembeli bingung kemana mereka harus mencari informasi tentang produk yang ingin mereka beli. Karena mungkin informasi yang diberikan pada halaman informasi produk kurang lengkap. Jangan khawatir, kini situs-situs belanja online terpercaya menyediakan layanan customer service yang lengkap. Selain nomer telepon dan email, ada layanan live chat yang dapat Anda akses. Selain praktis, layanan ini juga mempermudahkan Anda untuk menanyakan apa saja yang ingin ada ketahui sebelum memutuskan untuk membeli sebuah produk.', 'berita1.jpg', 2),
('BR002', 'as', '04-01-2016', 'as', 'Untitled-1.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `kdkontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`kdkontak`, `nama`, `email`, `subjek`, `pesan`, `status`) VALUES
(1, 'amien', 'artdeffend@gmail.com', 'keluhan ', 'apa aja', 1),
(2, 'aku', 'art_deffend@yahoo.com', 'Keluhan', 'apa apapapapapap', 0),
(3, 'dodik', 'dodik.adhitama@gmail.com', 'uji coba', 'hah...', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `idguest` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guestbook`
--

INSERT INTO `guestbook` (`idguest`, `nama`, `pesan`, `ip`) VALUES
(1, 'Amien', 'Web nya bagus', '3'),
(3, 'Moch Maruf Amien', 'Web nya keren, Transaksinya Mudah', '4'),
(4, 'aku', 'uji coba', ''),
(5, 'as', 'asasasas', ''),
(6, 'amien er', 'aku senang', '1'),
(7, 'Budi', 'Web nya bagus', '::1'),
(8, 'Toni', 'Suiiipppppp', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `kdinformasi` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL,
  `meta_desk` text NOT NULL,
  `meta_key` text NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`kdinformasi`, `nama`, `meta_desk`, `meta_key`, `favicon`) VALUES
(1, 'Tronic center', 'Tempat Jual Bel Alat Elektroni Online                                                                                                                                                                                       ', '083847777651', '1453117379_electronics-01.ico');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kode` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode`, `kategori`) VALUES
(1, 'Equipment'),
(2, 'Gadget'),
(3, 'Laptops & Computer'),
(4, 'Cameras & Photography'),
(5, 'Accesories'),
(6, 'Mikrokontroler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `komentar`, `status`, `tanggal`, `kode`) VALUES
(3, 'Art_deffend@yahoo.com', 'Tampilan Sip', 'Ya', '12-12-2014', 'PR00000026'),
(4, 'ami@yahoo.com', 'uji', 'Ya', '', ''),
(5, 'artdeffend@gmail.com', 'Laptop yang bagus..', 'Ya', '0', 'PR00000026'),
(6, 'art_deffend@yahoo.com', 'Gadget murah dan Bagus...........', 'Ya', '27-Dec-2014', 'PR00000023'),
(7, 'artdeffend@gmail.com', 'uji', 'Ya', '27-Dec-2014 16:14:23', 'PR00000023'),
(8, 'art_deffend@yahoo.com', 'Gadget yang bagus...', 'Ya', '28-Dec-2014 05:01:45', 'PR00000024'),
(9, 'artdeffend@gmail.com', 'uji coba ku ...', 'Ya', '10-Dec-2015 03:09:54', 'BR002'),
(10, 'artdeffend@gmail.com', 'uji coba', 'Ya', '2015-12-23 14:24:13', 'PR00000025'),
(11, 'artdeffend@gmail.com', 'uji coba', 'Tidak', '23-Dec-2015', 'PR00000025'),
(12, 'aku@yahoo', 'amien', 'Tidak', '24-Dec-2015', 'BR003'),
(13, 'artdeffend@gmail.com', 'apa aja yang penting sip', 'Ya', '27-Dec-2015', 'BR003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `kdpel` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kdpel`, `nama`, `jk`, `alamat`, `email`, `username`, `password`, `status`) VALUES
('PL00000001', 'Moch Maruf A', '', 'Amien1', 'Amien@yahoo.com', 'amien', 'amien', 'Ya'),
('PL00000002', 'aku1', '', 'aku1', 'aku1', 'aku1', 'aku1', 'Tidak'),
('PL00000003', 'moch', '', 'Jember', 'siap@yahoo.com', 'moch', 'moch', 'Ya'),
('PL00000004', 'ami', '', 'ami', 'Amien@yahoo.com', 'ami', 'ami', 'Ya'),
('PL00000005', 'rigil', 'Laki-laki', 'jl. apasaja', 'rigil@yahoo.com', 'rigil', 'rigil123', 'Ya'),
('PL00000007', 'nurul', 'Female', 'Manggisan', 'nurul@apa.com', 'nurul', 'nurul', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `nojual` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `kdpel` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kdpro` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`nojual`, `tanggal`, `kdpel`, `status`, `kdpro`, `harga`, `jumlah`, `gambar`) VALUES
('PJ00000001', '28-12-2014', 'PL00000001', 'Lunas', 'PR00000006', 200000, 1, 'logo-polinema.jpg'),
('PJ00000001', '28-12-2014', 'PL00000001', 'Lunas', 'PR00000019', 110000, 1, 'logo-polinema.jpg'),
('PJ00000001', '28-12-2014', 'PL00000001', 'Lunas', 'PR00000018', 1158000, 1, 'logo-polinema.jpg'),
('PJ00000001', '28-12-2014', 'PL00000001', 'Lunas', 'PR00000024', 6799000, 1, 'logo-polinema.jpg'),
('PJ00000002', '10-12-2015', 'PL00000006', 'Lunas', 'PR00000026', 4500000, 1, 'jyh.PNG'),
('PJ00000003', '27-12-2015', 'PL00000001', 'Lunas', 'PR00000025', 30000, 1, 'jyh.PNG'),
('PJ00000004', '04-01-2016', 'PL00000001', 'Lunas', 'PR00000025', 30000, 1, 'Untitled-1.png'),
('PJ00000005', '18-01-2016', 'PL00000001', 'Belum', 'PR00000001', 1158000, 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_tmp`
--

CREATE TABLE IF NOT EXISTS `penjualan_tmp` (
  `id` int(11) NOT NULL,
  `kdpro` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kdpel` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kdpro` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kdpro`, `nama`, `kategori`, `merk`, `vendor`, `tipe`, `harga`, `stok`, `ket`, `gambar`, `count`) VALUES
('PR00000001', 'Home Theater', '1', 'POLYTRON ', 'POLYTRON ', 'Home', 1158000, 8, 'POLYTRON Home Theater PHT 139 merupakan Home Theatre Speaker yang menghasilkan kekuatan dan kualitas', 'Salon.png', 0),
('PR00000002', 'nokia lumia', '2', 'Nokia', 'Nokia', 'Black', 1200000, 100, 'Nokia Lumia 520 Black merupakan Windows Phone berdesain stylish dengan warna cerah yang dilengkapi l', 'gadget.png', 0),
('PR00000003', 'Asus 232', '3', 'Asus', 'Asus', '1234', 3000000, 100, 'Platform	Notebook PC  Tipe Prosessor	Intel Core i3 Processor  Processor Onboard	IntelÂ® Coreâ„¢ i3-3', 'Laptop_sentuh.png', 0),
('PR00000004', 'Acer Aspire', '3', 'Shar', 'Acer', 'Acer', 4000000, 20, 'Acer V5-471G-33224G50Ma- Silver merupakan notebook berdesain tipis dan compact dengan prosesor Intel', 'Laptop_ACER.png', 0),
('PR00000005', 'Acer Aspire 1', '3', 'Acer', 'Acer', 'Acer', 4000000, 10, 'Acer Aspire Slim V5-431 (10072G32Mass) Silver merupakan notebook berdesain tipis dan ringan yang sud', 'Laptop_acer_aspire.png', 1),
('PR00000006', 'Vacum Cleaner', '1', 'Philip', 'Philip', 'V5654', 200000, 10, 'Phillips Vacuum cleaner FC8189 hadir dengan desain ultra-compact yang sangat ringan dan mudah disimp', 'vacum_Cleaner.png', 8),
('PR00000007', 'Camera Canon', '4', 'canon', 'Cannon', 'Canon', 2000000, 10, 'Canon Power Shot A 2500 adalah kamera pocket digital berdesain stylish dan slim dengan berbagai pili', 'Canon_POWER_Shoot.png', 0),
('PR00000008', 'Cannon Power', '4', 'Cannon', 'Cannon', 'Cannon', 3000000, 10, 'Canon Power Shot SX 270, hadir dengan desain slim dan compact dengan prosesor DIGIC 6, juga dapat di', 'Camera_Canon.png', 0),
('PR00000009', 'TL071 (ST)', '5', 'TL071 (ST)', 'TL071 (ST)', 'TL071 (ST)', 5000, 100, 'Low-noise JFET-input Operational Amplifier. Jumlah Op-Amp 1 Channel.', 'TL071 (ST).jpg', 0),
('PR00000010', 'arduinobt', '6', 'arduinobt', 'arduinobt', 'arduinobt', 100000, 100, 'Arduino BT adalah modul mikrokontroler berbasis ATMega168 dan Bluegiga WT11 Bluetooth Module. Modul ini mendukung komunikasi serial secara wireless melalui bluetooth (namun tidak kompatibel dengan Bluetooth headset ataupun perangkat audio). Modul ini memiliki 14 digital input/output (di mana 6 I/O dapat digunakan sebagai keluaran PWM dan satu untuk mereset Modul WT11), 6 analog input, 16 MHz crystal oscillator, terminal screw untuk power, ICSP Header, dan tombol reset. Modul ini memiliki segala sesuatu yang dibutuhkan oleh mikrokontroler agar dapat diprogram secara wireless melalui koneksi bluetooth ', 'arduinobt.jpg', 0),
('PR00000011', 'arduinopoe', '6', 'arduinopoe', 'arduinopoe', 'arduinopoe', 75000, 10, 'Arduino Ethernet adalah mikrokontroler berbasis Arduino Uno dan dilengkapi dengan Wiznet W5100 TCP/IP Embedded Ethernet. Modul ini dapat diprogram seperti pada UNO melalui koneksi serial FTDI.  Terdapat Power Over Ethernet Module yang mennyediakan sumber daya / power dari kabel twisted pair IEEE802.3AF Compliant', 'arduinopoe.jpg', 0),
('PR00000012', 'duemilanove', '6', 'duemilanove', 'duemilanove', 'duemilanove', 200000, 10, 'Arduino adalah merupakan sistem open source dengan I/O yang simpel dan development environment yang user friendly. Arduino dapat digunakan untuk mengembangkan sistem stand alone atau dapat terhubung dengan software di komputer. Duemilanove adalah merupakan pengembangan dari Diecimila Arduino. Dalam pengembangan ini terdapat fungsi auto reset, konektor power tambahan, built in LED, USB Overcurrent protection dan power seleksi otomatis Modul ini telah terassembly dan teruji dengan processor ATMega328 yang telah dilengkapi bootloader', 'duemilanove.jpg', 1),
('PR00000013', 'STM32F103RET6', '5', 'STM32F103RET6', 'STM32F103RET6', 'STM32F103RET6', 4500, 120, 'Mikrokontroler ARM Cortex-M3 dengan performa tinggi (clock CPU hingga 72MHz) yang sangat kaya akan fitur-fitur peripheral dan antarmuka serta memiliki konsumsi daya yang sangat rendah.', 'STM32F103RET6.jpg', 0),
('PR00000014', 'LG Home Theater', '1', 'LG', 'LG Corp', 'LG Home Theater', 400000, 2, 'LG Home Theater DH4230S adalah perangkat home theater dengan ukuran yang compact dengan dukungan daya 330 watt,  menghantarkan suara Surround 5.1 sepenuhnya dengan kualitas yang mengagumkan, memaksimalkan suasana hiburan dari  seluruh koleksi DVD Anda.', 'Home_lg_teater.png', 0),
('PR00000015', 'Theater in The Box', '1', 'LG', 'LG Corp', 'LG Home Theater', 6929000, 4, 'BH9520TW merupakan perangkat home theater yang menawarkan teknologi 3D Sound Zooming pada keempat speaker  Tallboy-nya untuk memberikan Anda pengalaman menonton video yang memukau.', 'thebox.png', 0),
('PR00000016', 'Philips Home Theater', '1', 'Philip', 'Philip', 'HTS-3531', 1886150, 2, 'Philips Home Theater (HTS-3531) adalah perangkat Home Theatre 5.1 dengan kualitas suara yang bertenaga dan  kualitas DVD dengan gambar jernih.', 'Philip.png', 0),
('PR00000017', 'Philips Home Theatre', '1', 'Philip', 'Philip', 'HTS3510', 1999000, 23, '  Philips Home Theatre HTS3510 adalah perangkat Home Theatre dengan kualitas suara yang bertenaga dan berkualitas  DVD dengan gambar jernih.', 'Philip2.png', 0),
('PR00000018', 'Polytron Theater', '1', 'POLYTRON ', 'POLYTRON ', 'PHT 139', 1158000, 10, 'POLYTRON Home Theater PHT 139 merupakan Home Theatre Speaker yang menghasilkan kekuatan dan kualitas  suara yang maksimal sehingga mampu menghadirkan nuansa bioskop ke ruang keluarga Anda.', 'Polytron.png', 2),
('PR00000019', 'Strika Maspion', '1', 'Maspion', 'Maspion', 'HA 110C', 110000, 4, 'Maspion Setrika HA 110C didesain dengan inovasi teknologi hemat energi, pengoperasian yang sangat mudah serta aman  dalam penggunaan. Dilengkapi double Protector, alas anti lengket, sistem pengaturan suhu, dan handle tahan panas.', 'Setrika.png', 1),
('PR00000023', 'Samsung P5100', '2', 'Samsung', 'Samsung', 'P5100', 4795000, 10, '  Samsung Galaxy Tab 2 10.1, tablet berdesain elegan dan stylish yang sudah terintegrasi OS Android Ice Cream Sandwich  v4.0.3 dan diperkuat prosesor Dual-core 1 GHz Cortex-A9 serta didukung GPU PowerVR SGX540 dan RAM 1 GB. ', 'gadget5.png', 8),
('PR00000024', 'Samsung Galaxy', '2', 'Samsung', 'Samsung', 'Note 10.1 N8000', 6799000, 10, 'Samsung Galaxy Note 10.1 N8000 Pearl Grey, tablet hasil inovasi terbaru dari seri Samsung Galaxy Note. ', 'gadget3.png', 10),
('PR00000025', 'Ativ Book', '3', 'Samsung', 'Samsung', 'Samsung', 3300000, 4, 'Samsung ATIV Book 9 Plus dibekali prosesor Intel  Core i5 dengan kecepatan 1.6 GHz, RAM 4 GB DDR3 dan Intel HD Graphics 4400 sebagai chip grafis. Untuk ruang  penyimpanannya tersedia SSD berkapasitas hingga 128 GB.', 'Samsung.png', 0),
('PR00000026', 'Acer Aspire', '3', 'ACER', 'ACER', 'ACER ASPIRE', 4500000, 0, 'Acer Aspire Slim V5-431 (10072G32Mass) Silver merupakan notebook berdesain tipis dan ringan yang sudah terintegrasi  dengan Linpus. Notebook ini ditunjang dengan prosesor Intel 1007 processor (1.5 GHz), Memori 2 GB DDR3, dan hard  disk 320 GB. Untuk urusan grafis, Acer Aspire V5-431 berlayar 14 inch dengan teknologi HD Acer Cinecrystal  LED-Backlit TFT LCD ini didukung oleh Intel HD dan dilengkapi Webcam, DVD Super Multi double-layer, HDMI output,  USB Port, serta koneksi Bluetooth 4.0, dan Wi-Fi.', 'Asus.png', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `kdslider` varchar(5) NOT NULL,
  `slider` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`kdslider`, `slider`, `keterangan`) VALUES
('SL001', 'banner1.jpg', 'Promo'),
('SL002', 'Banner2.jpg', 'Promo Akhir Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `idstatistik` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kdberita`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`kdkontak`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`idguest`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`kdinformasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kdpel`);

--
-- Indexes for table `penjualan_tmp`
--
ALTER TABLE `penjualan_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kdpro`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`kdslider`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`idstatistik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `kdkontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `idguest` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penjualan_tmp`
--
ALTER TABLE `penjualan_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `idstatistik` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
