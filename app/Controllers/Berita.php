<?php

namespace App\Controllers;

use App\models\BeritaModel;

class Berita extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [
            // 'berita' => $this->beritaModel->findAll()
            'berita' => $this->beritaModel->paginate(9, 'berita'),
            'pager' => $this->beritaModel->pager,
        ];

        echo view('berita', $data);
    }
}
