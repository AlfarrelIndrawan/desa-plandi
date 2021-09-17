<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LayananSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'tipe_surat' => 'Surat Keterangan Kehilangan',
				'nama_pengaju' => 'CUCU SUPRIADI',
				'kontak_pengaju' => '017349274283',
				'rt' => '01',
				'rw' => '01',
				'status' => 'Menunggu Konfirmasi RT',
				'informasi' => 'Nama Pengaju : CUCU SUPRIADI;Jenis Kelamin : L;Tanggal Lahir : 1987-11-11;Agama : Islam;Status : Belum Kawin;Pekerjaan : TIDAK/BELUM BEKERJA;Alamat : Jalan Desa Plandi;RT : 01;RW : 01;Tanggal Kehilangan : 2021-09-14;Waktu Kehilangan : 14:30;Alasan Kehilangan : lupa;',
				'tanggal' => date("Y-m-d")
			],
			[
				'tipe_surat' => 'Surat Keterangan Kehilangan',
				'nama_pengaju' => 'CUCU SUPRIADI',
				'kontak_pengaju' => '017349274283',
				'rt' => '15',
				'rw' => '03',
				'status' => 'Menunggu Konfirmasi RT',
				'informasi' => 'Nama Pengaju : CUCU SUPRIADI;Jenis Kelamin : L;Tanggal Lahir : 1987-11-11;Agama : Islam;Status : Belum Kawin;Pekerjaan : TIDAK/BELUM BEKERJA;Alamat : Jalan Desa Plandi;RT : 01;RW : 01;Tanggal Kehilangan : 2021-09-14;Waktu Kehilangan : 14:30;Alasan Kehilangan : lupa;',
				'tanggal' => date("Y-m-d")
			]
		];
		$this->db->table('layanan')->insertBatch($data);
	}
}
