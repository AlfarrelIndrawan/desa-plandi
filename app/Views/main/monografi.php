<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>

<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1><?= $judul ?></h1>
    </div>
</div>
<!-- batas judul konten -->
<div class="container-xl mt-5 konten">
    <div class="row">
        <div class="col-lg-9">
            <!-- <h2 class="text-center mb-7">Monografi Desa Plandi</h2> -->
            <h5 class="text-left mb-4 pb-2 border-bottom" id="profil">PROFIL DESA</h5>
            <h6>A. Umum</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 350px">1. Nama</td>
                    <td>: Desa Plandi</td>
                </tr>
                <tr>
                    <td style="width: 350px">2. Tahun Pembentukan</td>
                    <td>: 2002</td>
                </tr>
                <tr>
                    <td style="width: 350px">3. Nomor Kode Desa</td>
                    <td>: 3507322002</td>
                </tr>
                <tr>
                    <td style="width: 350px">4. Kecamatan</td>
                    <td>: Wonosari</td>
                </tr>
                <tr>
                    <td style="width: 350px">5. Kabupaten</td>
                    <td>: Malang</td>
                </tr>
                <tr>
                    <td style="width: 350px">6. Kode Pos</td>
                    <td>: 65164</td>
                </tr>
                <tr>
                    <td style="width: 350px">7. Jumlah RT/Jumlah RW</td>
                    <td>: 31 RT / 6 RW</td>
                </tr>
                <tr>
                    <td style="width: 350px">8. Jumlah Dusun</td>
                    <td>: 4 Dusun</td>
                </tr>
                <tr>
                    <td style="width: 350px">9. Tipologi</td>
                    <td>: Pegunungan, Sawah</td>
                </tr>
                <tr>
                    <td style="width: 350px">10. Jarak dari Pusat Pemerintahan Kota</td>
                    <td>: 1 sampai 2 jam</td>
                </tr>
            </table>
            <h6>B. Batas Wilayah</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 200px">1. Batas Utara</td>
                    <td>: Desa Plaosan</td>
                </tr>
                <tr>
                    <td style="width: 200px">2. Batas Selatan</td>
                    <td>: Desa Ngadirejo</td>
                </tr>
                <tr>
                    <td style="width: 200px">3. Batas Barat</td>
                    <td>: Desa Kluwut</td>
                </tr>
                <tr>
                    <td style="width: 200px">4. Batas Timur</td>
                    <td>: Desa Ngajum</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="pemerintahan">BIDANG PEMERINTAHAN</h5>
            <h6>A. Komponen Pemerintahan Desa dan Perangkat Desa</h6>
            <table class="table table-borderless table-sm">
                <tr>
                    <td style="width: 250px">1. Gedung Kantor<br>&emsp;&emsp;Alamat</td>
                    <td>: Ada<br>: lorem</td>
                </tr>
                <tr>
                    <td style="width: 250px">2. Balai Desa<br>&emsp;&emsp;Alamat</td>
                    <td>: Ada<br>: lorem</td>
                </tr>
                <tr>
                    <td style="width: 250px">3. Kepala Desa</td>
                    <td>: Drs. Sutisno, M.Pd.</td>
                </tr>
                <tr>
                    <td style="width: 250px">4. Sekretaris Desa</td>
                    <td>: Muhammad Ali Imron</td>
                </tr>
                <tr>
                    <td style="width: 250px">5. Kepala Urusan (3 Orang)<br>&emsp;&emsp;Tata Usaha dan Umum<br>&emsp;&emsp;Keuangan<br>&emsp;&emsp;Perencanaan</td>
                    <td><br>: Suyanto<br>: Marsidik Hendra Kurniawan<br>: Rohib Burhani</td>
                </tr>
                <tr>
                    <td style="width: 250px">6. Kepala Seksi (3 orang)<br>&emsp;&emsp;Pemerintahan<br>&emsp;&emsp;Kesejahteraan<br>&emsp;&emsp;Pelayanan</td>
                    <td><br>: Suprianto<br>: Ahmad Bajuri<br>: Ansori</td>
                </tr>
                <tr>
                    <td style="width: 250px">7. Kepala Dusun (4 orang)<br>&emsp;&emsp;Dusun Plandi<br>&emsp;&emsp;Dusun Selobekiti<br>&emsp;&emsp;Dusun Pandan Ploso<br>&emsp;&emsp;Dusun Tambakrejo</td>
                    <td><br>: Choiruroziqin<br>: Juri<br>: Siono<br>: Marsup</td>
                </tr>
                <tr>
                    <td style="width: 250px">8. Badan Permusyawaratan Desan</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">9. Pengaturan Kewenangan</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="teknologi">BASIS TEKNOLOGI INFORMASI / E-GOVERNMENT</h5>
            <h6>A. Ketersediaan</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Jaringan Internet</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Website Desa</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Perangkat Komputer</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h6>B. Administrasi</h6>
            <table class="table table-borderless table-sm">
                <tr>
                    <td style="width: 350px">1. Administrasi Berbasis Teknologi Informasi<br>&emsp;&emsp;Administrasi Umum<br>&emsp;&emsp;Administrasi Kependudukan<br>&emsp;&emsp;Administrasi Keuangan<br>&emsp;&emsp;Administrasi Pembangunan<br>&emsp;&emsp;Administrasi BPD<br>&emsp;&emsp;Administrasi Lainnya</td>
                    <td><br>: Tidak Ada<br>: Tidak Ada<br>: Ada<br>: Tidak Ada<br>: Tidak Ada<br>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">2. Perangkat Pengelola Teknologi Informasi</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">3. Tokoh Pemuda Teknopreneur di Tingkat RT/RW</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Perpustakaan</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Internet Gratis (Hotspot)</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="kemasyarakatan">BIDANG KEMASYARAKATAN</h5>
            <h6>A. Partisipasi Masyarakat</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 450px">Musyawarah Dusun</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Pendanaan Pembangunan Sarana Prasarana Masyarakat</td>
                    <td>: Belum Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Pengelolaan Pembangunan Sarana Prasarana Masyarakat</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Gotong Royong</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h6>B. Lembaga Kemasyarakatan</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 450px">Organisasi Pemuda</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Organisasi Profesi (Petani, Pedagang, Buruh, dll)</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Organisasi Olahraga</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">LPM atau Sebutan Lain</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Kelompok Gotong Royong</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Karang Taruna</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Lembaga Adat Kebudayaan dan Kesenian</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Kelompok Usaha</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Koperasi</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 450px">Organisasi Perempuan</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 350px">Realisasi 10 Program Kelompok</td>
                    <td>: Terealisasi dalam 1 kegiatan</td>
                </tr>
                <tr>
                    <td style="width: 350px">Kelengkapan Kelompok Kerja</td>
                    <td>: Lengkap</td>
                </tr>
                <tr>
                    <td style="width: 350px">Kelengkapan Kelompok Dasa Wisma</td>
                    <td>: Tidak Lengkap</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="keamanan">KEAMANAN DAN KETERTIBAN</h5>
            <h6>A. Pengamanan Lingkungan dan Manusia</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 350px">Kerjasama Pelestarian Lingkungan</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Pemantauan Limbah Perusahaan Pada Desa</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Kerjasama Daur Ulang Limbah</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Petugas Keamanan Lingkungan (LINMAS)</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 350px">Poskamling (Keamanan Lingkungan)</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h6>B. Konflik SARA</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Konflik Antar Kelompok</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Konflik Antar Suku</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Konflik Agama / Kepercayaan</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Konflik Antar Ras</td>
                    <td>: Tidak Ada</td>
                </tr>
            </table>
            <h6>C. Jumlah Kasus Narkoba, Perjudian, dan Sejenisnya</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Kasus Narkoba</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Perjudian</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Kekerasan Seksual</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Prostitusi</td>
                    <td>: Tidak Ada</td>
                </tr>
            </table>
            <h6>D. Kasus Lainnya</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Kasus Kekerasan Pada Rumah Tangga</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Perkelahian</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Pembunuhan</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Pencurian</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Kasus Penculikan</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">HIV/AIDS</td>
                    <td>: Tidak Ada</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="pendidikan">BIDANG PENDIDIKAN</h5>
            <h6>A. Buta Huruf</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Penduduk yang Tidak Bisa Baca Tulis</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h6>B. Belum / Putus Sekolah</h6>
            <table class="table table-borderless table-sm mb-4">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <tr>
                        <td style="width: 250px">Jumlah <?= $pendidikan[$i]->pendidikan ?></td>
                        <td>: <?= $pendidikan[$i]->jumlah ?></td>
                    </tr>
                <?php } ?>
            </table>
            <h6>C. Tamat Sekolah</h6>
            <table class="table table-borderless table-sm mb-4">
                <?php for ($i = 1; $i < 9; $i++) { ?>
                    <tr>
                        <td style="width: 250px">Jumlah <?= $pendidikan[$i]->pendidikan ?></td>
                        <td>: <?= $pendidikan[$i]->jumlah ?></td>
                    </tr>
                <?php } ?>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="ekonomi">BIDANG EKONOMI</h5>
            <h6>A. Mata Pencaharian</h6>
            <h6>B. Kelembagaan Ekonomi</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Pasar Tradisional</td>
                    <td>: Tidak Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Toko/Kios</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Pangkalan Ojek, Becak, dan Sejenisnya</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h6>C. Penanggulangan Kemiskinan</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Data Masyarakat Miskin</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Program Penanggulangan Kemiskinan</td>
                    <td>: Ada</td>
                </tr>
            </table>
            <h5 class="text-left mb-4 mt-5 pb-2 border-bottom" id="kesehatan">BIDANG KESEHATAN</h5>
            <h6>A. Fasilitas Kesehatan Lingkungan</h6>
            <table class="table table-borderless table-sm mb-4">
                <tr>
                    <td style="width: 250px">Puskesmas / Balai Pengobatan</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Bidan / Mantri / Dokter</td>
                    <td>: Ada</td>
                </tr>
                <tr>
                    <td style="width: 250px">Jamban Keluarga / MCK</td>
                    <td>: Tidak Ada</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-xl-2 border-left">
            <div class="container sticky-top" style="padding-top: 75px;">
                <h5 class="category">Navigasi</h5>
                <ul class="mb-4" style="list-style: none; padding: 0;">
                    <br>
                    <a class="category" href="#profil">
                        <li>Profil Desa</li>
                    </a>
                    <br>
                    <a class="category" href="#pemerintahan">
                        <li>Bidang Pemerintahan</li>
                    </a>
                    <br>
                    <a class="category" href="#teknologi">
                        <li>Bidang Teknologi Informasi</li>
                    </a>
                    <br>
                    <a class="category" href="#kemasyarakatan">
                        <li>Bidang Kemasyarakatan</li>
                    </a>
                    <br>
                    <a class="category" href="#keamanan">
                        <li>Bidang Keamanan</li>
                    </a>
                    <br>
                    <a class="category" href="#pendidikan">
                        <li>Bidang Pendidikan</li>
                    </a>
                    <br>
                    <a class="category" href="#ekonomi">
                        <li>Bidang Ekonomi</li>
                    </a>
                    <br>
                    <a class="category" href="#kesehatan">
                        <li>Bidang Kesehatan</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- batas contoh konten -->
<?= $this->endSection(); ?>