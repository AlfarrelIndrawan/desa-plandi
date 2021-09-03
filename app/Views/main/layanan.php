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
<div class="col-md-4 center">
    <label for="surat ">Pilih layanan surat</label>
    <select class="custom-select custom-select-;g mb-3" id="selectSurat" onchange="myFunction()">
      <option selected>Layanan Surat</option>
      <option value="1">Surat Ijin Keramaian</option>
      <option value="2">Surat Keterangan Belum Nikah</option>
      <option value="3">Surat Keterangan Kehilangan</option>
      <option value="4">Surat Keterangan Kelahiran</option>
      <option value="5">Surat Keterangan Kematian</option>
      <option value="6">Surat Keterangan Tidak Mampu</option>
    </select>
</div>

<form class="col-md-4" action="" id="form_surat"></form>

<p id="boundary">Just some boundary to make a form</p>
<!-- batas konten -->

<!-- script -->
<script>
    function myFunction() {

        var sel = document.getElementById("selectSurat");
        var val = sel.value;
        var target = document.getElementById("form_surat");

        switch (val) {

            // Surat ijin keramaian
            case "1":
                target.innerHTML = 
                '<h3>Surat Ijin Keramaian</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal pelaksanaan acara</label>' +
                    '<input type="date" class="form-control" id="date_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu pelaksanaan acara</label>' +
                    '<input type="time" class="form-control" id="time_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hajat_form">Kepentingan hajat</label>' +
                    '<input type="text" class="form-control" id="hajat_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hiburan_form">Hiburan yang diadakan</label>' +
                    '<input type="text" class="form-control" id="hiburan_form" name=""></input>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan belum nikah
            case "2":
                target.innerHTML = 
                '<h3>Surat Keterangan Belum Nikah</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form" name=""></input>' +
                '</div>' +
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat kehilangan
            case "3":
                target.innerHTML =
                '<h3>Surat Keterangan Kehilangan</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal kehilangan</label>' +
                    '<input type="date" class="form-control" id="date_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu Kehilangan</label>' +
                    '<input type="time" class="form-control" id="time_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="alasan_form">Alasan Kehilangan</label>' +
                    '<input type="text" class="form-control" id="alasan_form" name=""></input>' +
                '</div>' +
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan kelahiran
            case "4":
                target.innerHTML =
                '<h3>Surat Keterangan Kelahiran</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_ibu_form">Nomor Induk Kependudukan Ibu</label>' +
                    '<input type="text" class="form-control" id="nik_ibu_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_ayah_form">Nomor Induk Kependudukan Ayah</label>' +
                    '<input type="text" class="form-control" id="nik_ayah_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="tempat_form">Tempat bayi dilahirkan</label>' +
                    '<input type="text" class="form-control" id="tempat_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal bayi dilahirkan</label>' +
                    '<input type="date" class="form-control" id="date_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu bayi dilahirkan</label>' +
                    '<input type="time" class="form-control" id="time_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="penolong_form">Penolong Bayi</label>' +
                    '<input type="text" class="form-control" id="penolong_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="panjang_bayi_form">Panjang bayi</label>' +
                    '<input type="text" class="form-control" id="panjang_bayi_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="berat_bayi_form">Berat bayi</label>' +
                    '<input type="text" class="form-control" id="berat_bayi_form" name=""></input>' +
                '</div>' +
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan kematian
            case "5":
                target.innerHTML =
                '<h3>Surat Keterangan Kematian</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal meninggal dunia</label>' +
                    '<input type="date" class="form-control" id="date_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu meninggal dunia</label>' +
                    '<input type="time" class="form-control" id="time_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="tempat_form">Tempat meninggal dunia</label>' +
                    '<input type="text" class="form-control" id="tempat_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="penyebab_form">Penyebab meninggal dunia</label>' +
                    '<input type="text" class="form-control" id="penyebab_form" name=""></input>' +
                '</div>' +
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
            
            // Surat keterangan tidak mampu
            case "6":
                target.innerHTML =
                '<h3>Surat Keterangan Tidak Mampu</h3>' +
                '<div class="form-group">' +
                    '<input type="hidden" id="tipe_surat" name="" value=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="kepentingan_form">Kepentingan digunakannya surat keterangan tidak mampu</label>' +
                    '<input type="text" class="form-control" id="kepentingan_form" name=""></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="nama_form">Nama warga yang diajukan</label>' +
                    '<input type="text" class="form-control" id="nama_form" name=""></input>' +
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