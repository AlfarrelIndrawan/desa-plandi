<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TingkatPendidikan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tingkat'          => [
                'type'           => 'INTEGER',
                'unsigned'       => true,
            ],
            'pendidikan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ]
		]);
		$this->forge->createTable('tingkat_pendidikan');
	}

	public function down()
	{
		$this->forge->dropTable('tingkat_pendidikan');
	}
}
