<?php
$this->extend('admin/headerfooter');
$this->section('konten');
?>
<div class="container-fluid">
    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">EDIT PENDUDUK</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="<?= base_url('admin/editPenduduk/' . $penduduk['nik']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input value="<?= old('nama', $penduduk['nama']) ?>" type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <?php if (old('jk', $penduduk['jk']) == 'P') { ?>
                                <option value="P" ?="selected = 'selected'" ?>P</option>
                                <option value="L">L</option>
                            <?php } else { ?>
                                <option value="L" ?="selected = 'selected'" ?>L</option>
                                <option value="P">P</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input value="<?= old('tgl_lahir', $penduduk['tgl_lahir']) ?>" type="date" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="tgl_lahir" name="tgl_lahir">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('tgl_lahir'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama" name="agama">
                            <?php if (old('agama', $penduduk['agama']) == 'Islam') { ?>
                                <option value="Islam" ?="selected = 'selected'" ?>Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            <?php } elseif(old('agama', $penduduk['agama']) == 'Kristen') { ?>
                                <option value="Islam">Islam</option>
                                <option value="Kristen" ?="selected = 'selected'" ?>Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            <?php } elseif(old('agama', $penduduk['agama']) == 'Katolik') { ?>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik" ?="selected = 'selected'" ?>Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            <?php } elseif(old('agama', $penduduk['agama']) == 'Protestan') { ?>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan" ?="selected = 'selected'" ?>Protestan</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            <?php } elseif(old('agama', $penduduk['agama']) == 'Buddha') { ?>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Buddha" ?="selected = 'selected'" ?>Buddha</option>
                                <option value="Hindu">Hindu</option>
                            <?php } elseif(old('agama', $penduduk['agama']) == 'Hindu') { ?>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu" ?="selected = 'selected'" ?>Hindu</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                        <?php if (old('status', $penduduk['status']) == 'Belum Kawin') { ?>
                                <option value="Belum Kawin" ?="selected = 'selected'" ?>Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Kawin">Kawin</option>
                            <?php } elseif(old('status', $penduduk['status']) == 'Cerai Hidup') { ?>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup" ?="selected = 'selected'" ?>Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Kawin">Kawin</option>
                            <?php } elseif(old('status', $penduduk['status']) == 'Cerai Mati') { ?>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati" ?="selected = 'selected'" ?>Cerai Mati</option>
                                <option value="Kawin">Kawin</option>
                            <?php } elseif(old('status', $penduduk['status']) == 'Kawin') { ?>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Kawin" ?="selected = 'selected'" ?>Kawin</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" id="pendidikan" name="pendidikan">
                        <?php if (old('pendidikan', $penduduk['pendidikan']) == 'Tidak/Belum Sekolah') { ?>
                                <option value="Tidak/Belum Sekolah" ?="selected = 'selected'" ?>Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Belum Tamat SD/Sederajat') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat" ?="selected = 'selected'" ?>Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Tamat SD/Sederajat') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat" ?="selected = 'selected'" ?>Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'SLTP/Sederajat') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat" ?="selected = 'selected'" ?>SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'SLTA/Sederajat') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat" ?="selected = 'selected'" ?>SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Diploma I/II') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II" ?="selected = 'selected'" ?>Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Akademi/Diploma III/S.Muda') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda" ?="selected = 'selected'" ?>Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Diploma IV/Strata I') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I" ?="selected = 'selected'" ?>Diploma IV/Strata I</option>
                                <option value="Strata II">Strata II</option>
                            <?php } elseif(old('pendidikan', $penduduk['pendidikan']) == 'Strata II') { ?>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Diploma I/II">Diploma I/II</option>
                                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                <option value="Strata II" ?="selected = 'selected'" ?>Strata II</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                        <?php if (old('pekerjaan', $penduduk['pekerjaan']) == 'BELUM/TIDAK BEKERJA') { ?>
                                <option value="BELUM/TIDAK BEKERJA" ?="selected = 'selected'" ?>BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'BIDAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN" ?="selected = 'selected'" ?>BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'BURUH HARIAN LEPAS') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS" ?="selected = 'selected'" ?>BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'BURUH PETERNAKAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN" ?="selected = 'selected'" ?>BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'BURUH TANI/PERKEBUNAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN" ?="selected = 'selected'" ?>BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'DOKTER') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER" ?="selected = 'selected'" ?>DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'GURU') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU" ?="selected = 'selected'" ?>GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'INDUSTRI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI" ?="selected = 'selected'" ?>INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'KARYAWAN HONORER') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER" ?="selected = 'selected'" ?>KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'KARYAWAN SWASTA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA" ?="selected = 'selected'" ?>KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'KEPALA DESA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA" ?="selected = 'selected'" ?>KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'KEPOLISIAN RI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI" ?="selected = 'selected'" ?>KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'KONSTRUKSI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI" ?="selected = 'selected'" ?>KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'MENGURUS RUMAH TANGGA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA" ?="selected = 'selected'" ?>MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PENSIUNAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN" ?="selected = 'selected'" ?>PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PERANGKAT DESA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA" ?="selected = 'selected'" ?>PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PERAWAT') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT" ?="selected = 'selected'" ?>PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PERDAGANGAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN" ?="selected = 'selected'" ?>PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PETANI/PEKEBUN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN" ?="selected = 'selected'" ?>PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'PETERNAK') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK" ?="selected = 'selected'" ?>PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'SENIMAN') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN" ?="selected = 'selected'" ?>SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'SOPIR') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR" ?="selected = 'selected'" ?>SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TENTARA NASIONAL INDONESIA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA" ?="selected = 'selected'" ?>TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TRANSPORTASI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI" ?="selected = 'selected'" ?>TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG BATU') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU" ?="selected = 'selected'" ?>TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG GIGI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI" ?="selected = 'selected'" ?>TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG JAHIT') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT" ?="selected = 'selected'" ?>TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG KAYU') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU" ?="selected = 'selected'" ?>TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG LAS/PANDAI BESI') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI" ?="selected = 'selected'" ?>TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG LISTRIK') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK" ?="selected = 'selected'" ?>TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'TUKANG SOL SEPATU') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU" ?="selected = 'selected'" ?>TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'USTADZ/MUBALIGH') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH" ?="selected = 'selected'" ?>USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'WIRASWASTA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA" ?="selected = 'selected'" ?>WIRASWASTA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            <?php } elseif(old('pekerjaan', $penduduk['pekerjaan']) == 'LAINNYA') { ?>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="BIDAN">BIDAN</option>
                                <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER">DOKTER</option>
                                <option value="GURU">GURU</option>
                                <option value="INDUSTRI">INDUSTRI</option>
                                <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA">KEPALA DESA</option>
                                <option value="KEPOLISIAN RI">KEPOLISIAN RI</option>
                                <option value="KONSTRUKSI">KONSTRUKSI</option>
                                <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                <option value="PEDAGANG">PEDAGANG</option>
                                <option value="PEGEWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                <option value="PERAWAT">PERAWAT</option>
                                <option value="PERDAGANGAN">PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                <option value="PETERNAK">PETERNAK</option>
                                <option value="SENIMAN">SENIMAN</option>
                                <option value="SOPIR">SOPIR</option>
                                <option value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                <option value="TRANSPORTASI">TRANSPORTASI</option>
                                <option value="TUKANG BATU">TUKANG BATU</option>
                                <option value="TUKANG GIGI">TUKANG GIGI</option>
                                <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                <option value="TUKANG KAYU">TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                <option value="WIRASWASTA">WIRASWASTA</option>
                                <option value="LAINNYA" ?="selected = 'selected'" ?>LAINNYA</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row" style="text-align: right;">
                        <div class="col-md-6 p-2">
                            <a href="<?= base_url('admin/penduduk') ?>" class="btn btn-outline-danger btn-block"> Batal</a>
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