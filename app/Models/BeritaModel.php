<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $returnType = 'array';
    protected $allowedFields = ['judul', 'isi', 'tanggal', 'penulis', 'kategori', 'foto', 'berita'];
}
