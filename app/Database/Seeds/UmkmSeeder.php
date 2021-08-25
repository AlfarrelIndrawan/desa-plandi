<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UmkmSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_umkm'		=> 'Kopi Pak Saedi',
				'nama_pemilik'	=> 'Pak Saedi',
				'deskripsi'		=> 'Memanen sendiri kopi',
				'lokasi'		=> 'Dusun Pandan Ploso',
				'kontak'		=> '083871884137'
			],
			[
				'nama_umkm'		=> 'Kerajinan Kayu Pak Joko',
				'nama_pemilik'	=> 'Pak Joko',
				'deskripsi'		=> 'Membuat kerajinan kayu dengan kayu mahoni',
				'lokasi'		=> 'Dusun Tambak Rejo',
				'kontak'		=> '081235010466'
			]
		];
		$this->db->table('umkm')->insertBatch($data);
	}
}
