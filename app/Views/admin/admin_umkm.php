<?= $this->extend('admin/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">UMKM</h3>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a href="<?= base_url('/admin/viewAddUMKM') ?>" class="btn btn-outline-success">Tambah UMKM</a>
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
                            <th>Nama</th>
                            <th>Pemilik</th>
                            <th>Lokasi</th>
                            <th>Kontak</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($umkm as $u) : ?>
                            <tr>
                                <td class="isi"><?= $count ?></td>
                                <td class="isi"><?= $u['nama_umkm'] ?></td>
                                <td class="isi"><?= $u['nama_pemilik'] ?></td>
                                <td class="isi"><?= $u['lokasi'] ?></td>
                                <td class="isi"><?= $u['kontak'] ?></td>
                                <td class="isi"><img src="<?= base_url('img/umkm/' . $u['foto']) ?>" alt="<?= $u['foto'] ?>" height="100px"></td>
                                <td class="isi">
                                    <a href="<?= base_url('/Admin/viewEditUMKM/' . $u['id_umkm']) ?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a data-toggle="modal" data-target="#ModalDelete<?= $u['id_umkm'] ?>" href="#" class="btn btn-danger btn-circle">
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



<!-- modal delete -->
<?php foreach ($umkm as $u) : ?>
    <div class="modal fade" id="ModalDelete<?= $u['id_umkm'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url('admin/umkm/delete/' . $u['id_umkm']) ?>" method="GET">
            <div class="modal-dialog " role="document">
                <div class="modal-content border-left-danger">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih tombol "Hapus" dibawah jika anda yakin untuk menghapus umkm dengan nama "<?= $u['nama_umkm'] ?>"</div>
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

<?= $this->endSection(); ?>