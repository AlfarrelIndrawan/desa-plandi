<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    protected $allowedFields = ['nik', 'nama', 'jk', 'tgl_lahir', 'agama', 'status', 'pendidikan', 'pekerjaan'];
}
