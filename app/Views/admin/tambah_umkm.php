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
            <div class="container-fluid">
                <form action="<?= base_url('Admin/tambahUMKM') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama UMKM</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" id="pemilik" name="pemilik" value="<?= old('pemilik') ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('pemilik'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" id="kontak" name="kontak" value="<?= old('kontak') ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('kontak'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= old('deskripsi') ?>">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= old('lokasi') ?>">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto UMKM</label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="readImg(this);">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="customFile">Pilih Foto...</label>
                        </div>
                        <div class="container my-3" style="text-align: center;">
                            <img id="hasil" src="#" alt="" class="img-thumbnail" style="max-height: 400px;">
                        </div>
                    </div>
                    <div class="row" style="text-align: right;">
                        <div class="col-md-6 p-2">
                            <a href="<?= base_url('admin/umkm') ?>" class="btn btn-outline-danger btn-block"> Batal</a>
                        </div>
                        <div class="col-md-6 p-2">
                            <input type="submit" class="btn btn-outline-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Show image preview -->
<script>
    function readImg(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            const labelfoto = document.querySelector('.custom-file-label');
            labelfoto.textContent = input.files[0].name;

            reader.onload = function(e) {
                $('#hasil')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $('#foto').on('change', function() {
            readURL(input);
        });
    });
</script>
<?= $this->endSection(); ?>