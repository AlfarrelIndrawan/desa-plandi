<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BeritaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'judul'		=> 'Perkenalan Terhadap Desa Plandi',
				'tanggal'	=> date("Y-m-d"),
				'berita'		=> 'Selamat datang di Desa Plandi! Desa ini bertempat di Kabupaten Malang Provinsi Jawa Timur',
				'penulis'		=> 'Liwa',
				'kategori'		=> 'desa'
			]
		];
		$this->db->table('berita')->insertBatch($data);
	}
}
