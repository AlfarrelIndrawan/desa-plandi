<?php
    $this->extend('admin/headerfooter');
    $this->section('konten');
?>
<div class="container-fluid">

    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">EDIT UMKM</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="<?= base_url('admin/umkm/update/'.$umkm['id_umkm'])?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama UMKM</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $umkm['nama_umkm']?>">
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $umkm['nama_pemilik']?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $umkm['deskripsi']?>">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $umkm['lokasi']?>">
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $umkm['kontak']?>">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto UMKM</label><br>
                        <input type="file" id="foto" name="foto" onchange="readImg(this);"><br>
                        <img id="hasil" src="<?= base_url('/img/umkm/'.$umkm['foto'])?>" alt="">
                    </div>
                    <input type="submit" class="btn btn-outline-success">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Show image preview -->
<script>
    function readImg(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#hasil')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#foto').on('change', function () {
            readURL(input);
        });
    });
</script>
<?= $this->endSection();?>