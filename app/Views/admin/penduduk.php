<?= $this->extend('admin/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- Begin Page Content -->
<style>
    td {
        font-size: 12px;
    }
</style>
<div class="container-fluid">
    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-weight-bold text-success">Penduduk</h3>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a href="<?= base_url('/admin/viewAddPenduduk') ?>" class="btn btn-outline-success">Tambah Penduduk</a>
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
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>TGL_Lahir</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penduduk as $p) : ?>
                            <tr>
                                <td class="isi"><?= $p['nik'] ?></td>
                                <td class="isi"><?= $p['nama'] ?></td>
                                <td class="isi"><?= $p['jk'] ?></td>
                                <td class="isi"><?= $p['tgl_lahir'] ?></td>
                                <td class="isi"><?= $p['agama'] ?></td>
                                <td class="isi"><?= $p['status'] ?></td>
                                <td class="isi"><?= $p['pendidikan'] ?></td>
                                <td class="isi"><?= $p['pekerjaan'] ?></td>
                                <td class="isi">
                                    <a href="<?= base_url('admin/viewEditPenduduk/' . $p['nik']) ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#ModalDelete<?= $p['nik'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
<?php foreach ($penduduk as $p) : ?>
    <div class="modal fade" id="ModalDelete<?= $p['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url('admin/hapusPenduduk/' . $p['nik']) ?>" method="GET">
            <div class="modal-dialog " role="document">
                <div class="modal-content border-left-danger">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih tombol "Hapus" dibawah jika anda yakin untuk menghapus penduduk dengan nama "<?= $p['nama'] ?>"</div>
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

<?= $this->endSection() ?>