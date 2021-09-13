<?= $this->extend('admin/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-weight-bold text-success">Berita</h3>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a href="<?= base_url('Admin/viewAddBerita') ?>" class="btn btn-outline-success">Tambah Berita</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <style>
                        table {
                            text-align: center;
                        }

                        td.isi,
                        td.isi p {
                            padding: 5px;
                            vertical-align: middle;
                        }
                    </style>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($berita as $b) : ?>
                            <tr>
                                <td class="isi"><?= $count ?></td>
                                <td class="isi"><?= $b['judul'] ?></td>
                                <td class="isi"><?= $b['tanggal'] ?></td>
                                <td class="isi">
                                    <?= $b['kategori'] ?>
                                </td>
                                <td class="isi">
                                    <img src="<?= base_url('img/berita/' . $b['foto']) ?>" alt="<?= $b['foto'] ?>" height="100px">
                                </td>
                                <td class="isi">
                                    <a href="<?= base_url('admin/viewEditBerita/' . $b['id_berita']) ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#ModalDelete<?= $b['id_berita'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $count++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- batas modal logout -->

<!-- modal delete -->
<?php foreach ($berita as $b) : ?>
    <div class="modal fade" id="ModalDelete<?= $b['id_berita'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url('admin/hapusBerita/' . $b['id_berita']) ?>" method="GET">
            <div class="modal-dialog " role="document">
                <div class="modal-content border-left-danger">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih tombol "Hapus" dibawah jika anda yakin untuk menghapus Berita dengan judul <b>"<?= $b['judul'] ?>"</b></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-danger" value="Hapus">
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php endforeach; ?>
<!-- batas modal delete -->
<!-- batas modal tambah -->
<?= $this->endSection() ?>