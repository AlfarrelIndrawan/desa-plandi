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

    public function viewAddUMKM()
    {
        return view('admin/tambah_umkm');
    }

    public function tambahUMKM()
    {
        $foto = $this->request->getFile('foto');
        if($foto->getError()==4){
            $namaFoto='umkm.jpeg';
        }
        else{
            $ext = $foto->getClientExtension();
            $namaFoto = $this->request->getVar('nama'). '.' .$ext;
            $foto->move('img/umkm',$namaFoto);
        }

        $this->umkmModel->insert([
            'nama_umkm'=> $this->request->getVar('nama'),
            'nama_pemilik'=> $this->request->getVar('pemilik'),
            'deskripsi'=> $this->request->getVar('deskripsi'),
            'kontak'=> $this->request->getVar('kontak'),
            'lokasi'=> $this->request->getVar('lokasi'),
            'foto'=>$namaFoto
        ]);

        return redirect()->to('admin/umkm');
    }
}
