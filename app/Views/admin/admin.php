<?= $this->extend('admin/headerfooter') ?>
<?= $this->section('konten') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
        <!-- Area Chart -->
    <div class="col-xl-11 col-lg-9">
        <?php if($user == "ad") { ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Admin</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Halaman ini digunakan oleh admin untuk mengatur data pada penduduk, UMKM, dan berita. Di sebelah kiri terdapat beberapa pilihan untuk ke halaman pengaturan masing-masing. Semua data berada pada database, admin bisa menambah, mengubah, dan menghapus data di masing-masing halaman pengaturan. Pada aksi terdapat edit dengan tombol berwarna kuning dan hapus dengan tombol berwarna merah. Terdapat tombol "Tambah" di atas tabel untuk menambah data pada tabel tersebut. Admin juga bisa menekan salah satu kolom untuk mengurutkan dari tertinggi ke terendah atau sebaliknya.<br>Admin bisa melakukan pencarian data pada kolom search. Show entries digunakan untuk berapa banyak data yang ingin ditampilkan dalam 1 halaman.</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Penduduk</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Pada tabel penduduk terdapat data penduduk di Desa Plandi. Terdiri dari data NIK, nama, jenis kelamin, tanggal lahir, agama, status perkawinan, pendidikan, dan pekerjaan. Data penduduk ini ditampilkan di halaman monografi desa dan juga dipakai untuk halaman layanan</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Berita</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Pada tabel berita digunakan untuk berita yang terjadi di Desa Plandi dan dimunculkan pada halaman beranda dan berita website. Terdiri dari data judul, tanggal masuk data, kategori yang terdiri dari desa dan umkm, dan foto. Tanggal otomatis diperbarukan saat data berita dimasukkan. Jika berita tidak mempunyai foto, maka secara otomatis terdapat foto bawaan di website.</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard UMKM</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Pada tabel UMKM digunakan untuk UMKM yang terjadi di Desa Plandi dan dimunculkan pada halaman UMKM website. Terdiri dari data nama UMKM, pemilik desa, lokasi desa, dan foto. Jika UMKM tidak mempunyai foto, maka secara otomatis terdapat foto bawaan di website.</p>
            </div>
        </div>
        <?php } ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Layanan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Pada halaman layanan surat, terdapat surat yang dikirim oleh penduduk desa Plandi. Terdapat tipe surat, nama pengaju surat, kontak pengaju surat, tanggal pengajuan, dan status pengajuan. Pada status pengajuan ketua RT bisa menyutujui surat yang menunggu persetujuan RT dan ketua RW bisa menyutujui surat yang menunggu persetujuan RW. Admin bisa mengkonfirmasi apakah surat sudah selesai atau belum.</p>
            </div>
        </div>
        
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Desa Plandi</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<?= $this->endSection(); ?>