<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" <?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('asset/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('img/logomalang.png') ?>" width="37px" height="45px"></img>
                </div>
                <div class="sidebar-brand-text mx-3">Desa Plandi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user"></i>
                    <span>Penduduk</span>
                </a>

            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsekonten" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Konten</span>
                </a>
                <div id="collapsekonten" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Konten:</h6>
                        <a class="collapse-item" href="<?= base_url('/Admin/umkm') ?>">UMKM</a>
                        <a class="collapse-item" href="<?= base_url('/Admin/berita') ?>">Berita</a>
                        <a class="collapse-item" href="<?= base_url('/Admin/potensi') ?>">Potensi</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('img/undraw_profile.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card border-left-success shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="font-weight-bold text-success">Berita</h3>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <a data-toggle="modal" data-target="#ModalTambah" class="btn btn-outline-success">Tambah Berita</a>
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
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Penulis</th>
                                            <th>Kategori</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($berita as $b) : ?>
                                            <tr>
                                                <td class="isi"><?= $b['id_berita'] ?></td>
                                                <td class="isi"><?= $b['judul'] ?></td>
                                                <td class="isi"><?= $b['tanggal'] ?></td>
                                                <td class="isi"><?= $b['penulis'] ?></td>
                                                <td class="isi">
                                                    <?= $b['kategori'] ?>
                                                </td>
                                                <td class="isi">
                                                    <?= $b['foto'] ?>
                                                </td>
                                                <td class="isi">
                                                    <a href="#" data-toggle="modal" data-target="#ModalDelete<?= $b['id_berita'] ?>" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#ModalEdit<?= $b['id_berita'] ?>" class="btn btn-warning btn-circle">
                                                        <i class="fas fa-edit"></i>
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
    <?php foreach ($berita as $b) : ?>
        <div class="modal fade" id="ModalDelete<?= $b['id_berita'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form>
                <input type="hidden" value="<?= $b['id_berita'] ?>"></input>
                <div class="modal-dialog " role="document">
                    <div class="modal-content border-left-danger">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin Menghapus ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Pilih tombol "Hapus" dibawah jika anda yakin untuk menghapus berita dengan judul "<?= $b['judul'] ?>"</div>
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
    <?php foreach ($berita as $b) : ?>
        <div class="modal fade" data-backdrop="static" id="ModalEdit<?= $b['id_berita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="font-weight: bold; ">Edit Berita</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputjudul" value="<?= $b['judul'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputberita" class="col-sm-2 col-form-label">Berita</label>
                                <div class="col-sm-10">
                                    <textarea required class="form-control" id="inputberita" rows="10"><?= $b['berita'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputkategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="inputkategori" value="<?= $b['kategori'] ?>">
                                        <?php if ($b['kategori'] == 'umkm') { ?>
                                            <option value="umkm" ?="selected = 'selected'" ?>UMKM</option>
                                            <option value="desa">Desa</option>
                                        <?php } else { ?>
                                            <option value="desa" ?="selected = 'selected'" ?>Desa</option>
                                            <option value="umkm">UMKM</option>
                                        <?php } ?>
                                    </select>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('asset/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('asset/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('js/demo/datatables-demo.js') ?>"></script>

</body>

</html>