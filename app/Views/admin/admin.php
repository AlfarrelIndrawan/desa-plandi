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
                <p>Halaman ini digunakan oleh admin untuk mengatur data penduduk, UMKM, dan berita. Pengaturan untuk masing-masing data bisa dilakukan dengan memilih opsi yang tersedia di sebelah kiri.<br>Semua data berada pada database. Admin bisa menambah, mengubah, dan menghapus data di masing-masing halaman pengaturan. Pada setiap baris data, terdapat dua tombol yang digunakan untuk melakukan pengaturan data tersebut. Tombol kuning digunakan untuk mengubah data, dan tombol merah digunakan untul menghapus data. Kemudian untuk menambah data, tekan tombol "Tambah" yang tertera pada tabel. Admin juga bisa menekan salah satu kolom untuk mengurutkan data. Data bisa diurutkan dari yang tertinggi ke yang terendah atau sebaliknya.<br>Admin bisa melakukan pencarian data pada kolom search. Tombol "Show Entries" digunakan untuk memilih berapa banyak data yang ingin ditampilkan dalam 1 halaman.</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Penduduk</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Tabel penduduk digunakan untuk menampilkan data penduduk di Desa Plandi. Setiap baris tabel terdiri atas data NIK, nama, jenis kelamin, tanggal lahir, agama, status perkawinan, pendidikan, dan pekerjaan. Data penduduk ini ditampilkan di halaman monografi dan layanan desa</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard Berita</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Tabel berita digunakan untuk memasukkan berita mengenai hal yang terjadi di Desa Plandi. Berita ini dimunculkan pada halaman beranda dan berita website. Setiap baris tabel terdiri atas data judul, tanggal masuk data, kategori (yang terdiri dari desa dan UMKM), dan foto. Bagian tanggal akan otomatis melakukan pembaruan saat data berita dimasukkan. Jika berita tidak mempunyai foto, secara otomatis sistem akan memasukkan foto bawaan pada website.</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard UMKM</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p>Tabel UMKM digunakan untuk menampilkan UMKM yang ada di Desa Plandi dan dimunculkan pada halaman UMKM website. Setiap baris tabel terdiri atas data nama UMKM, pemilik desa, lokasi desa, dan foto. Jika UMKM tidak mempunyai foto, secara otomatis sistem akan memasukkan foto bawaan pada website.</p>
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
                <p>Tabel layanan surat digunakan untuk menampilkan data surat yang dikirim oleh penduduk desa Plandi. Setiap baris tabel terdiri atas tipe surat, nama pengaju surat, kontak pengaju surat, tanggal pengajuan, dan status pengajuan. Pada status pengajuan, ketua RT bisa menyetujui surat yang menunggu persetujuan RT dan ketua RW bisa menyetujui surat yang menunggu persetujuan RW. Admin bisa mengonfirmasi apakah surat sudah disetujui atau belum.</p>
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