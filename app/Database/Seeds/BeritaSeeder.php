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
				'tanggal'	=> date("Y-m-d"),
				'berita'		=> 'Asal-usul Desa Plandi berawal dari beberapa kelompok orang membuka hutan belantara yang terdapat di lereng Gunung Kawi, yang diketuai oleh sepasang suami istri pada tahun 1857. Dahulu Hutan belantara yang sekarang menjadi desa Kluwut kec.Wonosari, dibuka oleh Sang suami dari pasangan istri tersebut yaitu Mbah Suprono. Sedangkan dalam sejarahnya, Desa Plandi Kec.Wonosari sendiri, hutan belantaranya dibuka oleh Sang istri yang terkenal dengan sebutan Mbah Gedembo. Mbah Gedembo sendiri dikenal sebagai seorang putri yang cantik rupawan dan tekun beribadah (santri).  Dahulu pada saat membuka hutan belantara (babat alas), beliau menemukan sebuah goa.  Saat itu pada pintu goa ditutupi oleh laba-laba (Kemlandingan). Dan pada saat itulah Mbah Gedembo menyebut nama desa tersebut Plandingan atau yang sekarang disebut dengan Desa Plandi.

				Desa Plandi terletak pada kecamatan Wonosari, Kabupaten Malang. Desa ini terletak pada kaki gunung Kawi. Didalam desa Plandi terdapat empat dusun, yaitu Dusun Plandi, Dusun Pandan Ploso, Dusun Selobekiti, dan Dusun Tambak Rejo. Desa Plandi juga berbatasan dengan desa-desa lainnya, diantaranya adalah di sebelah utara terdapat Desa Plaosan, di sebelah Barat terdapat Desa Kluwut, disebelah selatan terdapat Desa Ngadirejo, dan disebelah Timur terdapat Desa Ngajum. Secara geografis Desa Plandi terletak pada posisi 080 – 05.673’ dan Bujur Timur 1120 – 27.751’. Desa Plandi memiliki topografi ketinggian desa yaitu daratan sedang 720 m/DPL diatas permukaan air laut.

				Secara umum wilayah Desa Plandi memiliki ciri geologis berupa tanah yang sangat subur dan cocok sebagai lahan pertanian serta perkebunan. Beberapa tanaman palawija seperti kedelai, kacang tanah, jagung, ubi-ubian, serta tanaman buah seperti mangga, pepaya, pisang mampu menjadi pemasukan (income) yang cukup bagi penduduk desa. Tanaman kopi dan coklat menjadi tanaman andalan di Desa Plandi. Kondisi alam yang demikian, dapat menjadikan sektor pertanian sebagai penopang ekonomi masyarakat Desa Plandi.
				',
				'kategori'		=> 'desa',
				'foto'			=> '1_Profil Desa Plandi.jpg'
			], 
			[
				'judul'		=> 'Perkenalan Terhadap Desa Plandi',
				'tanggal'	=> date("Y-m-d"),
				'berita'		=> '
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis, ipsum sit amet cursus congue, enim nunc aliquam leo, non tincidunt ex lectus sit amet dui. Proin aliquet consequat neque in consectetur. Fusce sagittis nisl mauris. Sed viverra leo id nibh dapibus, at viverra tellus pellentesque. Aenean viverra sapien vitae massa faucibus, at molestie nisl dapibus. Mauris in orci quam. Morbi lobortis leo nec ligula dignissim, sed fermentum diam gravida. Curabitur sit amet elit lacus. Pellentesque ac urna in est viverra volutpat. Duis tristique tortor turpis, vel vehicula tellus scelerisque non. Donec nunc purus, vehicula ac eros in, tristique dictum sapien. Curabitur ac ante sed neque gravida venenatis elementum suscipit tortor.
				
				Mauris vitae varius neque, at ultrices velit. Morbi nisl tortor, consectetur vitae ultricies in, consequat sit amet magna. Praesent condimentum consequat dignissim. Phasellus placerat consectetur fringilla. Donec sit amet nibh tincidunt, accumsan sapien quis, blandit sem. Duis fringilla, urna suscipit semper lobortis, ligula ligula posuere ipsum, rutrum dictum diam magna eget lorem. Nulla eu justo aliquet, vehicula lectus eget, ultricies libero. Pellentesque tristique arcu ornare, rutrum nisi sodales, mattis nisi. Aenean interdum, velit bibendum tempor auctor, justo dolor dictum urna, eget imperdiet lacus ligula vitae tortor. Suspendisse in tellus pulvinar, pretium nunc et, ullamcorper neque. Ut suscipit justo ac nunc aliquam vulputate.
				
				Nam fringilla dapibus convallis. Quisque in quam laoreet, euismod risus sed, commodo nulla. Duis pretium eleifend augue, quis feugiat mauris pellentesque vel. Vestibulum in dolor nisl. Nulla lacus diam, iaculis sed suscipit vel, euismod in odio. Integer tristique, est ac aliquet ornare, orci massa dapibus ipsum, vitae vestibulum augue justo ut turpis. Sed sit amet turpis ac diam sagittis ultrices. Proin maximus, enim id condimentum varius, tortor risus commodo lorem, ac condimentum massa ex non urna.
				
				Cras pharetra nibh id fringilla congue. In aliquet orci nec bibendum hendrerit. Donec pellentesque arcu a nisi fermentum, vel hendrerit sapien interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse at ipsum non nibh aliquet imperdiet. Pellentesque vel viverra ex. Vestibulum pharetra hendrerit efficitur. Mauris fermentum eros ac molestie pharetra. In diam diam, interdum eu semper eget, ultrices nec mi. Proin fermentum molestie elementum. Nunc felis lacus, convallis nec vulputate ac, vehicula vitae quam. Mauris mattis maximus purus, nec iaculis risus semper et. Quisque laoreet ipsum accumsan nunc euismod pharetra. Maecenas commodo ultrices nibh, et rutrum nulla efficitur eu.
				
				Nulla egestas est turpis, ac molestie nisl feugiat in. Aliquam suscipit tempor massa, sit amet interdum metus aliquet a. Vestibulum et sem ac libero consectetur consequat at ut turpis. Nam sed felis posuere, consequat felis non, posuere erat. Donec eu nisi lacus. Mauris porta purus id porttitor cursus. Vestibulum pellentesque gravida neque vitae semper. Integer aliquet velit augue, eget tempus risus imperdiet a. Nunc dapibus id nisi vel porttitor. Proin vel enim eleifend nisi pulvinar porttitor. Ut condimentum semper mollis. Vestibulum faucibus tincidunt posuere. Aliquam tincidunt aliquam nisi sed venenatis. In pharetra sit amet lectus vitae aliquet.
				
				',
				'kategori'		=> 'desa',
				'foto' 			=> 'default.jpeg'
			], 
			[
				'judul'		=> 'Perkenalan Terhadap Desa Plandi',
				'tanggal'	=> date("Y-m-d"),
				'berita'		=> '
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis, ipsum sit amet cursus congue, enim nunc aliquam leo, non tincidunt ex lectus sit amet dui. Proin aliquet consequat neque in consectetur. Fusce sagittis nisl mauris. Sed viverra leo id nibh dapibus, at viverra tellus pellentesque. Aenean viverra sapien vitae massa faucibus, at molestie nisl dapibus. Mauris in orci quam. Morbi lobortis leo nec ligula dignissim, sed fermentum diam gravida. Curabitur sit amet elit lacus. Pellentesque ac urna in est viverra volutpat. Duis tristique tortor turpis, vel vehicula tellus scelerisque non. Donec nunc purus, vehicula ac eros in, tristique dictum sapien. Curabitur ac ante sed neque gravida venenatis elementum suscipit tortor.
				
				Mauris vitae varius neque, at ultrices velit. Morbi nisl tortor, consectetur vitae ultricies in, consequat sit amet magna. Praesent condimentum consequat dignissim. Phasellus placerat consectetur fringilla. Donec sit amet nibh tincidunt, accumsan sapien quis, blandit sem. Duis fringilla, urna suscipit semper lobortis, ligula ligula posuere ipsum, rutrum dictum diam magna eget lorem. Nulla eu justo aliquet, vehicula lectus eget, ultricies libero. Pellentesque tristique arcu ornare, rutrum nisi sodales, mattis nisi. Aenean interdum, velit bibendum tempor auctor, justo dolor dictum urna, eget imperdiet lacus ligula vitae tortor. Suspendisse in tellus pulvinar, pretium nunc et, ullamcorper neque. Ut suscipit justo ac nunc aliquam vulputate.
				
				Nam fringilla dapibus convallis. Quisque in quam laoreet, euismod risus sed, commodo nulla. Duis pretium eleifend augue, quis feugiat mauris pellentesque vel. Vestibulum in dolor nisl. Nulla lacus diam, iaculis sed suscipit vel, euismod in odio. Integer tristique, est ac aliquet ornare, orci massa dapibus ipsum, vitae vestibulum augue justo ut turpis. Sed sit amet turpis ac diam sagittis ultrices. Proin maximus, enim id condimentum varius, tortor risus commodo lorem, ac condimentum massa ex non urna.
				
				Cras pharetra nibh id fringilla congue. In aliquet orci nec bibendum hendrerit. Donec pellentesque arcu a nisi fermentum, vel hendrerit sapien interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse at ipsum non nibh aliquet imperdiet. Pellentesque vel viverra ex. Vestibulum pharetra hendrerit efficitur. Mauris fermentum eros ac molestie pharetra. In diam diam, interdum eu semper eget, ultrices nec mi. Proin fermentum molestie elementum. Nunc felis lacus, convallis nec vulputate ac, vehicula vitae quam. Mauris mattis maximus purus, nec iaculis risus semper et. Quisque laoreet ipsum accumsan nunc euismod pharetra. Maecenas commodo ultrices nibh, et rutrum nulla efficitur eu.
				
				Nulla egestas est turpis, ac molestie nisl feugiat in. Aliquam suscipit tempor massa, sit amet interdum metus aliquet a. Vestibulum et sem ac libero consectetur consequat at ut turpis. Nam sed felis posuere, consequat felis non, posuere erat. Donec eu nisi lacus. Mauris porta purus id porttitor cursus. Vestibulum pellentesque gravida neque vitae semper. Integer aliquet velit augue, eget tempus risus imperdiet a. Nunc dapibus id nisi vel porttitor. Proin vel enim eleifend nisi pulvinar porttitor. Ut condimentum semper mollis. Vestibulum faucibus tincidunt posuere. Aliquam tincidunt aliquam nisi sed venenatis. In pharetra sit amet lectus vitae aliquet.
				
				',
				'kategori'		=> 'umkm',
				'foto' 			=> 'default.jpeg'
			], 
			[
				'judul'		=> 'Perkenalan Terhadap Desa Plandi',
				'tanggal'	=> date("Y-m-d"),
				'berita'		=> '
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis, ipsum sit amet cursus congue, enim nunc aliquam leo, non tincidunt ex lectus sit amet dui. Proin aliquet consequat neque in consectetur. Fusce sagittis nisl mauris. Sed viverra leo id nibh dapibus, at viverra tellus pellentesque. Aenean viverra sapien vitae massa faucibus, at molestie nisl dapibus. Mauris in orci quam. Morbi lobortis leo nec ligula dignissim, sed fermentum diam gravida. Curabitur sit amet elit lacus. Pellentesque ac urna in est viverra volutpat. Duis tristique tortor turpis, vel vehicula tellus scelerisque non. Donec nunc purus, vehicula ac eros in, tristique dictum sapien. Curabitur ac ante sed neque gravida venenatis elementum suscipit tortor.
				
				Mauris vitae varius neque, at ultrices velit. Morbi nisl tortor, consectetur vitae ultricies in, consequat sit amet magna. Praesent condimentum consequat dignissim. Phasellus placerat consectetur fringilla. Donec sit amet nibh tincidunt, accumsan sapien quis, blandit sem. Duis fringilla, urna suscipit semper lobortis, ligula ligula posuere ipsum, rutrum dictum diam magna eget lorem. Nulla eu justo aliquet, vehicula lectus eget, ultricies libero. Pellentesque tristique arcu ornare, rutrum nisi sodales, mattis nisi. Aenean interdum, velit bibendum tempor auctor, justo dolor dictum urna, eget imperdiet lacus ligula vitae tortor. Suspendisse in tellus pulvinar, pretium nunc et, ullamcorper neque. Ut suscipit justo ac nunc aliquam vulputate.
				
				Nam fringilla dapibus convallis. Quisque in quam laoreet, euismod risus sed, commodo nulla. Duis pretium eleifend augue, quis feugiat mauris pellentesque vel. Vestibulum in dolor nisl. Nulla lacus diam, iaculis sed suscipit vel, euismod in odio. Integer tristique, est ac aliquet ornare, orci massa dapibus ipsum, vitae vestibulum augue justo ut turpis. Sed sit amet turpis ac diam sagittis ultrices. Proin maximus, enim id condimentum varius, tortor risus commodo lorem, ac condimentum massa ex non urna.
				
				Cras pharetra nibh id fringilla congue. In aliquet orci nec bibendum hendrerit. Donec pellentesque arcu a nisi fermentum, vel hendrerit sapien interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse at ipsum non nibh aliquet imperdiet. Pellentesque vel viverra ex. Vestibulum pharetra hendrerit efficitur. Mauris fermentum eros ac molestie pharetra. In diam diam, interdum eu semper eget, ultrices nec mi. Proin fermentum molestie elementum. Nunc felis lacus, convallis nec vulputate ac, vehicula vitae quam. Mauris mattis maximus purus, nec iaculis risus semper et. Quisque laoreet ipsum accumsan nunc euismod pharetra. Maecenas commodo ultrices nibh, et rutrum nulla efficitur eu.
				
				Nulla egestas est turpis, ac molestie nisl feugiat in. Aliquam suscipit tempor massa, sit amet interdum metus aliquet a. Vestibulum et sem ac libero consectetur consequat at ut turpis. Nam sed felis posuere, consequat felis non, posuere erat. Donec eu nisi lacus. Mauris porta purus id porttitor cursus. Vestibulum pellentesque gravida neque vitae semper. Integer aliquet velit augue, eget tempus risus imperdiet a. Nunc dapibus id nisi vel porttitor. Proin vel enim eleifend nisi pulvinar porttitor. Ut condimentum semper mollis. Vestibulum faucibus tincidunt posuere. Aliquam tincidunt aliquam nisi sed venenatis. In pharetra sit amet lectus vitae aliquet.
				
				',
				'kategori'		=> 'umkm',
				'foto' 			=> 'default.jpeg'
			]
		];
		$this->db->table('berita')->insertBatch($data);
	}
}
