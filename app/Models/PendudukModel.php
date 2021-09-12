<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    protected $allowedFields = ['nik', 'nama', 'jk', 'tgl_lahir', 'agama', 'status', 'pendidikan', 'pekerjaan'];
    protected $db;

    protected function initialize() {
        $this->db = \Config\Database::connect();
    }

    public function get_pekerjaan() {
        $query = $this->db->query('SELECT pekerjaan, COUNT(nik) AS jumlah FROM penduduk GROUP BY pekerjaan');
        return $query->getResult();
    }

    public function get_pendidikan() {
        $query = $this->db->query('SELECT tingkat, penduduk.pendidikan, COUNT(nik) AS jumlah FROM penduduk LEFT JOIN tingkat_pendidikan ON penduduk.pendidikan = tingkat_pendidikan.pendidikan GROUP BY tingkat ORDER BY tingkat');
        return $query->getResult();
    }
}
