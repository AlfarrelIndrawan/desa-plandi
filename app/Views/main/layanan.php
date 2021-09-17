<?= $this->extend('main/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1><?=$judul?></h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- konten -->
<h2 class="judulKonten">Layanan Surat Internal Desa Plandi</h2>
<p class="deskripsiKonten">Selamat datang. Pada halaman ini anda dapat melakukan pelayanan surat menyurat internal desa plandi. Silahkan pilih jenis surat yang telah disediakan dibawah, untuk mengajukan surat pada desa. Isi form yang muncul sesuai dengan data dan kepentingan saudara.</p>

<div class="col-md-4 mx-auto" id="divSelectSurat">
    <label for="surat ">Pilih layanan surat</label>
    <select class="custom-select custom-select-;g mb-3" id="selectSurat" onchange="generateForm()">
      <option>Layanan Surat</option>
      <option value="surat_ijin_keramaian">Surat Ijin Keramaian</option>
      <option value="surat_keterangan_belum_nikah">Surat Keterangan Belum Nikah</option>
      <option value="surat_keterangan_kehilangan">Surat Keterangan Kehilangan</option>
      <option value="surat_keterangan_kelahiran">Surat Keterangan Kelahiran</option>
      <option value="surat_keterangan_kematian">Surat Keterangan Kematian</option>
      <option value="surat_keterangan_tidak_mampu">Surat Keterangan Tidak Mampu</option>
    </select>
</div>

<form class="col-md-4 mx-auto" method="POST" action="<?= base_url('Layanan/tambahSurat') ?>" id="form_surat"> </form>

<!-- batas konten -->

<link rel="stylesheet" type="text/css" href="<?= base_url('css/csslayanan.css') ?>">

<!-- script -->
<script>
    
    <?php if (isset($_SESSION['jenis_surat'])) { ?>

    var sel = document.getElementById("selectSurat");
    var opts = sel.options.length;
    var key = '<?php echo $_SESSION['jenis_surat']; ?>'

    for (var j=0; j<1; j++) {
        if (key !== null && key !== "") {
            for (var i=0; i<opts; i++){
                if (sel.options[i].value == key){
                    sel.options[i].selected = true;
                    generateForm();
                    break;
                }
            }
        }
    }

    <?php } ?>
    
    function generateForm() {
        
        var sel = document.getElementById("selectSurat");
        var val = sel.value;
        var target = document.getElementById("form_surat");

        switch (val) {

            // Surat ijin keramaian
            case "surat_ijin_keramaian":
                target.innerHTML = 
                '<h3>Surat Ijin Keramaian</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Ijin Keramaian"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal pelaksanaan acara</label>' +
                    '<input type="date" class="form-control <?= ($validation->hasError("date_form")) ? "is-invalid" : "";?>" id="date_form" name="date_form" value="<?= old('date_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('date_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu pelaksanaan acara</label>' +
                    '<input type="time" class="form-control <?= ($validation->hasError("time_form")) ? "is-invalid" : "";?>" id="time_form" name="time_form" value="<?= old('time_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('time_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hajat_form">Kepentingan hajat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("hajat_form")) ? "is-invalid" : "";?>" id="hajat_form" name="hajat_form" value="<?= old('hajat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('hajat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hiburan_form">Hiburan yang diadakan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("hiburan_form")) ? "is-invalid" : "";?>" id="hiburan_form" name="hiburan_form" value="<?= old('hiburan_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('hiburan_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan belum nikah
            case "surat_keterangan_belum_nikah":
                target.innerHTML = 
                '<h3>Surat Keterangan Belum Nikah</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Keterangan Belum Nikah"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat kehilangan
            case "surat_keterangan_kehilangan":
                target.innerHTML =
                '<h3>Surat Keterangan Kehilangan</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Keterangan Kehilangan"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal kehilangan</label>' +
                    '<input type="date" class="form-control <?= ($validation->hasError("date_form")) ? "is-invalid" : "";?>" id="date_form" name="date_form" value="<?= old('date_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('date_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu Kehilangan</label>' +
                    '<input type="time" class="form-control <?= ($validation->hasError("time_form")) ? "is-invalid" : "";?>" id="time_form" name="time_form" value="<?= old('time_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('time_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alasan_form">Alasan Kehilangan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alasan_form")) ? "is-invalid" : "";?>" id="alasan_form" name="alasan_form" value="<?= old('alasan_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alasan_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan kelahiran
            case "surat_keterangan_kelahiran":
                target.innerHTML =
                '<h3>Surat Keterangan Kelahiran</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Keterangan Kelahiran"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_ibu_form">Nomor Induk Kependudukan Ibu</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_ibu_form")) ? "is-invalid" : "";?>" id="nik_ibu_form" name="nik_ibu_form" value="<?= old('nik_ibu_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_ibu_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan Ayah</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="tempat_form">Tempat bayi dilahirkan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("tempat_form")) ? "is-invalid" : "";?>" id="tempat_form" name="tempat_form" value="<?= old('tempat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('tempat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal bayi dilahirkan</label>' +
                    '<input type="date" class="form-control <?= ($validation->hasError("date_form")) ? "is-invalid" : "";?>" id="date_form" name="date_form" value="<?= old('date_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('date_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu bayi dilahirkan</label>' +
                    '<input type="time" class="form-control <?= ($validation->hasError("time_form")) ? "is-invalid" : "";?>" id="time_form" name="time_form" value="<?= old('time_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('time_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="penolong_form">Penolong Bayi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("penolong_form")) ? "is-invalid" : "";?>" id="penolong_form" name="penolong_form" value="<?= old('penolong_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('penolong_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="panjang_bayi_form">Panjang bayi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("panjang_bayi_form")) ? "is-invalid" : "";?>" id="panjang_bayi_form" name="panjang_bayi_form" value="<?= old('panjang_bayi_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('panjang_bayi_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="berat_bayi_form">Berat bayi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("berat_bayi_form")) ? "is-invalid" : "";?>" id="berat_bayi_form" name="berat_bayi_form" value="<?= old('berat_bayi_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('berat_bayi_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan kematian
            case "surat_keterangan_kematian":
                target.innerHTML =
                '<h3>Surat Keterangan Kematian</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Keterangan Kematian"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal meninggal dunia</label>' +
                    '<input type="date" class="form-control <?= ($validation->hasError("date_form")) ? "is-invalid" : "";?>" id="date_form" name="date_form" value="<?= old('date_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('date_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu meninggal dunia</label>' +
                    '<input type="time" class="form-control <?= ($validation->hasError("time_form")) ? "is-invalid" : "";?>" id="time_form" name="time_form" value="<?= old('time_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('time_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="tempat_form">Tempat meninggal dunia</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("tempat_form")) ? "is-invalid" : "";?>" id="tempat_form" name="tempat_form" value="<?= old('tempat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('tempat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="penyebab_form">Penyebab meninggal dunia</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("penyebab_form")) ? "is-invalid" : "";?>" id="penyebab_form" name="penyebab_form" value="<?= old('penyebab_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('penyebab_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan tidak mampu
            case "surat_keterangan_tidak_mampu":
                target.innerHTML =
                '<h3>Surat Keterangan Tidak Mampu</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="tipe_surat" value="Surat Keterangan Tidak Mampu"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nik_form")) ? "is-invalid" : "";?>" id="nik_form" name="nik_form" value="<?= old('nik_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nik_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="kepentingan_form">Kepentingan digunakannya surat keterangan tidak mampu</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("kepentingan_form")) ? "is-invalid" : "";?>" id="kepentingan_form" name="kepentingan_form" value="<?= old('kepentingan_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('kepentingan_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nama_form">Nama warga yang diajukan</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("nama_form")) ? "is-invalid" : "";?>" id="nama_form" name="nama_form" value="<?= old('nama_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('nama_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alamat_form">Alamat</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("alamat_form")) ? "is-invalid" : "";?>" id="alamat_form" name="alamat_form" value="<?= old('alamat_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('alamat_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rt_form">RT</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rt_form")) ? "is-invalid" : "";?>" id="rt_form" name="rt_form" value="<?= old('rt_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rt_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                    '<label for="rw_form">RW</label>' +
                    '<input type="number" class="form-control <?= ($validation->hasError("rw_form")) ? "is-invalid" : "";?>" id="rw_form" name="rw_form" value="<?= old('rw_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('rw_form'); ?>' +
                    '</div>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="contact_form">No. HP yang bisa dihubungi</label>' +
                    '<input type="text" class="form-control <?= ($validation->hasError("contact_form")) ? "is-invalid" : "";?>" id="contact_form" name="contact_form" value="<?= old('contact_form') ?>"></input>' +
                    '<div class="invalid-feedback">' +
                        '<?= $validation->getError('contact_form'); ?>' +
                    '</div>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            default:
                target.innerHTML = '';
                break;
        }
    }
</script>
<!-- batas script -->

<?= $this->endSection() ?>