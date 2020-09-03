-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2020 pada 07.35
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kutorenon_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `penulis`, `foto`, `ulasan_singkat`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Anggaran Transfer ke Daerah dan Dana Desa Capai Rp 796,3 T di 2021', 'anggaran-transfer-ke-daerah-dan-dana-desa-capai-rp-796,3-t-di-2021', 'Pipit Ika Ramadhani', '1598707257.005159300_1539251008-20181011-Jokowi-The-Bali-Fintech-3.webp', '<p>Presiden Joko Widodo saat berpidato dalam Bali Fintech Agenda IMF-WB 2018 di Nusa Dua, Bali, Kamis (11/10). Jokowi mengaku mengacu pada kebijakan Amerika Serikat (AS) yang merupakan negara kelahiran internet. (Liputan6.com/Angga Yuniar)</p>', '<p><strong>Liputan6.com, Jakarta -</strong> Anggaran Transfer ke Daerah dan <a href=\"https://www.liputan6.com/bisnis/read/4316821/sukses-tekan-laju-kemiskinan-rp-41-triliun-dana-desa-difokuskan-ke-padat-karya\">Dana Desa</a> (TKDD) direncanakan sebesar Rp 796,3 triliun pada 2021. Dengan anggaran tersebut, Presiden JOko Widodo (Jokowi) menyebutkan setidaknya ada tujuh arah kebijakan yang akan dilakukan.</p><p>“Pertama, mendukung langkah pemulihan ekonomi sejalan dengan prioritas nasional, melalui pembangunan aksesibilitas dan konektivitas kawasan sentra pertumbuhan ekonomi. Dukungan insentif kepada daerah untuk menarik investasi, perbaikan sistem pelayanan investasi, dan dukungan terhadap UMKM,” sebut Jokowi dalam Pidato Penyampaian RUU APBN Tahun Anggaran 2021, Jumat (14/8/2020).</p><p>Kedua, lanjut Jokowi, mengoptimalkan pemanfaatan dana bagi hasil dalam rangka mendukung penanganan kesehatan, jaring pengaman sosial, serta pemulihan ekonomi dampak Covid-19.</p><p>Ketiga, mengarahkan 25 persen dari dana transfer umum untuk mempercepat program pemulihan ekonomi daerah dan pembangunan SDM. Kemudian, memfokuskan penggunaan <a href=\"https://www.liputan6.com/tag/dana-desa\">dana insentif daerah</a> (DID) untuk digitalisasi pendidikan, kesehatan, dan pemberdayaan UMKM.</p><p>Selanjutnya, kelima, refocusing dan simplikasi jenis, bidang, dan kegiatan DAK fisik yang bersifat reguler dan penugasan.</p><p>“Keenam, DAK non-fisik juga mendukung penguatan SDM pendidikan melalui dukungan program merdeka belajar. Serta tambahan sektor strategis lainnya, seperti dana pelayanan perlindungan perempuan dan anak, dana fasilitasi penanaman modal, serta dana pelayanan ketahanan pangan,” ujar dia.</p><p>Terakhir, ketujuh, mempertajam alokasi <a href=\"https://www.liputan6.com/bisnis/read/4316821/sukses-tekan-laju-kemiskinan-rp-41-triliun-dana-desa-difokuskan-ke-padat-karya\">dana desa</a> untuk pemulihan ekonomi desa dan pengembangan sektor prioritas. Hal ini meliputi teknologi informasi dan komunikasi, pembangunan desa wisata, dan mendukung ketahanan pangan.</p>', '2020-08-29 13:20:57', '2020-08-29 13:20:57'),
(2, 'Anggaran Transfer ke Daerah dan Dana Desa Capai Rp 796,3 T', 'anggaran-transfer-ke-daerah-dan-dana-desa-capai-rp-796,3-t', 'Pipit Ika Ramadhani', '1598708368.005159300_1539251008-20181011-Jokowi-The-Bali-Fintech-3.webp', '<p>Presiden Joko Widodo saat berpidato dalam Bali Fintech Agenda IMF-WB 2018 di Nusa Dua, Bali, Kamis (11/10). Jokowi mengaku mengacu pada kebijakan Amerika Serikat (AS) yang merupakan negara kelahiran internet. (Liputan6.com/Angga Yuniar)</p>', '<p><strong>Liputan6.com, Jakarta -</strong> Anggaran Transfer ke Daerah dan <a href=\"https://www.liputan6.com/bisnis/read/4316821/sukses-tekan-laju-kemiskinan-rp-41-triliun-dana-desa-difokuskan-ke-padat-karya\">Dana Desa</a> (TKDD) direncanakan sebesar Rp 796,3 triliun pada 2021. Dengan anggaran tersebut, Presiden JOko Widodo (Jokowi) menyebutkan setidaknya ada tujuh arah kebijakan yang akan dilakukan.</p><p>“Pertama, mendukung langkah pemulihan ekonomi sejalan dengan prioritas nasional, melalui pembangunan aksesibilitas dan konektivitas kawasan sentra pertumbuhan ekonomi. Dukungan insentif kepada daerah untuk menarik investasi, perbaikan sistem pelayanan investasi, dan dukungan terhadap UMKM,” sebut Jokowi dalam Pidato Penyampaian RUU APBN Tahun Anggaran 2021, Jumat (14/8/2020).</p><p><strong>BACA JUGA</strong></p><ul><li><a href=\"https://www.liputan6.com/bisnis/read/4331075/jokowi-anggarkan-rp-305-triliun-untuk-transformasi-digital-di-2021\"><strong>Jokowi Anggarkan Rp 30,5 Triliun untuk Transformasi Digital di 2021</strong></a></li></ul><p>Kedua, lanjut Jokowi, mengoptimalkan pemanfaatan dana bagi hasil dalam rangka mendukung penanganan kesehatan, jaring pengaman sosial, serta pemulihan ekonomi dampak Covid-19.</p><p>Ketiga, mengarahkan 25 persen dari dana transfer umum untuk mempercepat program pemulihan ekonomi daerah dan pembangunan SDM. Kemudian, memfokuskan penggunaan <a href=\"https://www.liputan6.com/tag/dana-desa\">dana insentif daerah</a> (DID) untuk digitalisasi pendidikan, kesehatan, dan pemberdayaan UMKM.</p><p>Selanjutnya, kelima, refocusing dan simplikasi jenis, bidang, dan kegiatan DAK fisik yang bersifat reguler dan penugasan.</p><p>“Keenam, DAK non-fisik juga mendukung penguatan SDM pendidikan melalui dukungan program merdeka belajar. Serta tambahan sektor strategis lainnya, seperti dana pelayanan perlindungan perempuan dan anak, dana fasilitasi penanaman modal, serta dana pelayanan ketahanan pangan,” ujar dia.</p><p>Terakhir, ketujuh, mempertajam alokasi <a href=\"https://www.liputan6.com/bisnis/read/4316821/sukses-tekan-laju-kemiskinan-rp-41-triliun-dana-desa-difokuskan-ke-padat-karya\">dana desa</a> untuk pemulihan ekonomi desa dan pengembangan sektor prioritas. Hal ini meliputi teknologi informasi dan komunikasi, pembangunan desa wisata, dan mendukung ketahanan pangan.</p>', '2020-08-29 13:39:28', '2020-08-29 13:39:28'),
(3, 'Serapan Anggaran Pemerintah Bisa Percepat Pemulihan Ekonomi RI', 'serapan-anggaran-pemerintah-bisa-percepat-pemulihan-ekonomi-ri', 'Soraya Novika', '1598713154.005159300_1539251008-20181011-Jokowi-The-Bali-Fintech-3.webp', '<p>Perayaan hari kemerdekaan Republik Indonesia ke 75 tahun ini jauh berbeda dari tahun-tahun sebelumnya.&quot;Kita harapkan, kita ingin (ekonomi) tumbuh, tapi ini memang perlu kerja keras,&quot; kata Jokowi.</p>', '<p><strong>Jakarta - </strong>Perayaan hari kemerdekaan Republik Indonesia ke 75 tahun ini jauh berbeda dari tahun-tahun sebelumnya. Pandemi COVID-19 yang melanda, serta roda perekonomian yang melambat, memaksa seluruh komponen bangsa untuk berjuang lagi agar lolos dari jurang resesi.</p>\r\n\r\n<p>Saat memberi pengarahan dari Posko Penanganan COVID-19 Jawa Barat di Bandung, Selasa (11/8) lalu, Presiden Joko Widodo mengakui butuh kerja keras untuk menumbuhkan ekonomi pada kuartal III-2020.</p>\r\n\r\n<p>&quot;Kita harapkan, kita ingin (ekonomi) tumbuh, tapi ini memang perlu kerja keras,&quot; kata Jokowi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Baca juga:</strong><a href=\"https://finance.detik.com/berita-ekonomi-bisnis/d-5127176/serapan-anggaran-pemulihan-ekonomi-nasional-baru-22\"><strong>Serapan Anggaran Pemulihan Ekonomi Nasional Baru 22%</strong></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Oleh sebab itu, Jokowi meminta kepala daerah untuk segera merealisasikan penyerapan anggaran yang ada di dalam APBD. Pasalnya, kata dia masih ada anggaran APBD seluruh daerah sebesar Rp 170 Triliun yang mandek di bank.</p>\r\n\r\n<p>&quot;Artinya penggunaannya memerlukan kecepatan terutama di kuartal ketiga ini. Kunci ada di bulan Juli, Agustus dan September, supaya kita tidak masuk dalam kategori resesi ekonomi,&quot; imbuhnya.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Baca juga:</strong><a href=\"https://finance.detik.com/berita-ekonomi-bisnis/d-5131000/duh-10-daerah-ini-serapan-anggarannya-kecil-banget\"><strong>Duh, 10 Daerah Ini Serapan Anggarannya Kecil Banget!</strong></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Permintaan presiden ini tentunya disambut baik oleh banyak pihak. Di sektor konstruksi, khususnya industri logam, penggunaan anggaran daerah dipercaya mampu memberi stimulus bagi para pelaku usaha untuk bangkit dari keterpurukan akibat pandemi. Seperti diketahui, dampak pandemi di sektor ini, cukup mempengaruhi mulai dari hulu hingga hilir.</p>\r\n\r\n<p>&quot;Industri logam kalo kita lihat terus terang dari hulu sampai ke hilir terdampak. Hulunya sendiri kalo kita bahas mengalami penurunan cukup ekstrem ya. Seperti kita tahu di hulu, Krakatau Steel juga sedang menurun drastis. Dampaknya seperti efek domino. Di hilir, ARFI selaku pelaku usaha industry dan manufaktur barang jadi, produk turunan baja, tentu saja kena imbasnya,&quot; ujarnya Sekjen Asosiasi Roll Former Indonesia (ARFI), Nicolas Kesuma dalam siaran persnya.</p>', '2020-08-29 13:48:34', '2020-08-31 14:51:41'),
(4, 'Anies Siapkan Aturan soal Isolasi Mandiri Tak Lagi di Rumah', 'anies-siapkan-aturan-soal-isolasi-mandiri-tak-lagi-di-rumah', 'Ika Defianti', '1598971422.044719900_1592291352-20200616-Gubernur-DKI-Jakarta-Anies-Baswedan-Naik-Sepeda-IMAM-3.webp', '<p>Gubernur DKI Jakarta Anies Baswedan mengendarai sepeda di Kawasan Bundaran HI, Jakarta, Selasa (16/6/2020). Anies Baswedan bersepeda keliling Ibu Kota dalam rangka mengajak warga agar selalu menggunakan face shield atau masker saat beraktivitas di luar ruangan. (merdeka.com/Imam Buhori)</p>', '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;Gubernur DKI Jakarta Anies Baswedan mengatakan, pihaknya saat ini tengah menyiapkan regulasi atau aturan terkait pelaksanaan isolasi mandiri pasien Covid-19.</p>\r\n\r\n<p>Kata Anies, regulasi itu nantinya akan mengatur agar pelaksanaan isolasi mandiri langsung diawasi oleh pemerintah.</p>\r\n\r\n<p>&quot;Bahwa isolasi itu dikelola oleh pemerintah sehingga bisa lebih efektif dalam memutus mata rantai, karena tidak semua dari mereka yang terpapar tanpa gejala bisa melakukan isolasi dengan baik di rumahnya masing-masing,&quot; kata Anies di Tanjung Priok, Jakarta Utara, Selasa (1/9/2020).</p>\r\n\r\n<p>Rencananya pasien isolasi mandiri mendapatkan fasilitas kesehatan dari pemerintah. Hal tersebut guna menjamin pengawasan saat pelaksanaan isolasi.</p>\r\n\r\n<p>Menurut mantan Menteri Pendidikan dan Kebudayaan ini, masyarakat belum sepenuhnya paham pelaksanaan isolasi mandiri untuk yang tidak memiliki gejala ataupun gejala ringan.</p>\r\n\r\n<p>&quot;Isolasi itu bagi yang memiliki gejala berat, sedang-berat harus dirawat di rumah sakit. Bagi yang gejala ringan atau tanpa gejala, maka akan diisolasi di Wisma Atlet dan itu sudah disepakati sehingga kita akan laksanakan,&quot; ucapnya.</p>\r\n\r\n<p>Sementara itu, Kepala Bidang Pencegahan dan Pengendalian Penyakit, Dinas Kesehatan Provinsi DKI Jakarta, Dwi Oktavia menyatakan adanya penambahan pasien positif Covid-19 sebanyak 941 kasus pada Selasa (1/9/2020).</p>\r\n\r\n<p>Dengan penambahan tersebut saat ini jumlah kumulatif pasien sebanyak di DKI Jakarta 41.250 kasus.</p>', '2020-09-01 14:43:42', '2020-09-01 14:43:42'),
(5, 'Stasiun Jakarta Kota Kembali Layani Perjalanan Kereta Api Jarak Jauh', 'stasiun-jakarta-kota-kembali-layani-perjalanan-kereta-api-jarak-jauh', 'Ika Defianti', '1598971489.059460500_1594460731-080457900_1594372867-20200710-Kereta-Jarak-Jauh-1.webp', '<p>Penambahan Perjalanan KA Jarak jauh: Kereta jarak jauh tiba di Stasiun Pasar Senen, Jakarta, Jumat (10/7/2020). PT KAI telah mengoperasikan lima perjalanan kereta jarak jauh untuk tujuan Bandung, Cirebon, dan Surabaya mulai Jumat 10 Juli 2020. (Liputan6.com/Faizal Fanani)</p>', '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;PT Kereta Api Indonesia (KAI) Daop 1 Jakarta kembali membuka Stasiun Jakarta Kota untuk melayani keberangkatan&nbsp;<a href=\"https://www.liputan6.com/news/read/4337787/kai-penumpang-kereta-api-meningkat-88-persen-di-daop-1-jakarta\">kereta api</a>&nbsp;(KA) jarak jauh yang bertujuan ke Surabaya Gubeng dan Semarang Tawang.</p>\r\n\r\n<p>Kepala Humas PT KAI Daop 1 Jakarta, Eva Chairunisa&nbsp;mengatakan,&nbsp;layanan&nbsp;<a href=\"https://www.liputan6.com/tag/kereta-api\">kereta api</a>&nbsp;jarak jauh di Stasiun Jakarta Kota dibuka mulai hari ini, Selasa (1/9/2020) dengan pemberangkatan dua KA saja.</p>\r\n\r\n<p>&quot;Dua KA jarak jauh akan berangkat dari Stasiun Jakarta Kota yakni, KA Jayakarta tujuan Surabaya Gubeng dan KA Menoreh tujuan Semarang Tawang,&quot; kata Eva dalam keterangan pers, Selasa (1/9/2020).</p>\r\n\r\n<p>Dia menuturkan, saat kondisi normal Stasiun Jakarta Kota memberangkatkan tiga KA Jarak Jauh tujuan Jawa Tengah dan Jawa Timur. Tiga KA tersebut antara lain, KA Kutojaya Utara tujuan Kutoarjo, KA Jayakarta tujuan Surabaya, dan KA Menoreh tujuan Semarang.</p>\r\n\r\n<p>Eva juga menyatakan pemesanan kereta masih dilakukan melalui sistem&nbsp;<em>online</em>&nbsp;dan baru dapat dipesan paling cepat tujuh hari sebelum tanggal keberangkatan.</p>\r\n\r\n<p>&quot;Pemesanan&nbsp;<em>online</em>&nbsp;dapat dilakukan melalui aplikasi KAI Access, website kai.id, dan&nbsp;<em>channel</em>&nbsp;eksternal yang telah bekerja sama. Loket stasiun hanya melayani tiket&nbsp;<em>go show</em>&nbsp;yang melayani tiga jam sebelum jadwal keberangkatan KA,&quot; ucapnya.</p>\r\n\r\n<p>Dia mengimbau agar calon penumpang&nbsp;<a href=\"https://www.liputan6.com/bisnis/read/4344250/kai-tambah-perjalanan-kereta-mulai-september-2020\">kereta api</a>&nbsp;tetap melaksanakan protokol kesehatan yang telah ditetapkan, mulai menunjukkan hasil&nbsp;<em>rapid test</em>&nbsp;ataupun&nbsp;<em>swab test</em>&nbsp;hingga kondisi calon penumpang yang prima atau tidak sedang sakit.</p>\r\n\r\n<p>&quot;Menggunakan masker pribadi dan mengenakan pelindung wajah&nbsp;<em>(face shield)</em>&nbsp;yang disediakan oleh KAI. Penggunaan&nbsp;<em>face shield</em>&nbsp;dilakukan baik di stasiun dan selama perjalanan KA berlangsung,&quot; jelas Eva.</p>', '2020-09-01 14:44:49', '2020-09-01 14:44:49'),
(6, 'Tersangka Korupsi Bunuh Diri, Kejati Bali Tutup Kasus Tri Nugraha', 'tersangka-korupsi-bunuh-diri,-kejati-bali-tutup-kasus-tri-nugraha', 'Nila Chrisna Yulika', '1598971668.041614600_1494838431-3.webp', '<p><strong>Liputan6.com, Jakarta</strong>&nbsp;Kejaksaan Tinggi Bali akan menutup kasus yang melibatkan mantan Kepala BPN Denpasar dan mantan BPN Kabupaten Badung,&nbsp;<a href=\"https://www.liputan6.com/news/read/4344480/kronologi-dugaan-bunuh-diri-tersangka-korupsi-di-toilet-kejaksaan-tinggi-bali\">Tri Nurgaha</a>&nbsp;pasca meninggal karena bunuh diri di toilet Kantor Kejaksaan Tinggi Bali.</p>', '<p><strong>Liputan6.com, Jakarta</strong>&nbsp;Kejaksaan Tinggi Bali akan menutup kasus yang melibatkan mantan Kepala BPN Denpasar dan mantan BPN Kabupaten Badung,&nbsp;<a href=\"https://www.liputan6.com/news/read/4344480/kronologi-dugaan-bunuh-diri-tersangka-korupsi-di-toilet-kejaksaan-tinggi-bali\">Tri Nurgaha</a>&nbsp;pasca meninggal karena bunuh diri di toilet Kantor Kejaksaan Tinggi Bali.</p>\r\n\r\n<p>&quot;Dengan meninggalnya tersangka kasus kami tutup, menyangkut barang bukti ada aturan-aturan nanti yang akan kami tindak lanjuti,&quot; kata Wakil Kepala Kejaksaan Tinggi Bali, Asep Maryono, di Kantor Kejati Bali, Senin, 31 Agustus 2020 malam.</p>\r\n\r\n<p>Ia mengatakan bahwa selanjutnya akan memberitahukan kepada pihak keluarga dari tersangka Tri Nugraha. &quot;Yang penting sekarang ini kami memberitahukan keluarga,&quot; katanya seperti dikutip dari&nbsp;<em>Antara</em>.</p>\r\n\r\n<p>Sementara salah satu anggota Forum Komunikasi Putra Putri Purnawirawan dan Putra Putri TNI/POLRI (FKPPI), Didik Supriyadi mendatangi Kantor Kejati Bali sekitar pukul 21.40 wita.</p>\r\n\r\n<p>&quot;Jadi ini di Kejati Bali tanpa pemeriksaan dengan sekuritas yang jelas, yang tegas sampai terjadi seperti ini. Sangat disayangkan, diharapkan proses ke depan dapat jadi proses pembelajaran sangat amat untuk disikapi. Saya sangat menyesali kejadian ini dan harus dibuka terang benderang terkait apa yang terjadi terhadap&nbsp;<a href=\"https://www.liputan6.com/news/read/4344480/kronologi-dugaan-bunuh-diri-tersangka-korupsi-di-toilet-kejaksaan-tinggi-bali\">Tri Nugraha</a>,&quot; kata Didik.</p>\r\n\r\n<p>Ia mengatakan bahwa selanjutnya pihak keluarga akan melakukan tindakan dan melakukan pelaporan.</p>\r\n\r\n<p>&quot;Melihat nanti kejelasan terkait ini, (terkait siapa yang dilaporkan), sementara melaporkan tentang kenapa bisa terjadi sampai ada penembakan, tidak tahu terjadi atas diri sendiri atau orang lain. Proses pencarian siapa yang melakukan ini,&quot; kata Didik.</p>', '2020-09-01 14:47:48', '2020-09-01 14:47:48'),
(7, 'BPOM Sebut Indonesia Akan Dapat 10 Juta Vaksin Covid-19 dari Uni Emirat Arab', 'bpom-sebut-indonesia-akan-dapat-10-juta-vaksin-covid-19-dari-uni-emirat-arab', 'Delvira Hutabarat', '1598971730.034518700_1588652411-20200505-Penumpang-KRL-Antre-di-Stasiun-Bekasi-Jalani-Tes-Swab-HERMAN-7.webp', '<p>Petugas medis menata sampel penumpang KRL Commuter Line saat tes swab dengan metode polymerase chain reaction (PCR) di Stasiun Bekasi, Selasa, (5/5/2020). Pemkot Bekasi melakukan tes swab secara massal setelah tiga penumpang KRL dari Bogor terdeteksi virus corona. (Liputan6.com/Herman Zakharia)</p>', '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;Kepala Badan Pengawasan Obat dan Makanan (BPOM) Penny Lukito mengatakan, Indonesia melakukan dua jalur pengembangan vaksin Corona yang menyebabkan&nbsp;<a href=\"https://www.liputan6.com/news/read/4344983/update-corona-selasa-1-september-bertambah-2098-pasien-sembuh-covid-19-jadi-128057\">Covid-19</a>.</p>\r\n\r\n<p>Selain memproduksi sendiri, Indonesia bekerja sama dengan Uni Ermirat Arab untuk memperoleh vaksin penyakit dari Wuhan, China itu. Bahkan, dia mengungkap, Indonesia akan mendapatkan 10 juta vaksin dari kerja sama tersebut.</p>\r\n\r\n<p>&quot;Pada 21 Agustus sudah ada kesepakatan Menlu dan Menteri BUMN yang berkunjung ke Uni Emirat Arab, di mana Uni Emirat Arab berkomitmen menyediakan 10 juta dosis vaksin&nbsp;<a href=\"https://www.liputan6.com/tag/covid-19\" target=\"_blank\">Covid-19</a>&nbsp;untuk Indonesia melalui kerja sama G42 UEA dan Sinopharm dan Kimia Farma. Akhir 2020 diharapkan 10 juta vaksin,&quot; kata Penny dalam konferensi pers daring, Selasa (1/9/2020).</p>\r\n\r\n<p>Penny menyebut pihaknya juga sudah berkunjung ke Uni Emirat Arab untuk melihat langsung pelaksanaan uji klinis fase III vaksin Covid-19 di sana. Dia memastikan uji klinis berlangsung sangat baik.</p>\r\n\r\n<p>&quot;Kami melihat ujiklinik fase III sangat baik dan terorganisir. Melibatkan 1000 dokter. Kami melihat uji klinik dilakukan dengan validitas yang sangat terjaga,&quot; ucap Penny.</p>\r\n\r\n<p>Dia menyebut, vaksin&nbsp;<a href=\"https://www.liputan6.com/news/read/4344983/update-corona-selasa-1-september-bertambah-2098-pasien-sembuh-covid-19-jadi-128057\">Covid-19</a>&nbsp;Uni Emirat Arab telah mendapat sertifikat halal.</p>\r\n\r\n<p>&quot;Kandidat vaksin Sinopharm juga mendapat emergency use authorization dari regulator pengawas obat di Republik Rakyat Tiongkok dan pada Juli 2020 sudah dapat izin Penggunaan emergensi di national medication product administration berdasarkan uji klinis fase 1 dan 2 dan telah mendapatkan sertifikat halal,&quot; jelas Penny.</p>', '2020-09-01 14:48:50', '2020-09-01 14:48:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpd`
--

CREATE TABLE `bpd` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bpd`
--

INSERT INTO `bpd` (`id`, `cover`, `konten`, `created_at`, `updated_at`) VALUES
(1, '1598489005.medium_kades-kutorenon-masker.jpeg', '<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2><blockquote><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consequatur ea quo suscipit saepe similique nesciunt unde aspernatur quibusdam vero tempora id eaque culpa, repellat ex, praesentium voluptatem odio nihil</p></blockquote><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consequatur ea quo suscipit saepe similique nesciunt unde aspernatur quibusdam vero tempora id eaque culpa, repellat ex, praesentium voluptatem odio nihil? Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eaque cupiditate, delectus, atque fugit reprehenderit perspiciatis dignissimos labore eum illum dolor odit, totam adipisci rem quibusdam modi architecto accusamus error. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat a deserunt corrupti laudantium quas, repellendus nam sunt magni fuga amet illo, assumenda porro eum excepturi, neque repudiandae libero. Eligendi, nihil? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus deleniti omnis fugiat incidunt repellendus doloremque tenetur dolorem eligendi possimus sapiente laboriosam enim necessitatibus, vel quisquam saepe perferendis maiores expedita.</p><ol><li>Lorem ipsum</li><li>Quas consequatur</li><li>Lorem ipsum dolor, sit amet consectetur</li></ol>', '2020-08-25 17:00:00', '2020-08-27 00:43:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bumdes`
--

CREATE TABLE `bumdes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bumdes`
--

INSERT INTO `bumdes` (`id`, `nama`, `slug`, `ketua_unit`, `foto`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Jaya Mandiri', 'jaya-mandiri', 'Lebrons', '1598544518.kppd-00_sejarah-dan-jenis-kopi_sejarah-kopi_800x450_cc0-min.jpg', '<p>Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.</p>\r\n\r\n<p>Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.</p>\r\n\r\n<blockquote>\r\n<p>Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.</p>\r\n</blockquote>\r\n\r\n<p>Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat. Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque. Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.</p>\r\n\r\n<h3>Et quae iure vel ut odit alias.</h3>\r\n\r\n<p>Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-08-27 16:03:30', '2020-09-01 12:58:10'),
(2, 'Simpan Pinjam', 'simpan-pinjam', 'Dina', '1598544625.Koperasi nrc.png', '<p>Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.</p>', '2020-08-27 16:10:25', '2020-09-01 12:57:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembaga_desa`
--

CREATE TABLE `lembaga_desa` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lembaga_desa`
--

INSERT INTO `lembaga_desa` (`id`, `nama`, `slug`, `foto`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Karang Taruna', 'karang-taruna', '1598540927.kartar.jpg', '<p><strong>Karang Taruna</strong> adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa/ Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomi produktif dengan pendayagunaan semua potensi yang tersedia di lingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur pengurus dan masa jabatan di masing-masing wilayah mulai dari Desa/ Kelurahan sampai pada tingkat Nasional. Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.</p><p>Karang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai dari 11 - 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 - 35 tahun.</p><p>Karang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.</p>', '2020-08-27 15:00:35', '2020-08-27 15:09:07'),
(2, 'PKK', 'pkk', '1598541101.pkk.jpg', '<p><strong>Pemberdayaan Kesejahteraan Keluarga</strong>, disingkat <strong>PKK</strong>, adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan <a href=\"https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a>. PKK terkenal akan \"10 program pokok\"-nya.</p><p>10 Program Pokok PKK pada hakikatnya merupakan kebutuhan dasar manusia, yaitu:</p><ol><li>Penghayatan dan Pengamalan Pancasila</li><li>Gotong Royong</li><li>Pangan</li><li>Sandang</li><li>Perumahan dan Tatalaksana Rumah Tangga</li><li>Pendidikan dan Keterampilan</li><li>Kesehatan</li><li>Pengembangan Kehidupan Berkoperasi</li><li>Kelestarian Lingkungan Hidup</li><li>Perencanaan Sehat</li></ol><p>Pemberdayaan Kesejahteraan Keluarga (PKK) sebagai gerakan pembangunan masyarakat bermula dari seminar <i>Home Economic</i> di <a href=\"https://id.wikipedia.org/wiki/Bogor\">Bogor</a> tahun 1957. Sebagai tindak lanjut dari seminar tersebut, pada tahun 1961 panitia penyusunan tata susunan pelajaran pada Pendidikan Kesejahteraan Keluarga (PKK), Kementerian Pendidikan bersama kementerian-kementerian lainnya menyusun 10 segi kehidupan keluarga. Gerakan PKK dimasyarakatkan berawal dari kepedulian istri gubernur <a href=\"https://id.wikipedia.org/wiki/Jawa_Tengah\">Jawa Tengah</a> pada tahun 1967 (Ibu Isriati Moenadi) setelah melihat keadaan masyarakat yang menderita busung lapar.</p><p>Upaya untuk meningkatkan kesejahteraan keluarga melalui 10 segi pokok keluarga dengan membentuk Tim Penggerak PKK di semua tingkatan, yang keanggotaan timnya secara relawan dan terdiri dari tokoh/pemuka masyarakat, para isteri kepala dinas/jawatan dan isteri kepala daerah s.d tingkat desa dan kelurahan yang kegiatannya didukung dengan anggaran pendapatan dan belanja daerah.</p><p>Pada tanggal 27 Desember 1972 mendagri mengeluarkan surat kawat no. Sus 3/6/12 kepada seluruh gubernur kdh tk. I Jawa Tengah dengan tembusan gubernur kdh seluruh Indonesia, agar mengubah nama pendidikan kesejahteraan keluarga menjadi pembinaan kesejahteraan keluarga. Sejak itu gerakan PKK dilaksanakan di seluruh Indonesia dengan nama Pembinaan Kesejahteraan Keluarga (PKK), dan tanggal 27 Desember ditetapkan sebagai \"hari kesatuan gerak PKK\" yang diperingati pada setiap tahun.</p><p>Dalam era reformasi dan ditetapkannya TAP MPR no. IV/MPR/1999 tentang GBHN 1999-2004, serta pelaksanaan otonomi daerah berdasarkan undang-undang no.22 tahun 1999 dan undang-undang no.25 tahun 1999, tetapi PKK pusat tanggap dengan mengadakan penyesuaian-penyesuaian yang disepakati dalam rakernaslub PKK tanggal 31 Oktober s.d 2 November 2000 di Bandung dan hasilnya merupakan dasar dalam perumusan keputusan menteri dalam negeri dan otonomi daerah no. 53 tahun 2000, yang selanjutnya dijabarkan dalam pedoman umum gerakan Pemberdayaan dan Kesejahteraan Keluarga (PKK) ini.</p><p>Hal yang mendasar antara lain adalah perubahan nama gerakan PKK dari gerakan Pembinaan Kesejahteraan Keluarga menjadi gerakan Pemberdayaan dan Kesejahteraan Keluarga.</p>', '2020-08-27 15:11:41', '2020-08-27 15:11:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_08_26_144344_create_sejarah_desa_table', 2),
(6, '2020_08_26_230522_create_profil_desa_table', 3),
(8, '2020_08_27_062703_create_visi_misi_table', 4),
(9, '2020_08_27_070052_create_pemerintah_desa_table', 5),
(10, '2020_08_27_071640_create_bpd_table', 6),
(12, '2020_08_27_211405_create_lembaga_desa_table', 7),
(13, '2020_08_27_223746_create_bumdes_table', 8),
(14, '2020_08_29_143936_create_berita_table', 9),
(15, '2020_08_29_220336_create_pengumuman_table', 10),
(16, '2020_08_30_103944_create_sambutan_kades_table', 11),
(19, '2020_09_01_225050_create_pengaduan_table', 12),
(21, '2020_09_03_104229_create_susunan_redaksi_table', 13),
(22, '2020_09_03_112212_create_suara_redaksi_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemerintah_desa`
--

CREATE TABLE `pemerintah_desa` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemerintah_desa`
--

INSERT INTO `pemerintah_desa` (`id`, `cover`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'pemerintah-desa.jpeg', '<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, delectus alias? Inventore quibusdam voluptatibus, omnis reiciendis, earum beatae laborum sit sunt reprehenderit delectus doloremque quos repellendus cum, incidunt sapiente natus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae tenetur enim vero, modi unde voluptates assumenda nobis qui, molestiae, quod quam quibusdam facilis totam quaerat quisquam. Incidunt perferendis totam error! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus quae aut quas laudantium fugit molestias aspernatur nobis, delectus maiores quia nihil cumque architecto non consequatur accusantium perferendis pariatur. Ut!</p><h3>Inventore quibusdam voluptatibus</h3><p>Vitae tenetur enim vero, modi unde voluptates assumenda nobis qui, molestiae, quod quam quibusdam facilis totam quaerat quisquam. Incidunt perferendis totam error! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus quae aut quas laudantium fugit molestias aspernatur nobis, delectus maiores quia nihil cumque architecto non consequatur accusantium perferendis pariatur. Ut!</p>', '2020-08-25 17:00:00', '2020-08-27 00:10:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `email`, `keluhan`, `created_at`, `updated_at`) VALUES
(1, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:18:24', '2020-09-01 16:18:24'),
(2, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:18:43', '2020-09-01 16:18:43'),
(3, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:19:55', '2020-09-01 16:19:55'),
(4, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:20:20', '2020-09-01 16:20:20'),
(5, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:20:48', '2020-09-01 16:20:48'),
(6, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:22:04', '2020-09-01 16:22:04'),
(7, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:27:21', '2020-09-01 16:27:21'),
(8, 'Inant Kharisma', 'inant.kharisma@gmail.com', 'The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.The view from the lighthouse excited even the most seasoned traveler.', '2020-09-01 16:28:01', '2020-09-01 16:28:01'),
(9, 'Sayadi', 'sayadi@gmail.com', 'You can\'t compare apples and oranges, but what about bananas and plantains?', '2020-09-01 16:52:39', '2020-09-01 16:52:39'),
(10, 'saheri', 'saheri@mail.com', 'He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.', '2020-09-01 16:54:38', '2020-09-01 16:54:38'),
(11, 'salman', 'salman@mail.com', 'He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.', '2020-09-01 16:55:53', '2020-09-01 16:55:53'),
(12, 'Abdul Wahed', 'wahed@gmail.com', 'He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.He wasn\'t bitter that she had moved on but from the radish.', '2020-09-02 03:16:16', '2020-09-02 03:16:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `slug`, `penulis`, `foto`, `ulasan_singkat`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Hasil Seleksi Perangkat Desa di TTS Tinggal Pengumumans', 'hasil-seleksi-perangkat-desa-di-tts-tinggal-pengumumans', 'Redaksis', '1598756972.pilkades-kutorenon.jpeg', '<p><strong>NUSADAILY.COM &ndash; SOE &ndash;</strong>&nbsp;Seleksi Perangkat Desa di Kabupaten Timor Tengah Selatan (TTS) Provinsi Nusa Tenggara Timur (<a href=\"http://provinsi%20ntt/\">NTT</a>) berlanjut. Seleksi itu kini masuk tahap pengumuman hasil serentak untuk 32 Kecamatan di Kabupaten TTS.</p>\r\n\r\n<p>Hal ini diungkapkan Kepala Dinas&nbsp; Pemberdayaan Masyarakat Desa (PMD) Kabupaten TTS, Minggus Mella kepada&nbsp;<a href=\"http://nusadaily.com/\">Nusadaily.com,&nbsp;</a>Jumat 24 Juli 2020.</p>', '<p>Dia mengatakan, hari ini hasil seleksi perangkat desa telah diserahkan ke seluruh Kecamatan dan desa. Selanjutnya, hasil itu segera diumumkan pihak desa. Kecamatan masing-masing bertugas menyerahkan ke desa.&nbsp;</p>\r\n\r\n<p>Ia menargetkan,&nbsp; Senin, 27 Juli 2020, seleksi perangkat desa akan diumumkan secara serentak.</p>\r\n\r\n<p>Sementara itu Sekertaris Komisi I DPRD TTS Lusianus Tusalakh di kantornya mengapresiasi Pemerintah Daerah atas seleksi perangkat desa. Selanjutnya dia meminta hasil seleksi harus segera diumumukan.</p>\r\n\r\n<p>Dia juga mengatakan, setelah pengumuman, perangkat desa&nbsp; harus dilantik. Sehingga Agustus, perangkat desa baru mulai bekerja karena perubahan APBDesa untuk tunjungan perangkat lama hanya sampai Juli.</p>\r\n\r\n<p>Sementara Camat Amanuban Selatan&nbsp;Jhon Asbanu mengaku, hasil seleksi perangkat desa sudah diterima dari PMD. &ldquo;Kami segera menindahlanjuti ke desa-desa,&rdquo; katanya.</p>', '2020-08-30 03:09:32', '2020-08-30 03:13:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil_desa`
--

INSERT INTO `profil_desa` (`id`, `cover`, `profil`, `created_at`, `updated_at`) VALUES
(1, '1598483671.balai-minak-koncar-malam-min.jpeg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta est repellendus maxime ipsum. Cumque porro deserunt laboriosam inventore earum vero. Magnam nemo nulla cupiditate debitis magni optio doloribus repellat ea. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, asperiores veritatis. Consequatur quidem incidunt, ducimus sunt iste, saepe ut libero qui unde, fugiat ad. Earum ad quaerat eligendi iusto aperiam! Lorem ipsum dolor, sit amet consectetur adipisicing elit.&nbsp;</p>\r\n\r\n<p>Expedita deleniti modi sunt dolores consequatur similique impedit adipisci temporibus cupiditate eligendi dolor sequi, ipsum in reprehenderit repudiandae veritatis minima nisi at!</p>\r\n\r\n<ol>\r\n	<li>Expedita deleniti</li>\r\n	<li>Lorem ipsum dolor</li>\r\n	<li>Soluta est repellendus maxime ipsum</li>\r\n	<li>Cumque porro deserunt laboriosam inventore earum vero</li>\r\n</ol>', '2020-08-26 17:00:00', '2020-08-31 14:35:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan_kades`
--

CREATE TABLE `sambutan_kades` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nama_kades` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kades` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sambutan_kades`
--

INSERT INTO `sambutan_kades` (`id`, `nama_kades`, `foto_kades`, `sambutan`, `created_at`, `updated_at`) VALUES
(1, 'H. Faisal Rizal', '1599016216.IMG-20200620-WA0031.jpg', '<p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n\r\n<blockquote>\r\n<p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n</blockquote>\r\n\r\n<p>Selamat datang di Desa Kutorenon</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-08-30 14:00:00', '2020-09-02 03:10:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah_desa`
--

CREATE TABLE `sejarah_desa` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarah_desa`
--

INSERT INTO `sejarah_desa` (`id`, `cover`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, '1598483720.balai-minak-koncar-min.jpeg', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, blanditiis cupiditate perferendis velit, soluta distinctio suscipit illum facilis repellat dolore corrupti libero ab numquam aperiam, laborum culpa. Illo, reprehenderit commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quibusdam incidunt id modi ad facere doloribus velit ducimus blanditiis adipisci. Eum debitis inventore quis enim necessitatibus at assumenda mollitia sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nam est pariatur, dolor voluptatibus repudiandae facilis nemo, consectetur reiciendis id itaque vero minima quasi veritatis nulla amet blanditiis sequi ut!</p>', '2020-08-19 17:00:00', '2020-08-31 14:34:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara_redaksi`
--

CREATE TABLE `suara_redaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suara_redaksi`
--

INSERT INTO `suara_redaksi` (`id`, `judul`, `slug`, `penulis`, `foto`, `ulasan_singkat`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Sarana Informasi Komunikasi', 'sarana-informasi-komunikasi', 'Syamsudin Nabilah', '1599108796.suara-redaksi1.jpeg', '<p>&quot;Siapa yang menguasai informasi teknologi dialah yang akan menguasai dunia&quot;. Inilah kalimat yang sering kita baca dan dengar, beberapa tahun yang silam. Kini hampir semua terbukti ...</p>', '<blockquote>\r\n<p>&quot;Siapa yang menguasai informasi teknologi dialah yang akan menguasai dunia&quot;.</p>\r\n</blockquote>\r\n\r\n<p>Inilah kalimat yang sering kita baca dan dengar, beberapa tahun yang silam. Kini hampir semua terbukti. &nbsp;Dunia seperti dalam genggaman. Informasi apapun, mulai hal yang kecil hingga yang besar, mulai hal yang tidak penting hingga terpenting, mulai dari hal-hal guyonan &nbsp;hingga yang serius ini bisa dilihat/ didengar hanya dengan menggunakan gadget. Semua dalam genggaman. Maka benar bahwa informasi menyangkut apapun bisa disaksikan tanpa kemana-mana alias melalui gadget, barang kecil yang bisa digenggam.</p>\r\n\r\n<p>Kini semua berlomba-lomba&nbsp;memanfaatkan teknologi informasi dengan gaya dan model sendiri sesuai keinginan mereka. Ada yang manfaat memanfaatkan sebagai peluang bisnis, ada pula yang sekedar sarana guyonan menghilangkan stres Ada pula yang digunakan untuk menyampaikan informasi penting menyangkut sebuah lembaga, komunitas, institusi pemerintahan.</p>\r\n\r\n<p>Desa Kutorenon, yang merupakan bagian dari instansi pemerintahan di tingkat desa, tentu tidak ingin ketinggalan untuk menyampaikan informasi-informasi penting menyangkut pelayanan publik dan informasi terkini mengenai Kabupaten Lumajang. Oleh karena, maka dipandang perlu untuk mendirikan sebuah sarana informasi dan komunikasi, website. Namanya Kutorenon.com. Website ini berisi informasi seluruh kegiatan desa yang dianggap memiliki news value (nilai berita) dan bisa dikaver. Nama website nya memang sengaja menggunakan nama desa ini, Kutorenon. Disamping simple, kita ingin membumikan nama Kutorenon. Bahwa dulu, dalam sejarahnya, pusat kota Raja Lamajang Tigang Juru (atau yang lebih dikenal dengan sebutan Majapahit Timur) ada di Desa Kutorenon. Dengan nama itu, ingatan kita yang mulai hilang tentang pusat Kota Raja ini, akan teringat kembali. Itu yang kedua.</p>\r\n\r\n<p>Yang ketiga, jajaran redaksi dan perangkat desa yang terlibat dalam pengelolaan website ini ingin Kutorenon tidak sekedar nama tanpa menghasilkan karya. Maka ketika pilihan nama Kutorenon melekat, maka ada tanggung moral pengelola dan stakeholder di pemerintahan desa agar desa ini terangkat, lebih maju, dan menjadi sentral informasi desa dan kabupaten (pusat kota informasi, bukan pusat/ kota Raja).</p>\r\n\r\n<p>Akhiron, kedepan mimpi kita, website Kutorenon.com ini tidak hanya menjadi lumbung informasi lokal (ruang lingkup Desa Kutorenon) tapi juga ruang lingkup Kabupaten Lumajang dan nasional. Kata pepatah JANGAN SEPERTI KATAK DALAM TEMPURUNG. Semoga kehadiran Kutorenon.com menjadi bagian dari perubahan ke arah yang lebih baik. Saran dan kritik (pecutan) tentu menjadi lecutan dan jamu agar website ini sempurna dan bermanfaat bagi semua. Semoga...</p>\r\n\r\n<p><strong>Salam Redaksi</strong></p>', '2020-09-03 04:53:16', '2020-09-03 04:55:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `susunan_redaksi`
--

CREATE TABLE `susunan_redaksi` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `susunan_redaksi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `susunan_redaksi`
--

INSERT INTO `susunan_redaksi` (`id`, `susunan_redaksi`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Pelindung :</strong> H. Faisal Rizal</p>\r\n\r\n<p><strong>Pemred :</strong> Syamsudin Nabilah</p>\r\n\r\n<p><strong>Sekretaris Redaksi :</strong> Dillah</p>\r\n\r\n<p><strong>Koordinator Liputan </strong>: Kang Roy</p>\r\n\r\n<p><strong>Reporter :</strong> Oktavia</p>\r\n\r\n<p><strong>Bidang IT :</strong> Inant Kharisma</p>\r\n\r\n<p><strong>Cameraman :</strong> Dhimas</p>\r\n\r\n<p><strong>Alamat Redaksi :</strong>....</p>\r\n\r\n<p><strong>Email :</strong></p>\r\n\r\n<p><strong>FB :</strong></p>\r\n\r\n<p><strong>Twitter :</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -13px; top: 258px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '2020-09-02 17:00:00', '2020-09-03 04:16:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', 'administrator@mail.com', '$2y$10$nhdt2q2G1GZyWzj6ATniquon/Pch71prGRe4ftyk8u93J.cGbi1TG', NULL, '2020-08-24 23:49:34', '2020-08-25 14:04:43'),
(2, 'Inant Kharisma', 'inant', 'inant.kharisma@gmail.com', '$2y$10$h9D8ph6r473u8eeMlWRr3.RvflNxeGgTGgIsZIAoYAyyX4cQmz2rm', NULL, '2020-08-25 14:01:03', '2020-08-25 14:02:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `cover`, `visi_misi`, `created_at`, `updated_at`) VALUES
(1, '1598486061.pilkades-kutorenon.jpeg', '<p>Quod delectus neque odio, itaque culpa dolore ea dicta perspiciatis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi molestias exercitationem voluptatibus. Voluptatibus ducimus molestiae qui atque error voluptates nulla maiores quisquam assumenda? Sit repudiandae molestiae veniam amet, dolorem magni.</p>\r\n\r\n<h2><strong>Visi</strong></h2>\r\n\r\n<blockquote>\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eum vero iste doloremque nisi error. Repellat error nemo, natus nihil est, voluptatibus voluptate eius, nisi doloribus esse corrupti molestiae consectetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim accusamus atque dicta, commodi at nihil impedit modi tempore nostrum in.&nbsp;</strong></p>\r\n</blockquote>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<ol>\r\n	<li>Quod delectus neque odio</li>\r\n	<li>Itaque culpa dolore ea dicta perspiciatis</li>\r\n	<li>Lorem ipsum dolor</li>\r\n	<li>Nisi molestias exercitationem</li>\r\n</ol>\r\n\r\n<p>Quod delectus neque odio, itaque culpa dolore ea dicta perspiciatis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi molestias exercitationem voluptatibus. Voluptatibus ducimus molestiae qui atque error voluptates nulla maiores quisquam assumenda? Sit repudiandae molestiae veniam amet, dolorem magni?</p>', NULL, '2020-09-01 07:30:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bumdes`
--
ALTER TABLE `bumdes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lembaga_desa`
--
ALTER TABLE `lembaga_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sambutan_kades`
--
ALTER TABLE `sambutan_kades`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah_desa`
--
ALTER TABLE `sejarah_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suara_redaksi`
--
ALTER TABLE `suara_redaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `susunan_redaksi`
--
ALTER TABLE `susunan_redaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bpd`
--
ALTER TABLE `bpd`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bumdes`
--
ALTER TABLE `bumdes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lembaga_desa`
--
ALTER TABLE `lembaga_desa`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sambutan_kades`
--
ALTER TABLE `sambutan_kades`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sejarah_desa`
--
ALTER TABLE `sejarah_desa`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `suara_redaksi`
--
ALTER TABLE `suara_redaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `susunan_redaksi`
--
ALTER TABLE `susunan_redaksi`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
