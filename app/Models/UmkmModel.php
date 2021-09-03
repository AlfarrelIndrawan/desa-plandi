<?php

namespace App\Models;

use CodeIgniter\Model;

class UmkmModel extends Model
{
    protected $table = 'umkm';
    protected $primaryKey = 'id_umkm';
    protected $allowedFields = ['id_umkm','nama_umkm','nama_pemilik','deskripsi','lokasi','kontak','foto'];

}
