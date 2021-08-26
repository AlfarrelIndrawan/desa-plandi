<?=$this->extend('admin/headerfooter')?>
<?=$this->section('konten')?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card border-left-success shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="m-0 font-weight-bold text-success">UMKM</h3>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <a data-toggle="modal" data-target="#ModalTambah" type="button" class="btn btn-outline-success">Tambah UMKM</a>
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
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Pemilik</th>
                                    <th>Lokasi</th>
                                    <th>Kontak</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($umkm as $u) : ?>
                                    <tr>
                                        <td class="isi"><?= $u['id_umkm'] ?></td>
                                        <td class="isi"><?= $u['nama_umkm'] ?></td>
                                        <td class="isi"><?= $u['nama_pemilik'] ?></td>
                                        <td class="isi"><?= $u['lokasi'] ?></td>
                                        <td class="isi"><?= $u['kontak'] ?></td>
                                        <td class="isi"><?= $u['foto'] ?></td>
                                        <td class="isi">
                                            <a data-toggle="modal" data-target="#ModalEdit<?= $u['id_umkm'] ?>" href="#" class="btn btn-warning btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a data-toggle="modal" data-target="#ModalDelete<?= $u['id_umkm'] ?>" href="#" class="btn btn-danger btn-circle">
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
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

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
    <?php foreach ($umkm as $u) : ?>
        <div class="modal fade" id="ModalDelete<?= $u['id_umkm'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form>
                <input type="hidden" value="<?= $u['id_umkm'] ?>"></input>
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
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php endforeach; ?>
    <!-- batas modal delete -->

    <!-- Modal Edit-->
    <?php foreach ($umkm as $u) : ?>
        <div class="modal fade" data-backdrop="static" id="ModalEdit<?= $u['id_umkm'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="font-weight: bold; ">Edit UMKM</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnama" value="<?= $u['nama_umkm'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputpemilik" class="col-sm-2 col-form-label">Pemilik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputpemilik" value="<?= $u['nama_pemilik'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputdeskripsi" rows="10" required><?= $u['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputlokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputlokasi" value="<?= $u['lokasi'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputkontak" class="col-sm-2 col-form-label">kontak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputkontak" value="<?= $u['kontak'] ?>" required>
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="inputfoto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" id="inputfoto">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- batas modal edit -->

    <!-- Modal Tambah-->
    <div class="modal fade" data-backdrop="static" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="font-weight: bold; ">Tambah UMKM</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputnama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputpemilik" class="col-sm-2 col-form-label">Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputpemilik" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputdeskripsi" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputlokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputlokasi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputkontak" class="col-sm-2 col-form-label">kontak</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputkontak" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputfoto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="inputfoto">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- batas modal tambah -->
<?= $this->endSection();?>