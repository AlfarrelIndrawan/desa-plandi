<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederUtama extends Seeder
{
	public function run()
	{
		$this->call('UmkmSeeder');
		$this->call('BeritaSeeder');
		$this->call('PendidikanSeeder');
		$this->call('UsersSeeder');
	}
}
