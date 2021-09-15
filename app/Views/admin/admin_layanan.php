<?= $this->extend('admin/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-weight-bold text-success">Layanan Surat Menyurat</h3>
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
                            <th>Tipe Surat</th>
                            <th>Nama Pengaju</th>
                            <th>Kontak Pengaju</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($layanan as $l) : ?>
                            <tr>
                                <td class="isi"><?= $count ?></td>
                                <td class="isi"><?= $l['tipe_surat'] ?></td>
                                <td class="isi"><?= $l['nama_pengaju'] ?></td>
                                <td class="isi"><?= $l['kontak_pengaju'] ?></td>
                                <td class="isi"><?= $l['tanggal'] ?>
                                <td class="isi"><?= $l['status']?></td>
                                </td>
                                <td class="isi">
                                    <a href="<?= base_url('admin/informasiLengkap/' . $l['id_surat']) ?>" class="btn btn-secondary btn-circle">
                                        <i class="fas fa-user"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#ModalDelete<?= $l['id_surat'] ?>" class="btn btn-danger btn-circle">
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
<?php foreach ($layanan as $l) : ?>
    <div class="modal fade" id="ModalDelete<?= $l['id_surat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url('admin/hapusSurat/' . $l['id_surat']) ?>" method="GET">
            <div class="modal-dialog " role="document">
                <div class="modal-content border-left-danger">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih tombol "Hapus" dibawah jika anda yakin untuk menghapus surat milik <b>"<?= $l['nama_pengaju'] ?>"</b></div>
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