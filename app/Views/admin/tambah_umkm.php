<?php
    $this->extend('admin/headerfooter');
    $this->section('konten');
?>
<div class="container-fluid">

    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">TAMBAH UMKM</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="<?= base_url('admin/umkm/tambah')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama UMKM</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control" id="kontak" name="kontak">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto UMKM</label><br>
                        <input type="file" id="foto" name="foto">
                    </div>
                    <input type="submit" class="btn btn-outline-success">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection();?>