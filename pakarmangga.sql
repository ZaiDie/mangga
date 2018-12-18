-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 08:48 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakarmangga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE IF NOT EXISTS `aturan` (
  `id_aturan` varchar(12) NOT NULL,
  `id_fakta` varchar(12) NOT NULL,
  PRIMARY KEY (`id_aturan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id_aturan`, `id_fakta`) VALUES
('a001', 'p001'),
('a002', 'p002'),
('a003', 'p003'),
('a004', 'p004'),
('a005', 'p005'),
('a006', 'p006'),
('a007', 'p007'),
('a008', 'p008'),
('a009', 'p009'),
('a010', 'p010'),
('a011', 'p011'),
('a012', 'p012'),
('a013', 'p013'),
('a014', 'p014'),
('a015', 'p015'),
('a016', 'p016'),
('a017', 'p017'),
('a018', 'p018'),
('a019', 'p019'),
('a020', 'p020'),
('a021', 'p021'),
('a022', 'p022');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(12) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar_berita` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar_berita`, `tanggal`) VALUES
(1, 'Perbanyak Benih Mangga dengan Sambung Talkup ', ' Benih mangga umumnya diperbanyak secara vegetatif melalui sambung pucuk. Keterampilan dan kecepatan seorang penangkar benih dalam melakukan penyambungan sangat menentukan keberhasilan sebuah penangkaran benih.\r\n\r\nDi Kebun Percobaan Cukurgondang, Grati, Pasuruan, Jawa Timur milik Badan Penelitian dan Pengembangan Pertanian (Balitbangtan), dikembangkan teknik sambung pucuk mangga dengan cara pengikatan tali langsung sungkup atau talkup.\r\n\r\nBahan yang digunakan sebagai batang bawah mangga Madu berumur 6 bulan  setelah semai, dan entres yang digunakan dari mangga Garifta Merah.\r\n\r\nHasil percobaan menunjukkan, dengan sambung talkup dapat lebih cepat 105 sambungan/jam dibandingkan cara pengikatan biasa yaitu 61 sambungan/jam. Persentase keberhasilannya memang tidak terlalu berbeda yaitu 95% pada cara talkup dan 94,5% pada cara pengikatan biasa\r\n\r\nTeknik talkup bisa dilakukan seperti berikut. Pertama, potong batang bawah di atas daun bendera lalu belah membujur jadi dua bagian yang sama sedalam 2 â€“ 3 cm. Kedua, sayat pangkal entres hingga berbentuk mata kapak sepanjang 2 â€“ 3 cm. Selanjutnya masukkan dalam belahan batang bawah.\r\n\r\nKetiga, ikat dengan plastik putih yang ditarik memanjang sampai 2 â€“ 3 kali panjang semula. Bidang sambungan diikat dari bawah ke atas sampai entres tertutup. Sisakan 1 â€“ 3 cm ujung entres. Kemudian, gunakan sisa plastik untuk menyungkup ujung entres dengan membalikkan plastiknya', 'mango-trees.jpg', '2016-11-16 18:12:19'),
(2, 'Pengendalian Hama Penggerek Batang Mangga', ' Buah mangga merupakan salah satu jenis buah yang banyak disukai oleh konsumen baik dalam maupun luar negeri. Hal ini disebabkan karena selain rasanya, buah mangga mempunyai kandungan nutrisi yang tinggi. Dengan bertambahnya jumlah penduduk dan semakin meningkatnya kesadaran masyarakat akan kesehatan maka konsumsi buah juga akan meningkat. Oleh karena itu untuk memenuhi kebutuhan buah yang semakin meningkat tersebut perlu diikuti dengan peningkatan produksi baik dari segi kuantitas maupun kualitas', 'penggerek-pucuk.JPG', '2016-11-19 13:09:37'),
(3, 'Varietas Unggul Mangga Siap Dipasarkan', '  Tujuh varietas unggul mangga hasil penelitian Balai Penelitian Tanaman Buah Tropika (Balitbu) memiliki nilai komersial cukup baik sehingga layak untuk dilisensikan. Tujuh varietas varietas unggul mangga tersebut adalah Sala-250, Gajam-315, Manggasari-243, Keraton-119, Marifta-IR/01, Dugur-141 dan Ken Layung. Misalnya varietas Ken Layung, kehadiran varietas ini ditujukan untuk memasok varietas mangga merah sesuai preferensi pasar mangga internasional. Bibit mangga ini bahkan sudah tersedia di Kebun Percobaan Cukurgondang, Jawa Timur.\r\n\r\nVarietas unggul mangga Ken Layung merupakan hasil koleksi plasma nutfah mangga yang dirilis tahun 2001. Keunggulannya dari segi produktivitas mencapai 76 kg/pohon dengan tampilan bentuk buah seragam/stabil dan permukaan rata. Warna kulit buah Ken Layung cerah yang semburat dari gradasi warna merah, kuning dominan dan hijau sehingga dari estetika tampilan buah mangga ini sangat menarik. Ukuran buahnya moderat. Dari segi cita rasa buah mangga ini manis dan segar sehingga menjadi nilai lebih tersendiri.\r\n\r\nSeperti halnya mangga Ken Layung, Mangga Marifta-01 juga dapat tumbuh pada dataran rendah (0-700 m dpl). Tampilannya cukup aktraktif sehingga berpotensi memenuhi kualitas ekspor. Produktivitasnya mencapai  89,4 kg/pohon dengan ukuran buah moderat dan berbobot relatif seragam dengan rata-rata 319 gram/buah. Mangga ini memiliki bentuk buah oval dengan permukaan yang rata dan seragam antar buah, memiliki warna kulit buah yang cerah dan gradasi warna merah delima dominan kuning dan hijau serta memiliki daya adaptasi tumbuh yang luas.\r\n\r\nKeunggulan spesifik varietas Manggasari-243 misalnya, varietas ini mempunyai kandungan tepung buah tinggi sehingga cocok untuk industri tepung mangga. Walaupun mempunyai daya adaptasi luas, tetapi untuk mencapai produktivitas tinggi varietas ini lebih baik ditanam di walayah basah', 'green_mangoes.jpg', '2016-11-19 13:10:12'),
(4, 'Hama dan Penyakit Penting Tanaman Mangga', ' September - Desember setiap tahun, buah mangga banyak kita jumpai di gerai buah hampir di semua pusat perbelanjaan yang mewah maupun di pasar tradisional. Sentra-sentra produsen mangga seperti Probolinggo dan Indramayu, pada bulan-bulan tersebut terjadi panen raya. Tetapi perlu diingat bahwa buah mangga varietas Arumanis yang mempunyai aroma khas dan rasanya manis itu, bisa melengkapi sebagai buah hidangan maupun jus di meja makan kita, tidak terlepas dari perjuangan para petani dalam mengendalikan hama dan penyakit yang sering menyerang tanaman buah mangga. Bagaimana pengendaliannya?\r\n\r\nSebagai negara yang beriklim tropis dan keanekaragaman agroklimat, Indonesia mampu menghasilkan hampir semua jenis buah tropika dan sub tropika termasuk mangga. Diluar sentra-sentra produsen mangga seperti Probolinggo dan Indramayu, tanaman mangga dapat dijumpai di hampir setiap pekarangan rumah tangga. Kabupaten Probolinggo misalnya, mangga dijadikan sebagai komoditas unggulan, usahatani mangga di wilayah tersebut dapat menghidupi 348 kelompok tani dan keluarganya. Varietas mangga yang dikembangkan adalah Arumanis, Manalagi, dan lain-lain. Mangga Probolinggo terutama varietas Arumanis sangat populer bahkan sudah dipasarkan sampai ke luar negeri seperti ke Singapura.\r\n\r\nHama yang sering mengganggu tanaman buah mangga antara lain penggerek pucuk yang disebabkan oleh larva Sternochetus geniocnemis. Hama ini menyebabkan ranting tanaman mati kering karena jaringan pembuluh kayu rusak akibat gerekan larvanya. Sedangkan pengendaliannya dapat dilakukan penyemprotan dengan menggunakan insektisida kontak pada bagian ranting. Masih banyak hama dan penyakit lain yang dapat menimbulkan kerugian bagi petani mangga. Informasi ini dapat menambah pengetahuan anda dan mengetahui bagaimana cara pengendaliannya.', '1.jpg', '2016-11-19 13:10:54'),
(5, 'Serangan Ulat Bulu Mereda, Mangga Leces Hijau Kembali', '  Fenomena bergejolaknya populasi ulat bulu yang â€œmenyerangâ€ berbagai daerah di Indonesia kini mulai mereda. Pohon-pohon mangga di Desa Leces, Kecamatan Leces, Probolinggo sebagai lokasi pertama yang mendapat â€œseranganâ€ ulat bulu ini kini sudah mulai menghijau kembali, bahkan diprediksi pertumbuhan daun mangganya  lebih subur (hijau royo-royo) dibandingkan sebelum peningkatan populasi ulat.\r\n\r\nPeningkatan populasi ini seharusnya  tidak perlu panik, karena ulat bulu memang sudah ada di alam, dan belum ditemukan bukti bahwa telah terjadi migrasi ulat yang â€œmenyerangâ€ Probolinggo pindah ke daerah lain. Seperti di Tuban Jawa Timur, berita â€œseranganâ€ ulat tersebut tidak sepenuhnya terbukti, karena setelah dilakukan pengecekan hanya tiga pohon Truba yang terserang.\r\n\r\nPeningkatan populasi ini terjadi jika ekosistemnya terganggu. Namun dibalik itu, belajar dari beberapa komoditas lain seperti alpukat dan kedondong justru akan lebih bagus produksi buahnya setelah terkena â€œseranganâ€ ulat .\r\n\r\nUntuk membuktikan kondisi terkini peningkatan populasi ulat bulu di Probolinggo, Jawa Timur, pada tanggal 22 April 2011, Kepala Badan Penelitian dan Pengembangan Pertanian, Dr. Haryono bersama dengan Kepala Pusat Penelitian Perkebunan, Dr. M. Syakir, Kepala Pusat Penelitian Hortikultura, Dr. Yusdar Hilman, dan Kepala BPTP Jawa Timur, Dr. Sudarmadi Purnomo beserta 2 orang Profesor Riset dan 9 entomolog Badan Litbang Pertanian melakukan peninjauan langsung ke lokasi kejadian. \r\n\r\nKunjungan yang didampingi langsung oleh kepala Dinas Pertanian Kabupaten Probolinggo, Ir. Ahmad Hasyim Ashari, MM,  untuk melihat fakta-fakta baru pasca â€œseranganâ€, sekaligus mensosialisasikan pengendalian ulat   yang ramah lingkungan. (Baca : Petunjuk Teknis Pengendalian Ulat Bulu) \r\n\r\nPara entomolog ini menyimpulkan bahwa peningkatan populasi ulat bulu yang terjadi dibeberapa daerah seperti  yang dialami  di Kecamatan Leces, Kabupaten Probolinggo, diakibatkan oleh terjadinya perubahan iklim yang cenderung ekstrim seperti musim hujan yang berkepanjangan pada tahun 2010, disusul terjadi hentakan iklim diawal 2011 (misalnya terjadi penurunan  intensitas Curah hujan, diikuti suhu dan kelembaban udara yang rendah) pada daerah yang terserang ulat bulu. (Baca : Ulat Bulu, Serangga Hama yang Mudah Dikendalikan)\r\n\r\nTanda-tanda meredanya peningkatan populasi ulat bulu ini terlihat dari menurunnya populasi ulat. Berdasarkan hasil penelitian para entomologis, jika dilihat dari siklus hidup ulat,  pada bulan April ini telah memasuki tahap kedua serangan namun yang terlihat justru â€œseranganâ€  menurun drastis. (Baca: Empat Jenis Ulat Bulu Menyerang Tanaman Mangga di Kab. Probolinggo, Serangan Ulat Bulu di Kota Madya Malang dan Sekitarnya, Laporan Monitoring dan Penganganan Serangan Ulat Bulu di Tuban ).\r\n\r\nUpaya pengendalian yang dilakukan Dinas Pertanian Kabupaten Probolinggo dan Peneliti Badan Litbang Pertanian kini telah membuahkan hasil yang menggembirakan. Semula pengendalian dilakukan Dinas Pertanian dengan menggunakan insektisida kimia untuk mengurangi dampak psikologis masyarakat. Namun pengendalian yang dilakukan peneliti Badan Litbang Pertanian menggunakan metode pengendalian yang ramah lingkungan. Dari hasil kunjungan ini beberapa ahli entomologis terus melanjutkan sosialisasi cara-cara pengendalian secara alami kepada masyarakat. Pengendalian ini diantaranya dengan menggunakan musuh alami seperti semut merah, bio insektisida, lem ulat yang diekstrak dari daun selasih, dan parasitoid. Saat ini justru telah berkembang musuh  alami ulat bulu ini.\r\nFenomena Ulat\r\n\r\nDari hasil pemantauan ini terlihat muncul fenomena yang khas dari ulat bulu yang menyerang pohon mangga ini, diantara fenomena tersebut adalah ulat bulu ini tidak menyerang tanaman lain seperti tanaman sawo dan tanaman pangan, serta  tidak menyerang daun mangga yang masih muda dan daun pada cabang yang sedang berbunga. Diprediksi bunganya justru akan lebih bagus dari biasanya.\r\n\r\nSatu fenomena  yang perlu dipelajari lebih lanjut oleh peneliti bahwa pohon mangga yang berada di atas kolam ikan justru terbebas dari serangan ulat, hal ini diperkirakan bahwa iklim mikro yang diciptakan oleh kolam ikan ini justru tidak mendukung berkembangnya populasi ulat.\r\n\r\nFenomena  ini bisa dijadikan dasar pengetahuan untuk melakukan penelitian lebih lanjut, sehingga diperoleh inovasi baru yang mampu mengantisipasi atau mengendalikan serangan ulat bulu di masa yang akan datang', 'mango-trees.jpg', '2016-11-19 13:11:26'),
(6, 'Gelar 200 Varietas Mangga di Ekspose Varietas Mangga Nusantara', ' Kegiatan yang bertemakan Diversitas Plasma Nutfah dan Hasil Pemuliaan Mangga Nusantara untuk Mendukung Peningkatan Daya Saing dan Ekspor ini, bertujuan untuk promosi varietas baru hasil pemuliaan dan keragaman genetik mangga nusantara, menjaring pendapat dan saran dalam pemanfaatan kekayaan plasma nutfah, serta strategi penelitian dan pengembangan mangga di Indonesia.\r\n\r\nKepala Badan Litbang Pertanian Dr. Haryono dalam pembukaan ekspose  ini mengatakan bahwa kekayaaan plasma nutfah mangga di Kebun Percobaan Cukurgondang bukan saja menjadi milik warga Jawa Timur, tetapi merupakan milik dan kebanggaan bangsa Indonesia.\r\n\r\nDalam uji rasa ditampilkan hampir 200 jenis mangga berjajar rapi. Pengunjung dapat mencicipi keunikan rasa berbagai varietas mangga dan produk olahannya.  Beberapa varietas yang menyita perhatian pengunjung adalah Garifta Merah, Garifta Kuning,  Ken Layung, Marifta, Gedong dan Lalijiwo.\r\n\r\nTurut hadir dalam acara ini Kepala Dinas Pertanian Kab. Pasuruan, wakil dari Ditjen Hortikultura, pelajar, akademisi dan peneliti mangga, pengusaha serta petani mangga di sekitar pasuruan.', 'mango-trees-beautiful-and-images.jpg', '2016-11-19 13:12:01'),
(7, 'Pengendalian Hama dan Penyakit pada Tabulampot Mangga (Mangifera indica)', '  Mangga termasuk ke dalam marga mangifera dengan nama ilmiah Mangifera indica. Tanaman mangga dapat ditanam dilahan maupun ditanam di pot yang sering disebut dengan tabulampot. Pada tabulampot, air dan pupuk dapat diserap sampai 80% sedangkan pada mangga yang ditanam di lahan air dan pupuk menyebar ke sekitarnya. Tabulampot bisa menjadi solusi bagi yang ingin berkebun dilahan sempit, dengan memanfaatkan lahan yang tidak luas, beberapa jenis buah-buahan bisa ditanam dalam tabulampot seperti sawo, mangga, rambutan, jeruk, belimbing, kedondong, jambu air, nangka dan salak. Dari semua jenis tabulampot yang paling mudah ditanam adalah mangga. Tabulampot mempunyai beberapa keuntungan antara lain :\r\n\r\nv  Dapat memanfaatkan lahan yang sempit\r\n\r\nv  Kebutuhan unsur hara mineral dan air dapat dipenuhi secara optimal\r\n\r\nv  Pemborosan pupuk dapat diminimalisasi\r\n\r\nv  Mudah perawatan terutama dalam penanggulangan Hama dan Penyakit Tanaman\r\n\r\nv  Mudah dalam pengaturan masa berbunga dan berbuah sehingga akan diperoleh kontinuitas produksi sepanjang tahun.\r\n\r\nSyarat tumbuh tabulampot :\r\n\r\n    Pemilihan jenis tanam yang sesuai dengan ketinggian tempat\r\n    Pemilihan bibit tanaman\r\n    Pemilihan media tanam dan pot\r\n    Pemupukan yang efektif\r\n    Pengendalian Hama dan penyakit  tanaman', 'pot.JPG', '2016-11-19 13:12:35'),
(8, 'Hasil Petik Mangga', 'Hasil panen yang dipetik dari perkebunan hari ini alhamdulillah banyak. Buah yang kami petik sangat bagus. buah mangga diproses di gudang kami untuk pengepackan selanjutnya. Bapak-bapak sedang memilih buah yang akan siap untuk di retribusikan ke kota-kota di Indonesia.', 'IMG_20161115_092825.jpg', '2016-11-22 01:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `fakta`
--

CREATE TABLE IF NOT EXISTS `fakta` (
  `id_fakta` varchar(12) NOT NULL,
  `fakta` text NOT NULL,
  `jenis` text NOT NULL,
  `info` text NOT NULL,
  `solusi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fakta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakta`
--

INSERT INTO `fakta` (`id_fakta`, `fakta`, `jenis`, `info`, `solusi`, `gambar`) VALUES
('f001', 'Daun mengeluarkan cairan manis (embun madu).', 'Gejala', '', '', ''),
('f002', 'Daun gugur', 'Gejala', '', '', ''),
('f003', 'Pucuk bunga gugur', 'Gejala', '', '', ''),
('f004', 'Buah muda mudah gugur', 'Gejala', '', '', ''),
('f005', 'Terdapat ulat penggerek pada pucuk muda dan bunga', 'Gejala', '', '', ''),
('f006', 'Terdapat ulat penggerek tunas menuju ke bawah', 'Gejala', '', '', ''),
('f007', 'Tunas Daun layu', 'Gejala', '', '', ''),
('f008', 'Daun kering', 'Gejala', '', '', ''),
('f009', 'Malai Bunga layu', 'Gejala', '', '', ''),
('f010', 'Bunga kering', 'Gejala', '', '', ''),
('f011', 'Daun mati', 'Gejala', '', '', ''),
('f012', 'Bunga mati', 'Gejala', '', '', ''),
('f013', 'Cabang batang patah', 'Gejala', '', '', ''),
('f014', 'Cabang batang/ranting kering', 'Gejala', '', '', ''),
('f015', 'Cabang batang/ranting mati', 'Gejala', '', '', ''),
('f016', 'Bekas patahan ranting terlihat lubang dengan gerekan', 'Gejala', '', '', ''),
('f017', 'Lubang gerekan pada ranting mengeluarkan kotoran seperti serbuk gergaji berwarna coklat', 'Gejala', '', '', ''),
('f018', 'Terdapat kotoran bekas gerekan pada bagian tengah/ujung buah', 'Gejala', '', '', ''),
('f019', 'Bagian tengah/ujung buah berwarna coklat gelap', 'Gejala', '', '', ''),
('f020', 'Buah pecah', 'Gejala', '', '', ''),
('f021', 'Buah busuk', 'Gejala', '', '', ''),
('f022', 'Buah jatuh', 'Gejala', '', '', ''),
('f023', 'Daun menjadi keputihan penuh dengan kutu putih', 'Gejala', '', '', ''),
('f024', 'Kutu putih/kutu kebul juga merangsang terbentuknya cendawan jelaga', 'Gejala', '', '', ''),
('f025', 'Kutu menghambat proses pertumbuhan buah', 'Gejala', '', '', ''),
('f026', 'Daun Berbisul', 'Gejala', '', '', ''),
('f027', 'Daun berwarna coklat, hijau dan kemerahan', 'Gejala', '', '', ''),
('f028', 'Permukaan kulit buah terdapat titik-titik hitam', 'Gejala', '', '', ''),
('f029', 'Disekitar titik hitam buah menjadi kuning', 'Gejala', '', '', ''),
('f030', 'Didalam buah terdapat larva ', 'Gejala', '', '', ''),
('f031', 'Terdapat kepik pada buah ', 'Gejala', '', '', ''),
('f032', 'Daun atau ranting berwarna pucat', 'Gejala', '', '', ''),
('f033', 'Daun mengerut', 'Gejala', '', '', ''),
('f034', 'Daun terdapat tepung berwarna kelabu', 'Gejala', '', '', ''),
('f035', 'Tepi daun menggulung', 'Gejala', '', '', ''),
('f036', 'Daun kelihatan seperti terbakar', 'Gejala', '', '', ''),
('f037', 'Daun berwarna coklat dan menggelinting', 'Gejala', '', '', ''),
('f038', 'Bunga terlihat thrips saat diketok diatas kertas', 'Gejala', '', '', ''),
('f039', 'Buah berlubang sampai dagingnya', 'Gejala', '', '', ''),
('f040', 'Buah berlubang bekas dimakan', 'Gejala', '', '', ''),
('f041', 'Daun muda menjadi layu dan kering karena cairan daun habis dihisap', 'Gejala', '', '', ''),
('f042', 'Daun menguap pada bagian luka selanjutnya tidak dapat berbunga', 'Gejala', '', '', ''),
('f043', 'Pada tanaman terdapat gerombolan daun mengering berwarna coklat', 'Gejala', '', '', ''),
('f044', 'Larva merangkai daun', 'Gejala', '', '', ''),
('f045', 'Ujung-ujung tunas menjadi sebuah gerombolan seperti sarang burung yang terdapat banyak larva', 'Gejala', '', '', ''),
('f046', 'Daun berlubang', 'Gejala', '', '', ''),
('f047', 'Daun berupa bercak tidak teratur', 'Gejala', '', '', ''),
('f048', 'Daun berwarna coklat keabuan', 'Gejala', '', '', ''),
('f049', 'Batang muda berupa bercak coklat keabuan', 'Gejala', '', '', ''),
('f050', 'Batang terdapat bercak membentuk gelang melingkari batang', 'Gejala', '', '', ''),
('f051', 'Batang mati', 'Gejala', '', '', ''),
('f052', 'Bunga terlihat bintik-bintik kecil', 'Gejala', '', '', ''),
('f053', 'Daging buah busuk.', 'Gejala', '', '', ''),
('f054', 'Bunga layu', 'Gejala', '', '', ''),
('f055', 'Daun bintik-bintik hitam', 'Gejala', '', '', ''),
('f056', 'Daun menggulung', 'Gejala', '', '', ''),
('f057', 'Batang/cabang mengeluarkan blendok', 'Gejala', '', '', ''),
('f058', 'Kulit batang berwarna gelap', 'Gejala', '', '', ''),
('f059', 'Kulit batang mengering', 'Gejala', '', '', ''),
('f060', 'Kulit luar batang tampak seperti pecah-pecah', 'Gejala', '', '', ''),
('f061', 'Kulit batang mengelupas sebagai kepingan', 'Gejala', '', '', ''),
('f062', 'Terdapat jamur pada daun', 'Gejala', '', '', ''),
('f063', 'Daun berwarna kehitaman seperti beledu', 'Gejala', '', '', ''),
('f064', 'Ranting berbintik kecoklatan', 'Gejala', '', '', ''),
('f065', 'Daun berbintik kecoklatan', 'Gejala', '', '', ''),
('f066', 'Daun terdapat bercak kecil bulat atau bersudut', 'Gejala', '', '', ''),
('f067', 'Daun hitam kecoklatan ', 'Gejala', '', '', ''),
('f068', 'Daun dikelilingi lingkaran klorotis yang jelas  jika dilihat dari cahaya yang menembus daun', 'Gejala', '', '', ''),
('f069', 'Daun muda berupa bercak putih keabuan', 'Gejala', '', '', ''),
('f070', 'Daun dapat membentuk bercak yang besar', 'Gejala', '', '', ''),
('f071', 'Tepi daun  dibatasi dengan warna gelap', 'Gejala', '', '', ''),
('f072', 'Buah terdapat bercak kuning yang akan berubah menjadi abu-abu', 'Gejala', '', '', ''),
('f073', 'Pembuahan tidak terjadi', 'Gejala', '', '', ''),
('f074', 'Batang berlubang', 'Gejala', '', '', ''),
('f075', 'Blendok akan berubah warna menjadi coklat atau hitam', 'Gejala', '', '', ''),
('f076', 'Bunga gugur/rontok', 'Gejala', '', '', ''),
('p001', 'Wereng Mangga', 'Hama', 'Serangga merusak tanaman dengan cara mengisap cairan bunga yang baru mekar sehingga bunga mudah kering dan cepat mati, Serangga dewasa berukuran 0,2 - 0,3 mm berwarna abu-abu kecoklatan', '-	Pengasapan seminggu sebanyak 4 kali.\r\n<br>-	Pengendalian secara kimiawi dengan insektisida sistemik pada jaringan pembuluh kayu pada saat tanaman memasuki fase pecah tunas dan dilakukan penyemprotan dengan insektisida kontak pada bagian tunas dan ranting', ''),
('p002', 'Penggerek Pucuk', 'Hama', 'Gejala ini ditimbulkan oleh ulat yang menggerek pucuk yang masih muda (flush) dan malai bunga dengan mengebor/menggerek tunas daun/malai bunga akan menjadi layu, kering sehingga transportasi unsur hara terhenti kemudian mati', '-	Cabang tunas yang terinfeksi dipotong lalu dibakar, pendaingran untuk mematikan pupa.\r\n<br>-	Secara kimiawi dengan menyemprotkan insektisida sistemik pada jaringan kayu pada saat tanaman memasuki fase pecah tunas dan dilakukan penyemprotan menggunakan insektisida kontak pada bagian ranting', 'penggerek-pucuk.JPG'),
('p003', 'Penggerek Batang/ranting', 'Hama', 'Hama penggerek ranting berupa kumbang berwarna coklat yang ukuran tubuhnya 6 mm, kumbang tersebut merusak tanaman dengan cara menggerek ranting', '-	Memangkas ranting yang terserang kurang lebih 5cm dibawah lubang yang masing-masing mengeluarkan kotoran.\r\n<br>-	Memusnahkan larva penggerek yang ada diranting/cabang/batang yang telah dipotong dengan jalan membelah bagian tanaman dan membakarnya.\r\n<br>-	Menyemprotkan insektisida ATABRON 50 EC atau AMBUSH 2 EC', 'penggerek batang1.jpg'),
('p004', 'Penggerek Buah/seed borer (Noorda albizornia)', 'Hama', 'Hama ini menggerek buah pada bagian ujung/tengah, dan umumnya meninggalkan bekas kotoran dan sering menyebabkan buah pecah. Ulat ini bewarna garis garis-garis merah berselang-seling dengan warna putih', '-	Membungkus (membrongsong) buah dengan kertas semen.\r\n<br>-	Memusnahkan buah-buah yang gugur dan dibakar.\r\n<br>- Secara kimiawi, dengan menyemprotkan pestona, insektisida AGROTHION 50 EC atau AMCOTHENE 75 SP pada saat buah muda dan dilakukan 1-2 minggu sekali.', 'penggerek-buah.jpg'),
('p005', 'Kutu Putih (bemisia tebaci)', 'Hama', 'Kutu berbentuk oval, datar, tertutup lapisan tebal seperti lilin, sering hinggap di daun dan menghisap cairan sel daun akibat serangan kutu tersebut', '-	Pemangkasan total pada pohon mangga sehingga pohon menjadi gundul tanpa daun. Dalam satu bulan tunas akan muncul dan dua bulan kemudian akan hijau kembali.\r\n<br>-	Menyemprotkan insektisida DIKROTOFOS (BILDRIN 24 WSC)', 'kutu-putih.jpeg'),
('p006', 'Bisul daun (procontarinia mattelana)', 'Hama', '', '-	Membakar daun yang terserang bisul daun, menggemburkan tanah untuk mengeluarkan kepompong dan memperbaiki aerasi.\r\n<br>-	Menyemprot buah dan daun dengan ripcord, Cymbuth/Phosdrin 3x seminggu', 'bisul daun.JPG'),
('p007', 'Lalat Buah (Bractocera dorsalis)', 'Hama', 'Serangga dewasa berwarna kuning bersayap putih bening dan berukuran panjang 7 - 8 mm, suka hinggap dan bertelur pada buah mangga, jambu biji; jambu air, belimbing, nangka, jeruk dan cabai, sehingga buah menjadi rusak', '- Memusnahkan buah yang rusak.\r\n<br>-	Membungkus (membrongsong) buah muda sampai menjadi tua dengan kertas semen.\r\n<br>-	Menyemprotkan insektisida DECIS atau TALSTAR 25 EC pada saat buah muda', 'lalat-buah.jpg'),
('p008', 'Kepik Mangga (Crptorrhynoccus gravis)', 'Hama', 'Hama ini menyerang buah dan masuk kedalam buah', '-	Dengan semut merah atau kerangkang agar kepik tidak bertelur.\r\n<br>-	Penyemprotan dengan menggunakan pestona pada sore hari', 'kepik mangga.jpg'),
('p009', 'Tungau (Paratetranychus yothersi)', 'Hama', 'Jenis tungau merah yang paling ditemui pada buah mangga. Tungau hitam dan tungau hijau biasanya menyerang daun atau ranting tanaman. Tungau yang pertama akan menyerang daun mangga yang masih muda sedangkan tungau yang kedua akan menyerang permukaan daun mangga bagian bawah. Keduanya menyerang rangkain bunga', '-	Menyemprotkan tepung belerang pada bagian yang terserang.\r\n<br>-	Memangkas dan memusnahkan bagian batang yang terserang\r\n<br>-	Secara kimiawi dengan menyemprotkan insektisida Diazinon/Basudin', 'tungau.jpg'),
('p010', 'Thrips (Scirtothrips dorsalis)', 'Hama', 'Hama ini sering disebut thrips bergaris merah karena pada segment perut yang pertama terdapat suatu garis merah. Hama ini selain menyerang daun muda juga bunga dengan menusuk dan menghisap cairan dari epidermis daun dan buah. Tempat tusukan bisa menjadi sumber penyakit', '-	Tunas muda yang terserang dipotong lalu dibakar.\r\n<br>-	Menangkap dengan perangkap warna kuning.\r\n<br>-	Pemangkasan teratur.\r\n<br>-	Penyemprotan dengan BVR atau PESTONA.', 'thrips.jpg'),
('p011', 'Codot', 'Hama', 'Hama ini akan memakan buah mangga dimalam hari', '-	Membiarkan semut kerangkang hidup disela daun mangga.\r\n<br>-	Memasang kitiran angin berpeluit.\r\n<br>-	Melindungi pohon dengan jaring.', 'codot.jpg'),
('p012', 'Kepik penghisap daun', 'Hama', 'Kepik ini datang secara bergerombol untuk meletakkan telur atau langsung menghisap cairan tunas-tunas muda tanaman sehingga tunas jadi layu, kering dan mati', '-	Dengan semut merah yang menyebabkan kepik tidak bertelur', 'kepik penghisap daun.jpg'),
('p013', 'Ulat perusak daun', 'Hama', 'Hama ini menyerang tanaman mangga yang kurang terawat dengan baik', '-	Memonitoring tanaman mangga\r\n<br>-	Membersihkan gerombolan daun dengan cara dikumpulkan dan dibakar, pemangkasan', 'ulat perusak daun.jpeg'),
('p014', 'Antraknose (Colletotrichum Gloeosporiodes)', 'Penyakit', 'Penyakit ini disebabkan jamur Colletotrichum gloesporioder (Penz) sacc. Dianggap sebagai penyakit yang sering menyerang dan penting untuk di basmi. Penyakit ini menyerang daun muda, batang, bunga dan buah', '-	Pemangkasan pada tanaman dan jangan terlalu rapat saat penanaman.\r\n<br>-	Memotong dan memusnahkan bagian tanaman yang terserang dan dibakar.\r\n<br>-	Pada saat tampak gejala awal dilakukan penyemprotan fungisida benomil (500ppm)/ diabendazol (90 ppm) dengan air hangat selama 5 menit', 'antraknose buah.png'),
('p015', 'Gleosporium', 'Penyakit', 'Penyebab penyakit gleosporium adalah jamur gleosporium mengifera', '-	Menyemprotkan fungisida bubur bordeoux', 'gleosporium.jpg'),
('p016', 'Penyakit Kulit (Diplodia Botryodiplodia Theobromae)', 'Penyakit', 'Bagian tanaman yang diserang adalah batang atau cabang mengeluarkan blendok, jika kulit dikelupas maka kerusakan dapat mencapai jaringan kayu.. Penyakit ini disebabkan oleh jamur Botryodiplodia theobromae Pat. Penyakit ini biasanya timbul pada pangkal batang dan cabang-cabang yang mendadak menerima sinar matahari penuh antara lain karena pemangkasan yang terlalu berat', '-	Menghindari pemangkasan tanaman yang terlalu berat (menyebabkan luka sebagian jalan masuknya serangan jamur).\r\n<br>-	Pengapuran pada pangkal batang.\r\n<br>-	Menutup bagian lukapada waktu pemangkasan dengan Klorox.\r\n<br>-	Pengelupasan kulit bagian tanaman yang terserang kemudian di beri fungisida secara efektif', ''),
('p017', 'Cendawan Jelaga', 'Penyakit', 'Penyebab penyakit cendawan jelaga adalah jamur Meliola mangifera atau jamur capmodium mangiferum. Daun mangga yang dserang berwarna hitam seperti bledu. Warna hitam disebabkan oleh jamur yang hidup dicairan manis', 'â€¢	Memberantas serangga yang menghasilkan cairan manis dengan insektisida atau tepung belerang', 'jelaga.png'),
('p018', 'Bercak karat merah', 'Penyakit', 'Merupakan penyakit mangga yang menyerang pada daun, ranting, bunga dan tunas sehingga terbentuk bercak semacam  bekas karat kecoklatan. Penyakit ini disebabkan ole ganggang cepahaleuros sp. Penyakit ini sangat mempengaruhi proses pembuahan', '-	Pemangkasan dahan, cabang dan ranting.\r\n<br>-	menyemprotkan fungisida bubuk Bordeaux atau sulfat tembaga', 'bercak karat merah.gif'),
('p019', 'Bercak daun stigmina', 'Penyakit', 'Penyakit ini disebabkan jamur stigmina mangiferae(koord) Ell. Biasanya penyakit ini ada pada saat tanaman membentuk daun muda', '-	Menjaga kelembapan sekitar tanaman\r\n<br>-	Memangkas dan memusnahkan bagian yang terserang\r\n<br>-	Pengelolaan air yang tepat atau menggunakan fungisida benlate, topsin M70 wp dan derosal 500/60wp', ''),
('p020', 'Bercak daun kelabu', 'Penyakit', 'Penyakit ini disebabkan jamur pestalotiopsis mangiferae (Henn) stey. Penyakit ini biasanya ada pada saat tanaman membentuk daun muda', '-	Tidak perlu dilakukan pengendalian karena tidak terlalu merugikan dan biasanya akan hilang bersamaan saat membasmi penyakit lainnya', ''),
('p021', 'Kudis buah', 'Penyakit', 'Penyakit ini disebabkan oleh elsinoe mangiferae yang menyerang tangkai bunga, bunga, ranting dan daun', '-	Fungisida dithane m-45, manzate atau pignoe tiga kali seminggu dan memangkas tangkai bunga yang terserang', 'kudis buah.JPG'),
('p022', 'Penyakit blendok', 'Penyakit', 'Penyakit ini disebabkan oleh jamur diplodia recifensis yang hidup di dalam lubang yang dibuat oleh kumbang xyleborus affinis. Lubang mngeluarkan blendok (getah) yang akan berubah warna menjadi coklat atau hitam', 'ïƒ¼	Memotong bagian yang sakit, lubang ditutupi dengan kapas yang telah dicelupkan ke dalam insektisida dan menyemprotkan pohon dengan bubuk Bordeaux', '');

-- --------------------------------------------------------

--
-- Table structure for table `fakta_aturan`
--

CREATE TABLE IF NOT EXISTS `fakta_aturan` (
  `id_faktur` varchar(12) NOT NULL,
  `id_aturan` varchar(12) NOT NULL,
  `id_fakta` varchar(12) NOT NULL,
  PRIMARY KEY (`id_faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakta_aturan`
--

INSERT INTO `fakta_aturan` (`id_faktur`, `id_aturan`, `id_fakta`) VALUES
('01', 'a001', 'f001'),
('02', 'a001', 'f002'),
('03', 'a001', 'f003'),
('04', 'a001', 'f004'),
('05', 'a002', 'f005'),
('06', 'a002', 'f006'),
('07', 'a002', 'f007'),
('08', 'a002', 'f008'),
('09', 'a002', 'f009'),
('10', 'a002', 'f010'),
('11', 'a002', 'f011'),
('12', 'a002', 'f012'),
('13', 'a003', 'f013'),
('14', 'a003', 'f014'),
('15', 'a003', 'f015'),
('16', 'a003', 'f016'),
('17', 'a003', 'f017'),
('18', 'a004', 'f018'),
('19', 'a004', 'f019'),
('20', 'a004', 'f020'),
('21', 'a004', 'f021'),
('22', 'a004', 'f022'),
('23', 'a005', 'f023'),
('24', 'a005', 'f024'),
('25', 'a005', 'f025'),
('26', 'a006', 'f026'),
('27', 'a006', 'f027'),
('28', 'a007', 'f021'),
('29', 'a007', 'f022'),
('30', 'a007', 'f028'),
('31', 'a007', 'f029'),
('32', 'a007', 'f030'),
('33', 'a008', 'f021'),
('34', 'a008', 'f031'),
('35', 'a009', 'f002'),
('36', 'a009', 'f032'),
('37', 'a009', 'f033'),
('38', 'a009', 'f034'),
('39', 'a009', 'f035'),
('40', 'a010', 'f036'),
('41', 'a010', 'f037'),
('42', 'a010', 'f038'),
('43', 'a011', 'f039'),
('44', 'a011', 'f040'),
('45', 'a012', 'f041'),
('46', 'a012', 'f042'),
('47', 'a013', 'f043'),
('48', 'a013', 'f044'),
('49', 'a013', 'f045'),
('50', 'a013', 'f046'),
('51', 'a014', 'f002'),
('52', 'a014', 'f008'),
('53', 'a014', 'f028'),
('54', 'a014', 'f046'),
('55', 'a014', 'f047'),
('56', 'a014', 'f048'),
('57', 'a014', 'f049'),
('58', 'a014', 'f050'),
('59', 'a014', 'f051'),
('60', 'a014', 'f052'),
('61', 'a014', 'f053'),
('62', 'a014', 'f076'),
('63', 'a015', 'f021'),
('64', 'a015', 'f054'),
('65', 'a015', 'f055'),
('66', 'a015', 'f056'),
('67', 'a016', 'f057'),
('68', 'a016', 'f058'),
('69', 'a016', 'f059'),
('70', 'a016', 'f060'),
('71', 'a016', 'f061'),
('72', 'a017', 'f062'),
('73', 'a017', 'f063'),
('74', 'a018', 'f064'),
('75', 'a018', 'f065'),
('76', 'a019', 'f066'),
('77', 'a019', 'f067'),
('78', 'a019', 'f068'),
('79', 'a020', 'f046'),
('80', 'a020', 'f069'),
('81', 'a020', 'f070'),
('82', 'a020', 'f071'),
('83', 'a021', 'f072'),
('84', 'a021', 'f073'),
('85', 'a021', 'f076'),
('86', 'a022', 'f057'),
('87', 'a022', 'f074'),
('88', 'a022', 'f075');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
