<?php

namespace App\Controllers;
use App\models\LayananModel;
use App\models\PendudukModel;

class Layanan extends BaseController
{
    
    protected $layananModel;

    public function __construct()
    {
        $this->layananModel = new LayananModel();
        $this->pendudukModel = new PendudukModel();
    }

    public function konfirmasiRT() {
        $surat = $this->layananModel->where('id_surat', $id)->first();

        $update_data = ([
            'status' => 'Menunggu Tonfirmasi RW'
        ]);

        $this->layananModel->update($surat, $update_data);
    }

    public function konfirmasiRW() {
        $surat = $this->layananModel->where('id_surat', $id)->first();

        $update_data = ([
            'status' => 'Telah Terkonfirmasi'
        ]);

        $this->layananModel->update($surat, $update_data);
    }

    public function konfirmasiAdmin() {
        $surat = $this->layananModel->where('id_surat', $id)->first();

        $update_data = ([
            'status' => 'Selesai'
        ]);

        $this->layananModel->update($surat, $update_data);
    }

    public function tambahSurat() {

        //validasi input
        if (!$this->validate([
            'nik_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form NIK harus diisi'
                ]
            ],
            'alamat_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form Alamat harus diisi'
                ]
            ],
            'rt_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form RT harus diisi'
                ]
            ],
            'rw_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form RW harus diisi'
                ]
            ],
            'contact_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Form Kontak harus diisi'
                ]
            ]
        ])) 
        {
            switch ($this->request->getVar('tipe_surat')) {
    
                // Surat ijin keramaian
                case "Surat Ijin Keramaian":
                    if (!$this->validate([
                        'date_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tanggal harus diisi'
                            ]
                        ],
                        'time_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Waktu harus diisi'
                            ]
                        ],
                        'hajat_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Hajat harus diisi'
                            ]
                        ]
                    ])) 
                    {
                        $validation = \Config\Services::validation();
                        $jenis_surat = 'surat_ijin_keramaian';
                        return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    } 
                    break;
                
                case "Surat Keterangan Belum Nikah":
                    $validation = \Config\Services::validation();
                    $jenis_surat = 'surat_keterangan_belum_nikah';
                    return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    break;
                
                case "Surat Keterangan Kehilangan":
                    if (!$this->validate([
                        'date_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tanggal harus diisi'
                            ]
                        ],
                        'time_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Waktu harus diisi'
                            ]
                        ],
                        'alasan_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Alasan harus diisi'
                            ]
                        ]
                    ])) 
                    {
                        $validation = \Config\Services::validation();
                        $jenis_surat = 'surat_keterangan_kehilangan';
                        return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    }
                    break;
                
                case "Surat Keterangan Kelahiran":
                    if (!$this->validate([
                        'nik_ibu_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form NIK harus diisi'
                            ]
                        ],
                        'tempat_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tempat harus diisi'
                            ]
                        ],
                        'date_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tanggal harus diisi'
                            ]
                        ],
                        'time_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Waktu harus diisi'
                            ]
                        ],
                        'penolong_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Penolong Bayi harus diisi'
                            ]
                        ],
                        'berat_bayi_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Berat Bayi harus diisi'
                            ]
                        ]
                    ])) 
                    {
                        $validation = \Config\Services::validation();
                        $jenis_surat = 'surat_keterangan_kelahiran';
                        return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    }
                    break;
                
                case "Surat Keterangan Kematian":
                    if (!$this->validate([
                        'date_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tanggal harus diisi'
                            ]
                        ],
                        'time_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Waktu harus diisi'
                            ]
                        ],
                        'tempat_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Tempat harus diisi'
                            ]
                        ],
                        'penyebab_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Penyebab Kematian harus diisi'
                            ]
                        ]
                    ])) 
                    {
                        $validation = \Config\Services::validation();
                        $jenis_surat = 'surat_keterangan_kematian';
                        return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    }
                    break;

                case "Surat Keterangan Tidak Mampu":
                    if (!$this->validate([
                        'kepentingan_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Kepentingan harus diisi'
                            ]
                        ],
                        'nama_form' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Form Nama Warga yang Diajukan harus diisi'
                            ]
                        ]
                    ])) 
                    {
                        $validation = \Config\Services::validation();
                        $jenis_surat = 'surat_keterangan_tidak_mampu';
                        return redirect()->to('Beranda/layanan')->withInput()->with('validation', $validation)->with('jenis_surat', $jenis_surat);
                    }
                    break;

                default:
                    return redirect()->to('Beranda/layanan');
                    break;
    
            }
        }

        switch ($this->request->getVar('tipe_surat')) {

            case "Surat Ijin Keramaian":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama Pengaju : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir : ' . $data_pengaju['tgl_lahir'] . ';Agama : ' . $data_pengaju['agama'] . ';Status : ' . $data_pengaju['status'] . ';Pekerjaan : ' . $data_pengaju['pekerjaan'] . ';Alamat : ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $informasi_surat = 'Tanggal Acara : ' . $this->request->getVar('date_form') . ';Waktu Acara : ' . $this->request->getVar('time_form') . ';Hajat Acara : ' . $this->request->getVar('hajat_form') . ';Hiburan Acara : ' . $this->request->getVar('hiburan_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju . $informasi_surat,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;

            case "Surat Keterangan Belum Nikah":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama Pengaju : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir : ' . $data_pengaju['tgl_lahir'] . ';Agama : ' . $data_pengaju['agama'] . ';Status : ' . $data_pengaju['status'] . ';Pekerjaan : ' . $data_pengaju['pekerjaan'] . ';Alamat : ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                // $informasi_surat = 'Tanggal Acara : ' . $this->request->getVar('date_form') . ';Waktu Acara : ' . $this->request->getVar('time_form') . ';Hajat Acara : ' . $this->request->getVar('hajat_form') . ';Hiburan Acara : ' . $this->request->getVar('hiburan_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;

            case "Surat Keterangan Kehilangan":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama Pengaju : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir : ' . $data_pengaju['tgl_lahir'] . ';Agama : ' . $data_pengaju['agama'] . ';Status : ' . $data_pengaju['status'] . ';Pekerjaan : ' . $data_pengaju['pekerjaan'] . ';Alamat : ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $informasi_surat = 'Tanggal Kehilangan : ' . $this->request->getVar('date_form') . ';Waktu Kehilangan : ' . $this->request->getVar('time_form') . ';Alasan Kehilangan : ' . $this->request->getVar('alasan_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju . $informasi_surat,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;

            case "Surat Keterangan Kelahiran":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama Ayah : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir Ayah: ' . $data_pengaju['tgl_lahir'] . ';Agama Ayah: ' . $data_pengaju['agama'] . ';Status Ayah: ' . $data_pengaju['status'] . ';Pekerjaan Ayah: ' . $data_pengaju['pekerjaan'] . ';Alamat Ayah: ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $data_istri_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_ibu_form'))->first();
                $informasi_istri_pengaju = 'Nama Ibu : ' . $data_istri_pengaju['nama'] . ';Jenis Kelamin : ' . $data_istri_pengaju['jk'] . ';Tanggal Lahir Ibu: ' . $data_istri_pengaju['tgl_lahir'] . ';Agama Ibu: ' . $data_istri_pengaju['agama'] . ';Status Ibu: ' . $data_istri_pengaju['status'] . ';Pekerjaan Ibu: ' . $data_istri_pengaju['pekerjaan'] . ';Alamat Ibu: ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $informasi_surat = 'Tempat Kelahiran : ' . $this->request->getVar('tempat_form') . ';Tanggal Kelahiran : ' . $this->request->getVar('date_form') . ';Waktu Kelahiran : ' . $this->request->getVar('time_form') . ';Penolong : ' . $this->request->getVar('penolong_form') . ';Panjang Bayi : ' . $this->request->getVar('panjang_bayi_form') . ';Berat Bayi : ' . $this->request->getVar('berat_bayi_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju . $informasi_istri_pengaju . $informasi_surat,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;

            case "Surat Keterangan Kematian":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir : ' . $data_pengaju['tgl_lahir'] . ';Agama : ' . $data_pengaju['agama'] . ';Status : ' . $data_pengaju['status'] . ';Pekerjaan : ' . $data_pengaju['pekerjaan'] . ';Alamat : ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $informasi_surat = 'Tempat Kematian : ' . $this->request->getVar('tempat_form') . ';Tanggal Kematian : ' . $this->request->getVar('date_form') . ';Waktu Kematian : ' . $this->request->getVar('time_form') . ';Penyebab Kematian : ' . $this->request->getVar('penyebab_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju . $informasi_surat,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;

            case "Surat Keterangan Tidak_mampu":
                $today = date("Y-m-d");
                $data_pengaju = $this->pendudukModel->where('nik', $this->request->getVar('nik_form'))->first();
                $informasi_pengaju = 'Nama Pengaju : ' . $data_pengaju['nama'] . ';Jenis Kelamin : ' . $data_pengaju['jk'] . ';Tanggal Lahir : ' . $data_pengaju['tgl_lahir'] . ';Agama : ' . $data_pengaju['agama'] . ';Status : ' . $data_pengaju['status'] . ';Pekerjaan : ' . $data_pengaju['pekerjaan'] . ';Alamat : ' . $this->request->getVar('alamat') . ';RT : ' . $this->request->getVar('rt_form') . ';RW : ' . $this->request->getVar('rw_form') . ';';
                $informasi_surat = 'Kepentingan Pengajuan : ' . $this->request->getVar('kepentingan_form') . ';Nama Warga yang Diajukan : ' . $this->request->getVar('nama_form') . ';';

                $this->layananModel->save([
                    'tipe_surat' => $this->request->getVar('tipe_surat'),
                    'nama_pengaju' => $data_pengaju['nama'],
                    'kontak_pengaju' => $this->request->getVar('contact_form'),
                    'rt' => $this->request->getVar('rt_form'),
                    'rw' => $this->request->getVar('rw_form'),
                    'status' => 'Menunggu Konfirmasi RT',
                    'informasi' => $informasi_pengaju . $informasi_surat,
                    'tanggal' => $today
                ]);

                return redirect()->to('Beranda/layanan');
                break;
            
            default:
                return redirect()->to('Beranda/layanan');
                break;
        }

    }
}