<?php
$this->extend('admin/headerfooter');
$this->section('konten');
?>
<div class="container-fluid">
    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">EDIT BERITA</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="<?= base_url('admin/editBerita/' . $berita['id_berita']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul Berita</label>
                        <input value="<?= old('judul', $berita['judul']) ?>" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="berita">Isi Berita</label>
                        <textarea class="form-control <?= ($validation->hasError('berita')) ? 'is-invalid' : ''; ?>" rows="10" id="berita" name="berita"><?= old('berita', $berita['berita']) ?></textarea>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('berita'); ?>
                        </div>
                        <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace('berita', {
                                // Define the toolbar groups as it is a more accessible solution.
                                toolbarGroups: [{
                                        "name": "document",
                                        "groups": ["mode", "document", "doctools"]
                                    },
                                    {
                                        "name": "clipboard",
                                        "groups": ["clipboard", "undo"]
                                    },
                                    {
                                        "name": "editing",
                                        "groups": ['find', 'selection', 'spellchecker', 'editing']
                                    },
                                    {
                                        'name': 'forms',
                                        'groups': ['forms']
                                    },
                                    {
                                        'name': 'basicstyles',
                                        'groups': ['basicstyles', 'cleanup']
                                    },
                                    {
                                        'name': 'paragraph',
                                        'groups': ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
                                    },
                                    {
                                        'name': 'links',
                                        'groups': ['links']
                                    },
                                    {
                                        'name': 'styles',
                                        'groups': ['styles']
                                    },
                                    {
                                        'name': 'insert',
                                        'groups': ['insert']
                                    },
                                    {
                                        'name': 'colors',
                                        'groups': ['colors']
                                    },
                                    {
                                        'name': 'tools',
                                        'groups': ['tools']
                                    },
                                    {
                                        'name': 'others',
                                        'groups': ['others']
                                    },
                                    {
                                        'name': 'about',
                                        'groups': ['about']
                                    }
                                ],

                                'removeButtons': 'Source,Save,NewPage,ExportPdf,Preview,Print,Templates,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CreateDiv,Language,Anchor,Flash,Smiley,PageBreak,Iframe,About'
                            });
                        </script>

                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <?php if (old('berita', $berita['berita']) == 'umkm') { ?>
                                <option value="umkm" ?="selected = 'selected'" ?>UMKM</option>
                                <option value="desa">Desa</option>
                            <?php } else { ?>
                                <option value="desa" ?="selected = 'selected'" ?>Desa</option>
                                <option value="umkm">UMKM</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Berita</label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="readImg(this);">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <?php
                            if ($berita['foto'] == 'default.jpeg') {
                            ?>
                                <label class="custom-file-label" for="customFile">Pilih Gambar...</label>

                            <?php } else { ?>
                                <label class="custom-file-label" for="customFile"><?= $berita['foto'] ?></label>
                            <?php }
                            ?>

                        </div>
                        <div class="container my-3" style="text-align: center;">
                            <?php
                            if ($berita['foto'] == 'default.jpeg') {
                            ?>
                                <img id="hasil" src="" alt="" class="img-thumbnail" style="max-height: 400px;">

                            <?php } else { ?>
                                <img id="hasil" src="<?= base_url('/img/berita/' . $berita['foto']) ?>" alt="" class="img-thumbnail" style="max-height: 400px;">
                            <?php }
                            ?>
                        </div>
                    </div>
                    <div class="row" style="text-align: right;">
                        <div class="col-md-6 p-2">
                            <a href="<?= base_url('admin/berita') ?>" class="btn btn-outline-danger btn-block"> Batal</a>
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
<?= $this->endSection(); ?>