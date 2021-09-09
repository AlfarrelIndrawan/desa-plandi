<?=$this->extend('admin/headerfooter')?>
<?=$this->section('konten')?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?= $pager->links('penduduk', 'pagination_custom') ?>

            <div class="card border-left-success shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="font-weight-bold text-success">Penduduk</h3>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <a data-toggle="modal" data-target="#ModalTambah" class="btn btn-outline-success">Tambah Penduduk</a>
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
                                            <a href="#" data-toggle="modal" data-target="#ModalEdit<?= $p['nik'] ?>" class="btn btn-warning btn-circle">
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
            <form>
                <input type="hidden" value="<?= $p['nik'] ?>"></input>
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
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php endforeach; ?>
    <!-- batas modal delete -->

    <!-- Modal Edit-->
    <?php foreach ($penduduk as $p) : ?>
        <div class="modal fade" data-backdrop="static" id="ModalEdit<?= $p['nik'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="font-weight: bold; ">Edit Penduduk</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnik" value="<?= $p['nik'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnama" value="<?= $p['nama'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputkelamin" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="inputkelamin" value="<?= $p['jk'] ?>">
                                        <?php if ($p['jk'] == 'L') { ?>
                                            <option value="L" ?="selected = 'selected'" ?>L</option>
                                            <option value="P">Desa</option>
                                        <?php } else { ?>
                                            <option value="P" ?="selected = 'selected'" ?>P</option>
                                            <option value="L"></option>
                                        <?php } ?>
                                    </select>
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
                    <h3 class="modal-title" id="exampleModalLabel" style="font-weight: bold; ">Tambah Berita</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputjudul" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputberita" class="col-sm-2 col-form-label">Berita</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputberita" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputkategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputkategori">
                                    <option value="desa">Desa</option>
                                    <option value="umkm">UMKM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputfoto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="inputfoto" required>
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
<?=$this->endSection()?>