<?php

namespace App\Controllers;

use App\models\BeritaModel;
use App\models\UmkmModel;
use App\models\PendudukModel;

class Admin extends BaseController
{
    protected $beritaModel;
    protected $umkmModel;
    protected $pendudukModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->umkmModel = new UmkmModel();
        $this->pendudukModel = new PendudukModel();
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

    public function penduduk()
    {
        $data = [
            // 'penduduk' => $this->pendudukModel->findAll()
            'penduduk' => $this->pendudukModel->paginate(1000, 'penduduk'),
            'pager' => $this->pendudukModel->pager
        ];

        return view('admin/penduduk', $data);
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
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('admin/tambah_umkm', $data);
    }

    public function tambahUMKM()
    {

        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[umkm.nama_umkm]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'pemilik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'is_image' => 'Data yang diisikan harus {field}',
                    'mime_in' => 'Data yang diisikan harus {field}'
                ]
            ]
        ])) {
            // $validation = \config\Services::validation();
            return redirect()->to(base_url('Admin/viewAddUMKM'))->withInput();
        }
        // batas validasi

        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namaFoto = 'default.jpeg';
        } else {
            $ext = $foto->getClientExtension();
            $namaFoto = $this->request->getVar('nama') . '.' . $ext;
            $foto->move('img/umkm', $namaFoto);
        }

        $this->umkmModel->save([
            'nama_umkm' => $this->request->getVar('nama'),
            'nama_pemilik' => $this->request->getVar('pemilik'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kontak' => $this->request->getVar('kontak'),
            'lokasi' => $this->request->getVar('lokasi'),
            'foto' => $namaFoto
        ]);

        return redirect()->to('admin/umkm');
    }

    public function viewEditUMKM($id)
    {
        session();
        $data = [
            'umkm' => $this->umkmModel->find($id),
            'validation' => \config\Services::validation()
        ];

        return view('admin/edit_umkm', $data);
    }

    public function editUMKM($id)
    {

        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[umkm.nama_umkm,id_umkm,' . $id . ']',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'pemilik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'is_image' => 'Data yang diisikan harus {field}',
                    'mime_in' => 'Data yang diisikan harus {field}'
                ]
            ]
        ])) {
            // $validation = \config\Services::validation();
            return redirect()->to(base_url('Admin/viewEditUMKM/' . $id))->withInput();
        }
        // batas validasi

        $ambil = $this->umkmModel->where('id_umkm', $id)->first();
        $foto = $this->request->getFile('foto');
        if (!$foto->getError() == 4) {
            if ($ambil['foto'] != 'default.jpeg') {
                unlink('img/umkm/' . $ambil['foto']);
                $namaFoto = $ambil['foto'];
                $foto->move('img/umkm', $namaFoto);
            } else {
                $ext = $foto->getClientExtension();
                $namaFoto = $this->request->getVar('nama') . '.' . $ext;
                $foto->move('img/umkm', $namaFoto);
            }
        } else {
            $namaFoto = $ambil['foto'];
        };
        $update = ([
            'nama_umkm' => $this->request->getVar('nama'),
            'nama_pemilik' => $this->request->getVar('pemilik'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kontak' => $this->request->getVar('kontak'),
            'foto' => $namaFoto
        ]);

        $this->umkmModel->update($id, $update);

        return redirect()->to('admin/umkm');
    }

    public function hapusUMKM($id)
    {
        $ambil = $this->umkmModel->find($id);
        if ($ambil['foto'] != 'default.jpeg') {
            unlink('img/umkm/' . $ambil['foto']);
        }
        $this->umkmModel->delete($id);

        return redirect()->to('/admin/umkm');
    }
}
