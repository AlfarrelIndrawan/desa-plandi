<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Layanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_surat'          => [
                'type'           => 'INTEGER',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
			'tipe_surat'			=> [
				'type'			=> 'ENUM',
				'constraint'	=> "'Surat Ijin Keramaian', 'Surat Keterangan Belum Nikah', 'Surat Keterangan Kehilangan', 'Surat Keterangan Kelahiran', 'Surat Keterangan Kematian', 'Surat Keterangan Tidak Mampu'",
			],
            'nama_pengaju'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'kontak_pengaju'	=> [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
			'rt'				=> [
				'type'			=> 'VARCHAR',
				'constraint' 	=> '5',
			],
			'rw'				=> [
				'type'			=> 'VARCHAR',
				'constraint' 	=> '5',
			],
			'status'			=> [
				'type'			=> 'ENUM',
				'constraint'	=> "'Menunggu Konfirmasi RT', 'Menunggu Konfirmasi RW', 'Telah Terkonfirmasi', 'Selesai'",
			],
			'informasi'			=> [
				'type'			=> 'TEXT',
			],
			'tanggal'			=> [
				'type'			=> 'DATE',
			]
        ]);
        $this->forge->addPrimaryKey('id_surat');
        $this->forge->createTable('layanan');
	}

	public function down()
	{
		$this->forge->dropTable('layanan');
	}
}
