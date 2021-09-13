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

    public function get_umur() {
        $query = $this->db->query('SELECT COUNT(nik) AS jumlah FROM penduduk UNION ALL SELECT COUNT(nik) FROM penduduk WHERE TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) <= 20 UNION ALL SELECT COUNT(nik) FROM penduduk WHERE TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) > 20 AND TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) <= 40 UNION ALL SELECT COUNT(nik) FROM penduduk WHERE TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) > 40 AND TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) <= 60 UNION ALL SELECT COUNT(nik) FROM penduduk WHERE TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) > 60');
        return $query->getResult();
    }

    public function get_jk() {
        $query = $this->db->query('SELECT COUNT(nik) AS jumlah FROM `penduduk` WHERE jk = "L" UNION ALL SELECT COUNT(nik) FROM `penduduk` WHERE jk = "P"');
        return $query->getResult();
    }

    public function get_status() {
        $query = $this->db->query("SELECT COUNT(nik) AS jumlah FROM `penduduk` WHERE status = 'Belum Kawin' UNION ALL SELECT COUNT(nik) FROM `penduduk` WHERE status = 'Cerai Hidup' UNION ALL SELECT COUNT(nik) FROM `penduduk` WHERE status = 'Cerai Mati' UNION ALL SELECT COUNT(nik) FROM `penduduk` WHERE status = 'Kawin'");
        return $query->getResult();
    }

    public function get_agama() {
        $query = $this->db->query("SELECT COUNT(nik) AS jumlah FROM `penduduk` WHERE agama = 'Islam' UNION ALL SELECT COUNT(nik) FROM `penduduk` WHERE agama = 'Kristen'");
        return $query->getResult();
    }
}
