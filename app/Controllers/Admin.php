<?php

namespace App\Controllers;

use App\models\BeritaModel;
use App\models\UmkmModel;

class Admin extends BaseController
{
    protected $beritaModel;
    protected $umkmModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->umkmModel = new UmkmModel();
    }

    public function index()
    {
        return view('admin/admin');
    }

    public function berita()
    {
        $data = [
            'berita' => $this->beritaModel->findAll()
        ];

        return view('admin/admin_berita', $data);
    }

    public function umkm()
    {
        $data = [
            'umkm' => $this->umkmModel->findAll()
        ];

        return view('admin/admin_umkm', $data);
    }
}
