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
				'username'	=> 'rt02',
				'password'	=> md5('rt02Plandi'),
			],
			[
				'username'	=> 'rt03',
				'password'	=> md5('rt03Plandi'),
			],
			[
				'username'	=> 'rt04',
				'password'	=> md5('rt04Plandi'),
			],
			[
				'username'	=> 'rt05',
				'password'	=> md5('rt05Plandi'),
			],
			[
				'username'	=> 'rt06',
				'password'	=> md5('rt06Plandi'),
			],
			[
				'username'	=> 'rt07',
				'password'	=> md5('rt07Plandi'),
			],
			[
				'username'	=> 'rt08',
				'password'	=> md5('rt08Plandi'),
			],
			[
				'username'	=> 'rt09',
				'password'	=> md5('rt09Plandi'),
			],
			[
				'username'	=> 'rt10',
				'password'	=> md5('rt10Plandi'),
			],
			[
				'username'	=> 'rt11',
				'password'	=> md5('rt11Plandi'),
			],
			[
				'username'	=> 'rt12',
				'password'	=> md5('rt12Plandi'),
			],
			[
				'username'	=> 'rt13',
				'password'	=> md5('rt13Tambak'),
			],
			[
				'username'	=> 'rt14',
				'password'	=> md5('rt14Tambak'),
			],
			[
				'username'	=> 'rt15',
				'password'	=> md5('rt15Selobekiti'),
			],
			[
				'username'	=> 'rt16',
				'password'	=> md5('rt16Selobekiti'),
			],
			[
				'username'	=> 'rt17',
				'password'	=> md5('rt17Selobekiti'),
			],
			[
				'username'	=> 'rt18',
				'password'	=> md5('rt18Selobekiti'),
			],
			[
				'username'	=> 'rt19',
				'password'	=> md5('rt19Selobekiti'),
			],
			[
				'username'	=> 'rt20',
				'password'	=> md5('rt20Selobekiti'),
			],
			[
				'username'	=> 'rt21',
				'password'	=> md5('rt21Selobekiti'),
			],
			[
				'username'	=> 'rt22',
				'password'	=> md5('rt22Selobekiti'),
			],
			[
				'username'	=> 'rt23',
				'password'	=> md5('rt23Selobekiti'),
			],
			[
				'username'	=> 'rt24',
				'password'	=> md5('rt24Selobekiti'),
			],
			[
				'username'	=> 'rt25',
				'password'	=> md5('rt25Pandanploso'),
			],
			[
				'username'	=> 'rt26',
				'password'	=> md5('rt26Pandanploso'),
			],
			[
				'username'	=> 'rt27',
				'password'	=> md5('rt27Pandanploso'),
			],
			[
				'username'	=> 'rt28',
				'password'	=> md5('rt28Pandanploso'),
			],
			[
				'username'	=> 'rt29',
				'password'	=> md5('rt29Pandanploso'),
			],
			[
				'username'	=> 'rt30',
				'password'	=> md5('rt30Pandanploso'),
			],
			[
				'username'	=> 'rt31',
				'password'	=> md5('rt31Plandi'),
			],
			[
				'username'	=> 'rw01',
				'password'	=> md5('rw01Plandi'),
			],
			[
				'username'	=> 'rw02',
				'password'	=> md5('rw02Plandi'),
			],
			[
				'username'	=> 'rw03',
				'password'	=> md5('rw03Selobekiti'),
			],
			[
				'username'	=> 'rw04',
				'password'	=> md5('rw04Selobekiti'),
			],
			[
				'username'	=> 'rw05',
				'password'	=> md5('rw05Pandanploso'),
			],
			[
				'username'	=> 'rw06',
				'password'	=> md5('rw6Tambak'),
			]
		];
		$this->db->table('users')->insertBatch($data);
	}
}
