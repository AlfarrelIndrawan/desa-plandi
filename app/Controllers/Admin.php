<?php

namespace App\Controllers;

use App\models\BeritaModel;
use App\models\UmkmModel;
use App\models\PendudukModel;
use App\models\LayananModel;

class Admin extends BaseController
{
    protected $beritaModel;
    protected $umkmModel;
    protected $pendudukModel;
    protected $layananModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->umkmModel = new UmkmModel();
        $this->pendudukModel = new PendudukModel();
        $this->layananModel = new LayananModel();
    }

    // menampilkan dashboard admin
    public function index()
    {
        return view('admin/admin');
    }
    // batas menampilkan halaman dashboard admin

    // menampilkan halaman admin umkm dan mengambil data umkm di database
    public function umkm()
    {
        $data = [
            'umkm' => $this->umkmModel->findAll()
        ];

        return view('admin/admin_umkm', $data);
    }
    // batas menampilkan halaman umkm

    // menampilkan halaman tambah umkm
    public function viewAddUMKM()
    {
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('admin/tambah_umkm', $data);
    }
    //batas view halaman umkm

    //  CONTROLLER ADMIN UMKM

    // proses menambahkan data umkm
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
            return redirect()->to(base_url('Admin/viewAddUMKM'))->withInput();
        }
        // batas validasi input

        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namaFoto = 'default.jpeg';
        } else {
            $ext = $foto->getClientExtension();
            $namaFoto = date("Ymdhis")  . '.' . $ext;
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
    // batas proses menambahkan data umkm

    // menampilkan halaman edit umkm
    public function viewEditUMKM($id)
    {
        session();
        $data = [
            'umkm' => $this->umkmModel->find($id),
            'validation' => \config\Services::validation()
        ];

        return view('admin/edit_umkm', $data);
    }
    // batas menampilkan halaman edit umkm

    // proses edit umkm
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
            return redirect()->to(base_url('Admin/viewEditUMKM/' . $id))->withInput();
        }
        // batas validasi input

        $ambil = $this->umkmModel->where('id_umkm', $id)->first();
        $foto = $this->request->getFile('foto');
        if (!$foto->getError() == 4) {
            if ($ambil['foto'] != 'default.jpeg') {
                unlink('img/umkm/' . $ambil['foto']);
                $namaFoto = $ambil['foto'];
                $foto->move('img/umkm', $namaFoto);
            } else {
                $ext = $foto->getClientExtension();
                $namaFoto = date("Ymdhis")  . '.' . $ext;
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
    // proses edit umkm

    // proses hapus umkm
    public function hapusUMKM($id)
    {
        $ambil = $this->umkmModel->find($id);
        if ($ambil['foto'] != 'default.jpeg' && $ambil['foto'] != null) {
            unlink('img/umkm/' . $ambil['foto']);
        }
        $this->umkmModel->delete($id);

        return redirect()->to('/admin/umkm');
    }
    // batas proses hapus umkm

    // BATAS CONTROLLER ADMIN UMKM

    /////////////////////////////////////////////////////////////////////////////

    // CONTROLLER ADMIN BERITA

    // menampilkan halaman berita dan mengambil data berita di database
    public function berita()
    {
        $data = [
            'berita' => $this->beritaModel->findAll()
        ];

        return view('admin/admin_berita', $data);
    }
    // batas menampilkan halaman berita admin

    // menampilkan halaman tambah berita
    public function viewAddBerita()
    {
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('admin/tambah_berita', $data);
    }
    // batas menampilkan halaman tambah berita

    // proses tambah berita
    public function tambahBerita()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[berita.judul]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'berita' => [
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
            return redirect()->to(base_url('Admin/viewAddBerita'))->withInput();
        }
        // batas validasi input

        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namaFoto = 'default.jpeg';
        } else {
            $ext = $foto->getClientExtension();
            $namaFoto = date("Ymdhis") . '.' . $ext;
            $foto->move('img/berita', $namaFoto);
        }

        $today = date("Y-m-d");

        $this->beritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'berita' => $this->request->getVar('berita'),
            'kategori' => $this->request->getVar('kategori'),
            'foto' => $namaFoto,
            'tanggal' => $today
        ]);

        return redirect()->to('Admin/berita');
    }
    // batas proses tambah berita

    // menampilkan view edit berita
    public function viewEditBerita($id)
    {
        session();
        $data = [
            'berita' => $this->beritaModel->find($id),
            'validation' => \config\Services::validation()
        ];

        return view('admin/edit_berita', $data);
    }
    // batas menampilkan view edit berita

    // proses edit berita
    public function editBerita($id)
    {

        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[berita.judul,id_berita,' . $id . ']',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'berita' => [
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
            return redirect()->to(base_url('Admin/viewEditBerita/' . $id))->withInput();
        }
        // batas validasi input

        $ambil = $this->beritaModel->where('id_berita', $id)->first();
        $foto = $this->request->getFile('foto');
        if (!$foto->getError() == 4) {
            if ($ambil['foto'] != 'default.jpeg') {
                unlink('img/berita/' . $ambil['foto']);
                $namaFoto = $ambil['foto'];
                $foto->move('img/berita', $namaFoto);
            } else {
                $ext = $foto->getClientExtension();
                $namaFoto = date("Ymdhis")  . '.' . $ext;
                $foto->move('img/berita', $namaFoto);
            }
        } else {
            $namaFoto = $ambil['foto'];
        };

        $today = date("Y-m-d");

        $update = ([
            'judul' => $this->request->getVar('judul'),
            'berita' => $this->request->getVar('berita'),
            'kategori' => $this->request->getVar('kategori'),
            'foto' => $namaFoto,
            'tanggal' => $today
        ]);

        $this->beritaModel->update($id, $update);

        return redirect()->to('admin/berita');
    }
    // batas proses edit berita

    // proses hapus berita
    public function hapusBerita($id)
    {
        $ambil = $this->beritaModel->find($id);
        if ($ambil['foto'] != 'default.jpeg' && $ambil['foto'] != null) {
            unlink('img/berita/' . $ambil['foto']);
        }
        $this->beritaModel->delete($id);

        return redirect()->to('/admin/berita');
    }
    // batas proses hapus berita

    // BATAS CONTROLLER ADMIN BERITA

    ///////////////////////////////////////////////////////////////

    // Controller Admin Penduduk

    // menampilkan halaman berita dan mengambil data berita di database
    public function penduduk()
    {
        $data = [
            'penduduk' => $this->pendudukModel->findAll()
        ];

        return view('admin/penduduk', $data);
    }

    // menampilkan halaman tambah penduduk
    public function viewAddPenduduk()
    {
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('admin/tambah_penduduk', $data);
    }
    // batas menampilkan halaman tambah penduduk

    // proses tambah penduduk
    public function tambahPenduduk()
    {
        //validasi input
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar',
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'jk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            return redirect()->to(base_url('Admin/viewAddPenduduk'))->withInput();
        }
        // batas validasi input

        $this->pendudukModel->insert([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'jk' => $this->request->getVar('jk'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),
            'status' => $this->request->getVar('status'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan')
        ]);

        return redirect()->to('Admin/penduduk');
    }
    // batas proses tambah penduduk

    // menampilkan view edit penduduk
    public function viewEditPenduduk($id)
    {
        session();
        $data = [
            'penduduk' => $this->pendudukModel->find($id),
            'validation' => \config\Services::validation()
        ];

        return view('admin/edit_penduduk', $data);
    }
    // batas menampilkan view edit penduduk

    // proses edit berita
    public function editPenduduk($id)
    {
        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'jk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            return redirect()->to(base_url('Admin/viewEditPenduduk/' . $id))->withInput();
        }
        // batas validasi input

        $update = ([
            'nama' => $this->request->getVar('nama'),
            'jk' => $this->request->getVar('jk'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),
            'status' => $this->request->getVar('status'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan')
        ]);

        $this->pendudukModel->update($id, $update);

        return redirect()->to('admin/penduduk');
    }
    // batas proses edit penduduk

    // proses hapus penduduk
    public function hapusPenduduk($id)
    {
        $ambil = $this->pendudukModel->find($id);
        $this->pendudukModel->delete($id);

        return redirect()->to('/admin/penduduk');
    }
    // batas proses hapus penduduk

    //Admin Layanan
    
    public function layanan()
    {
        $data['layanan'] = $this->layananModel->findAll();
        return view('admin/admin_layanan', $data);
    }

    public function informasiLengkap($id)
    {
        $data['layanan'] = $this->layananModel->find($id);
        return view('admin/informasi_layanan', $data);
    }

    public function konfirmasiSurat($id) {
        $layanan = $this->layananModel->find($id);
        $status = $layanan['status'];
        switch($status) {
            case "Menunggu Konfirmasi RT":
                $update = (['status' => 'Menunggu Konfirmasi RW']);
                $this->layananModel->update($id, $update);
                break;
            case "Menunggu Konfirmasi RW":
                $update = (['status' => 'Telah Terkonfirmasi']);
                $this->layananModel->update($id, $update);
                break;
            case "Telah Terkonfirmasi":
                $update = (['status' => 'Selesai']);
                $this->layananModel->update($id, $update);
                break;
        }
        return redirect()->to('admin/layanan');
    }

    public function hapusSurat($id)
    {
        $ambil = $this->layananModel->find($id);
        $this->layananModel->delete($id);

        return redirect()->to('/admin/layanan');
    }
}
