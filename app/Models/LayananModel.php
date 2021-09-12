<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
	protected $table = 'layanan';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = ['id_surat', 'tipe_surat', 'nama_pengaju', 'kontak_pengaju', 'rt', 'rw', 'status', 'informasi', 'tanggal'];
}
