<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'username'	=> 'adminPlandi',
				'password'	=> md5('desaPlandiJaya'),
			],
			[
				'username'	=> 'rt01',
				'password'	=> md5('rt01Plandi'),
			],
			[
				'username'	=> 'rw01',
				'password'	=> md5('rw01Plandi'),
			],
			[
				'username'	=> 'rt15',
				'password'	=> md5('rt15Selobekiti'),
			],
			[
				'username'	=> 'rw03',
				'password'	=> md5('rw03Selobekiti'),
			],
		];
		$this->db->table('users')->insertBatch($data);
	}
}
