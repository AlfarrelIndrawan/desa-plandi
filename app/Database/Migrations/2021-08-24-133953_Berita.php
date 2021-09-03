<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_berita'          => [
                'type'           => 'INTEGER',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tanggal'		=> [
				'type'		=> 'DATE'
			],
			'berita'		=> [
				'type'		=> 'TEXT'
			],
			'penulis'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '50',
			],
			'kategori'		=> [
				'type'			=> 'ENUM',
				'constraint'	=> "'Desa', 'Umkm'",
			],
			'foto'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '256',
				'null'			=> true,
			]
        ]);
        $this->forge->addPrimaryKey('id_berita');
        $this->forge->createTable('berita');
	}

	public function down()
	{
		$this->forge->dropTable('Berita');
	}
}
