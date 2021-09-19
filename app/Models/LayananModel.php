<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
	protected $table = 'layanan';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = ['id_surat', 'tipe_surat', 'nama_pengaju', 'kontak_pengaju', 'rt', 'rw', 'status', 'informasi', 'tanggal'];
    protected $db;

    protected function initialize()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_surat_masuk($tingkat, $angka)
    {
        $query = $this->db->query("SELECT * FROM layanan WHERE $tingkat = '$angka' AND (status = 'Menunggu Konfirmasi RT' OR status = 'Menunggu Konfirmasi RW' OR status = 'Telah Terkonfirmasi')");
        return $query->getResultArray();
    }

    public function get_surat_selesai($tingkat, $angka)
    {
        $query = $this->db->query("SELECT * FROM layanan WHERE $tingkat = '$angka' AND (status = 'Selesai' OR status = 'Tertolak')");
        return $query->getResultArray();
    }

    public function get_surat_masuk_admin()
    {
        $query = $this->db->query("SELECT * FROM layanan WHERE status = 'Menunggu Konfirmasi RT' OR status = 'Menunggu Konfirmasi RW' OR status = 'Telah Terkonfirmasi'");
        return $query->getResultArray();
    }

    public function get_surat_selesai_admin()
    {
        $query = $this->db->query("SELECT * FROM layanan WHERE status = 'Selesai' OR status = 'Tertolak'");
        return $query->getResultArray();
    }
}
