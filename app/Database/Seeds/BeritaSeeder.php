<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BeritaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'judul'		=> 'Profil Desa Plandi',
				'tanggal'	=> '2021-09-09',
				'berita'		=> 'Asal-usul Desa Plandi berawal dari beberapa kelompok orang membuka hutan belantara yang terdapat di lereng Gunung Kawi, yang diketuai oleh sepasang suami istri pada tahun 1857. Dahulu Hutan belantara yang sekarang menjadi desa Kluwut kec.Wonosari, dibuka oleh Sang suami dari pasangan istri tersebut yaitu Mbah Suprono. Sedangkan dalam sejarahnya, Desa Plandi Kec.Wonosari sendiri, hutan belantaranya dibuka oleh Sang istri yang terkenal dengan sebutan Mbah Gedembo. Mbah Gedembo sendiri dikenal sebagai seorang putri yang cantik rupawan dan tekun beribadah (santri).  Dahulu pada saat membuka hutan belantara (babat alas), beliau menemukan sebuah goa.  Saat itu pada pintu goa ditutupi oleh laba-laba (Kemlandingan). Dan pada saat itulah Mbah Gedembo menyebut nama desa tersebut Plandingan atau yang sekarang disebut dengan Desa Plandi.

				Desa Plandi terletak pada kecamatan Wonosari, Kabupaten Malang. Desa ini terletak pada kaki gunung Kawi. Didalam desa Plandi terdapat empat dusun, yaitu Dusun Plandi, Dusun Pandan Ploso, Dusun Selobekiti, dan Dusun Tambak Rejo. Desa Plandi juga berbatasan dengan desa-desa lainnya, diantaranya adalah di sebelah utara terdapat Desa Plaosan, di sebelah Barat terdapat Desa Kluwut, disebelah selatan terdapat Desa Ngadirejo, dan disebelah Timur terdapat Desa Ngajum. Secara geografis Desa Plandi terletak pada posisi 080 – 05.673’ dan Bujur Timur 1120 – 27.751’. Desa Plandi memiliki topografi ketinggian desa yaitu daratan sedang 720 m/DPL diatas permukaan air laut.

				Secara umum wilayah Desa Plandi memiliki ciri geologis berupa tanah yang sangat subur dan cocok sebagai lahan pertanian serta perkebunan. Beberapa tanaman palawija seperti kedelai, kacang tanah, jagung, ubi-ubian, serta tanaman buah seperti mangga, pepaya, pisang mampu menjadi pemasukan (income) yang cukup bagi penduduk desa. Tanaman kopi dan coklat menjadi tanaman andalan di Desa Plandi. Kondisi alam yang demikian, dapat menjadikan sektor pertanian sebagai penopang ekonomi masyarakat Desa Plandi.
				',
				'kategori'		=> 'desa',
				'foto'			=> '1_Profil Desa Plandi.jpg'
			], 
			[
				'judul'		=> 'Keripik Singkong "ARDIDO',
				'tanggal'	=> '2021-09-14',
				'berita'		=> 'Keripik Singkong Merupakan Makanan Ringan Khas Dari desa Plandi Kecamatan Wonosari Kabupaten Malang Tepatnya banyak di produksi di daerah dusun Selobekiti. Salah Satunya Adalah Keripik Singkong “ARDIDO”. Pemilik dari Keripik singkong Merek Ini adalah Ibu Siti Kholifah. Bahan Dari Keripik Singkong Ini Adalah 100% Dari Singkong Asli Pilihan Dengan Tambahan Garam Dan Gula. Kemudian Keripik Singkong Ini Terdiri Dari berbagai Macam Varian Rasa Mulai Dari Original, Pedas, dan Manis. Usaha Keripik Ini merupakan Produksi Rumahan Dengan Setiap Hari Produksi Mencapai 2 Kuintal Keripik Singkong. Untuk Pembelian Keripik Ini dijual Dengan Berbagai Kemasan Ukuran Baik Ons Maupun Kg Sedangkan Untuk Pemesanan Acara Hajatan Bisa Dengan Harga Grosir.				
				',
				'kategori'		=> 'umkm',
				'foto' 			=> '2_ardido.jpg'
			], 
			[
				'judul'		=> 'Anyaman Irig Dusun Selobekiti',
				'tanggal'	=> '2021-09-14',
				'berita'		=> 'Dari banyaknya UMKM yang ada di Desa Plandi, salah satu UMKM yang cukup terkenal yaitu Kerajinan Anyaman. Tepatnya di Dusun Selobekiti, terdapat Kerajinan Anyaman Irig milik Ibu Sri Wahyuning. Kerajinan yang terbuat dari anyaman bambu ini berfungsi sebagai peralatan rumah tangga yaitu untuk meniriskan makanan. Anyaman Irig ini merupakan hasil produksi pribadi yang setiap harinya kurang lebih dapat menghasilkan 20 - 25 buah Anyaman Irig. Untuk saat ini Anyaman Irig biasa dipasarkan oleh Ibu Sri Wahyuning di pasar dan kedepannya diharapkan bisa lebih dikenal masyarakat luas serta dapat dijual online. 
				',
				'kategori'		=> 'umkm',
				'foto' 			=> '3_anyaman.jpg'
			], 
			[
				'judul'		=> 'Digital Marketing',
				'tanggal'	=> '2021-09-14',
				'berita'		=> 'Apa itu digital marketing? Pengertian digital marketing adalah suatu strategi pemasaran menggunakan media digital dan internet. Konsep dan penerapan digital marketing adalah hal yang dilakukan untuk mendongkrak penjualan produk dari suatu brand. Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara cepat. Seperti yang kita tahu, penerimaan teknologi dan internet di masyarakat sangat luas sehingga tidak heran kegiatan pemasaran secara digital dijadikan pilihan utama oleh perusahaan-perusahaan. Akibatnya, perusahaan saling berkompetisi membuat konten yang menarik untuk ditampilkan dalam pemasarannya di dunia maya.
				',
				'kategori'		=> 'umkm',
				'foto' 			=> '4_digital.png'
			]
		];
		$this->db->table('berita')->insertBatch($data);
	}
}
