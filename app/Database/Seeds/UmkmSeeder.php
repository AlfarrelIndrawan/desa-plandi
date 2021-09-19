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
				'kontak'		=> '083871884137',
				'foto' 			=> 'default.png'
			],
			[
				'nama_umkm'		=> 'Kerajinan Kayu Pak Joko',
				'nama_pemilik'	=> 'Pak Joko',
				'deskripsi'		=> 'Membuat kerajinan kayu dengan kayu mahoni',
				'lokasi'		=> 'Dusun Tambak Rejo',
				'kontak'		=> '081235010466',
				'foto' 			=> 'default.png'
			],
			[
				'nama_umkm'		=> 'Anyaman Bapak M.Arwani',
				'nama_pemilik'	=> 'Pak Arwani',
				'deskripsi'		=> 'Membuat anyaman yang dijual di desa tradisional',
				'lokasi'		=> 'Desa Plandi',
				'kontak'		=> '081342041379',
				'foto' 			=> '20210914052014.jpg'
			],
			[
				'nama_umkm'		=> 'Anyaman Ibu Sri',
				'nama_pemilik'	=> 'Ibu Sri Wahyuning',
				'deskripsi'		=> 'Membuat anyaman yang dijual di desa tradisional',
				'lokasi'		=> 'Desa Plandi',
				'kontak'		=> '085607691556',
				'foto' 			=> 'default.png'
			],
			[
				'nama_umkm'		=> 'Keripik Singkong Ardido',
				'nama_pemilik'	=> 'Ibu Siti Khofifah',
				'deskripsi'		=> 'Membuat keripik singkong yang dijual di pasar tradisional',
				'lokasi'		=> 'Desa Plandi',
				'kontak'		=> '081358352240',
				'foto' 			=> '20210914052953.jpg'
			],
		];
		$this->db->table('umkm')->insertBatch($data);
	}
}
