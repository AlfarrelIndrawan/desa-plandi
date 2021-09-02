<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\UmkmModel;

class Beranda extends BaseController
{
    protected $umkmModel;
    protected $beritaModel;

    public function __construct()
    {
        // $this->uri = new \CodeIgniter\HTTP\URI();
        $this->request = \Config\Services::request();
        $this->umkmModel = new UmkmModel();
        $this->beritaModel = new BeritaModel();
    }

	public function index()
	{
        $data['judul'] = "Beranda";
        $data['url'] = $this->request->uri->getSegment(1);
		return view('main/beranda',$data);
	}

	public function login()
    {
        $data['judul'] = "Login";
        $data['url'] = $this->uri->getSegment(1);
        return view('main/login',$data);
    }

	public function potensi()
    {
        $data['judul'] = "Potensi";
        $data['url'] = $this->request->uri->getSegment(1);
        return view('main/potensi',$data);
    }

	public function profil()
    {
        $data['judul'] = "Profil";
        return view('main/profil_desa',$data);
    }

	public function umkm()
    {
        $data = [
            // 'berita' => $this->beritaModel->findAll()
            'umkm' => $this->umkmModel->paginate(5, 'umkm'),
            'url' => $this->request->uri->getSegment(1),
            'pager' => $this->umkmModel->pager,
            'judul' => "UMKM"
        ];

        echo view('main/umkm', $data);
    }

    public function berita()
    {
        $data = [
            // 'berita' => $this->beritaModel->findAll()
            'berita' => $this->beritaModel->paginate(9, 'berita'),
            'pager' => $this->beritaModel->pager,
            'url' => $this->request->uri->getSegment(1),
            'judul' => "Berita"
        ];

        echo view('main/berita', $data);
    }

    public function detail_berita($id)
    {
        $berita = $this->beritaModel->find($id);
        $data = [
            'berita' => $berita,
            'judul' => $berita['judul'],
            'url' => $this->request->uri->getSegment(1)

        ];

        echo view('main/detail_berita', $data);
    }

    public function monografi()
    {
        $data['url'] = $this->request->uri->getSegment(1);
        $data['judul'] = "Monografi";
        return view("main/monografi",$data);
    }
}
