<?php

namespace App\Controllers;

use App\models\UmkmModel;

class Umkm extends BaseController
{
    protected $umkmModel;

    public function __construct()
    {
        $this->umkmModel = new UmkmModel();
    }

    public function index()
    {
        $data = [
            // 'berita' => $this->beritaModel->findAll()
            'umkm' => $this->umkmModel->paginate(5, 'umkm'),
            'pager' => $this->umkmModel->pager,
        ];

        echo view('umkm', $data);
    }
}
