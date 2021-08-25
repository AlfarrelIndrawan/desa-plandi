<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Umkm extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_umkm'          => [
                'type'           => 'INTEGER',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_umkm'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'nama_pemilik'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'deskripsi'		=> [
				'type'		=> 'TINYTEXT'
			],
			'lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '50',
			],
			'kontak'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '30',
			],
			'foto'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '256',
				'null'			=> true,
			]
        ]);
        $this->forge->addPrimaryKey('id_umkm');
        $this->forge->createTable('umkm');
	}

	public function down()
	{
		$this->forge->dropTable('umkm');
	}
}
