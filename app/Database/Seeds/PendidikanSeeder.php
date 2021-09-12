<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendidikanSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'tingkat' => 1,
				'pendidikan' => 'Tidak/Belum Sekolah'
			],
			[
				'tingkat' => 2,
				'pendidikan' => 'Belum Tamat SD/Sederajat'
			],
			[
				'tingkat' => 3,
				'pendidikan' => 'Tamat SD/Sederajat'
			],
			[
				'tingkat' => 4,
				'pendidikan' => 'SLTP/Sederajat'
			],
			[
				'tingkat' => 5,
				'pendidikan' => 'SLTA/Sederajat'
			],
			[
				'tingkat' => 6,
				'pendidikan' => 'Diploma I/II'
			],
			[
				'tingkat' => 7,
				'pendidikan' => 'Akademi/Diploma III/S. Muda'
			],
			[
				'tingkat' => 8,
				'pendidikan' => 'Diploma IV/Strata I'
			],
			[
				'tingkat' => 9,
				'pendidikan' => 'Strata II'
			]
		];
		$this->db->table('tingkat_pendidikan')->insertBatch($data);
	}
}
