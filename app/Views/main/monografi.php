<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten')?>
    
    <!-- judul konten -->
    <div class="container-fluid judulkonten">
        <div class="container-xl" >
            <h1><?=$judul?></h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <!-- contoh konten -->
    <div class="container-md konten">
        <h3 class="pb-3 mb-5 border-bottom">
        <style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>NIK</th><th>NAMA</th><th>JK</th><th>TGL_LAHIR</th><th>AGAMA</th><th>STATUS</th><th>PENDIDIKAN</th><th>PEKERJAAN</th></tr></thead><tbody>
 <tr><td>3507325008250001</td><td>WARIYAH</td><td>P</td><td>10/08/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322204640004</td><td>SIONO</td><td>L</td><td>22/04/1964</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507324206570001</td><td>MESILAH</td><td>P</td><td>02/06/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326511880002</td><td>SITI MUTMAINAH</td><td>P</td><td>25/11/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321801400001</td><td>KASMURI</td><td>L</td><td>18/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325003450001</td><td>SARI</td><td>P</td><td>10/03/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320607720003</td><td>SULAIMAN</td><td>L</td><td>06/07/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321208690001</td><td>DARNO</td><td>L</td><td>12/08/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324604740001</td><td>NURIANAH</td><td>P</td><td>06/04/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325302950001</td><td>SELFI KUMALASARI</td><td>P</td><td>13/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507327012040001</td><td>LIDYA FRANSISKA</td><td>P</td><td>30/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321912750001</td><td>HERI KISWANTO</td><td>L</td><td>19/12/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008810001</td><td>TITIK SUIM</td><td>P</td><td>20/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325110020001</td><td>WIDIA ANJARSARI</td><td>P</td><td>11/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325902090001</td><td>RERE AILA FEBRIYANI</td><td>P</td><td>19/02/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324512100001</td><td>IRMA EXMA NURVITA</td><td>P</td><td>05/12/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322804730003</td><td>SATIRUN</td><td>L</td><td>28/04/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324109740001</td><td>MUSLIMATUS SA'DIYAH</td><td>P</td><td>01/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326709000003</td><td>ELLIX DIARON</td><td>P</td><td>27/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320609070001</td><td>MUHAMMAD ALDY</td><td>L</td><td>06/09/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321207710003</td><td>ISDIONO</td><td>L</td><td>12/07/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324407750004</td><td>ANGGITA ISTIANINGRUM</td><td>P</td><td>04/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325911020001</td><td>JENICE SETIANINGRUM</td><td>P</td><td>19/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320906050001</td><td>REVALDO ANDI SAPUTRA</td><td>L</td><td>09/06/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322306680001</td><td>AHMAT ALI ELSA</td><td>L</td><td>23/06/1968</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008680002</td><td>SWATIN</td><td>P</td><td>20/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321406720002</td><td>RUDI HARTONO</td><td>L</td><td>14/06/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326306820002</td><td>ISMAWATI</td><td>P</td><td>23/06/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320208950001</td><td>NIKO PRATAMA SAPUTRA</td><td>L</td><td>02/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324806020001</td><td>HELMA TEANIKA</td><td>P</td><td>08/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322810620001</td><td>KHUSNUL MUSTAKIM</td><td>L</td><td>28/10/1962</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326205710001</td><td>SITI ZULAICHA</td><td>P</td><td>22/05/1971</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326603920001</td><td>AFIFATULMIA MUTTAQIN</td><td>P</td><td>26/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>GURU</td></tr>
 <tr><td>3507322702950001</td><td>ARIF TIRTANA MUTTAQIN</td><td>L</td><td>27/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322711040003</td><td>MUHAMAD FARHAN G M</td><td>L</td><td>27/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324507690001</td><td>SUJARWATI</td><td>P</td><td>05/07/1969</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507320911900002</td><td>HENDRA PURNAWAN</td><td>L</td><td>09/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322101970002</td><td>DEDIK WIBOWO</td><td>L</td><td>21/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321212650003</td><td>SUKIRMAN</td><td>L</td><td>12/12/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324704680002</td><td>SUTINI</td><td>P</td><td>07/04/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322211850003</td><td>KRISGIANTO</td><td>L</td><td>22/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326905920002</td><td>SULISTYANINGSIH</td><td>P</td><td>29/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321302750002</td><td>WAGISAN</td><td>L</td><td>13/02/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324106750002</td><td>KARSI</td><td>P</td><td>01/06/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808960002</td><td>SRI IKAWATI</td><td>P</td><td>08/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324202000003</td><td>AYU SOFIANI</td><td>P</td><td>02/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324207820001</td><td>SU'IM</td><td>P</td><td>02/07/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321505450002</td><td>WAJAB</td><td>L</td><td>15/05/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324607520001</td><td>JASENI</td><td>P</td><td>06/07/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324607720003</td><td>JUMAIYAH</td><td>P</td><td>06/07/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320709810001</td><td>RONY ADI PRASETYO</td><td>L</td><td>07/09/1981</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326306820001</td><td>ISTIANI</td><td>P</td><td>23/06/1982</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320306680002</td><td>SAMIN</td><td>L</td><td>03/06/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326910810002</td><td>HARTINI</td><td>P</td><td>29/10/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320404000004</td><td>NORAWAN</td><td>L</td><td>04/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320507570004</td><td>ANWAR</td><td>L</td><td>05/07/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107620005</td><td>SAMINI</td><td>P</td><td>01/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321203790003</td><td>MARSID</td><td>L</td><td>12/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326011840001</td><td>IKA FATMAWATI</td><td>P</td><td>20/11/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326102070001</td><td>ANA BILA SIDKA </td><td>P</td><td>21/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320704090002</td><td>MUHAMAD RIDHO</td><td>L</td><td>07/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320509700004</td><td>YUDI</td><td>L</td><td>05/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008790003</td><td>KASIH WULANDARI</td><td>P</td><td>20/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326004040003</td><td>RIRIS RISWANDA</td><td>P</td><td>20/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321503050003</td><td>AGIL SUBAKTI</td><td>L</td><td>15/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321603780004</td><td>SLAMET WIDODO</td><td>L</td><td>16/03/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326809880002</td><td>TRIANAH</td><td>P</td><td>28/09/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326007060001</td><td>CHECA JULIAN MELANDRI</td><td>P</td><td>20/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321012740002</td><td>PURNOMO</td><td>L</td><td>10/12/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507325406840003</td><td>YENI WULANDARI</td><td>P</td><td>14/06/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327107100001</td><td>TITIS HIKMATUL PRATIWI</td><td>P</td><td>31/07/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326412710001</td><td>MUNTIAH</td><td>P</td><td>24/12/1971</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322205750001</td><td>SOLIKIN</td><td>L</td><td>22/05/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326905780002</td><td>SUSWATI</td><td>P</td><td>29/05/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324206020001</td><td>SHALLSABELLA RENATA PUTRI</td><td>P</td><td>02/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321010710006</td><td>SUNDARIANTO</td><td>L</td><td>10/10/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324809660001</td><td>PONSIYATUN</td><td>P</td><td>08/09/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322805960001</td><td>ARIF WAHYUDI</td><td>L</td><td>28/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321512760001</td><td>SUROSO</td><td>L</td><td>15/12/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507760005</td><td>HARTATI</td><td>P</td><td>15/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>INDUSTRI</td></tr>
 <tr><td>3507322712020005</td><td>JOKO WINAHYU</td><td>L</td><td>27/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320506270001</td><td>SARMAN</td><td>L</td><td>05/06/1927</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325507420001</td><td>KARSITIN</td><td>P</td><td>15/07/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507323005790002</td><td>SUSIANTO PRABOWO</td><td>L</td><td>30/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325806860005</td><td>YESI ELMA SOFIANA</td><td>P</td><td>18/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320303090001</td><td>AXEL MARRIK DIONEZ PRABOWO</td><td>L</td><td>03/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320110780001</td><td>SUWANDI</td><td>L</td><td>01/10/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324811810003</td><td>SUKESI</td><td>P</td><td>08/11/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325606020001</td><td>SILVIA NEFI YUSSNIA</td><td>P</td><td>16/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322808420001</td><td>MUKSAN</td><td>L</td><td>28/08/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325708460001</td><td>SAMI</td><td>P</td><td>17/08/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325005790001</td><td>SRI SUTRISNANINGSIH</td><td>P</td><td>10/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323005890001</td><td>MIKE DWI SASMITO</td><td>L</td><td>30/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321209450004</td><td>SUJA'I</td><td>L</td><td>12/09/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325311710001</td><td>RIBUT HARIATI</td><td>P</td><td>13/11/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320607830002</td><td>TRI HANDOKO</td><td>L</td><td>06/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321308550003</td><td>SUWITO</td><td>L</td><td>13/08/1955</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405930001</td><td>MEILIA ALVIONITA</td><td>P</td><td>14/05/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010980002</td><td>MEGA RAHMAWATI</td><td>P</td><td>10/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320504040002</td><td>PANCA YUDA ANGGARA</td><td>L</td><td>05/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324808650001</td><td>HARTINI</td><td>P</td><td>08/08/1965</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325007840003</td><td>KUSUMA AYU</td><td>P</td><td>10/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326608900001</td><td>VIKI AGUSTINA</td><td>P</td><td>26/08/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324501930001</td><td>SELLY RETNO DEWANTI</td><td>P</td><td>05/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321907030002</td><td>DANDA ALFARANSI YUEN</td><td>L</td><td>19/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322908750002</td><td>KHOIRUL ANAM</td><td>L</td><td>29/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326911800003</td><td>WAHYUNING DWI LESTARI</td><td>P</td><td>29/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325303020001</td><td>NIA PRATAMA PUTRI</td><td>P</td><td>13/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326603110001</td><td>NAJWA HILWA</td><td>P</td><td>26/03/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322005680002</td><td>SUHARNOTO</td><td>L</td><td>20/05/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325510730002</td><td>MUNAWARTI</td><td>P</td><td>15/10/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326506920002</td><td>ELLA DENOK PRAJUNI</td><td>P</td><td>25/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325512930001</td><td>ELLOK  DESITASARI</td><td>P</td><td>15/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325507400006</td><td>PAINAH</td><td>P</td><td>15/07/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320703420001</td><td>KASEMUN</td><td>L</td><td>07/03/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324607760001</td><td>INDAWATI</td><td>P</td><td>06/07/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322612010002</td><td>RIJAL ANSORI</td><td>L</td><td>26/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321504600001</td><td>SUKARDI</td><td>L</td><td>15/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325609600003</td><td>SUTIANAH</td><td>P</td><td>16/09/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324511450002</td><td>ARTI</td><td>P</td><td>05/11/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709530002</td><td>SUGITO</td><td>L</td><td>07/09/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325602660004</td><td>GINAH</td><td>P</td><td>16/02/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320302800001</td><td>HADI SUCIPTO</td><td>L</td><td>03/02/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321003840003</td><td>ERIK RUDIANTO</td><td>L</td><td>10/03/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320108650010</td><td>SAMAN HIDAYAT</td><td>L</td><td>01/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326412640001</td><td>MUNTI'AH</td><td>P</td><td>24/12/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325904990002</td><td>UYUN ANDILA</td><td>P</td><td>19/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320109380001</td><td>DA'I</td><td>L</td><td>01/09/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324401430001</td><td>PATIMAH</td><td>P</td><td>04/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324609690002</td><td>SUMA'INAH</td><td>P</td><td>06/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323112620003</td><td>IMAM</td><td>L</td><td>31/12/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321201670002</td><td>ANDIK ARIFIN</td><td>L</td><td>12/01/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324302770001</td><td>RUPIATI</td><td>P</td><td>03/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322002980001</td><td>ANJAS STIAWAN</td><td>L</td><td>20/02/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320202420001</td><td>SAJI</td><td>L</td><td>02/02/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325506530002</td><td>JAMI</td><td>P</td><td>15/06/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321507720004</td><td>SUNDARI</td><td>L</td><td>15/07/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324407850002</td><td>SUNARMI</td><td>P</td><td>04/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321202430001</td><td>SUKIRMAN</td><td>L</td><td>12/02/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325303570002</td><td>LASEMI</td><td>P</td><td>13/03/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321507860001</td><td>IMAM PRASETYA</td><td>L</td><td>15/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321201530001</td><td>ABDUL MUKTI</td><td>L</td><td>12/01/1953</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325406630001</td><td>KALSUM</td><td>P</td><td>14/06/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325909820001</td><td>WIWIN INDAHYATI</td><td>P</td><td>19/09/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325608830003</td><td>DINA AGUSTINA</td><td>P</td><td>16/08/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320702480002</td><td>SARWAN</td><td>L</td><td>07/02/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324605530001</td><td>SUBARI</td><td>P</td><td>06/05/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326612850001</td><td>KUSRINI WATI</td><td>P</td><td>26/12/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320108220002</td><td>LAIMAN</td><td>L</td><td>01/08/1922</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324206300002</td><td>YASMINAH</td><td>P</td><td>02/06/1930</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326512860001</td><td>SHOPIA BANU SAHARA</td><td>P</td><td>25/12/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321404500001</td><td>YATENO</td><td>L</td><td>14/04/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325405590002</td><td>BONAYAH</td><td>P</td><td>14/05/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320906930005</td><td>NURCAHYO PRIYO UTOMO</td><td>L</td><td>09/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320806620001</td><td>SA'IM</td><td>L</td><td>08/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206740002</td><td>YUNIATI</td><td>P</td><td>12/06/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325112950001</td><td>FITRIANI EKO YUNISA</td><td>P</td><td>11/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324311040003</td><td>ARIP SLAMET FITRIYANTO</td><td>P</td><td>03/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321604400002</td><td>SURATIN</td><td>L</td><td>16/04/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324703520001</td><td>YAMINAH</td><td>P</td><td>07/03/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326306810002</td><td>ISTIANI</td><td>P</td><td>23/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320105660001</td><td>SUBIANTO</td><td>L</td><td>01/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324502740001</td><td>SUMA'IYAH</td><td>P</td><td>05/02/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325403950001</td><td>CITRA DEWI</td><td>P</td><td>14/03/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321012590006</td><td>MUDIONO</td><td>L</td><td>10/12/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324507680005</td><td>SUPI'IN</td><td>P</td><td>05/07/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>INDUSTRI</td></tr>
 <tr><td>3507320209930001</td><td>DENI FRADIPTA. VIRGOTIYA</td><td>L</td><td>02/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325902050002</td><td>DEBY ARINA WARDANI</td><td>P</td><td>19/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321210630001</td><td>SOIDI</td><td>L</td><td>12/10/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709650003</td><td>WIJI</td><td>P</td><td>07/09/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107320002</td><td>SENO</td><td>L</td><td>01/07/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324707350001</td><td>JASMINTEN</td><td>P</td><td>07/07/1935</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321005600005</td><td>SUNARDI</td><td>L</td><td>10/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325701660003</td><td>SRI WINARMI</td><td>P</td><td>17/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320801870001</td><td>WAHYUDI LISTIAWAN</td><td>L</td><td>08/01/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326711910004</td><td>NOVIA WIANDARI</td><td>P</td><td>27/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320307530002</td><td>DAMAT</td><td>L</td><td>03/07/1953</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325202570001</td><td>GIMAH</td><td>P</td><td>12/02/1957</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321405720003</td><td>PRAMUJI</td><td>L</td><td>14/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325304810001</td><td>SANTI</td><td>P</td><td>13/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325203010002</td><td>ANGGI</td><td>P</td><td>12/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3508100609710001</td><td>MUALIM</td><td>L</td><td>06/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>TENTARA NASIONAL INDONESIA</td></tr>
 <tr><td>3508106105780002</td><td>SITI ROMELAH</td><td>P</td><td>21/05/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3508106310990002</td><td>NOVITA EKA SUSILOWATI</td><td>P</td><td>23/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3508102501070004</td><td>ARKAZORA DWI MANGGALA</td><td>L</td><td>25/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321901540002</td><td>SUJONO</td><td>L</td><td>19/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327006560003</td><td>MARTINAH</td><td>P</td><td>30/06/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324907780001</td><td>ENIK SUPARINGSIH</td><td>P</td><td>09/07/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909840001</td><td>AHMADI SUMARNO</td><td>L</td><td>09/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320708750003</td><td>EFENDI</td><td>L</td><td>07/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322107040001</td><td>RIANTO PRANOTO</td><td>L</td><td>21/07/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321210550002</td><td>WASIS</td><td>L</td><td>12/10/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325208620002</td><td>NGATIMAH</td><td>P</td><td>12/08/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326204180001</td><td>NDARI</td><td>P</td><td>22/04/1918</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327110800001</td><td>YANAH</td><td>P</td><td>31/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101750017</td><td>DEDI SUKAMTO</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325602030002</td><td>RIFKA AJIZAH</td><td>P</td><td>16/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320406640001</td><td>ANANG SUKIRNO</td><td>L</td><td>04/06/1964</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326801900001</td><td>YUNESTI CITRA LUSIATI</td><td>P</td><td>28/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326702390001</td><td>MURTI</td><td>P</td><td>27/02/1939</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324801860002</td><td>FINTA INDANI</td><td>P</td><td>08/01/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324301720002</td><td>ISTIKAH</td><td>P</td><td>03/01/1972</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326608910002</td><td>VICKY AGUSTINA</td><td>P</td><td>26/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324501940002</td><td>SELLY RETNO DEWANTY</td><td>P</td><td>05/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321907020001</td><td>DANDA ALFANSI</td><td>L</td><td>19/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320507500003</td><td>SENARI</td><td>L</td><td>05/07/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324105520003</td><td>LI'ATI</td><td>P</td><td>01/05/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326302770001</td><td>ETRI JAYANTI</td><td>P</td><td>23/02/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320507790006</td><td>SUGENG SLAMET</td><td>L</td><td>05/07/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208790002</td><td>TRI UTAMI</td><td>P</td><td>12/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325510040001</td><td>EKA NABIILAH SAPUTRI</td><td>P</td><td>15/10/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321704820003</td><td>SAIFULLOH</td><td>L</td><td>17/04/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326104750004</td><td>ENDARTIK</td><td>P</td><td>21/04/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321511030001</td><td>PRAYUGO</td><td>L</td><td>15/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320507590002</td><td>SENARI</td><td>L</td><td>05/07/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324105620003</td><td>LI'ATI</td><td>P</td><td>01/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322906810001</td><td>EKO WAHYUDI</td><td>L</td><td>29/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321806840002</td><td>HERMAWAN</td><td>L</td><td>18/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326302870001</td><td>ETRI JAYANTI</td><td>P</td><td>23/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320705650001</td><td>EDI CAHYONO</td><td>L</td><td>07/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324204740003</td><td>SRI NUROHMI</td><td>P</td><td>02/04/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320810950001</td><td>HAPPY TIRIS HARIANTO</td><td>L</td><td>08/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507322705990001</td><td>HABIB SUGIARTO AKBAR</td><td>L</td><td>27/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325402420001</td><td>GIYAH</td><td>P</td><td>14/02/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320501790001</td><td>SUMARJI</td><td>L</td><td>05/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325607810001</td><td>SUTINI</td><td>P</td><td>16/07/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324706840005</td><td>KASIH WULAN UTAMI</td><td>P</td><td>07/06/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325106860003</td><td>WINARSIH</td><td>P</td><td>11/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321107780001</td><td>MUDI</td><td>L</td><td>11/07/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326206010002</td><td>ANGGI PERDIANA</td><td>P</td><td>22/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322507080002</td><td>JULI SETIAWAN</td><td>L</td><td>25/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320508570002</td><td>SUTIKNO</td><td>L</td><td>05/08/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324601620003</td><td>SUWARNI</td><td>P</td><td>06/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320911810002</td><td>SUNARI</td><td>L</td><td>09/11/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322307840002</td><td>SUMANTRI</td><td>L</td><td>23/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325603990002</td><td>ANITA ANDRIANI</td><td>P</td><td>16/03/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324508150001</td><td>SARKUNAH</td><td>P</td><td>05/08/1915</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320107570003</td><td>ANUWAR</td><td>L</td><td>01/07/1957</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507326107620001</td><td>SAMINI</td><td>P</td><td>21/07/1962</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321205600002</td><td>MARSIT</td><td>L</td><td>12/05/1960</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325509750003</td><td>HARTATIK</td><td>P</td><td>15/09/1975</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321006750001</td><td>SUROSO</td><td>L</td><td>10/06/1975</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321302020001</td><td>JOKO WINAHYU</td><td>L</td><td>13/02/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320904280001</td><td>SARMAN</td><td>L</td><td>09/04/1928</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507320510500001</td><td>GIMAN</td><td>L</td><td>05/10/1950</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325012600002</td><td>TIARI</td><td>P</td><td>10/12/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325711750001</td><td>LIK ASTUTIK</td><td>P</td><td>17/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320507870002</td><td>MARTONO</td><td>L</td><td>05/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321202730001</td><td>MULYONO</td><td>L</td><td>12/02/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>TRANSPORTASI</td></tr>
 <tr><td>3507320605000002</td><td>DENI AGUS MULYO</td><td>L</td><td>06/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108430004</td><td>BUAMIN</td><td>L</td><td>01/08/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507325110500003</td><td>ATIMAH</td><td>P</td><td>11/10/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320609710001</td><td>MU'ALIM</td><td>L</td><td>06/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>TENTARA NASIONAL INDONESIA</td></tr>
 <tr><td>3507325203730002</td><td>SITI ROMLAH</td><td>P</td><td>12/03/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324312940001</td><td>NOVITA EKA SUSILOWATI</td><td>P</td><td>03/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320403620002</td><td>SUKIRNO</td><td>L</td><td>04/03/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324802650003</td><td>SUPIANI</td><td>P</td><td>08/02/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324902990002</td><td>CINDI INDAH SARI</td><td>P</td><td>09/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321806430001</td><td>DASUKI</td><td>L</td><td>18/06/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324202500001</td><td>PATEMI</td><td>P</td><td>02/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325701890002</td><td>FENI YULI SETIAWATI</td><td>P</td><td>17/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320302590002</td><td>SUPIARTO</td><td>L</td><td>03/02/1959</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PENSIUNAN</td></tr>
 <tr><td>3507324203640001</td><td>SUMI</td><td>P</td><td>02/03/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321402940003</td><td>SUKRISNO HADI S</td><td>L</td><td>14/02/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320409240001</td><td>KIMUN</td><td>L</td><td>04/09/1924</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325005450003</td><td>PI'ATUN</td><td>P</td><td>10/05/1945</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326508790002</td><td>TRI UTAMI</td><td>P</td><td>25/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321204420001</td><td>SODIQ</td><td>L</td><td>12/04/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324907560005</td><td>ALIPAH</td><td>P</td><td>09/07/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322604790001</td><td>ISROFI</td><td>L</td><td>26/04/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322005490002</td><td>MUHAMAD SA'ID</td><td>L</td><td>20/05/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324607510001</td><td>JAMI'ATI</td><td>P</td><td>06/07/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325203510001</td><td>FARIDA</td><td>P</td><td>12/03/1951</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321403640005</td><td>PITONO</td><td>L</td><td>14/03/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712970003</td><td>NONIK ADILIA PUTRI</td><td>P</td><td>07/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325406670003</td><td>SRIANI</td><td>P</td><td>14/06/1967</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507326912850004</td><td>SOFIYAH BANU SUHARA</td><td>P</td><td>29/12/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507322206590001</td><td>WAGIRAN</td><td>L</td><td>22/06/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326411630001</td><td>LILIK FATIMAH</td><td>P</td><td>24/11/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326412840001</td><td>RISA WIDI ASTUTIK</td><td>P</td><td>24/12/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326812930001</td><td>LULUK FALIDAH</td><td>P</td><td>28/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324407040001</td><td>YULIA BINTANG PERMATA SARI</td><td>P</td><td>04/07/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320707620001</td><td>YAHMAN</td><td>L</td><td>07/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324207700001</td><td>UMUL CHOLIDIAH</td><td>P</td><td>02/07/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104870002</td><td>ROMADHOTUL JANNAH</td><td>P</td><td>21/04/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320610900001</td><td>ROIF FAHRUDIN</td><td>L</td><td>06/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324911980001</td><td>FATIMAH AZZAHRO'</td><td>P</td><td>09/11/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320610660002</td><td>SUBAKRI</td><td>L</td><td>06/10/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325207720002</td><td>YAMTI</td><td>P</td><td>12/07/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321006940003</td><td>EKO PRASETYO</td><td>L</td><td>10/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326002960001</td><td>PUTRI DEVI SETYOWATI</td><td>P</td><td>20/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321811030002</td><td>RAMANDA</td><td>L</td><td>18/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326909870005</td><td>ENIK INDAYATI</td><td>P</td><td>29/09/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325607720003</td><td>LASMI</td><td>P</td><td>16/07/1972</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010930003</td><td>SUCIATI CAHYA NINGRUM</td><td>P</td><td>10/10/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325302950002</td><td>NENI RIA SAFITRI</td><td>P</td><td>13/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324102540002</td><td>SURATI</td><td>P</td><td>01/02/1954</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324604870002</td><td>KARMIASIH</td><td>P</td><td>06/04/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324706340002</td><td>KAMINTEN</td><td>P</td><td>07/06/1934</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320906790002</td><td>MUHAMAD ARIFIN</td><td>L</td><td>09/06/1979</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325306030002</td><td>JENNY ANUGRAH TIAR N</td><td>P</td><td>13/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325607540002</td><td>SUMARNI</td><td>P</td><td>16/07/1954</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324610330001</td><td>WARTI</td><td>P</td><td>06/10/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321102520003</td><td>RASIMUN</td><td>L</td><td>11/02/1952</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324410250001</td><td>RUSMINI</td><td>P</td><td>04/10/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320702350001</td><td>KASIPAN</td><td>L</td><td>07/02/1935</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324911410001</td><td>NGASINI</td><td>P</td><td>09/11/1941</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321106340001</td><td>SAMUD</td><td>L</td><td>11/06/1934</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325612490001</td><td>PAIRAH</td><td>P</td><td>16/12/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322605720003</td><td>HARI SISWANTO</td><td>L</td><td>26/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325005850005</td><td>RIRIN MARIA CHOMSA</td><td>P</td><td>10/05/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325509700004</td><td>NUR AINI</td><td>P</td><td>15/09/1970</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321902920001</td><td>FERI FANDANA</td><td>L</td><td>19/02/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322607930002</td><td>HERU RASETIAWAN</td><td>L</td><td>26/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321210000001</td><td>ROY NALDI ALFARU</td><td>L</td><td>12/10/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324706530001</td><td>TASENI</td><td>P</td><td>07/06/1953</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320908820002</td><td>DIDIK AGUS SALIM</td><td>L</td><td>09/08/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320304470003</td><td>TALMAN</td><td>L</td><td>03/04/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327112480002</td><td>WAINI</td><td>P</td><td>31/12/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324403400001</td><td>LAINAH</td><td>P</td><td>04/03/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320103520002</td><td>MULIADI</td><td>L</td><td>01/03/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325807620003</td><td>ISMINAH</td><td>P</td><td>18/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322810740001</td><td>SUGIANTORO</td><td>L</td><td>28/10/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325606790003</td><td>WAHYU SRIGATI</td><td>P</td><td>16/06/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321904820002</td><td>ADI SUGIARTO</td><td>L</td><td>19/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321504990002</td><td>SANDI AF GIANTORO</td><td>L</td><td>15/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325404500002</td><td>SARIYAH</td><td>P</td><td>14/04/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325110600004</td><td>MARIANI</td><td>P</td><td>11/10/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322609840002</td><td>ADI KUSWOYO</td><td>L</td><td>26/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321402870001</td><td>SLAMET CAHYONO</td><td>L</td><td>14/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321007970002</td><td>MUHAMMAD ROFIQ JULIAWAN</td><td>L</td><td>10/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320905460001</td><td>TAMIN</td><td>L</td><td>09/05/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325401480001</td><td>SARTI</td><td>P</td><td>14/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324503740001</td><td>TAMINI</td><td>P</td><td>05/03/1974</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326709820005</td><td>SRI ROHATI</td><td>P</td><td>27/09/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010740004</td><td>HARI SASMINTO</td><td>L</td><td>10/10/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326006960001</td><td>ENDANG PURWONINGSIH</td><td>P</td><td>20/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321406090002</td><td>EKO PUTRO SASMITO</td><td>L</td><td>14/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320506500002</td><td>RIMIN</td><td>L</td><td>05/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324103550002</td><td>MISENAH</td><td>P</td><td>01/03/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324410750001</td><td>SULISNIK</td><td>P</td><td>04/10/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808840001</td><td>MAHMUDAH ELISA</td><td>P</td><td>18/08/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326206900001</td><td>NOVIA YUNITA</td><td>P</td><td>22/06/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320307270001</td><td>SAMIDI</td><td>L</td><td>03/07/1927</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>TUKANG LAS/PANDAI BESI</td></tr>
 <tr><td>3507320407630009</td><td>ROFI'I</td><td>L</td><td>04/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507324808680002</td><td>HAMIDAH</td><td>P</td><td>08/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321103910002</td><td>SYAFA'AT</td><td>L</td><td>11/03/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324103400002</td><td>SARMINI</td><td>P</td><td>01/03/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321905420002</td><td>JAURI</td><td>L</td><td>19/05/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507320203840001</td><td>AZIZUR ROKIM</td><td>L</td><td>02/03/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321709880001</td><td>WIYONO</td><td>L</td><td>17/09/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325204860002</td><td>KHOLIFATUN NISA'</td><td>P</td><td>12/04/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325602110001</td><td>NAILA NURHIDAYATI</td><td>P</td><td>16/02/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101540014</td><td>SURATI</td><td>P</td><td>01/01/1954</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325004800004</td><td>KARMIASIH</td><td>P</td><td>10/04/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321511750006</td><td>MULIONO</td><td>L</td><td>15/11/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808780004</td><td>SITI LULUK M</td><td>P</td><td>08/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324105000003</td><td>NIKEN P</td><td>P</td><td>01/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324306070002</td><td>MISE DWI LAILIA</td><td>P</td><td>03/06/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321506570001</td><td>SANU</td><td>L</td><td>15/06/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326404690001</td><td>SARMINI</td><td>P</td><td>24/04/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325805010001</td><td>DARI LESTARI</td><td>P</td><td>18/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325208080001</td><td>BUNGA ARUM WARDANI</td><td>P</td><td>12/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320308670004</td><td>NUR ALI</td><td>L</td><td>03/08/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325611710001</td><td>YAHMI</td><td>P</td><td>16/11/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324803840003</td><td>EVA NOVIYATUL KUSNA</td><td>P</td><td>08/03/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322103970002</td><td>M NUR HIDAYAT</td><td>L</td><td>21/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324306380001</td><td>SAMILAH</td><td>P</td><td>03/06/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321601700002</td><td>YAHMUN</td><td>L</td><td>16/01/1970</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324109640001</td><td>SRIAMI</td><td>P</td><td>01/09/1964</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320911860001</td><td>CHOIRUL ABDUL SOLEH</td><td>L</td><td>09/11/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320504890001</td><td>IRAWAN HADI PURWANTO</td><td>L</td><td>05/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321605910002</td><td>ISMAIL MARZUKI</td><td>L</td><td>16/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324209950002</td><td>FITA DEWI WIJAYA</td><td>P</td><td>02/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324405960002</td><td>RIMA OKTAVIA MAYANGSARI</td><td>P</td><td>04/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321802500001</td><td>SUYONO</td><td>L</td><td>18/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324705570002</td><td>ARLIYAH</td><td>P</td><td>07/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322004550001</td><td>NGADI</td><td>L</td><td>20/04/1955</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325007420002</td><td>PAITON</td><td>P</td><td>10/07/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325905660001</td><td>DARMI</td><td>P</td><td>19/05/1966</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321109590002</td><td>MISEMAN</td><td>L</td><td>11/09/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324911680002</td><td>HARTATIK</td><td>P</td><td>09/11/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322510890001</td><td>GIANTO</td><td>L</td><td>25/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322808940001</td><td>AGUS FERDIAN</td><td>L</td><td>28/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320109010002</td><td>MUHAMMAD SUWANDANA</td><td>L</td><td>01/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325705380001</td><td>MARIYAT</td><td>P</td><td>17/05/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321607400001</td><td>KAWI</td><td>L</td><td>16/07/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324702360001</td><td>MARSITI</td><td>P</td><td>07/02/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325712660001</td><td>SUMAINAH</td><td>P</td><td>17/12/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325208680002</td><td>RIANI</td><td>P</td><td>12/08/1968</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321008870002</td><td>ARFIAN AGUS WAHYUDI</td><td>L</td><td>10/08/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324608990003</td><td>ONI SUKMAWATI RAHAYU</td><td>P</td><td>06/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320612380001</td><td>MATASIR</td><td>L</td><td>06/12/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320611720001</td><td>SURATEMAN</td><td>L</td><td>06/11/1972</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321802760001</td><td>MARIONO</td><td>L</td><td>18/02/1976</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709790004</td><td>MARIAM</td><td>P</td><td>07/09/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320904510001</td><td>SIMAN</td><td>L</td><td>09/04/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325506590001</td><td>SITI AROPAH</td><td>P</td><td>15/06/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326302750001</td><td>MISTIASIH</td><td>P</td><td>23/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321808860006</td><td>AGUS SUCIPTO</td><td>L</td><td>18/08/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321405720004</td><td>HERI SUGIHARTO</td><td>L</td><td>14/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321407920003</td><td>GALUH EKO PRAYUDI</td><td>L</td><td>14/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320903040001</td><td>RINGGO AJI SINGGIH</td><td>L</td><td>09/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325309380001</td><td>JASEMI</td><td>P</td><td>13/09/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320508540002</td><td>JUBAIDI</td><td>L</td><td>05/08/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324401610001</td><td>SULIKAH</td><td>P</td><td>04/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321409810002</td><td>ABIT SAHRONI</td><td>L</td><td>14/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320504830001</td><td>ANDIK ASRORI</td><td>L</td><td>05/04/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326803920001</td><td>FITRI RAHMAWATI</td><td>P</td><td>28/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321203430001</td><td>TASELAN</td><td>L</td><td>12/03/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326904500001</td><td>TINAH</td><td>P</td><td>29/04/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325705710001</td><td>UMI HAYATI</td><td>P</td><td>17/05/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321302680001</td><td>NASERI</td><td>L</td><td>13/02/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322006910001</td><td>RIZKI FARIKA FANSAH</td><td>L</td><td>20/06/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325711050001</td><td>NOFA DWI FATMALA</td><td>P</td><td>17/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320506390001</td><td>GIMAN</td><td>L</td><td>05/06/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325806520001</td><td>SUTIK</td><td>P</td><td>18/06/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326004920001</td><td>ENI ERNAWATI</td><td>P</td><td>20/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320508390002</td><td>SA'ON</td><td>L</td><td>05/08/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325905480001</td><td>PUJI</td><td>P</td><td>19/05/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322801820001</td><td>MUJIANTO</td><td>L</td><td>28/01/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321105780004</td><td>JARWOTO</td><td>L</td><td>11/05/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321210600004</td><td>SUKAIM</td><td>L</td><td>12/10/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324806650001</td><td>YATIMAH</td><td>P</td><td>08/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320512820005</td><td>SURUL HUDA AHMAD</td><td>L</td><td>05/12/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326908850003</td><td>ISTIQOMAH</td><td>P</td><td>29/08/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326907070002</td><td>RACHEL BERLIANA BUNGA ANGRAINI</td><td>P</td><td>29/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320603700001</td><td>BUAMIN</td><td>L</td><td>06/03/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324204680005</td><td>PI'ANI</td><td>P</td><td>02/04/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321907710004</td><td>SOLIKIN</td><td>L</td><td>19/07/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011780003</td><td>SRIASIH</td><td>P</td><td>10/11/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322501970001</td><td>M YUSUF</td><td>L</td><td>25/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322204990001</td><td>M ARIFIN</td><td>L</td><td>22/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321905010003</td><td>AHMAD JUNAIDI</td><td>L</td><td>19/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326303030002</td><td>INDRIANI</td><td>P</td><td>23/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326909070003</td><td>PUTRI RAMADHANI</td><td>P</td><td>29/09/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320412870003</td><td>IRAWAN</td><td>L</td><td>04/12/1987</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326112860002</td><td>ANIS SRIWAYANTI</td><td>P</td><td>21/12/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320808080003</td><td>FERGIO E S A</td><td>L</td><td>08/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322703770004</td><td>BAMBANG SISWOYO</td><td>L</td><td>27/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101810024</td><td>LI'ANI</td><td>P</td><td>01/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321008020001</td><td>AGUS WAHYU SETIAWAN</td><td>L</td><td>10/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322908780001</td><td>SULIONO</td><td>L</td><td>29/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324202920002</td><td>INTAN DEWI PURNAMASARI</td><td>P</td><td>02/02/1992</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323009110001</td><td>HANANTO WAHYU NUGROHO</td><td>L</td><td>30/09/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321604670001</td><td>SUJIO</td><td>L</td><td>16/04/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325807680004</td><td>MULIK ANNA</td><td>P</td><td>18/07/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324701900002</td><td>DIANA EVAYANTI</td><td>P</td><td>07/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320405010001</td><td>ANDIKA RADYA BAGAS SUJIANTO</td><td>L</td><td>04/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325711060002</td><td>ESLA FAIDATUL UMRAH</td><td>P</td><td>17/11/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321609770003</td><td>BUDIONO</td><td>L</td><td>16/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326305810003</td><td>JAMIATUL MUSLIMAH</td><td>P</td><td>23/05/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320612010001</td><td>MUHAMMAD ALAMSYAH</td><td>L</td><td>06/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322311080001</td><td>RAIHAN MAULANA</td><td>L</td><td>23/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3519041911830003</td><td>SURAJI</td><td>L</td><td>19/11/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507850004</td><td>EVA YULIATI</td><td>P</td><td>15/07/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322508060003</td><td>RADITYA EDI HAMZAH</td><td>L</td><td>25/08/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320103750008</td><td>ABDUL KAMIT</td><td>L</td><td>01/03/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321905320001</td><td>SI'AN</td><td>L</td><td>19/05/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325403450002</td><td>PAIMAH</td><td>P</td><td>14/03/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322109790001</td><td>FERRY BUKIT SRIGUNTANG</td><td>L</td><td>21/09/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321302830002</td><td>JUMALI</td><td>L</td><td>13/02/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324602580001</td><td>SUMI</td><td>P</td><td>06/02/1958</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321203990002</td><td>KUDORI</td><td>L</td><td>12/03/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321807590001</td><td>SUWOTO</td><td>L</td><td>18/07/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208650004</td><td>SITI ASNIFAH</td><td>P</td><td>12/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326904840004</td><td>LUFIANA IRA WATI</td><td>P</td><td>29/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326205890003</td><td>KHUSNIATUL MUFIDAH</td><td>P</td><td>22/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321005940002</td><td>ANGGA SAFIANTO</td><td>L</td><td>10/05/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507322012720002</td><td>SURIYADI</td><td>L</td><td>20/12/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324108690009</td><td>YASIPAH</td><td>P</td><td>01/08/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324905970002</td><td>VIVI DIYAVANI</td><td>P</td><td>09/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507327008030001</td><td>TISA YEFI SAHEFANI</td><td>P</td><td>30/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320511530003</td><td>REBUN</td><td>L</td><td>05/11/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325811620002</td><td>TUPAH</td><td>P</td><td>18/11/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321505830004</td><td>GIONO</td><td>L</td><td>15/05/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326106840003</td><td>SANTI</td><td>P</td><td>21/06/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324610920001</td><td>SANAH SELVIANA</td><td>P</td><td>06/10/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324408990003</td><td>FINA AGUSTINA</td><td>P</td><td>04/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321402000001</td><td>YUDA PRAMANA</td><td>L</td><td>14/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321403680001</td><td>SUPADI</td><td>L</td><td>14/03/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325609680001</td><td>SUJA'INI</td><td>P</td><td>16/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320904860003</td><td>YULIANTO</td><td>L</td><td>09/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320108610001</td><td>DJUMAIN</td><td>L</td><td>01/08/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108640009</td><td>ROKIMAH</td><td>P</td><td>01/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320306860001</td><td>DIDIEK SISWANTO</td><td>L</td><td>03/06/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325109900002</td><td>SUTRAMI</td><td>P</td><td>11/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320110940002</td><td>AGUNG</td><td>L</td><td>01/10/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320110970001</td><td>LANGGAH</td><td>L</td><td>01/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320806400001</td><td>WAGIMIN</td><td>L</td><td>08/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324604480003</td><td>KAMI</td><td>P</td><td>06/04/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320901530001</td><td>SUPANGAT</td><td>L</td><td>09/01/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324507590003</td><td>SARTI</td><td>P</td><td>05/07/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320507790009</td><td>QOMARUDIN</td><td>L</td><td>05/07/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326004880001</td><td>MASCHULATIN</td><td>P</td><td>20/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320811470001</td><td>SARNAM</td><td>L</td><td>08/11/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324406750001</td><td>LILIK</td><td>P</td><td>04/06/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321703730002</td><td>LASWITO</td><td>L</td><td>17/03/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320103940002</td><td>DIMAS</td><td>L</td><td>01/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320405970001</td><td>NILO</td><td>L</td><td>04/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320406660002</td><td>SUKAMTO</td><td>L</td><td>04/06/1966</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324604680002</td><td>SARINAH</td><td>P</td><td>06/04/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322103920001</td><td>ALI USMAN HADI</td><td>L</td><td>21/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320410970002</td><td>ALUL AHMAD LABIB</td><td>L</td><td>04/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323009060002</td><td>ALIM MUSTOFA</td><td>L</td><td>30/09/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324504450003</td><td>PONIYAH</td><td>P</td><td>05/04/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321609690004</td><td>PARNO</td><td>L</td><td>16/09/1969</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111810001</td><td>ATIM SITI MUBAROKAH</td><td>P</td><td>11/11/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320905590001</td><td>SUTRISNO</td><td>L</td><td>09/05/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324602670001</td><td>UMI SA'ADAH</td><td>P</td><td>06/02/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321809890005</td><td>SAMSUL HUDA</td><td>L</td><td>18/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321803920002</td><td>ABIL HASAN ARIS S</td><td>L</td><td>18/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326505960001</td><td>RULI LAILATUL FADILAH</td><td>P</td><td>25/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324506040002</td><td>CHUMAIDATUS ZAHRO</td><td>P</td><td>05/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324304400006</td><td>MO'INI</td><td>P</td><td>03/04/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326508670001</td><td>SRI WAHYUNI</td><td>P</td><td>25/08/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321807580001</td><td>SUWITO</td><td>L</td><td>18/07/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322710900001</td><td>TAUFIQ HIDAYAT</td><td>L</td><td>27/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321112580002</td><td>WADIRAN</td><td>L</td><td>11/12/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324105710003</td><td>NURWAHYUNI</td><td>P</td><td>01/05/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325605910004</td><td>RENI WAHYUNINGSIH</td><td>P</td><td>16/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325610950001</td><td>REFI LIKE WIDAYATI</td><td>P</td><td>16/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321004000004</td><td>REO NALDO O K FIO</td><td>L</td><td>10/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108520007</td><td>IMAM SOPI'I</td><td>L</td><td>01/08/1952</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325003540001</td><td>SARPI'IN</td><td>P</td><td>10/03/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322504760002</td><td>S BUDI SANTOSO</td><td>L</td><td>25/04/1976</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322011850003</td><td>ARI MUSTOFA</td><td>L</td><td>20/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>TENTARA NASIONAL INDONESIA</td></tr>
 <tr><td>3507321103640003</td><td>SUTRISNO</td><td>L</td><td>11/03/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507325201670003</td><td>PUJI ASTUTIK</td><td>P</td><td>12/01/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327011830001</td><td>IMA DWIYANTI</td><td>P</td><td>30/11/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320104340001</td><td>TARIMAN</td><td>L</td><td>01/04/1934</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324606380001</td><td>LI'AMAH</td><td>P</td><td>06/06/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324503840002</td><td>SUTRIYAH</td><td>P</td><td>05/03/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322906790004</td><td>ZAENAL ARIFIN</td><td>L</td><td>29/06/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322303620001</td><td>WARISAN</td><td>L</td><td>23/03/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324402700001</td><td>SULI'AH</td><td>P</td><td>04/02/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209870002</td><td>SUGIYANTI</td><td>P</td><td>12/09/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327105970001</td><td>INDRASARI DWI YULIATI</td><td>P</td><td>31/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322805580002</td><td>SUMARTO</td><td>L</td><td>28/05/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325703650001</td><td>SUPIYANI</td><td>P</td><td>17/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322606850004</td><td>SUTIYONO</td><td>L</td><td>26/06/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322401900006</td><td>ADI SUSANTO</td><td>L</td><td>24/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321010920002</td><td>SLAMET ANTOK CAHYONO</td><td>L</td><td>10/10/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325307890001</td><td>SITI MARIYAM</td><td>P</td><td>13/07/1989</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320411580001</td><td>KUSNAN</td><td>L</td><td>04/11/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325509630001</td><td>SUMARMI</td><td>P</td><td>15/09/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325112820005</td><td>IKA SOLIFATUS S</td><td>P</td><td>11/12/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320512890001</td><td>FAKARISAL</td><td>L</td><td>05/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320502910006</td><td>RAHMAT HIDAYAT</td><td>L</td><td>05/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321304010001</td><td>BAGUS ERIKANTO</td><td>L</td><td>13/04/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322010730001</td><td>EKO DEDIK SETIAWAN</td><td>L</td><td>20/10/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405740001</td><td>KARMIASIH</td><td>P</td><td>14/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320605000001</td><td>KEVIN ADITYA SANDI P</td><td>L</td><td>06/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322403070001</td><td>KEISA MUHAMAD SETIAWAN</td><td>L</td><td>24/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321609720001</td><td>KUSWANTORO</td><td>L</td><td>16/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507324609710001</td><td>SRIAMI</td><td>P</td><td>06/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324608040003</td><td>WENY AULIA PUTRI</td><td>P</td><td>06/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326103090001</td><td>LEONY MUSTIKA AYU</td><td>P</td><td>21/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3213291111870001</td><td>CUCU SUPRIADI</td><td>L</td><td>11/11/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325302900001</td><td>FORUM DINA ETIKA</td><td>P</td><td>13/02/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322412800003</td><td>HERMANTO</td><td>L</td><td>24/12/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325005820002</td><td>YENI DWIYANTI</td><td>P</td><td>10/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324203060001</td><td>ALYA MARTA HERDIANTI</td><td>P</td><td>02/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322906700001</td><td>UNTUNG</td><td>L</td><td>29/06/1970</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320210020002</td><td>HAMIM UBADILLAH</td><td>L</td><td>02/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324405460001</td><td>RUMINAH</td><td>P</td><td>04/05/1946</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322502810003</td><td>BUDIONO</td><td>L</td><td>25/02/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324706610003</td><td>SUNARTI</td><td>P</td><td>07/06/1961</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321709830002</td><td>ADI HARIANTO</td><td>L</td><td>17/09/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324506860004</td><td>ITA FITRIA</td><td>P</td><td>05/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321802100001</td><td>ALIEF ALFARIDZKI</td><td>L</td><td>18/02/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324407320001</td><td>YASMINAH</td><td>P</td><td>04/07/1932</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321706700001</td><td>KUSENAN</td><td>L</td><td>17/06/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326604730002</td><td>SUKIYAH</td><td>P</td><td>26/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325106850005</td><td>FYA MARDIANA</td><td>P</td><td>11/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320509570001</td><td>NURSANTOSONING BUDI</td><td>L</td><td>05/09/1957</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324710610001</td><td>SUKIYAH</td><td>P</td><td>07/10/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323110810002</td><td>DODIK DUWI SAPUTRO</td><td>L</td><td>31/10/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326012830001</td><td>NANIK NUR MUJI YANTI</td><td>P</td><td>20/12/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321912840001</td><td>PRIYO UTOMO</td><td>L</td><td>19/12/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322204860003</td><td>HERAWAN SUTANTO</td><td>L</td><td>22/04/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325107850001</td><td>EVA MARDIANA</td><td>P</td><td>11/07/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324206090002</td><td>PUTRI ADELIA SUTANTO</td><td>P</td><td>02/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320611350002</td><td>KASMARI</td><td>L</td><td>06/11/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324304340001</td><td>KASIPAH</td><td>P</td><td>03/04/1934</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324808710002</td><td>NUR AINI</td><td>P</td><td>08/08/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320903650001</td><td>TUKIMUN</td><td>L</td><td>09/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320902950002</td><td>MISBACHUL MUNIR</td><td>L</td><td>09/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326004050002</td><td>APRILIA MAFIKA CAHYANTI</td><td>P</td><td>20/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321311570001</td><td>MOH MAKSUM</td><td>L</td><td>13/11/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325712580002</td><td>MARIANI</td><td>P</td><td>17/12/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321510370001</td><td>SAILAN</td><td>L</td><td>15/10/1937</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324711390001</td><td>KATIMAH</td><td>P</td><td>07/11/1939</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321505860007</td><td>YUDI ISWANTORO</td><td>L</td><td>15/05/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326910870002</td><td>SUPRIHATIN</td><td>P</td><td>29/10/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322810090002</td><td>MUHAMAD IHSAN REIFAN</td><td>L</td><td>28/10/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322008780004</td><td>BISRI MUSTOFA</td><td>L</td><td>20/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326103860001</td><td>ARIK IRAWATI</td><td>P</td><td>21/03/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326602080004</td><td>INDIANA PUTRI MUSTOFA</td><td>P</td><td>26/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320506420002</td><td>YASIR</td><td>L</td><td>05/06/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325201500001</td><td>DARMINTEN</td><td>P</td><td>12/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321604850003</td><td>IRWAN</td><td>L</td><td>16/04/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321507480002</td><td>RADI</td><td>L</td><td>15/07/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324906570001</td><td>LAMIYAH</td><td>P</td><td>09/06/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326409380001</td><td>MESENAH</td><td>P</td><td>24/09/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321707510002</td><td>SA'IM</td><td>L</td><td>17/07/1951</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325407540001</td><td>SUKINAH</td><td>P</td><td>14/07/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325606750002</td><td>SITI JUMA'IYAH</td><td>P</td><td>16/06/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322907800001</td><td>SUYANTO</td><td>L</td><td>29/07/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321309990002</td><td>LUKY EKA PUTRA</td><td>L</td><td>13/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321201450002</td><td>SALEH</td><td>L</td><td>12/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325412480001</td><td>ATIM</td><td>P</td><td>14/12/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320702750002</td><td>BAMBANG WINARKO</td><td>L</td><td>07/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324710790004</td><td>LILA OKTIANI</td><td>P</td><td>07/10/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325702000002</td><td>AMELIA WINARKO</td><td>P</td><td>17/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322709040001</td><td>BINTANG SEPTIAN W</td><td>L</td><td>27/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108650014</td><td>HARIWITO</td><td>L</td><td>01/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324312660002</td><td>HARIYATI</td><td>P</td><td>03/12/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322604960001</td><td>ARIP RIBAWO</td><td>L</td><td>26/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320510700003</td><td>WAWAN HARIONO</td><td>L</td><td>05/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324706780001</td><td>SYAFI INDAYANI</td><td>P</td><td>07/06/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322802050001</td><td>ILHAM FEBY VIRGIAWAN</td><td>L</td><td>28/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320508730004</td><td>SHANDI AGUSTINUS PALMA</td><td>L</td><td>05/08/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325308800001</td><td>SITI ASIYAH</td><td>P</td><td>13/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326803030001</td><td>IVANNA ALIF SETYO PANGESTU</td><td>P</td><td>28/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320606660005</td><td>NGADIMAN</td><td>L</td><td>06/06/1966</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KEPALA DESA</td></tr>
 <tr><td>3507325004720002</td><td>SULASTRI</td><td>P</td><td>10/04/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321106870002</td><td>EKO NUR MUKAMAT AFAN</td><td>L</td><td>11/06/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325412910001</td><td>AYU LESTARI</td><td>P</td><td>14/12/1991</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325211750002</td><td>INDAH YANI</td><td>P</td><td>12/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326409910002</td><td>SITI EVI SUSANTI</td><td>P</td><td>24/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709710001</td><td>IMAM ROHADI</td><td>L</td><td>07/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324102720001</td><td>SRI WIYATI</td><td>P</td><td>01/02/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320208000001</td><td>MIFTAKHUL HADI W</td><td>L</td><td>02/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320108580015</td><td>MULYONO</td><td>L</td><td>01/08/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325304610001</td><td>TAMUNAH</td><td>P</td><td>13/04/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320109810002</td><td>ELDA DWI SAPUTRA</td><td>L</td><td>01/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320508700001</td><td>SAMPURNO</td><td>L</td><td>05/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324508710005</td><td>SITI MASKANAH</td><td>P</td><td>05/08/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324412920002</td><td>DINI ARDIANA</td><td>P</td><td>04/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326412940002</td><td>RENI INDAH SAPUTRA</td><td>P</td><td>24/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326408970002</td><td>ANJAR INDAH CAHYANI</td><td>P</td><td>24/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320907000002</td><td>BIMA DEDI SAPUTRO</td><td>L</td><td>09/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320907020002</td><td>BAYU INDRA MASPUTRA</td><td>L</td><td>09/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322406040004</td><td>AGIL NUGRA DIAN NOFA</td><td>L</td><td>24/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326506060001</td><td>REFA MAKRIFATUL ANADIAH</td><td>P</td><td>25/06/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326512080002</td><td>AROFAH FADILAH DEFANIKA</td><td>P</td><td>25/12/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324910400002</td><td>JAMINTEN</td><td>P</td><td>09/10/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322809640001</td><td>KOIMAN</td><td>L</td><td>28/09/1964</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324303680001</td><td>SUGEMI</td><td>P</td><td>03/03/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322110920001</td><td>FERI ANGGARA</td><td>L</td><td>21/10/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326107990001</td><td>CHOIROTUN NISA</td><td>P</td><td>21/07/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321709430002</td><td>KARDI</td><td>L</td><td>17/09/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325909510001</td><td>LASENI</td><td>P</td><td>19/09/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320606810002</td><td>MUKHIT</td><td>L</td><td>06/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323003850002</td><td>SUTIKNO</td><td>L</td><td>30/03/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320602920003</td><td>MAHFUDZ</td><td>L</td><td>06/02/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321105690001</td><td>DLUROTUN NASICHIN</td><td>L</td><td>11/05/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326201720001</td><td>SUMA'IYAH</td><td>P</td><td>22/01/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322010970001</td><td>RIZQI ZUHRIA PUTRA</td><td>L</td><td>20/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324405110002</td><td>AISYAH MEIDINA ZAHRO</td><td>P</td><td>04/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321208430001</td><td>EDI DAMUN</td><td>L</td><td>12/08/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325008640003</td><td>SUKARTI</td><td>P</td><td>10/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321507620002</td><td>NAIMAN</td><td>L</td><td>15/07/1962</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325706650001</td><td>SUTINI</td><td>P</td><td>17/06/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320912900001</td><td>NANANG SUGIARTO</td><td>L</td><td>09/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322510980002</td><td>NANDA TRI SUGIANTO</td><td>L</td><td>25/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321504310001</td><td>KUSENO</td><td>L</td><td>15/04/1931</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324805400003</td><td>MARKUNAH</td><td>P</td><td>08/05/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326006810002</td><td>HENI WULANDARI</td><td>P</td><td>20/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320608450003</td><td>JAMIN</td><td>L</td><td>06/08/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324506500006</td><td>PAINAH</td><td>P</td><td>05/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322208840002</td><td>SUGENG HARDIYANTO</td><td>L</td><td>22/08/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320911880001</td><td>MUHAMMAD SO'IB</td><td>L</td><td>09/11/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321504650003</td><td>M SHOLEHUDIN AZIS</td><td>L</td><td>15/04/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902690001</td><td>MULYANI</td><td>P</td><td>09/02/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322008930001</td><td>KHOTIBUL UMAM</td><td>L</td><td>20/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321508480002</td><td>BARI</td><td>L</td><td>15/08/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326312580001</td><td>JUARIYAH</td><td>P</td><td>23/12/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322908860001</td><td>HERMAWAN</td><td>L</td><td>29/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320905880002</td><td>NURUL CHOIRI</td><td>L</td><td>09/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321407760001</td><td>SUMADI</td><td>L</td><td>14/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507325308760002</td><td>ZUROTUL URIFAH</td><td>P</td><td>13/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320711030002</td><td>YUSA MAHENDRA RAMADHANI</td><td>L</td><td>07/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324506430001</td><td>SARI</td><td>P</td><td>05/06/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325506630003</td><td>WIJI</td><td>P</td><td>15/06/1963</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321811880001</td><td>SULISTIONO</td><td>L</td><td>18/11/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325408910001</td><td>YULIANA</td><td>P</td><td>14/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010700002</td><td>ATOK MUSTOFA</td><td>L</td><td>10/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325604740004</td><td>SRI INTIAS</td><td>P</td><td>16/04/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322802030001</td><td>M NUVAL AULIA FARDAN</td><td>L</td><td>28/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326504490001</td><td>SUPIATUN</td><td>P</td><td>25/04/1949</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507320709710002</td><td>IMAM ROHADI</td><td>L</td><td>07/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324102730002</td><td>SRI WIYATI</td><td>P</td><td>01/02/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320208000002</td><td>MIFTAKUL HADI W</td><td>L</td><td>02/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322302320001</td><td>TARIP</td><td>L</td><td>23/02/1932</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325212370001</td><td>ARPIAH</td><td>P</td><td>12/12/1937</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322001610001</td><td>NGATRISNO WIBOWO</td><td>L</td><td>20/01/1961</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325003680017</td><td>SUHARTI</td><td>P</td><td>10/03/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326211850002</td><td>NOVY MUDMAINAH</td><td>P</td><td>22/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321811910001</td><td>NOVAN ZAINAL ABIDIN</td><td>L</td><td>18/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326112990002</td><td>TRI KORAMATUL JANAH</td><td>P</td><td>21/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325306360001</td><td>YAHMI</td><td>P</td><td>13/06/1936</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322408500002</td><td>TARI</td><td>L</td><td>24/08/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325611510001</td><td>WATINI</td><td>P</td><td>16/11/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325401840001</td><td>ERNAWATI</td><td>P</td><td>14/01/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320505710005</td><td>HERI SUTIKNO</td><td>L</td><td>05/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324506720004</td><td>ANIK PURWATI</td><td>P</td><td>05/06/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325510970002</td><td>ANANDA KARINA S</td><td>P</td><td>15/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322405040002</td><td>FERNANDO P S</td><td>L</td><td>24/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508510001</td><td>SUTONO</td><td>L</td><td>15/08/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603620001</td><td>YASEMI</td><td>P</td><td>06/03/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324104400002</td><td>ATIM</td><td>P</td><td>01/04/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322208640002</td><td>CATUR PRAHORO AGUS KUNCORO</td><td>L</td><td>22/08/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324607740001</td><td>WARNI</td><td>P</td><td>06/07/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325011930002</td><td>MUFARIKATUL IMRINA</td><td>P</td><td>10/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325310980001</td><td>RISMA LAILATUL FATIMAH</td><td>P</td><td>13/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320701050001</td><td>MOKHAMAD RIFKY FELANI</td><td>L</td><td>07/01/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321006400001</td><td>TARKIP</td><td>L</td><td>10/06/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320409620002</td><td>TONI</td><td>L</td><td>04/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325401690002</td><td>LI'ANI</td><td>P</td><td>14/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324704950002</td><td>DESI WULANDARI</td><td>P</td><td>07/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325808460002</td><td>SATUPAH</td><td>P</td><td>18/08/1946</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325511700001</td><td>SUTARTIK</td><td>P</td><td>15/11/1970</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321902770001</td><td>ROBBI PRANOTO</td><td>L</td><td>19/02/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321506650005</td><td>SIYONO</td><td>L</td><td>15/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325801680001</td><td>LASMIYATI</td><td>P</td><td>18/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322205880001</td><td>ARI SISWANTO</td><td>L</td><td>22/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322507390001</td><td>YASIR</td><td>L</td><td>25/07/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325905510002</td><td>DARMINTEN</td><td>P</td><td>19/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321907840002</td><td>IRWAN</td><td>L</td><td>19/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322110710001</td><td>SUWITO</td><td>L</td><td>21/10/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012700004</td><td>SUDARTIK</td><td>P</td><td>10/12/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322510940002</td><td>ANGGIT SETIAWAN</td><td>L</td><td>25/10/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326304030001</td><td>APRIL REFITA DEWI</td><td>P</td><td>23/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320602300002</td><td>KARTORIN</td><td>L</td><td>06/02/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325108780007</td><td>SUPARNI</td><td>P</td><td>11/08/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322702670001</td><td>MUJI HERIYONO</td><td>L</td><td>27/02/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325604630001</td><td>SUNIK</td><td>P</td><td>16/04/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321303970003</td><td>RIKO HARYONO</td><td>L</td><td>13/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320405630001</td><td>WASIS RIANTO</td><td>L</td><td>04/05/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324606630001</td><td>WALIMAH</td><td>P</td><td>06/06/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324404990001</td><td>SISKA PUTRI WIJAYANTI</td><td>P</td><td>04/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321004040002</td><td>M D ARIFFANDI</td><td>L</td><td>10/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322907690001</td><td>HARIADI</td><td>L</td><td>29/07/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902710001</td><td>MISTIN</td><td>P</td><td>09/02/1971</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326009980002</td><td>RATIH DIAH OCTAVIANI</td><td>P</td><td>20/09/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323003030001</td><td>FAJAR ILHAM SAPUTRA</td><td>L</td><td>30/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325805350001</td><td>SARIYEM</td><td>P</td><td>18/05/1935</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321805380001</td><td>YAHMAN</td><td>L</td><td>18/05/1938</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320911490002</td><td>ABD CHOLIQ</td><td>L</td><td>09/11/1949</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324810500002</td><td>MARYAM</td><td>P</td><td>08/10/1950</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322612830002</td><td>DAVID DWI ATMOKO</td><td>L</td><td>26/12/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320802880002</td><td>AHMAD EL RIZA</td><td>L</td><td>08/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010680002</td><td>SUSNANDRI</td><td>L</td><td>10/10/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325302760001</td><td>MUNTOMIMAH</td><td>P</td><td>13/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321105940001</td><td>IVAN AGUNG ARIFANTO</td><td>L</td><td>11/05/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321501000001</td><td>ISNA IKBAL ARI FANDRI</td><td>L</td><td>15/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320608530001</td><td>PARAN</td><td>L</td><td>06/08/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325203600002</td><td>SRIATI</td><td>P</td><td>12/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712820001</td><td>RATNAWATI</td><td>P</td><td>07/12/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322701850004</td><td>ANANG PRASETYO</td><td>L</td><td>27/01/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325506540001</td><td>SIATIN</td><td>P</td><td>15/06/1954</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320404840003</td><td>GIANTO</td><td>L</td><td>04/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325504510002</td><td>NGADIMAN</td><td>P</td><td>15/04/1951</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324308970001</td><td>DEWI KARTIKA AGUSTINA</td><td>P</td><td>03/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321112690005</td><td>GHOLIB ALI MA'RUFIN</td><td>L</td><td>11/12/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324905770001</td><td>ROIKHATUL UMAMI</td><td>P</td><td>09/05/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321205040003</td><td>YUSRON AQSONI</td><td>L</td><td>12/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320411630004</td><td>JEMINO</td><td>L</td><td>04/11/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325510770004</td><td>CHOTIAH</td><td>P</td><td>15/10/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326705030003</td><td>MAULA FIRDAUSI NUZULA</td><td>P</td><td>27/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321702770002</td><td>KASMUIN</td><td>L</td><td>17/02/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326507750006</td><td>RETNA NINGSIH</td><td>P</td><td>25/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321807010001</td><td>RAMA SATRIYO WIBOWO</td><td>L</td><td>18/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326502070001</td><td>NUR ADITA RAHMAWATI</td><td>P</td><td>25/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607580003</td><td>YASIPUN</td><td>L</td><td>06/07/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507326409650002</td><td>CHULASOTIN NASIKAH</td><td>P</td><td>24/09/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326702900001</td><td>BUNGA KUMALA SARI</td><td>P</td><td>27/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325007970002</td><td>AFIFA FAUZIA RAHMA SARI</td><td>P</td><td>10/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321504090004</td><td>NUGROHO GEGER PAMUNGKAS</td><td>L</td><td>15/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323101840001</td><td>SAMSUL MUIN</td><td>L</td><td>31/01/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326307840001</td><td>SULIYAH MARTIKA</td><td>P</td><td>23/07/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321203090001</td><td>M ADAM FISZA H</td><td>L</td><td>12/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325009390002</td><td>TIANAH</td><td>P</td><td>10/09/1939</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322310870002</td><td>ADI BAYURO</td><td>L</td><td>23/10/1987</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326609890001</td><td>NILU TIRTAWATI</td><td>P</td><td>26/09/1989</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321212300001</td><td>PARPAN</td><td>L</td><td>12/12/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211770002</td><td>ADITIYA TUKIMAN</td><td>L</td><td>12/11/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327001860003</td><td>ASNAH KHOIRUM MASRUROH</td><td>P</td><td>30/01/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320706070001</td><td>ACHMAD FARID FANANI</td><td>L</td><td>07/06/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322011730001</td><td>KASIYAN</td><td>L</td><td>20/11/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325609730004</td><td>SAFIATU HAYATI</td><td>P</td><td>16/09/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324203990002</td><td>RASIDA SOFIYANA</td><td>P</td><td>02/03/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320609480001</td><td>TAWI</td><td>L</td><td>06/09/1948</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206530001</td><td>SEMINAH</td><td>P</td><td>12/06/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321011840002</td><td>SETIAWAN</td><td>L</td><td>10/11/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321803600001</td><td>SURATEMAN</td><td>L</td><td>18/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326504720001</td><td>HALIMATUS SA'DIYAH</td><td>P</td><td>25/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320507940001</td><td>AQIDU AGGA. F</td><td>L</td><td>05/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326808990001</td><td>ANGGI ALYA NAMIRA</td><td>P</td><td>28/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320910340002</td><td>DARKUN</td><td>L</td><td>09/10/1934</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325205660005</td><td>SITI CHUDAIFAH</td><td>P</td><td>12/05/1966</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326412990001</td><td>DUWI PURWATI</td><td>P</td><td>24/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320207470001</td><td>KAMSARI</td><td>L</td><td>02/07/1947</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325304570002</td><td>KHOIRIYAH</td><td>P</td><td>13/04/1957</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320511400002</td><td>KASDI</td><td>L</td><td>05/11/1940</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324510470001</td><td>WIJI</td><td>P</td><td>05/10/1947</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324509760001</td><td>TASEMI</td><td>P</td><td>05/09/1976</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321308860002</td><td>RUDI WIBOWO</td><td>L</td><td>13/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321306890001</td><td>ISTIONO</td><td>L</td><td>13/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320907840001</td><td>SUSILO</td><td>L</td><td>09/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321406740001</td><td>MATORI</td><td>L</td><td>14/06/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325508780002</td><td>USWATUN CHASANAH</td><td>P</td><td>15/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322805020001</td><td>AGIS ANDREA. F</td><td>L</td><td>28/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320806760002</td><td>OTOMO</td><td>L</td><td>08/06/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324112750001</td><td>SITI</td><td>P</td><td>01/12/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324608040001</td><td>DIAN PUTRI SAFIRANI</td><td>P</td><td>06/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321209330001</td><td>TARMUN</td><td>L</td><td>12/09/1933</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325108410001</td><td>TIANAH</td><td>P</td><td>11/08/1941</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507326607290001</td><td>DARSI</td><td>P</td><td>26/07/1929</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321208500002</td><td>YASEMUN</td><td>L</td><td>12/08/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325308600001</td><td>MESENI</td><td>P</td><td>13/08/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326411760001</td><td>MUJIATI</td><td>P</td><td>24/11/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101780009</td><td>AHMAD JUNAIDI</td><td>L</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320901800002</td><td>AJI SUWOKO</td><td>L</td><td>09/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507327001860002</td><td>A KHOIRU MASRURO</td><td>P</td><td>30/01/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320501780003</td><td>MUHAMMAD HABIB</td><td>L</td><td>05/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320101730013</td><td>GUNAWAN</td><td>L</td><td>01/01/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324403770001</td><td>NUR LAELA. J</td><td>P</td><td>04/03/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325901970001</td><td>DIAN IKA PUTRI</td><td>P</td><td>19/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320903730003</td><td>ABDUL HARIS MUSTOFA</td><td>L</td><td>09/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326308740001</td><td>SITI AMINAH</td><td>P</td><td>23/08/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321705940002</td><td>MUHAMAD YAHYA WAHIDIAWAN</td><td>L</td><td>17/05/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321609030001</td><td>ARIFAN YUDAN FIRDAUS</td><td>L</td><td>16/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324406350001</td><td>SAITUN</td><td>P</td><td>04/06/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322512800001</td><td>SUKARDI</td><td>L</td><td>25/12/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326410810001</td><td>ELFIATI</td><td>P</td><td>24/10/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322908020002</td><td>ALDI PUTRA PRATAMA</td><td>L</td><td>29/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324711050001</td><td>FENNY PUTRI FEBBIAN</td><td>P</td><td>07/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320209690002</td><td>SUPRIADI</td><td>L</td><td>02/09/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324905690003</td><td>SITI ULFA</td><td>P</td><td>09/05/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324505960001</td><td>PIPIT PRAMITA DEWI</td><td>P</td><td>05/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320609020003</td><td>FIRLI DIAN PRATAMA</td><td>L</td><td>06/09/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321905410001</td><td>MUHAMMAD MAHMUD</td><td>L</td><td>19/05/1941</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326207410001</td><td>SITI MAIMUNAH</td><td>P</td><td>22/07/1941</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321309820003</td><td>ZAINAL AMIN</td><td>L</td><td>13/09/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320605660001</td><td>ATIMAN</td><td>L</td><td>06/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324708700002</td><td>SUMILAH</td><td>P</td><td>07/08/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324702860001</td><td>ANIS SUAIBAH</td><td>P</td><td>07/02/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324504860001</td><td>SULIS SETYOWATI</td><td>P</td><td>05/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324211940002</td><td>HESTI AYU PURWITA</td><td>P</td><td>02/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507322705510001</td><td>SUPENO</td><td>L</td><td>27/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326906590001</td><td>SUMIATI</td><td>P</td><td>29/06/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320209890004</td><td>GUNAWAN</td><td>L</td><td>02/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322304780003</td><td>ALFAN ARIS</td><td>L</td><td>23/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009750002</td><td>SUPARMI</td><td>P</td><td>10/09/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325911040004</td><td>ANIK NURIL LAILA</td><td>P</td><td>19/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320901480001</td><td>YAMAN</td><td>L</td><td>09/01/1948</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324205530001</td><td>PARTI</td><td>P</td><td>02/05/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324611670002</td><td>SUTIN</td><td>P</td><td>06/11/1967</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322212890002</td><td>HERU PRABOWO</td><td>L</td><td>22/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320512920002</td><td>TRIO ADI CANDRA</td><td>L</td><td>05/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011960001</td><td>AMALIA FATRIANA</td><td>P</td><td>10/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321107070003</td><td>ANDRIANO RISKI F</td><td>L</td><td>11/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325106350002</td><td>PIANI</td><td>P</td><td>11/06/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321512590001</td><td>FAHRUDIN</td><td>L</td><td>15/12/1959</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324711670001</td><td>JUWARIYAH</td><td>P</td><td>07/11/1967</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322310890002</td><td>DODY ADI WIJAYA</td><td>L</td><td>23/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324612950003</td><td>LAELA NUR MALIKHAH</td><td>P</td><td>06/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507326009990001</td><td>DIAH NUR ARIFAH</td><td>P</td><td>20/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320105630001</td><td>SUDARTO</td><td>L</td><td>01/05/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325008650003</td><td>ROHMAH</td><td>P</td><td>10/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326706980002</td><td>TANTI YAUSEVA</td><td>P</td><td>27/06/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326709070003</td><td>DELLA LESTARI</td><td>P</td><td>27/09/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321808770001</td><td>RAFSI ISWANTO</td><td>L</td><td>18/08/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208880003</td><td>NENY AGUSTUS</td><td>P</td><td>12/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325705760002</td><td>RUSDIYAH</td><td>P</td><td>17/05/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321512950002</td><td>MUKAMAT KALIM</td><td>L</td><td>15/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320101580032</td><td>YAWI</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326406600001</td><td>MUSRIFAH</td><td>P</td><td>24/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321505550002</td><td>SURATEMAN</td><td>L</td><td>15/05/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326401610001</td><td>ALFIYAH</td><td>P</td><td>24/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321107850001</td><td>ZAINUL R</td><td>L</td><td>11/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325303900001</td><td>MIFTAHUL IMA</td><td>P</td><td>13/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607580001</td><td>AMA YASIFUN</td><td>L</td><td>06/07/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TENTARA NASIONAL INDONESIA</td></tr>
 <tr><td>3507326409650001</td><td>CHULASOTIN NASIHAH</td><td>P</td><td>24/09/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326702900004</td><td>BUNGA KUMALASARI</td><td>P</td><td>27/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325007970003</td><td>AFIFA FAUDIN R</td><td>P</td><td>10/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321504090003</td><td>NUGROHO GEGER PAMUNGKAS</td><td>L</td><td>15/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321905670001</td><td>JAMUN</td><td>L</td><td>19/05/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324905680003</td><td>SARMI</td><td>P</td><td>09/05/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324408940002</td><td>YENITA MAYASARI</td><td>P</td><td>04/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326711040002</td><td>RISMA SAPUTRI</td><td>P</td><td>27/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321912370001</td><td>SUKARDI</td><td>L</td><td>19/12/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325607370001</td><td>AMINTEN</td><td>P</td><td>16/07/1937</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320202560002</td><td>SUNAR YOEPENDI</td><td>L</td><td>02/02/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324104460003</td><td>LATIN</td><td>P</td><td>01/04/1946</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320405640001</td><td>ISMAIL</td><td>L</td><td>04/05/1964</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326108730001</td><td>ZUMROTIN</td><td>P</td><td>21/08/1973</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322911000001</td><td>M ALZAM RAMADHAN</td><td>L</td><td>29/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321610030001</td><td>M AFIQ FIRDAUS</td><td>L</td><td>16/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320808790002</td><td>EDY PURNAWAN</td><td>L</td><td>08/08/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326206840001</td><td>EKA WULANDARI</td><td>P</td><td>22/06/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324405020003</td><td>CINDI CLARITA</td><td>P</td><td>04/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326302100001</td><td>SILVIA PUTRI MAULIDIA</td><td>P</td><td>23/02/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321101830002</td><td>ADI PRIANTO</td><td>L</td><td>11/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325412830001</td><td>ANI SUSANTI</td><td>P</td><td>14/12/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324606080001</td><td>DIAN PUTRI FINATA</td><td>P</td><td>06/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320403730003</td><td>YANTO</td><td>L</td><td>04/03/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325708830004</td><td>AGUS TRIANI</td><td>P</td><td>17/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326410030002</td><td>WIDAYANTI CANDRANINGTIAS</td><td>P</td><td>24/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320902680002</td><td>KASAN MUNTHOLIB</td><td>L</td><td>09/02/1968</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009700003</td><td>SUNARI</td><td>P</td><td>10/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323103930001</td><td>FERI DIAN SANDI</td><td>L</td><td>31/03/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326212000003</td><td>RISMA ANDILLIA</td><td>P</td><td>22/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321506510001</td><td>KUSNADI</td><td>L</td><td>15/06/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325505570001</td><td>SUPARTI</td><td>P</td><td>15/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321207790001</td><td>SUSANTO</td><td>L</td><td>12/07/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326301850001</td><td>NURIANAH</td><td>P</td><td>23/01/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321209940001</td><td>LUTFI SAPUTRO</td><td>L</td><td>12/09/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320303790006</td><td>TEGUH SISWANTO</td><td>L</td><td>03/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325410790002</td><td>SUJIATI</td><td>P</td><td>14/10/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325708070001</td><td>CINTIA AYU PURNAMA SARI</td><td>P</td><td>17/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321606640001</td><td>JAMAALI</td><td>L</td><td>16/06/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507325811650003</td><td>KHOIRIYAH MAIMUNAH</td><td>P</td><td>18/11/1965</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321510420001</td><td>SAIPAN</td><td>L</td><td>15/10/1942</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324109550005</td><td>PI'ATIN</td><td>P</td><td>01/09/1955</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321308790002</td><td>PRIONO</td><td>L</td><td>13/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322607860003</td><td>FIMA HADI</td><td>L</td><td>26/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325001890001</td><td>LAILATUS SUHA</td><td>P</td><td>10/01/1989</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325905910002</td><td>ROMA DLOTIN</td><td>P</td><td>19/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320412940001</td><td>A. KANIF</td><td>L</td><td>04/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326505460001</td><td>MUNARAH</td><td>P</td><td>25/05/1946</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325211470002</td><td>NASUCHA</td><td>P</td><td>12/11/1947</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507322705760001</td><td>MUHAMMAD AINUR ROFIQ</td><td>L</td><td>27/05/1976</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324608790001</td><td>RIFATUL MUNIROH</td><td>P</td><td>06/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507122407780006</td><td>TONNY WINOKAN</td><td>L</td><td>24/07/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322503110001</td><td>MUHAMMAD NAFIS 'IZZANY</td><td>L</td><td>25/03/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322602350001</td><td>PARDI</td><td>L</td><td>26/02/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108430007</td><td>LIATI</td><td>P</td><td>01/08/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321906580002</td><td>SAMSUL ARIFIN</td><td>L</td><td>19/06/1958</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321208580001</td><td>SULOSO</td><td>L</td><td>12/08/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326108600001</td><td>SURANI</td><td>P</td><td>21/08/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326308870001</td><td>TRI AGUSTINA</td><td>P</td><td>23/08/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326609950001</td><td>SEPTI PUJI ASTUTIK</td><td>P</td><td>26/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324301020002</td><td>AYU WULANDARI</td><td>P</td><td>03/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321006090003</td><td>FAIZ ZULFADLI</td><td>L</td><td>10/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320407400002</td><td>SODIQ</td><td>L</td><td>04/07/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324506420002</td><td>CHUNAYAH</td><td>P</td><td>05/06/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326010800001</td><td>MUYASAROH</td><td>P</td><td>20/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320808740001</td><td>SUDARMANI</td><td>L</td><td>08/08/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321605670002</td><td>MUH SULKAN</td><td>L</td><td>16/05/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324406790002</td><td>SULIKAH</td><td>P</td><td>04/06/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325306930002</td><td>FATIM RIZALATUL IMRINA</td><td>P</td><td>13/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325710100002</td><td>KAMILA SAFA SALSABILA PUTRI</td><td>P</td><td>17/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321904630001</td><td>CHOIRUL ANAM</td><td>L</td><td>19/04/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324607970006</td><td>ELOK FATMAWATI</td><td>P</td><td>06/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321305410001</td><td>KOSIM</td><td>L</td><td>13/05/1941</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325508620003</td><td>PAINAH</td><td>P</td><td>15/08/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321501680001</td><td>NURSAMSU</td><td>L</td><td>15/01/1968</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326506760001</td><td>NURHAYATI</td><td>P</td><td>25/06/1976</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325201830002</td><td>NIKMATUL AZIZAH</td><td>P</td><td>12/01/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324506000002</td><td>HELEN LAILATUL. M</td><td>P</td><td>05/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322108640001</td><td>WASIS</td><td>L</td><td>21/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327006650001</td><td>WINARSIH</td><td>P</td><td>30/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322703940002</td><td>ANDRI</td><td>L</td><td>27/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321408680001</td><td>AGUS SISWANTO</td><td>L</td><td>14/08/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325011750001</td><td>SUNARSEH</td><td>P</td><td>10/11/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324402970004</td><td>ALFIATI NIKMA. S</td><td>P</td><td>04/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607060003</td><td>SEPTIAN DUWI SISWANTO</td><td>L</td><td>16/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101650037</td><td>JADI</td><td>L</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325104650002</td><td>DARSINI</td><td>P</td><td>11/04/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325307900001</td><td>EKA DEVI YULIANI</td><td>P</td><td>13/07/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322404960001</td><td>FIRMAN MUSTOFA</td><td>L</td><td>24/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101560001</td><td>ABD QODIR</td><td>L</td><td>01/01/1956</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324505680005</td><td>IBTIDAIYAH</td><td>P</td><td>05/05/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322704860001</td><td>AGUS MA'RUF</td><td>L</td><td>27/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320407660001</td><td>JEMAUN</td><td>L</td><td>04/07/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325904630001</td><td>SUMARMI</td><td>P</td><td>19/04/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321207840001</td><td>EKO RUDI SETIAWAN</td><td>L</td><td>12/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111040004</td><td>ATRIKA WAHYUNI</td><td>P</td><td>11/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324908580001</td><td>MISIYAR</td><td>P</td><td>09/08/1958</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321107810002</td><td>SUMARDI</td><td>L</td><td>11/07/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326509040001</td><td>SYELLA ATRIKA</td><td>P</td><td>25/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324909520001</td><td>SIAMI</td><td>P</td><td>09/09/1952</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322711890005</td><td>ARIK GUNAWAN</td><td>L</td><td>27/11/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321903570003</td><td>JANURI</td><td>L</td><td>19/03/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324511590002</td><td>TUMIYEM</td><td>P</td><td>05/11/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321109320001</td><td>AHMAD FAKIH</td><td>L</td><td>11/09/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326106480001</td><td>NURHIDAYATI NINGSIH</td><td>P</td><td>21/06/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324610800002</td><td>KISMIATUN FAUZIYAH</td><td>P</td><td>06/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322311820003</td><td>MAKINATUN ZAINUDIN</td><td>L</td><td>23/11/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321507530001</td><td>WASONO</td><td>L</td><td>15/07/1953</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325705560001</td><td>SUKARSIH</td><td>P</td><td>17/05/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325906340002</td><td>JIANI</td><td>P</td><td>19/06/1934</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101620029</td><td>KASIYAN</td><td>L</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324409660001</td><td>KASEMI</td><td>P</td><td>04/09/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326804860001</td><td>DWI MILAYANTI</td><td>P</td><td>28/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322506890002</td><td>AGUNG TRIYANTO</td><td>L</td><td>25/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325904330001</td><td>WARTI</td><td>P</td><td>19/04/1933</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320107730005</td><td>BUDIONO</td><td>L</td><td>01/07/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326010720001</td><td>SRIATIN</td><td>P</td><td>20/10/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325210990002</td><td>ALFURENA PRABANDANI</td><td>P</td><td>12/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325504090001</td><td>FLORINDA ANINDRIA</td><td>P</td><td>15/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325509300002</td><td>DAMIAH</td><td>P</td><td>15/09/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320405490001</td><td>SENO</td><td>L</td><td>04/05/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325505510002</td><td>JASRI</td><td>P</td><td>15/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321011800002</td><td>MESMAN</td><td>L</td><td>10/11/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324505890002</td><td>RHOMA DHOTUL F</td><td>P</td><td>05/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322004700002</td><td>ABD HAMID MAHMUD</td><td>L</td><td>20/04/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321601710001</td><td>MOCH AMIN</td><td>L</td><td>16/01/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325504770002</td><td>SUMIATI MIMIN</td><td>P</td><td>15/04/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321005220001</td><td>ANDI MOCH YUSUF</td><td>L</td><td>10/05/1922</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325211470001</td><td>NASUKHAH</td><td>P</td><td>12/11/1947</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324608490001</td><td>RIF ATUL MUNIROH</td><td>P</td><td>06/08/1949</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507322702760001</td><td>MUHAMAD AINURROFIQ</td><td>L</td><td>27/02/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320509380001</td><td>TACHIYAT</td><td>L</td><td>05/09/1938</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325106690002</td><td>UMMUL MUFRODAH</td><td>P</td><td>11/06/1969</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507323011910001</td><td>CHALIM FATCHUL BAHRI</td><td>L</td><td>30/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507321204690003</td><td>MULIONO</td><td>L</td><td>12/04/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326507800006</td><td>SUSANA</td><td>P</td><td>25/07/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325211010002</td><td>FADIATUL MUSTAFIROH</td><td>P</td><td>12/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324111050001</td><td>SAFILLATUL FITRIYA</td><td>P</td><td>01/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325009310001</td><td>DAMIYAH</td><td>P</td><td>10/09/1931</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507321210650001</td><td>WASIS</td><td>L</td><td>12/10/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325709710001</td><td>LILIK ATEYAH</td><td>P</td><td>17/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320512870002</td><td>ANDIK IRAWAN</td><td>L</td><td>05/12/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326612040001</td><td>SETIYA AJENG FITRI</td><td>P</td><td>26/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321008350003</td><td>PAIDI</td><td>L</td><td>10/08/1935</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321001590001</td><td>ASNAN</td><td>L</td><td>10/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325202600001</td><td>SARI'AH</td><td>P</td><td>12/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326506850001</td><td>HAVIDOTUL AMALIYAH</td><td>P</td><td>25/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322512860003</td><td>NANANG SYAHRONI</td><td>L</td><td>25/12/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321108540003</td><td>Drs.M FU'AT</td><td>L</td><td>11/08/1954</td><td>Islam</td><td>Kawin</td><td>Strata II</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324106640001</td><td>SITI ROHMAH</td><td>P</td><td>01/06/1964</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320106800002</td><td>KHOIRUL MUSONIF</td><td>L</td><td>01/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101840010</td><td>HIDAYATURROHMAN</td><td>L</td><td>01/01/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320707750001</td><td>MUH TAMYIT</td><td>L</td><td>07/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325202800003</td><td>DINA EKA RIWAYATI</td><td>P</td><td>12/02/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320606010001</td><td>M DIAZ ERLANGGA</td><td>L</td><td>06/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326211080001</td><td>NESYA DWI DINITA</td><td>P</td><td>22/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322508790003</td><td>HARIANTO</td><td>L</td><td>25/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507326006810003</td><td>HENNY WULANDARI</td><td>P</td><td>20/06/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507322905060001</td><td>RAIHAN DZAKARDIANSAH</td><td>L</td><td>29/05/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320104590001</td><td>SAMPAN</td><td>L</td><td>01/04/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324401600001</td><td>SUPARIYAH</td><td>P</td><td>04/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321801820001</td><td>ADI SUSANTO</td><td>L</td><td>18/01/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325703860001</td><td>IDA YULIASTIKA</td><td>P</td><td>17/03/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321907610001</td><td>SUGIO HARIONO</td><td>L</td><td>19/07/1961</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326011600001</td><td>SARPIK</td><td>P</td><td>20/11/1960</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324911830001</td><td>DWI ASTRININGTYAS</td><td>P</td><td>09/11/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324502910001</td><td>WINDA NOVIANA</td><td>P</td><td>05/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321506450001</td><td>MIADI</td><td>L</td><td>15/06/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325107640001</td><td>JUMINAH</td><td>P</td><td>11/07/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322909800001</td><td>EDI ERNAWAN</td><td>L</td><td>29/09/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321208840002</td><td>CHOIRUL DJAZULI</td><td>L</td><td>12/08/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322710700001</td><td>NURUL MIKAIL</td><td>L</td><td>27/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101720003</td><td>SRI BUDI WINARNI</td><td>P</td><td>01/01/1972</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325112990001</td><td>LUQYANA FI ADNIN</td><td>P</td><td>11/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325410020001</td><td>TATYANA AIN SHIN</td><td>P</td><td>14/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324204040001</td><td>SOFYANA IL LIYIN</td><td>P</td><td>02/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324408500001</td><td>ASIYAH</td><td>P</td><td>04/08/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321109760001</td><td>NUR FAUZI</td><td>L</td><td>11/09/1976</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321902820001</td><td>HERI EKA</td><td>L</td><td>19/02/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320510910001</td><td>NGADISAN</td><td>L</td><td>05/10/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321112730002</td><td>SANTOSO</td><td>L</td><td>11/12/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325010800002</td><td>IRAWATI</td><td>P</td><td>10/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324903020001</td><td>SHINTA MARSANDA ENGGARWATI</td><td>P</td><td>09/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324305070002</td><td>MEILYA ANJALNA IRSANTI</td><td>P</td><td>03/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325501550001</td><td>SUMIRAH</td><td>P</td><td>15/01/1955</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321505600001</td><td>SAMI'UN</td><td>L</td><td>15/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325506660001</td><td>ULIS SETYOWATI</td><td>P</td><td>15/06/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321904840002</td><td>EKO SETYO WAHYUDI</td><td>L</td><td>19/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322010880001</td><td>BAYU TRESDIANTO</td><td>L</td><td>20/10/1988</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320207690001</td><td>KHOIRUL ANAM</td><td>L</td><td>02/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325012760001</td><td>ITA ISNAINI</td><td>P</td><td>10/12/1976</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321805070001</td><td>HILDAN MAFTUH AFNAN</td><td>L</td><td>18/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102640001</td><td>ABDUL MUKTHI</td><td>L</td><td>01/02/1964</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325107730001</td><td>FARIDATUL MUSLIKHATIN</td><td>P</td><td>11/07/1973</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324809940001</td><td>SAYIDA ALIF BRILLIAN</td><td>P</td><td>08/09/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325708980002</td><td>AZIZA ILMIA FIRDAUS</td><td>P</td><td>17/08/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326603030001</td><td>IRADA SHIDRATIN</td><td>P</td><td>26/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320301770001</td><td>EFENDI</td><td>L</td><td>03/01/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325407830001</td><td>SRI UTAMI</td><td>P</td><td>14/07/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324104020002</td><td>L A VIOLA EFENDI</td><td>P</td><td>01/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304040002</td><td>RAKA ADITYA EFENDI</td><td>L</td><td>03/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323004750001</td><td>BUDI PRASETYO</td><td>L</td><td>30/04/1975</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326408780002</td><td>SITI MAISAROH</td><td>P</td><td>24/08/1978</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322906030001</td><td>ZEN SATRIA WIJAYA</td><td>L</td><td>29/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321104070001</td><td>MAULANA ARIF FATKHUL KIROM</td><td>L</td><td>11/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320107610001</td><td>IMAM SYAFI'I</td><td>L</td><td>01/07/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324411710001</td><td>SUKATEMI</td><td>P</td><td>04/11/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324701960002</td><td>MARNI NINGSIH</td><td>P</td><td>07/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324107400011</td><td>DARMI</td><td>P</td><td>01/07/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321706800001</td><td>ANDOKO</td><td>L</td><td>17/06/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507325910840002</td><td>SULISTIANI</td><td>P</td><td>19/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326511050001</td><td>CITRA SUCI WIDYASTUTIK</td><td>P</td><td>25/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321011870004</td><td>NANANG SETIAWAN</td><td>L</td><td>10/11/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325002900004</td><td>DIAN SISKA MEGAWATI</td><td>P</td><td>10/02/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326503090002</td><td>DEFINA PUTRI AMELIA</td><td>P</td><td>25/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320408760004</td><td>ASWANTO</td><td>L</td><td>04/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326905790003</td><td>YAYUK INDAYANI</td><td>P</td><td>29/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324609040001</td><td>CAHYA NAVI'ATUSS ZAHRA</td><td>P</td><td>06/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325603070001</td><td>NAJWA ROSHIEVA PUTRI</td><td>P</td><td>16/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321504400002</td><td>MARIJAN</td><td>L</td><td>15/04/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320207730003</td><td>LANURI</td><td>L</td><td>02/07/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324903820006</td><td>TUNINGSIH</td><td>P</td><td>09/03/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322601110001</td><td>DIEGO ROSIKY YANUAR</td><td>L</td><td>26/01/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709890001</td><td>TRI WAHYUDIONO</td><td>L</td><td>07/09/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507316808870001</td><td>WIWIK SUGIARTI</td><td>P</td><td>28/08/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324910100002</td><td>ZAHRA ALIF WAHYUNIARTI</td><td>P</td><td>09/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321905380001</td><td>DAKELAN</td><td>L</td><td>19/05/1938</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325905400001</td><td>SARTIMAH</td><td>P</td><td>19/05/1940</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320708770003</td><td>NGATEMUN ADI W</td><td>L</td><td>07/08/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321501790004</td><td>SUGIONO</td><td>L</td><td>15/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320705800004</td><td>SUPANDRI</td><td>L</td><td>07/05/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325305870001</td><td>METI PUSTIKA SRIHANDAYANI</td><td>P</td><td>13/05/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321511090002</td><td>ADINATA BINTANG NOVA A</td><td>L</td><td>15/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101390015</td><td>SUNARI</td><td>L</td><td>01/01/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101480032</td><td>SITI ALFIYAH</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322111700001</td><td>NURCHOLIS</td><td>L</td><td>21/11/1970</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325206850001</td><td>ELIS TYARINI</td><td>P</td><td>12/06/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326703090002</td><td>FARISKA ANAYA MAULACHORIN</td><td>P</td><td>27/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320509720001</td><td>M TOHARI</td><td>L</td><td>05/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325210780001</td><td>TITIK SETYOWATI</td><td>P</td><td>12/10/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324806000002</td><td>MUZAYANAH</td><td>P</td><td>08/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325512060003</td><td>IMROATUL MAHMUDA</td><td>P</td><td>15/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322206580001</td><td>SUNARTO</td><td>L</td><td>22/06/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210610002</td><td>SITI CHOTIMAH</td><td>P</td><td>12/10/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323011850001</td><td>SAMSUL HUDA</td><td>L</td><td>30/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326604880002</td><td>AIDATUR ROHMAH</td><td>P</td><td>26/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321110640002</td><td>PAIDI</td><td>L</td><td>11/10/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325002650002</td><td>PONITI</td><td>P</td><td>10/02/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322001890001</td><td>ASENAN</td><td>L</td><td>20/01/1989</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321009890003</td><td>DIDIK SANTOSO</td><td>L</td><td>10/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321206480001</td><td>RIDWAN</td><td>L</td><td>12/06/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324702580001</td><td>KUMAIYAH</td><td>P</td><td>07/02/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101750014</td><td>SUBEKHAN</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324211810002</td><td>SITI ASFUFAH</td><td>P</td><td>02/11/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326608950002</td><td>ALIF MAULIDIYAH</td><td>P</td><td>26/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321007500001</td><td>WAIDI</td><td>L</td><td>10/07/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326809600002</td><td>MARNI</td><td>P</td><td>28/09/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320504530002</td><td>TUMIRAN</td><td>L</td><td>05/04/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326009610001</td><td>WARTINI</td><td>P</td><td>20/09/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324708780001</td><td>SUNARMI NINGSIH</td><td>P</td><td>07/08/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909810003</td><td>HADI ISMOYO</td><td>L</td><td>09/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321009810001</td><td>HADI SISWOYO</td><td>L</td><td>10/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325910820002</td><td>SULISTIANI</td><td>P</td><td>19/10/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107930003</td><td>GIANTI PUSPITASARI</td><td>P</td><td>01/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324107930002</td><td>GIANA WULANDARI</td><td>P</td><td>01/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325608960002</td><td>TIKA AGUSTINA</td><td>P</td><td>16/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321708410002</td><td>SUNYOTO</td><td>L</td><td>17/08/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324406480003</td><td>SIMPEN</td><td>P</td><td>04/06/1948</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327112690003</td><td>SUTI'AH</td><td>P</td><td>31/12/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326012700004</td><td>PONINTEN</td><td>P</td><td>20/12/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321202750002</td><td>HERI</td><td>L</td><td>12/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320902700001</td><td>SLIMIN</td><td>L</td><td>09/02/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325203710001</td><td>NURIYATI</td><td>P</td><td>12/03/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321412930001</td><td>DECKY NURDIANSAH</td><td>L</td><td>14/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322803000002</td><td>WYLDAN ADYTYA. NS</td><td>L</td><td>28/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322001650002</td><td>SAMPAN PRASETIO</td><td>L</td><td>20/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209620001</td><td>WASINI</td><td>P</td><td>12/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321005480001</td><td>SENERI</td><td>L</td><td>10/05/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324806490002</td><td>JAMI</td><td>P</td><td>08/06/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325306820001</td><td>RATNAWATI</td><td>P</td><td>13/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322608730002</td><td>KARIYANTO</td><td>L</td><td>26/08/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322208110001</td><td>GEDE GERA GLADERA</td><td>L</td><td>22/08/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321505600002</td><td>MURA'I</td><td>L</td><td>15/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325906740001</td><td>MESENI</td><td>P</td><td>19/06/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320303980002</td><td>ARINAL HAQQO</td><td>L</td><td>03/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325404500001</td><td>TU'AH</td><td>P</td><td>14/04/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320506740004</td><td>SUGITO</td><td>L</td><td>05/06/1974</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321203770003</td><td>SUTIKNO</td><td>L</td><td>12/03/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322309710001</td><td>SUPRIANTO</td><td>L</td><td>23/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325007770003</td><td>SUBADRIYAH</td><td>P</td><td>10/07/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322707020001</td><td>ALFIAN PRAMUDYA SALSABIL</td><td>L</td><td>27/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>sd</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326503080002</td><td>ALFA SAKINA SALSABILA</td><td>P</td><td>25/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320108550011</td><td>TAKAT</td><td>L</td><td>01/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324805650002</td><td>SUKARMI</td><td>P</td><td>08/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320204880002</td><td>SUKARIONO</td><td>L</td><td>02/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322002890001</td><td>GUNARI</td><td>L</td><td>20/02/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322506980001</td><td>PRAMADANA SANDI</td><td>L</td><td>25/06/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321507630001</td><td>WASIS</td><td>L</td><td>15/07/1963</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324811750003</td><td>SUKATEMI</td><td>P</td><td>08/11/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325902960001</td><td>SAFITRIYA</td><td>P</td><td>19/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326709010002</td><td>JULIAS PUTRI</td><td>P</td><td>27/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324710030001</td><td>SELFI HIDAYATI</td><td>P</td><td>07/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322407600003</td><td>JAMAL</td><td>L</td><td>24/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325006630002</td><td>SUMARLIK</td><td>P</td><td>10/06/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320606820003</td><td>DAVIQ AFANDI</td><td>L</td><td>06/06/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324910930002</td><td>RIA ANINDA</td><td>P</td><td>09/10/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321503380002</td><td>YATEMO</td><td>L</td><td>15/03/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507325704410001</td><td>TIANAH</td><td>P</td><td>17/04/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324202820004</td><td>SUHARTATIK</td><td>P</td><td>02/02/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321209550001</td><td>SA'I</td><td>L</td><td>12/09/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324708550002</td><td>SUMILAH</td><td>P</td><td>07/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322001750004</td><td>MUHAMAD NUR HADI</td><td>L</td><td>20/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325311790001</td><td>TUTIK ISKANAH</td><td>P</td><td>13/11/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322808000005</td><td>MAHIS</td><td>L</td><td>28/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320603610002</td><td>BASORI</td><td>L</td><td>06/03/1961</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325708630002</td><td>TUTIK</td><td>P</td><td>17/08/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326705850001</td><td>RENI MUHAIMINU</td><td>P</td><td>27/05/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322312890001</td><td>DAFIT YOLANA</td><td>L</td><td>23/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325403980001</td><td>MIRA NIKITA DEWI</td><td>P</td><td>14/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321405610001</td><td>NGATEMAN</td><td>L</td><td>14/05/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324110660003</td><td>SITI AMINAH</td><td>P</td><td>01/10/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324302860001</td><td>SITI NURROSIDAH</td><td>P</td><td>03/02/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321906870002</td><td>M ZAINUL ARIFIN</td><td>L</td><td>19/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321710890001</td><td>SYAIFUL ANWAR</td><td>L</td><td>17/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325006930001</td><td>KHOLIFATUL JANAH</td><td>P</td><td>10/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321305960001</td><td>M ABDUL ROCHIM</td><td>L</td><td>13/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324612990001</td><td>SITI NUR LAILATUL M</td><td>P</td><td>06/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320806850002</td><td>ENDIK HADI SUTRISNO</td><td>L</td><td>08/06/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321806090001</td><td>MOH IRFAN ARROSYID</td><td>L</td><td>18/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325507410001</td><td>YATIN</td><td>P</td><td>15/07/1941</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101760009</td><td>LISMIATI</td><td>P</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322605020001</td><td>HAFID BAGUS PERDANA</td><td>L</td><td>26/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324403040001</td><td>LATIFAH NUR AJIJAH</td><td>P</td><td>04/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321111650003</td><td>RAMELI</td><td>L</td><td>11/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324908690002</td><td>PONIYAH</td><td>P</td><td>09/08/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321208880002</td><td>DIDIK WAWAN SAPUTRO</td><td>L</td><td>12/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325901920001</td><td>RENA RESTIANA</td><td>P</td><td>19/01/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320903680002</td><td>ABDUL ROHMAN</td><td>L</td><td>09/03/1968</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324701770003</td><td>ERNI YULIATI</td><td>P</td><td>07/01/1977</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326805980003</td><td>AINUN NAFI'A RAHMAN</td><td>P</td><td>28/05/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326209020003</td><td>UMMU LATIFAH RAHMAN</td><td>P</td><td>22/09/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324304330001</td><td>SARMINI</td><td>P</td><td>03/04/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320605460001</td><td>SUWADI</td><td>L</td><td>06/05/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205590001</td><td>MIAYAH</td><td>P</td><td>12/05/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104810003</td><td>SUMARMI</td><td>P</td><td>21/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405820001</td><td>SUKARSEH</td><td>P</td><td>14/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321008790005</td><td>USMAN</td><td>L</td><td>10/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321708810004</td><td>MOH MUKSIN</td><td>L</td><td>17/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324105050003</td><td>PUTRI MAYSAROH</td><td>P</td><td>01/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321111420001</td><td>IMAM TAUCHID</td><td>L</td><td>11/11/1942</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507325206520001</td><td>SUNARIYAH</td><td>P</td><td>12/06/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325704830001</td><td>HUSNIYATUN HIDAYAH</td><td>P</td><td>17/04/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322309770002</td><td>NUR KHOLIS</td><td>L</td><td>23/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322812100002</td><td>MUHAMMAD NEWA ATHA IKMAL</td><td>L</td><td>28/12/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320307680001</td><td>SANIMIN</td><td>L</td><td>03/07/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325612650001</td><td>SURATI</td><td>P</td><td>16/12/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321203710003</td><td>NURIADI</td><td>L</td><td>12/03/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324708780003</td><td>JUWARIYAH</td><td>P</td><td>07/08/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320512990004</td><td>FERDO A P R</td><td>L</td><td>05/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322009010001</td><td>ANDREAN EKO N S</td><td>L</td><td>20/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322709730002</td><td>NGATEMUN</td><td>L</td><td>27/09/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507324608800003</td><td>YULIATI</td><td>P</td><td>06/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322309990002</td><td>BAYU FERIANTO</td><td>L</td><td>23/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321006010002</td><td>BARRA SETIAJI</td><td>L</td><td>10/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322811090003</td><td>BIYMA AIRZA BASKORO</td><td>L</td><td>28/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322703280001</td><td>TAMIN</td><td>L</td><td>27/03/1928</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325801360001</td><td>KAMINTEN</td><td>P</td><td>18/01/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321012720004</td><td>CAHYO BUDIONO</td><td>L</td><td>10/12/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326203740001</td><td>MUNTIANAH</td><td>P</td><td>22/03/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322212970001</td><td>AYUB ADI PRAYOGO</td><td>L</td><td>22/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325210010004</td><td>ANGGUN REFILICA PUTRI</td><td>P</td><td>12/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321111750003</td><td>TARMIANTO</td><td>L</td><td>11/11/1975</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325307800006</td><td>WIWIK SETYOWATI</td><td>P</td><td>13/07/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321508570004</td><td>SAURI</td><td>L</td><td>15/08/1957</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325107600001</td><td>MAREM</td><td>P</td><td>11/07/1960</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321001860001</td><td>FIFIN EKO PRASTYAWAN</td><td>L</td><td>10/01/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324605880001</td><td>BRENDA PRABAWATI</td><td>P</td><td>06/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320801940002</td><td>LUKI ANGGA PRAYOGO</td><td>L</td><td>08/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320806710002</td><td>IMAM SOPI'I</td><td>L</td><td>08/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325009770003</td><td>KURROTUL AINIAH</td><td>P</td><td>10/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322407690003</td><td>ALI AFAN</td><td>L</td><td>24/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325506790002</td><td>SUPARMI</td><td>P</td><td>15/06/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325904950003</td><td>EVI KUMALASARI</td><td>P</td><td>19/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320611960001</td><td>RESTU AGUNG NOVIANTO</td><td>L</td><td>06/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324808980002</td><td>VINA PUSPITASARI</td><td>P</td><td>08/08/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323108090001</td><td>ZIDAN ALFIAN FAHREZI</td><td>L</td><td>31/08/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324507290001</td><td>LASIYAH</td><td>P</td><td>05/07/1929</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321506720002</td><td>ROCHMAD</td><td>L</td><td>15/06/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324602720001</td><td>MAIMUNAH</td><td>P</td><td>06/02/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320108940002</td><td>DIDIK KURNIAWAN</td><td>L</td><td>01/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326302980001</td><td>MEGA DWI WULANDARI</td><td>P</td><td>23/02/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325308070001</td><td>NABILLA</td><td>P</td><td>13/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320207380001</td><td>JASELAN</td><td>L</td><td>02/07/1938</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320304710002</td><td>SISWANTO</td><td>L</td><td>03/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326707840004</td><td>LUTFIANA ZUMROH</td><td>P</td><td>27/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507321805090001</td><td>KRESNA DODY DEWANTO</td><td>L</td><td>18/05/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325204470002</td><td>SARTIK</td><td>P</td><td>12/04/1947</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322807900002</td><td>EKO YULIANTO</td><td>L</td><td>28/07/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322207690001</td><td>HERI SANTOSO</td><td>L</td><td>22/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325606700004</td><td>MUSLIKHA SANTOSO</td><td>P</td><td>16/06/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321111010001</td><td>SA ADLU DWASTORO</td><td>L</td><td>11/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325901330001</td><td>SIANI</td><td>P</td><td>19/01/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320410390001</td><td>KASIMUN</td><td>L</td><td>04/10/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324509420001</td><td>SENIATUN</td><td>P</td><td>05/09/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325206550005</td><td>SUTARMI</td><td>P</td><td>12/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324709520001</td><td>YATI</td><td>P</td><td>07/09/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320801750001</td><td>YONO HADI SUYITNO</td><td>L</td><td>08/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324401750001</td><td>HAMIYAH</td><td>P</td><td>04/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324204680002</td><td>PIANI</td><td>P</td><td>02/04/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320405880002</td><td>YULIANTO</td><td>L</td><td>04/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325608550002</td><td>SULINAH</td><td>P</td><td>16/08/1955</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324206810004</td><td>SUMARTIN</td><td>P</td><td>02/06/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321111680001</td><td>PONIRAN</td><td>L</td><td>11/11/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325108650002</td><td>SRI WARTI</td><td>P</td><td>11/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321707870004</td><td>FIKI FIRDIANA</td><td>L</td><td>17/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325202900006</td><td>DWI SUSILOWATI</td><td>P</td><td>12/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326109940001</td><td>FITRI ANDRIANA</td><td>P</td><td>21/09/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322804980003</td><td>ADI SETIAWAN</td><td>L</td><td>28/04/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325507400005</td><td>LASIYAH</td><td>P</td><td>15/07/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322208560001</td><td>RAWI</td><td>L</td><td>22/08/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322603750002</td><td>SUPARMAN</td><td>L</td><td>26/03/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208810001</td><td>KOYIMAH</td><td>P</td><td>12/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322103060002</td><td>DIO SAPUTRO</td><td>L</td><td>21/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322007850003</td><td>ACHMAD CHOLIL</td><td>L</td><td>20/07/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325904890001</td><td>SUSI SUSANTI</td><td>P</td><td>19/04/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603090002</td><td>DINDA MARTA KHOLILIA</td><td>P</td><td>06/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320606710001</td><td>IMAM SAPI'I</td><td>L</td><td>06/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009770004</td><td>KUROTUL AINIAH</td><td>P</td><td>10/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325208100002</td><td>ALMUKAROMAH PUTRI SOFIAINI</td><td>P</td><td>12/08/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322202660001</td><td>AGUS SUPRIYONO</td><td>L</td><td>22/02/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206640004</td><td>SRI MINARTI</td><td>P</td><td>12/06/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320607630003</td><td>SATUWI</td><td>L</td><td>06/07/1963</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324704990001</td><td>SYAIFATUL ANNISA'</td><td>P</td><td>07/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322402170001</td><td>TARSAN</td><td>L</td><td>24/02/1917</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321507580002</td><td>SUMARTO</td><td>L</td><td>15/07/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325808580001</td><td>KATAMAH</td><td>P</td><td>18/08/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327009830001</td><td>BINTI ROSIDA</td><td>P</td><td>30/09/1983</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321006860001</td><td>EDI SLAMET</td><td>L</td><td>10/06/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326306880001</td><td>CHOIRUM MASRURO</td><td>P</td><td>23/06/1988</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320703430001</td><td>PAIDI</td><td>L</td><td>07/03/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008490001</td><td>YASEMI</td><td>P</td><td>20/08/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324606710003</td><td>SITI YAMUNAH</td><td>P</td><td>06/06/1971</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320506510001</td><td>DUL KARIM</td><td>L</td><td>05/06/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325805600001</td><td>RUPINI</td><td>P</td><td>18/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322309850001</td><td>NUR AVANUL ASVALI</td><td>L</td><td>23/09/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326105910003</td><td>NURHIDAYATUL IMRINA</td><td>P</td><td>21/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324108520005</td><td>PITAYAH</td><td>P</td><td>01/08/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321104740004</td><td>NUR SUWIGNYO HADI</td><td>L</td><td>11/04/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321611800001</td><td>HASAN SUBARJO</td><td>L</td><td>16/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320403830002</td><td>JULIANTO</td><td>L</td><td>04/03/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326909840001</td><td>INNANI MAGHFIROH</td><td>P</td><td>29/09/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325701790001</td><td>MARDIYAH</td><td>P</td><td>17/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320703870003</td><td>WINARTI</td><td>L</td><td>07/03/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320610420002</td><td>DERI</td><td>L</td><td>06/10/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324703490002</td><td>FATONAH</td><td>P</td><td>07/03/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320407790002</td><td>SUKARJI</td><td>L</td><td>04/07/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324106940003</td><td>TUTUT NING TIYAS</td><td>P</td><td>01/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320311570002</td><td>AMINUDIN</td><td>L</td><td>03/11/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324307610001</td><td>AMANAH</td><td>P</td><td>03/07/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322004280001</td><td>DASEMO</td><td>L</td><td>20/04/1928</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104410002</td><td>MUSTAMAH</td><td>P</td><td>21/04/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320704530001</td><td>SUPINGI</td><td>L</td><td>07/04/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325109570001</td><td>ASLIKAH</td><td>P</td><td>11/09/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324711820001</td><td>RIAMI</td><td>P</td><td>07/11/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320408800002</td><td>WARDI</td><td>L</td><td>04/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320911380001</td><td>DA'I</td><td>L</td><td>09/11/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326004470003</td><td>WARSI</td><td>P</td><td>20/04/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325501880002</td><td>RIADI</td><td>P</td><td>15/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>TUKANG SOL SEPATU</td></tr>
 <tr><td>3507320703450001</td><td>SAKRAM</td><td>L</td><td>07/03/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325604480002</td><td>MARSITI</td><td>P</td><td>16/04/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321605350001</td><td>DULAMAT</td><td>L</td><td>16/05/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101250011</td><td>SITI</td><td>P</td><td>01/01/1925</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322303610001</td><td>M SUKOADI BIN ALI</td><td>L</td><td>23/03/1961</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507324307680001</td><td>SULASMIATI MS</td><td>P</td><td>03/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325602870004</td><td>GALUH FITRI KHOLIDA</td><td>P</td><td>16/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321004540002</td><td>SURATEMAN</td><td>L</td><td>10/04/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324408640001</td><td>SUNARTI</td><td>P</td><td>04/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321907830001</td><td>ANDIK SUPRAYITNO</td><td>L</td><td>19/07/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321404600001</td><td>SUDARWADI</td><td>L</td><td>14/04/1960</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324504770002</td><td>FIFI PRIHANDAYANI</td><td>P</td><td>05/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322103860001</td><td>PURWADI R</td><td>L</td><td>21/03/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320803880004</td><td>PRISKAWADI WAHYU RUSFIANTO</td><td>L</td><td>08/03/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322305900001</td><td>PRASTYO K R</td><td>L</td><td>23/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326406990001</td><td>IDA MAULIDATUS S</td><td>P</td><td>24/06/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321202080001</td><td>ACHMAD FEBRI F</td><td>L</td><td>12/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002580002</td><td>MISENAN</td><td>L</td><td>10/02/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325210630005</td><td>SUKANAH</td><td>P</td><td>12/10/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322303950002</td><td>SYAIFUL ANAM</td><td>L</td><td>23/03/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325011040003</td><td>SELA CAROLINE RAMADHANI</td><td>P</td><td>10/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321208720003</td><td>SAIFUL BAHRI</td><td>L</td><td>12/08/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326002780002</td><td>SRI WAHYU ANDRIANI</td><td>P</td><td>20/02/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324607970005</td><td>ANEKE SAFITRI</td><td>P</td><td>06/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325207020002</td><td>SILVIANA MIFTAHUL SAFITRI</td><td>P</td><td>12/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324303050001</td><td>KARINA KUSUMA WARDANI</td><td>P</td><td>03/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709450001</td><td>REKAN</td><td>L</td><td>07/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011550003</td><td>KASMINI</td><td>P</td><td>10/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326707860001</td><td>DIANA</td><td>P</td><td>27/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321708690002</td><td>WAGIRIN</td><td>L</td><td>17/08/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326603620001</td><td>NGATMINAH</td><td>P</td><td>26/03/1962</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111870001</td><td>FITA FATIMAH</td><td>P</td><td>11/11/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325210900002</td><td>PENI DEFITA</td><td>P</td><td>12/10/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325110970002</td><td>FITRI NURJANAH</td><td>P</td><td>11/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325102050001</td><td>VENOLITA S</td><td>P</td><td>11/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320507350002</td><td>WARTAM</td><td>L</td><td>05/07/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324808540001</td><td>SUNAYAH</td><td>P</td><td>08/08/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324202700001</td><td>KASIATI</td><td>P</td><td>02/02/1970</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320503940001</td><td>GALANG DIKA PUTRA A</td><td>L</td><td>05/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320602580001</td><td>MULYONO WS</td><td>L</td><td>06/02/1958</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326206650002</td><td>WAHYUNINGSIH</td><td>P</td><td>22/06/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322711920001</td><td>AHMAD FAUZI</td><td>L</td><td>27/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320302990001</td><td>KUKUH PRASETIO WAHYONO</td><td>L</td><td>03/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320912350001</td><td>ADELAL</td><td>L</td><td>09/12/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324805380001</td><td>YAHMI</td><td>P</td><td>08/05/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321005510001</td><td>MUSKANI</td><td>L</td><td>10/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324704570002</td><td>MARNIATUN</td><td>P</td><td>07/04/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321908770002</td><td>AGUS SISWANTO</td><td>L</td><td>19/08/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320805860002</td><td>MUHAMAD MAHFUD</td><td>L</td><td>08/05/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325102750003</td><td>SUTRISNANINGSIH</td><td>P</td><td>11/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101470010</td><td>SUPIYAN</td><td>L</td><td>01/01/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320207850002</td><td>KASIADI</td><td>L</td><td>02/07/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324409880001</td><td>SUSI YULIANAH</td><td>P</td><td>04/09/1988</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507320510650003</td><td>AHMAD ANAS</td><td>L</td><td>05/10/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324809710002</td><td>TUTIK</td><td>P</td><td>08/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505920002</td><td>KHOLIFATUN NUR AINI</td><td>P</td><td>15/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325112940004</td><td>RODLIYATAN MARDIYAH</td><td>P</td><td>11/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320207450003</td><td>LASEMIN</td><td>L</td><td>02/07/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320708790001</td><td>SUTIYONO</td><td>L</td><td>07/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322901800002</td><td>TONI WAHYUDI</td><td>L</td><td>29/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324203840001</td><td>LILIS STYOWATI</td><td>P</td><td>02/03/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324911020003</td><td>MAYA CAHYANTI</td><td>P</td><td>09/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320901830003</td><td>MARYONO</td><td>L</td><td>09/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325208810003</td><td>ERNAWATI</td><td>P</td><td>12/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320203420001</td><td>SARIYAT</td><td>L</td><td>02/03/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324710450002</td><td>NGATIYAH</td><td>P</td><td>07/10/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321202780005</td><td>SUNARYO</td><td>L</td><td>12/02/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321809810003</td><td>SUNAWAN</td><td>L</td><td>18/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320308630002</td><td>TAUKHID</td><td>L</td><td>03/08/1963</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507327009660003</td><td>LILIS SETYANI</td><td>P</td><td>30/09/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322608880001</td><td>WAHYU SUHENDRO</td><td>L</td><td>26/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320207830002</td><td>M ZAINUDIN</td><td>L</td><td>02/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327012790005</td><td>SULIS SETIYA NINGSIH ARI P</td><td>P</td><td>30/12/1979</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321012620002</td><td>IMAM MUDI</td><td>L</td><td>10/12/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011760007</td><td>KUSTATIK</td><td>P</td><td>10/11/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321909990002</td><td>AHMAD SIDIK</td><td>L</td><td>19/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320812060001</td><td>AHMAD MUHAJIRIN</td><td>L</td><td>08/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321903400001</td><td>KETRUS</td><td>L</td><td>19/03/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107520003</td><td>NURJANAH</td><td>P</td><td>01/07/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320501850003</td><td>SUGENG SANTOSO</td><td>L</td><td>05/01/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320103650001</td><td>AGUS WINARKO</td><td>L</td><td>01/03/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325204730010</td><td>HULAYA</td><td>P</td><td>12/04/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322604930001</td><td>TA'AT NASUTION</td><td>L</td><td>26/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321103970001</td><td>RISKI AJI WIBOWO</td><td>L</td><td>11/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320809990001</td><td>YUDA ARIS SASMITO</td><td>L</td><td>08/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326905080001</td><td>SINTAWATI PURBO NINGSIH</td><td>P</td><td>29/05/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321008750003</td><td>MARIONO</td><td>L</td><td>10/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326309800002</td><td>DWI RAHAYU NINGSIH</td><td>P</td><td>23/09/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322311050001</td><td>DANIAL FAHRUDIN</td><td>L</td><td>23/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321203810003</td><td>DOVI GAZELA</td><td>L</td><td>12/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325002840002</td><td>NUR WULAN TRIWAHYUNI</td><td>P</td><td>10/02/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321902020001</td><td>PRADANA MUKTI GUNAWAN</td><td>L</td><td>19/02/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325606840002</td><td>YUYUN</td><td>P</td><td>16/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507326901930003</td><td>DEVI</td><td>P</td><td>29/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507325701300002</td><td>TAMUNAH</td><td>P</td><td>17/01/1930</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322302680006</td><td>WINARTO</td><td>L</td><td>23/02/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324404730003</td><td>SITI AMINAH</td><td>P</td><td>04/04/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320802990004</td><td>MIFTACHUL FARHAN</td><td>L</td><td>08/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325802100001</td><td>ELISYA HABIBILLAH</td><td>P</td><td>18/02/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304730005</td><td>SUWANDI</td><td>L</td><td>03/04/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325905770003</td><td>SRI WEDARI</td><td>P</td><td>19/05/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321512990003</td><td>DENY EKO PRASETYO</td><td>L</td><td>15/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322404040002</td><td>ANDIKA WAHYU PRASETYO</td><td>L</td><td>24/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101490005</td><td>DAMAN</td><td>L</td><td>01/01/1949</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322007750003</td><td>LASEMAT</td><td>L</td><td>20/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324205800002</td><td>MINARSIH</td><td>P</td><td>02/05/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322811980001</td><td>RIZKY ARDI IRWANTO</td><td>L</td><td>28/11/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322108110002</td><td>DIO RAMADHANI</td><td>L</td><td>21/08/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321003290001</td><td>FATCHUR ROJI</td><td>L</td><td>10/03/1929</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107440003</td><td>RETI</td><td>P</td><td>01/07/1944</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322305810001</td><td>SUJIANTO</td><td>L</td><td>23/05/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327004820004</td><td>TRIANA</td><td>P</td><td>30/04/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320303600003</td><td>RASID</td><td>L</td><td>03/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505650005</td><td>UMI KULSUM</td><td>P</td><td>15/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322008850002</td><td>AGUS SETYONINGSIH</td><td>L</td><td>20/08/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324301380001</td><td>TIANAH</td><td>P</td><td>03/01/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322609690001</td><td>SULKAN</td><td>L</td><td>26/09/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326109810004</td><td>EMIK ISWATI</td><td>P</td><td>21/09/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321701020002</td><td>ALUN DIDAN SUKANDRA PUTRA</td><td>L</td><td>17/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326503060004</td><td>ANIN CHOIRUN NISA</td><td>P</td><td>25/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320806790004</td><td>RUDI HARTONO</td><td>L</td><td>08/06/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325506850002</td><td>EVAUNI</td><td>P</td><td>15/06/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320802070002</td><td>HENDARSA FARDANIANTO PRATAMA</td><td>L</td><td>08/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321510720003</td><td>SUGENG PRIANTO</td><td>L</td><td>15/10/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325308810003</td><td>TRI UTAMI</td><td>P</td><td>13/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321302060002</td><td>M EKA AINUR RAFAEL</td><td>L</td><td>13/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320606590004</td><td>NGADISAN</td><td>L</td><td>06/06/1959</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507326011600005</td><td>MARSIATEN</td><td>P</td><td>20/11/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321203810002</td><td>DOPI</td><td>L</td><td>12/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322508820001</td><td>CHOLIS</td><td>L</td><td>25/08/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320901850001</td><td>ADI PRAWIRO</td><td>L</td><td>09/01/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320603890002</td><td>GOGO VELANI ARDI</td><td>L</td><td>06/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002400005</td><td>WAKIMUN</td><td>L</td><td>10/02/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322805530001</td><td>TASELAN</td><td>L</td><td>28/05/1953</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101240003</td><td>TASMINTEN</td><td>P</td><td>01/01/1924</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325406520003</td><td>WATENI</td><td>P</td><td>14/06/1952</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320208750003</td><td>AGUS SUGIANTO</td><td>L</td><td>02/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808760003</td><td>KARMIASRI</td><td>P</td><td>08/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323105990002</td><td>MUHAMMAD WAHYU ASOFIN</td><td>L</td><td>31/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322101020004</td><td>WILDAN YANU RISATYAN</td><td>L</td><td>21/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324310060001</td><td>TRI AXSBITA NARA NAFISA</td><td>P</td><td>03/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322205680002</td><td>SAGIMAN</td><td>L</td><td>22/05/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324606730002</td><td>PAINEM</td><td>P</td><td>06/06/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603910002</td><td>RINI MARDIANA</td><td>P</td><td>06/03/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323010950001</td><td>MUCHAMAD YOHAN</td><td>L</td><td>30/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322708030002</td><td>YOGA HANDRIAWAN</td><td>L</td><td>27/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320810680001</td><td>CHOIRUL NA'AM</td><td>L</td><td>08/10/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324911720001</td><td>IN ASMAINAH</td><td>P</td><td>09/11/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321910900001</td><td>FRENDI SUNDORO</td><td>L</td><td>19/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323012940001</td><td>RINDI MASPUTRA</td><td>L</td><td>30/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320512960001</td><td>HENDRI TRIBOWO</td><td>L</td><td>05/12/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325009050004</td><td>ABELLA CHOIRO FILA ARUM</td><td>P</td><td>10/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327112450014</td><td>TUMIYEM</td><td>P</td><td>31/12/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320109690005</td><td>MARIONO</td><td>L</td><td>01/09/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808810003</td><td>DWI WIDIASTUTIK</td><td>P</td><td>18/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322305050001</td><td>MUHAMMAD ALFAH REZI ARFENDRA</td><td>L</td><td>23/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321511710001</td><td>HENDRI W PRASETYO</td><td>L</td><td>15/11/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325804770001</td><td>LI'IN IMAYAH</td><td>P</td><td>18/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322306020002</td><td>BAGAS PUTRA ABDI NEGARA</td><td>L</td><td>23/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607540002</td><td>TARI</td><td>L</td><td>16/07/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325110560001</td><td>TIAMAH</td><td>P</td><td>11/10/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326301880001</td><td>ARI BAWATI</td><td>P</td><td>23/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320404950001</td><td>AIRIL MAHMUD</td><td>L</td><td>04/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320504670001</td><td>SUBAKRI</td><td>L</td><td>05/04/1967</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326005710001</td><td>DWI NURHAYATI</td><td>P</td><td>20/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326704980002</td><td>NINDICA LINDIANTITIS D P S</td><td>P</td><td>27/04/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326009080001</td><td>SYIFA DWI RAMADITA B P</td><td>P</td><td>20/09/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320107650008</td><td>KEMIRAN</td><td>L</td><td>01/07/1965</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324504440001</td><td>TI'AH</td><td>P</td><td>05/04/1944</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321203810005</td><td>NUR HASAN</td><td>L</td><td>12/03/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321810870004</td><td>ADI SOSRO MULYO</td><td>L</td><td>18/10/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321005900002</td><td>AGUNG PURNOMO</td><td>L</td><td>10/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321209450003</td><td>SUKAR</td><td>L</td><td>12/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324910500003</td><td>RAINTEN</td><td>P</td><td>09/10/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321201800001</td><td>MESKAN</td><td>L</td><td>12/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320901390001</td><td>DARMUN</td><td>L</td><td>09/01/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012500003</td><td>SAINTEN</td><td>P</td><td>10/12/1950</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320309730001</td><td>MUHAMMAD ASARI</td><td>L</td><td>03/09/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325107750001</td><td>SAIKHATUL KHUSNAH</td><td>P</td><td>11/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327003980001</td><td>FARRIH ILMA MALAHAYATI</td><td>P</td><td>30/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325103050001</td><td>FARAH MUTIARA KARIMA</td><td>P</td><td>11/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323112600005</td><td>WAKIP</td><td>L</td><td>31/12/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507327112520003</td><td>SARMINI</td><td>P</td><td>31/12/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320203700003</td><td>SUKIADI</td><td>L</td><td>02/03/1970</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112980005</td><td>SANDI</td><td>L</td><td>31/12/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320409740001</td><td>SLAMET W</td><td>L</td><td>04/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324509770002</td><td>ISBAWATI</td><td>P</td><td>05/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321603990001</td><td>GALIH RAKASIWI</td><td>L</td><td>16/03/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322306030001</td><td>GILANG SATYA PRADANA</td><td>L</td><td>23/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326304060002</td><td>GADIS SESILIA MAULANI</td><td>P</td><td>23/04/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325110500002</td><td>MURTI</td><td>P</td><td>11/10/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327112450012</td><td>WAGINAH</td><td>P</td><td>31/12/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320210620001</td><td>KASENAM</td><td>L</td><td>02/10/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507670001</td><td>SITI AMINAH</td><td>P</td><td>15/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211870003</td><td>AHMAD SODIKIN</td><td>L</td><td>12/11/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324212890001</td><td>CHOLIFATURRIZA</td><td>P</td><td>02/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320611920001</td><td>NASRUL KHOIRI</td><td>L</td><td>06/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321607970001</td><td>GATOT PRABOWO</td><td>L</td><td>16/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325212010005</td><td>CHORIFATUL ALFINA</td><td>P</td><td>12/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321407320001</td><td>SAMPUN</td><td>L</td><td>14/07/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325107350001</td><td>SUPI</td><td>P</td><td>11/07/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320603890003</td><td>BAMBANG HERMAWAN</td><td>L</td><td>06/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321508520004</td><td>SUNARDI</td><td>L</td><td>15/08/1952</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324502580002</td><td>HALIMAH</td><td>P</td><td>05/02/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320407740003</td><td>SUMA'ANA ARIFIN</td><td>L</td><td>04/07/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320610790001</td><td>ADI WIYONO</td><td>L</td><td>06/10/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324306820004</td><td>HERNI ISNIAWATI</td><td>P</td><td>03/06/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101410002</td><td>SARIYAN</td><td>L</td><td>01/01/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808510001</td><td>GINTEN</td><td>P</td><td>18/08/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321912720001</td><td>ROBIN RISDIANTO</td><td>L</td><td>19/12/1972</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321303750001</td><td>RIFA'I ADI SUCIPTO</td><td>L</td><td>13/03/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321702800001</td><td>HASAN NUJI</td><td>L</td><td>17/02/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320904850001</td><td>MARSUDI</td><td>L</td><td>09/04/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325508900003</td><td>PUPUT NUR HIDAYAH</td><td>P</td><td>15/08/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321907690001</td><td>CHOIRUR ROZIQIN</td><td>L</td><td>19/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324308710001</td><td>CHOIRUM MASRUROH</td><td>P</td><td>03/08/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325101980001</td><td>LUTFI ROZIANA</td><td>P</td><td>11/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322603050001</td><td>KHAIRIL AZMI</td><td>L</td><td>26/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320908620001</td><td>MUJIB</td><td>L</td><td>09/08/1962</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507325406620002</td><td>SITI MAIMUNAH</td><td>P</td><td>14/06/1962</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507323008860004</td><td>EKO PRASETYO WIDIANTO</td><td>L</td><td>30/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325512950001</td><td>ILHAMI DWI WIDIANTI</td><td>P</td><td>15/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322501820002</td><td>KHOIR NURYADI</td><td>L</td><td>25/01/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325303840003</td><td>YUNIASIH</td><td>P</td><td>13/03/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326305060001</td><td>ZAFIRA YURI MEISYAROH</td><td>P</td><td>23/05/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322209730001</td><td>M ALI IMRON</td><td>L</td><td>22/09/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324208730002</td><td>MU'AWALIN</td><td>P</td><td>02/08/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324403000001</td><td>TSANIA INSAN FIRDAUSYI</td><td>P</td><td>04/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325107080001</td><td>SAYYIDA BILQIS HARVEST ILMI</td><td>P</td><td>11/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321811400001</td><td>MUNAWAR</td><td>L</td><td>18/11/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101760028</td><td>SUBHAN</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324710820001</td><td>MARSUNING</td><td>P</td><td>07/10/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325510010001</td><td>DILA OKTAVILIA</td><td>P</td><td>15/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321205720005</td><td>RUDY HARTONO</td><td>L</td><td>12/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709790003</td><td>SUMALIS ERNAWATI</td><td>P</td><td>07/09/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010980001</td><td>RENOL VEBY ANDREANO</td><td>L</td><td>10/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320305100001</td><td>RAIHAN ARDI SAPUTRA</td><td>L</td><td>03/05/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101600027</td><td>WARIMAN</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324511560001</td><td>SALAMI</td><td>P</td><td>05/11/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326910840001</td><td>INDAH ROSINTA</td><td>P</td><td>29/10/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325111300001</td><td>KASMINAH</td><td>P</td><td>11/11/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321412800004</td><td>MOCH JAILANI</td><td>L</td><td>14/12/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324509790001</td><td>NGATIAH</td><td>P</td><td>05/09/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322009020003</td><td>SOFIYAN FAIZAL SAPUTRA</td><td>L</td><td>20/09/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322704080002</td><td>IZAM GANA SALSABILI</td><td>L</td><td>27/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321001450001</td><td>AMIN</td><td>L</td><td>10/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325808450001</td><td>LASIMAH</td><td>P</td><td>18/08/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325809910001</td><td>MIMIN WAHYUNI</td><td>P</td><td>18/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322010540002</td><td>SUJA'I</td><td>L</td><td>20/10/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012670002</td><td>MAMI</td><td>P</td><td>10/12/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326812870001</td><td>LILIK SETYOWATI</td><td>P</td><td>28/12/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324909920003</td><td>LAILA FIKE HANDAYANI</td><td>P</td><td>09/09/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320703400001</td><td>MISKUN</td><td>L</td><td>07/03/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325202500001</td><td>SEMI</td><td>P</td><td>12/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320702740003</td><td>ABDUL MALIK / TAMAJI</td><td>L</td><td>07/02/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326309780001</td><td>SULISTYOWATI</td><td>P</td><td>23/09/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320602000001</td><td>AHMAD MUHLAS AMALI</td><td>L</td><td>06/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101490012</td><td>SUWATI</td><td>P</td><td>01/01/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327112450013</td><td>MARKUNA</td><td>P</td><td>31/12/1945</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322209700001</td><td>NGATENAN</td><td>L</td><td>22/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326510820001</td><td>MISTIN DWI ASTUTIK</td><td>P</td><td>25/10/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324611930001</td><td>REGINIA SONDRA N</td><td>P</td><td>06/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507325210990001</td><td>VIRGINIA NAHARIOCTA W</td><td>P</td><td>12/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324405600004</td><td>TIAMI</td><td>P</td><td>04/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320305700003</td><td>MUHAMMAD AROFIK</td><td>L</td><td>03/05/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326801720002</td><td>WIWIT</td><td>P</td><td>28/01/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326601950003</td><td>ZAHROH CHOIRIVA AR</td><td>P</td><td>26/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322009770002</td><td>NURHADI P</td><td>L</td><td>20/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326209810002</td><td>NANING KURNIA</td><td>P</td><td>22/09/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325710100001</td><td>NAILA IFATUL KHOIR</td><td>P</td><td>17/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320907780001</td><td>ARIYOSO</td><td>L</td><td>09/07/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325610840002</td><td>SONI PLANDI ARIANTI</td><td>P</td><td>16/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325008080002</td><td>CEVIRA AIS SITI KHUMAIRO</td><td>P</td><td>10/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320908830001</td><td>SUGIANTO</td><td>L</td><td>09/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325310860001</td><td>RUSEMI</td><td>P</td><td>13/10/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321404090001</td><td>REVANGGA</td><td>L</td><td>14/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325607500001</td><td>SOLIKAH</td><td>P</td><td>16/07/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325109840003</td><td>SITI AISAH</td><td>P</td><td>11/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321206500001</td><td>SAPRI</td><td>L</td><td>12/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325005490001</td><td>LASIMAH</td><td>P</td><td>10/05/1949</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320202820006</td><td>LASIMAN</td><td>L</td><td>02/02/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325708890001</td><td>SRI WIWIN</td><td>P</td><td>17/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321310710003</td><td>LAMENUN</td><td>L</td><td>13/10/1971</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321011540002</td><td>BASOLI</td><td>L</td><td>10/11/1954</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320207820001</td><td>RONI</td><td>L</td><td>02/07/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324705870001</td><td>IDA MARINA</td><td>P</td><td>07/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208310001</td><td>B MARKAMAH</td><td>P</td><td>12/08/1931</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320308530001</td><td>SUPANGAT</td><td>L</td><td>03/08/1953</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507324607600001</td><td>SITI NURASILAH</td><td>P</td><td>06/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326808840002</td><td>DIA SUSILOWATI</td><td>P</td><td>28/08/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321908350001</td><td>SUKRI</td><td>L</td><td>19/08/1935</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325906470001</td><td>TASANAH</td><td>P</td><td>19/06/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325607210001</td><td>YATUN</td><td>P</td><td>16/07/1921</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321102410001</td><td>JASEMIN</td><td>L</td><td>11/02/1941</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321304350001</td><td>BADI</td><td>L</td><td>13/04/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325111400001</td><td>SEMINAH</td><td>P</td><td>11/11/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324303780002</td><td>TATIK WASIATI</td><td>P</td><td>03/03/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321010690005</td><td>SUMA'I</td><td>L</td><td>10/10/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322005000001</td><td>UWA'IS AL KORI</td><td>L</td><td>20/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322303100002</td><td>M IRWAN SYAH PUTRA</td><td>L</td><td>23/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321104500002</td><td>DULKARIM</td><td>L</td><td>11/04/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325802570001</td><td>LASINTEN</td><td>P</td><td>18/02/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324112680002</td><td>WARSIATIN</td><td>P</td><td>01/12/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321504760001</td><td>DOLFI LEWU</td><td>L</td><td>15/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320901800003</td><td>ADI PRAWIRO</td><td>L</td><td>09/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320603890001</td><td>GUGUH FARDI</td><td>L</td><td>06/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321305520002</td><td>SUNARDI</td><td>L</td><td>13/05/1952</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101630045</td><td>TIAMI</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320205720003</td><td>NGATENAN</td><td>L</td><td>02/05/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325708830003</td><td>MISTIN</td><td>P</td><td>17/08/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325210990003</td><td>MAHARIATUS SAKDIAH</td><td>P</td><td>12/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321009050002</td><td>ZILDAN ALIF ALFA RIFAI</td><td>L</td><td>10/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321303880003</td><td>DEDI EKO PRASOJO</td><td>L</td><td>13/03/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324204860003</td><td>SUYATI</td><td>P</td><td>02/04/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325905090008</td><td>DZAHWA ADHA AYUNDYA PUTRI</td><td>P</td><td>19/05/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321311660003</td><td>TUKIMAN</td><td>L</td><td>13/11/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326111710001</td><td>JUMIATUN</td><td>P</td><td>21/11/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321806000002</td><td>YOGI FERNANDO</td><td>L</td><td>18/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322108050001</td><td>MUHAMAD DWI ALDI</td><td>L</td><td>21/08/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321004430001</td><td>SEMIN</td><td>L</td><td>10/04/1943</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322307780002</td><td>FERDI</td><td>L</td><td>23/07/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320302750002</td><td>AGUS NAWANTO MARDI WIBOWO</td><td>L</td><td>03/02/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324901760002</td><td>YASENIK/NURLAILA</td><td>P</td><td>09/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322804000001</td><td>YUSRIL ENGGAL PANGESTU</td><td>L</td><td>28/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322108050003</td><td>AKBAR NUR ALIM</td><td>L</td><td>21/08/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320611730001</td><td>HENDIYONO</td><td>L</td><td>06/11/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507820004</td><td>FILBIDAYATI</td><td>P</td><td>15/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322910030003</td><td>RISKI BAGUS ADITYA</td><td>L</td><td>29/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323004080001</td><td>YUSUF RAY</td><td>L</td><td>30/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320702750003</td><td>NURWAKID</td><td>L</td><td>07/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325503810006</td><td>LENI MARLINA</td><td>P</td><td>15/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324205000002</td><td>NUR LENI NIDA C S</td><td>P</td><td>02/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320912070003</td><td>NUR RIDHO AHMAD BAHRIL</td><td>L</td><td>09/12/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321808090002</td><td>NUR THOIRON ABAABIILLAH</td><td>L</td><td>18/08/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321405560005</td><td>SUNARLAN</td><td>L</td><td>14/05/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321205760001</td><td>GIONO</td><td>L</td><td>12/05/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507327004830001</td><td>IRAWATI</td><td>P</td><td>30/04/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326705050001</td><td>FAJAR GIOVANNI FAHREZI</td><td>P</td><td>27/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321112650005</td><td>WADRI</td><td>L</td><td>11/12/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325203690004</td><td>WINARSIH</td><td>P</td><td>12/03/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320803890002</td><td>DEDY PERDIAN</td><td>L</td><td>08/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507324710940001</td><td>SISKA MUDIFA</td><td>P</td><td>07/10/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507322012840002</td><td>M NUR YUSIN EFENDI</td><td>L</td><td>20/12/1984</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326908880003</td><td>WINDA LESTARI</td><td>P</td><td>29/08/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324305110001</td><td>CHILA MEISYA CHAMIMAURA EFENDI</td><td>P</td><td>03/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320708280001</td><td>RANU</td><td>L</td><td>07/08/1928</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320812680003</td><td>KOSENAN</td><td>L</td><td>08/12/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324107860006</td><td>NARSIH</td><td>P</td><td>01/07/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325410410001</td><td>ARMI</td><td>P</td><td>14/10/1941</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321708450007</td><td>MUJIONO</td><td>L</td><td>17/08/1945</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325203530001</td><td>LASINEM</td><td>P</td><td>12/03/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321210560001</td><td>SUMARDI</td><td>L</td><td>12/10/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325512570005</td><td>LASENI</td><td>P</td><td>15/12/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320611720002</td><td>HENDIONO</td><td>L</td><td>06/11/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507820005</td><td>FIL BIDAYATI</td><td>P</td><td>15/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322909030004</td><td>RISKY BAGUS ADITYA</td><td>L</td><td>29/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323004080004</td><td>YUSUF RAY</td><td>L</td><td>30/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322904850001</td><td>SUWONO</td><td>L</td><td>29/04/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326701840001</td><td>JUMIYATI</td><td>P</td><td>27/01/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324107350012</td><td>DAIMAH</td><td>P</td><td>01/07/1935</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322206720002</td><td>FATCHUR ROJI'IN</td><td>L</td><td>22/06/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326608760001</td><td>SRI YUNANI</td><td>P</td><td>26/08/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321612980001</td><td>FEBRIAWAN AHMAD KEVIN</td><td>L</td><td>16/12/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322508000004</td><td>AVIB AHMAD AYUBI</td><td>L</td><td>25/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101540018</td><td>TALKAN</td><td>L</td><td>01/01/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101590024</td><td>JAMILAH</td><td>P</td><td>01/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324505830002</td><td>FIDAYATI</td><td>P</td><td>05/05/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322304610001</td><td>JARWOTO</td><td>L</td><td>23/04/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327103690001</td><td>MAMIK</td><td>P</td><td>31/03/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320501890002</td><td>WIDI ATMOKO</td><td>L</td><td>05/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322703050001</td><td>WIBI GEVANO</td><td>L</td><td>27/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325008440001</td><td>KATIPAH</td><td>P</td><td>10/08/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321011540001</td><td>M. TALKAN</td><td>L</td><td>10/11/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325602590001</td><td>JAMILAH</td><td>P</td><td>16/02/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326208860001</td><td>FIDAYATI</td><td>P</td><td>22/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112580004</td><td>AN IN</td><td>L</td><td>31/12/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324210630002</td><td>SUTRI</td><td>P</td><td>02/10/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320212820001</td><td>DWI EKO PRAYETNO</td><td>L</td><td>02/12/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320512910001</td><td>NUR SOLEH</td><td>L</td><td>05/12/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325006030003</td><td>SEFI NUR AZIZAH</td><td>P</td><td>10/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325406560003</td><td>KASIYAH</td><td>P</td><td>14/06/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325212820002</td><td>DEWI RATNA</td><td>P</td><td>12/12/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326011010004</td><td>MAYSAROH</td><td>P</td><td>20/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321009720003</td><td>IMAM S</td><td>L</td><td>10/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320709400001</td><td>GIMAN</td><td>L</td><td>07/09/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324112540004</td><td>AMINI</td><td>P</td><td>01/12/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325702420001</td><td>SATIAH</td><td>P</td><td>17/02/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321111440002</td><td>JAIS</td><td>L</td><td>11/11/1944</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325905510001</td><td>WARNI</td><td>P</td><td>19/05/1951</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325910770001</td><td>SIATI</td><td>P</td><td>19/10/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321507830001</td><td>GIONO</td><td>L</td><td>15/07/1983</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211860002</td><td>MESENAN</td><td>L</td><td>12/11/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322503880001</td><td>SLAMET</td><td>L</td><td>25/03/1988</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321907980002</td><td>SHOLEH SUNDAFAH</td><td>L</td><td>19/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321102650002</td><td>WANDI</td><td>L</td><td>11/02/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324508670002</td><td>SRIATIN</td><td>P</td><td>05/08/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321108810004</td><td>SUGENG RAHAYU</td><td>L</td><td>11/08/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326405900001</td><td>NINGRUM KARTIKASARI</td><td>P</td><td>24/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325903420001</td><td>ARMI</td><td>P</td><td>19/03/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321305680001</td><td>KUSENAN</td><td>L</td><td>13/05/1968</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101410012</td><td>WARIYUN</td><td>L</td><td>01/01/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325305450001</td><td>GIMAH</td><td>P</td><td>13/05/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321807440001</td><td>SUBA'I</td><td>L</td><td>18/07/1944</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206480002</td><td>AMINAH</td><td>P</td><td>12/06/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326807720001</td><td>DWI RATININGSIH</td><td>P</td><td>28/07/1972</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322803830005</td><td>GIYANTO</td><td>L</td><td>28/03/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325810860001</td><td>ITA SUSANTI</td><td>P</td><td>18/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324606900003</td><td>NURUL KHOIDAH</td><td>P</td><td>06/06/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325306970001</td><td>CHORI DIAH HANISAH</td><td>P</td><td>13/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324208020004</td><td>AYU ARISTA PUTRI</td><td>P</td><td>02/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101540003</td><td>IMAM KAMBALI</td><td>L</td><td>01/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324703630003</td><td>SARMINTEN</td><td>P</td><td>07/03/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320309840002</td><td>SULISTIONO SUGENG</td><td>L</td><td>03/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325703900002</td><td>SUSIANI</td><td>P</td><td>17/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322210970002</td><td>RIO SODIKIN</td><td>L</td><td>22/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322306400001</td><td>KASTAM</td><td>L</td><td>23/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324810400001</td><td>MULYATI</td><td>P</td><td>08/10/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325206420001</td><td>NGATMINTEN</td><td>P</td><td>12/06/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325503670003</td><td>MISTI</td><td>P</td><td>15/03/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322704510001</td><td>YASIM</td><td>L</td><td>27/04/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009530001</td><td>TUMI</td><td>P</td><td>10/09/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507321901800001</td><td>HERI PURWANTO</td><td>L</td><td>19/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326806820001</td><td>RINAWATI</td><td>P</td><td>28/06/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326702860001</td><td>EKA SUSANTI</td><td>P</td><td>27/02/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320810890002</td><td>CANDRA SETIAWAN</td><td>L</td><td>08/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322908730001</td><td>HARTONO</td><td>L</td><td>29/08/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505790003</td><td>NURJANAH</td><td>P</td><td>15/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325207970002</td><td>FANDA FERONICA DYAN N</td><td>P</td><td>12/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326311030001</td><td>FIORILA FITRI ARIYANTI</td><td>P</td><td>23/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322507420001</td><td>KEMAT</td><td>L</td><td>25/07/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326510540001</td><td>RUKINAH</td><td>P</td><td>25/10/1954</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321203730006</td><td>PARNO</td><td>L</td><td>12/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321706760003</td><td>HARIYADI</td><td>L</td><td>17/06/1976</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320901830004</td><td>KARIONO</td><td>L</td><td>09/01/1983</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321911850002</td><td>SAMSUL ARIFIN</td><td>L</td><td>19/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322309880001</td><td>DIAN PRAWIRO</td><td>L</td><td>23/09/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326612940002</td><td>ANGGI PURWATI</td><td>P</td><td>26/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324107750011</td><td>WATI</td><td>P</td><td>01/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320201560004</td><td>BAHRIN</td><td>L</td><td>02/01/1956</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325204300001</td><td>MARTIAH</td><td>P</td><td>12/04/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325504620001</td><td>PUJI</td><td>P</td><td>15/04/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321010600004</td><td>SURYONO</td><td>L</td><td>10/10/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322702800002</td><td>SUEB ANTONI</td><td>L</td><td>27/02/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323003820002</td><td>ARIK WIJAYA</td><td>L</td><td>30/03/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322405880002</td><td>ADI SUTRISNO</td><td>L</td><td>24/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324907920001</td><td>EVI NOVITASARI</td><td>P</td><td>09/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321011640003</td><td>TAMAN</td><td>L</td><td>10/11/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325105710003</td><td>SUPAMI</td><td>P</td><td>11/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324306950001</td><td>LELY NURFARIDAH</td><td>P</td><td>03/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320307060001</td><td>MOHAMMAD WAFIG</td><td>L</td><td>03/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321008630002</td><td>PARLAN</td><td>L</td><td>10/08/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325103670004</td><td>SITI NASLICHA</td><td>P</td><td>11/03/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324908880002</td><td>SITI KARIMATUL ABIDAH</td><td>P</td><td>09/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322608030001</td><td>MUHAMMAD SYAFIQ</td><td>L</td><td>26/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322008700003</td><td>JOKO WIDODO</td><td>L</td><td>20/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326706730001</td><td>SUCIATI</td><td>P</td><td>27/06/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325801950001</td><td>RIFDATUL MARIA ULFA</td><td>P</td><td>18/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322612040001</td><td>MUHAMMAD ILHAM AMMAR</td><td>L</td><td>26/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321109230001</td><td>RANU</td><td>L</td><td>11/09/1923</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325011390001</td><td>SIMAH</td><td>P</td><td>10/11/1939</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321811650003</td><td>FREDY S</td><td>L</td><td>18/11/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326509680001</td><td>WINARSEH</td><td>P</td><td>25/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321001890002</td><td>DEDY</td><td>L</td><td>10/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325611940002</td><td>DITA</td><td>P</td><td>16/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320110340001</td><td>SAMINO</td><td>L</td><td>01/10/1934</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325408640002</td><td>LAMINI</td><td>P</td><td>14/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322602840002</td><td>DHIKRI PRANOTO</td><td>L</td><td>26/02/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322307860004</td><td>DAWUD</td><td>L</td><td>23/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208950002</td><td>MAHFIROTIKA</td><td>P</td><td>12/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324603380001</td><td>NGATIMAH</td><td>P</td><td>06/03/1938</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320905700003</td><td>GIRAN</td><td>L</td><td>09/05/1970</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320112650001</td><td>SRI MULYONO HERLAMBANG</td><td>L</td><td>01/12/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324306700001</td><td>WINARSIH</td><td>P</td><td>03/06/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205930001</td><td>ANGGITA AYU ARDIANSAH</td><td>P</td><td>12/05/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327009000001</td><td>LUCKY MAYA DEWANTI</td><td>P</td><td>30/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325108660001</td><td>SUJATIN</td><td>P</td><td>11/08/1966</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321301880001</td><td>ADI HERMAWAN</td><td>L</td><td>13/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320812910001</td><td>CANDRA AFANDI</td><td>L</td><td>08/12/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325306950001</td><td>INDA LUPITA</td><td>P</td><td>13/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320111970001</td><td>SUTIONO GUNAWAN</td><td>L</td><td>01/11/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325107570001</td><td>MUDLIKAH</td><td>P</td><td>11/07/1957</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326408670001</td><td>SUCI</td><td>P</td><td>24/08/1967</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324611860001</td><td>SUKARTI</td><td>P</td><td>06/11/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107530001</td><td>LAMSIR</td><td>L</td><td>01/07/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107560001</td><td>SUMIATI</td><td>P</td><td>01/07/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322810780001</td><td>HERU SETYAWAN</td><td>L</td><td>28/10/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325511830001</td><td>EVI KRISTYANINGSIH HANDOKO</td><td>P</td><td>15/11/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327112580004</td><td>AMINI</td><td>P</td><td>31/12/1958</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326101910001</td><td>LIL KHOIRIYAH</td><td>P</td><td>21/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323009800001</td><td>EDI SUTRISNO</td><td>L</td><td>30/09/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324511840003</td><td>DEWI ELIYA</td><td>P</td><td>05/11/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324805070001</td><td>LUNA JOWOVIC SUTRISNO</td><td>P</td><td>08/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322405840001</td><td>KHOLISUL FUAD</td><td>L</td><td>24/05/1984</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PERAWAT</td></tr>
 <tr><td>3507325809870001</td><td>ANITA MAFIKASARI</td><td>P</td><td>18/09/1987</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321107080002</td><td>ZACKIYA AS'ADILLA FUAD</td><td>L</td><td>11/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320207720001</td><td>MUCHAMAD NADIF</td><td>L</td><td>02/07/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326802740001</td><td>MUSTIKAH</td><td>P</td><td>28/02/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321212050001</td><td>BAGUS NUR SHOLEH NATIKA</td><td>L</td><td>12/12/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321111080001</td><td>MUHAMAD NUR MUSTOFA NATIKA</td><td>L</td><td>11/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321708640003</td><td>YUSUF</td><td>L</td><td>17/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505650003</td><td>UMRONAH</td><td>P</td><td>15/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320708790002</td><td>SUTIONO</td><td>L</td><td>07/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321604840002</td><td>SANTOSO WIBOWO</td><td>L</td><td>16/04/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326705890003</td><td>MAMIK DWI AMALIA</td><td>P</td><td>27/05/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320702110001</td><td>M FEBRIAN PUTRA WIBOWO</td><td>L</td><td>07/02/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321604540001</td><td>NASERUN</td><td>L</td><td>16/04/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325406600001</td><td>SIAMI</td><td>P</td><td>14/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507322904820005</td><td>ANDIK WALOYO</td><td>L</td><td>29/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507322605730002</td><td>HARY SISWANTO</td><td>L</td><td>26/05/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326311770002</td><td>SHOIKOTUL KHUSNAH</td><td>P</td><td>23/11/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709960002</td><td>SITI ROIKHA</td><td>P</td><td>07/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508030001</td><td>M NIZAR NAWARI</td><td>L</td><td>15/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326412040001</td><td>SAYIDAH CHOIRO UMMAH</td><td>P</td><td>24/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101380010</td><td>M TASEMIN</td><td>L</td><td>01/01/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324503300001</td><td>YAHNI</td><td>P</td><td>05/03/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507325709620001</td><td>SUMARNI</td><td>P</td><td>17/09/1962</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324203650002</td><td>ASNIPAH</td><td>P</td><td>02/03/1965</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101790029</td><td>KOSIM</td><td>L</td><td>01/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320405890001</td><td>WAHYUDI</td><td>L</td><td>04/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326810300001</td><td>YAHNI</td><td>P</td><td>28/10/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326009750001</td><td>IRAWATI</td><td>P</td><td>20/09/1975</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322407810003</td><td>IMAM NASIKHIN</td><td>L</td><td>24/07/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210860001</td><td>SUSANTI WAHYUNATIN</td><td>P</td><td>12/10/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322707050002</td><td>AHMAD MAZDA NURIL HUDA</td><td>L</td><td>27/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324111090001</td><td>SAFA WIJI UTAMI</td><td>P</td><td>01/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321005740007</td><td>MULYADI</td><td>L</td><td>10/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325607760001</td><td>SUMIARI</td><td>P</td><td>16/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322104960003</td><td>IMAM FATONI</td><td>L</td><td>21/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322208000004</td><td>NIKI DWI AGUSTINA</td><td>L</td><td>22/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320912570002</td><td>SUWARI</td><td>L</td><td>09/12/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324302630001</td><td>LI'ATI</td><td>P</td><td>03/02/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325005800008</td><td>SRIANAH KUMALA SARI</td><td>P</td><td>10/05/1980</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112980002</td><td>MUTIA SANDI</td><td>L</td><td>31/12/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325310030001</td><td>ELSANDA LUTFIA TAMA</td><td>P</td><td>13/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324610350001</td><td>KASEMI</td><td>P</td><td>06/10/1935</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320402680004</td><td>NURHASAN</td><td>L</td><td>04/02/1968</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324907560006</td><td>SULAMI</td><td>P</td><td>09/07/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320804760003</td><td>SAMSUL ARIFIN</td><td>L</td><td>08/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325502070002</td><td>SHOPI ZAININ JANNAH</td><td>P</td><td>15/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320411700004</td><td>KASTARI</td><td>L</td><td>04/11/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507326607760003</td><td>SUPRAPTI</td><td>P</td><td>26/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320612940002</td><td>EKO SULIS SETYONO</td><td>L</td><td>06/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322910010003</td><td>MUHAMMAD JEFRI WAHIDIYAWAN</td><td>L</td><td>29/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320206550005</td><td>KARMAIN</td><td>L</td><td>02/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324105640002</td><td>SAIFAH</td><td>P</td><td>01/05/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323005780002</td><td>NANANG</td><td>L</td><td>30/05/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326401830004</td><td>PRENI WAHYUNI</td><td>P</td><td>24/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322106040002</td><td>RIZAL IBNU MORINTIS</td><td>L</td><td>21/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325905650003</td><td>SUYATIN</td><td>P</td><td>19/05/1965</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326308970001</td><td>SUWI IDAYANTI</td><td>P</td><td>23/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321212430005</td><td>SAHID</td><td>L</td><td>12/12/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325204650006</td><td>LIASTAMAH</td><td>P</td><td>12/04/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325305860003</td><td>ASIH KUMAYANTI</td><td>P</td><td>13/05/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322401420002</td><td>ROKIM</td><td>L</td><td>24/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324202540001</td><td>TUAH</td><td>P</td><td>02/02/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321112900002</td><td>ASMUJI</td><td>L</td><td>11/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324102650004</td><td>SUNARMI</td><td>P</td><td>01/02/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320508800004</td><td>SUGIANTO</td><td>L</td><td>05/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324806840001</td><td>ANA SUKENTI</td><td>P</td><td>08/06/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321306090001</td><td>HENRIKO ARDIANTO FAJARTAMA</td><td>L</td><td>13/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324302520002</td><td>MUJAMAH</td><td>P</td><td>03/02/1952</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321302730001</td><td>SUWAJI</td><td>L</td><td>13/02/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325506780006</td><td>SILATUROHMI</td><td>P</td><td>15/06/1978</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326005970002</td><td>NINIS PUTU LESTARI</td><td>P</td><td>20/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320511400003</td><td>TAWI</td><td>L</td><td>05/11/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507321506770002</td><td>SUYADI</td><td>L</td><td>15/06/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325210250002</td><td>MARSI'IN</td><td>P</td><td>12/10/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324706270001</td><td>WATINI</td><td>P</td><td>07/06/1927</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320606490001</td><td>BARIMIN</td><td>L</td><td>06/06/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603470001</td><td>NGATEMI</td><td>P</td><td>06/03/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320705700003</td><td>SUJARI</td><td>L</td><td>07/05/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321409750001</td><td>NGATENAN</td><td>L</td><td>14/09/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321810810005</td><td>SISWANTO</td><td>L</td><td>18/10/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011380002</td><td>ASEMAH</td><td>P</td><td>10/11/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325504600003</td><td>SUNARTI</td><td>P</td><td>15/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321609770002</td><td>KHOIRUL MUSONIP</td><td>L</td><td>16/09/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324512840001</td><td>DEWI ELIYAH</td><td>P</td><td>05/12/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325112200001</td><td>TIAMAH</td><td>P</td><td>11/12/1920</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320902650001</td><td>HANTOYO</td><td>L</td><td>09/02/1965</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PERAWAT</td></tr>
 <tr><td>3507326108700003</td><td>ANISATUS SHOLIKAH</td><td>P</td><td>21/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325612930002</td><td>LAILATUL MUKAROMAH</td><td>P</td><td>16/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324506980002</td><td>ARINI ROHMATIKA</td><td>P</td><td>05/06/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321304080001</td><td>MUHAMMAD NAUFAL AMHAR</td><td>L</td><td>13/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324111420001</td><td>MINI</td><td>P</td><td>01/11/1942</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326104800003</td><td>KHOLIK</td><td>P</td><td>21/04/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322304330001</td><td>BRAHIM</td><td>L</td><td>23/04/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322601640001</td><td>EDY SISWANTO</td><td>L</td><td>26/01/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320510660004</td><td>TO'AT SUBAGIO</td><td>L</td><td>05/10/1966</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325409920006</td><td>ELINA DEWI ANJARSARI</td><td>P</td><td>14/09/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507326303210001</td><td>H. FAUZIAH</td><td>P</td><td>23/03/1921</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322903490001</td><td>KUSEN</td><td>L</td><td>29/03/1949</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321709540001</td><td>ROIS</td><td>L</td><td>17/09/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325911650001</td><td>SUCIATI</td><td>P</td><td>19/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326602880001</td><td>TRI UTARI</td><td>P</td><td>26/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321003880003</td><td>YANI</td><td>L</td><td>10/03/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322008890001</td><td>AGUS KANAN</td><td>L</td><td>20/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321711920001</td><td>ALUWI</td><td>L</td><td>17/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321009970002</td><td>SAI ROPI</td><td>L</td><td>10/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320307740002</td><td>PARIANTO</td><td>L</td><td>03/07/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325107770002</td><td>ANI WAHYU NINGSIH</td><td>P</td><td>11/07/1977</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320404010001</td><td>FRANKY FAZZA FADHLAN</td><td>L</td><td>04/04/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320308300001</td><td>MUKHIYIN</td><td>L</td><td>03/08/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326203420001</td><td>ASIYAH</td><td>P</td><td>22/03/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321507450002</td><td>SARNAM</td><td>L</td><td>15/07/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808470001</td><td>JAMI</td><td>P</td><td>18/08/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320203700002</td><td>IMAM ROKHANI</td><td>L</td><td>02/03/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320503640002</td><td>RADI</td><td>L</td><td>05/03/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324705700004</td><td>PARIANI</td><td>P</td><td>07/05/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320907980002</td><td>MUHAMMAD ALFANDI SANJAYA</td><td>L</td><td>09/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320807520001</td><td>WARIKAN</td><td>L</td><td>08/07/1952</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324312570001</td><td>RIAMI</td><td>P</td><td>03/12/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101500031</td><td>MARIATI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321304690005</td><td>TUKIMAN</td><td>L</td><td>13/04/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326009690001</td><td>JUMAIYAH</td><td>P</td><td>20/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321905920002</td><td>CANDRA PRASTIYO</td><td>L</td><td>19/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326007950004</td><td>YURIKE DWI ANGGRAENI</td><td>P</td><td>20/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324110380001</td><td>LAMIRAH</td><td>P</td><td>01/10/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321210600003</td><td>SUPADI</td><td>L</td><td>12/10/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320612730004</td><td>RAHASANDI SUYONO</td><td>L</td><td>06/12/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326307750001</td><td>SARLIK. H</td><td>P</td><td>23/07/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405000001</td><td>ILMI MUFIDAH. SP</td><td>P</td><td>14/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322006030003</td><td>PROBO ANGGARA SP</td><td>L</td><td>20/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324607570003</td><td>MARPUAH</td><td>P</td><td>06/07/1957</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321104750003</td><td>HAMDANI</td><td>L</td><td>11/04/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326602820001</td><td>NURYATIMAH</td><td>P</td><td>26/02/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324208020003</td><td>NADA A. PRAMISTIA</td><td>P</td><td>02/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320512600002</td><td>SUWARNO</td><td>L</td><td>05/12/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325305660001</td><td>SRI WINAYAH</td><td>P</td><td>13/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325312880001</td><td>SOPIATIN</td><td>P</td><td>13/12/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320701930003</td><td>M SOKHIP</td><td>L</td><td>07/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322004960001</td><td>LIL MUTAQIN</td><td>L</td><td>20/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320204640003</td><td>SUWADI</td><td>L</td><td>02/04/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324608710001</td><td>JAMILAH</td><td>P</td><td>06/08/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325703910001</td><td>FITRYA INDAH LESTARI</td><td>P</td><td>17/03/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322310970002</td><td>FETRIK DWI KRISTIONO</td><td>L</td><td>23/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325102430002</td><td>KEMO</td><td>P</td><td>11/02/1943</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320207530003</td><td>SARIYATI</td><td>L</td><td>02/07/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321005570001</td><td>TARMAN</td><td>L</td><td>10/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325511510002</td><td>MARIYAMAH</td><td>P</td><td>15/11/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322211860001</td><td>ZAINUL ARIFIN</td><td>L</td><td>22/11/1986</td><td>Islam</td><td>Belum Kawin</td><td>Diploma I/II</td><td>GURU</td></tr>
 <tr><td>3507321010670001</td><td>IMANNURI</td><td>L</td><td>10/10/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324804690001</td><td>MUNTOMIMAH</td><td>P</td><td>08/04/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325104990001</td><td>DEWI PURNIAWATI</td><td>P</td><td>11/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320412640002</td><td>MISKAN</td><td>L</td><td>04/12/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325607710001</td><td>NURIYATI NINGSIH</td><td>P</td><td>16/07/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322505920001</td><td>RINGGA SULISWANTO</td><td>L</td><td>25/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326211970002</td><td>P. FIFI OVTAVIANA</td><td>P</td><td>22/11/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322707090002</td><td>M RICKY FEBRIAN</td><td>L</td><td>27/07/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326304760001</td><td>YULAIKAH</td><td>P</td><td>23/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209800002</td><td>NURIATIN</td><td>P</td><td>12/09/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325503000001</td><td>DILA NOPITASARI</td><td>P</td><td>15/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325304020002</td><td>TANIA</td><td>P</td><td>13/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325704030002</td><td>DIWI RATIK PRATIWI</td><td>P</td><td>17/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322303530002</td><td>RAWIADI</td><td>L</td><td>23/03/1953</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321205550001</td><td>MUCHAMMAD ALI</td><td>L</td><td>12/05/1955</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322903600001</td><td>TASEMAN</td><td>L</td><td>29/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326709590001</td><td>KASANAH</td><td>P</td><td>27/09/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326509840001</td><td>TASEMI</td><td>P</td><td>25/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321202780001</td><td>RIONO</td><td>L</td><td>12/02/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325710820001</td><td>KHUSNUL KHOTIMAH</td><td>P</td><td>17/10/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326702030002</td><td>CHORI CINDY FEBRIANINTANIYA D</td><td>P</td><td>27/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325001300001</td><td>SITI AMINAH</td><td>P</td><td>10/01/1930</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101570016</td><td>KASMINAH</td><td>P</td><td>01/01/1957</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326404690003</td><td>SUPATEMI</td><td>P</td><td>24/04/1969</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321910720001</td><td>ARIFIN</td><td>L</td><td>19/10/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324803810001</td><td>SUKARMI</td><td>P</td><td>08/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321210890001</td><td>SUDARWANTONO</td><td>L</td><td>12/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321705000001</td><td>LENGGA ANGGRO A S</td><td>L</td><td>17/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320212690001</td><td>SUTIKNO</td><td>L</td><td>02/12/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324204640003</td><td>MARMIATI</td><td>P</td><td>02/04/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322507940001</td><td>SETIAWAN</td><td>L</td><td>25/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324510980002</td><td>SISKA RATNASARI</td><td>P</td><td>05/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322012410001</td><td>SAKAT</td><td>L</td><td>20/12/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009510001</td><td>KHOLPIAH</td><td>P</td><td>10/09/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324804710001</td><td>EKOWATI</td><td>P</td><td>08/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322812750002</td><td>SUGENG HARIANTO</td><td>L</td><td>28/12/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321504860001</td><td>DODIK SETYAWAN</td><td>L</td><td>15/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321505660003</td><td>AGUSWADI</td><td>L</td><td>15/05/1966</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320508660002</td><td>SALAMAN</td><td>L</td><td>05/08/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107680012</td><td>NGATINAH</td><td>P</td><td>01/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211860003</td><td>EKO PURWANTO</td><td>L</td><td>12/11/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507322306890002</td><td>ANDRI HARIANTO</td><td>L</td><td>23/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108660007</td><td>WARSIATIN</td><td>P</td><td>01/08/1966</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325411880001</td><td>LISA INDAHWATI</td><td>P</td><td>14/11/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321509890004</td><td>YONO SETIAWAN</td><td>L</td><td>15/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326807920002</td><td>RINAWATI</td><td>P</td><td>28/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321908470001</td><td>SAMIN</td><td>L</td><td>19/08/1947</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325901600002</td><td>SUPINAH</td><td>P</td><td>19/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320802510001</td><td>ASNIPAH</td><td>L</td><td>08/02/1951</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205810002</td><td>KOSINI</td><td>P</td><td>12/05/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326704890001</td><td>WAHYUDI</td><td>P</td><td>27/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320112720001</td><td>CHOIRUL ADHIM</td><td>L</td><td>01/12/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326505820003</td><td>WIJI YULI ASTUTIK</td><td>P</td><td>25/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325410990004</td><td>KRISNIAWATI</td><td>P</td><td>14/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325303040001</td><td>ISMATUL LUTFIA</td><td>P</td><td>13/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508520001</td><td>LATIP</td><td>L</td><td>15/08/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324107560002</td><td>WASENI</td><td>P</td><td>01/07/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325804810001</td><td>ERNAWATI</td><td>P</td><td>18/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322509870001</td><td>MITAKUL ARIP</td><td>L</td><td>25/09/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321002990003</td><td>NIKEN ANDRIYAN</td><td>L</td><td>10/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321912330001</td><td>SUWANDI</td><td>L</td><td>19/12/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322504730003</td><td>NGATEMUN</td><td>L</td><td>25/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324806760002</td><td>SHOLIHAT</td><td>P</td><td>08/06/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321808020001</td><td>MUHAMMAD EFIT SUHANA</td><td>L</td><td>18/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324404630002</td><td>SIYAMI</td><td>P</td><td>04/04/1963</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322704820001</td><td>ANDIK WALUYO</td><td>L</td><td>27/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321905880001</td><td>CANDRA PRASETYO</td><td>L</td><td>19/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320101610018</td><td>EKO SUWARNO</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320503000002</td><td>WINARSO DIANTO</td><td>L</td><td>05/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321106570001</td><td>KHUSEN</td><td>L</td><td>11/06/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326101600002</td><td>SUNARTI</td><td>P</td><td>21/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323005780001</td><td>NANANG KOSIM</td><td>L</td><td>30/05/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324303800001</td><td>DEWI ELIYA</td><td>P</td><td>03/03/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321004810003</td><td>KHOIRUL MUSONIF</td><td>L</td><td>10/04/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325202610002</td><td>SUMARNI</td><td>P</td><td>12/02/1961</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321905680002</td><td>MARIANTO</td><td>L</td><td>19/05/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325403810002</td><td>FITRIA TATIK ISMAWATI</td><td>P</td><td>14/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326312020002</td><td>NILASARI</td><td>P</td><td>23/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325608070002</td><td>TIARA DWI AGUSTIN</td><td>P</td><td>16/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321703660001</td><td>ANSORI ISMIRAN</td><td>L</td><td>17/03/1966</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507325509700003</td><td>HASANAH</td><td>P</td><td>15/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324604980001</td><td>AMALINA ZUHROTUL ULA</td><td>P</td><td>06/04/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325309010001</td><td>MAR'ATUS SHOLIHAH</td><td>P</td><td>13/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322412040002</td><td>MUHAMMAD IHSAN ANSHORI</td><td>L</td><td>24/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322804100002</td><td>MUSTHOFA HABIBI</td><td>L</td><td>28/04/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321309700003</td><td>BUDI CAHYONO</td><td>L</td><td>13/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320806510001</td><td>ISTARTO</td><td>L</td><td>08/06/1951</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324801630002</td><td>WIYARI</td><td>P</td><td>08/01/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322808820002</td><td>DODY ISWAHYUDI</td><td>L</td><td>28/08/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322005900001</td><td>HENDRA ISWANTORO</td><td>L</td><td>20/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324703960001</td><td>RISKY ARINOVITA</td><td>P</td><td>07/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3505171605850001</td><td>HENDRI SUDIARMOKO</td><td>L</td><td>16/05/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324408870001</td><td>CHOTIN CHOIRUN NISAK</td><td>P</td><td>04/08/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325105110001</td><td>ZIVARA PUTRI SAKINAH</td><td>P</td><td>11/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322802780007</td><td>ALI BUSTAMAN</td><td>L</td><td>28/02/1978</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111790001</td><td>NURHAYATI</td><td>P</td><td>11/11/1979</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PERAWAT</td></tr>
 <tr><td>3507321004640001</td><td>PRAMUJI</td><td>L</td><td>10/04/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209680001</td><td>SOLIKAH</td><td>P</td><td>12/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322510960001</td><td>HAMDAN HARIANTO PRABOWO PR</td><td>L</td><td>25/10/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321312990001</td><td>SIGIT FANDI AFRIDO</td><td>L</td><td>13/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320802500001</td><td>WARDI</td><td>L</td><td>08/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325207520001</td><td>NYARI</td><td>P</td><td>12/07/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322706780003</td><td>SUWANTO</td><td>L</td><td>27/06/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320705620001</td><td>BAWIYONO</td><td>L</td><td>07/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324705680001</td><td>MAISAROH</td><td>P</td><td>07/05/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322811850001</td><td>FIRMAN SATRIONO</td><td>L</td><td>28/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324809900001</td><td>RAHAYU</td><td>P</td><td>08/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324703000001</td><td>YASINTA NURHIDAYAH</td><td>P</td><td>07/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508360001</td><td>LADI</td><td>L</td><td>15/08/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324308420001</td><td>SOFIYAH</td><td>P</td><td>03/08/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107720001</td><td>SURATI</td><td>P</td><td>01/07/1972</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321206790004</td><td>KUSWANTORO</td><td>L</td><td>12/06/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324102880001</td><td>SITI ZULAIKHAH</td><td>P</td><td>01/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324104620005</td><td>SITI KHUMAIYAH</td><td>P</td><td>01/04/1962</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>DOKTER</td></tr>
 <tr><td>3507322707710001</td><td>SISWANTO</td><td>L</td><td>27/07/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324301710003</td><td>MASCULA</td><td>P</td><td>03/01/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321006040002</td><td>BINTANG NUSANTARA</td><td>L</td><td>10/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321802070002</td><td>TSAMARA</td><td>L</td><td>18/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325205350001</td><td>SATUPAH</td><td>P</td><td>12/05/1935</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322306710001</td><td>HARIANTO</td><td>L</td><td>23/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326305800001</td><td>YUMANIK</td><td>P</td><td>23/05/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322507050003</td><td>AZIZUL AZZYAN</td><td>L</td><td>25/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322808700002</td><td>ATIM SUGIONO</td><td>L</td><td>28/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104700007</td><td>RIA</td><td>P</td><td>21/04/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902050002</td><td>LIANA FEBRIANTI</td><td>P</td><td>09/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322801640001</td><td>SETYO CAHYONO</td><td>L</td><td>28/01/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505670003</td><td>TRIHANAHIDA</td><td>P</td><td>15/05/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324508940003</td><td>EVA LENDI ADISTA</td><td>P</td><td>05/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321209720004</td><td>RAWI</td><td>L</td><td>12/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326808690002</td><td>TARTI</td><td>P</td><td>28/08/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321105950002</td><td>MAELAN WENDA PRASETIA</td><td>L</td><td>11/05/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507320303860002</td><td>HERMAN FARIANTO</td><td>L</td><td>03/03/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325402870003</td><td>DYAH AYU FEBRIANA</td><td>P</td><td>14/02/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322604090001</td><td>KEVIN FALIANTO</td><td>L</td><td>26/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322202600001</td><td>NYONO</td><td>L</td><td>22/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324310580001</td><td>MISENI</td><td>P</td><td>03/10/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325905950001</td><td>WAHYU NOVITASARI</td><td>P</td><td>19/05/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320604810002</td><td>SARKUN</td><td>L</td><td>06/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325308870002</td><td>YESI DIANTI</td><td>P</td><td>13/08/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324805100003</td><td>MERRYNDA SEPTIASA</td><td>P</td><td>08/05/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320708820003</td><td>AGUS WITONO</td><td>L</td><td>07/08/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326504880001</td><td>RENTI WINARI</td><td>P</td><td>25/04/1988</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321810060001</td><td>RENDI MASHUDA</td><td>L</td><td>18/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322009740003</td><td>SUPARNO</td><td>L</td><td>20/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326905800003</td><td>SULISTYOWATI</td><td>P</td><td>29/05/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323101070001</td><td>NAWA NUR AJI</td><td>L</td><td>31/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320312480001</td><td>ROHMAT</td><td>L</td><td>03/12/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326203520001</td><td>SITI ALKHOIROTUL JANNAH</td><td>P</td><td>22/03/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320408420002</td><td>SUYONO</td><td>L</td><td>04/08/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324905550001</td><td>SURIYAH</td><td>P</td><td>09/05/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323006830002</td><td>EDI PRIYO SANTOSO</td><td>L</td><td>30/06/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321508840003</td><td>PUJIONO</td><td>L</td><td>15/08/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326702850001</td><td>VIKA RIWAYATI</td><td>P</td><td>27/02/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322102110001</td><td>KHATAN JABIN FARABI</td><td>L</td><td>21/02/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320209860004</td><td>SUKARJI</td><td>L</td><td>02/09/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325804850001</td><td>BETI ANIFAH</td><td>P</td><td>18/04/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320704090001</td><td>ALFIN KIAN APRILLIO</td><td>L</td><td>07/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326412870003</td><td>FITRIYAH ILLIYIN </td><td>P</td><td>24/12/1987</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322308100001</td><td>M AZKA AFFANDI RAMADHAN</td><td>L</td><td>23/08/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325605750001</td><td>SUKARMI</td><td>P</td><td>16/05/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320707930002</td><td>ARI EMAMI EFENDI</td><td>L</td><td>07/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324302970002</td><td>IMAMI RAHMAN RAMADANI</td><td>P</td><td>03/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322204610004</td><td>PURNADI</td><td>L</td><td>22/04/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320106800003</td><td>CHOIRUL MUSHONIF</td><td>L</td><td>01/06/1980</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326509810001</td><td>EVIVIA SEPTIANI</td><td>P</td><td>25/09/1981</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323003070002</td><td>DHANDY ADY NUGRAHA</td><td>L</td><td>30/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321205820001</td><td>BENI DARMAWAN</td><td>L</td><td>12/05/1982</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326008840005</td><td>DEWI AGUSTINA</td><td>P</td><td>20/08/1984</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325004050001</td><td>AFRIZA WAHYUNI</td><td>P</td><td>10/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304680007</td><td>HERU STIAWAN</td><td>L</td><td>03/04/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808690003</td><td>NANIK WINARSIH</td><td>P</td><td>08/08/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320505730002</td><td>ANDREAS ARIYOKO</td><td>L</td><td>05/05/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326810800001</td><td>ANIK WINDAYATI</td><td>P</td><td>28/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326606000004</td><td>GEBRIELLEN. A</td><td>P</td><td>26/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321612570002</td><td>MOCH AINURROFIQ, Dr</td><td>L</td><td>16/12/1957</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>DOKTER</td></tr>
 <tr><td>3507324104620004</td><td>SITI KHUMAIYAH, Dr</td><td>P</td><td>01/04/1962</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>DOKTER</td></tr>
 <tr><td>3507320406960001</td><td>M AINUN NAJIB</td><td>L</td><td>04/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321907790003</td><td>YONO HARIANTO</td><td>L</td><td>19/07/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326804810002</td><td>SRI UTAMI</td><td>P</td><td>28/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322005030001</td><td>DIKI FAIZAL HUDA</td><td>L</td><td>20/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321310830006</td><td>DONI ADE LUKMAN</td><td>L</td><td>13/10/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326303880003</td><td>YUHANIS RETNANINGSIH PURWANTI</td><td>P</td><td>23/03/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325211080002</td><td>ADENIA PUTRI NOVELLANY</td><td>P</td><td>12/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320606450002</td><td>MADRI</td><td>L</td><td>06/06/1945</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507325610650001</td><td>PUJIATI</td><td>P</td><td>16/10/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321707860003</td><td>ANDIK EKO HARIYANTO</td><td>L</td><td>17/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KEPOLISIAN RI</td></tr>
 <tr><td>3507322803900001</td><td>BENI WIBOWO</td><td>L</td><td>28/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323012830003</td><td>HIDAYATURROCHMAN</td><td>L</td><td>30/12/1983</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324905840004</td><td>MELANIA TUNISAK</td><td>P</td><td>09/05/1984</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324402060001</td><td>LAURENCIA MOURIN HIDAYAT</td><td>P</td><td>04/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325604920002</td><td>PRISMA RISTA ANINA</td><td>P</td><td>16/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324212400001</td><td>NGATIMAH</td><td>P</td><td>02/12/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320110690007</td><td>MOHAMAD CHOJIN</td><td>L</td><td>01/10/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324509710002</td><td>SUCIATI</td><td>P</td><td>05/09/1971</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326801900002</td><td>YUNESTI C L</td><td>P</td><td>28/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101790013</td><td>SUKARTI</td><td>P</td><td>01/01/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320406770002</td><td>ADI SUJADI</td><td>L</td><td>04/06/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326410850002</td><td>FIDA YANTI MAFIKA SARI</td><td>P</td><td>24/10/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327009040001</td><td>AMMAMA NISA BILLAH N.P.A</td><td>P</td><td>30/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321808070003</td><td>MUHAMAD BUSRO P A</td><td>L</td><td>18/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326009400001</td><td>TASENI</td><td>P</td><td>20/09/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320108200004</td><td>WADRI</td><td>L</td><td>01/08/1920</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320806580001</td><td>MUSTAFA</td><td>L</td><td>08/06/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326704710001</td><td>SUMIATI</td><td>P</td><td>27/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324309030002</td><td>PUTRI BELLA MITAFASARI</td><td>P</td><td>03/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320506550002</td><td>SIONO</td><td>L</td><td>05/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325603510001</td><td>MA'INI</td><td>P</td><td>16/03/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325001790014</td><td>KUSMIATI</td><td>P</td><td>10/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321804810002</td><td>VAUJI</td><td>L</td><td>18/04/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320108850002</td><td>AGUS WIDIARDOYO</td><td>L</td><td>01/08/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321501950003</td><td>MUH LUKMAN FANANI</td><td>L</td><td>15/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321205040002</td><td>ZEIN ILYAS</td><td>L</td><td>12/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322003060004</td><td>MIFTAKUL IKSAL</td><td>L</td><td>20/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101430019</td><td>SIIN</td><td>L</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507324107600007</td><td>SARIANI</td><td>P</td><td>01/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325503670002</td><td>SUNARNI</td><td>P</td><td>15/03/1967</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326709810001</td><td>THERESIA HERMID</td><td>P</td><td>27/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324909910001</td><td>INEKE KUSUMA WARDANI</td><td>P</td><td>09/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322106700001</td><td>BAWON</td><td>L</td><td>21/06/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324312780001</td><td>SURWIYATI</td><td>P</td><td>03/12/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321108950001</td><td>ALIYAN DWI SAPUTRA</td><td>L</td><td>11/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326203020002</td><td>NILAM AYU ASARI</td><td>P</td><td>22/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321809370001</td><td>SARUN</td><td>L</td><td>18/09/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326602400001</td><td>MAINAH</td><td>P</td><td>26/02/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320106610028</td><td>NGADISAN</td><td>L</td><td>01/06/1961</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320102650003</td><td>ISBAT</td><td>L</td><td>01/02/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324701680001</td><td>MISTRI</td><td>P</td><td>07/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107940003</td><td>ALPIYAN JULIANDI</td><td>L</td><td>01/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320610990002</td><td>HAFIK TRIANIKA</td><td>L</td><td>06/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320808370001</td><td>IMAM SUJONO</td><td>L</td><td>08/08/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324406500003</td><td>WATINI</td><td>P</td><td>04/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325608720001</td><td>SRI YULIANA W</td><td>P</td><td>16/08/1972</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320204870001</td><td>ISMULYONO</td><td>L</td><td>02/04/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321009880001</td><td>SUPRIONO</td><td>L</td><td>10/09/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321006660001</td><td>SISWADI</td><td>L</td><td>10/06/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108740002</td><td>SUHARTATIK</td><td>P</td><td>01/08/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320304900003</td><td>SUPRIONO</td><td>L</td><td>03/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321706940003</td><td>AGUS SUPRIANTO</td><td>L</td><td>17/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324410400002</td><td>SITI AFIAH</td><td>P</td><td>04/10/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325309640001</td><td>SITI NURROHMAH</td><td>P</td><td>13/09/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320112580001</td><td>MOH SAID</td><td>L</td><td>01/12/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320409630002</td><td>SUHARDI</td><td>L</td><td>04/09/1963</td><td>Islam</td><td>Kawin</td><td>Strata II</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324609640001</td><td>SULAMI LAILA</td><td>P</td><td>06/09/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507326201920002</td><td>SELLY HARDIYANTI NURHIDAYAH</td><td>P</td><td>22/01/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320502010003</td><td>SALDI DWI WIJAYANTO SYARIFUDIN</td><td>L</td><td>05/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321505680001</td><td>SAHAT</td><td>L</td><td>15/05/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324305740003</td><td>FATONAH</td><td>P</td><td>03/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324811910001</td><td>SINTHA ALIF DONAVAN</td><td>P</td><td>08/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322001950002</td><td>MUHAMMAD DONI DAMARA</td><td>L</td><td>20/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321202970001</td><td>DHIO MUHAMMAD PAMUNGKAS</td><td>L</td><td>12/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324906420001</td><td>SARTIN</td><td>P</td><td>09/06/1942</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320302540002</td><td>AJI MULIANA</td><td>L</td><td>03/02/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325006750004</td><td>RIANAH</td><td>P</td><td>10/06/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324304000001</td><td>AYU DITA ANGGRAINI</td><td>P</td><td>03/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325608020003</td><td>SISKA PARASASTI</td><td>P</td><td>16/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320204540003</td><td>SUKARNO</td><td>L</td><td>02/04/1954</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326005630004</td><td>NURHAYATI</td><td>P</td><td>20/05/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324504880001</td><td>EVA FARINDA</td><td>P</td><td>05/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107620002</td><td>ABDUL AZIS</td><td>L</td><td>01/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009660001</td><td>KASIATI</td><td>P</td><td>10/09/1966</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324311880001</td><td>INTAN UMAMI</td><td>P</td><td>03/11/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325502940001</td><td>INAWATI</td><td>P</td><td>15/02/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321702060003</td><td>INDRA AKIRA ALIBRANI</td><td>L</td><td>17/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320408730001</td><td>SULIANTO</td><td>L</td><td>04/08/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326606650001</td><td>RUTH SUMIATI S</td><td>P</td><td>26/06/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322202970002</td><td>TOMI VERNANDO P</td><td>L</td><td>22/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325304030002</td><td>ADELA DEFA RHISTA</td><td>P</td><td>13/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320604670002</td><td>SUWARDI</td><td>L</td><td>06/04/1967</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324103750002</td><td>HARMIATI</td><td>P</td><td>01/03/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321512950001</td><td>AJI MAS ANWAR</td><td>L</td><td>15/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507325311010001</td><td>HERDHITA DEWI CHAHYANI</td><td>P</td><td>13/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324801880001</td><td>NANIK NURHAYATI</td><td>P</td><td>08/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322708880002</td><td>SUMARDIONO</td><td>L</td><td>27/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322804500001</td><td>JUMARI</td><td>L</td><td>28/04/1950</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550037</td><td>LASMANI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322403830002</td><td>ADI SUSANTO</td><td>L</td><td>24/03/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321512860001</td><td>SUDARSONO</td><td>L</td><td>15/12/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507323112250001</td><td>TASENO</td><td>L</td><td>31/12/1925</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327112550006</td><td>YATI</td><td>P</td><td>31/12/1955</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320101250011</td><td>DASIMUN</td><td>L</td><td>01/01/1925</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101350031</td><td>SATEMI</td><td>P</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101650044</td><td>NGATIRUN</td><td>L</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101770020</td><td>SUPRIYO</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101800012</td><td>JUMANIK</td><td>P</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320407680003</td><td>SAPRUNDI</td><td>L</td><td>04/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325907680002</td><td>SARPIK</td><td>P</td><td>19/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324811930001</td><td>NOVI TRI HANDAYANI</td><td>P</td><td>08/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320505970001</td><td>M ROFIQ RULADZIM</td><td>L</td><td>05/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325212010006</td><td>HELEN ANJELINA</td><td>P</td><td>12/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101250014</td><td>RUPIAH</td><td>P</td><td>01/01/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324204670002</td><td>RIATIN</td><td>P</td><td>02/04/1967</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101600036</td><td>BANI</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101630055</td><td>SUMA'IYAH</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322307900001</td><td>JULI TRI ANDREAS</td><td>L</td><td>23/07/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322905940002</td><td>MUHAMAD ARIS IHROM</td><td>L</td><td>29/05/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101580030</td><td>TOHARI</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325901690001</td><td>SUPIATI</td><td>P</td><td>19/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324112900002</td><td>INDASA RUKMANA</td><td>P</td><td>01/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320508580002</td><td>SYAIFUL BAKRI</td><td>L</td><td>05/08/1958</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324203630002</td><td>SRI HIDAYATI</td><td>P</td><td>02/03/1963</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320503860002</td><td>RIZAL FIRMANSYAH</td><td>L</td><td>05/03/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326007920001</td><td>RIZKI FITRI MAHMUDAH</td><td>P</td><td>20/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320508650003</td><td>M YUNUS</td><td>L</td><td>05/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324511750001</td><td>SURAMI</td><td>P</td><td>05/11/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322308910002</td><td>LUTFI YUSRONI</td><td>L</td><td>23/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320111950002</td><td>RISKI ZAKARIA</td><td>L</td><td>01/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324504000001</td><td>SINDI PUSPITA SARI</td><td>P</td><td>05/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324504660001</td><td>SUPARMI</td><td>P</td><td>05/04/1966</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507320101580031</td><td>BUNARI</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101600043</td><td>RETI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321008830002</td><td>TORIK</td><td>L</td><td>10/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322311930001</td><td>RIKI AHMAD FAUJI</td><td>L</td><td>23/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323011990002</td><td>M FIRMANSYAH</td><td>L</td><td>30/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320507470001</td><td>SUNYONO</td><td>L</td><td>05/07/1947</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325208590003</td><td>SULIAH</td><td>P</td><td>12/08/1959</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321008270001</td><td>MAT JAENAL</td><td>L</td><td>10/08/1927</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325206560003</td><td>MAISARAH</td><td>P</td><td>12/06/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321307680004</td><td>SUYONO</td><td>L</td><td>13/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324904750002</td><td>KHOLIFATUL ABIDAH</td><td>P</td><td>09/04/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320611030001</td><td>RIFKI RAFIKA RAMADAN</td><td>L</td><td>06/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324102400004</td><td>SARIATI</td><td>P</td><td>01/02/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324102570002</td><td>SUNARMI</td><td>P</td><td>01/02/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324605700002</td><td>SUCIATI</td><td>P</td><td>06/05/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325508750002</td><td>SUKARTI</td><td>P</td><td>15/08/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101400045</td><td>SIAMI</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320102720004</td><td>SUBAGIYO</td><td>L</td><td>01/02/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320104740003</td><td>ATIM SUGIONO</td><td>L</td><td>01/04/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101570024</td><td>PARIONO</td><td>L</td><td>01/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101580017</td><td>TUMIATI</td><td>P</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325204820002</td><td>SUSMILAH</td><td>P</td><td>12/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324807970001</td><td>ROSITA SETYA NINGSIH</td><td>P</td><td>08/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103300001</td><td>DARSIMIN</td><td>L</td><td>01/03/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324201500001</td><td>SUPARMI</td><td>P</td><td>02/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107820003</td><td>YULIONO</td><td>L</td><td>01/07/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322602900003</td><td>ERIK WAISA JUPRI</td><td>L</td><td>26/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507320101500031</td><td>KASMURI</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101580018</td><td>MUTMAINAH</td><td>P</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325307800004</td><td>KHOTIK DWI SUDAYATI</td><td>P</td><td>13/07/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326707870003</td><td>TRI AGUS ANDRIANA</td><td>P</td><td>27/07/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507900002</td><td>HETI FADILA</td><td>P</td><td>15/07/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322601760002</td><td>SAURI</td><td>L</td><td>26/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909810004</td><td>M SAIFUDIN</td><td>L</td><td>09/09/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507326601060004</td><td>REZA ANDINI AULIA RAHMA</td><td>P</td><td>26/01/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326305080002</td><td>MEYLA KEISYA PRATAMA</td><td>P</td><td>23/05/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101560021</td><td>SRIBATINAH</td><td>P</td><td>01/01/1956</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321908770001</td><td>JOKO PITONO</td><td>L</td><td>19/08/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320506810004</td><td>HARIANTO</td><td>L</td><td>05/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320608830001</td><td>ADI SISWANTO</td><td>L</td><td>06/08/1983</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321011870001</td><td>SUTRISNO</td><td>L</td><td>10/11/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450033</td><td>PONIRAN</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325109500002</td><td>YATUN</td><td>P</td><td>11/09/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325103700002</td><td>TUTIK</td><td>P</td><td>11/03/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321204800002</td><td>SUGIONO</td><td>L</td><td>12/04/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321803850001</td><td>SUGIANTO</td><td>L</td><td>18/03/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321005910003</td><td>REBUT NURCAHYO</td><td>L</td><td>10/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320101640012</td><td>MASKUR</td><td>L</td><td>01/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101730019</td><td>LULUK NURHIDAYAH</td><td>P</td><td>01/01/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323012930001</td><td>MUH NUR HASIM</td><td>L</td><td>30/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325810010001</td><td>SITI KHOMARIYAH MASKURO</td><td>P</td><td>18/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320502840001</td><td>MUKHAMAD PAIMIN</td><td>L</td><td>05/02/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KONSTRUKSI</td></tr>
 <tr><td>3507324707810003</td><td>PUJI ASTUTIK</td><td>P</td><td>07/07/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324310080001</td><td>AMALIA FITRI SUSANTI</td><td>P</td><td>03/10/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325411440001</td><td>GINTEN</td><td>P</td><td>14/11/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321507240001</td><td>WADRI</td><td>L</td><td>15/07/1924</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324406480004</td><td>SARMUNAH</td><td>P</td><td>04/06/1948</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321705580001</td><td>SUTRISNO</td><td>L</td><td>17/05/1958</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507326706750002</td><td>ISMIATI ASFUFAH</td><td>P</td><td>27/06/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320108910001</td><td>SINGGIH ADITYA WICAHYO</td><td>L</td><td>01/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320904780004</td><td>RASMAN</td><td>L</td><td>09/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325712810001</td><td>KASIATI</td><td>P</td><td>17/12/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326208030002</td><td>IKA DEWI RAHMAWATI</td><td>P</td><td>22/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325601080002</td><td>RODZATUL DESTIANA</td><td>P</td><td>16/01/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322211840004</td><td>ADI PRAYOGO</td><td>L</td><td>22/11/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324101300028</td><td>KASILAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320701690001</td><td>PAIDI</td><td>L</td><td>07/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507320104910001</td><td>OKI ANDRIAWAN</td><td>L</td><td>01/04/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324102700002</td><td>MISIYAH</td><td>P</td><td>01/02/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324909880003</td><td>INNEKE KUSUMA WARDANI</td><td>P</td><td>09/09/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322006620001</td><td>DARNO</td><td>L</td><td>20/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325108720001</td><td>SITI RAHMAWATI</td><td>P</td><td>11/08/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321611920002</td><td>ARIS RENDRA SETIAWAN</td><td>L</td><td>16/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325905980001</td><td>RIRIT LARASATI</td><td>P</td><td>19/05/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326512050001</td><td>PUTRI RAHAYU</td><td>P</td><td>25/12/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321710080002</td><td>MUSHER ADITYA</td><td>L</td><td>17/10/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101630023</td><td>MUNALI</td><td>L</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326403650002</td><td>DJAMIATIN</td><td>P</td><td>24/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324102900001</td><td>ROCHIMATUL CHASANAH</td><td>P</td><td>01/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323004000001</td><td>ILHAM TOMAMI</td><td>L</td><td>30/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320510680002</td><td>WASIS SUDARMANTO</td><td>L</td><td>05/10/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326304720001</td><td>NANIK HIDAYATI</td><td>P</td><td>23/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320811990002</td><td>ARFIN NURIH SHOBIRIN</td><td>L</td><td>08/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320309590001</td><td>FAKIH</td><td>L</td><td>03/09/1959</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507326407590002</td><td>KASIYATUN</td><td>P</td><td>24/07/1959</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507321712930001</td><td>MUHAMMAD FADHILAH MABRURI</td><td>L</td><td>17/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325706960001</td><td>ROFIATUL KORIMAH</td><td>P</td><td>17/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321609620001</td><td>PARNO</td><td>L</td><td>16/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325003710002</td><td>T HEKSA KURNIAWATI</td><td>P</td><td>10/03/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324805950002</td><td>EKA MEILBY SUHELLAYSIA</td><td>P</td><td>08/05/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320606560002</td><td>TISNO</td><td>L</td><td>06/06/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324811640002</td><td>NURWATI</td><td>P</td><td>08/11/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322008830003</td><td>AGUS MISWANTO</td><td>L</td><td>20/08/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507112110830004</td><td>JAJAK CAHYONO</td><td>L</td><td>21/10/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324105840002</td><td>HARTATIK</td><td>P</td><td>01/05/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326910100003</td><td>NAZWA SALWA SABILA</td><td>P</td><td>29/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322303650002</td><td>ARIPIN</td><td>L</td><td>23/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326610740001</td><td>SUNANTRI</td><td>P</td><td>26/10/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324908940002</td><td>LIA SOVIA</td><td>P</td><td>09/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324508970001</td><td>DEVI IRA SUSANTI</td><td>P</td><td>05/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324310490001</td><td>LASIYAH</td><td>P</td><td>03/10/1949</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320712700001</td><td>TURIMAN</td><td>L</td><td>07/12/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101810026</td><td>ZAMIATUL ZUHRIYAH</td><td>P</td><td>01/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324810060001</td><td>ELVI QODRIYAH</td><td>P</td><td>08/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320109620002</td><td>SUPARDI</td><td>L</td><td>01/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324612690004</td><td>SUTIARI</td><td>P</td><td>06/12/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507810004</td><td>YUYUN FARIDA</td><td>P</td><td>15/07/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322704010003</td><td>AHMAD ILHAM MAULANA N</td><td>L</td><td>27/04/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320703810003</td><td>EDY WISASNO</td><td>L</td><td>07/03/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320809690005</td><td>MUHAMMAD SAID</td><td>L</td><td>08/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104710002</td><td>NURHAYATI</td><td>P</td><td>21/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322411920001</td><td>M ADI IRWANTO</td><td>L</td><td>24/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324701000001</td><td>LAELA HESTI SAFITRI</td><td>P</td><td>07/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321208880006</td><td>WAHYU MUHAMAD ARIF</td><td>L</td><td>12/08/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326107900001</td><td>LULUK SRI WAHYUNI</td><td>P</td><td>21/07/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320911760002</td><td>YONO</td><td>L</td><td>09/11/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320407660002</td><td>SALAMUN</td><td>L</td><td>04/07/1966</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324806920001</td><td>NUR WAHIDIYA WATI</td><td>P</td><td>08/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325608400002</td><td>SAYIATI</td><td>P</td><td>16/08/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321408420002</td><td>KASMANI</td><td>L</td><td>14/08/1942</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324710450001</td><td>SIAMI</td><td>P</td><td>07/10/1945</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324110440001</td><td>MASIAH</td><td>P</td><td>01/10/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325902400001</td><td>MESIYAH</td><td>P</td><td>19/02/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322711740001</td><td>MISKAN</td><td>L</td><td>27/11/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3516035602840002</td><td>SATUKAH</td><td>P</td><td>16/02/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324104080002</td><td>APRILIA WULANDARI</td><td>P</td><td>01/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321211400003</td><td>WARNI</td><td>L</td><td>12/11/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326111550001</td><td>SUNARTI</td><td>P</td><td>21/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320401910001</td><td>MUCHLAS ANDRIAWAN</td><td>L</td><td>04/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324611960001</td><td>MAULINDA JUWARIYAH</td><td>P</td><td>06/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101480021</td><td>SUKADI</td><td>L</td><td>01/01/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321105210001</td><td>SANIMIN</td><td>L</td><td>11/05/1921</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325910290001</td><td>MURIAMAH</td><td>P</td><td>19/10/1929</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101310002</td><td>TUMIRAH</td><td>P</td><td>01/01/1931</td><td>Islam</td><td>Cerai Hidup</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325107930002</td><td>PUTRI WULANDARI</td><td>P</td><td>11/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507321107930003</td><td>SATIRA CAHAYA</td><td>L</td><td>11/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320106690001</td><td>SUBANDI</td><td>L</td><td>01/06/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325111820003</td><td>SUROIYAH</td><td>P</td><td>11/11/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321010060002</td><td>EDO SETIAWAN NANDA SAPUTRA</td><td>L</td><td>10/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320505800006</td><td>WASIS HARIANTO</td><td>L</td><td>05/05/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324104840003</td><td>MARIATUL KIPTIYAH</td><td>P</td><td>01/04/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507326810000001</td><td>UMI SA'ADAH</td><td>P</td><td>28/10/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101720026</td><td>SAKIM</td><td>L</td><td>01/01/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324505820001</td><td>YETI USTAFIYAH</td><td>P</td><td>05/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325310050001</td><td>SAZKYA ADYA MEKA ANDINI</td><td>P</td><td>13/10/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321608600003</td><td>ABDUL ROCHIM</td><td>L</td><td>16/08/1960</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324905470001</td><td>SIAMI</td><td>P</td><td>09/05/1947</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321211750002</td><td>MISENAN</td><td>L</td><td>12/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324201750004</td><td>SITI ROMAIYAH</td><td>P</td><td>02/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324604080002</td><td>SITI CHOOIROTUL FADILAH</td><td>P</td><td>06/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320402770001</td><td>ABDUL MAJID</td><td>L</td><td>04/02/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327101880001</td><td>ERNA DWI HANDAYANI</td><td>P</td><td>31/01/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320112090001</td><td>AHMAD SYARIFUDIN</td><td>L</td><td>01/12/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321607780001</td><td>SUPRIYO</td><td>L</td><td>16/07/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326902800002</td><td>HENI PURWATI</td><td>P</td><td>29/02/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322404990001</td><td>ANOREA DOHAN CHOSSY PRATAMA</td><td>L</td><td>24/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325108060002</td><td>INNE RIZMA ELFA RIYANTI</td><td>P</td><td>11/08/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322401730001</td><td>TUMINGAN</td><td>L</td><td>24/01/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324505770004</td><td>NUR SHOLIKHAH</td><td>P</td><td>05/05/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320302990002</td><td>LORIS CAPIROSI</td><td>L</td><td>03/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320111800003</td><td>NUR WAHIDIAWAN</td><td>L</td><td>01/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507095902900001</td><td>PUTRI KUSNAWATI</td><td>P</td><td>19/02/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322603110001</td><td>AHMAD NAFIS RIZQI DIAWAN</td><td>L</td><td>26/03/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321204670003</td><td>MUHAMMAD SUEB</td><td>L</td><td>12/04/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324204750001</td><td>NANIK SUJARWATI</td><td>P</td><td>02/04/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322204950003</td><td>AHMAD LUTFI</td><td>L</td><td>22/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325301100002</td><td>RAEHANI HAFIZAH</td><td>P</td><td>13/01/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101320010</td><td>MUKENI</td><td>L</td><td>01/01/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101380016</td><td>RATEMI</td><td>P</td><td>01/01/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322407660001</td><td>SUJIYO</td><td>L</td><td>24/07/1966</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507326703760002</td><td>DEWI SUMIATI</td><td>P</td><td>27/03/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326011950001</td><td>SAYYIDATI MUAMMALA</td><td>P</td><td>20/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326506040001</td><td>SELLY KHOFIFAH</td><td>P</td><td>25/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325902450001</td><td>MISIYAH</td><td>P</td><td>19/02/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320905740001</td><td>MUHAMMAD SUEB</td><td>L</td><td>09/05/1974</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324407500003</td><td>SUMIATUN</td><td>P</td><td>04/07/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320702780001</td><td>WINARDI</td><td>L</td><td>07/02/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320106800001</td><td>HARIYONO</td><td>L</td><td>01/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909860002</td><td>SUGIANTO</td><td>L</td><td>09/09/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321609900004</td><td>AGUS PRIBADI</td><td>L</td><td>16/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320104720002</td><td>SISWANTO</td><td>L</td><td>01/04/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324205770001</td><td>SUSMIATI</td><td>P</td><td>02/05/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324603080002</td><td>SAFIRA KAMALIA ZAHRA</td><td>P</td><td>06/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321507680003</td><td>PURNOMO</td><td>L</td><td>15/07/1968</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324803720002</td><td>SHOLI'AH</td><td>P</td><td>08/03/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324310940003</td><td>DEWI AYU PUSPITASARI</td><td>P</td><td>03/10/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322012030002</td><td>MUHAMMAD WAHYU HIDAYAT</td><td>L</td><td>20/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326011540003</td><td>JUMI</td><td>P</td><td>20/11/1954</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325102350001</td><td>SIAMAH</td><td>P</td><td>11/02/1935</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321512730002</td><td>POERNAWAN</td><td>L</td><td>15/12/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326506750002</td><td>SRI PURNAMI</td><td>P</td><td>25/06/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324504970001</td><td>LELY SULTHONIAH</td><td>P</td><td>05/04/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325712020002</td><td>DWI NADYA CAHYANI</td><td>P</td><td>17/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320406620002</td><td>LASIRAN</td><td>L</td><td>04/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324601700002</td><td>ROSIDAH</td><td>P</td><td>06/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320308920001</td><td>M ABDURROZAQ</td><td>L</td><td>03/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320202620004</td><td>JAMINGAN</td><td>L</td><td>02/02/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324605650004</td><td>SITI FATIMAH</td><td>P</td><td>06/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326909930002</td><td>KHUSNUL M</td><td>P</td><td>29/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322508950001</td><td>AHMAD KUSNIA</td><td>L</td><td>25/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324609040003</td><td>LAELA MAULIDIA</td><td>P</td><td>06/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320702750001</td><td>MUHAMMAD WAHRODIN</td><td>L</td><td>07/02/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325808690002</td><td>KARMIATI</td><td>P</td><td>18/08/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321606940001</td><td>MUHAMMAD FERI HAMDANI</td><td>L</td><td>16/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326606970002</td><td>LILIS ROHMAWATI</td><td>P</td><td>26/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101350027</td><td>RIONO</td><td>L</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101430022</td><td>KARTINAH</td><td>P</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326807760001</td><td>WIWIK INDAYATI</td><td>P</td><td>28/07/1976</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322308990003</td><td>M ALFIN WAHYU PRADANA</td><td>L</td><td>23/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450042</td><td>SARIKAN</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101480016</td><td>JAMIAH</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321508820002</td><td>AGUS LESTARI</td><td>L</td><td>15/08/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320408660001</td><td>SULIONO</td><td>L</td><td>04/08/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507326512700001</td><td>DEWI SUPI'ANI</td><td>P</td><td>25/12/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322711940001</td><td>M YUSUF</td><td>L</td><td>27/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320711090003</td><td>A AFAN MABRURI</td><td>L</td><td>07/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324406270001</td><td>MESIAMAH</td><td>P</td><td>04/06/1927</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322505570002</td><td>AHMAD FAUZAN</td><td>L</td><td>25/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326606620001</td><td>ARLIYAH</td><td>P</td><td>26/06/1962</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324111900001</td><td>ISNAINI MAHMUDAH</td><td>P</td><td>01/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320803630001</td><td>SUWAJI</td><td>L</td><td>08/03/1963</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324605680002</td><td>MARIANI</td><td>P</td><td>06/05/1968</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326710810002</td><td>NING TATIK</td><td>P</td><td>27/10/1981</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507325708910003</td><td>WIJI LESTARI</td><td>P</td><td>17/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325409020002</td><td>SITI NUR AZIZATU S</td><td>P</td><td>14/09/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607610001</td><td>KASENO</td><td>L</td><td>16/07/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507324101630054</td><td>SARIANAH</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320610800003</td><td>SUHARSONO</td><td>L</td><td>06/10/1980</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101550025</td><td>M BAKRI</td><td>L</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324910680002</td><td>DEWI KARTINI</td><td>P</td><td>09/10/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320809860006</td><td>M MAMBAUL ULUM</td><td>L</td><td>08/09/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324601950002</td><td>LAILATUL MUSTAFIDAH</td><td>P</td><td>06/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324901400001</td><td>SRINAH</td><td>P</td><td>09/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321303690001</td><td>HERY YONO</td><td>L</td><td>13/03/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101760008</td><td>MESENAH</td><td>P</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320811950001</td><td>MUHAMMAD SYAIFUDIN</td><td>L</td><td>08/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607870001</td><td>SURATNO</td><td>L</td><td>06/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101800015</td><td>MOH YAIN</td><td>L</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324506840001</td><td>IKA MAYASAROH</td><td>P</td><td>05/06/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324903000001</td><td>DINDA LESTARI</td><td>P</td><td>09/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320408480003</td><td>SAMSIRO</td><td>L</td><td>04/08/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325207580001</td><td>TUMI</td><td>P</td><td>12/07/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322708760002</td><td>PAINO</td><td>L</td><td>27/08/1976</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101880011</td><td>M MISBAKHUS SA'BAN</td><td>L</td><td>01/01/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325608920002</td><td>NILA TYAS TUTI</td><td>P</td><td>16/08/1992</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322407520001</td><td>SLAMET</td><td>L</td><td>24/07/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325406620001</td><td>RUMINI</td><td>P</td><td>14/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322801810002</td><td>SHOLIKHIN</td><td>L</td><td>28/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321303840001</td><td>AHMAD SAHRONI</td><td>L</td><td>13/03/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324408910003</td><td>KUSRINI</td><td>P</td><td>04/08/1991</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320105560005</td><td>NARWI</td><td>L</td><td>01/05/1956</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507325705620002</td><td>SAINAH</td><td>P</td><td>17/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324205890001</td><td>ENI PUJI WATININGSIH</td><td>P</td><td>02/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320105770001</td><td>YULIANTO</td><td>L</td><td>01/05/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324103530001</td><td>SAMINI</td><td>P</td><td>01/03/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321509560002</td><td>SODIKIN</td><td>L</td><td>15/09/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326707890002</td><td>DIAN ASTUTIK</td><td>P</td><td>27/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320207660001</td><td>TASERI</td><td>L</td><td>02/07/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325003660001</td><td>SUZANNA SRI KURNIATI</td><td>P</td><td>10/03/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320402920001</td><td>EKO PRAYOGI</td><td>L</td><td>04/02/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507327108960003</td><td>DEWI RISKYARA</td><td>P</td><td>31/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507320809700003</td><td>NURALIM</td><td>L</td><td>08/09/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324110690001</td><td>RATNA LESTARI</td><td>P</td><td>01/10/1969</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324905960003</td><td>ANIK AZIZAH</td><td>P</td><td>09/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321202050001</td><td>KRISNA NURALIM</td><td>L</td><td>12/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321409700001</td><td>PURWADI</td><td>L</td><td>14/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324306710001</td><td>WIDARIYAH</td><td>P</td><td>03/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507325105930002</td><td>SETIA DEWI CAHYA N</td><td>P</td><td>11/05/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325612040001</td><td>DESI PUTRI RAHMASARI</td><td>P</td><td>16/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326005650002</td><td>LASTRI</td><td>P</td><td>20/05/1965</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324903820005</td><td>SRI RAHAYU</td><td>P</td><td>09/03/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325606850004</td><td>NING ASTUTIK</td><td>P</td><td>16/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327004870002</td><td>NILA APRILLIANA</td><td>P</td><td>30/04/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322006770001</td><td>ABDUR ROHMAN</td><td>L</td><td>20/06/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325309790001</td><td>NUNUK WIJI LESTARI</td><td>P</td><td>13/09/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322812010002</td><td>AHMAD ZAMRONI</td><td>L</td><td>28/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320211520001</td><td>KARNADI</td><td>L</td><td>02/11/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324812600001</td><td>SUPIATI</td><td>P</td><td>08/12/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320406820005</td><td>NUR KHOLIS</td><td>L</td><td>04/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325008840001</td><td>HENIK YULIATI</td><td>P</td><td>10/08/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101730017</td><td>MUHAMAD YASIN</td><td>L</td><td>01/01/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101780018</td><td>JOKO SUPRIANTO</td><td>L</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325601860003</td><td>DEWI PURWATI</td><td>P</td><td>16/01/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320711040002</td><td>RONI FIRMANSYAH</td><td>L</td><td>07/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322412820003</td><td>AGUS SISWANTO</td><td>L</td><td>24/12/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325012840003</td><td>SUNARTI</td><td>P</td><td>10/12/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324909080002</td><td>CHINTIA ARUM SN</td><td>P</td><td>09/09/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101760030</td><td>NUR HAMID</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326505820005</td><td>TRININGSIH</td><td>P</td><td>25/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325903040001</td><td>SILVYA NUR HALIZAH</td><td>P</td><td>19/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325009910002</td><td>LULUK MAULIDIA</td><td>P</td><td>10/09/1991</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321004640002</td><td>JUKI</td><td>L</td><td>10/04/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326611650001</td><td>NGATENI</td><td>P</td><td>26/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326406900003</td><td>ISNANI</td><td>P</td><td>24/06/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320710970002</td><td>MUHAMMAD QODAR MABRURI</td><td>L</td><td>07/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321704020002</td><td>ARI ADITIYAN</td><td>L</td><td>17/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326710040001</td><td>ANI ANGGRAINI</td><td>P</td><td>27/10/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322111660001</td><td>SUGENG RUDI HARSONO</td><td>L</td><td>21/11/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324301700003</td><td>SITI SULIKAH</td><td>P</td><td>03/01/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320510930002</td><td>BHIMO SETIYOKO HADI</td><td>L</td><td>05/10/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321303990001</td><td>ARYO WHIDI SADEWO</td><td>L</td><td>13/03/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101040005</td><td>AGUNGH TRIATMAJA</td><td>L</td><td>01/01/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101750034</td><td>IMAM SYAFI'I</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326706880002</td><td>DENIK WIBAWATI</td><td>P</td><td>27/06/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320911070001</td><td>ALFANDI FARDHANA P</td><td>L</td><td>09/11/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101400070</td><td>SUKARTI</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322901640001</td><td>HINDRA WIJAYA</td><td>L</td><td>29/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324202620004</td><td>NGATIYAI</td><td>P</td><td>02/02/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320101860007</td><td>IMAM MAHMUDI</td><td>L</td><td>01/01/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326109920002</td><td>NOVI YANTI</td><td>P</td><td>21/09/1992</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322805100001</td><td>TEGAR RIZKI MAULANA</td><td>L</td><td>28/05/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326107840004</td><td>IDA NURUL AINI</td><td>P</td><td>21/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325905100001</td><td>HAFIZA ZAHRA DARANI</td><td>P</td><td>19/05/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320602600003</td><td>SOLIKIN</td><td>L</td><td>06/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325805750001</td><td>WININGSIH</td><td>P</td><td>18/05/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326703960001</td><td>CHANDRA NURMILA FITRI</td><td>P</td><td>27/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321406050003</td><td>REZA DWI ANGGARESA P</td><td>L</td><td>14/06/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101360012</td><td>DUL SLAMET</td><td>L</td><td>01/01/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101560016</td><td>SIYATIN</td><td>P</td><td>01/01/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322408630003</td><td>SUWANTONO</td><td>L</td><td>24/08/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507325305660005</td><td>SITI ROHMAH</td><td>P</td><td>13/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323005020001</td><td>M RENALDI DENY SAPUTRA</td><td>L</td><td>30/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325403310001</td><td>SUPINAH</td><td>P</td><td>14/03/1931</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325410500001</td><td>SUKARTI</td><td>P</td><td>14/10/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101750012</td><td>IMAM SAFI'I</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101350025</td><td>YAHMI</td><td>P</td><td>01/01/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325912660018</td><td>NURIANAH</td><td>P</td><td>19/12/1966</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321710870001</td><td>AHMAD BAROINI</td><td>L</td><td>17/10/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101400059</td><td>KAMSI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550024</td><td>ROSIATI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320506800003</td><td>YUDIONO</td><td>L</td><td>05/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324302950001</td><td>TRI WAHYUNI</td><td>P</td><td>03/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325607960001</td><td>YULIANAH</td><td>P</td><td>16/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321104340003</td><td>KASPAN</td><td>L</td><td>11/04/1934</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326707650004</td><td>TUKINI</td><td>P</td><td>27/07/1965</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321409760002</td><td>AGUS SUPRIADI </td><td>L</td><td>14/09/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN HONORER</td></tr>
 <tr><td>3507321708840005</td><td>AGUS PRAYITNO</td><td>L</td><td>17/08/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321106870001</td><td>TATIK FARIKHA</td><td>L</td><td>11/06/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321212730001</td><td>HARIANTO</td><td>L</td><td>12/12/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101720001</td><td>ROMELAH</td><td>P</td><td>01/01/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322907960002</td><td>M SAHRUL MAULIDAN</td><td>L</td><td>29/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321007980001</td><td>M RANDI JAELANI</td><td>L</td><td>10/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320306640001</td><td>ISWANTO</td><td>L</td><td>03/06/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325106710001</td><td>TOWIYAH</td><td>P</td><td>11/06/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324803900001</td><td>SUSI WAHYUNI</td><td>P</td><td>08/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320305980002</td><td>M JAINUL ROZIKHIN</td><td>L</td><td>03/05/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326807030002</td><td>KARISMA</td><td>P</td><td>28/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320305310001</td><td>SAMSURI</td><td>L</td><td>03/05/1931</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101400035</td><td>MUTMAINAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322001590014</td><td>MAT SOPI'I</td><td>L</td><td>20/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326612600001</td><td>RAMINTEN</td><td>P</td><td>26/12/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324208020002</td><td>AMELIA PUSPITA ANGGRAINI</td><td>P</td><td>02/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320403710001</td><td>SUGITO</td><td>L</td><td>04/03/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326104740004</td><td>NURIYAH</td><td>P</td><td>21/04/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325610960003</td><td>INDAH PRASTYA NINGRUM</td><td>P</td><td>16/10/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322510010002</td><td>ERIK DWI PRASTYAWAN</td><td>L</td><td>25/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101370012</td><td>SAMINGAN</td><td>L</td><td>01/01/1937</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101400036</td><td>SALMI</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101610011</td><td>SUJONO</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324101670002</td><td>SIANAH</td><td>P</td><td>01/01/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325609870002</td><td>ERLIYA SUSANTI</td><td>P</td><td>16/09/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325401960002</td><td>NUR FAUZIAH</td><td>P</td><td>14/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101690033</td><td>MUSTAKIM</td><td>L</td><td>01/01/1969</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101440023</td><td>MASIAH</td><td>P</td><td>01/01/1944</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324310840001</td><td>SITI KHOIRUL UMAMI</td><td>P</td><td>03/10/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321602510001</td><td>UMAR BISRI</td><td>L</td><td>16/02/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325203620002</td><td>MARDIYAH</td><td>P</td><td>12/03/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321010870001</td><td>MUJIB</td><td>L</td><td>10/10/1987</td><td>Islam</td><td>Belum Kawin</td><td>Diploma I/II</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321206910001</td><td>MAS ANDI MUHTAR FAUZI</td><td>L</td><td>12/06/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108000001</td><td>M SAIFUL ARIF</td><td>L</td><td>01/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320406760002</td><td>DAERI</td><td>L</td><td>04/06/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326107760002</td><td>WAYEM</td><td>P</td><td>21/07/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322606020001</td><td>ZULKIFLI</td><td>L</td><td>26/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326307060001</td><td>LAILATUL AZIZAH</td><td>P</td><td>23/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607510002</td><td>KASERI</td><td>L</td><td>06/07/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324804460001</td><td>MISTIN</td><td>P</td><td>08/04/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101480012</td><td>PAIDI</td><td>L</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101620033</td><td>SAMIATI</td><td>P</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325011790006</td><td>KOKOK HARIYANTO</td><td>P</td><td>10/11/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322403830003</td><td>WIDIA ASTUTIK</td><td>L</td><td>24/03/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326705080003</td><td>RANITA MEILIANA W.P</td><td>P</td><td>27/05/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320510350001</td><td>SUKARDI</td><td>L</td><td>05/10/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324605600001</td><td>KASIANI</td><td>P</td><td>06/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322012790001</td><td>MAKHASIN</td><td>L</td><td>20/12/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322710530001</td><td>MUHAIMIN</td><td>L</td><td>27/10/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326710660001</td><td>TULASIH</td><td>P</td><td>27/10/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321009860003</td><td>M ALI RIDHO</td><td>L</td><td>10/09/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320709950001</td><td>MAWAHIBU SHOMAD</td><td>L</td><td>07/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320807010002</td><td>A ROSYID GHUFRON</td><td>L</td><td>08/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101690012</td><td>MUHAMMAD SA'I</td><td>L</td><td>01/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324103720006</td><td>WAGIYATI</td><td>P</td><td>01/03/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322704030002</td><td>ABDUL AZIZ</td><td>L</td><td>27/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322108370001</td><td>SAMADI</td><td>L</td><td>21/08/1937</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326007390001</td><td>WAGIYAH</td><td>P</td><td>20/07/1939</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101580028</td><td>SARDI</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101700027</td><td>ALFIYAH</td><td>P</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322004940003</td><td>M FATHUL QORIB</td><td>L</td><td>20/04/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321205400003</td><td>SAMAT</td><td>L</td><td>12/05/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101530027</td><td>TUKIRAH</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101200003</td><td>TASEMAN</td><td>L</td><td>01/01/1920</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324101530016</td><td>JAMIATUN</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324607770001</td><td>LILIK KUSMIATI</td><td>P</td><td>06/07/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320703820005</td><td>AGUNG PRIBADI</td><td>L</td><td>07/03/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>TUKANG LISTRIK</td></tr>
 <tr><td>3507322512690003</td><td>MARSUP</td><td>L</td><td>25/12/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324403720003</td><td>SRI LESTARI</td><td>P</td><td>04/03/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320204950002</td><td>M SHOHIBUL HABIBI</td><td>L</td><td>02/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321206010002</td><td>SONY HERNANDO</td><td>L</td><td>12/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321111800002</td><td>NGATENO</td><td>L</td><td>11/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325708830001</td><td>SHOLIKAH</td><td>P</td><td>17/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902030001</td><td>RISKA ENGELIA EVITASARI</td><td>P</td><td>09/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320107710003</td><td>MUJIONO</td><td>L</td><td>01/07/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324505750003</td><td>SITI MAISYAROH</td><td>P</td><td>05/05/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325511970001</td><td>NOVIA IRMAYANTI</td><td>P</td><td>15/11/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326410110001</td><td>NABILA OKTA RIYANTI</td><td>P</td><td>24/10/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324506300001</td><td>SIMPEN</td><td>P</td><td>05/06/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325005540002</td><td>SAMENI</td><td>P</td><td>10/05/1954</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321606650002</td><td>AMIN</td><td>L</td><td>16/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325010700002</td><td>NGATEMI</td><td>P</td><td>10/10/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321312900002</td><td>KURNIAWAN</td><td>L</td><td>13/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320702930002</td><td>KUSAINI</td><td>L</td><td>07/02/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325409960002</td><td>NUR HANIFAH</td><td>P</td><td>14/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321103300002</td><td>BUNASIR</td><td>L</td><td>11/03/1930</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101750019</td><td>BUDI HANDOKO</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326003720001</td><td>SRI WIN</td><td>P</td><td>20/03/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325906930001</td><td>ELA ANJARSARI</td><td>P</td><td>19/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326204550001</td><td>MILAH</td><td>P</td><td>22/04/1955</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326812870002</td><td>SRIWAHYUNI</td><td>P</td><td>28/12/1987</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101620041</td><td>MISTUN</td><td>P</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324306860001</td><td>WAYAN SARIANI</td><td>P</td><td>03/06/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322004590001</td><td>NUR HASIM</td><td>L</td><td>20/04/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712630001</td><td>ENIK MEGAWATI</td><td>P</td><td>07/12/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326106840005</td><td>ATIK LESTARI</td><td>P</td><td>21/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808950001</td><td>KULUDIA</td><td>P</td><td>08/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320909680005</td><td>DUL GIMAN</td><td>L</td><td>09/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325302770001</td><td>ROIYATUL MUALIMAH</td><td>P</td><td>13/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325712030003</td><td>YUNITA EKAYANTI</td><td>P</td><td>17/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321511770001</td><td>GATOT SUGIARTO</td><td>L</td><td>15/11/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324801860001</td><td>DEWI MASLUKAH</td><td>P</td><td>08/01/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320109050001</td><td>M ALVIN ANANDA SEPTIA</td><td>L</td><td>01/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325410060003</td><td>SISILIA CHRISMA PRATIWI</td><td>P</td><td>14/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320305710002</td><td>AHMAD MANSYUR</td><td>L</td><td>03/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325410800004</td><td>SRI MINTARSIH</td><td>P</td><td>14/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322308010001</td><td>ISFANDI AGUS SURBAKTI</td><td>L</td><td>23/08/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322712060001</td><td>AHMAD ARIS ISMAIL</td><td>L</td><td>27/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101330010</td><td>AKIYAK</td><td>L</td><td>01/01/1933</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101400071</td><td>SURIANAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320105750003</td><td>ACHMAD FAHRUDIN</td><td>L</td><td>01/05/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324805730002</td><td>INTAYAH</td><td>P</td><td>08/05/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322106030002</td><td>ANANDA DICKY FAHRUDIN</td><td>L</td><td>21/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321308080001</td><td>DAVID MOH NUR IKHSAN</td><td>L</td><td>13/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320611700001</td><td>IMAM BAIL</td><td>L</td><td>06/11/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101830019</td><td>SUTINI</td><td>P</td><td>01/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320304080003</td><td>MUHAMMAD ROFIQ</td><td>L</td><td>03/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320503800003</td><td>WINARKO</td><td>L</td><td>05/03/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324507790004</td><td>RIANAH</td><td>P</td><td>05/07/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321002100003</td><td>RENALDO ALDIANSYAH</td><td>L</td><td>10/02/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101550039</td><td>PIATAR</td><td>L</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101600063</td><td>MARIYAH</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101820019</td><td>YULI ASTUTIK</td><td>P</td><td>01/01/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322606890002</td><td>MUHAMAD JAMROJI</td><td>L</td><td>26/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322602910003</td><td>M ILMA AINUR RIZA</td><td>L</td><td>26/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322412000001</td><td>ACHMAD FARID LATHIFI</td><td>L</td><td>24/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326504000002</td><td>EKA ALIFATUZ ZAHRO</td><td>P</td><td>25/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101530024</td><td>MISENAN</td><td>L</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101650056</td><td>SULIANAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324508900003</td><td>LULUK NGESTI RAHAYU</td><td>P</td><td>05/08/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010090002</td><td>ELFINO GABRILIAN PRATAMA</td><td>P</td><td>10/10/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322101700002</td><td>NUR MASYHURI</td><td>L</td><td>21/01/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326007750001</td><td>UTAMAMIK</td><td>P</td><td>20/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322208020002</td><td>WAHYU ROHMAN A</td><td>L</td><td>22/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321003070003</td><td>MUHAMMAD IRAWAN MASYHURI</td><td>L</td><td>10/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320809700004</td><td>MISKAN</td><td>L</td><td>08/09/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320905430001</td><td>YASBAN</td><td>L</td><td>09/05/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326601500001</td><td>PAINAH</td><td>P</td><td>26/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320802880001</td><td>BADERI MANAFI'I DHOHIRUDIN</td><td>L</td><td>08/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322104400001</td><td>JASMANI</td><td>L</td><td>21/04/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101470012</td><td>KASIATIN</td><td>P</td><td>01/01/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321109790002</td><td>ABDUL ROHMAD</td><td>L</td><td>11/09/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321509820002</td><td>TURIMAN</td><td>L</td><td>15/09/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320806860001</td><td>AHMAD SHO'IM</td><td>L</td><td>08/06/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101300017</td><td>SAJINAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321302830005</td><td>SUTRISNO BENDU</td><td>L</td><td>13/02/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101530017</td><td>SUPIRAH</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320704670001</td><td>MARIADI</td><td>L</td><td>07/04/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324707740003</td><td>LAILATUL UMI AWANAH</td><td>P</td><td>07/07/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320312940002</td><td>DEMAS BAGUS SURENDRA</td><td>L</td><td>03/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325307000001</td><td>ELIVIA MAENDRA SARI</td><td>P</td><td>13/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324507080001</td><td>CHINDI INTAN MAELYA SARI</td><td>P</td><td>05/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101320008</td><td>DUL WAKAP</td><td>L</td><td>01/01/1932</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321005740006</td><td>MAT NUR KHOIRUL JUJA</td><td>L</td><td>10/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324106800001</td><td>SUMIATI</td><td>P</td><td>01/06/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320106000002</td><td>EKO IDAM FANI</td><td>L</td><td>01/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326403060001</td><td>FIRLY NUR AZZANY</td><td>P</td><td>24/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322301640001</td><td>SUGIANTO</td><td>L</td><td>23/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325005660002</td><td>PONITI</td><td>P</td><td>10/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321503850001</td><td>ADI PURNOMO</td><td>L</td><td>15/03/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321708870002</td><td>DEDI SISWANTO</td><td>L</td><td>17/08/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322011890001</td><td>MIFTAHUDIN</td><td>L</td><td>20/11/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321211000002</td><td>IMAM SAFI'I</td><td>L</td><td>12/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101150001</td><td>AMINI</td><td>P</td><td>01/01/1915</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320708640003</td><td>SUYONO</td><td>L</td><td>07/08/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326306760002</td><td>KHUROTUL UMRONAH</td><td>P</td><td>23/06/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326609960001</td><td>DEWI SOFA KHOLILIYA</td><td>P</td><td>26/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321801000001</td><td>SYAIKU RAHARJO</td><td>L</td><td>18/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320211020001</td><td>AHMAD ARI FADLI</td><td>L</td><td>02/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101460019</td><td>SAUDAH</td><td>P</td><td>01/01/1946</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321010670002</td><td>MOCH ABD NASIR</td><td>L</td><td>10/10/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326206770002</td><td>MA'RIFAH</td><td>P</td><td>22/06/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320606980001</td><td>NUR HADI IRAWAN</td><td>L</td><td>06/06/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327108990001</td><td>MIA DEWI KARIMA</td><td>P</td><td>31/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002580004</td><td>SUHARDI</td><td>L</td><td>10/02/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324303630001</td><td>MISTIN</td><td>P</td><td>03/03/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320808850002</td><td>M SIGIT IRAWAN</td><td>L</td><td>08/08/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321107910002</td><td>IMAM MUJAHIDIN</td><td>L</td><td>11/07/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320708660002</td><td>DOBIT SODRI HP</td><td>L</td><td>07/08/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324206720001</td><td>SUWARNI</td><td>P</td><td>02/06/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322003980001</td><td>M VIRGIAWAN LISTANTO</td><td>L</td><td>20/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322005020005</td><td>IKHLASUL AMAL MABRURI</td><td>L</td><td>20/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322603690001</td><td>FATHUL QORIB</td><td>L</td><td>26/03/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327007740001</td><td>NUR HIDAYAH</td><td>P</td><td>30/07/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320508990001</td><td>MUHAMMAD MAMBAUS SHOLIHIN</td><td>L</td><td>05/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320211030001</td><td>A RIZA FAHASIBUL AMALA</td><td>L</td><td>02/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321011470002</td><td>ABD MANAF</td><td>L</td><td>10/11/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507327112550005</td><td>SRI NAMI</td><td>P</td><td>31/12/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321501800001</td><td>M SYAIFUL ANWAR</td><td>L</td><td>15/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320807820003</td><td>NANANG ALI MUSLIH</td><td>L</td><td>08/07/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607870001</td><td>IMAM BUKHORI</td><td>L</td><td>16/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322705900001</td><td>AHMAD SU'AIDI</td><td>L</td><td>27/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325104930002</td><td>DEWI MIFTAHUL ULUMIYAH</td><td>P</td><td>11/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322701440001</td><td>SUKIADI</td><td>L</td><td>27/01/1944</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325610470001</td><td>NGATMINI</td><td>P</td><td>16/10/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322003540024</td><td>KALIM</td><td>L</td><td>20/03/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324105560002</td><td>PONIATI</td><td>P</td><td>01/05/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326707840002</td><td>LAILATUL ABIDAH</td><td>P</td><td>27/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321805880001</td><td>M IBNU FAJAR HALILI</td><td>L</td><td>18/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321910900002</td><td>AHMAD ATHO'ILAH</td><td>L</td><td>19/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321408550005</td><td>SUWARNO</td><td>L</td><td>14/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321408790001</td><td>RITNO SUNARYO</td><td>L</td><td>14/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321407820002</td><td>HARI PURNOMO</td><td>L</td><td>14/07/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326712330001</td><td>BA'INAH</td><td>P</td><td>27/12/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326711730002</td><td>SITI MALIKHAH</td><td>P</td><td>27/11/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326608930001</td><td>NAILA MIFTAHUL HIDAYAH</td><td>P</td><td>26/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320901090003</td><td>MUHAMMAD IMAM ZAHRON</td><td>L</td><td>09/01/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101500034</td><td>SHOLIKHATUN</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101400039</td><td>NUR KHALIMAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322311740002</td><td>ANSHORI DIAN PRASTIO</td><td>L</td><td>23/11/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326107820003</td><td>SITI KHOIRIYAH</td><td>P</td><td>21/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321507000001</td><td>RISKI ADAM FIRMANSYAH</td><td>L</td><td>15/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321611660001</td><td>NURHAYADI</td><td>L</td><td>16/11/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324601690001</td><td>SITI KHOLIFAH</td><td>P</td><td>06/01/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322911910001</td><td>ARIF AGUNG PRASETYO</td><td>L</td><td>29/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321612930003</td><td>ADITYA BAGUS SETIAWAN</td><td>L</td><td>16/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103050002</td><td>ALDO M FIRMANSYAH</td><td>L</td><td>01/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320411690002</td><td>MOH AZLAN</td><td>L</td><td>04/11/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709780003</td><td>SUPARLIN</td><td>P</td><td>07/09/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326301980001</td><td>DEVI AINUN NUR AZLIN</td><td>P</td><td>23/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321512010001</td><td>DEVA MOHAMMAD A A</td><td>L</td><td>15/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325411100001</td><td>DEVITA DURROTUZ ZAHIRAH</td><td>P</td><td>14/11/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101320009</td><td>SIYAR</td><td>L</td><td>01/01/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101300020</td><td>SAWIYAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101600037</td><td>PARMI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101650038</td><td>NYAMIN</td><td>L</td><td>01/01/1965</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101300018</td><td>SATIR</td><td>L</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101420013</td><td>SALIYAH</td><td>P</td><td>01/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101770001</td><td>M BIRUL MUSTOFA</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322108720001</td><td>SUNTORO</td><td>L</td><td>21/08/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324702720003</td><td>PONITI</td><td>P</td><td>07/02/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327006950003</td><td>ELY FATMASARI</td><td>P</td><td>30/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325111030001</td><td>DEWI INTAN PERMATASARI</td><td>P</td><td>11/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321304770004</td><td>SHOHIBUL JAIB</td><td>L</td><td>13/04/1977</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326707760002</td><td>KHOIROTUL BARIYAH</td><td>P</td><td>27/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107980006</td><td>MAULIDA SHOHIBATUL KHOIROH</td><td>P</td><td>01/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320111070001</td><td>MUHAMMAD KHALIF DHIYAUL HAQ</td><td>L</td><td>01/11/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322005490001</td><td>SUNARTO</td><td>L</td><td>20/05/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325201530014</td><td>SHONIFAH</td><td>P</td><td>12/01/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101760003</td><td>ADI SURYO PRABOWO</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325107800002</td><td>WINARSIH</td><td>P</td><td>11/07/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322010030001</td><td>DENI SETIAWAN PRABOWO</td><td>L</td><td>20/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320306700001</td><td>TIMIN</td><td>L</td><td>03/06/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325504730002</td><td>LAILATUL BADRIYAH</td><td>P</td><td>15/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326201910002</td><td>SUSI SOFYANA</td><td>P</td><td>22/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322806010004</td><td>M FIKRIAN  ARIF F</td><td>L</td><td>28/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709560001</td><td>HARTONO</td><td>L</td><td>07/09/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326312650001</td><td>SUMARTI</td><td>P</td><td>23/12/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320510990002</td><td>MUHAMMAD YUDA ANDIONO ABRIANTO</td><td>L</td><td>05/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607040003</td><td>MUHAMMAD ADIT BARAYA</td><td>L</td><td>16/07/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321001690002</td><td>YAHMAN</td><td>L</td><td>10/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326504720002</td><td>PATOYAH</td><td>P</td><td>25/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320510890006</td><td>WAHYU SUHENDRA</td><td>L</td><td>05/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321909090003</td><td>M AKBAR ZIDAN RAMADANA</td><td>L</td><td>19/09/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321206860007</td><td>HANDOYO</td><td>L</td><td>12/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324305840001</td><td>ATIK LESTARI</td><td>P</td><td>03/05/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325609080001</td><td>JESSICA LISTYA RAMADHANI</td><td>P</td><td>16/09/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101400042</td><td>WALIDIN</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101500040</td><td>SUPARTI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320407750002</td><td>A KODIB</td><td>L</td><td>04/07/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321007830004</td><td>HERI WAHYU UTOMO</td><td>L</td><td>10/07/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321207850001</td><td>AHMAD SUTOYO</td><td>L</td><td>12/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321209620002</td><td>MAWARDI</td><td>L</td><td>12/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326101770002</td><td>SITI ROHMAH</td><td>P</td><td>21/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326302030001</td><td>ELSA LAILATUL M</td><td>P</td><td>23/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322911650001</td><td>RIONO</td><td>L</td><td>29/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325402760002</td><td>SHOLIATI</td><td>P</td><td>14/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324312990002</td><td>ARLIYAH</td><td>P</td><td>03/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320307420001</td><td>AHMAT YANI</td><td>L</td><td>03/07/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101500002</td><td>TUKINAH</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320708780002</td><td>MUHAMAD ZAINUDDIN</td><td>L</td><td>07/08/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321407620002</td><td>SUTONO</td><td>L</td><td>14/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104720002</td><td>SITI MUSTHOLIFAH</td><td>P</td><td>21/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322502890003</td><td>M ARIFUDIN</td><td>L</td><td>25/02/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322406050002</td><td>M TANZIL MULTAZAM</td><td>L</td><td>24/06/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322711370001</td><td>DUL KIYIN</td><td>L</td><td>27/11/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101400042</td><td>NAPSIYAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101690014</td><td>MULIASIH</td><td>P</td><td>01/01/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326606940003</td><td>MULIA RAHMAWATI</td><td>P</td><td>26/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101530019</td><td>MAUNAH</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325908760004</td><td>LISWATI</td><td>P</td><td>19/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327009810001</td><td>WINARNI</td><td>P</td><td>30/09/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320604850004</td><td>ANDIK WAHYUDIONO</td><td>L</td><td>06/04/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321601890001</td><td>FERI WIDIANTO</td><td>L</td><td>16/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320911920002</td><td>SULHAN NURODI</td><td>L</td><td>09/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321903530001</td><td>RIKUWAN</td><td>L</td><td>19/03/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101370017</td><td>MUNTIANI</td><td>P</td><td>01/01/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101720027</td><td>SUKAMTO</td><td>L</td><td>01/01/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112730006</td><td>TASRIPIN</td><td>L</td><td>31/12/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320301770002</td><td>ASMUNI</td><td>L</td><td>03/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324305770001</td><td>ERNI</td><td>P</td><td>03/05/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101010004</td><td>DANI</td><td>L</td><td>01/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322010700001</td><td>SUKAMTO</td><td>L</td><td>20/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327006740001</td><td>SUMIYATI</td><td>P</td><td>30/06/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211000001</td><td>IMAM SYAFI'I</td><td>L</td><td>12/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320810700003</td><td>AHMAD DARDIRI</td><td>L</td><td>08/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324708780002</td><td>KUMROTIN</td><td>P</td><td>07/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322906010002</td><td>AHMAD ARWANI RIDWAN</td><td>L</td><td>29/06/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324908100001</td><td>ASMA ALIFAH</td><td>P</td><td>09/08/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101550028</td><td>KARIM</td><td>L</td><td>01/01/1955</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101500029</td><td>LANI</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550038</td><td>TURIPAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322008830004</td><td>M ALI IRFAN</td><td>L</td><td>20/08/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101430009</td><td>WASERI</td><td>L</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101450046</td><td>PONIRAH</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101770019</td><td>PAIMAN</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326810840002</td><td>YAMTI</td><td>P</td><td>28/10/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101790017</td><td>SARDINI</td><td>L</td><td>01/01/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101300026</td><td>SITI AMINAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321710610001</td><td>SUWANDI</td><td>L</td><td>17/10/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326509700002</td><td>NUR FADILAH</td><td>P</td><td>25/09/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325112900001</td><td>DEWI ANISA FADILAH</td><td>P</td><td>11/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324910950004</td><td>EMILIA SYAMROTUL FIKRIYAH</td><td>P</td><td>09/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320505550003</td><td>ATIM</td><td>L</td><td>05/05/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324509590003</td><td>MISENI</td><td>P</td><td>05/09/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324404760002</td><td>PURNAWATI</td><td>P</td><td>04/04/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324901800001</td><td>RINI ATIM</td><td>P</td><td>09/01/1980</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101820015</td><td>PITRIYAH</td><td>P</td><td>01/01/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321507870002</td><td>SAIFUL ANWAR</td><td>L</td><td>15/07/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321703010004</td><td>AISAHRUL ARIFIN</td><td>L</td><td>17/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324208990001</td><td>FRISKA KURNIA PUTRI</td><td>P</td><td>02/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321408700003</td><td>SUTRISNO</td><td>L</td><td>14/08/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326004730003</td><td>SITI MASAMAH</td><td>P</td><td>20/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326709930001</td><td>TIKA DIAH T</td><td>P</td><td>27/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326502010004</td><td>RIA ANGGRAINI N</td><td>P</td><td>25/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324107650005</td><td>DEWI SRI MULIYAH</td><td>P</td><td>01/07/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320207820002</td><td>M SA'RONI</td><td>L</td><td>02/07/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322806840003</td><td>SULIONO</td><td>L</td><td>28/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326205870001</td><td>IDA MARLINA</td><td>P</td><td>22/05/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326303970001</td><td>VIVI MELATI LUVITA NINGRUM</td><td>P</td><td>23/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321510720002</td><td>HASAN HIDAYAT</td><td>L</td><td>15/10/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326512740005</td><td>SRI MUANINGSIH</td><td>P</td><td>25/12/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324507960001</td><td>LELY ZULIANA</td><td>P</td><td>05/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320502630002</td><td>SAMSUL</td><td>L</td><td>05/02/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324201660001</td><td>TRI SAMSUL</td><td>P</td><td>02/01/1966</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320812880002</td><td>ALEX ABDIANSYAH</td><td>L</td><td>08/12/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321609090001</td><td>ALVIN ABDIANSYAH</td><td>L</td><td>16/09/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320707760001</td><td>SUKARJI</td><td>L</td><td>07/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324104830002</td><td>FIFI ZAUHAROH</td><td>P</td><td>01/04/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327004070001</td><td>TAZKIA TIKA AMALIA</td><td>P</td><td>30/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321510870004</td><td>HERI PURWANTO</td><td>L</td><td>15/10/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111860003</td><td>SUMIATI</td><td>P</td><td>11/11/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321812090001</td><td>MUHAMMAD DIKI MISWANTO</td><td>L</td><td>18/12/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201780001</td><td>SRI MADEP</td><td>L</td><td>12/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324204770005</td><td>SAYYIDAH UMI SURURIN</td><td>P</td><td>02/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326804980003</td><td>ANNA WAHIDATUL WARDAH</td><td>P</td><td>28/04/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323012060002</td><td>AHMAD YAZID AL FARISI</td><td>L</td><td>30/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320205680003</td><td>SUPRIADI</td><td>L</td><td>02/05/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324904730001</td><td>BANDRIYAH</td><td>P</td><td>09/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324712950002</td><td>DESI WULANDARI</td><td>P</td><td>07/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326706000002</td><td>NINING HOLIPAH</td><td>P</td><td>27/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321805820001</td><td>DEDIK HERMANTO</td><td>L</td><td>18/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324507820004</td><td>CICI DAMIATI</td><td>P</td><td>05/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326901090003</td><td>HELGA PRATAMA FEBRIYANTI</td><td>P</td><td>29/01/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322011770002</td><td>HARIYONO</td><td>L</td><td>20/11/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325608780003</td><td>SUTIANI</td><td>P</td><td>16/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321607610002</td><td>NYAMIN</td><td>L</td><td>16/07/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324701720003</td><td>SOLLATUL ROHMI</td><td>P</td><td>07/01/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320610890002</td><td>JOKO EKO HADI PRAYITNO</td><td>L</td><td>06/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324403920001</td><td>ERNA DWI ARISTA</td><td>P</td><td>04/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320312930002</td><td>DAYAT TRI WAHYUDI</td><td>L</td><td>03/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323001390001</td><td>SAHIF</td><td>L</td><td>30/01/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320304710004</td><td>SAIKUL</td><td>L</td><td>03/04/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324808700002</td><td>MARKUNATIN</td><td>P</td><td>08/08/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324207950002</td><td>YULIA CITRA DEWI</td><td>P</td><td>02/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324805040001</td><td>AURA ANGELINA MELANI</td><td>P</td><td>08/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321208880005</td><td>FIKI DARMANTO</td><td>L</td><td>12/08/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH PETERNAKAN</td></tr>
 <tr><td>3507325909890003</td><td>SEPTI KURNIAWATI</td><td>P</td><td>19/09/1989</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325107090001</td><td>LENNA DENIS WEOLENSIA</td><td>P</td><td>11/07/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101760034</td><td>AJI SUTRISNO</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325308890004</td><td>DEVI VIDIYAWATI</td><td>P</td><td>13/08/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321705810001</td><td>MICHAEL WALES</td><td>L</td><td>17/05/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101910005</td><td>KHUSNUL KHOTIMAH</td><td>P</td><td>01/01/1991</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321405090001</td><td>MICTELL ANDREAN WALES</td><td>L</td><td>14/05/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325810690001</td><td>SUTINAH</td><td>P</td><td>18/10/1969</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323010890001</td><td>IMAM WAHYUDI</td><td>L</td><td>30/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326307930002</td><td>ALFIAH TRI WULANDARI</td><td>P</td><td>23/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320206520001</td><td>MATARI</td><td>L</td><td>02/06/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205640002</td><td>MISIATIN</td><td>P</td><td>12/05/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322302810001</td><td>SIONO</td><td>L</td><td>23/02/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320307690002</td><td>SUWARI</td><td>L</td><td>03/07/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325209720002</td><td>RUSMINI</td><td>P</td><td>12/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324705990002</td><td>IVARAIN DEBI FAHIRA</td><td>P</td><td>07/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322805520001</td><td>SUKODAM</td><td>L</td><td>28/05/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324101550029</td><td>MUTMAINAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324607830001</td><td>TANTI HANDAYANI</td><td>P</td><td>06/07/1983</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322306850001</td><td>JUNI HANDROUF</td><td>L</td><td>23/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322905010002</td><td>RIKO ANDREANSYAH</td><td>L</td><td>29/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325806030003</td><td>REZA ANGEL IMELIA</td><td>P</td><td>18/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324909750002</td><td>SULIS SETYOWATI</td><td>P</td><td>09/09/1975</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320510980002</td><td>CALVIN HENDRY OCTORA</td><td>L</td><td>05/10/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325507480001</td><td>PONIKEM</td><td>P</td><td>15/07/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101610015</td><td>KUMARI</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326809750002</td><td>ISWATUL FITRIYAH</td><td>P</td><td>28/09/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326609950002</td><td>SAMROTUL FIKRIYAH</td><td>P</td><td>26/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321210060001</td><td>M NABILAH RAMADAN</td><td>L</td><td>12/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101450024</td><td>YASIADI</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101580016</td><td>LIASIH</td><td>P</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326410750001</td><td>ISTIYAH</td><td>P</td><td>24/10/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101800016</td><td>AGUS SUSANTO</td><td>L</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320402580002</td><td>MULIONO</td><td>L</td><td>04/02/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320105800003</td><td>M SANTOSO</td><td>L</td><td>01/05/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101900014</td><td>SITI NUR FARIDA</td><td>P</td><td>01/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101450025</td><td>DARSIMIN</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101550030</td><td>NGATIRAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324201890003</td><td>WIWIT WIDAYATI</td><td>P</td><td>02/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326307930004</td><td>ALFIYAH TRI WULANDARI</td><td>P</td><td>23/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101610017</td><td>SUDARSONO</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101670007</td><td>SUPARMI</td><td>P</td><td>01/01/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327007860002</td><td>YESI MARIA LESTARI</td><td>P</td><td>30/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>Diploma I/II</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322305930002</td><td>ADI IRAWAN</td><td>L</td><td>23/05/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321507620003</td><td>KOZIN</td><td>L</td><td>15/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325508680003</td><td>TRI INDAYATI</td><td>P</td><td>15/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321506870007</td><td>ANDIK SANTOSO</td><td>L</td><td>15/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325608020002</td><td>CAMELIA DWI AGUSTIN</td><td>P</td><td>16/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320206300001</td><td>DARUS</td><td>L</td><td>02/06/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324709450002</td><td>MAINAH</td><td>P</td><td>07/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323001700001</td><td>M HASYIM</td><td>L</td><td>30/01/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101430023</td><td>SAMIRAH</td><td>P</td><td>01/01/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324907720001</td><td>ATIK</td><td>P</td><td>09/07/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101630032</td><td>WINARNI</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101650048</td><td>SUPRATEMI</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324304900003</td><td>LIA INDAHWATI</td><td>P</td><td>03/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321308620002</td><td>MAHASIN</td><td>L</td><td>13/08/1962</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324402690001</td><td>SRI ENDAH MUANINGSIH</td><td>P</td><td>04/02/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321808890002</td><td>TEGUH WAHIDIAWAN</td><td>L</td><td>18/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>Strata II</td><td>KEPOLISIAN RI</td></tr>
 <tr><td>3507326706960001</td><td>ZETY AZIZATUL KHOIROH</td><td>P</td><td>27/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322707570003</td><td>MAHFUD</td><td>L</td><td>27/07/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325504620002</td><td>WATIIN</td><td>P</td><td>15/04/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321806890002</td><td>MUKLAS ARDIANTO</td><td>L</td><td>18/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320508750007</td><td>KUWATO</td><td>L</td><td>05/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326001820003</td><td>ENDANG TATIK</td><td>P</td><td>20/01/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603100002</td><td>KESYA MAULIDIYAWANTI</td><td>P</td><td>06/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101500038</td><td>TASMILAH</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320810680002</td><td>HARI SISWANTO</td><td>L</td><td>08/10/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325106730004</td><td>ISTIANAH</td><td>P</td><td>11/06/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320905980001</td><td>MOH ABD MAJID</td><td>L</td><td>09/05/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101340022</td><td>SOENJOTO OENTOENG</td><td>L</td><td>01/01/1934</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507324101320021</td><td>SANIPAH</td><td>P</td><td>01/01/1932</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101750018</td><td>ABD ROKIM</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326105690001</td><td>TUMIASIH</td><td>P</td><td>21/05/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323107890003</td><td>RUDI HERMANTO</td><td>L</td><td>31/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321709990004</td><td>FANGGA DWI ALDI</td><td>L</td><td>17/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325308450001</td><td>SUPIYAH</td><td>P</td><td>13/08/1945</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PEDAGANG</td></tr>
 <tr><td>3507321412720001</td><td>SUNARI</td><td>L</td><td>14/12/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112770009</td><td>SUKARJI</td><td>L</td><td>31/12/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322505810002</td><td>HARDIONO</td><td>L</td><td>25/05/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101300020</td><td>MATKARI</td><td>L</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101450072</td><td>UMI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320904730002</td><td>WAHONO</td><td>L</td><td>09/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322110650003</td><td>SUNARTO</td><td>L</td><td>21/10/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324706690003</td><td>JAMIATI</td><td>P</td><td>07/06/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321207920001</td><td>RICKY ANDRIYAN</td><td>L</td><td>12/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322708960001</td><td>ANDI DWI SULISTYA</td><td>L</td><td>27/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101300021</td><td>RASTAM</td><td>L</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101520011</td><td>SUMARMI</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326712840001</td><td>NURHAYATI</td><td>P</td><td>27/12/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322801780002</td><td>SUPRIYANTO</td><td>L</td><td>28/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326411080004</td><td>LAILATUL MUJAYANAH</td><td>P</td><td>24/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325601940004</td><td>ASROTUL MUFIFAH</td><td>P</td><td>16/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450006</td><td>SUKARNO</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101580026</td><td>RAMINI</td><td>P</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101780004</td><td>SUTIANI</td><td>P</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322508830002</td><td>SUWIKNYO</td><td>L</td><td>25/08/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324806860006</td><td>SRI MUAWANAH</td><td>P</td><td>08/06/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321005880004</td><td>M SHOLEH</td><td>L</td><td>10/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321204920001</td><td>KHUSNAINI</td><td>L</td><td>12/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101400039</td><td>SUKADI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326504440002</td><td>RUMINI</td><td>P</td><td>25/04/1944</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320803690001</td><td>HADI RUSMAN KHOLIS</td><td>L</td><td>08/03/1969</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324305750001</td><td>SULISWATI</td><td>P</td><td>03/05/1975</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321712960001</td><td>DEDI FIRMANSYAH</td><td>L</td><td>17/12/1996</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320810660001</td><td>SUWANDI</td><td>L</td><td>08/10/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325503740003</td><td>ISTIQOMAH</td><td>P</td><td>15/03/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320201930001</td><td>A RIDLOTUL ANWAR</td><td>L</td><td>02/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322107020002</td><td>M RIZKI ALVIAN MAULANA</td><td>L</td><td>21/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325001050001</td><td>CAHYA ATFIATUL HUSNA</td><td>P</td><td>10/01/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322006600003</td><td>FATCHUR ROHMAN</td><td>L</td><td>20/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326601650001</td><td>TASEMI</td><td>P</td><td>26/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325507880002</td><td>LAILATUL FARIHA</td><td>P</td><td>15/07/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325107910001</td><td>DEWI WAHIDIYAWATI</td><td>P</td><td>11/07/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101400040</td><td>JUMARI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101540015</td><td>MAREM</td><td>P</td><td>01/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320303820004</td><td>SUWANTO</td><td>L</td><td>03/03/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322001860001</td><td>IMAM MUKID</td><td>L</td><td>20/01/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326201960001</td><td>NIKEN ULFATUL KHOIROH</td><td>P</td><td>22/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101730016</td><td>SUPARDI</td><td>L</td><td>01/01/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324510780002</td><td>KHULYAH</td><td>P</td><td>05/10/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321402950002</td><td>MOCHAMAD FATHONI</td><td>L</td><td>14/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324601040002</td><td>DWI EKA PRASETYA</td><td>P</td><td>06/01/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101560017</td><td>SARMIN</td><td>L</td><td>01/01/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326010580002</td><td>SUGINI</td><td>P</td><td>20/10/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320408810002</td><td>NUR COLIQ</td><td>L</td><td>04/08/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101320017</td><td>WAIJAH</td><td>P</td><td>01/01/1932</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320406820004</td><td>YUDI SETIAWAN</td><td>L</td><td>04/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326904840005</td><td>KHUSRINI</td><td>P</td><td>29/04/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324210030002</td><td>NOVI OCTAVIA WULANDARI</td><td>P</td><td>02/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321502420001</td><td>MURMO</td><td>L</td><td>15/02/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324110480001</td><td>JANAH</td><td>P</td><td>01/10/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321102870002</td><td>MUHAMMAD IKHSAN</td><td>L</td><td>11/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320201400004</td><td>SRIANI</td><td>L</td><td>02/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101530022</td><td>SAMIAN</td><td>L</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101550047</td><td>MARKUNAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326104330001</td><td>MARKATIN ATIM</td><td>P</td><td>21/04/1933</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321105810003</td><td>SUDARNOWO</td><td>L</td><td>11/05/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326912850003</td><td>SRI UMAMI</td><td>P</td><td>29/12/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322006070001</td><td>BAGUS SAJIWO</td><td>L</td><td>20/06/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321909690002</td><td>BUDI SETIAWAN</td><td>L</td><td>19/09/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325806650002</td><td>SUMARTI</td><td>P</td><td>18/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327004990001</td><td>IKA NUR'AINI</td><td>P</td><td>30/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322803820004</td><td>INDRA WANTO</td><td>L</td><td>28/03/1982</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603030001</td><td>SITI ALIMATUS NONIK SAKDIYAH</td><td>P</td><td>06/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101520022</td><td>SITI FATIMAH</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320611940001</td><td>MOCHAMAD CHOLIK</td><td>L</td><td>06/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324502990003</td><td>SANDRA EKA FEBRIANA</td><td>P</td><td>05/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321602030003</td><td>ATIMA PETRAN FEBRIAN</td><td>L</td><td>16/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320106820001</td><td>MUHAMMAD YASIN</td><td>L</td><td>01/06/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326910850002</td><td>SITI MARIATUL ROHMAH</td><td>P</td><td>29/10/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326903030003</td><td>ALFI KHOIROTUL UMMAH</td><td>P</td><td>29/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322009900002</td><td>IWAN WAHYUDI</td><td>L</td><td>20/09/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325010850003</td><td>IKA WAHYUNI</td><td>P</td><td>10/10/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324904090002</td><td>INTAN CINTA PERMATASARI</td><td>P</td><td>09/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320708540002</td><td>SURAKIM</td><td>L</td><td>07/08/1954</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325007830001</td><td>ANIK WAHYUNI</td><td>P</td><td>10/07/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321803760002</td><td>M BAHRUL HADI</td><td>L</td><td>18/03/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324209820003</td><td>ANIK ISWALADAL KARIMAH</td><td>P</td><td>02/09/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321309060003</td><td>M FARIS ROFIQIE</td><td>L</td><td>13/09/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321405690004</td><td>TRIMO</td><td>L</td><td>14/05/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326707720002</td><td>TUTIK INDAYATI</td><td>P</td><td>27/07/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321805920002</td><td>YONGKY FERDIANTO SUYONO</td><td>L</td><td>18/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH PETERNAKAN</td></tr>
 <tr><td>3507327103050001</td><td>SYAFRINA NURIL IZZA</td><td>P</td><td>31/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326107490001</td><td>MUSLIMAH</td><td>P</td><td>21/07/1949</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321004830003</td><td>FATCHUL QORIB</td><td>L</td><td>10/04/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321605860001</td><td>FATCHUR ROHMAN</td><td>L</td><td>16/05/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326004900001</td><td>MAR'ATUS SHOLIKHAH</td><td>P</td><td>20/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322506420002</td><td>JAMIK</td><td>L</td><td>25/06/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325004480002</td><td>SRIPAH</td><td>P</td><td>10/04/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324802000003</td><td>PUTRI BADIATUL MUSTOLIKAH</td><td>P</td><td>08/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320807690001</td><td>LAZIM</td><td>L</td><td>08/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326911680001</td><td>ANITA WIDYAWATI</td><td>P</td><td>29/11/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325802940001</td><td>AIDA DEVINA</td><td>P</td><td>18/02/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507327006970001</td><td>AISA CALISTA</td><td>P</td><td>30/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101400036</td><td>URIP</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101450042</td><td>NASRINI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101760019</td><td>ROBIHIM</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321701790001</td><td>MUSYAFAK</td><td>L</td><td>17/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321709670001</td><td>SUWADI</td><td>L</td><td>17/09/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010790002</td><td>NUR AFIYATUS SAIDAH</td><td>P</td><td>10/10/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326010010001</td><td>SINTA FAJRIYANTI</td><td>P</td><td>20/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325104100001</td><td>BALQYS AQYLAH</td><td>P</td><td>11/04/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321510750001</td><td>CAHYO SUNARIYO ADJI</td><td>L</td><td>15/10/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325908800001</td><td>NURHIDAYAH</td><td>P</td><td>19/08/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326108000001</td><td>KHOIROTUN NADIROH</td><td>P</td><td>21/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320103640001</td><td>ISMAN</td><td>L</td><td>01/03/1964</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321606940004</td><td>MUHAMAT AHHIS MUSTOFA</td><td>L</td><td>16/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450027</td><td>PARDI</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101590027</td><td>TIARAH</td><td>P</td><td>01/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321001750004</td><td>KHUDORI</td><td>L</td><td>10/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326905810001</td><td>NING JAWAROH</td><td>P</td><td>29/05/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325809050003</td><td>ZAHRA NAZHIRA</td><td>P</td><td>18/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101230007</td><td>YAHMAT</td><td>L</td><td>01/01/1923</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101360012</td><td>SATIAH</td><td>P</td><td>01/01/1936</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101630033</td><td>FUDMARYATI</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101740007</td><td>BAMBANG EFENDI</td><td>L</td><td>01/01/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325211920002</td><td>PIPIN DAMAYANTI</td><td>P</td><td>12/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450028</td><td>RAMINO</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101550033</td><td>SIANI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101720024</td><td>MURIADI</td><td>L</td><td>01/01/1972</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324101810032</td><td>INAWATI</td><td>P</td><td>01/01/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322306920002</td><td>ZAENAL FANANI</td><td>L</td><td>23/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324909990003</td><td>LEISA PUSPITA DEWI</td><td>P</td><td>09/09/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320204720001</td><td>MUJIONO</td><td>L</td><td>02/04/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324908770002</td><td>SUPRANTI</td><td>P</td><td>09/08/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326012980002</td><td>MILA ANGGRAINI</td><td>P</td><td>20/12/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325505050003</td><td>SYAFIRA DWI SAGITA</td><td>P</td><td>15/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101600031</td><td>JASURI</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324101670025</td><td>MESIANI</td><td>P</td><td>01/01/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321510850002</td><td>SUHARTANTO</td><td>L</td><td>15/10/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320512990003</td><td>MUHAMMAD FITRI HAIKAL</td><td>L</td><td>05/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320909680003</td><td>NASUKI</td><td>L</td><td>09/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101680019</td><td>SUTARMI</td><td>P</td><td>01/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322107930002</td><td>DIDIK PRAYUGO</td><td>L</td><td>21/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322006960003</td><td>IRFAN DWI CAHYANTO</td><td>L</td><td>20/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450029</td><td>TUKIMUN</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101470014</td><td>JUMINAH</td><td>P</td><td>01/01/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101780011</td><td>MARIMAN</td><td>L</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324907800001</td><td>NGATMINI</td><td>P</td><td>09/07/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322407760007</td><td>SIDIK FAWI</td><td>L</td><td>24/07/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321504030001</td><td>IDRIS REHAN VAUJI</td><td>L</td><td>15/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101420029</td><td>LAIMAN</td><td>L</td><td>01/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101550034</td><td>TUKAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322301780001</td><td>MASHURI</td><td>L</td><td>23/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326909830002</td><td>FRENTI SEPTIYA NINA</td><td>P</td><td>29/09/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324803070001</td><td>KHALILA AZIMATUM MASHURI</td><td>P</td><td>08/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101770016</td><td>KASDONO</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326103770001</td><td>NGATINI</td><td>P</td><td>21/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325310020001</td><td>ALFI QOIDATUL ROKHIMAH</td><td>P</td><td>13/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322306590001</td><td>BUDIONO</td><td>L</td><td>23/06/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326609620001</td><td>NGATRI</td><td>P</td><td>26/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325510900006</td><td>ANA MAULIDA Y</td><td>P</td><td>15/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320609470001</td><td>SLAMET MUSTOFA</td><td>L</td><td>06/09/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326009610002</td><td>SITI AMINAH</td><td>P</td><td>20/09/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320611790003</td><td>MUHAMMAD ABDUL MUNIF</td><td>L</td><td>06/11/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507323009820002</td><td>IMAM BAHRUDIN</td><td>L</td><td>30/09/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320209920001</td><td>M MU'ALIFI MUHTAR</td><td>L</td><td>02/09/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324210020002</td><td>ANISATUL HABIBAH</td><td>P</td><td>02/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101450030</td><td>PONIRIN</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101600041</td><td>TUNI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101770017</td><td>ASEMAT</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101800017</td><td>LUTFIANTO</td><td>L</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326007870002</td><td>ENI WIDAYATI</td><td>P</td><td>20/07/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320102790002</td><td>SUTIKNO</td><td>L</td><td>01/02/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101250013</td><td>SARMI</td><td>P</td><td>01/01/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101250010</td><td>PANURI</td><td>L</td><td>01/01/1925</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101530018</td><td>MESINEM</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324808910003</td><td>ATIM FIDIA NINGSIH</td><td>P</td><td>08/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322108660001</td><td>SUMALI</td><td>L</td><td>21/08/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325212730006</td><td>RUSIATI</td><td>P</td><td>12/12/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320802890001</td><td>M NANANG SUTRISNO</td><td>L</td><td>08/02/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325208980001</td><td>N ELISA HIDAYATI</td><td>P</td><td>12/08/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321508020001</td><td>M KHOIRUL ZAFNI</td><td>L</td><td>15/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320906450001</td><td>MAT SADAK</td><td>L</td><td>09/06/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325203500007</td><td>WATINI</td><td>P</td><td>12/03/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326011720002</td><td>SUMIANI</td><td>P</td><td>20/11/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507131107670006</td><td>KAMIT</td><td>L</td><td>11/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322706940001</td><td>ADITYA RIZKI BAROKAH</td><td>L</td><td>27/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320207000001</td><td>M DANDI HERMANSYAH</td><td>L</td><td>02/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101350028</td><td>SATEMUN</td><td>L</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101650049</td><td>KASTINI</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321005730001</td><td>DIDIT KARIADI</td><td>L</td><td>10/05/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321011640001</td><td>SUDARNO</td><td>L</td><td>10/11/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324110900001</td><td>WINDA KARISMA DIAN SAPUTRI</td><td>P</td><td>01/10/1990</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325303010001</td><td>M BUSTANUL ILMI</td><td>P</td><td>13/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322507900002</td><td>YUDA WANDALI</td><td>L</td><td>25/07/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320204540002</td><td>MAT MUKRI</td><td>L</td><td>02/04/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326710600001</td><td>WARTINI</td><td>P</td><td>27/10/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320407850002</td><td>HENDRI SUGIARTO</td><td>L</td><td>04/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321205870003</td><td>SAIFUL ANWAR</td><td>L</td><td>12/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325409900001</td><td>MUJI LIASTRI</td><td>P</td><td>14/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320310490001</td><td>SARDI</td><td>L</td><td>03/10/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325004570001</td><td>SAMIATUN</td><td>P</td><td>10/04/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320503790001</td><td>MUSTOFA</td><td>L</td><td>05/03/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326605830002</td><td>SUNANTRI</td><td>P</td><td>26/05/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321111910002</td><td>HERU BUDI SANTOSO</td><td>L</td><td>11/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101570020</td><td>SULIONO</td><td>L</td><td>01/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101650050</td><td>JUMIRAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322004820004</td><td>EKO WAHYUDI</td><td>L</td><td>20/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326108920001</td><td>NANIK HAYATI</td><td>P</td><td>21/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325911960002</td><td>ANIFA HARIANI</td><td>P</td><td>19/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326003010003</td><td>NITA MAULIDA</td><td>P</td><td>20/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322402050001</td><td>MUHAMMAD ZAKI ARRIZAL</td><td>L</td><td>24/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321406740004</td><td>CHOIRUL BADARUDIN</td><td>L</td><td>14/06/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325702820001</td><td>TUTUT WIDIYANINGSIH</td><td>P</td><td>17/02/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325612020001</td><td>LAILA NUGRAHAINI FITRI</td><td>P</td><td>16/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326608810003</td><td>CRIS ANJARSARI</td><td>P</td><td>26/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322401400002</td><td>ALI AKBAR</td><td>L</td><td>24/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326503600002</td><td>SRINAMI</td><td>P</td><td>25/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324101300024</td><td>RIAMI</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101620028</td><td>SAMELAN</td><td>L</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326008730003</td><td>SRI HANDAYANI</td><td>P</td><td>20/08/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326602010001</td><td>DWI ELISA UMROTUL M</td><td>P</td><td>26/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320208730001</td><td>JANURI</td><td>L</td><td>02/08/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507325303800002</td><td>BAIQUNIAH</td><td>P</td><td>13/03/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507326004030001</td><td>MUYASYAROH</td><td>P</td><td>20/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321901090002</td><td>SAMSUL ARIFIN</td><td>L</td><td>19/01/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321101540001</td><td>TUPAN</td><td>L</td><td>11/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326908560001</td><td>TEMAH</td><td>P</td><td>29/08/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325503750002</td><td>SITI LAILATUL MUFIDAH</td><td>P</td><td>15/03/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320308880002</td><td>AGUS HARIANTO</td><td>L</td><td>03/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>TENTARA NASIONAL INDONESIA</td></tr>
 <tr><td>3507326903960002</td><td>NOVEA PUTRI BRILIANT</td><td>P</td><td>29/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321603000004</td><td>ABIMAYU AGEL PRATAMA PUTRA</td><td>L</td><td>16/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101430020</td><td>SIRAN</td><td>L</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324106450005</td><td>PARINAH</td><td>P</td><td>01/06/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321104750006</td><td>SUKOYO</td><td>L</td><td>11/04/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101780020</td><td>ROJI</td><td>L</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325109820004</td><td>ANIK SETYOWATI</td><td>P</td><td>11/09/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320502330001</td><td>SADERI</td><td>L</td><td>05/02/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324403740003</td><td>SAPIKYAH</td><td>P</td><td>04/03/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321606650003</td><td>SUROSO</td><td>L</td><td>16/06/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321609090002</td><td>ALVIN CONDRO KIRONO</td><td>L</td><td>16/09/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101580029</td><td>TASMUI</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324801630001</td><td>WINARTI</td><td>P</td><td>08/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323004830002</td><td>MUKROMIN</td><td>L</td><td>30/04/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320702850001</td><td>TEGUH DWI SANTOSO</td><td>L</td><td>07/02/1985</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322204840001</td><td>BUDI SANTOSO</td><td>L</td><td>22/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320708590003</td><td>SAMURI</td><td>L</td><td>07/08/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326009630003</td><td>SUMI</td><td>P</td><td>20/09/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326309820001</td><td>ISTIANAH</td><td>P</td><td>23/09/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326404880001</td><td>FINA ANGGRAINI</td><td>P</td><td>24/04/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507323001680002</td><td>SUGENG RIADI</td><td>L</td><td>30/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326008040002</td><td>VANESA SABRINA AGUSTIN</td><td>P</td><td>20/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320705750003</td><td>SUPRIYANTO</td><td>L</td><td>07/05/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324310900003</td><td>DEWI MAULUDYA</td><td>P</td><td>03/10/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321606080004</td><td>A HAIBATILLAH WIJOYO KUSUMO</td><td>L</td><td>16/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321509800003</td><td>HARIANTO</td><td>L</td><td>15/09/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324508850003</td><td>TATIK SUGIANINGSIH</td><td>P</td><td>05/08/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507325502910001</td><td>WIDYAWATI</td><td>P</td><td>15/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324103760001</td><td>NURHAMIDAH</td><td>P</td><td>01/03/1976</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322201000003</td><td>AHMAD NUDIATUL FAIZIN</td><td>L</td><td>22/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322912760001</td><td>SUDIONO</td><td>L</td><td>29/12/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326907840001</td><td>DIANA AUDINA</td><td>P</td><td>29/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322809030003</td><td>RAFLY SEPTIAN DINATA</td><td>L</td><td>28/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321201770001</td><td>HARI PURNOMO</td><td>L</td><td>12/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324106780001</td><td>SITI MARIYAM</td><td>P</td><td>01/06/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327010000001</td><td>MITHA PURNAMA</td><td>P</td><td>30/10/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321303100001</td><td>MUHAMMAD BAYU PURNAMA PUTRA</td><td>L</td><td>13/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324305340001</td><td>NGASIYAH</td><td>P</td><td>03/05/1934</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507326905050002</td><td>SELOMITA DILA SAFIRA</td><td>P</td><td>29/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321206800003</td><td>NUR SAHIDIN</td><td>L</td><td>12/06/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324109870002</td><td>SURYANTI</td><td>P</td><td>01/09/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320706060001</td><td>ADRIAN PUTRA PRAMUDITA</td><td>L</td><td>07/06/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321504780004</td><td>TURIONO</td><td>L</td><td>15/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324704800004</td><td>MAFATIHUL MU'AWANAH</td><td>P</td><td>07/04/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325711060001</td><td>TATIA PUTRI FATIHA</td><td>P</td><td>17/11/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320203490001</td><td>NGATENO</td><td>L</td><td>02/03/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324410620003</td><td>TURIANI</td><td>P</td><td>04/10/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320606830007</td><td>TUTUT AFAN AFFANDI</td><td>L</td><td>06/06/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320311290001</td><td>MARJI</td><td>L</td><td>03/11/1929</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324712320001</td><td>KASIATUN</td><td>P</td><td>07/12/1932</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507120903820004</td><td>FENDI SRIANTO</td><td>L</td><td>09/03/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507820003</td><td>KIBTIYATUS SAIDAH</td><td>P</td><td>15/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326206090001</td><td>SESILIA CHARISSIMA PUTRI EFFENDI</td><td>P</td><td>22/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321609730001</td><td>SUTIONO</td><td>L</td><td>16/09/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325803830004</td><td>KHOIROTUL FITRI RAHAYU</td><td>P</td><td>18/03/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326505080001</td><td>MAIYA SABILA SYIFA MABRUROH</td><td>P</td><td>25/05/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321405730002</td><td>NURHADI SUJIONO</td><td>L</td><td>14/05/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326408850003</td><td>RIRIN MASLIKAH</td><td>P</td><td>24/08/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>TUKANG JAHIT</td></tr>
 <tr><td>3507326005070001</td><td>FANIA RAHMA NUR AZIZAH</td><td>P</td><td>20/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321409680002</td><td>BUARI</td><td>L</td><td>14/09/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324405710002</td><td>SUHARTINI</td><td>P</td><td>04/05/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320207930001</td><td>MOCH ANDRE SAMORA P</td><td>L</td><td>02/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322909970005</td><td>IQWAN AFANDI</td><td>L</td><td>29/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322909970004</td><td>AHMAD FARID</td><td>L</td><td>29/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320905370001</td><td>SAID</td><td>L</td><td>09/05/1937</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324502600001</td><td>JUWATI</td><td>P</td><td>05/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325205700002</td><td>JUMROTUL AMANAH</td><td>P</td><td>12/05/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321606750002</td><td>SAI'IN</td><td>L</td><td>16/06/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321303810001</td><td>DARNO</td><td>L</td><td>13/03/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324307860001</td><td>GIANAH</td><td>P</td><td>03/07/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326803050001</td><td>DINDA NURMALIA SARI</td><td>P</td><td>28/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325408100001</td><td>DITA DWI RAMADHANI</td><td>P</td><td>14/08/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321809710002</td><td>HARIANTO</td><td>L</td><td>18/09/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325407850005</td><td>SURIATI</td><td>P</td><td>14/07/1985</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322505070001</td><td>PUTRA BAGUS PRASETYO</td><td>L</td><td>25/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321011790001</td><td>KOKOK HARIANTO</td><td>L</td><td>10/11/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324101820003</td><td>ASTUTIK</td><td>P</td><td>01/01/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326705080002</td><td>RANITA MEI LIANA W P</td><td>P</td><td>27/05/2008</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101330011</td><td>TUKIMAN</td><td>L</td><td>01/01/1933</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101480033</td><td>SUPATEMI</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321708740003</td><td>MOH IHSAN UBAIDILAH</td><td>L</td><td>17/08/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326304800002</td><td>NAILA IFADAH</td><td>P</td><td>23/04/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325306080003</td><td>EGI ANANDA LISTIA PUTRI</td><td>P</td><td>13/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325507690005</td><td>SITI ROHMAH</td><td>P</td><td>15/07/1969</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321407940001</td><td>M AGHIS MUSTOFA</td><td>L</td><td>14/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320611760004</td><td>PARYANTO</td><td>L</td><td>06/11/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324202790005</td><td>SITI YULIANA</td><td>P</td><td>02/02/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321404040002</td><td>AMINUL MUCHLISIN</td><td>L</td><td>14/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321004720005</td><td>MESNAN</td><td>L</td><td>10/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325707780002</td><td>YAYUK KHOIRUL ULUM</td><td>P</td><td>17/07/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325512990004</td><td>RIZA ASHLIM NURONIYA</td><td>P</td><td>15/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326208080001</td><td>ZALFA AURELLIZA SYAHARA</td><td>P</td><td>22/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325903680002</td><td>NGATINI</td><td>P</td><td>19/03/1968</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507324805720001</td><td>PURWATI</td><td>P</td><td>08/05/1972</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507324510580001</td><td>MEGO SRI SURYATI</td><td>P</td><td>05/10/1958</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321809980001</td><td>AHMAD EDO MUJAHID</td><td>L</td><td>18/09/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321508830003</td><td>JOYO</td><td>L</td><td>15/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326908890001</td><td>UMI NUR LAILA</td><td>P</td><td>29/08/1989</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321601790001</td><td>RUDI HARTONO</td><td>L</td><td>16/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325709900003</td><td>YENI KUSRINA</td><td>P</td><td>17/09/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205100001</td><td>AISYA LATHIFATUL MIRZA</td><td>P</td><td>12/05/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101580022</td><td>SWIG DIGDOYO</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101490011</td><td>DAIYAH</td><td>P</td><td>01/01/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325006870002</td><td>IKA YUNI FITRIYAH</td><td>P</td><td>10/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320710470002</td><td>SRUKI</td><td>L</td><td>07/10/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324407500002</td><td>SUMIATI</td><td>P</td><td>04/07/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321508680006</td><td>ALI BASORI</td><td>L</td><td>15/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324612690003</td><td>SRI AMANI</td><td>P</td><td>06/12/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101630021</td><td>NUR ALI</td><td>L</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507324103640004</td><td>SAYEMI ASIH</td><td>P</td><td>01/03/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325802880001</td><td>RATNA LISTANTI</td><td>P</td><td>18/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN HONORER</td></tr>
 <tr><td>3507327009030001</td><td>ROFIKA DWI LESTARI</td><td>P</td><td>30/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101450038</td><td>RIYAMI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320108820002</td><td>SUGIK  HARTANTO</td><td>L</td><td>01/08/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101420028</td><td>SHOLIKIN</td><td>L</td><td>01/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326109570001</td><td>MULIANAH</td><td>P</td><td>21/09/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321005720004</td><td>KHOIRIL ROCHMAD</td><td>L</td><td>10/05/1972</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012770002</td><td>LILIK SETIYONINGSIH</td><td>P</td><td>10/12/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326708830001</td><td>ENDANG YULIANAH</td><td>P</td><td>27/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321812870001</td><td>AHMAD SHOHIBI</td><td>L</td><td>18/12/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325409900002</td><td>ZULAIHAH SULISTIYONINGSIH</td><td>P</td><td>14/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326611930001</td><td>ANNA FITRI NINGSIH</td><td>P</td><td>26/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321411950001</td><td>EKO ADI SUWONO</td><td>L</td><td>14/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322304100002</td><td>FAREL MUHAMMAD YUSUF</td><td>L</td><td>23/04/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321408390001</td><td>ABD KARIM</td><td>L</td><td>14/08/1939</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321101690001</td><td>SUKOYO</td><td>L</td><td>11/01/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325402730001</td><td>PATMAWATI</td><td>P</td><td>14/02/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324704980002</td><td>SITI AROFATU BAIZURO</td><td>P</td><td>07/04/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320205090001</td><td>RAFI RAHMAT FAUZI</td><td>L</td><td>02/05/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322108750003</td><td>MUHAMMAD IHSAN</td><td>L</td><td>21/08/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325407850004</td><td>SURIYATI</td><td>P</td><td>14/07/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326805400001</td><td>NGASIYAH</td><td>P</td><td>28/05/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322404840002</td><td>JOKO SUSANTO</td><td>L</td><td>24/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326905890002</td><td>UMI NURLAILA</td><td>P</td><td>29/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101910008</td><td>SLAMET BUDI SANTOSO</td><td>L</td><td>01/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321009500001</td><td>SUKARDI</td><td>L</td><td>10/09/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325109600001</td><td>SAMIATI</td><td>P</td><td>11/09/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321210880001</td><td>MASRUKAH FANANI</td><td>L</td><td>12/10/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101450041</td><td>SRINI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101750016</td><td>MISERI</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101780010</td><td>SULIADI</td><td>L</td><td>01/01/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321202600003</td><td>M SHOBURI</td><td>L</td><td>12/02/1960</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326208720003</td><td>SITI HARSINI</td><td>P</td><td>22/08/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321703900001</td><td>MOHAMMAD FAISOL RIZA</td><td>L</td><td>17/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325608980004</td><td>RITA AMALIA AGUSTIN</td><td>P</td><td>16/08/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325107370001</td><td>DASIRAH</td><td>P</td><td>11/07/1937</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322507740001</td><td>YULIANTO</td><td>L</td><td>25/07/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325809740002</td><td>LILIK WAHIDIYAWATI</td><td>P</td><td>18/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321601990001</td><td>MOCHAMAD FAIZAL FEBRIANSYAH</td><td>L</td><td>16/01/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321407030001</td><td>MOCHAMAD FICHNIZAR FARIHIN</td><td>L</td><td>14/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321107720001</td><td>SADAR SUNARIANTO AGUS M</td><td>L</td><td>11/07/1972</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326309840001</td><td>ENIK</td><td>P</td><td>23/09/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323112450003</td><td>ACH MUCHLIS H</td><td>L</td><td>31/12/1945</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PENSIUNAN</td></tr>
 <tr><td>3507324807650002</td><td>SRI BUDI HARWANI, S.Ag</td><td>P</td><td>08/07/1965</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322809900003</td><td>M TAUFIQ HIDAYAT</td><td>L</td><td>28/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321411040001</td><td>M HABIB ZAKARIYA MUCHLISIN</td><td>L</td><td>14/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324311690003</td><td>SITI ALIMAH</td><td>P</td><td>03/11/1969</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321809930002</td><td>ACHMAD MUHAJIR FANANI</td><td>L</td><td>18/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320309960001</td><td>MUHAMAD ROBIED MUSTOFA</td><td>L</td><td>03/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320507050001</td><td>MUHAMAD MUCHTAR THORIQUL AZIZI</td><td>L</td><td>05/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321507350002</td><td>SAMSI</td><td>L</td><td>15/07/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324508400003</td><td>SRINTEN</td><td>P</td><td>05/08/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320601760006</td><td>SHOLIHIN</td><td>L</td><td>06/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327006900002</td><td>INDAH KUMALASARI</td><td>P</td><td>30/06/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322604110001</td><td>AHMAD MUZAKKI NAF'AN</td><td>L</td><td>26/04/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321101700002</td><td>JITO</td><td>L</td><td>11/01/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324512810002</td><td>ERNAWATI</td><td>P</td><td>05/12/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326411970001</td><td>KHOIRUN NISA</td><td>P</td><td>24/11/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320512060002</td><td>HAFIZ FADHILA</td><td>L</td><td>05/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322208640001</td><td>MUGIONO</td><td>L</td><td>22/08/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KONSTRUKSI</td></tr>
 <tr><td>3507324101720002</td><td>MALIKAH</td><td>P</td><td>01/01/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325907890001</td><td>MAULIDA SYAFA'ATI</td><td>P</td><td>19/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320306930003</td><td>MUHAMMAD SAIFUL ARIF</td><td>L</td><td>03/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101350050</td><td>KAPSAH</td><td>P</td><td>01/01/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321407500002</td><td>RIDWAN</td><td>L</td><td>14/07/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327001540001</td><td>NGATIYAH</td><td>P</td><td>30/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326001790002</td><td>UMI SALAMAH</td><td>P</td><td>20/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323004820002</td><td>ALI WAHYUDI</td><td>L</td><td>30/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325106850004</td><td>ANIK QODARIYAH</td><td>P</td><td>11/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320504920001</td><td>SYAHRUL ROMADLONI</td><td>L</td><td>05/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320407720001</td><td>SAICHU ABADI</td><td>L</td><td>04/07/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324811740004</td><td>SUMIATIN</td><td>P</td><td>08/11/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320508960001</td><td>YUDHA AGUSTIA ABADi</td><td>L</td><td>05/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325902030003</td><td>VETY FEBRIA NUGRAHAINI</td><td>P</td><td>19/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324703740002</td><td>MUNTAHAH</td><td>P</td><td>07/03/1974</td><td>Islam</td><td>Kawin</td><td>Strata II</td><td>BIDAN</td></tr>
 <tr><td>3507325512670002</td><td>YANTI</td><td>P</td><td>15/12/1967</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321706850002</td><td>JOKO SUSANTO</td><td>L</td><td>17/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320112900003</td><td>SLAMET BUDI SANTOSO</td><td>L</td><td>01/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322809720002</td><td>ASY'ARI</td><td>L</td><td>28/09/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325705770002</td><td>NUR ANISAH</td><td>P</td><td>17/05/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325509950001</td><td>TETY KHOIRUN NISA</td><td>P</td><td>15/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101660015</td><td>SAMSUL HADI</td><td>L</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326104750003</td><td>SUMIATIN</td><td>P</td><td>21/04/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321501950002</td><td>IMAM KHAFID</td><td>L</td><td>15/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322712000001</td><td>SYAHRUL RHOMADLHON</td><td>L</td><td>27/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321302070001</td><td>A FAUZAN MA'RUF</td><td>L</td><td>13/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101660012</td><td>KATIMIN</td><td>L</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101730018</td><td>PONIMAH</td><td>P</td><td>01/01/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322301930003</td><td>ANGGA MISWANTO</td><td>L</td><td>23/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326904960001</td><td>ANGGI LISTIANINGSIH</td><td>P</td><td>29/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320406000001</td><td>NURCAHYO MULYONO</td><td>L</td><td>04/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324406400001</td><td>MARIAH ULFA</td><td>P</td><td>04/06/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101730014</td><td>MAS'UD</td><td>L</td><td>01/01/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322706400002</td><td>SUKIRNO</td><td>L</td><td>27/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324812450002</td><td>NASLIKAH</td><td>P</td><td>08/12/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322009780001</td><td>SULAIMAN</td><td>L</td><td>20/09/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324507820002</td><td>SRI INDAWATI</td><td>P</td><td>05/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325912010003</td><td>RISKA NUR SAFITRI</td><td>P</td><td>19/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324110110001</td><td>SISKA OKTA FERDIANA</td><td>P</td><td>01/10/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322704690001</td><td>MUALIMIN</td><td>L</td><td>27/04/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324111700002</td><td>SULIATI</td><td>P</td><td>01/11/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320308930001</td><td>M ACSAN KHOLILI</td><td>L</td><td>03/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326402020001</td><td>REFY DWI FEBRIANTI</td><td>P</td><td>24/02/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326106050002</td><td>LISA PARA DINA PUTRI</td><td>P</td><td>21/06/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101550026</td><td>KARMUN</td><td>L</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507324101600040</td><td>MALICHAH</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101830014</td><td>ABD MUNIF</td><td>L</td><td>01/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325105830003</td><td>SRI LESTARI</td><td>P</td><td>11/05/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324608070003</td><td>IIN INABA</td><td>P</td><td>06/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101400037</td><td>MATSIDIK</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101400041</td><td>SIYAMI</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320107580002</td><td>SULIONO</td><td>L</td><td>01/07/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324607630002</td><td>MARYATI</td><td>P</td><td>06/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324806800002</td><td>WILIS SUGIARTI</td><td>P</td><td>08/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN HONORER</td></tr>
 <tr><td>3507320101400038</td><td>JA'I</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550032</td><td>MARLIAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101790016</td><td>GIMAN</td><td>L</td><td>01/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325605920001</td><td>WIJIANI</td><td>P</td><td>16/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEMBANTU RUMAH TANGGA</td></tr>
 <tr><td>3507321504670002</td><td>SARJONO</td><td>L</td><td>15/04/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324108790003</td><td>SITI ROYANAH</td><td>P</td><td>01/08/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321304970003</td><td>WILDAN LUKMAN ANGGARA</td><td>L</td><td>13/04/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321606440001</td><td>MAT SI'AN</td><td>L</td><td>16/06/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321507780002</td><td>JUNAIDI</td><td>L</td><td>15/07/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320905850001</td><td>FATCHURROHMAN</td><td>L</td><td>09/05/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324508870003</td><td>TATIK MUKAROMAH</td><td>P</td><td>05/08/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320407610001</td><td>SUHANDONO</td><td>L</td><td>04/07/1961</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324703730001</td><td>SUNARMI</td><td>P</td><td>07/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326812960002</td><td>IKA WAHYUNI</td><td>P</td><td>28/12/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322904990002</td><td>KHOMARUL IBADI</td><td>L</td><td>29/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320511450001</td><td>SATIMAN</td><td>L</td><td>05/11/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321602420001</td><td>ISELAN</td><td>L</td><td>16/02/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101490013</td><td>JAMIYAH</td><td>P</td><td>01/01/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101740027</td><td>SITI HANIPAH</td><td>P</td><td>01/01/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321302790001</td><td>IMAM MAJEMU</td><td>L</td><td>13/02/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321207760002</td><td>JUWAIR EKO SANDI</td><td>L</td><td>12/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325910010001</td><td>SITI AUDINA MARA KONITA</td><td>P</td><td>19/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320510770002</td><td>MUHAMMAD SULKHAN</td><td>L</td><td>05/10/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324410810002</td><td>NURUL AINI</td><td>P</td><td>04/10/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325102010003</td><td>LAILATUL MUFIDAH</td><td>P</td><td>11/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326505480001</td><td>SRI WAHINI</td><td>P</td><td>25/05/1948</td><td>Islam</td><td>Cerai Mati</td><td>Strata II</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507321808890003</td><td>PURWANTORO</td><td>L</td><td>18/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101740001</td><td>SAMSUDIN</td><td>L</td><td>01/01/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324501000001</td><td>DEWI FITRIA</td><td>P</td><td>05/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101420030</td><td>SRUKI</td><td>L</td><td>01/01/1942</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101500039</td><td>SUMIATI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101680022</td><td>MAT NGALIM</td><td>L</td><td>01/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325512720002</td><td>SITI KHOLIFAH</td><td>P</td><td>15/12/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321602930002</td><td>M HARIS FIRMANSYAH</td><td>L</td><td>16/02/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321601960001</td><td>AHMAD WAHYU SETIAWAN</td><td>L</td><td>16/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320404050003</td><td>ILHAM BIDZIKRI KARUNIAWAN</td><td>L</td><td>04/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101300023</td><td>TASRIPAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321502520001</td><td>SUKARNO</td><td>L</td><td>15/02/1952</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326406630002</td><td>JUMI</td><td>P</td><td>24/06/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321206800002</td><td>NURSYAHIDIN</td><td>L</td><td>12/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320108960001</td><td>AHMAD JAINUL ARIFIN</td><td>L</td><td>01/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320204550003</td><td>GIMIN</td><td>L</td><td>02/04/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324111550004</td><td>SUYATI</td><td>P</td><td>01/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320204800002</td><td>AGUS PAMBUDI</td><td>L</td><td>02/04/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326303900001</td><td>AMINAH</td><td>P</td><td>23/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322708940001</td><td>ROHMAT ABDUL MUFID</td><td>L</td><td>27/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320311690001</td><td>AHMAD YAMU'I</td><td>L</td><td>03/11/1969</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325008760002</td><td>SITI ROHMAH</td><td>P</td><td>10/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324607000002</td><td>FIRDHA RAHMAWATI</td><td>P</td><td>06/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101600032</td><td>NGATEMUN</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101640018</td><td>SUNARYAH</td><td>P</td><td>01/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322010830002</td><td>SYAFI'UL ANAM</td><td>L</td><td>20/10/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321407960001</td><td>MOHAMMAT IMAM ROZIKIN</td><td>L</td><td>14/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101590004</td><td>MATALIM</td><td>L</td><td>01/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324107680003</td><td>NGATINAH</td><td>P</td><td>01/07/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320402870001</td><td>ANDRI MUSTOFA</td><td>L</td><td>04/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321002960003</td><td>IMAM HANAFI</td><td>L</td><td>10/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321605660001</td><td>SUPARI</td><td>L</td><td>16/05/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324802680001</td><td>WINANTI</td><td>P</td><td>08/02/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321007920002</td><td>ANANG SETYAWAN</td><td>L</td><td>10/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320104950001</td><td>MIFTAKHUL HUDA</td><td>L</td><td>01/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321104500001</td><td>MAHAT</td><td>L</td><td>11/04/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324102600002</td><td>JAMI</td><td>P</td><td>01/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324102760002</td><td>SUTIARI</td><td>P</td><td>01/02/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325308880001</td><td>YULIANTI</td><td>P</td><td>13/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321803690002</td><td>ARUMAN</td><td>L</td><td>18/03/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324307980001</td><td>SYAFA FADILA ILMANINGTYAS</td><td>P</td><td>03/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326004060001</td><td>LAILA AURELIA RAHMAWATI</td><td>P</td><td>20/04/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326903080001</td><td>INDRI FABRIANA RETNO DEWI</td><td>P</td><td>29/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321511450001</td><td>MOCH MAHFUDZ HADI</td><td>L</td><td>15/11/1945</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210550001</td><td>MUAYAH</td><td>P</td><td>12/10/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325108840005</td><td>S JUAROFAH</td><td>P</td><td>11/08/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012880003</td><td>FARIDATUL MUNAWARAOH</td><td>P</td><td>10/12/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322006890002</td><td>ACH IBSI D S G P</td><td>L</td><td>20/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320606720023</td><td>JULIANTO</td><td>L</td><td>06/06/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505740007</td><td>SULISWATI</td><td>P</td><td>15/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326608030001</td><td>WAHYU ELLY SABILLA</td><td>P</td><td>26/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321902090001</td><td>WAHYU FEBRYANSETIA PUTRA</td><td>L</td><td>19/02/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101530023</td><td>WINARTI</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101350049</td><td>NGATIYEM</td><td>P</td><td>01/01/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507311511750001</td><td>ALI MUKSIN</td><td>L</td><td>15/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325711820002</td><td>NUR FADILAH</td><td>P</td><td>17/11/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326806100001</td><td>ERLITA SHAFA AVRIANI</td><td>P</td><td>28/06/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320704820001</td><td>ADI PURNOMO</td><td>L</td><td>07/04/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326203860002</td><td>LAILATUL MUKAROMAH</td><td>P</td><td>22/03/1986</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325707100001</td><td>ULFA NUR AZIZAH</td><td>P</td><td>17/07/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321212780004</td><td>EDI PURWANTO</td><td>L</td><td>12/12/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324901830001</td><td>SUSILOWATI</td><td>P</td><td>09/01/1983</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324711100001</td><td>AMIRA ERLINDA SAFITRI</td><td>P</td><td>07/11/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321607820003</td><td>WIJIANTO</td><td>L</td><td>16/07/1982</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324206840002</td><td>MUDLIFAH RAKHMAH</td><td>P</td><td>02/06/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324901100001</td><td>KEYSHIA SALSABILA ZAHRANI</td><td>P</td><td>09/01/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324702380002</td><td>SARTIMAH</td><td>P</td><td>07/02/1938</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321007720005</td><td>BEJO HARIONO</td><td>L</td><td>10/07/1972</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321006780001</td><td>MUCH HADI NASROIM A M</td><td>L</td><td>10/06/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326807820001</td><td>ARIFATUL HAMIDAH</td><td>P</td><td>28/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320303050001</td><td>AHMAD SYIBRA HADDAD NAUFAL</td><td>L</td><td>03/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709800001</td><td>HUDA HARIANTO</td><td>L</td><td>07/09/1980</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326108910002</td><td>SITI NUR AZIZAH</td><td>P</td><td>21/08/1991</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321502110001</td><td>RAFAEL AHMAD HAFIDZ AL FATH</td><td>L</td><td>15/02/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322805830001</td><td>EKO WAHYUDI</td><td>L</td><td>28/05/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324604830003</td><td>DEWI PURNAMASARI</td><td>P</td><td>06/04/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320712770002</td><td>AGUS MAHMUD DAROINI</td><td>L</td><td>07/12/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326606040002</td><td>AFI MAKRIFATUL ZANAH</td><td>P</td><td>26/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320506600007</td><td>GIRAN</td><td>L</td><td>05/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324102630002</td><td>SUKARTI</td><td>P</td><td>01/02/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321505790003</td><td>CAHMO WAHYUDI</td><td>L</td><td>15/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325601920002</td><td>ELY PRAMITA ROSADI</td><td>P</td><td>16/01/1992</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324508000002</td><td>ELA AGUSTINA</td><td>P</td><td>05/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322007860002</td><td>WANTONO</td><td>L</td><td>20/07/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322211810002</td><td>NUR ERFAN</td><td>L</td><td>22/11/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326405910001</td><td>NING WAHYUNI</td><td>P</td><td>24/05/1991</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324707110001</td><td>MIRZA YUVANIA SAHDA FARRAS</td><td>P</td><td>07/07/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101450050</td><td>JONO</td><td>L</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101520010</td><td>KARTIYAH</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324305430001</td><td>SARTI</td><td>P</td><td>03/05/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107560005</td><td>JUMAT</td><td>L</td><td>01/07/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321703780002</td><td>HERI SANTOSO</td><td>L</td><td>17/03/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010790005</td><td>SALAMAH</td><td>P</td><td>10/10/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321607090002</td><td>ACH MIRZA SIFAUDIN</td><td>L</td><td>16/07/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322003500001</td><td>TUKIJO</td><td>L</td><td>20/03/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325809280001</td><td>SURTI</td><td>P</td><td>18/09/1928</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324107370006</td><td>SOFI JAMAATI</td><td>P</td><td>01/07/1937</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107560006</td><td>MISRINGAH</td><td>L</td><td>01/07/1956</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101290001</td><td>TIPAH</td><td>P</td><td>01/01/1929</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321706770001</td><td>NURIHIM</td><td>L</td><td>17/06/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101780003</td><td>SITI SOFI'YAH</td><td>P</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326403980001</td><td>AYU UZULAIFATUT T</td><td>P</td><td>24/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101600047</td><td>MARTINI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322912790002</td><td>RAHMAT HIDAYAT</td><td>L</td><td>29/12/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325708820001</td><td>NING TRAMI</td><td>P</td><td>17/08/1982</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325402000001</td><td>JENIS MAULIDA NINGRUM</td><td>P</td><td>14/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320210010001</td><td>ADI PRASTIYA NUGRAHA</td><td>L</td><td>02/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322511510001</td><td>SIWAN</td><td>L</td><td>25/11/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324705570001</td><td>MISIYAH</td><td>P</td><td>07/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326807840002</td><td>TITIK KUSMIATI</td><td>P</td><td>28/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322901870001</td><td>RUDI SETIAWAN</td><td>L</td><td>29/01/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322607890002</td><td>ROHMAN ADI SAPUTRA</td><td>L</td><td>26/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320607760002</td><td>RARASANTO</td><td>L</td><td>06/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324904760002</td><td>SRI ASTUTIK</td><td>P</td><td>09/04/1976</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324511030002</td><td>EVITA ADELLIA RAMADHANI</td><td>P</td><td>05/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322207710001</td><td>RARASMOKO</td><td>L</td><td>22/07/1971</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320701790002</td><td>SYARIFFUDIN</td><td>L</td><td>07/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325407790002</td><td>HELMI FATMAWATI</td><td>P</td><td>14/07/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101570017</td><td>SUDI</td><td>L</td><td>01/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101600038</td><td>SETYOWATI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010770003</td><td>MUHAMMAD ZAENAL ARIFIN</td><td>L</td><td>10/10/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321003270001</td><td>KAERAN</td><td>L</td><td>10/03/1927</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507490001</td><td>LAINEM</td><td>P</td><td>15/07/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326005790001</td><td>SUWARNI</td><td>P</td><td>20/05/1979</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321610860001</td><td>SUSANTO</td><td>L</td><td>16/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320510760002</td><td>GATOT WIDYANTO</td><td>L</td><td>05/10/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324605760001</td><td>EVA KUSNIYAH</td><td>P</td><td>06/05/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324307000001</td><td>EGA AINAYA SALSABILA</td><td>P</td><td>03/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325108030002</td><td>FASYA EGA NABILLA</td><td>P</td><td>11/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320604780001</td><td>BUDIONO</td><td>L</td><td>06/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324606790001</td><td>SITI MUNAWAROH</td><td>P</td><td>06/06/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322607020001</td><td>M FAHMI NUR ROHMAN</td><td>L</td><td>26/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320801740001</td><td>MAD IHSAN</td><td>L</td><td>08/01/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326002810001</td><td>LILIS MASITAH</td><td>P</td><td>20/02/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324405030002</td><td>HANIYAH BILQIS WAKHIDAH</td><td>P</td><td>04/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322005770004</td><td>SUGENG</td><td>L</td><td>20/05/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324708850003</td><td>NUNUK KUSMIATI</td><td>P</td><td>07/08/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320504040004</td><td>M ALIFATUL RIZKI</td><td>L</td><td>05/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326502450001</td><td>GINAH</td><td>P</td><td>25/02/1945</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320108410005</td><td>TASRIP</td><td>L</td><td>01/08/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101450044</td><td>SUNAYAH</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322708480001</td><td>PAIMIN</td><td>L</td><td>27/08/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209540003</td><td>SULASTRI</td><td>P</td><td>12/09/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325404810002</td><td>HARIYANTI</td><td>P</td><td>14/04/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322401740001</td><td>MUSTAIB</td><td>L</td><td>24/01/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320903010001</td><td>NICO ARDIAN SANDI</td><td>L</td><td>09/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322104570001</td><td>NUR ALIM</td><td>L</td><td>21/04/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324408650004</td><td>MUNIAH</td><td>P</td><td>04/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320608840003</td><td>SHOIMUL MUSLIMIN</td><td>L</td><td>06/08/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322404880003</td><td>IMAM MALIKI</td><td>L</td><td>24/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321101020002</td><td>MOHAMMAD FARID ROSYADI</td><td>L</td><td>11/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321210670001</td><td>SUTRISNO</td><td>L</td><td>12/10/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325003770001</td><td>MASLIKHATIN</td><td>P</td><td>10/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322611980002</td><td>M HADI KHUSNA</td><td>L</td><td>26/11/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321203060001</td><td>M KHABIBI MUSTOFA</td><td>L</td><td>12/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321102620003</td><td>MESIRAN</td><td>L</td><td>11/02/1962</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326305820002</td><td>TUPAH ELIASARI</td><td>P</td><td>23/05/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322105030001</td><td>AHMAD MAULANA WAHYU S</td><td>L</td><td>21/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321604600001</td><td>HARIONO</td><td>L</td><td>16/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326109630001</td><td>TUKIYEM</td><td>P</td><td>21/09/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321202880002</td><td>ABD ROHIM</td><td>L</td><td>12/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321202880001</td><td>ABD ROHMAN</td><td>L</td><td>12/02/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324804280001</td><td>SURTI</td><td>P</td><td>08/04/1928</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320101760020</td><td>GIARTO</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101820011</td><td>NURHAYATI</td><td>P</td><td>01/01/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107010002</td><td>MUHAMMAD SAHRUL SYAFA'AT</td><td>L</td><td>01/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323007100001</td><td>AZRIL RIZYAN FAHREZI</td><td>L</td><td>30/07/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101400041</td><td>SAMSI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324606730003</td><td>SUNARSIH</td><td>P</td><td>06/06/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101840005</td><td>SITI HALIMAH</td><td>P</td><td>01/01/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101870012</td><td>M AROFIQ</td><td>L</td><td>01/01/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321108790001</td><td>MURAWAN</td><td>L</td><td>11/08/1979</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326204810001</td><td>SITI KHOLIFAH</td><td>P</td><td>22/04/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324305020002</td><td>DEA NUR SABRINA ZAHRO</td><td>P</td><td>03/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322310060001</td><td>DANI ARDIANSYAH FATAHILLAH</td><td>L</td><td>23/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321310600003</td><td>KATIMIN</td><td>L</td><td>13/10/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101650007</td><td>KHOIRIYAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320303860003</td><td>ARI IRAWAN</td><td>L</td><td>03/03/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322806520001</td><td>TUPAN</td><td>L</td><td>28/06/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325301570001</td><td>SUPAMI</td><td>P</td><td>13/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322410750001</td><td>BAMBANG</td><td>L</td><td>24/10/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321204910002</td><td>HERMAWAN</td><td>L</td><td>12/04/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325502930001</td><td>DISKA FEBRI ANGGRAINI</td><td>P</td><td>15/02/1993</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322010540001</td><td>SODIQ</td><td>L</td><td>20/10/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324112630002</td><td>SUNARTI</td><td>P</td><td>01/12/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324606850002</td><td>WIWIN MUKHOIRIYAH</td><td>P</td><td>06/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325012880002</td><td>ITA DEWI PURNAMASARI</td><td>P</td><td>10/12/1988</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320710690002</td><td>SUSENO</td><td>L</td><td>07/10/1969</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324406710001</td><td>SITI JAMILAH</td><td>P</td><td>04/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327107940001</td><td>BINTI KAMALIA SAHARA</td><td>P</td><td>31/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321201010001</td><td>JIHADUDIN ANDI GUMALA</td><td>L</td><td>12/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321607750003</td><td>SUROTO</td><td>L</td><td>16/07/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324111800001</td><td>INDAYATI</td><td>P</td><td>01/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322408980002</td><td>MOH ANDIKA PRASETYA</td><td>L</td><td>24/08/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320902000001</td><td>GALIH IHZA MAHENDRA</td><td>L</td><td>09/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320604420001</td><td>M JARUM</td><td>L</td><td>06/04/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205740002</td><td>SULISWATI</td><td>P</td><td>12/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320607760001</td><td>TATANG YULIANTO</td><td>L</td><td>06/07/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320508450004</td><td>DASUKI</td><td>L</td><td>05/08/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324307480001</td><td>TIANI</td><td>P</td><td>03/07/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326408860001</td><td>INDA WATI</td><td>P</td><td>24/08/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507131409750003</td><td>ABDUL MADJID </td><td>L</td><td>14/09/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010100002</td><td>MUHAMAD MUKLISIN PRAYOGA</td><td>L</td><td>10/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321109600001</td><td>JUMAKIR</td><td>L</td><td>11/09/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325409620001</td><td>SRI WAHYUNI</td><td>P</td><td>14/09/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326109820001</td><td>ANITA YUNANI</td><td>P</td><td>21/09/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325212900001</td><td>SELVI RATNA SUSANTI</td><td>P</td><td>12/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321902990003</td><td>MUHAMMAD ALFARIZI</td><td>L</td><td>19/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320109520001</td><td>SUYANTO</td><td>L</td><td>01/09/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324609650002</td><td>PONITI</td><td>P</td><td>06/09/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324309860002</td><td>TUNIAYAH</td><td>P</td><td>03/09/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322409890003</td><td>ACHMAD MUHLISIN</td><td>L</td><td>24/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320607620003</td><td>TAMSIR</td><td>L</td><td>06/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101530020</td><td>SUMARAH</td><td>P</td><td>01/01/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320206020001</td><td>AHMAD MIFTAHUL HUDA</td><td>L</td><td>02/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101570023</td><td>WANDI</td><td>L</td><td>01/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325002770003</td><td>SUSIARI</td><td>P</td><td>10/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326711930004</td><td>NUR EVITA KUSMAIDAH</td><td>P</td><td>27/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327012990001</td><td>LINDA UMIATUL ISLAMIAH</td><td>P</td><td>30/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323103100001</td><td>MUHAMMAD REVAN ARDIANSYAH</td><td>L</td><td>31/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321212660005</td><td>SUKIMAN</td><td>L</td><td>12/12/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101770027</td><td>MAIMUNAH</td><td>P</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325504000002</td><td>LISNAWATI</td><td>P</td><td>15/04/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326008040003</td><td>KHUSNIA PUJI RAHAYU</td><td>P</td><td>20/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101610019</td><td>MARDI</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101630034</td><td>HARTATIK</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325902820003</td><td>SRI ALFIYAH</td><td>P</td><td>19/02/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321109890003</td><td>MUCHLAS FAUZI</td><td>L</td><td>11/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320402940001</td><td>MIFTAHUL ULUM</td><td>L</td><td>04/02/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324112440001</td><td>SUPINAH</td><td>P</td><td>01/12/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320704730001</td><td>NAHROWI</td><td>L</td><td>07/04/1973</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320201800002</td><td>HALIMI</td><td>L</td><td>02/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324511850001</td><td>SITI KHUSNUL KHOTIMAH</td><td>P</td><td>05/11/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322812870002</td><td>SAIFUL ROHMAN</td><td>L</td><td>28/12/1987</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321511740002</td><td>ACHMAD FARUM</td><td>L</td><td>15/11/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325310770001</td><td>LIAMI</td><td>P</td><td>13/10/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325308010001</td><td>LIA ROSYIDAH</td><td>P</td><td>13/08/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324501860001</td><td>RINI DWI NINGSIH</td><td>P</td><td>05/01/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322608720001</td><td>SUTIONO</td><td>L</td><td>26/08/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324303730001</td><td>SIARI</td><td>P</td><td>03/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322505960001</td><td>MUHAMMAD YANUR BUDI PRASTIYA</td><td>L</td><td>25/05/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325912990003</td><td>MUHIMATUL ALIYAH</td><td>P</td><td>19/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101600035</td><td>SARIMIN</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324102680002</td><td>TAMINI</td><td>P</td><td>01/02/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320906900001</td><td>M SYAFI'I</td><td>L</td><td>09/06/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320911470001</td><td>SUKIPAN</td><td>L</td><td>09/11/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210480003</td><td>TUKINI</td><td>P</td><td>12/10/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101390014</td><td>SUKIAMAH</td><td>P</td><td>01/01/1939</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320608690002</td><td>MOKHAMAD AINUN NAIM</td><td>L</td><td>06/08/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712690003</td><td>SUHARLIN</td><td>P</td><td>07/12/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322609930002</td><td>M NU'MAN ARIF H</td><td>L</td><td>26/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324508000001</td><td>ELOK NADIATUN NA'IMA</td><td>P</td><td>05/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320810250001</td><td>TAWI</td><td>L</td><td>08/10/1925</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325304400002</td><td>PIAH</td><td>P</td><td>13/04/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321508720002</td><td>SULAIMAN</td><td>L</td><td>15/08/1972</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322507750002</td><td>M SYAMSUL HADI</td><td>L</td><td>25/07/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320411790002</td><td>NUR ROHIM</td><td>L</td><td>04/11/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320409630003</td><td>M SHOLEH</td><td>L</td><td>04/09/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325609690004</td><td>SITI AISYAH</td><td>P</td><td>16/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322503900002</td><td>M ALWI BASRI</td><td>L</td><td>25/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322008050002</td><td>AHMAD ZIDAN FAHMI RIFAI</td><td>L</td><td>20/08/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324109450001</td><td>KATEMI</td><td>P</td><td>01/09/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321302970002</td><td>AHMAD SULTHONI MUKHTAR</td><td>L</td><td>13/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101430010</td><td>WARIS</td><td>L</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101480018</td><td>JUMIATI</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101760024</td><td>RUSMAN</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101780009</td><td>SITI SHOFIYAH</td><td>P</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101800011</td><td>SITI MARYAM</td><td>P</td><td>01/01/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321508820001</td><td>TURIYADI</td><td>L</td><td>15/08/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320207870001</td><td>MUCH SYAFI'I</td><td>L</td><td>02/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322504940003</td><td>M ALFALAUN NASICHIN</td><td>L</td><td>25/04/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323112790005</td><td>CANDRA KIRANA</td><td>L</td><td>31/12/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325205800003</td><td>YUYUN SUNDIAWATI</td><td>P</td><td>12/05/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320212020002</td><td>M RIZAL RAMADHAN</td><td>L</td><td>02/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322003090001</td><td>RIFQI MAULANA</td><td>L</td><td>20/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324107430007</td><td>PONITI</td><td>P</td><td>01/07/1943</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320705710001</td><td>HENDRO SUWIGNYO</td><td>L</td><td>07/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326010740001</td><td>MARKHUMAH</td><td>P</td><td>20/10/1974</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324701010001</td><td>DEWI FARAH ZAIRINA</td><td>P</td><td>07/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322003820002</td><td>WAHYUDI SYAFA'AT</td><td>L</td><td>20/03/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326212800002</td><td>MUSLIHA</td><td>P</td><td>22/12/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324112030001</td><td>DEWI FATIMATUS ZAHRO</td><td>P</td><td>01/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322004600003</td><td>M SOFIYAN</td><td>L</td><td>20/04/1960</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327107920002</td><td>LILIK KUNAINI</td><td>P</td><td>31/07/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324311950001</td><td>INDAH NUR ASIAH</td><td>P</td><td>03/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320805410001</td><td>IMAM ANSHORI BH</td><td>L</td><td>08/05/1941</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322510020007</td><td>M ADIB SYAMSUR RIJAL</td><td>L</td><td>25/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101500041</td><td>TOHARI</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324101550052</td><td>SATUMI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101770026</td><td>INDUN JUMIATI</td><td>P</td><td>01/01/1977</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320604760001</td><td>M FAHRUL ISLAM</td><td>L</td><td>06/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETERNAK</td></tr>
 <tr><td>3507325005850006</td><td>HENI NURHAYATI</td><td>P</td><td>10/05/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326002080002</td><td>FAUZA QOTHRUNNADA</td><td>P</td><td>20/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324206920005</td><td>MAS'UDAH</td><td>P</td><td>02/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101500062</td><td>TUAH</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101660014</td><td>SUWARNO</td><td>L</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320704970003</td><td>FEBRIAN ANGGA W</td><td>L</td><td>07/04/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323008030002</td><td>ARIYA WIDIANTO</td><td>L</td><td>30/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101480034</td><td>KASEMI</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101400072</td><td>SUMI'ATIN</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325507800005</td><td>SITI ANINGSIH</td><td>P</td><td>15/07/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322404680002</td><td>NUR SAMPE</td><td>L</td><td>24/04/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101770004</td><td>MUSTIKAH</td><td>P</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322603950001</td><td>IMAM MUJIANTO</td><td>L</td><td>26/03/1995</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325310050002</td><td>LAILI QODRIYAH</td><td>P</td><td>13/10/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322003690004</td><td>SUPENO</td><td>L</td><td>20/03/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325804770002</td><td>ROMIASIH</td><td>P</td><td>18/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325712000002</td><td>IRMA TASYA PRIHATINI</td><td>P</td><td>17/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320910820003</td><td>SODIQ</td><td>L</td><td>09/10/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324710840004</td><td>MUNTOLIAH</td><td>P</td><td>07/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322104060003</td><td>FANDI ARYA PUTRA</td><td>L</td><td>21/04/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322404100001</td><td>FALENTINO DWI PRAKOSO</td><td>L</td><td>24/04/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322011890002</td><td>M ZAINUDIN</td><td>L</td><td>20/11/1989</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322109100001</td><td>M FAREL ALVAREZA</td><td>L</td><td>21/09/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102500001</td><td>HUSEIN</td><td>L</td><td>01/02/1950</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325504550001</td><td>SATUNI</td><td>P</td><td>15/04/1955</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320604780002</td><td>ZAENAL ABIDIN</td><td>L</td><td>06/04/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322506600001</td><td>CHOZIN</td><td>L</td><td>25/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326004620001</td><td>SUTINAH</td><td>P</td><td>20/04/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325211920004</td><td>PIPIT PRAMAWATI</td><td>P</td><td>12/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325211920003</td><td>PIPIN DAMAYANTI</td><td>P</td><td>12/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101600030</td><td>PONIDI</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326105670001</td><td>SULIANI</td><td>P</td><td>21/05/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101910009</td><td>RUDI HANDOKO</td><td>L</td><td>01/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101930004</td><td>INDRI WAHIDIA WATI</td><td>P</td><td>01/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320104740001</td><td>AMIRUL MUKMININ</td><td>L</td><td>01/04/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011780001</td><td>SITI AMINAH</td><td>P</td><td>10/11/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321511970001</td><td>M KHOIRUL AMINUDIN</td><td>L</td><td>15/11/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321511010003</td><td>A MISBAKHUL ANWAR</td><td>L</td><td>15/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324303420001</td><td>SARTIANI</td><td>P</td><td>03/03/1942</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321504540001</td><td>KAMARI</td><td>L</td><td>15/04/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324407590001</td><td>KARTINI</td><td>P</td><td>04/07/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324911840001</td><td>SAYIDATI ZUHROH</td><td>P</td><td>09/11/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326505920001</td><td>CHOIROTUL AZIZAH</td><td>P</td><td>25/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321008770003</td><td>MUNADI STIAWAN</td><td>L</td><td>10/08/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101820020</td><td>NING KASMUNIK</td><td>P</td><td>01/01/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321205000001</td><td>FERI ANDI SETIAWAN</td><td>L</td><td>12/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322605110001</td><td>AHMAD MABRURI MUCHTAR</td><td>L</td><td>26/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325204470001</td><td>RUSIYAM</td><td>P</td><td>12/04/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321408550004</td><td>M SLAMET </td><td>L</td><td>14/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210570003</td><td>SITI MUTOMMIMAH</td><td>P</td><td>12/10/1957</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325004740004</td><td>MIRUL HAYATI</td><td>P</td><td>10/04/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322204780001</td><td>M ISROFI</td><td>L</td><td>22/04/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326005800002</td><td>ITA RAHMAWATI</td><td>P</td><td>20/05/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011330001</td><td>SITI MULIYAH</td><td>P</td><td>10/11/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101750023</td><td>SITI UMI KULSUM</td><td>P</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101810033</td><td>SITI RAHAYU</td><td>P</td><td>01/01/1981</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321710950001</td><td>KEVIN YOUNGFA ANAGA</td><td>L</td><td>17/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322107020004</td><td>MOCH BALYUN TAJA</td><td>L</td><td>21/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101630022</td><td>TUKIRIN</td><td>L</td><td>01/01/1963</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326808080001</td><td>ZULFATUL ROHMA</td><td>P</td><td>28/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321204710002</td><td>ABD ROCHMAN</td><td>L</td><td>12/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326805990002</td><td>ELOK NURUS SHOBAH</td><td>P</td><td>28/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324309010003</td><td>SHOFIYA LAILATUR ROHMA</td><td>P</td><td>03/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321104590002</td><td>SUMARTO</td><td>L</td><td>11/04/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325203690002</td><td>MUJIATI NINIGSIH</td><td>P</td><td>12/03/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326508880001</td><td>ELIS SUMARTININGSIH</td><td>P</td><td>25/08/1988</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326407110002</td><td>HAFIDHO NADHIFAH</td><td>P</td><td>24/07/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320401700004</td><td>WINARDI</td><td>L</td><td>04/01/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325608780001</td><td>ANIS SAIDAH</td><td>P</td><td>16/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325901010001</td><td>RIZQI FAZRIYAH</td><td>P</td><td>19/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320306070001</td><td>LUTFIANSYAH DWI KURNIAWAN</td><td>L</td><td>03/06/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320406580001</td><td>PARIONO</td><td>L</td><td>04/06/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325207610001</td><td>TOWIYAH</td><td>P</td><td>12/07/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320406810001</td><td>AS'ARI</td><td>L</td><td>04/06/1981</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320707880001</td><td>SYAFIUL UMAMI</td><td>L</td><td>07/07/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321902300001</td><td>JASIM</td><td>L</td><td>19/02/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101420014</td><td>MUDAMAH</td><td>P</td><td>01/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321903540001</td><td>NURASIM</td><td>L</td><td>19/03/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324305620002</td><td>MUSRIPAH</td><td>P</td><td>03/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325202920002</td><td>IFA ZUHRIA</td><td>P</td><td>12/02/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322704710001</td><td>ZAINURI</td><td>L</td><td>27/04/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324212810001</td><td>ANIK KURNIATI</td><td>P</td><td>02/12/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325101020002</td><td>ANA ZUHYYINA FITRI</td><td>P</td><td>11/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101460008</td><td>RAKEMAT</td><td>L</td><td>01/01/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325306500002</td><td>KARTINI</td><td>P</td><td>13/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326609960002</td><td>ROBIATUL BANA MASJIDAH</td><td>P</td><td>26/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322605550001</td><td>BUNASIR</td><td>L</td><td>26/05/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324104650004</td><td>SITI PATONAH</td><td>P</td><td>01/04/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326901980001</td><td>DEWI ZAHROTU FITRIYA</td><td>P</td><td>29/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101230006</td><td>DURAKIM</td><td>L</td><td>01/01/1923</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325303500001</td><td>SIAMAH</td><td>P</td><td>13/03/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322703700001</td><td>HADI PRAYITNO</td><td>L</td><td>27/03/1970</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507324404720003</td><td>MARIATUL QIPTIYAH</td><td>P</td><td>04/04/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324210910002</td><td>IVA MAULIDA CHUSNIA CN</td><td>P</td><td>02/10/1991</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324309040002</td><td>FADYA PUTRI SEPTIANING T</td><td>P</td><td>03/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101350002</td><td>SA'I</td><td>L</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101400002</td><td>SUMIATIN</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321105750003</td><td>NUR KHOLIS</td><td>L</td><td>11/05/1975</td><td>Islam</td><td>Kawin</td><td>Strata II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507800003</td><td>SITI A NINGSIH</td><td>P</td><td>15/07/1980</td><td>Islam</td><td>Belum Kawin</td><td>Strata II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325208350003</td><td>MASIYEM </td><td>P</td><td>12/08/1935</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507321701640003</td><td>ASRONI</td><td>L</td><td>17/01/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324802700002</td><td>HALIMAH SA'DIYAH</td><td>P</td><td>08/02/1970</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324509950002</td><td>GUSTHI MELDHIYA AL DINA R</td><td>P</td><td>05/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324810960005</td><td>GUSTI NUR FITRIA AKHMALIA</td><td>P</td><td>08/10/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323112540005</td><td>YAKIM</td><td>L</td><td>31/12/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326801570001</td><td>SUSIATI</td><td>P</td><td>28/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325009850001</td><td>SUDARTI</td><td>P</td><td>10/09/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322811760001</td><td>MUJANI</td><td>L</td><td>28/11/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321806090002</td><td>ADITYA PUTRA FIRMANSYA</td><td>L</td><td>18/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321604450002</td><td>RIAMUN</td><td>L</td><td>16/04/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101500036</td><td>KASPIN</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101700023</td><td>SAMSUL ANAM</td><td>L</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325109740002</td><td>RIAMAH</td><td>P</td><td>11/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323012940002</td><td>M HADI SUSILO</td><td>L</td><td>30/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322004050001</td><td>MEWIN RASENDRIYA SHANDI F</td><td>L</td><td>20/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322703540001</td><td>UNTUNG SUYONO</td><td>L</td><td>27/03/1954</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326604640001</td><td>SULIKAH</td><td>P</td><td>26/04/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321404850003</td><td>IMAM HAMBALI</td><td>L</td><td>14/04/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320508150001</td><td>TARJO</td><td>L</td><td>05/08/1915</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324609470001</td><td>TUAH</td><td>P</td><td>06/09/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325908760002</td><td>SUNAMI</td><td>P</td><td>19/08/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322202970001</td><td>FEBRIAN ANGGA WINATA</td><td>L</td><td>22/02/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323008030001</td><td>ARYA WIDIANTO</td><td>L</td><td>30/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325209470001</td><td>KASMIATI</td><td>P</td><td>12/09/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321609350001</td><td>SUPARMAN</td><td>L</td><td>16/09/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324209450003</td><td>DASINAH</td><td>P</td><td>02/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327004820003</td><td>ISMIATI</td><td>P</td><td>30/04/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322001810003</td><td>NURWITO</td><td>L</td><td>20/01/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321605020006</td><td>NANDA MAULANA</td><td>L</td><td>16/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103100002</td><td>FARDHAN MAULANA</td><td>L</td><td>01/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322707630001</td><td>ACH DJAZULI</td><td>L</td><td>27/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008650002</td><td>SITI MAIMUNAH</td><td>P</td><td>20/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321005870002</td><td>MAHBUB ROMADLON</td><td>L</td><td>10/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321104920001</td><td>M MAHKRUS FITRI</td><td>L</td><td>11/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326911960002</td><td>NOFI MASLAKHAH</td><td>P</td><td>29/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324412080001</td><td>ELFI MASFUFAH</td><td>P</td><td>04/12/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321112600004</td><td>ZAINURI</td><td>L</td><td>11/12/1960</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324710630001</td><td>MARDIYATUL WACHIDAH</td><td>P</td><td>07/10/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320406820003</td><td>AGUS WAHID</td><td>L</td><td>04/06/1982</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325505870001</td><td>BIRUL WALIDAINI</td><td>P</td><td>15/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320810900001</td><td>MAHRUS AFANDI</td><td>L</td><td>08/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321803630003</td><td>KASMARI</td><td>L</td><td>18/03/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324504640002</td><td>SUGIATI</td><td>P</td><td>05/04/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322812850002</td><td>WINARKO</td><td>L</td><td>28/12/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323103910001</td><td>MAHRUS ALI ROMADLON</td><td>L</td><td>31/03/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325408000001</td><td>TUTUT ROFIATUL MAHMUDAH</td><td>P</td><td>14/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101470013</td><td>SATUMI</td><td>P</td><td>01/01/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322508640001</td><td>SUPANDRI</td><td>L</td><td>25/08/1964</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326708860006</td><td>ROIHATUL HANIK</td><td>P</td><td>27/08/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326801080001</td><td>PUTRI KAMILIA</td><td>P</td><td>28/01/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322703600003</td><td>SUWANDI</td><td>L</td><td>27/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326812650002</td><td>KOLIS</td><td>P</td><td>28/12/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324211870001</td><td>DEWI MASLUKAH</td><td>P</td><td>02/11/1987</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320612900001</td><td>MIFTAKHUL HIDAYAT</td><td>L</td><td>06/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323004940001</td><td>M RICHI ANDRIANSYAH</td><td>L</td><td>30/04/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320810960001</td><td>M ROZIKIN</td><td>L</td><td>08/10/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507327009970002</td><td>ERA BAZIROH</td><td>P</td><td>30/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320701090001</td><td>ZANUAR SURYA SAPUTRA</td><td>L</td><td>07/01/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321306620002</td><td>SUWEDI</td><td>L</td><td>13/06/1962</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320607750003</td><td>NUR KOLIS, SE</td><td>L</td><td>06/07/1975</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326202760001</td><td>YOSEPHINA BAHAN, SE</td><td>P</td><td>22/02/1976</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325503020001</td><td>MARSELLA MORELI BAHAN</td><td>P</td><td>15/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324808610002</td><td>JULAIKHAH</td><td>P</td><td>08/08/1961</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322711890006</td><td>FANDRA YUDA</td><td>L</td><td>27/11/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101480014</td><td>KAMAD</td><td>L</td><td>01/01/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101520012</td><td>SUNARTI</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321105730002</td><td>IMAM</td><td>L</td><td>11/05/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101400057</td><td>SATUMI</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101350033</td><td>GISAN</td><td>L</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101390019</td><td>SUTI</td><td>P</td><td>01/01/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325902920002</td><td>IKA TAMALA</td><td>P</td><td>19/02/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323004740001</td><td>MOH YASIN</td><td>L</td><td>30/04/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324505760001</td><td>UMI KULSUM</td><td>P</td><td>05/05/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321506950002</td><td>MOCHAMMAD FADLIL RIZQI</td><td>L</td><td>15/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507327112020002</td><td>LATIFATUL KHOIRUN NISA'</td><td>P</td><td>31/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322801750002</td><td>SUWANTO</td><td>L</td><td>28/01/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325706800002</td><td>SRI WAHYUNING ASTUTIK</td><td>P</td><td>17/06/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320411030001</td><td>AHMAD MIFTAH SHOIMI</td><td>L</td><td>04/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320204840006</td><td>M KHOLIL</td><td>L</td><td>02/04/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325002780003</td><td>ZULAIKHAH</td><td>P</td><td>10/02/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326909070001</td><td>SAFIRA RAMADHANI CANDRA K</td><td>P</td><td>29/09/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320603750001</td><td>MUNASIK</td><td>L</td><td>06/03/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324502840005</td><td>SITI USWATUL HASANAH</td><td>P</td><td>05/02/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325107070001</td><td>MAFTUHA WARDATUL JANNATI</td><td>P</td><td>11/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321807500001</td><td>DULADI</td><td>L</td><td>18/07/1950</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321910710001</td><td>AGUS SUHERI</td><td>L</td><td>19/10/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325503790002</td><td>SITI LAILATUL MUFIDAH</td><td>P</td><td>15/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326903980001</td><td>NOVEA PUTRI BRILIANT</td><td>P</td><td>29/03/1998</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321603060003</td><td>ABIMAYU AGEL PRATAMA PUTRA</td><td>L</td><td>16/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322811710002</td><td>MUHAMAD DASIR</td><td>L</td><td>28/11/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326604770001</td><td>HARNANIK</td><td>P</td><td>26/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326403960001</td><td>ISMA FUAIDA</td><td>P</td><td>24/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325705020002</td><td>FINGKI INDAHSARI</td><td>P</td><td>17/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320306080003</td><td>MUHAMAD WISNU FIRMANSYAH</td><td>L</td><td>03/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101370011</td><td>ROMELAH</td><td>P</td><td>01/01/1937</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321708640002</td><td>WAKIDI</td><td>L</td><td>17/08/1964</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324707690002</td><td>LILAH NURJANAH</td><td>P</td><td>07/07/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321010890003</td><td>MAULID UBAIDILAH</td><td>L</td><td>10/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324908940001</td><td>WAULIDA ROSYIDATUL W</td><td>P</td><td>09/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320511010002</td><td>SAHRUL SA'BANI</td><td>L</td><td>05/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321209450001</td><td>ABU SALIM</td><td>L</td><td>12/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324704460001</td><td>ALIYAH</td><td>P</td><td>07/04/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320404190001</td><td>MESERI</td><td>L</td><td>04/04/1919</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206370001</td><td>MARTIAH</td><td>P</td><td>12/06/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321404710001</td><td>SUTRIS</td><td>L</td><td>14/04/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321404730002</td><td>MU'ALIMIN</td><td>L</td><td>14/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324807750004</td><td>SRI TUMINI</td><td>P</td><td>08/07/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321907950006</td><td>ADI SANTOSO</td><td>L</td><td>19/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101400027</td><td>WARTAM</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101430019</td><td>SARPIAH</td><td>P</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320202690003</td><td>NUR KHOLIK</td><td>L</td><td>02/02/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507326901800001</td><td>EVI MAULITA</td><td>P</td><td>29/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321012970002</td><td>AHMAD AFANDI</td><td>L</td><td>10/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324604030002</td><td>NUR AFIDAH</td><td>P</td><td>06/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321412770005</td><td>FAKHRIS AFANDI</td><td>L</td><td>14/12/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326701810001</td><td>ISMINAH</td><td>P</td><td>27/01/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>GURU</td></tr>
 <tr><td>3507325509030002</td><td>MALTHUFA ZAKYATUL HUSNA</td><td>P</td><td>15/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324112060002</td><td>NURUL AISYAH</td><td>P</td><td>01/12/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327004090001</td><td>LATHIFAH CONDRO WULAN</td><td>P</td><td>30/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324702690001</td><td>SUDARMI</td><td>P</td><td>07/02/1969</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320701900001</td><td>ABID WIJAYANTO</td><td>L</td><td>07/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321806910002</td><td>IFAN FANANI</td><td>L</td><td>18/06/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324408020001</td><td>EFI AGUSTIN</td><td>P</td><td>04/08/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321008860002</td><td>RIDLO MABRURI</td><td>L</td><td>10/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324109400003</td><td>SIANI</td><td>P</td><td>01/09/1940</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325805680001</td><td>PIAMI</td><td>P</td><td>18/05/1968</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101460001</td><td>TISNI</td><td>P</td><td>01/01/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101700001</td><td>PONIMAN</td><td>L</td><td>01/01/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320307540003</td><td>NGADERI</td><td>L</td><td>03/07/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325310590001</td><td>THOSIYAH</td><td>P</td><td>13/10/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321705790001</td><td>EDY SUTRISNO</td><td>L</td><td>17/05/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326807480001</td><td>PAILAH</td><td>P</td><td>28/07/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320608830003</td><td>AHMAD FAUJI</td><td>L</td><td>06/08/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325601910001</td><td>SRI BAGIA NINGSIH</td><td>P</td><td>16/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321304600001</td><td>SUNARNO</td><td>L</td><td>13/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325203680003</td><td>ARTIWI</td><td>P</td><td>12/03/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322303880002</td><td>M FATHUR RIDLO</td><td>L</td><td>23/03/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324712950003</td><td>DESY WULANDARI</td><td>P</td><td>07/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322808710002</td><td>IMAM KARYONO</td><td>L</td><td>28/08/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325012700002</td><td>SRI ALFIAH</td><td>P</td><td>10/12/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322404020001</td><td>DIKY ARIF SETIAWAN</td><td>L</td><td>24/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108080001</td><td>MUHAMMAD MAGHFURI AZIS</td><td>L</td><td>01/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320705610003</td><td>SI'I</td><td>L</td><td>07/05/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326012700001</td><td>ARLIYAH</td><td>P</td><td>20/12/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325601890002</td><td>ELIS SULISTIYONINGSIH</td><td>P</td><td>16/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326311950002</td><td>NUROTUL NA'IMAH</td><td>P</td><td>23/11/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101650039</td><td>ABDUL KHOLIQ</td><td>L</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326006700002</td><td>MUTHOLIAH</td><td>P</td><td>20/06/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324408970001</td><td>WARDATUL JANATI</td><td>P</td><td>04/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101300019</td><td>BONASIM</td><td>L</td><td>01/01/1930</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101400040</td><td>SARMINAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101620026</td><td>KARIONO</td><td>L</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324404400001</td><td>RASTI</td><td>P</td><td>04/04/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320603680001</td><td>SAIHAN</td><td>L</td><td>06/03/1968</td><td>Islam</td><td>Cerai Hidup</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321306740001</td><td>HUDI ISTONO</td><td>L</td><td>13/06/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326508790001</td><td>UCIK SRI LESTARI A F</td><td>P</td><td>25/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322605980002</td><td>KHAIRUL ARIFIANDI</td><td>L</td><td>26/05/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101650004</td><td>SADI</td><td>L</td><td>01/01/1965</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101430024</td><td>SUTIYAH</td><td>P</td><td>01/01/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101720010</td><td>PARTIWI</td><td>P</td><td>01/01/1972</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101740013</td><td>PATONAH</td><td>P</td><td>01/01/1974</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101780008</td><td>KHOLIFAH</td><td>P</td><td>01/01/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101810014</td><td>SUPRIYANTO</td><td>L</td><td>01/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322711990002</td><td>HENDRA PURWA SAPUTRA</td><td>L</td><td>27/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321005750005</td><td>AHMAD KHOIRI</td><td>L</td><td>10/05/1975</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326402800001</td><td>SRI UTAMI</td><td>P</td><td>24/02/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322311010001</td><td>M IKHWANUL MUSLIMIN</td><td>L</td><td>23/11/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321206660002</td><td>KUSNADI</td><td>L</td><td>12/06/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324802750002</td><td>LILIS SETYOWATI</td><td>P</td><td>08/02/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320301930001</td><td>M ALI SOBIRIN</td><td>L</td><td>03/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320209960002</td><td>SAHRUL ARIFIN</td><td>L</td><td>02/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321404230001</td><td>MU'ALIMIN</td><td>L</td><td>14/04/1923</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324807750001</td><td>SRI TUMINI</td><td>P</td><td>08/07/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321907950001</td><td>ADI SANTOSO</td><td>L</td><td>19/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321510020001</td><td>SAID ABDULLOH</td><td>L</td><td>15/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321502500001</td><td>SLAMET</td><td>L</td><td>15/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101550031</td><td>PARIYAH</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101770013</td><td>NUR BIDAYAH</td><td>P</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325808790001</td><td>SITI ROMIDAH</td><td>P</td><td>18/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321511840003</td><td>MISMAN</td><td>L</td><td>15/11/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320406870002</td><td>IMAM SARONI</td><td>L</td><td>04/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101540019</td><td>TARI</td><td>L</td><td>01/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101610018</td><td>ARTILAH</td><td>P</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326606770002</td><td>HARNANIK</td><td>P</td><td>26/06/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101800009</td><td>KUMAIDAH</td><td>P</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320410860001</td><td>WAWAN SUGIANTO</td><td>L</td><td>04/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322204950002</td><td>ARI YUDI SETIAWAN</td><td>L</td><td>22/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321406820003</td><td>SUMARNO</td><td>L</td><td>14/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325312900001</td><td>DEWI ULUM MAIDAH</td><td>P</td><td>13/12/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321808680002</td><td>AGUS SUBANDI</td><td>L</td><td>18/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324909690004</td><td>LASIYEM</td><td>P</td><td>09/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325204930002</td><td>IKA WIDAYANTI</td><td>P</td><td>12/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326709000002</td><td>DWI RAHAYU</td><td>P</td><td>27/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320204060001</td><td>AHMAD FARID MABRURI</td><td>L</td><td>02/04/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322905520001</td><td>ABDUL GHOFUR</td><td>L</td><td>29/05/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325608580001</td><td>MASITAH</td><td>P</td><td>16/08/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321304760002</td><td>MUHAMMAD BAIDLOWI</td><td>L</td><td>13/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324811780002</td><td>SURIYAH</td><td>P</td><td>08/11/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326303080002</td><td>MAULIDIA MALIKA ADELIA</td><td>P</td><td>23/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325204450006</td><td>SIANI</td><td>P</td><td>12/04/1945</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326105970002</td><td>VERONICA AYU K</td><td>P</td><td>21/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320905790002</td><td>MOCHAMMAD AGUS KURNIAWAN</td><td>L</td><td>09/05/1979</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507146809840002</td><td>NANING FA'IZAH</td><td>P</td><td>28/09/1984</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326407100001</td><td>NAYLA TSALJU HAFIDAH</td><td>P</td><td>24/07/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321801790003</td><td>MOH IMRON ROSYADI</td><td>L</td><td>18/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324706850003</td><td>LAILATUL FADHILAH</td><td>P</td><td>07/06/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322202070002</td><td>MOH SYAHDAN HADJI K</td><td>L</td><td>22/02/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321003780002</td><td>ARDYAN</td><td>L</td><td>10/03/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324403430001</td><td>TASLIKAH</td><td>P</td><td>04/03/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507320305500003</td><td>SARIYAT</td><td>L</td><td>03/05/1950</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507321507670004</td><td>MUKHLASIN</td><td>L</td><td>15/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325601820001</td><td>MARIA YUNANI</td><td>P</td><td>16/01/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101500056</td><td>JAMI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322105010001</td><td>AHMAD TAUFIQ HASANI</td><td>L</td><td>21/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322407080001</td><td>MUHAMAD FIRMAN ARIFUIN</td><td>L</td><td>24/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321705740001</td><td>PURNADI</td><td>L</td><td>17/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324508780005</td><td>SITI RUBAIYAH</td><td>P</td><td>05/08/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322401070002</td><td>M RAYHAN ADY FATA ARDANY</td><td>L</td><td>24/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320504830003</td><td>M ASRORI HAMDI</td><td>L</td><td>05/04/1983</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507325504890001</td><td>MANJILATUR ROHMAH</td><td>P</td><td>15/04/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321902100001</td><td>M SULTHAN ABDUL AZIZ</td><td>L</td><td>19/02/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322006770004</td><td>ABDUL ROHMAN</td><td>L</td><td>20/06/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325603800003</td><td>NUNUK WIJI LESTARI</td><td>P</td><td>16/03/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320909010001</td><td>AHMAD ZAMRONI ZEIN</td><td>L</td><td>09/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324903050001</td><td>DINA SOFIANA</td><td>P</td><td>09/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326704090002</td><td>HIMATUN NUGRAINI</td><td>P</td><td>27/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321202780007</td><td>AHMAD JURI</td><td>L</td><td>12/02/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326107820005</td><td>KUS MIRAWATI</td><td>P</td><td>21/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324509050002</td><td>IMELDA VERONIKA</td><td>P</td><td>05/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322909800004</td><td>MUH ANANG HABIBI</td><td>L</td><td>29/09/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325510820001</td><td>SURYA NINGSIH</td><td>P</td><td>15/10/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327009100001</td><td>NAZLYA SYIFA TAHZANI</td><td>P</td><td>30/09/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325211810006</td><td>SITI RUBIAH</td><td>P</td><td>12/11/1981</td><td>Islam</td><td>Cerai Hidup</td><td>Diploma I/II</td><td>GURU</td></tr>
 <tr><td>3507321410020002</td><td>NANDA FAIZ GYMNASTIAR</td><td>L</td><td>14/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321811800001</td><td>ROKIM</td><td>L</td><td>18/11/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010800004</td><td>FIKATUL KHOFIFAH</td><td>P</td><td>10/10/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321208040003</td><td>M NANDA FARFAN AGUSTIAN DIVA P</td><td>L</td><td>12/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325906450001</td><td>SUKARTINI</td><td>P</td><td>19/06/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>LAINNYA</td></tr>
 <tr><td>3507320101600004</td><td>WAIDI</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101650045</td><td>KHOIRIYAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325806920001</td><td>LILIK EVA KURNIAWATI</td><td>P</td><td>18/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320205350001</td><td>LAJIM</td><td>L</td><td>02/05/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326201400001</td><td>RUPIATUN</td><td>P</td><td>22/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321810810003</td><td>M KHODAR MABRURI</td><td>L</td><td>18/10/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320507580002</td><td>BAHRUL ULUM</td><td>L</td><td>05/07/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>GURU</td></tr>
 <tr><td>3507324605630001</td><td>SITI KHOTIMAH</td><td>P</td><td>06/05/1963</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325008890003</td><td>RIZQI ROIHATUL JANAH</td><td>P</td><td>10/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321606710004</td><td>AINUR ROHIM</td><td>L</td><td>16/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326305740002</td><td>NUR HAMIDAH</td><td>P</td><td>23/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324810450001</td><td>SARIANI</td><td>P</td><td>08/10/1945</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321401650002</td><td>HADI SUYANTO</td><td>L</td><td>14/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325108780003</td><td>ALFI NI'MATI</td><td>P</td><td>11/08/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321707690005</td><td>M ANAS SUAIDI</td><td>L</td><td>17/07/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>USTADZ/MUBALIGH</td></tr>
 <tr><td>3507325006740002</td><td>SAYYIDAH MAGHFUROH</td><td>P</td><td>10/06/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322301930002</td><td>M FIKRI LATHIFI</td><td>L</td><td>23/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321207980002</td><td>MAULANA IBNU 'ALWAN</td><td>L</td><td>12/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326309050002</td><td>SALWA SABILA</td><td>P</td><td>23/09/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322507740002</td><td>BUAMAR ARIF</td><td>L</td><td>25/07/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326508710001</td><td>TUNAH</td><td>P</td><td>25/08/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324406970001</td><td>ISMI AJIZAH</td><td>P</td><td>04/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324711050002</td><td>FITRI AMELIA</td><td>P</td><td>07/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321910070001</td><td>AHMAD FAIZIN ARDIANSYAH</td><td>L</td><td>19/10/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607580002</td><td>SUMARTO</td><td>L</td><td>06/07/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326004660002</td><td>SALAMI</td><td>P</td><td>20/04/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322107840001</td><td>MUHAMAD JOHAR IRFANI</td><td>L</td><td>21/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323011880001</td><td>ROHIB BURHANI</td><td>L</td><td>30/11/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325605040001</td><td>MIA LUTHFIAH</td><td>P</td><td>16/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322302590001</td><td>FATHUR ROJI</td><td>L</td><td>23/02/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG GIGI</td></tr>
 <tr><td>3507324101620032</td><td>KARSITIN</td><td>P</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320912800001</td><td>M MUKHLAS HABIBI</td><td>L</td><td>09/12/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324512830001</td><td>ISNA HAYATI MA'RIFAH</td><td>P</td><td>05/12/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322211900001</td><td>MUHAMMAD TUHFATUR ROZIQIN</td><td>L</td><td>22/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325001000003</td><td>NINDA KHOMSATUT THOYYIBAH</td><td>P</td><td>10/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325506860002</td><td>AIMIN TARSIH</td><td>P</td><td>15/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325802500001</td><td>SHOLIKAH</td><td>P</td><td>18/02/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325609860001</td><td>SUFA'ATIN</td><td>P</td><td>16/09/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320705510002</td><td>SAPARI</td><td>L</td><td>07/05/1951</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325810530001</td><td>WARSI</td><td>P</td><td>18/10/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325507850008</td><td>IIS WAHYUNING YULIA</td><td>P</td><td>15/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326111940001</td><td>CHUSNUL MUBAROKA M</td><td>P</td><td>21/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326104650002</td><td>KARTINI</td><td>P</td><td>21/04/1965</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010720005</td><td>HIDAYAT</td><td>L</td><td>10/10/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101790002</td><td>KANIPAH</td><td>P</td><td>01/01/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321409020001</td><td>M IBNU CHOIRUR ROHMAD</td><td>L</td><td>14/09/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320605630016</td><td>SURYADI</td><td>L</td><td>06/05/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324405640002</td><td>MASTUFAH</td><td>P</td><td>04/05/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325804870001</td><td>RUBIHATUL FARIHA</td><td>P</td><td>18/04/1987</td><td>Islam</td><td>Belum Kawin</td><td>Diploma I/II</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324310890002</td><td>MAULIDA ZUHRIYAH</td><td>P</td><td>03/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321605560003</td><td>MASIRAN</td><td>L</td><td>16/05/1956</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>LAINNYA</td></tr>
 <tr><td>3507324603600001</td><td>TUKIYAH</td><td>P</td><td>06/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326711930001</td><td>RIFA'ATUL ZAKIYAH</td><td>P</td><td>27/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326611420001</td><td>NGATINI</td><td>P</td><td>26/11/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326101660001</td><td>SUKARTI</td><td>P</td><td>21/01/1966</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902740001</td><td>FITRIYAH LESTARI</td><td>P</td><td>09/02/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107670006</td><td>SUNAR SAMSUL</td><td>L</td><td>01/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322303100001</td><td>RIDWAN AFANDI</td><td>L</td><td>23/03/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320607690001</td><td>ABD QODIR</td><td>L</td><td>06/07/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324704720003</td><td>LAILATUL MUFIDAH</td><td>P</td><td>07/04/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324212020003</td><td>DIANA NOVA ARISTA</td><td>P</td><td>02/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101500041</td><td>TIRAH</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321203770004</td><td>ARUL KOLIDI</td><td>L</td><td>12/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324104800001</td><td>SITI FATCHUR ROCHMAH</td><td>P</td><td>01/04/1980</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321810000002</td><td>M FIRDAUS YOGA PRATAMA</td><td>L</td><td>18/10/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325001540004</td><td>SAMIAH</td><td>P</td><td>10/01/1954</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321006830005</td><td>MUHAMAD SUUDI</td><td>L</td><td>10/06/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322104690001</td><td>EDY SUYONO</td><td>L</td><td>21/04/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325904620001</td><td>SHOLI'AH</td><td>P</td><td>19/04/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324601970002</td><td>USWATUN TOYIBAH</td><td>P</td><td>06/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101410001</td><td>ABDUL SAMAT</td><td>L</td><td>01/01/1941</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327008480003</td><td>PARTIAH</td><td>P</td><td>30/08/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320110820002</td><td>M SHOLEH</td><td>L</td><td>01/10/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325703870002</td><td>LAILATUL ISLAMIYAH</td><td>P</td><td>17/03/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101600001</td><td>KARIONO</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101640002</td><td>SAMIATI</td><td>P</td><td>01/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507323107930001</td><td>M ROBIT NASICHIN</td><td>L</td><td>31/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101450074</td><td>SUPIYAH</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321207870003</td><td>SYAIFUDIN ZUHRI</td><td>L</td><td>12/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101620034</td><td>TONI'AH</td><td>P</td><td>01/01/1962</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324411940001</td><td>NOVI KHOIRUN NISA'</td><td>P</td><td>04/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324911020002</td><td>ALFI FITA KUMALA SARI</td><td>P</td><td>09/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321211780001</td><td>EDI PURNOMO</td><td>L</td><td>12/11/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101700029</td><td>NURUL BAITI</td><td>P</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320811920001</td><td>A MIFTAHUL ROZIQIN</td><td>L</td><td>08/11/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322708990001</td><td>M IKHWAN HANAFI</td><td>L</td><td>27/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326807050001</td><td>NAZHA DEA SHOFIATUL NADILA</td><td>P</td><td>28/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322012550001</td><td>BIBIT</td><td>L</td><td>20/12/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101630035</td><td>SITI HANIK</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320710870001</td><td>M RIDLO MABRURI</td><td>L</td><td>07/10/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320506490010</td><td>SARUWI</td><td>L</td><td>05/06/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324210550001</td><td>SOLINAH</td><td>P</td><td>02/10/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321908560001</td><td>NURHADI</td><td>L</td><td>19/08/1956</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324609650003</td><td>SUPIANI</td><td>P</td><td>06/09/1965</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322108930002</td><td>M AZIZ ULIL ALBAB</td><td>L</td><td>21/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320206800001</td><td>M IMAM ASFALI</td><td>L</td><td>02/06/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324109860002</td><td>IFA NURHAYATI</td><td>P</td><td>01/09/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325203020002</td><td>NURUL AFIYAH</td><td>P</td><td>12/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101390015</td><td>SUKEMI</td><td>P</td><td>01/01/1939</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321602710003</td><td>MISJAN</td><td>L</td><td>16/02/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324807780002</td><td>CHALIMATUS SA'DIYAH</td><td>P</td><td>08/07/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327105990003</td><td>MAIZULFA 'AZIZAH</td><td>P</td><td>31/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326804080001</td><td>ISNA APRILIA</td><td>P</td><td>28/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320501550002</td><td>SLAMET DAROINI</td><td>L</td><td>05/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324110620001</td><td>TATIK ZAKIYAH</td><td>P</td><td>01/10/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321912790001</td><td>YAHYA MUDOFAR</td><td>L</td><td>19/12/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325210930002</td><td>WULAN NISA'UL IZAH</td><td>P</td><td>12/10/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101350029</td><td>SARTIB</td><td>L</td><td>01/01/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327012480001</td><td>FATUKAH</td><td>P</td><td>30/12/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320501850002</td><td>MUHAMMAD IHSAN</td><td>L</td><td>05/01/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321905500001</td><td>KUSMAN</td><td>L</td><td>19/05/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326506550002</td><td>YAMINEM</td><td>P</td><td>25/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324103700002</td><td>KUSMINAH</td><td>P</td><td>01/03/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321406800002</td><td>HARYANTO</td><td>L</td><td>14/06/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322509850001</td><td>ABD SUKUR</td><td>L</td><td>25/09/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325604910001</td><td>SAMROTUL ILMIATI</td><td>P</td><td>16/04/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322310020001</td><td>AHMAD ADITIYA</td><td>L</td><td>23/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101710007</td><td>SITI MUDHOLIFAH</td><td>P</td><td>01/01/1971</td><td>Islam</td><td>Cerai Mati</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322509880002</td><td>MAWAHIBUS SOMAD</td><td>L</td><td>25/09/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325209940001</td><td>MASLUKHATUL MAFADHOH</td><td>P</td><td>12/09/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322507990002</td><td>YUSRIL MUSTOFA</td><td>L</td><td>25/07/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323103800002</td><td>MUHAMMAD RIFA'I</td><td>L</td><td>31/03/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325111830002</td><td>NINIK WAHYUNI</td><td>P</td><td>11/11/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321802050002</td><td>M REZA MAULANA WAHIDIAWAN</td><td>L</td><td>18/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320110550003</td><td>MADARUM</td><td>L</td><td>01/10/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324105600004</td><td>PONIYAH</td><td>P</td><td>01/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325107800003</td><td>SULIS TRIAMI</td><td>P</td><td>11/07/1980</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320305870001</td><td>KN FAUZI</td><td>L</td><td>03/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN HONORER</td></tr>
 <tr><td>3507324408930003</td><td>LUDIA UTAMIMAH</td><td>P</td><td>04/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326711990001</td><td>DEVI MUHSONATI</td><td>P</td><td>27/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101750026</td><td>SULIADI</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326606820001</td><td>UMUL KHOIROH</td><td>P</td><td>26/06/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326910010002</td><td>ATIK KHOSYATI</td><td>P</td><td>29/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325912080001</td><td>TASYA DWI ROHMANI</td><td>P</td><td>19/12/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508700002</td><td>MUNAWAR</td><td>L</td><td>15/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3505204210690001</td><td>SUWANTI</td><td>P</td><td>02/10/1969</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326112960001</td><td>YUANA PUTRI IRMAYANTI</td><td>P</td><td>21/12/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325507450002</td><td>MUNARAH</td><td>P</td><td>15/07/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321809630001</td><td>SAMSUL HADI</td><td>L</td><td>18/09/1963</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108670020</td><td>MAHMUDAH</td><td>P</td><td>01/08/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322110860001</td><td>MUCHAMAD AINUR ROFIQ</td><td>L</td><td>21/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326504960004</td><td>LEILI FARIHAH</td><td>P</td><td>25/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320107040003</td><td>ACHMAD FADHIL RIDWAN</td><td>L</td><td>01/07/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101600042</td><td>SITI ASIYAH</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321504860002</td><td>AHMAD ROHIM</td><td>L</td><td>15/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321505890001</td><td>PARLAN</td><td>L</td><td>15/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320704950002</td><td>SUPRIADI</td><td>L</td><td>07/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320301750001</td><td>ZAINAL ABIDIN</td><td>L</td><td>03/01/1975</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326802850002</td><td>IFA ZAKIYAH</td><td>P</td><td>28/02/1985</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324106050001</td><td>EKA ZULFA AINIYAH</td><td>P</td><td>01/06/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320207630001</td><td>SAMIRAN</td><td>L</td><td>02/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324607710003</td><td>SARPIANI</td><td>P</td><td>06/07/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321008920002</td><td>ANIS SUSANTO</td><td>L</td><td>10/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324903970001</td><td>VETI NUR INDAH SARI</td><td>P</td><td>09/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320506740001</td><td>SATIMAN</td><td>L</td><td>05/06/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324409800002</td><td>PUJI ASTUTIK</td><td>P</td><td>04/09/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325101010003</td><td>EKA FITRI AMALIYAH</td><td>P</td><td>11/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324608110001</td><td>LAILA TSANIA RAMADANI</td><td>P</td><td>06/08/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322707810004</td><td>PURWANTO</td><td>L</td><td>27/07/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324208880003</td><td>WINARSIH</td><td>P</td><td>02/08/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320908050001</td><td>M RIZAL WAHYU PRASETYO</td><td>L</td><td>09/08/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101450069</td><td>SURIYAH</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324610660001</td><td>SITI ROHMI</td><td>P</td><td>06/10/1966</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321205850002</td><td>TAUFIK</td><td>L</td><td>12/05/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326504850003</td><td>DEWI HUSNIA</td><td>P</td><td>25/04/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327001100001</td><td>WARDA BINTA AWALIYAH</td><td>P</td><td>30/01/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101380030</td><td>MURTOSIYAH</td><td>P</td><td>01/01/1938</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322810960001</td><td>M FAHRUL ISLAM</td><td>L</td><td>28/10/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321609860004</td><td>AGHITS MUKAROM</td><td>L</td><td>16/09/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325607890001</td><td>LILIK HAMIDAH</td><td>P</td><td>16/07/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320202730002</td><td>SODIKUN</td><td>L</td><td>02/02/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324502830002</td><td>UMI SALAMAH</td><td>P</td><td>05/02/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326002040001</td><td>FEBRIANTI NUR A</td><td>P</td><td>20/02/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322909650001</td><td>SUJARWO</td><td>L</td><td>29/09/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325206710001</td><td>YAYUK RIBAWANTI</td><td>P</td><td>12/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325509890001</td><td>PUTRI AMANDA SARI</td><td>P</td><td>15/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322102950001</td><td>RAHMAN FARID</td><td>L</td><td>21/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326002010003</td><td>NANDA PEBYOLA SARI</td><td>P</td><td>20/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325809040001</td><td>SISILIYA AYU WANDA SARI</td><td>P</td><td>18/09/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322404770001</td><td>EKO SUPRIYANTO</td><td>L</td><td>24/04/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320304370002</td><td>M DASIM</td><td>L</td><td>03/04/1937</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325106770003</td><td>AJIMATU ROHMA</td><td>P</td><td>11/06/1977</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322704890003</td><td>M AGHIS ROMADON</td><td>L</td><td>27/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325701750002</td><td>SUYATIN</td><td>P</td><td>17/01/1975</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325101000002</td><td>RISMA NURFITRIANA</td><td>P</td><td>11/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326411040003</td><td>FITRI NOVITA ROHMAH</td><td>P</td><td>24/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101400033</td><td>MAJADI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321208620001</td><td>HADI WINARTO</td><td>L</td><td>12/08/1962</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324803920003</td><td>PUJIATI</td><td>P</td><td>08/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320609660002</td><td>SAIFUL BAHRI</td><td>L</td><td>06/09/1966</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324408760002</td><td>SITI ASIYAH</td><td>P</td><td>04/08/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324109980002</td><td>IHA AQIDATUL IZZA</td><td>P</td><td>01/09/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324701070001</td><td>LAILA NAFISATUL IZZA</td><td>P</td><td>07/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321203580003</td><td>ABDUL RO'UF</td><td>L</td><td>12/03/1958</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324705720004</td><td>KUMAIYAH</td><td>P</td><td>07/05/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322809900002</td><td>MUCHAMMAD ZAUHAR MAKNUNI</td><td>L</td><td>28/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321608950007</td><td>ABID KAMAL FASE</td><td>L</td><td>16/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101400037</td><td>SUPIATUN</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101600028</td><td>MAKSUM AHMADI</td><td>L</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101650046</td><td>SITI ARTI</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326502010003</td><td>SILVI LAILIYAH</td><td>P</td><td>25/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101500001</td><td>TUKIMUN</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101650047</td><td>PARTINAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321805870002</td><td>AHMAD SANTOSO</td><td>L</td><td>18/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325910890002</td><td>KUSMIATI</td><td>P</td><td>19/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326410930001</td><td>LAILATUS SA'DIYAH</td><td>P</td><td>24/10/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320401300002</td><td>RAJI</td><td>L</td><td>04/01/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324108400027</td><td>PONIK</td><td>P</td><td>01/08/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324901770004</td><td>SITI PURIYAH</td><td>P</td><td>09/01/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101810024</td><td>AHMAD DARMAJID</td><td>L</td><td>01/01/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320506610004</td><td>SOLICHAN</td><td>L</td><td>05/06/1961</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324602710002</td><td>SUMARTINI</td><td>P</td><td>06/02/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325206910004</td><td>UMI WAHIDATUL ZAKIYAH</td><td>P</td><td>12/06/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321406980001</td><td>A ILHAM FAJRIN</td><td>L</td><td>14/06/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101400034</td><td>M DASIM</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324304450002</td><td>SARTAMAH</td><td>P</td><td>03/04/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320606690002</td><td>M DAIROBI</td><td>L</td><td>06/06/1969</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101770011</td><td>AJIMATU RAHMA</td><td>P</td><td>01/01/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326205820002</td><td>UMI SALAMAH</td><td>P</td><td>22/05/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322704890001</td><td>M AGHITS ROMADON</td><td>L</td><td>27/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320212750003</td><td>SODIKUN</td><td>L</td><td>02/12/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320202690002</td><td>PARIADI</td><td>L</td><td>02/02/1969</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507324609700001</td><td>NURYATIM</td><td>P</td><td>06/09/1970</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507324301970001</td><td>DEVI QURROTIA'YUN</td><td>P</td><td>03/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324402020002</td><td>SILVI LUTFIYAH</td><td>P</td><td>04/02/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322505550002</td><td>SANAN</td><td>L</td><td>25/05/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324611640001</td><td>KALIYAH</td><td>P</td><td>06/11/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324911810003</td><td>SUMIK</td><td>P</td><td>09/11/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320707840003</td><td>ANANG WAHYUDI</td><td>L</td><td>07/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320209960001</td><td>AHMAD RISQI FAUJI</td><td>L</td><td>02/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101400035</td><td>M FADELI</td><td>L</td><td>01/01/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101500033</td><td>LI'AMAH</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101800027</td><td>IMAM ASFALI</td><td>L</td><td>01/01/1980</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321805860001</td><td>FASIHUL LISAN</td><td>L</td><td>18/05/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101700022</td><td>KUSNADI</td><td>L</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101750022</td><td>SUMIARI</td><td>P</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321702950002</td><td>AGUS SETIAWAN</td><td>L</td><td>17/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326704990001</td><td>AMBARWATI</td><td>P</td><td>27/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101330013</td><td>YATINI</td><td>P</td><td>01/01/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322008640001</td><td>DIMYATI RIADI</td><td>L</td><td>20/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325503740002</td><td>SITI MUNAWAROH</td><td>P</td><td>15/03/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325604940003</td><td>ROSIDA KAMILIA</td><td>P</td><td>16/04/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321503000002</td><td>M ADHA FARIZI</td><td>L</td><td>15/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321101670009</td><td>KHOZINATUL ASROR</td><td>L</td><td>11/01/1967</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325201690001</td><td>SITI ASTUKAH</td><td>P</td><td>12/01/1969</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507322903970002</td><td>M WILDAN FAIZIN</td><td>L</td><td>29/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324802030002</td><td>FIRA ALFIANA AFIFAH</td><td>P</td><td>08/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324910500006</td><td>SIATIN</td><td>P</td><td>09/10/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320209670002</td><td>M ROWI AMIN</td><td>L</td><td>02/09/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324507780002</td><td>SRI INDAYATI</td><td>P</td><td>05/07/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323012970003</td><td>M KAMILU SYA'BAN</td><td>L</td><td>30/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320811430001</td><td>ASIM</td><td>L</td><td>08/11/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325205500004</td><td>MARINI</td><td>P</td><td>12/05/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320511730002</td><td>IMAM BAJURI</td><td>L</td><td>05/11/1973</td><td>Islam</td><td>Cerai Mati</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709850001</td><td>KUSNUL KHOTIMAH</td><td>P</td><td>07/09/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320508900003</td><td>JAMIL SANTOSO</td><td>L</td><td>05/08/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322510950001</td><td>RIBUT MUHIBULLOH</td><td>L</td><td>25/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322511550001</td><td>SARINTO</td><td>L</td><td>25/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324102630001</td><td>MULIATI</td><td>P</td><td>01/02/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322302840001</td><td>MUHAMMAD RUDI HARTOYO</td><td>L</td><td>23/02/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326404870002</td><td>DEWI JULAIKAH</td><td>P</td><td>24/04/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322905900002</td><td>M RUHAN SANUSI</td><td>L</td><td>29/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324808920002</td><td>RIMBA AGUS SRIWULAN</td><td>P</td><td>08/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325206950002</td><td>ERNA PUJI ASTUTIK</td><td>P</td><td>12/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326111990001</td><td>AYUN VENI VENAYANTI</td><td>P</td><td>21/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101430021</td><td>MURSIYAH</td><td>P</td><td>01/01/1943</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101300019</td><td>YAMINAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101510001</td><td>SOKIP</td><td>L</td><td>01/01/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550028</td><td>MARIANI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320404860001</td><td>M ARIS ABDULLOH</td><td>L</td><td>04/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010620003</td><td>SUSENO</td><td>L</td><td>10/10/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326702760001</td><td>SRI SARI</td><td>P</td><td>27/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325012970001</td><td>DESI NOVITA SARI</td><td>P</td><td>10/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321603000003</td><td>A NASRUDIN FAHMI</td><td>L</td><td>16/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321611060002</td><td>M RAMA SATRIAWAN</td><td>L</td><td>16/11/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101460020</td><td>SARIYATIN</td><td>P</td><td>01/01/1946</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507323005600003</td><td>PONIDI</td><td>L</td><td>30/05/1960</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320101320011</td><td>A SYUKUR</td><td>L</td><td>01/01/1932</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324605480001</td><td>MARINAH</td><td>P</td><td>06/05/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322909700002</td><td>LUQMAN HAKIM</td><td>L</td><td>29/09/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324109820002</td><td>RUQOYYAH</td><td>P</td><td>01/09/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325206030002</td><td>DILA RUHINA</td><td>P</td><td>12/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321708580003</td><td>SUKAMTO</td><td>L</td><td>17/08/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101650052</td><td>TUTIK NURIKAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322805840002</td><td>AHSIN AFANDI</td><td>L</td><td>28/05/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326412930001</td><td>LILIK MASRUROH</td><td>P</td><td>24/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322010350001</td><td>SAURI</td><td>L</td><td>20/10/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325006400002</td><td>MUNASRI</td><td>P</td><td>10/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321003800002</td><td>A WAHYUDI</td><td>L</td><td>10/03/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101500030</td><td>HASAN</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101630036</td><td>NGATIPAH</td><td>P</td><td>01/01/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326607840002</td><td>ANIK FITRIYAH</td><td>P</td><td>26/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321807880001</td><td>M SULAIMAN</td><td>L</td><td>18/07/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101350032</td><td>TAMAH</td><td>P</td><td>01/01/1935</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321204590001</td><td>LUTFI AHMARI</td><td>L</td><td>12/04/1959</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322409720003</td><td>MULYANTO</td><td>L</td><td>24/09/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325303790001</td><td>SITI KHOIRIYAH</td><td>P</td><td>13/03/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323012960001</td><td>DIKY ANDRE ANDIKA</td><td>L</td><td>30/12/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326003010001</td><td>MARIYA MULIASTIKA</td><td>P</td><td>20/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325011040004</td><td>RISKA AMALIA ANANDA</td><td>P</td><td>10/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320405600001</td><td>SULIADI</td><td>L</td><td>04/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325010680001</td><td>RIAMI</td><td>P</td><td>10/10/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320409850001</td><td>AHMAD TAUFIK</td><td>L</td><td>04/09/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322001930001</td><td>M ALI BASHORI</td><td>L</td><td>20/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325502030001</td><td>ZUMROTUL KHAMIDAH</td><td>P</td><td>15/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322904820006</td><td>MUHAMAD MUHLAS DAMANHURI</td><td>L</td><td>29/04/1982</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507327009870001</td><td>RENI SUSILOWATI</td><td>P</td><td>30/09/1987</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321403710002</td><td>ACHMAD MARZUKI</td><td>L</td><td>14/03/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326706750005</td><td>LAILATUL MUTMAINAH</td><td>P</td><td>27/06/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321804950001</td><td>SIGIT APRIANTO</td><td>L</td><td>18/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103720004</td><td>AHMAD JARIADI HAMID</td><td>L</td><td>01/03/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325509830001</td><td>BINTI SALBIYAH</td><td>P</td><td>15/09/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325112030002</td><td>VEDA FITRI  KHUZAIMAH</td><td>P</td><td>11/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320501740004</td><td>MUHAMMAD FAUZAN</td><td>L</td><td>05/01/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101850014</td><td>KUSNIYEM</td><td>P</td><td>01/01/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325001060002</td><td>ZAHROTUL AROFAH</td><td>P</td><td>10/01/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326012460002</td><td>SARPIAH</td><td>P</td><td>20/12/1946</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322310780002</td><td>M JA'FAR SHODIQ</td><td>L</td><td>23/10/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326806870001</td><td>BADI'US SHOLIHAH</td><td>P</td><td>28/06/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320805070001</td><td>M JA'FAR MAULANA</td><td>L</td><td>08/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320904800003</td><td>DUDI ASROFUL IBADI</td><td>L</td><td>09/04/1980</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507325104890003</td><td>ENI WIDIATI</td><td>P</td><td>11/04/1989</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325210080001</td><td>ZASKIA KALILA FAYZA</td><td>P</td><td>12/10/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002770001</td><td>NUR HAMID</td><td>L</td><td>10/02/1977</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322209860002</td><td>M FARHAN AGHIS WAHIDIAWAN </td><td>L</td><td>22/09/1986</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507326202850004</td><td>BIDAYAH</td><td>P</td><td>22/02/1985</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>GURU</td></tr>
 <tr><td>3507322511090001</td><td>M NAHAR SYIROJ WAHIDIAWAN</td><td>L</td><td>25/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320308710001</td><td>MAHFUD</td><td>L</td><td>03/08/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324808820004</td><td>WIWIT FALASIFA AGUSTINA</td><td>P</td><td>08/08/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324910030001</td><td>NAELIY RODIANA QOLBI</td><td>P</td><td>09/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321704090001</td><td>M SYAHIL FAHMI ULUM</td><td>L</td><td>17/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320309750004</td><td>HAMIM MABRURI</td><td>L</td><td>03/09/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107330003</td><td>SIARAH</td><td>P</td><td>01/07/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322805800002</td><td>HASAN AL BANA</td><td>L</td><td>28/05/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325312820004</td><td>BINTI ISNAINI</td><td>P</td><td>13/12/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322504070001</td><td>MAULANA YUSUF HAKIM</td><td>L</td><td>25/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321601710002</td><td>MUHAMMAD ARIF THOBRONI</td><td>L</td><td>16/01/1971</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507324801750001</td><td>MAHIROH NORMAWATI</td><td>P</td><td>08/01/1975</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507321307970001</td><td>MUHAMMAD HAILALA ULIL F</td><td>L</td><td>13/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324107030004</td><td>AZZA BILAK LA'I TAZKIYAH</td><td>P</td><td>01/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103350001</td><td>SAIFUL HADI</td><td>L</td><td>01/03/1935</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324702580002</td><td>ROMZIASIH</td><td>P</td><td>07/02/1958</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322109840002</td><td>ABDUL HAMID MUSTOFA</td><td>L</td><td>21/09/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321111860002</td><td>AHMAD RIADUS SHOLIHIN</td><td>L</td><td>11/11/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321009910001</td><td>AHMAD SIHABUDDIN</td><td>L</td><td>10/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320703940002</td><td>AHMAD SYAHRUL RIZKON</td><td>L</td><td>07/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320105000002</td><td>KHOIRUL AHMAD HADI</td><td>L</td><td>01/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320602030002</td><td>AHMAD MISBAHUL QOMARUDIN</td><td>L</td><td>06/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320107580001</td><td>ACHMAT DARDIRI</td><td>L</td><td>01/07/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325012660003</td><td>SUNARIYAH</td><td>P</td><td>10/12/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326712860002</td><td>TATIK FARIHA</td><td>P</td><td>27/12/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909950001</td><td>MIFTAHUL FAIZIN</td><td>L</td><td>09/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321212030002</td><td>M RISQI MUBARROK</td><td>L</td><td>12/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320608650001</td><td>DJAINURI</td><td>L</td><td>06/08/1965</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507324107730001</td><td>LULUK MASLUHATUL FIKRIYAH</td><td>P</td><td>01/07/1973</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507324901960002</td><td>CHARISMA 'UBAIDAH CHOLILIA</td><td>P</td><td>09/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325912000001</td><td>FIRDA ZUHROTUL MA'WA</td><td>P</td><td>19/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325605020001</td><td>PRITY MAYA MAFRUHAH</td><td>P</td><td>16/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321001660002</td><td>M MISBAHUL MUNIR</td><td>L</td><td>10/01/1966</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507325008720004</td><td>SAYIDATI ANISATUL KHOIRIYAH</td><td>P</td><td>10/08/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326408930003</td><td>MAULIDA KHOSYIA ROBBA</td><td>P</td><td>24/08/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326511990002</td><td>NADIYA SHULHI NABAWIYAH</td><td>P</td><td>25/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322207090001</td><td>MUHAMMAD ASYIQ ALMISBAH</td><td>L</td><td>22/07/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321001490001</td><td>BANI</td><td>L</td><td>10/01/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324102600003</td><td>SUMIATI</td><td>P</td><td>01/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321011790003</td><td>M JA'FAR SHODIQ</td><td>L</td><td>10/11/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326708860004</td><td>ROIHATUL HANIK</td><td>P</td><td>27/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320204900001</td><td>AHMAD SHOHEH MURODI</td><td>L</td><td>02/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321409550001</td><td>AHMAD KHUDLORI</td><td>L</td><td>14/09/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324811660003</td><td>SITI THOWILAH</td><td>P</td><td>08/11/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507327101950002</td><td>MAFTAKHATUL FADILATUS TSANIA</td><td>P</td><td>31/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321307710001</td><td>SUNARI</td><td>L</td><td>13/07/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324702760002</td><td>MUTHOMIMAH</td><td>P</td><td>07/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324303960002</td><td>LAILI FARIKAH</td><td>P</td><td>03/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323012030002</td><td>MUHAMMAD IRSYAD FARIKHIN</td><td>L</td><td>30/12/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101570018</td><td>SUPARMAN</td><td>L</td><td>01/01/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324111680001</td><td>NUR ASIH</td><td>P</td><td>01/11/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325701000002</td><td>SULFATU ROHMA</td><td>P</td><td>17/01/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326502030005</td><td>MILA RAIHANA</td><td>P</td><td>25/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322003080002</td><td>MUHAMMAD LUKMAN NURWAHID</td><td>L</td><td>20/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304760001</td><td>M ZAMZURI</td><td>L</td><td>03/04/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324508800001</td><td>YULIATIN</td><td>P</td><td>05/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324503030001</td><td>ELSA LUTFIYAH</td><td>P</td><td>05/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101710009</td><td>SAHRI</td><td>L</td><td>01/01/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326101790001</td><td>ULIFAH</td><td>P</td><td>21/01/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320402010001</td><td>YUDI PRASETYO</td><td>L</td><td>04/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101770018</td><td>MUHAMMAD ADNAN</td><td>L</td><td>01/01/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325602820001</td><td>WIDAYATI</td><td>P</td><td>16/02/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324908010001</td><td>SHELLY A'DAWIYAH</td><td>P</td><td>09/08/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323006090001</td><td>AHMAD SAUQI MUKTARAM</td><td>L</td><td>30/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101560018</td><td>ABDULLOH</td><td>L</td><td>01/01/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101550036</td><td>SUKARLIN</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320201940003</td><td>MASDAR KHOLILI</td><td>L</td><td>02/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324302960002</td><td>ROBIKATUL ARBA'IYAH</td><td>P</td><td>03/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101450070</td><td>SAYUTI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101430008</td><td>WASIS</td><td>L</td><td>01/01/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101440014</td><td>RIAMAH</td><td>P</td><td>01/01/1944</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326404460001</td><td>LASMINI</td><td>P</td><td>24/04/1946</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321602720001</td><td>SAYYIDINA ABBAS</td><td>L</td><td>16/02/1972</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321704750001</td><td>M THOLHAH FANANI</td><td>L</td><td>17/04/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>GURU</td></tr>
 <tr><td>3507326207880002</td><td>LAISA KHOTIK RAHSANA</td><td>P</td><td>22/07/1988</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324706920002</td><td>NAILA SHORIHAH FAUZIYAH</td><td>P</td><td>07/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321403720002</td><td>LUTFI AHMARI</td><td>L</td><td>14/03/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325502820002</td><td>SITI SHOFI'IYAH</td><td>P</td><td>15/02/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324306030001</td><td>IZZA MAHERA NAFIAH</td><td>P</td><td>03/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320906550001</td><td>NGATIRAN</td><td>L</td><td>09/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326004590003</td><td>YAHMI</td><td>P</td><td>20/04/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320704830001</td><td>MOHAMMAD FARID SO'IMI</td><td>L</td><td>07/04/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321206870002</td><td>M IRFAN AFIFI</td><td>L</td><td>12/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326406940001</td><td>EFI MUZAYYANA</td><td>P</td><td>24/06/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321203700002</td><td>SUGIANTO</td><td>L</td><td>12/03/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320110890001</td><td>OKKY HENDIE HERMAWAN</td><td>L</td><td>01/10/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326105970001</td><td>VERONICA AYU KARTINI</td><td>P</td><td>21/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101500020</td><td>MUHAMAD JUPRI</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101520013</td><td>SITI NURSA'ADAH</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321109790003</td><td>SAHAL SAIDI</td><td>L</td><td>11/09/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324205820003</td><td>SITI MASRUROH</td><td>P</td><td>02/05/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101910004</td><td>DEWI MUKHSONAH</td><td>P</td><td>01/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101960004</td><td>AHMAD GHOSIN NAFSI</td><td>L</td><td>01/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321708560001</td><td>TAMRIN</td><td>L</td><td>17/08/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101620035</td><td>RUHAMAH</td><td>P</td><td>01/01/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321601830001</td><td>IMAM BUKHORI</td><td>L</td><td>16/01/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324504850002</td><td>SILATUR ROHMI</td><td>P</td><td>05/04/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709930001</td><td>MUHAMMAD ILHAM LUDIN</td><td>L</td><td>07/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326207960002</td><td>SITI ZAENAB</td><td>P</td><td>22/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101400044</td><td>MUTMAINAH</td><td>P</td><td>01/01/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321405770001</td><td>ISWOKO</td><td>L</td><td>14/05/1977</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326105790001</td><td>LAILATUL MUAWANAH</td><td>P</td><td>21/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321212020002</td><td>MUHAMMAD FAIZIN</td><td>L</td><td>12/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324206090003</td><td>NABILA KAMALIA LUTFIYAH</td><td>P</td><td>02/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101500058</td><td>TUNI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320811840001</td><td>MUSTOFA TAMAMI</td><td>L</td><td>08/11/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320910400001</td><td>SAPARI</td><td>L</td><td>09/10/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324903500001</td><td>SITI MAISYAROH</td><td>P</td><td>09/03/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321902720002</td><td>NUR MUHAMMAD SUTIK</td><td>L</td><td>19/02/1972</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507321205770006</td><td>YONI KASIAN</td><td>L</td><td>12/05/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320101500002</td><td>SAMSUL HADI</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101540017</td><td>SARIATUN</td><td>P</td><td>01/01/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320202840002</td><td>MUHAMAD SIFAUL ABADI</td><td>L</td><td>02/02/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101500003</td><td>KASERO</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101460021</td><td>TIARAH</td><td>P</td><td>01/01/1946</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101510018</td><td>TOMO</td><td>L</td><td>01/01/1951</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321907690002</td><td>SUWAJI</td><td>L</td><td>19/07/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324511780001</td><td>MUKHLISOTIN</td><td>P</td><td>05/11/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325410990006</td><td>AINUN KHOIROTUL UMMAH</td><td>P</td><td>14/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325411030003</td><td>ALFA MAGHFIROH RAMADHANI</td><td>P</td><td>14/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324202080001</td><td>WARDA NUGRAHAINI KUBRO</td><td>P</td><td>02/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322707600001</td><td>NURASYIQ</td><td>L</td><td>27/07/1960</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507326004680001</td><td>SRIWATI</td><td>P</td><td>20/04/1968</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320808920002</td><td>M AGHIST HABIBI</td><td>L</td><td>08/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323012020002</td><td>KAFILUL UMAM</td><td>L</td><td>30/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101650053</td><td>WASINAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326011900001</td><td>SITI BADIUL ZAHRO</td><td>P</td><td>20/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326012910002</td><td>ENDANG WINARSIH</td><td>P</td><td>20/12/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325308400001</td><td>MARKAYAH</td><td>P</td><td>13/08/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101540018</td><td>MAHMUDAH</td><td>P</td><td>01/01/1954</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325501820001</td><td>LILIK NURYATI</td><td>P</td><td>15/01/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322101760002</td><td>DEDI SUPANDI</td><td>L</td><td>21/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327103030003</td><td>ALFINA DEVIYANTI</td><td>P</td><td>31/03/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320212520001</td><td>LASIADI</td><td>L</td><td>02/12/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101450048</td><td>SUNARTI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321009890002</td><td>MAHFUD HADI</td><td>L</td><td>10/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321109890004</td><td>RIDUWAN KHABIBI</td><td>L</td><td>11/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320204960001</td><td>AHMAD MUSLIH</td><td>L</td><td>02/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101500042</td><td>SARIYAM</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321706760004</td><td>ZAINUDIN</td><td>L</td><td>17/06/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320101840015</td><td>MAHMUD WAHYUDI ASARI</td><td>L</td><td>01/01/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322403880001</td><td>SUYANTO</td><td>L</td><td>24/03/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507321304900002</td><td>SUNARIYO</td><td>L</td><td>13/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108590021</td><td>SAJIB</td><td>L</td><td>01/08/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101650054</td><td>SUMARIYAH</td><td>P</td><td>01/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321908840003</td><td>MIFTAKUL HARIRI</td><td>L</td><td>19/08/1984</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>GURU</td></tr>
 <tr><td>3507320707870002</td><td>AHMAD BAJURI</td><td>L</td><td>07/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325112920001</td><td>LILIK ZUMAROH</td><td>P</td><td>11/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320110620001</td><td>SAMSU</td><td>L</td><td>01/10/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG KAYU</td></tr>
 <tr><td>3507324101660011</td><td>ALIYATUL WINARIYAH</td><td>P</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320606920001</td><td>M FAHIMU FAIZIN</td><td>L</td><td>06/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326711980002</td><td>LAILA BANA MUSTYASFA</td><td>P</td><td>27/11/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101580040</td><td>ABDUL MANAF</td><td>L</td><td>01/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101600064</td><td>KASEMI</td><td>P</td><td>01/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321303870002</td><td>ANANG WAHID MUSTOFA</td><td>L</td><td>13/03/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324206920004</td><td>EVA MISBAHUL ZUHRIYAH</td><td>P</td><td>02/06/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322402960002</td><td>IBNU ATHO'ILAH ISKANDAR</td><td>L</td><td>24/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325607010001</td><td>MAYA MUAFIQ AZIZAH</td><td>P</td><td>16/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320110480002</td><td>AHMAD ZAINI</td><td>L</td><td>01/10/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101520016</td><td>SITI AMINAH</td><td>P</td><td>01/01/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327107740002</td><td>ANISATUL FATCHIYAH</td><td>P</td><td>31/07/1974</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324411760001</td><td>BADIUL BARIROH</td><td>P</td><td>04/11/1976</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320303830004</td><td>YAZID KHASANI</td><td>L</td><td>03/03/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326505910002</td><td>MUZAYYANAH</td><td>P</td><td>25/05/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321008940002</td><td>MUHAMMAD ARWANI ZAINI</td><td>L</td><td>10/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321008620003</td><td>SAHAR HARIANTO</td><td>L</td><td>10/08/1962</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325009710001</td><td>SIANTI</td><td>P</td><td>10/09/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326809870004</td><td>EKO LILIS SETYOWATI</td><td>P</td><td>28/09/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325205900001</td><td>YENIARI DWI SUSANTI</td><td>P</td><td>12/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325209960003</td><td>DIAH DEWI TRIAYU</td><td>P</td><td>12/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326202010003</td><td>SILVIA ZABILIA PARAMITA</td><td>P</td><td>22/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324608080004</td><td>NAILILA ALISYA RAHMAWATI</td><td>P</td><td>06/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324608080003</td><td>NEILA AISYA RAHMAWATI</td><td>P</td><td>06/08/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324312430001</td><td>KASENI</td><td>P</td><td>03/12/1943</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322303780001</td><td>BUDIONO</td><td>L</td><td>23/03/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324507830004</td><td>KRISTIN ULYANINGSIH</td><td>P</td><td>05/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322010840001</td><td>RUDI HARTONO PURWANTO</td><td>L</td><td>20/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326907900002</td><td>YUSTIN SINTA ANGGRAENI</td><td>P</td><td>29/07/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323001100001</td><td>HANNY ALFIAN SAPUTRA PRATAMA</td><td>L</td><td>30/01/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322905830002</td><td>SYUKUR MA'RUF</td><td>L</td><td>29/05/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324702900001</td><td>RISKI DWI LESTARI</td><td>P</td><td>07/02/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322103080001</td><td>MUHAMMAD ZAMRONI</td><td>L</td><td>21/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321207860003</td><td>DEDY IRAWAN</td><td>L</td><td>12/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324509970002</td><td>ZANATUL FATMA W</td><td>P</td><td>05/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320703440001</td><td>SUPADI</td><td>L</td><td>07/03/1944</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507324709570003</td><td>W ENDANG MARIYANI</td><td>P</td><td>07/09/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321201920004</td><td>DIDIT HERMOYO</td><td>L</td><td>12/01/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321201920003</td><td>AGUNG UMBAR ANDRI WIBOWO</td><td>L</td><td>12/01/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321204750001</td><td>SUPARTO</td><td>L</td><td>12/04/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326504840003</td><td>LUSIANA</td><td>P</td><td>25/04/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322202060001</td><td>ZUFAN PAHRUL ILMI</td><td>L</td><td>22/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322504770002</td><td>SAKHIDIN</td><td>L</td><td>25/04/1977</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326004770002</td><td>ANA KUSRINA</td><td>P</td><td>20/04/1977</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324808050001</td><td>ALFITA KAYASA ASSAKNA</td><td>P</td><td>08/08/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320906860002</td><td>AMAT SISWOYO</td><td>L</td><td>09/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324507870002</td><td>YETI KUSRINI</td><td>P</td><td>05/07/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326903060002</td><td>NEZA INDRIA PRATAMA</td><td>P</td><td>29/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322606790005</td><td>OIM DURAHIM</td><td>L</td><td>26/06/1979</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325002800001</td><td>LAILATUL MUKAROMAH</td><td>P</td><td>10/02/1980</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320710060002</td><td>NAZZALA RACHQO IBRAHIM</td><td>L</td><td>07/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201380001</td><td>KUSNAN</td><td>L</td><td>12/01/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325212520003</td><td>SULAMI</td><td>P</td><td>12/12/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326101340001</td><td>SUMINI</td><td>P</td><td>21/01/1934</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320706880001</td><td>HADI KURNIAWAN</td><td>L</td><td>07/06/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321107650004</td><td>JUMAI</td><td>L</td><td>11/07/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325905720001</td><td>IDA YATI</td><td>P</td><td>19/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325511930001</td><td>PUTRI KURNIA TAMA</td><td>P</td><td>15/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324701970003</td><td>DEVI TASARI</td><td>P</td><td>07/01/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324709570001</td><td>WIWIT ENDANG MURIANI</td><td>P</td><td>07/09/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325708810003</td><td>IIS IRMAYANTI</td><td>P</td><td>17/08/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322510840001</td><td>DIDIT HERMOYO</td><td>L</td><td>25/10/1984</td><td>Islam</td><td>Belum Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321212500004</td><td>M ABD QODIR S</td><td>L</td><td>12/12/1950</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325506550001</td><td>SITI FATIMAH</td><td>P</td><td>15/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321310710002</td><td>SUDIONO</td><td>L</td><td>13/10/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324512800002</td><td>SETIYO RAHAYU</td><td>P</td><td>05/12/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326808010002</td><td>FRISKA DITA WIDIANA</td><td>P</td><td>28/08/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324308360001</td><td>RIATUN</td><td>P</td><td>03/08/1936</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321604640001</td><td>ABIYAZID BUSTOMI</td><td>L</td><td>16/04/1964</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325201710003</td><td>IKA KHUSNUL KHOTIMAH</td><td>P</td><td>12/01/1971</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321011890001</td><td>MUHAMMAD SYAFI WAHID M</td><td>L</td><td>10/11/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322805970001</td><td>MUHAMMAD AINUR RIZAL F</td><td>L</td><td>28/05/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321111650001</td><td>SUNARTO</td><td>L</td><td>11/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325011690003</td><td>MARNI</td><td>P</td><td>10/11/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322503900001</td><td>IVA PRASETIA DWI R N</td><td>L</td><td>25/03/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326310030002</td><td>LAILATUL MUKHAROMA</td><td>P</td><td>23/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321011160001</td><td>JARI</td><td>L</td><td>10/11/1916</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325307200001</td><td>MARTI</td><td>P</td><td>13/07/1920</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321209700001</td><td>YANTO</td><td>L</td><td>12/09/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325006750003</td><td>MUTMAINAH</td><td>P</td><td>10/06/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325511930002</td><td>IDA SAFITRI</td><td>P</td><td>15/11/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321011550002</td><td>KUSNADI</td><td>L</td><td>10/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324906600002</td><td>YATEMI</td><td>P</td><td>09/06/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321411780002</td><td>PUJIANTO</td><td>L</td><td>14/11/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321010850001</td><td>IWAN WAHYUDI</td><td>L</td><td>10/10/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321009550001</td><td>TUKIYADI</td><td>L</td><td>10/09/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324805620001</td><td>YATINAH</td><td>P</td><td>08/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321001980001</td><td>WAHYU</td><td>L</td><td>10/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321212000001</td><td>RENDI CERU SAIFUDIN</td><td>L</td><td>12/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321708450006</td><td>REMI</td><td>L</td><td>17/08/1945</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325006650003</td><td>RIAMUN</td><td>P</td><td>10/06/1965</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320602730002</td><td>SOLIKIN</td><td>L</td><td>06/02/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326609710001</td><td>ANASTASIA NING</td><td>P</td><td>26/09/1971</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PERAWAT</td></tr>
 <tr><td>3507325007940002</td><td>SALMA YULIANA KOSALA</td><td>P</td><td>10/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326512950002</td><td>YASMINE SARASLIA FATMA</td><td>P</td><td>25/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322108780002</td><td>AGUS SISWANTO</td><td>L</td><td>21/08/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326012780002</td><td>ISTU NINGSIH</td><td>P</td><td>20/12/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325105020002</td><td>SISFARISA AZZAHRA</td><td>P</td><td>11/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320504040003</td><td>SISCHOZIK AHMAD</td><td>L</td><td>05/04/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321006820001</td><td>MISWANTO</td><td>L</td><td>10/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325201850002</td><td>YUNARSIH</td><td>P</td><td>12/01/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324309060001</td><td>NADIN EKA SEPTIA PUTRI</td><td>P</td><td>03/09/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320408800001</td><td>JUHDIN</td><td>L</td><td>04/08/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712780001</td><td>LI'ATI</td><td>P</td><td>07/12/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324401020001</td><td>KHARISMA AYSYAH PUTRI</td><td>P</td><td>04/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320705060002</td><td>HABIB M ARDIANSYAH</td><td>L</td><td>07/05/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321408700001</td><td>MARSIDIK HENDRA KURNIAWAN</td><td>L</td><td>14/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326506750001</td><td>LINDA NANIK MULYANINGSIH</td><td>P</td><td>25/06/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322911960001</td><td>AHMAD FACHRIS MADJID. N</td><td>L</td><td>29/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320911030001</td><td>ALBERT GEOFANI MADJID. R</td><td>L</td><td>09/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320208720002</td><td>HARTANTO</td><td>L</td><td>02/08/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324607730003</td><td>ERWIN YUNIARTI</td><td>P</td><td>06/07/1973</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326706950001</td><td>NIMAS WIGIH UTAMI HARTANTO</td><td>P</td><td>27/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320903000002</td><td>IVAN FAUZI H</td><td>L</td><td>09/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320606020001</td><td>FAIZAL KURNIA AGUNG H</td><td>L</td><td>06/06/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325406380001</td><td>TASMINI</td><td>P</td><td>14/06/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321210400004</td><td>SAHLAN</td><td>L</td><td>12/10/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324203490003</td><td>TUPAH</td><td>P</td><td>02/03/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320511590001</td><td>YAHMIN</td><td>L</td><td>05/11/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326406700001</td><td>SITI CHOLIPAH</td><td>P</td><td>24/06/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326004820001</td><td>YATIN SUSILO</td><td>P</td><td>20/04/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322002800003</td><td>ADI SUGIANTO</td><td>L</td><td>20/02/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324912000001</td><td>AISAH PUTRI</td><td>P</td><td>09/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327110030001</td><td>ARISKA PUTRI</td><td>P</td><td>31/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321211300002</td><td>ROSELAN</td><td>L</td><td>12/11/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325512430001</td><td>SUTINI</td><td>P</td><td>15/12/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327112270005</td><td>WARIEM</td><td>P</td><td>31/12/1927</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201500003</td><td>NASERUN</td><td>L</td><td>12/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324602550017</td><td>DARINAH</td><td>P</td><td>06/02/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320805860004</td><td>ZAINAL ARIPIN</td><td>L</td><td>08/05/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH PETERNAKAN</td></tr>
 <tr><td>3507322912910001</td><td>ANDIK ANTO</td><td>L</td><td>29/12/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH PETERNAKAN</td></tr>
 <tr><td>3507321205450001</td><td>SARWI</td><td>L</td><td>12/05/1945</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325202480001</td><td>RANTIMAH</td><td>P</td><td>12/02/1948</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325506780009</td><td>IDA PARININGSIH</td><td>P</td><td>15/06/1978</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>INDUSTRI</td></tr>
 <tr><td>3507320106960001</td><td>M SAIFUDIN SB</td><td>L</td><td>01/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321005650002</td><td>WARNO</td><td>L</td><td>10/05/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325207670005</td><td>NGATIYAH</td><td>P</td><td>12/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320911910001</td><td>BIANTO</td><td>L</td><td>09/11/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH PETERNAKAN</td></tr>
 <tr><td>3507320907010003</td><td>BAGUS SAPUTRA</td><td>L</td><td>09/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320302650002</td><td>SUPARNO</td><td>L</td><td>03/02/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324902760001</td><td>TUTIK</td><td>P</td><td>09/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327105030002</td><td>DEWI MASITA</td><td>P</td><td>31/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323003060001</td><td>ACHMAD FANDI KURNIAWAN</td><td>L</td><td>30/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321507720003</td><td>SIADI</td><td>L</td><td>15/07/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326002710002</td><td>MUDRIKA</td><td>P</td><td>20/02/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325809910002</td><td>YANI VELAYATI</td><td>P</td><td>18/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320307970002</td><td>BAYU SANJAYA</td><td>L</td><td>03/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324108550018</td><td>LAMINI</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325507630002</td><td>SUNARTI</td><td>P</td><td>15/07/1963</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321011800001</td><td>JUMADI</td><td>L</td><td>10/11/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321409690002</td><td>MESERI ARIS</td><td>L</td><td>14/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011720002</td><td>ANIK</td><td>P</td><td>10/11/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325809910003</td><td>RENI SEPITA SARI</td><td>P</td><td>18/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321608940001</td><td>ISWANDI AGUS CAHYONO</td><td>L</td><td>16/08/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325407030002</td><td>HENIS LULUS YULIANA</td><td>P</td><td>14/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321710700002</td><td>SUYONO SARIP</td><td>L</td><td>17/10/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324803830001</td><td>IKA SUSANTI</td><td>P</td><td>08/03/1983</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321703010003</td><td>LAVANDY PUTRA PERDANA</td><td>L</td><td>17/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326002110001</td><td>FEBRIANA AYU RAFIF SABILLAH</td><td>P</td><td>20/02/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102620004</td><td>KARJONO</td><td>L</td><td>01/02/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325012660002</td><td>SARIYAHMI</td><td>P</td><td>10/12/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321909750004</td><td>MULYONO</td><td>L</td><td>19/09/1975</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322212830001</td><td>EDI SUSANTO</td><td>L</td><td>22/12/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325502910002</td><td>SITI ZUBAIDAH</td><td>P</td><td>15/02/1991</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324104600006</td><td>LIANAH</td><td>P</td><td>01/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322112770003</td><td>RAWANDOYO</td><td>L</td><td>21/12/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325408770001</td><td>SUDARSINI</td><td>P</td><td>14/08/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321208030003</td><td>ALFINO EKA RANGADA</td><td>L</td><td>12/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326910060002</td><td>RANI DWI RAHMAWATI</td><td>P</td><td>29/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321610790001</td><td>SUTOIP</td><td>L</td><td>16/10/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325410800002</td><td>SURATEMI</td><td>P</td><td>14/10/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321903050001</td><td>RACHMAD ALFIN NURROHHIM</td><td>L</td><td>19/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322710740002</td><td>YANI KRISDIANTO</td><td>L</td><td>27/10/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325004840002</td><td>SUNANIK</td><td>P</td><td>10/04/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324104320002</td><td>SAMI</td><td>P</td><td>01/04/1932</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321005830004</td><td>KUSMALI</td><td>L</td><td>10/05/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324206870003</td><td>IDA MARLINA</td><td>P</td><td>02/06/1987</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320601080001</td><td>M ARDAN MUSYAFAK ZEIN</td><td>L</td><td>06/01/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321011710003</td><td>AMIN RAGIL</td><td>L</td><td>10/11/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325304780004</td><td>NUR KOMARIYA</td><td>P</td><td>13/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326602060001</td><td>INTAN ZAHRO NORAMIN</td><td>P</td><td>26/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322402830001</td><td>HERMAN HERBIANSYAH</td><td>L</td><td>24/02/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326703880002</td><td>INDAYATININGSIH</td><td>P</td><td>27/03/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325508060001</td><td>SOVIA CHARIN TAMALA</td><td>P</td><td>15/08/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324606530001</td><td>SUMINI</td><td>P</td><td>06/06/1953</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321102750004</td><td>SUGENG YULIANTO</td><td>L</td><td>11/02/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324510800002</td><td>LINDA WATI</td><td>P</td><td>05/10/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321509810001</td><td>SIANTO</td><td>L</td><td>15/09/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325811810002</td><td>LAILATUL ZUKRIYAH</td><td>P</td><td>18/11/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326605060003</td><td>MEISYA AYUPUTRI LAILIA</td><td>P</td><td>26/05/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322705840002</td><td>WITO ADI CAHYONO</td><td>L</td><td>27/05/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324905900003</td><td>MAR'ATUS SHOLIHAH</td><td>P</td><td>09/05/1990</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327007100001</td><td>ANDIRA JIHAN ROSYIDAH</td><td>P</td><td>30/07/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320509420002</td><td>BANI </td><td>L</td><td>05/09/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108530021</td><td>NIK SUTRAMI</td><td>P</td><td>01/08/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321005880005</td><td>NASRUL MABRURI</td><td>L</td><td>10/05/1988</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325108890003</td><td>NOVI PRASETYO ARININGSIH</td><td>P</td><td>11/08/1989</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322601780004</td><td>SUKAMTO</td><td>L</td><td>26/01/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507325101830005</td><td>WINARSIH</td><td>P</td><td>11/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PENSIUNAN</td></tr>
 <tr><td>3507325101020003</td><td>DELVISTA PEPY P</td><td>P</td><td>11/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324510060002</td><td>PINKY RADITA</td><td>P</td><td>05/10/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321708770003</td><td>DASUKI AFANDI</td><td>L</td><td>17/08/1977</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324803830005</td><td>SETIOWATI</td><td>P</td><td>08/03/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326206060003</td><td>QUROTUL A'YUN</td><td>P</td><td>22/06/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101110003</td><td>FARIZA SALMAH</td><td>P</td><td>01/01/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320610720003</td><td>SUSMINTO</td><td>L</td><td>06/10/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324909800004</td><td>IRAWATI NINGSIH</td><td>P</td><td>09/09/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322701030002</td><td>ADNAN SATRIYA RHEIHANTORO</td><td>L</td><td>27/01/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325111090001</td><td>ZELLINA SHAFA DAMAYANTI</td><td>P</td><td>11/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322110790002</td><td>RASID</td><td>L</td><td>21/10/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325005850004</td><td>SRI WAHYU NINGSIH</td><td>P</td><td>10/05/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322611050001</td><td>MUKHAMMAD RIFKY SETIAWAN</td><td>L</td><td>26/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320711830002</td><td>DIDIK WINANTO</td><td>L</td><td>07/11/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326405870002</td><td>IDATUL FITRIA</td><td>P</td><td>24/05/1987</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325201050001</td><td>VITRA HASTI PRATAMA</td><td>P</td><td>12/01/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321710580001</td><td>RABAT</td><td>L</td><td>17/10/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324407670004</td><td>JUNIK</td><td>P</td><td>04/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325310910001</td><td>DWI ANDRI ANI</td><td>P</td><td>13/10/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321507030002</td><td>AFANDI RAHMANSAH</td><td>L</td><td>15/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3529012812830002</td><td>AGUS ARYANTO</td><td>L</td><td>28/12/1983</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326610850001</td><td>SUNAK'IYAH</td><td>P</td><td>26/10/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320607620004</td><td>SUTRISNO</td><td>L</td><td>06/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325312670002</td><td>TUTIK</td><td>P</td><td>13/12/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320512840001</td><td>SISWANTO</td><td>L</td><td>05/12/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325208900002</td><td>DENI RIRIN KUSRINA</td><td>P</td><td>12/08/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324202030001</td><td>SITI NOR HALIZA</td><td>P</td><td>02/02/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321112590001</td><td>SUKARDI</td><td>L</td><td>11/12/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325109670001</td><td>SUNARTI</td><td>P</td><td>11/09/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326101910002</td><td>RENI YANUAR SOFIANA</td><td>P</td><td>21/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320705570001</td><td>LI'ADI</td><td>L</td><td>07/05/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325002620001</td><td>YAHMI</td><td>P</td><td>10/02/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507321211520001</td><td>RIADI</td><td>L</td><td>12/11/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324104600007</td><td>LI'ANAH</td><td>P</td><td>01/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325002450003</td><td>SAMINI</td><td>P</td><td>10/02/1945</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507323112710003</td><td>DARTO</td><td>L</td><td>31/12/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325712770001</td><td>LILIK INDRIANA</td><td>P</td><td>17/12/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321802980001</td><td>BAGAS BIMANTORO</td><td>L</td><td>18/02/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326511040002</td><td>ADINDA SAFITRI</td><td>P</td><td>25/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320312500001</td><td>SUPARDI</td><td>L</td><td>03/12/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324108550008</td><td>DUNIANTI</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320703860001</td><td>JIONO</td><td>L</td><td>07/03/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320610900002</td><td>SAPUTRO RIWANTO</td><td>L</td><td>06/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324910670002</td><td>HERMIN</td><td>P</td><td>09/10/1967</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507323008890002</td><td>JOKO PRIYANTO</td><td>L</td><td>30/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322006960002</td><td>JAINUL ROZIQIN</td><td>L</td><td>20/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321009450001</td><td>PANI</td><td>L</td><td>10/09/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325208560001</td><td>SRIAMI</td><td>P</td><td>12/08/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321110460001</td><td>KASENO</td><td>L</td><td>11/10/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108550017</td><td>PAINI</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321112550003</td><td>JEMAIN</td><td>L</td><td>11/12/1955</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325310450001</td><td>RATMINI</td><td>P</td><td>13/10/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325008680002</td><td>NGATINI</td><td>P</td><td>10/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325707890001</td><td>KUSNUL KHOTIMAH</td><td>P</td><td>17/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323006710001</td><td>AHMAD ZAINURI</td><td>L</td><td>30/06/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325112700002</td><td>ENI KUSRINI</td><td>P</td><td>11/12/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321501950001</td><td>BAYU PRASETYO</td><td>L</td><td>15/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320103430004</td><td>WAGIRAN</td><td>L</td><td>01/03/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325606510001</td><td>ALFIYAH</td><td>P</td><td>16/06/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321109770002</td><td>ADI SISWANTO</td><td>L</td><td>11/09/1977</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320506970002</td><td>RICO WAHYU SAPUTRO</td><td>L</td><td>05/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321704990002</td><td>FERDIAN DWI  SAPUTRO</td><td>L</td><td>17/04/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321705620003</td><td>LADIMAN</td><td>L</td><td>17/05/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325809720001</td><td>SUMARTI</td><td>P</td><td>18/09/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326505880003</td><td>WIWIT SUMILA</td><td>P</td><td>25/05/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325102930003</td><td>SRI NURHAYATI</td><td>P</td><td>11/02/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325803080001</td><td>SILVI FERLINDAH SARI</td><td>P</td><td>18/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304720002</td><td>SANIADI</td><td>L</td><td>03/04/1972</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325011750004</td><td>MESIYATI</td><td>P</td><td>10/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325011750003</td><td>MILA</td><td>P</td><td>10/11/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321101940001</td><td>SAJI</td><td>L</td><td>11/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320907960001</td><td>RIYAN</td><td>L</td><td>09/07/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325307990002</td><td>YULIA ILVIANA</td><td>P</td><td>13/07/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321005510002</td><td>PONIMIN</td><td>L</td><td>10/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108640007</td><td>SULIAH</td><td>P</td><td>01/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320510810002</td><td>SUGIANTO</td><td>L</td><td>05/10/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507326212450001</td><td>SEMINEM</td><td>P</td><td>22/12/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321510540001</td><td>SUWIKNYO</td><td>L</td><td>15/10/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325405670002</td><td>SITI ASIYAH</td><td>P</td><td>14/05/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325308810004</td><td>IIS ISMAYATI</td><td>P</td><td>13/08/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325105830002</td><td>KUSTINI</td><td>P</td><td>11/05/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325603870003</td><td>SRIASIH</td><td>P</td><td>16/03/1987</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320909950003</td><td>SAIFUL ANAM</td><td>L</td><td>09/09/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325303060001</td><td>SELA PERMATA SARI</td><td>P</td><td>13/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324403010001</td><td>TINI MAFDA LENA </td><td>P</td><td>04/03/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322002570002</td><td>MESONO</td><td>L</td><td>20/02/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325203610004</td><td>BIBIT</td><td>P</td><td>12/03/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320109770002</td><td>GUNAWAN</td><td>L</td><td>01/09/1977</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322705810001</td><td>BUDIONO</td><td>L</td><td>27/05/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324211900001</td><td>ELOK ANDINI</td><td>P</td><td>02/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325412970002</td><td>RIKE WULANDARI</td><td>P</td><td>14/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321702520001</td><td>RAWI</td><td>L</td><td>17/02/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325701550001</td><td>NURHAYATI</td><td>P</td><td>17/01/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321809890006</td><td>HENDRA SUWITO</td><td>L</td><td>18/09/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320808570001</td><td>SUKARTIWAN</td><td>L</td><td>08/08/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325008600002</td><td>PONIAH</td><td>P</td><td>10/08/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322511830002</td><td>HARIANTO</td><td>L</td><td>25/11/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322602690001</td><td>BUARI</td><td>L</td><td>26/02/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326308760001</td><td>SUCIANI</td><td>P</td><td>23/08/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321201930001</td><td>SABIB KURNIAWAN</td><td>L</td><td>12/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325612970001</td><td>SOFI KURNIAWATI</td><td>P</td><td>16/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320102400004</td><td>DAERI</td><td>L</td><td>01/02/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201590010</td><td>MULYONO</td><td>L</td><td>12/01/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326202690001</td><td>WARSIATI</td><td>P</td><td>22/02/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325212930003</td><td>MAYA DWI LESTARI</td><td>P</td><td>12/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325005020003</td><td>TRIYA NOVITASARI</td><td>P</td><td>10/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321502800001</td><td>YULIANTO</td><td>L</td><td>15/02/1980</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325307880001</td><td>IRMA DAMAYANTI</td><td>P</td><td>13/07/1988</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324102090001</td><td>VIVY CALYSTA ECHA PUTRI</td><td>P</td><td>01/02/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324108450003</td><td>RIANI</td><td>P</td><td>01/08/1945</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507323006500001</td><td>PURNOMO</td><td>L</td><td>30/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108550021</td><td>SULIANAH</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321106440001</td><td>JEMAIN</td><td>L</td><td>11/06/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325311800002</td><td>SUYANTI</td><td>P</td><td>13/11/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107700007</td><td>UTOMO</td><td>L</td><td>01/07/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326710010001</td><td>SEVIRA EKA WULANDARI</td><td>P</td><td>27/10/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325405110001</td><td>TALITHA AZMI HUWAIDAH</td><td>P</td><td>14/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320807630001</td><td>SIONO</td><td>L</td><td>08/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507325007720003</td><td>JUMI</td><td>P</td><td>10/07/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325702900001</td><td>RAHAYU IDA LAFARID</td><td>P</td><td>17/02/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320109960001</td><td>ANGGARA ADI SAPUTRA</td><td>L</td><td>01/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324301020001</td><td>PUTRI AMANDA REVALESTINA</td><td>P</td><td>03/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320111630002</td><td>TURIDI NURCAHYO</td><td>L</td><td>01/11/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324105680003</td><td>LI'ATI</td><td>P</td><td>01/05/1968</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326701020001</td><td>SINDI DWIAJENG PRAMUDITA</td><td>P</td><td>27/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324506450001</td><td>SARTI</td><td>P</td><td>05/06/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322702500002</td><td>SUPANI</td><td>L</td><td>27/02/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325103580001</td><td>SUMIATI</td><td>P</td><td>11/03/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101760003</td><td>SULIANTI</td><td>P</td><td>01/01/1976</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321311800001</td><td>SUYANTO</td><td>L</td><td>13/11/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321005000004</td><td>YOGI PRASETIYO</td><td>L</td><td>10/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320306710002</td><td>SARLI</td><td>L</td><td>03/06/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101500043</td><td>WIJI/SRI MUJIATI</td><td>P</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326101770003</td><td>SUDARMANI</td><td>P</td><td>21/01/1977</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507320304020001</td><td>ARRINIDO ALFA KUSUMA</td><td>L</td><td>03/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325103250002</td><td>SARIMAH</td><td>P</td><td>11/03/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321608740001</td><td>AGUS SUYANTONO</td><td>L</td><td>16/08/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325503780003</td><td>RODIYAH</td><td>P</td><td>15/03/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320402000001</td><td>MUHAMAD WIBI CANDRA DEVA</td><td>L</td><td>04/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321102470001</td><td>KEMIS</td><td>L</td><td>11/02/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325203630002</td><td>MESTRI</td><td>P</td><td>12/03/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321910840001</td><td>YULIANTO</td><td>L</td><td>19/10/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320502680002</td><td>SAMUN</td><td>L</td><td>05/02/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324206760002</td><td>NANIK</td><td>P</td><td>02/06/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322912940002</td><td>HENDRO SUHANDOKO</td><td>L</td><td>29/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325804020002</td><td>ERNIA RATNA WATI</td><td>P</td><td>18/04/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326105700002</td><td>EINIK KUSWATI KASANAH</td><td>P</td><td>21/05/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322703730002</td><td>CUPANI</td><td>L</td><td>27/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326110920001</td><td>WIDIA NANDA P</td><td>P</td><td>21/10/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326701010002</td><td>ANDIA WATI</td><td>P</td><td>27/01/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320907390002</td><td>TASEMAN</td><td>L</td><td>09/07/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325812860001</td><td>BAROCHATUL</td><td>P</td><td>18/12/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321212890004</td><td>HADI MULYONO</td><td>L</td><td>12/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321301580002</td><td>DASUKI</td><td>L</td><td>13/01/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326910670001</td><td>ROHMAH</td><td>P</td><td>29/10/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326707810003</td><td>IDA DWI ASTUTIK</td><td>P</td><td>27/07/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321001740001</td><td>ILHAM</td><td>L</td><td>10/01/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322111020001</td><td>KARISMA</td><td>L</td><td>21/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321206560001</td><td>SAMSURI</td><td>L</td><td>12/06/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325603710003</td><td>AMINAH</td><td>P</td><td>16/03/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320404900002</td><td>MAMANG KRISDIANTO</td><td>L</td><td>04/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321008010002</td><td>ANANDA AGUS SAPUTRA</td><td>L</td><td>10/08/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321510790004</td><td>MARDIANTO</td><td>L</td><td>15/10/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326006840005</td><td>JUMA'ATI</td><td>P</td><td>20/06/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322607030002</td><td>IFANI YOGI PRATAMA</td><td>L</td><td>26/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320603850001</td><td>SUTOYO</td><td>L</td><td>06/03/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326412860004</td><td>ANALISA</td><td>P</td><td>24/12/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324406080001</td><td>NAZWA TEA SALSABILLA</td><td>P</td><td>04/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325507420003</td><td>SARIMAH</td><td>P</td><td>15/07/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326009670001</td><td>WARTINI</td><td>P</td><td>20/09/1967</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321504930001</td><td>ANDIK BASKORO</td><td>L</td><td>15/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326508030003</td><td>DIANITA DWI AGUSTIN</td><td>P</td><td>25/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325504900002</td><td>ENDAH EKA YUWANTI</td><td>P</td><td>15/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321507780005</td><td>SUGENG ALAK</td><td>L</td><td>15/07/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324203850003</td><td>SULIKAH</td><td>P</td><td>02/03/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323006090003</td><td>GALIH KUSUMA</td><td>L</td><td>30/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322712810003</td><td>SUPARNO</td><td>L</td><td>27/12/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325511830003</td><td>NELIA KONTESA</td><td>P</td><td>15/11/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324104070001</td><td>SARRY DAJAIS WIRASTI</td><td>P</td><td>01/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326503090003</td><td>BUNGA AISYAH NURAINA</td><td>P</td><td>25/03/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325204320001</td><td>PI'YAH</td><td>P</td><td>12/04/1932</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321409630001</td><td>SUDIBYO</td><td>L</td><td>14/09/1963</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324304700002</td><td>RIAMAH</td><td>P</td><td>03/04/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320510900001</td><td>FIDI MADYA STYAWAN</td><td>L</td><td>05/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324212970001</td><td>VINDA NUR MADYA A</td><td>P</td><td>02/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321205530001</td><td>SAMELAN</td><td>L</td><td>12/05/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108590020</td><td>PI'ATUN</td><td>P</td><td>01/08/1959</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320904900005</td><td>MOCHAMMAD SHOLEHUDDIN</td><td>L</td><td>09/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322206650002</td><td>SUHARTONO</td><td>L</td><td>22/06/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104700004</td><td>YATI</td><td>P</td><td>21/04/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321409900001</td><td>WAHYUDI</td><td>L</td><td>14/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320903000001</td><td>DWI FRENADA</td><td>L</td><td>09/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321604500001</td><td>MULYONO</td><td>L</td><td>16/04/1950</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108550020</td><td>MISTIN</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322303760001</td><td>SUGIONO</td><td>L</td><td>23/03/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324112810001</td><td>SULISTYOWATI</td><td>P</td><td>01/12/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322106450001</td><td>PAIDI</td><td>L</td><td>21/06/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324302620002</td><td>LAMIA</td><td>P</td><td>03/02/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322307840001</td><td>PARIONO</td><td>L</td><td>23/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321212500002</td><td>ABDUL MUNTALIB</td><td>L</td><td>12/12/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324511560002</td><td>SURYATI</td><td>P</td><td>05/11/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323009740002</td><td>EKO WAHYUDI</td><td>L</td><td>30/09/1974</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321212900003</td><td>HADI MULYONO</td><td>L</td><td>12/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321608950006</td><td>HALIM SUTOYO</td><td>L</td><td>16/08/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101510017</td><td>SUHARTO</td><td>L</td><td>01/01/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325203610003</td><td>HARTI</td><td>P</td><td>12/03/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325803820001</td><td>INDA SASI KUSRINI</td><td>P</td><td>18/03/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326611940002</td><td>ERNI RUSITA DEWI</td><td>P</td><td>26/11/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320908430001</td><td>SAMUN</td><td>L</td><td>09/08/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324705500002</td><td>SUNARTI</td><td>P</td><td>07/05/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320601600001</td><td>TOMO</td><td>L</td><td>06/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325707650001</td><td>SUKARI</td><td>P</td><td>17/07/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325106840004</td><td>WINARTI</td><td>P</td><td>11/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321004890001</td><td>HERMANTO</td><td>L</td><td>10/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320906930004</td><td>AJI PRAWOKO</td><td>L</td><td>09/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324707000002</td><td>EVA YULIANA</td><td>P</td><td>07/07/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101300016</td><td>MUNTIAMAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322006600002</td><td>DWI BASUKI</td><td>L</td><td>20/06/1960</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324605650002</td><td>LI'ASIH</td><td>P</td><td>06/05/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325704860003</td><td>ANITA</td><td>P</td><td>17/04/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320506880002</td><td>AGUNG PRADIKA</td><td>L</td><td>05/06/1988</td><td>Islam</td><td>Belum Kawin</td><td>Diploma I/II</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325104930001</td><td>DENOK PITRA RHENA</td><td>P</td><td>11/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326112000001</td><td>KHARISMA INDRIANA</td><td>P</td><td>21/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321110110001</td><td>AFLAKHA MUZAKKY ANWAR</td><td>L</td><td>11/10/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326901790002</td><td>HERMIATI</td><td>P</td><td>29/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERAWAT</td></tr>
 <tr><td>3507321002470001</td><td>DJURI</td><td>L</td><td>10/02/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326012370001</td><td>KASIATI</td><td>P</td><td>20/12/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320702720003</td><td>SARDI</td><td>L</td><td>07/02/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324703720002</td><td>TIWI</td><td>P</td><td>07/03/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320807950002</td><td>SLAMET KRISDIANTO</td><td>L</td><td>08/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322512010001</td><td>RIANDIANTO</td><td>L</td><td>25/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321512070001</td><td>RIO ALFIAN PRASDIKA</td><td>L</td><td>15/12/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709470001</td><td>MISENU</td><td>L</td><td>07/09/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322111770001</td><td>WIJI</td><td>L</td><td>21/11/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321004610002</td><td>WARIMIN</td><td>L</td><td>10/04/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325705670001</td><td>RIAMI</td><td>P</td><td>17/05/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322301860005</td><td>HERI PORWANTO</td><td>L</td><td>23/01/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325703900001</td><td>YESI MUTIKASARI</td><td>P</td><td>17/03/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322510970002</td><td>CAHYA BAGUS SAPUTRA</td><td>L</td><td>25/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108630011</td><td>TUKIRAN</td><td>L</td><td>01/08/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325907740002</td><td>KHUSNUL ZANIKYAH</td><td>P</td><td>19/07/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325308890003</td><td>DEVI WIDIYAWATI</td><td>P</td><td>13/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322907970001</td><td>MOHAMMAD SYAHRIZAL R</td><td>L</td><td>29/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321404760002</td><td>SUNARYO</td><td>L</td><td>14/04/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324907810001</td><td>YULIFAH</td><td>P</td><td>09/07/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324411040001</td><td>DEFA LIFIAN ROMADHONA</td><td>P</td><td>04/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326307060002</td><td>LYSTI DONNA ANGGRAINI</td><td>P</td><td>23/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102910003</td><td>FERI STIAWAN</td><td>L</td><td>01/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320709550002</td><td>KARMAN</td><td>L</td><td>07/09/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325407670002</td><td>SUNARSI</td><td>P</td><td>14/07/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324107820003</td><td>DINA NINGTYAS</td><td>P</td><td>01/07/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325210840001</td><td>SITI KHOROLINA</td><td>P</td><td>12/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322007840002</td><td>ERIK SUHARMOKO</td><td>L</td><td>20/07/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321608840002</td><td>AGUS SISWANTO</td><td>L</td><td>16/08/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321009060001</td><td>ALIF VIANDIKA A S M</td><td>L</td><td>10/09/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324506070001</td><td>LAYSA AGISTA HELGA</td><td>P</td><td>05/06/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322711700001</td><td>MOH SAHIDIN</td><td>L</td><td>27/11/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325008720007</td><td>DARNI RAHAYUNINGSIH</td><td>P</td><td>10/08/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320202910004</td><td>VERI SETIAWAN</td><td>L</td><td>02/02/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325801980001</td><td>KRISNA RAMAYANI</td><td>P</td><td>18/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322212010003</td><td>DWIKI RAMADHAN</td><td>L</td><td>22/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321101500001</td><td>WARSIM</td><td>L</td><td>11/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326410630001</td><td>TIN SURYANINGSIH</td><td>P</td><td>24/10/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507322204800001</td><td>AGUS KARIONO</td><td>L</td><td>22/04/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324603890004</td><td>ATIK SURYA NINGSIH</td><td>P</td><td>06/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321610300001</td><td>YATEMUN</td><td>L</td><td>16/10/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324603390001</td><td>KARSINI</td><td>P</td><td>06/03/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325805600003</td><td>WARINAH</td><td>P</td><td>18/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320203790003</td><td>SAMSURI</td><td>L</td><td>02/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325708800003</td><td>ERNA WATI</td><td>P</td><td>17/08/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322510020006</td><td>MUHAMAD ALIF RAMADANI</td><td>L</td><td>25/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324604090001</td><td>APRILIA DWI AISYA PUTRI</td><td>P</td><td>06/04/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325710400002</td><td>RESEK</td><td>P</td><td>17/10/1940</td><td>Islam</td><td>Cerai Hidup</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320910800002</td><td>DARIONO</td><td>L</td><td>09/10/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326512990003</td><td>NOFITA SARI</td><td>P</td><td>25/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326512790003</td><td>MARIANI</td><td>P</td><td>25/12/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324202000002</td><td>FERA ANDRIANI</td><td>P</td><td>02/02/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321507010002</td><td>RIO SINGEH YW</td><td>L</td><td>15/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108350010</td><td>YATEMUN</td><td>L</td><td>01/08/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326306400001</td><td>KARSINI</td><td>P</td><td>23/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325209550001</td><td>WARINAH</td><td>P</td><td>12/09/1955</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325507660001</td><td>YATI</td><td>P</td><td>15/07/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321312630001</td><td>HARTONO</td><td>L</td><td>13/12/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320409900001</td><td>WAHYUDI</td><td>L</td><td>04/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323112000004</td><td>DWI FERNANDA C</td><td>L</td><td>31/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321012640003</td><td>SUTIKNO</td><td>L</td><td>10/12/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325602700003</td><td>YAMINAH</td><td>P</td><td>16/02/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321901890001</td><td>ANDIK BAITUROHMAN</td><td>L</td><td>19/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324704070001</td><td>FONG FONG LINDA MAULINA</td><td>P</td><td>07/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322304780006</td><td>DANA WENANG</td><td>L</td><td>23/04/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324108830004</td><td>LINDA NINGSIH</td><td>P</td><td>01/08/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322910040001</td><td>ALFAREZA ADITYA PUTRA</td><td>L</td><td>29/10/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322507700001</td><td>SUWADI</td><td>L</td><td>25/07/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324311690005</td><td>GINAH</td><td>P</td><td>03/11/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322604940002</td><td>TEGUH KRISDIANTO</td><td>L</td><td>26/04/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320704960001</td><td>ARINIKO ADI PRASTYO</td><td>L</td><td>07/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323110760001</td><td>DWI SUSANTO</td><td>L</td><td>31/10/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326702810001</td><td>JUMIATI</td><td>P</td><td>27/02/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322805000001</td><td>CANDRIKA KUMARA TUNGGA</td><td>L</td><td>28/05/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321304050001</td><td>VERGIAN ADERIO DWI PUTRA</td><td>L</td><td>13/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201810005</td><td>SUPARMAN</td><td>L</td><td>12/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325201850005</td><td>ANIS SETYAWATI</td><td>P</td><td>12/01/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326807060002</td><td>ALEXCA VEGA CHYNTIA F A</td><td>P</td><td>28/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325704800001</td><td>SARTINI</td><td>P</td><td>17/04/1980</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327110050003</td><td>RISMA RAMA DHANI</td><td>P</td><td>31/10/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322407270001</td><td>NGADERI</td><td>L</td><td>24/07/1927</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324811370001</td><td>WARINTEN</td><td>P</td><td>08/11/1937</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321907790002</td><td>SUGENG HARIOKO</td><td>L</td><td>19/07/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324206040001</td><td>RELLY EKTA LITA SETYO PUTRI</td><td>P</td><td>02/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321306080001</td><td>BIMA HARIOKO</td><td>L</td><td>13/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002820003</td><td>SUGITO ROLLIES</td><td>L</td><td>10/02/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326404840001</td><td>LILIK ISMAWATI</td><td>P</td><td>24/04/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320107070001</td><td>ALVIN RIZKY NURSALAM</td><td>L</td><td>01/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324209360002</td><td>KARSINI</td><td>P</td><td>02/09/1936</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325807070001</td><td>DINI ESTU CINTA NURFADHILAH</td><td>P</td><td>18/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321109430001</td><td>SAKIP</td><td>L</td><td>11/09/1943</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507327012800002</td><td>SANTI</td><td>P</td><td>30/12/1980</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326202080001</td><td>VINDA DWI MELATI</td><td>P</td><td>22/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321301830001</td><td>SUKO ANDIK</td><td>L</td><td>13/01/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325811830005</td><td>YUDAH PARI NINGSIH</td><td>P</td><td>18/11/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320603070001</td><td>M HENGKY ANDI FERNANDA</td><td>L</td><td>06/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327112350010</td><td>SUMARMI</td><td>P</td><td>31/12/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320801810002</td><td>KUSMIANTO</td><td>L</td><td>08/01/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326105860003</td><td>SIAMI ANDRIANI</td><td>P</td><td>21/05/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325701060001</td><td>SHELI VAGARETASYA AL SHERA</td><td>P</td><td>17/01/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320112750001</td><td>KHUSNUL HADI</td><td>L</td><td>01/12/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326407830005</td><td>LISTIANA</td><td>P</td><td>24/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326311090001</td><td>KEYSHAWA PRAMESTHI PURBOLARAS</td><td>P</td><td>23/11/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709550003</td><td>RANU</td><td>L</td><td>07/09/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324507600005</td><td>SALAMI</td><td>P</td><td>05/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323108830002</td><td>HERI SETIAWAN</td><td>L</td><td>31/08/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321012920001</td><td>FRENTANTO ADI JUMANTO</td><td>L</td><td>10/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320706930001</td><td>KRISDIANTO ADI KARTONO</td><td>L</td><td>07/06/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320907970001</td><td>RIKO ANDI SISWANTORO</td><td>L</td><td>09/07/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321006740003</td><td>RIONO</td><td>L</td><td>10/06/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326803790001</td><td>RIANAH</td><td>P</td><td>28/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322812000001</td><td>IRVAN AAN ANDRIAN</td><td>L</td><td>28/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322207770002</td><td>JOKO</td><td>L</td><td>22/07/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326308810002</td><td>LILIK TRI MINARTI</td><td>P</td><td>23/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326402010002</td><td>LIVIA RISMADITA</td><td>P</td><td>24/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322006040001</td><td>HERTANTO DWI ADI PRAYOGO</td><td>L</td><td>20/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321305420001</td><td>SATURI</td><td>L</td><td>13/05/1942</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325705860002</td><td>DIAN LUVIANA</td><td>P</td><td>17/05/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321806900002</td><td>OKIK NUGROHO</td><td>L</td><td>18/06/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327107030002</td><td>ITAN VALENI</td><td>P</td><td>31/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321606700002</td><td>TEDI KAMI PURWANTO</td><td>L</td><td>16/06/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324206780003</td><td>MAMIK SUPRIYATI</td><td>P</td><td>02/06/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324206000001</td><td>NINDA NOVIA YUNIARTA</td><td>P</td><td>02/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321803040001</td><td>FERBIAN ARDI FIRMANSYAH</td><td>L</td><td>18/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320103060001</td><td>MUHAMMAD RASYA ADITYA</td><td>L</td><td>01/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321906740004</td><td>HENDRO DAROJI</td><td>L</td><td>19/06/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324807770002</td><td>SITI HALIMAH</td><td>P</td><td>08/07/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327103020001</td><td>EVA MARTATILA</td><td>P</td><td>31/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102780001</td><td>YUDIANTO</td><td>L</td><td>01/02/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327007870001</td><td>RATNA YULISTINA</td><td>P</td><td>30/07/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326404060001</td><td>NELA FIRMANSYAH DEBI P P</td><td>P</td><td>24/04/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101840016</td><td>MATADI</td><td>L</td><td>01/01/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324703830002</td><td>NANING</td><td>P</td><td>07/03/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322703060003</td><td>PRANSISKO ERIK ADIANTO</td><td>L</td><td>27/03/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320507600003</td><td>SUTRISNO</td><td>L</td><td>05/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326008550002</td><td>PAITI</td><td>P</td><td>20/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325109760001</td><td>RINI</td><td>P</td><td>11/09/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321903780001</td><td>SUMALI</td><td>L</td><td>19/03/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322401840002</td><td>EKO</td><td>L</td><td>24/01/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324708860005</td><td>MIMIN</td><td>P</td><td>07/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320505690001</td><td>YULIONO DEDI S</td><td>L</td><td>05/05/1969</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325307900002</td><td>SUMARNI</td><td>P</td><td>13/07/1990</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320504890002</td><td>HERWANTO</td><td>L</td><td>05/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320607070002</td><td>BIMO SATRIO</td><td>L</td><td>06/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325112440001</td><td>MESILAH</td><td>P</td><td>11/12/1944</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320101790013</td><td>DEDY PORWANTO</td><td>L</td><td>01/01/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507327108820002</td><td>SEFTIANI</td><td>P</td><td>31/08/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322812000002</td><td>IRVAN AAN ANDRIAN PORVANI</td><td>L</td><td>28/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325802370001</td><td>GINI</td><td>P</td><td>18/02/1937</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325901800001</td><td>INDAYATI</td><td>P</td><td>19/01/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326110840001</td><td>RIKANAH</td><td>P</td><td>21/10/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321508850003</td><td>SUYETNO</td><td>L</td><td>15/08/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324707030001</td><td>REFALDA ANGGISTA NINDIA F</td><td>P</td><td>07/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322306040002</td><td>FEMAS REFALDI DWI ANGGASTA</td><td>L</td><td>23/06/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321904610002</td><td>NGATEMUN</td><td>L</td><td>19/04/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325607660002</td><td>NYASIATIN</td><td>P</td><td>16/07/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321407800003</td><td>NANANG</td><td>L</td><td>14/07/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325303830003</td><td>INDAH</td><td>P</td><td>13/03/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323007010001</td><td>RIAN PRANANDA</td><td>L</td><td>30/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325611040001</td><td>TANTRI ELINDA</td><td>P</td><td>16/11/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320310400001</td><td>NAPI</td><td>L</td><td>03/10/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326710660002</td><td>LAMINI</td><td>P</td><td>27/10/1966</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322004840001</td><td>IMAM YULIANTO</td><td>L</td><td>20/04/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321509900002</td><td>FREDI HERMAWAN</td><td>L</td><td>15/09/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326011790001</td><td>SUMARTIN</td><td>P</td><td>20/11/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321001680002</td><td>GARIMEN</td><td>L</td><td>10/01/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324502730001</td><td>SULIANI HERMAWATI</td><td>P</td><td>05/02/1973</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324303940002</td><td>NANA ERVINA</td><td>P</td><td>03/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320902010001</td><td>RONI DWI ANDIKA</td><td>L</td><td>09/02/2001</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320709530001</td><td>JAURI</td><td>L</td><td>07/09/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324401700001</td><td>SUMINEM</td><td>P</td><td>04/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320910790001</td><td>DARIANTO</td><td>L</td><td>09/10/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321509830002</td><td>SUPRIYO</td><td>L</td><td>15/09/1983</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324907850001</td><td>YULIATIN</td><td>P</td><td>09/07/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320505870001</td><td>SUBARI</td><td>L</td><td>05/05/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325804900002</td><td>MARIYAH</td><td>P</td><td>18/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322707910004</td><td>RUDIANTO</td><td>L</td><td>27/07/1991</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324405990001</td><td>IMA KARISMAWATI</td><td>P</td><td>04/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325904270001</td><td>KANTUN</td><td>P</td><td>19/04/1927</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320207460002</td><td>PAIDI</td><td>L</td><td>02/07/1946</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324905510001</td><td>NURSIATI</td><td>P</td><td>09/05/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507323112780003</td><td>SUPRAPTO</td><td>L</td><td>31/12/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321712580001</td><td>BUANG SUYONO</td><td>L</td><td>17/12/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325210600001</td><td>NURSIMAMI</td><td>P</td><td>12/10/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326202770001</td><td>WIWIK MUJIATI</td><td>P</td><td>22/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320408750001</td><td>WARDI</td><td>L</td><td>04/08/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321007430001</td><td>JINI</td><td>L</td><td>10/07/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324509490001</td><td>SUPATEN</td><td>P</td><td>05/09/1949</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320101810026</td><td>MESENO</td><td>L</td><td>01/01/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327103850004</td><td>INDRIAS</td><td>P</td><td>31/03/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320805710001</td><td>KARIADI</td><td>L</td><td>08/05/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324510770001</td><td>PUJI PURWATI</td><td>P</td><td>05/10/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320602960001</td><td>DIMAS FANANI PUTRA</td><td>L</td><td>06/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320206990004</td><td>PANJI PUTRA</td><td>L</td><td>02/06/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322801040002</td><td>ROBY ANDREANSYAH</td><td>L</td><td>28/01/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322510090001</td><td>MUHAMMAD DANOER RIZKI ASKAR Z</td><td>L</td><td>25/10/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320512820004</td><td>SUKARIANTO</td><td>L</td><td>05/12/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321504740003</td><td>SAKRI</td><td>L</td><td>15/04/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325008750002</td><td>NUR KAYATI</td><td>P</td><td>10/08/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322110500001</td><td>MULIYONO</td><td>L</td><td>21/10/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326012620001</td><td>RANI</td><td>P</td><td>20/12/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322910020001</td><td>BARGAS PRASTIYO</td><td>L</td><td>29/10/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320111270001</td><td>SENU</td><td>L</td><td>01/11/1927</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326512350001</td><td>SUKINEM</td><td>P</td><td>25/12/1935</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320606620002</td><td>GIONO</td><td>L</td><td>06/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507324312720005</td><td>YAMINAH</td><td>P</td><td>03/12/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507321104910001</td><td>GUNAWAN</td><td>L</td><td>11/04/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324901960001</td><td>ELIS DESIATI</td><td>P</td><td>09/01/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321203970003</td><td>YUSUF ADI SOFYAN</td><td>L</td><td>12/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321509400001</td><td>PAINO</td><td>L</td><td>15/09/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324507450002</td><td>NAPSIAH</td><td>P</td><td>05/07/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322309790001</td><td>LASIMAN</td><td>L</td><td>23/09/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321705820002</td><td>SUGIONO</td><td>L</td><td>17/05/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320606670005</td><td>SYAITUL HIDAYAT</td><td>L</td><td>06/06/1967</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326503730001</td><td>SUTIYEM</td><td>P</td><td>25/03/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322309960002</td><td>PURNOMO GOZALI</td><td>L</td><td>23/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323008000001</td><td>BAGUS ADI KURNIAWAN</td><td>L</td><td>30/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321210570001</td><td>JIANTO</td><td>L</td><td>12/10/1957</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324102660001</td><td>NGATMINI</td><td>P</td><td>01/02/1966</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321101880003</td><td>PARIADI</td><td>L</td><td>11/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324609930002</td><td>ANIK LIDYAWATI</td><td>P</td><td>06/09/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325509000003</td><td>RISKA NINGSIH</td><td>P</td><td>15/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325412040001</td><td>NOVI CATUR FELANI</td><td>P</td><td>14/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322004290001</td><td>KATEMIN</td><td>L</td><td>20/04/1929</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326509410001</td><td>KAMINI</td><td>P</td><td>25/09/1941</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320112230001</td><td>SARIMUN</td><td>L</td><td>01/12/1923</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108300008</td><td>YAMINI</td><td>P</td><td>01/08/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320506620001</td><td>SURATEMAN</td><td>L</td><td>05/06/1962</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327001670001</td><td>SUTINI</td><td>P</td><td>30/01/1967</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325408850001</td><td>LUFIATI</td><td>P</td><td>14/08/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326512890002</td><td>WAHYU SISKA NOVIATI</td><td>P</td><td>25/12/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321201940001</td><td>RIZKI ARDIANSAH</td><td>L</td><td>12/01/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322512700002</td><td>YULIADI</td><td>L</td><td>25/12/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325909700001</td><td>RASMANI</td><td>P</td><td>19/09/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321907930002</td><td>INDRA KRISDIAN ADI PRADANA P</td><td>L</td><td>19/07/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320107450011</td><td>ATIM BIN JEMARI</td><td>L</td><td>01/07/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324205600001</td><td>SRIANI</td><td>P</td><td>02/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325012800003</td><td>YATIN</td><td>P</td><td>10/12/1980</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320306850002</td><td>MARIONO</td><td>L</td><td>03/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321108790004</td><td>MOCH WADRI</td><td>L</td><td>11/08/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322711000001</td><td>DENI MAHENDRA</td><td>L</td><td>27/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321803510002</td><td>SARIMIN</td><td>L</td><td>18/03/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326104650001</td><td>KARTINI</td><td>P</td><td>21/04/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321202770001</td><td>NURFAUJI</td><td>L</td><td>12/02/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325111990004</td><td>UNUL ANI FARINGSIH</td><td>P</td><td>11/11/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321604030001</td><td>SLAMET SUGIARTO</td><td>L</td><td>16/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320807620002</td><td>BEJO KARIONO</td><td>L</td><td>08/07/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101680002</td><td>KARNI</td><td>P</td><td>01/01/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321104900002</td><td>DEDIK WIBOWO</td><td>L</td><td>11/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507326707040002</td><td>RIMA NANDA PUTRI</td><td>P</td><td>27/07/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102600005</td><td>LASIMUN</td><td>L</td><td>01/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326603630003</td><td>SAYEM</td><td>P</td><td>26/03/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325410900001</td><td>SULIS YUNIARTI</td><td>P</td><td>14/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322507700002</td><td>DARMIN</td><td>L</td><td>25/07/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325008800002</td><td>KARTINAH</td><td>P</td><td>10/08/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321910970001</td><td>KHOIRUL ADI SAPUTRA</td><td>L</td><td>19/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320901060001</td><td>DAVID PRANANDA P</td><td>L</td><td>09/01/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320304500001</td><td>SUTRIS HARIYONO</td><td>L</td><td>03/04/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324712640001</td><td>PI'AH</td><td>P</td><td>07/12/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324912040002</td><td>JUIVIA AGISTA</td><td>P</td><td>09/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321001760001</td><td>SURAJI</td><td>L</td><td>10/01/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325212790001</td><td>TITIK DWI PARTY</td><td>P</td><td>12/12/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321007030001</td><td>GILANG AJI SURYA ANANTA</td><td>L</td><td>10/07/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326201070001</td><td>BERTA AURELLA ANANDARISTA</td><td>P</td><td>22/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321010840003</td><td>OKTAVIANUS J NAYUP</td><td>L</td><td>10/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325710840001</td><td>YUNANI</td><td>P</td><td>17/10/1984</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326506080002</td><td>DIANA KRISTIN INRAWATI</td><td>P</td><td>25/06/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326111100002</td><td>EVA REGINA PRATIWI NAYUF</td><td>P</td><td>21/11/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321701500001</td><td>SANIMIN</td><td>L</td><td>17/01/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324512570001</td><td>JUNI</td><td>P</td><td>05/12/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321304830002</td><td>RUDI HARNANTO</td><td>L</td><td>13/04/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325506860001</td><td>LULUK NUR REMA</td><td>P</td><td>15/06/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321708880002</td><td>MUHAMAD NURSAID</td><td>L</td><td>17/08/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320904900002</td><td>MUCHAMAD SOLEHHUDIN</td><td>L</td><td>09/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322212810002</td><td>ANANG SUPRIADI</td><td>L</td><td>22/12/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324807050003</td><td>AMANDA AMELIA SUPRIADI</td><td>P</td><td>08/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320707730001</td><td>WARDI</td><td>L</td><td>07/07/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324612770001</td><td>WIWIK PUJIATI</td><td>P</td><td>06/12/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321203970004</td><td>JUSUF ADI SUFYAN</td><td>L</td><td>12/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321602050001</td><td>MOCHAMAD BINTANG SATRIA WIBOWO</td><td>L</td><td>16/02/2005</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322002470001</td><td>MISDI</td><td>L</td><td>20/02/1947</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324106580001</td><td>MISIYAH</td><td>P</td><td>01/06/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322703750001</td><td>ANDRI SETIAWAN</td><td>L</td><td>27/03/1975</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507323008790001</td><td>MARSIDI</td><td>L</td><td>30/08/1979</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320707890004</td><td>YUDI PRISTANTO</td><td>L</td><td>07/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320509420001</td><td>JIMUN</td><td>L</td><td>05/09/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324702520001</td><td>KASMINI</td><td>P</td><td>07/02/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320506810003</td><td>SUPRIADI</td><td>L</td><td>05/06/1981</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324407860001</td><td>YENI ROFITA</td><td>P</td><td>04/07/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320607560001</td><td>SLAMET HARIANTO</td><td>L</td><td>06/07/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324206630002</td><td>DARMINI</td><td>P</td><td>02/06/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324210900001</td><td>SULISTYOWATI</td><td>P</td><td>02/10/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326312350001</td><td>MARKATI</td><td>P</td><td>23/12/1935</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322006400001</td><td>WARSIPAN</td><td>L</td><td>20/06/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325312450001</td><td>JAMI</td><td>P</td><td>13/12/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322007640001</td><td>KASMANI</td><td>L</td><td>20/07/1964</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321607710001</td><td>NGATEMAN</td><td>L</td><td>16/07/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322603730001</td><td>RIDUAN</td><td>L</td><td>26/03/1973</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324104930003</td><td>MERIK KRISDAYANTI</td><td>P</td><td>01/04/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321005630002</td><td>NGADI</td><td>L</td><td>10/05/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505730001</td><td>SUTIARI</td><td>P</td><td>15/05/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326206000001</td><td>FENI NOVITA SARI</td><td>P</td><td>22/06/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324712040002</td><td>DESI DELITA</td><td>P</td><td>07/12/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320503710002</td><td>SUPIRANTO</td><td>L</td><td>05/03/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325003750004</td><td>ERNA WATI</td><td>P</td><td>10/03/1975</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320302960002</td><td>LUKI FEBRIANTO</td><td>L</td><td>03/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320701980001</td><td>NURI ADRI KURNIAWAN</td><td>L</td><td>07/01/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326611050002</td><td>NOVANDA TRIHAPSARI</td><td>P</td><td>26/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320108520006</td><td>PONIDI</td><td>L</td><td>01/08/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326211650001</td><td>MUJIATI</td><td>P</td><td>22/11/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326805840004</td><td>NANIK UTAMI</td><td>P</td><td>28/05/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322305750001</td><td>SUTOMO</td><td>L</td><td>23/05/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320901030001</td><td>YANUAR EKA SAPUTRA</td><td>L</td><td>09/01/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320610070002</td><td>DAVIN DWI WINTORO</td><td>L</td><td>06/10/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325102380002</td><td>SITI</td><td>P</td><td>11/02/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320106820004</td><td>AGUS WAGIANTO</td><td>L</td><td>01/06/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325608880004</td><td>SULAMI</td><td>P</td><td>16/08/1988</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322101070001</td><td>DAVA ANDIKA AKBAR</td><td>L</td><td>21/01/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325207500002</td><td>SEMINI</td><td>P</td><td>12/07/1950</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320202600001</td><td>KUSNADI</td><td>L</td><td>02/02/1960</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327009580001</td><td>WAHYUNINGSIH</td><td>P</td><td>30/09/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507320307890001</td><td>MOCH FATAHCHILA N W</td><td>L</td><td>03/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326809910002</td><td>DEWI CHUSUMA WARDANI Z</td><td>P</td><td>28/09/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325005990001</td><td>NOER HALIZAH</td><td>P</td><td>10/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325106280001</td><td>LAMINAH</td><td>P</td><td>11/06/1928</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321008660001</td><td>SUTRISNO</td><td>L</td><td>10/08/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322008550001</td><td>AMBULANI</td><td>L</td><td>20/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>SENIMAN</td></tr>
 <tr><td>3507324701610002</td><td>RIANAH</td><td>P</td><td>07/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325107830002</td><td>FITRI HANDAYANI</td><td>P</td><td>11/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321606880003</td><td>ANTOK TRIHARTONO</td><td>L</td><td>16/06/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322901930002</td><td>ADIT KURNIAWAN</td><td>L</td><td>29/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321112780001</td><td>SUGIANTO</td><td>L</td><td>11/12/1978</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321102330001</td><td>KARTO</td><td>L</td><td>11/02/1933</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320808600005</td><td>ARSYIM</td><td>L</td><td>08/08/1960</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325204670002</td><td>SUMINAH</td><td>P</td><td>12/04/1967</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327012000001</td><td>GEVI ARDIANTI</td><td>P</td><td>30/12/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321604050001</td><td>MAHMUD WIBOWO ARDIANTO</td><td>L</td><td>16/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320803790002</td><td>ANDRY MARDENY</td><td>L</td><td>08/03/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>SOPIR</td></tr>
 <tr><td>3507326112790002</td><td>DIAH RAHMA SANTI</td><td>P</td><td>21/12/1979</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507327004070002</td><td>KAYLA AZRA PUTRI M</td><td>P</td><td>30/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325904100002</td><td>ALFIRA AULIA PUTRI M</td><td>P</td><td>19/04/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322303780002</td><td>BUDIONO</td><td>L</td><td>23/03/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324507830003</td><td>KRISTIANA</td><td>P</td><td>05/07/1983</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324702060001</td><td>FAWWAZA NAITUSY P B</td><td>P</td><td>07/02/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320111330001</td><td>TASELAM</td><td>L</td><td>01/11/1933</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325609430001</td><td>KAMAR</td><td>P</td><td>16/09/1943</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507320207680002</td><td>HADI SUPARMAN</td><td>L</td><td>02/07/1968</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325008700003</td><td>HARTATIK</td><td>P</td><td>10/08/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322406970003</td><td>MOH REFANANDA PRATAMA PUTRA</td><td>L</td><td>24/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325509030003</td><td>SILVIA AMELIA ZHARISMA PUTRI</td><td>P</td><td>15/09/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320102610002</td><td>YASEMAN</td><td>L</td><td>01/02/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507327112860005</td><td>MUSRINI</td><td>P</td><td>31/12/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321010860003</td><td>YAYAN YULIANTO</td><td>L</td><td>10/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326703890001</td><td>RIRIN ERLIANA</td><td>P</td><td>27/03/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323105720001</td><td>MUJIONO KOANI</td><td>L</td><td>31/05/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326211860002</td><td>SUJIANA PUSPITA</td><td>P</td><td>22/11/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326507060001</td><td>SHIVANA KHOIRU NISA'KOANI</td><td>P</td><td>25/07/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320205650002</td><td>MOCH DAUD</td><td>L</td><td>02/05/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325801650001</td><td>RUPIYAH</td><td>P</td><td>18/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322212930001</td><td>LUCY NURHUDA</td><td>L</td><td>22/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326801950003</td><td>LUSIANA WAHYU AGUSTIN</td><td>P</td><td>28/01/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321508740003</td><td>SUBANDI</td><td>L</td><td>15/08/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320307010002</td><td>ARDIYAN JULI PRADITA</td><td>L</td><td>03/07/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320102770003</td><td>NGATEMAN</td><td>L</td><td>01/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324212850002</td><td>SIANAH</td><td>P</td><td>02/12/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325210030003</td><td>SITI FATIMAH SHELA PUTRI</td><td>P</td><td>12/10/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324707080001</td><td>AJENG PUTRI LESTARI</td><td>P</td><td>07/07/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322507680004</td><td>BANI</td><td>L</td><td>25/07/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324106790002</td><td>SONIK</td><td>P</td><td>01/06/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324804950004</td><td>SULISTIYO WATI</td><td>P</td><td>08/04/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326107050001</td><td>LENI ERLINA WATI</td><td>P</td><td>21/07/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320903780003</td><td>MOCH NASIR</td><td>L</td><td>09/03/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324101710034</td><td>DARSINI</td><td>P</td><td>01/01/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321712950002</td><td>DODIK BAGUS ISWANTO</td><td>L</td><td>17/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320208760005</td><td>KADIS</td><td>L</td><td>02/08/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326512870001</td><td>NANIK FITRIANA</td><td>P</td><td>25/12/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320905090003</td><td>BARI AJI SAPUTRA</td><td>L</td><td>09/05/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320909770003</td><td>ANDIK SETYOKO</td><td>L</td><td>09/09/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325205810003</td><td>DEWI ANI</td><td>P</td><td>12/05/1981</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326311030004</td><td>NIKEN DEA PUSPASARI</td><td>P</td><td>23/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322607830003</td><td>AGUS SUGIONO</td><td>L</td><td>26/07/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326308830003</td><td>WIWIK INDAYANI</td><td>P</td><td>23/08/1983</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324608070001</td><td>GEA LIVIA AGUSTINA</td><td>P</td><td>06/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321005810001</td><td>SUWARDI</td><td>L</td><td>10/05/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325902890003</td><td>WINARSIH</td><td>P</td><td>19/02/1989</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322905070002</td><td>MIFTAHQUL AIIN</td><td>L</td><td>29/05/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101370017</td><td>TOSEN</td><td>L</td><td>01/01/1937</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320408380001</td><td>PARDI</td><td>L</td><td>04/08/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325004670003</td><td>JUMIARI</td><td>P</td><td>10/04/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321003950004</td><td>AGUNG</td><td>L</td><td>10/03/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324108350022</td><td>KARSINI</td><td>P</td><td>01/08/1935</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322008620002</td><td>WARDIANTO</td><td>L</td><td>20/08/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324906750001</td><td>GIMAH</td><td>P</td><td>09/06/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320807980003</td><td>PRASETYO JULI SASMITA</td><td>L</td><td>08/07/1998</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322310040001</td><td>YOGA ADITIA RAMADANI</td><td>L</td><td>23/10/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321203810006</td><td>AGUS</td><td>L</td><td>12/03/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326908850002</td><td>WINARSIH</td><td>P</td><td>29/08/1985</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320906060002</td><td>YOGI DEVA SAPUTRA</td><td>L</td><td>09/06/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322910070001</td><td>SANDY AHMAD KURNIAWAN</td><td>L</td><td>29/10/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507323012620001</td><td>WAHONO</td><td>L</td><td>30/12/1962</td><td>Islam</td><td>Kawin</td><td>Diploma I/II</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325303770002</td><td>NGATMINI</td><td>P</td><td>13/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320308990002</td><td>ZOLA PALINGA</td><td>L</td><td>03/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324610000001</td><td>UGI ZELINA</td><td>P</td><td>06/10/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321005820003</td><td>YAHDI</td><td>L</td><td>10/05/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324806890002</td><td>SRI SUNARSIH</td><td>P</td><td>08/06/1989</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320511690001</td><td>YONO</td><td>L</td><td>05/11/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326906730001</td><td>JAMILAH</td><td>P</td><td>29/06/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321008040001</td><td>TIO PUTRA HERMAWAN</td><td>L</td><td>10/08/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325302500001</td><td>SATUNI</td><td>P</td><td>13/02/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326008710003</td><td>LASMANI</td><td>P</td><td>20/08/1971</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320102420006</td><td>SARIP</td><td>L</td><td>01/02/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325207330001</td><td>BAWON</td><td>P</td><td>12/07/1933</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321511530002</td><td>JEMU</td><td>L</td><td>15/11/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324905530001</td><td>SIANI</td><td>P</td><td>09/05/1953</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323003720001</td><td>SUTRISNO</td><td>L</td><td>30/03/1972</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321003760003</td><td>SUKRI</td><td>L</td><td>10/03/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325301870001</td><td>SULIS SETYAWATI</td><td>P</td><td>13/01/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324408400001</td><td>TIANI</td><td>P</td><td>04/08/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321804310001</td><td>DULADI</td><td>L</td><td>18/04/1931</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324404560001</td><td>B. ATIM</td><td>P</td><td>04/04/1956</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320206770004</td><td>RIMAWAN YULIANTO</td><td>L</td><td>02/06/1977</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324605790001</td><td>NURHAYATI</td><td>P</td><td>06/05/1979</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324101020003</td><td>RISMA NUR RIDHA</td><td>P</td><td>01/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321005740001</td><td>SUDARMONO</td><td>L</td><td>10/05/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325203750002</td><td>TARMINAH</td><td>P</td><td>12/03/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326306970001</td><td>SUCIATI IKA YUPITA. SARI'UN</td><td>P</td><td>23/06/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326704050002</td><td>SUDARMANI DWI APRILLIA</td><td>P</td><td>27/04/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321607250001</td><td>UMBAR</td><td>L</td><td>16/07/1925</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326708420001</td><td>GINI</td><td>P</td><td>27/08/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322107650001</td><td>SUWONO</td><td>L</td><td>21/07/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326208670001</td><td>WARSITI</td><td>P</td><td>22/08/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320207890002</td><td>LADIANTO</td><td>L</td><td>02/07/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322612920001</td><td>JODI CANDRA NURCAHYO</td><td>L</td><td>26/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324412010003</td><td>PUJI RAHAYU</td><td>P</td><td>04/12/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321210370001</td><td>SAMARI</td><td>L</td><td>12/10/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325903400001</td><td>SUTIAH</td><td>P</td><td>19/03/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321112350001</td><td>NGARIJAN</td><td>L</td><td>11/12/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325001420001</td><td>YASPIK</td><td>P</td><td>10/01/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320909660002</td><td>SUPOYO</td><td>L</td><td>09/09/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326509740003</td><td>ANIK SUSILO WATI</td><td>P</td><td>25/09/1974</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325005010002</td><td>KRISDIANA ALFINASOFA</td><td>P</td><td>10/05/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320801050001</td><td>WAHYU JANOKO PUTRO</td><td>L</td><td>08/01/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322305580001</td><td>SAHUDI</td><td>L</td><td>23/05/1958</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325010660001</td><td>SUNARTI</td><td>P</td><td>10/10/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322809980003</td><td>SETIO BUDIAWAN</td><td>L</td><td>28/09/1998</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101830013</td><td>NUR KOMARI</td><td>L</td><td>01/01/1983</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324912380001</td><td>MINTEN</td><td>P</td><td>09/12/1938</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324107740004</td><td>SUCIATI</td><td>P</td><td>01/07/1974</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321405900007</td><td>PUPUT TAWAKAL</td><td>L</td><td>14/05/1990</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320606960005</td><td>SUKMA ADHI ATMA</td><td>L</td><td>06/06/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321810990001</td><td>RIZKY ARDHI AHMAD</td><td>L</td><td>18/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323003040002</td><td>FIKRY DHARMAWAN AHMAD</td><td>L</td><td>30/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322402090002</td><td>SHIDDIQ MAULANA AHMAD</td><td>L</td><td>24/02/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320803530002</td><td>LAMIN</td><td>L</td><td>08/03/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808670001</td><td>SUPIYAH</td><td>P</td><td>18/08/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321312630002</td><td>TAMSURI</td><td>L</td><td>13/12/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324112700002</td><td>LATIPAH</td><td>P</td><td>01/12/1970</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322501880004</td><td>HADI KURNIAWAN</td><td>L</td><td>25/01/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320303940005</td><td>ROMI ARDIANTO</td><td>L</td><td>03/03/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325805990001</td><td>ENDAH SRILESTARI</td><td>P</td><td>18/05/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321010730006</td><td>BAMBANG</td><td>L</td><td>10/10/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324402800004</td><td>SANTINI</td><td>P</td><td>04/02/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325707020001</td><td>HERMIN SELVI KRISTINA</td><td>P</td><td>17/07/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325002480001</td><td>LAMINI</td><td>P</td><td>10/02/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320807730001</td><td>WARDI</td><td>L</td><td>08/07/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326611790001</td><td>SUDARMUJIATI</td><td>P</td><td>26/11/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325310970002</td><td>YULIANA LELI RAMADANI</td><td>P</td><td>13/10/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326204070001</td><td>WINARTI NURUL AENI</td><td>P</td><td>22/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321107500001</td><td>SUROTO</td><td>L</td><td>11/07/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325411550001</td><td>BAIYAH</td><td>P</td><td>14/11/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324704880002</td><td>MITA ISWATI</td><td>P</td><td>07/04/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320402950001</td><td>SUYONO</td><td>L</td><td>04/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324504070001</td><td>CANDRA KIRANA SULISTIANI</td><td>P</td><td>05/04/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321412450002</td><td>SATAR</td><td>L</td><td>14/12/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325211400002</td><td>SIAMI</td><td>P</td><td>12/11/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320510810003</td><td>ISWANTO</td><td>L</td><td>05/10/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321010580001</td><td>MOCH SOLEH</td><td>L</td><td>10/10/1958</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325203720002</td><td>SUWARTI</td><td>P</td><td>12/03/1972</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321001890001</td><td>WENDIKA. SUISTIYO</td><td>L</td><td>10/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322807940001</td><td>RIZKI HENDRIK Y</td><td>L</td><td>28/07/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320110080001</td><td>WHENDA RISTRIAN</td><td>L</td><td>01/10/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320407740002</td><td>JURIANTO</td><td>L</td><td>04/07/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325112750001</td><td>SUTINI</td><td>P</td><td>11/12/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324909970002</td><td>YATI DUWIANI</td><td>P</td><td>09/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321002990005</td><td>FERINDA</td><td>L</td><td>10/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321003710002</td><td>YASIN</td><td>L</td><td>10/03/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325405770005</td><td>YULI MUJIATIN</td><td>P</td><td>14/05/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324608000003</td><td>SHELA ALFIKE FEBISAH</td><td>P</td><td>06/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321001810002</td><td>JONI</td><td>L</td><td>10/01/1981</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507327108820001</td><td>LIATIN</td><td>P</td><td>31/08/1982</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321304010005</td><td>YOGA APRILIANA PRATAMA PUTRA</td><td>L</td><td>13/04/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322503050002</td><td>AIBI RENDI ANSYAH</td><td>L</td><td>25/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325211650003</td><td>PARINI</td><td>P</td><td>12/11/1965</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101370013</td><td>TOSEN</td><td>L</td><td>01/01/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324107390001</td><td>TIAMI</td><td>P</td><td>01/07/1939</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321005800001</td><td>SUWARDI</td><td>L</td><td>10/05/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320101370015</td><td>TARMIN</td><td>L</td><td>01/01/1937</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507323112760006</td><td>SUTIKNO</td><td>L</td><td>31/12/1976</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324903810004</td><td>LILIK MARDIANA</td><td>P</td><td>09/03/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324302020003</td><td>RISMA DIAN FATHURROCHMA</td><td>P</td><td>03/02/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324705050002</td><td>RESTIE MEIRA ARDIANA</td><td>P</td><td>07/05/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325803070001</td><td>GAYUNK KIRANA DANISWARA</td><td>P</td><td>18/03/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322003080001</td><td>GALIH ELANG MAULUDDIN</td><td>L</td><td>20/03/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325106500002</td><td>PATEMI</td><td>P</td><td>11/06/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507323112630003</td><td>SURIADI BAYU SETIAWAN</td><td>L</td><td>31/12/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325709390001</td><td>MUSRINGAH</td><td>P</td><td>17/09/1939</td><td>Islam</td><td>Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PENSIUNAN</td></tr>
 <tr><td>3507320101700021</td><td>DAMAI</td><td>L</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325407760001</td><td>SRIATI</td><td>P</td><td>14/07/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322406950002</td><td>NURIYA DANI</td><td>L</td><td>24/06/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507323003020001</td><td>RAMA PUTRA ARDIANSA</td><td>L</td><td>30/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322004600002</td><td>LAMIN</td><td>L</td><td>20/04/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325507600002</td><td>RANTINAH</td><td>P</td><td>15/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320306840001</td><td>YULI AHMAD DIONO</td><td>L</td><td>03/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326510950001</td><td>RIKA TAMALA</td><td>P</td><td>25/10/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321007710001</td><td>SANTOSO</td><td>L</td><td>10/07/1971</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507325808860002</td><td>CITRA DEWI LESTARI</td><td>P</td><td>18/08/1986</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324203050004</td><td>DIYAH WIJAYANTI</td><td>P</td><td>02/03/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322506090002</td><td>DWI CANDRA SANJAYA</td><td>L</td><td>25/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325505400001</td><td>SALAMAH</td><td>P</td><td>15/05/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507323112300009</td><td>TASEMO</td><td>L</td><td>31/12/1930</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325112380001</td><td>PAIMAH</td><td>P</td><td>11/12/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324603580001</td><td>WARSI</td><td>P</td><td>06/03/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321112730003</td><td>SURIADI</td><td>L</td><td>11/12/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321303630003</td><td>GALUT ABDULANI</td><td>L</td><td>13/03/1963</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326006760002</td><td>NGATIN</td><td>P</td><td>20/06/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507323107950002</td><td>LUKAS NINDI ANDIKA</td><td>L</td><td>31/07/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325509960002</td><td>RAHEL ALIN NAFA</td><td>P</td><td>15/09/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326808410001</td><td>SUKARMI</td><td>P</td><td>28/08/1941</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321502850002</td><td>EFENDI HARIANTO</td><td>L</td><td>15/02/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322805690001</td><td>JUMADI</td><td>L</td><td>28/05/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322102960004</td><td>DONI FEBRIANTO</td><td>L</td><td>21/02/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321203580004</td><td>TUKIRAN</td><td>L</td><td>12/03/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324101700026</td><td>SRIAH</td><td>P</td><td>01/01/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322904900001</td><td>WINARTI</td><td>L</td><td>29/04/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326108960003</td><td>YUDI UTOMO</td><td>P</td><td>21/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325406540002</td><td>RESEK</td><td>P</td><td>14/06/1954</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325205950002</td><td>CLOUDIA</td><td>P</td><td>12/05/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320508470001</td><td>JAMAN</td><td>L</td><td>05/08/1947</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324602800002</td><td>SUSI HANDAYANI</td><td>P</td><td>06/02/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324801840001</td><td>UTIK UMAMI</td><td>P</td><td>08/01/1984</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321510740003</td><td>RIANTO</td><td>L</td><td>15/10/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320808000002</td><td>ADI SUSANTO</td><td>L</td><td>08/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320711300001</td><td>SUMARTO</td><td>L</td><td>07/11/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325306870001</td><td>SUDARMANI</td><td>P</td><td>13/06/1987</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321708810003</td><td>HERI AGUSTYAN</td><td>L</td><td>17/08/1981</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320506480004</td><td>SAURI</td><td>L</td><td>05/06/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507324907510002</td><td>TIARAH</td><td>P</td><td>09/07/1951</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324409820003</td><td>UCIK INDRAWATI</td><td>P</td><td>04/09/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507322202870001</td><td>TONI SUBIANTORO</td><td>L</td><td>22/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320704890002</td><td>DERIS ARISANDI</td><td>L</td><td>07/04/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321407910001</td><td>HERI SISWANTO</td><td>L</td><td>14/07/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322108550002</td><td>TARIP</td><td>L</td><td>21/08/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325207630005</td><td>YATIN</td><td>P</td><td>12/07/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321211820001</td><td>WINARKO</td><td>L</td><td>12/11/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325803970001</td><td>DEVI KRISTIANINGSIH</td><td>P</td><td>18/03/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101750021</td><td>ATIM</td><td>L</td><td>01/01/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325606820001</td><td>IRAWATI</td><td>P</td><td>16/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326509010001</td><td>SEPTIANA WINI ANDARISTA</td><td>P</td><td>25/09/2001</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326602080001</td><td>KIKIN QUEEN MALIKA</td><td>P</td><td>26/02/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321401340001</td><td>SAIPIN</td><td>L</td><td>14/01/1934</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108450022</td><td>JEMINEM</td><td>P</td><td>01/08/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320803570002</td><td>HARIANTO</td><td>L</td><td>08/03/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324804670004</td><td>DAMILAH</td><td>P</td><td>08/04/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324101890014</td><td>LINDA CRISDIANA</td><td>P</td><td>01/01/1989</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323003600001</td><td>UMAR</td><td>L</td><td>30/03/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325304730001</td><td>WIDIK MARTINI</td><td>P</td><td>13/04/1973</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325606880002</td><td>GARISTA FENDI ANTIKA</td><td>P</td><td>16/06/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505920001</td><td>WULAN NAWANGSARI</td><td>P</td><td>15/05/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326312930001</td><td>YAYUK SETIOWATI</td><td>P</td><td>23/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321508540002</td><td>PURNADI</td><td>L</td><td>15/08/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERANGKAT DESA</td></tr>
 <tr><td>3507325202650001</td><td>SARTINI</td><td>P</td><td>12/02/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326108970002</td><td>FATMA RUSIOWATI</td><td>P</td><td>21/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321506620002</td><td>LASIMIN</td><td>L</td><td>15/06/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325702770002</td><td>NI'MAH</td><td>P</td><td>17/02/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324303880003</td><td>LASIANAH</td><td>P</td><td>03/03/1988</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325511000001</td><td>LELI KHOFIFAH</td><td>P</td><td>15/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321902430001</td><td>SAUN</td><td>L</td><td>19/02/1943</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108450023</td><td>LASMINI</td><td>P</td><td>01/08/1945</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324804630002</td><td>YATI</td><td>P</td><td>08/04/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320608570001</td><td>SUPENO</td><td>L</td><td>06/08/1957</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320406840003</td><td>DEDIK IRAWAN</td><td>L</td><td>04/06/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320101610001</td><td>GIRI</td><td>L</td><td>01/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324709690001</td><td>LI'ANI</td><td>P</td><td>07/09/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326809870001</td><td>LIA ANGGRAENI</td><td>P</td><td>28/09/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321403960001</td><td>YOPI DWI NOPEL</td><td>L</td><td>14/03/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322403770001</td><td>PANDRI</td><td>L</td><td>24/03/1977</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324302780001</td><td>ISWANTI</td><td>P</td><td>03/02/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321510990002</td><td>LUKY ALIFFERNANDA</td><td>L</td><td>15/10/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322601060002</td><td>DITO DWI FERNANDA</td><td>L</td><td>26/01/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507326311080001</td><td>TRIA ANGGUN FERNANDA</td><td>P</td><td>23/11/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324109500001</td><td>TUMINAH</td><td>P</td><td>01/09/1950</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325107690002</td><td>LIATI</td><td>P</td><td>11/07/1969</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321912870002</td><td>EKO NANANG KOSIM</td><td>L</td><td>19/12/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320201610005</td><td>JASEMIN</td><td>L</td><td>02/01/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>TUKANG BATU</td></tr>
 <tr><td>3507325203650001</td><td>RATI</td><td>P</td><td>12/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326403920001</td><td>FITA YULIANA</td><td>P</td><td>24/03/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321412980001</td><td>RIKO SETIAWAN</td><td>L</td><td>14/12/1998</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324108400015</td><td>PATIMAH</td><td>P</td><td>01/08/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321605580001</td><td>WAJI</td><td>L</td><td>16/05/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326402660001</td><td>YATI</td><td>P</td><td>24/02/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321406870001</td><td>DAVID DWI UNTARAYANA</td><td>L</td><td>14/06/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325011290001</td><td>RUPIYAH</td><td>P</td><td>10/11/1929</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321709540002</td><td>SELARI</td><td>L</td><td>17/09/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325304580001</td><td>TATIK</td><td>P</td><td>13/04/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325812780001</td><td>YAHMI</td><td>P</td><td>18/12/1978</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320312900002</td><td>WIWIT SETIAWAN</td><td>L</td><td>03/12/1990</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320411070001</td><td>WILLYAM</td><td>L</td><td>04/11/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322905690001</td><td>SUBANDI</td><td>L</td><td>29/05/1969</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325304750002</td><td>SUHARTI</td><td>P</td><td>13/04/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321912920003</td><td>DENI ANDIKA PRATAMA</td><td>L</td><td>19/12/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325709980003</td><td>KIKI DWI ANTIKA SARI</td><td>P</td><td>17/09/1998</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322308060001</td><td>TRIO WAHYU AGUS ADI SAPUTRA</td><td>L</td><td>23/08/2006</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321801360001</td><td>SRIMAN</td><td>L</td><td>18/01/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326206550001</td><td>NYASIATIN</td><td>P</td><td>22/06/1955</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507322103850001</td><td>HERU HARIONO</td><td>L</td><td>21/03/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324108350015</td><td>KARSINI</td><td>P</td><td>01/08/1935</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325111850004</td><td>YULIATIN</td><td>P</td><td>11/11/1985</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507321003950003</td><td>AGUNG RISWANTO</td><td>L</td><td>10/03/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320610520001</td><td>SELARI</td><td>L</td><td>06/10/1952</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325304580002</td><td>TATIK</td><td>P</td><td>13/04/1958</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324812780002</td><td>YAHMI</td><td>P</td><td>08/12/1978</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324903800001</td><td>TUNINGSIH</td><td>P</td><td>09/03/1980</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320311900001</td><td>WIWIT SETIAWAN</td><td>L</td><td>03/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101360013</td><td>WAJI</td><td>L</td><td>01/01/1936</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326911530001</td><td>SUTIARI</td><td>P</td><td>29/11/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321603620002</td><td>ANOM SLAMET</td><td>L</td><td>16/03/1962</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325804630001</td><td>PONITEN</td><td>P</td><td>18/04/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320808990001</td><td>MOCH SUGIO ADI SAPUTRO</td><td>L</td><td>08/08/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320107250001</td><td>PAIRAN</td><td>L</td><td>01/07/1925</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321810530001</td><td>SAIKUN</td><td>L</td><td>18/10/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325510610001</td><td>TINI</td><td>P</td><td>15/10/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325405770003</td><td>HARTATIK</td><td>P</td><td>14/05/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405770002</td><td>HARIATI</td><td>P</td><td>14/05/1977</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325202810001</td><td>TRI LESTARI</td><td>P</td><td>12/02/1981</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322012820001</td><td>HENDRIK HARIONO</td><td>L</td><td>20/12/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321512850001</td><td>ARIP MUSTOFA</td><td>L</td><td>15/12/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322511900002</td><td>EKO ADI WIYONO</td><td>L</td><td>25/11/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320807600002</td><td>SUTOYO</td><td>L</td><td>08/07/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324501650002</td><td>MAIMUNAH</td><td>P</td><td>05/01/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321810650002</td><td>JAROT SUWARI</td><td>L</td><td>18/10/1965</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEGAWAI NEGERI SIPIL</td></tr>
 <tr><td>3507324403700001</td><td>SRI WINARSIH</td><td>P</td><td>04/03/1970</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326711000003</td><td>NOVIANTI SEKAR MELATI</td><td>P</td><td>27/11/2000</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322612020001</td><td>DENDY TEGUH IRAWAN</td><td>L</td><td>26/12/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321208490001</td><td>SIONO</td><td>L</td><td>12/08/1949</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507324603660001</td><td>SATENI</td><td>P</td><td>06/03/1966</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507321704820001</td><td>ABD MANAP</td><td>L</td><td>17/04/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>NELAYAN/PERIKANAN</td></tr>
 <tr><td>3507325308920002</td><td>YULIATI</td><td>P</td><td>13/08/1992</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320108450015</td><td>SARIMUN</td><td>L</td><td>01/08/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507320108500027</td><td>KASENO</td><td>L</td><td>01/08/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101660014</td><td>TUMINI</td><td>P</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322005030002</td><td>MEI NUR EFENDI</td><td>L</td><td>20/05/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321309860002</td><td>MUHAMAD SYAH RONI</td><td>L</td><td>13/09/1986</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325710900001</td><td>SITI KHOLIYAH</td><td>P</td><td>17/10/1990</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321909090001</td><td>MUHAMAD FAREL RAMADANI</td><td>L</td><td>19/09/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320209750004</td><td>NGASERI</td><td>L</td><td>02/09/1975</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326907830001</td><td>SUMAH</td><td>P</td><td>29/07/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322008000002</td><td>ANDI PRAYOGO</td><td>L</td><td>20/08/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321205020002</td><td>GALANG SATRIYO</td><td>L</td><td>12/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326606090002</td><td>RISMA MELATI</td><td>P</td><td>26/06/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320802370001</td><td>SUKRI</td><td>L</td><td>08/02/1937</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325206400001</td><td>PONI</td><td>P</td><td>12/06/1940</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321908810002</td><td>DODIT PALUPI</td><td>L</td><td>19/08/1981</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507324403790002</td><td>MISTIARI</td><td>P</td><td>04/03/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>LAINNYA</td></tr>
 <tr><td>3507322301090001</td><td>MUHAMAT DAVIT ZANUAR</td><td>L</td><td>23/01/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320503850003</td><td>SUSENO</td><td>L</td><td>05/03/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325507850007</td><td>LAILATUL FITRIYAH</td><td>P</td><td>15/07/1985</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325304110001</td><td>SINTIA SARI</td><td>P</td><td>13/04/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321307820005</td><td>PURNOMO</td><td>L</td><td>13/07/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326712850001</td><td>DWI MARIANA</td><td>P</td><td>27/12/1985</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322606110001</td><td>DAFFA FERNANDA PUTRA</td><td>L</td><td>26/06/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321506820001</td><td>AGUS SUPRAPTO</td><td>L</td><td>15/06/1982</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326712830002</td><td>SURATMIKATIN</td><td>P</td><td>27/12/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321508030002</td><td>M DHEVA JIHADUDIN MABRURI</td><td>L</td><td>15/08/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325805110001</td><td>DEVITA MAHARANI</td><td>P</td><td>18/05/2011</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320108600013</td><td>SURADI</td><td>L</td><td>01/08/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108650022</td><td>YATMINI</td><td>P</td><td>01/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321307870001</td><td>WIWIT</td><td>L</td><td>13/07/1987</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320502950001</td><td>DWI SISWANTO</td><td>L</td><td>05/02/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324711020001</td><td>NIKE SRIWAHYUNI</td><td>P</td><td>07/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320511480001</td><td>KASENO</td><td>L</td><td>05/11/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325112350001</td><td>TUMINI</td><td>P</td><td>11/12/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322006030002</td><td>MEI NUR EFENDI</td><td>L</td><td>20/06/2003</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320406420003</td><td>JAMIN</td><td>L</td><td>04/06/1942</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324906530001</td><td>DARSINI</td><td>P</td><td>09/06/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321010860002</td><td>CATUR PRASTIYO</td><td>L</td><td>10/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507327001910001</td><td>RINI YUNINGSIH</td><td>P</td><td>30/01/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320501710001</td><td>BEJO UTOMO</td><td>L</td><td>05/01/1971</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507326505760002</td><td>YANTI</td><td>P</td><td>25/05/1976</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326804960001</td><td>IKA DESI ARISTATI</td><td>P</td><td>28/04/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325511030001</td><td>NOVIA PUTRI HANDAYANI</td><td>P</td><td>15/11/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321008350002</td><td>MARSIDIN</td><td>L</td><td>10/08/1935</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324801600001</td><td>NGATINI</td><td>P</td><td>08/01/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325507450003</td><td>BAWON</td><td>P</td><td>15/07/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>PEDAGANG</td></tr>
 <tr><td>3507324901790001</td><td>MARIANI</td><td>P</td><td>09/01/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321210380001</td><td>KAMAN</td><td>L</td><td>12/10/1938</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325802530001</td><td>SATUNAH</td><td>P</td><td>18/02/1953</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322210820001</td><td>YAHMAD</td><td>L</td><td>22/10/1982</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320707840004</td><td>DARNIAWAN</td><td>L</td><td>07/07/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320510860004</td><td>SUGIANTO</td><td>L</td><td>05/10/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507322506890001</td><td>BUDIONO</td><td>L</td><td>25/06/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324507910002</td><td>YETI YUNINGSIH</td><td>P</td><td>05/07/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320909940003</td><td>LESTARIONO</td><td>L</td><td>09/09/1994</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322208630001</td><td>DARMAJI</td><td>L</td><td>22/08/1963</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325008740004</td><td>SUJAR</td><td>P</td><td>10/08/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320904880001</td><td>SUBARI</td><td>L</td><td>09/04/1988</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324402930002</td><td>SINARSEH</td><td>P</td><td>04/02/1993</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324512970003</td><td>NOVI SAFITRI</td><td>P</td><td>05/12/1997</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321508070001</td><td>AGUS GALO FEBRIANTO</td><td>L</td><td>15/08/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321006500001</td><td>TUKIMIN</td><td>L</td><td>10/06/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326106610001</td><td>LASTU'AH</td><td>P</td><td>21/06/1961</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321601720001</td><td>DARIANTO</td><td>L</td><td>16/01/1972</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321102790001</td><td>WARIMAN</td><td>L</td><td>11/02/1979</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322504660001</td><td>WINANTO</td><td>L</td><td>25/04/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324712690002</td><td>ERIATI</td><td>P</td><td>07/12/1969</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507326505890001</td><td>YAYUK SRI BAYU ULANDARI</td><td>P</td><td>25/05/1989</td><td>Islam</td><td>Belum Kawin</td><td>Akademi/Diploma III/S. Muda</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320508960002</td><td>RENDA MAHENDI</td><td>L</td><td>05/08/1996</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324701020001</td><td>ERWIN FERMITA SARI</td><td>P</td><td>07/01/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507325507400003</td><td>NGATIRAH</td><td>P</td><td>15/07/1940</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325508860003</td><td>ENI SUSANTI</td><td>P</td><td>15/08/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320308400001</td><td>PORNADI</td><td>L</td><td>03/08/1940</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324507480003</td><td>JINEM</td><td>P</td><td>05/07/1948</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507325805700001</td><td>YAMINI</td><td>P</td><td>18/05/1970</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320707830002</td><td>HADI SURENTO</td><td>L</td><td>07/07/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507322206850001</td><td>HADI ANTON PRABOWO</td><td>L</td><td>22/06/1985</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507325308910001</td><td>AGUS TINA NABELA</td><td>P</td><td>13/08/1991</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507320503650003</td><td>GIANTO</td><td>L</td><td>05/03/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324102820003</td><td>SOLIKAH</td><td>P</td><td>01/02/1982</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321809000001</td><td>FRENDI WAGIANTO</td><td>L</td><td>18/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507323004030003</td><td>FERDI SUJIWO</td><td>L</td><td>30/04/2003</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321605670001</td><td>JEMU</td><td>L</td><td>16/05/1967</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507325507640003</td><td>MUJIATI</td><td>P</td><td>15/07/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324301900002</td><td>ANI MASHUDA</td><td>P</td><td>03/01/1990</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507321404920001</td><td>MIFTAKUL ROZIKIN</td><td>L</td><td>14/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325505950001</td><td>DEWI KUSNIA</td><td>P</td><td>15/05/1995</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320811050001</td><td>MAHENDRA ILYAS MABURI</td><td>L</td><td>08/11/2005</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507325210450001</td><td>RAPI</td><td>P</td><td>12/10/1945</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320302840001</td><td>MARSAID CRISPRIANTO</td><td>L</td><td>03/02/1984</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322104540001</td><td>TARI</td><td>L</td><td>21/04/1954</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507325508550002</td><td>MARIATI</td><td>P</td><td>15/08/1955</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320608800001</td><td>SLAMET</td><td>L</td><td>06/08/1980</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507321109830001</td><td>MARIONO</td><td>L</td><td>11/09/1983</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320708890002</td><td>SULIANTO</td><td>L</td><td>07/08/1989</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324108550019</td><td>SITI</td><td>P</td><td>01/08/1955</td><td>Islam</td><td>Cerai Mati</td><td>Belum Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320412640001</td><td>GASPAR</td><td>L</td><td>04/12/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326209970001</td><td>NINING PRINGGO</td><td>P</td><td>22/09/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326505040001</td><td>RINA LESTIANI</td><td>P</td><td>25/05/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320305600001</td><td>SUMANTRI</td><td>L</td><td>03/05/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324608640001</td><td>LASIRAH</td><td>P</td><td>06/08/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507326712860001</td><td>DEWI SURYA</td><td>P</td><td>27/12/1986</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507322402640001</td><td>SABAR</td><td>L</td><td>24/02/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324108650023</td><td>LI'ATIN</td><td>P</td><td>01/08/1965</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324709790002</td><td>SITI KHOIRIYAH</td><td>P</td><td>07/09/1979</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322505820001</td><td>AHMAT ROZIKIN</td><td>L</td><td>25/05/1982</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320302870002</td><td>MAHBUb ahmadi</td><td>L</td><td>03/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507320312930001</td><td>AHMAT BAYU ISMAIL</td><td>L</td><td>03/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320105500003</td><td>ATIM</td><td>L</td><td>01/05/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507326404660001</td><td>DAKINI</td><td>P</td><td>24/04/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321812950003</td><td>SUGIANTO</td><td>L</td><td>18/12/1995</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322802990001</td><td>ANDRI KURNIAWAN</td><td>L</td><td>28/02/1999</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321202660005</td><td>SAIDI</td><td>L</td><td>12/02/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507326408740001</td><td>LASEMI</td><td>P</td><td>24/08/1974</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324703000004</td><td>SAFITRI MASRIKATUL ROHMI</td><td>P</td><td>07/03/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320907390001</td><td>TASEMAN</td><td>L</td><td>09/07/1939</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507321608830005</td><td>AHMAT FITNAN</td><td>L</td><td>16/08/1983</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321812860001</td><td>BAROCHATUL</td><td>L</td><td>18/12/1986</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507321501640001</td><td>SUWOTO</td><td>L</td><td>15/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325808680005</td><td>NGATINI</td><td>P</td><td>18/08/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507322402890002</td><td>DEDIK ISWANTO</td><td>L</td><td>24/02/1989</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326312940001</td><td>LINA SAPUTRI</td><td>P</td><td>23/12/1994</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322502600001</td><td>SUTOMO</td><td>L</td><td>25/02/1960</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PEDAGANG</td></tr>
 <tr><td>3507324812670004</td><td>SUNTARI</td><td>P</td><td>08/12/1967</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507326908970001</td><td>YAYUK WINDA SARI</td><td>P</td><td>29/08/1997</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320910500001</td><td>KASBAN</td><td>L</td><td>09/10/1950</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507324101660010</td><td>SAMINAH</td><td>P</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320411020002</td><td>MUHAMMAD RISKI</td><td>L</td><td>04/11/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320101500007</td><td>NGATEMAN</td><td>L</td><td>01/01/1950</td><td>Islam</td><td>Kawin</td><td>Tidak/Belum Sekolah</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101550003</td><td>SARTINI</td><td>P</td><td>01/01/1955</td><td>Islam</td><td>Kawin</td><td>Belum Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507322208850001</td><td>EDI SUSANTO</td><td>L</td><td>22/08/1985</td><td>Islam</td><td>Cerai Hidup</td><td>SLTP/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101280001</td><td>JAITUNI</td><td>P</td><td>01/01/1928</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101640004</td><td>SURONO</td><td>L</td><td>01/01/1964</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PETANI/PEKEBUN</td></tr>
 <tr><td>3507324101660017</td><td>SITI ROMELAH</td><td>P</td><td>01/01/1966</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507321909000004</td><td>M FAHRI ALI</td><td>L</td><td>19/09/2000</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507320603040001</td><td>A FAIZIN MUHARRAM</td><td>L</td><td>06/03/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101300004</td><td>SUKARTINAH</td><td>P</td><td>01/01/1930</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507324101480004</td><td>SITI AMINI</td><td>P</td><td>01/01/1948</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>BURUH TANI/PERKEBUNAN</td></tr>
 <tr><td>3507320101760008</td><td>RIANTO</td><td>L</td><td>01/01/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320101800004</td><td>KHOLIK</td><td>L</td><td>01/01/1980</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>PERDAGANGAN</td></tr>
 <tr><td>3507324101840001</td><td>ASTUTIK</td><td>P</td><td>01/01/1984</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507320101930005</td><td>ABD ROKHIM</td><td>L</td><td>01/01/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507324205740001</td><td>ANA MARIANA</td><td>P</td><td>02/05/1974</td><td>Islam</td><td>Kawin</td><td>SLTA/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507325504080001</td><td>CAMELIA EVITA</td><td>P</td><td>15/04/2008</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322707090003</td><td>MUKHAMAD SETIAWAN</td><td>L</td><td>27/07/2009</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321002680003</td><td>KASEMAN</td><td>L</td><td>10/02/1968</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507325204780001</td><td>INDAH APRI YANTI</td><td>P</td><td>12/04/1978</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507324812990001</td><td>DELA EVINDA</td><td>P</td><td>08/12/1999</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507326001040002</td><td>DWI FRADITA</td><td>P</td><td>20/01/2004</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507321410100001</td><td>M RICKY FIRMANSYAH</td><td>L</td><td>14/10/2010</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321503450001</td><td>TUKIRIN</td><td>L</td><td>15/03/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tidak/Belum Sekolah</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320205740004</td><td>MOH SHOLEH</td><td>L</td><td>02/05/1974</td><td>Islam</td><td>Cerai Hidup</td><td>Tamat SD/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320202870003</td><td>ADI SISWANTO</td><td>L</td><td>02/02/1987</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BURUH HARIAN LEPAS</td></tr>
 <tr><td>3507320409780003</td><td>DUDIEK HERDWIANTO</td><td>L</td><td>04/09/1978</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325010820005</td><td>HERNY</td><td>P</td><td>10/10/1982</td><td>Islam</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325407070004</td><td>CHELSEA AL GHANYY</td><td>P</td><td>14/07/2007</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321305650001</td><td>DAMANHURI</td><td>L</td><td>13/05/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325405650003</td><td>SUPARMI</td><td>P</td><td>14/05/1965</td><td>Islam</td><td>Kawin</td><td>SLTP/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320703020001</td><td>WAHYU SEJATI</td><td>L</td><td>07/03/2002</td><td>Islam</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507321607700002</td><td>LASMARI</td><td>L</td><td>16/07/1970</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324502760001</td><td>RINI</td><td>P</td><td>05/02/1976</td><td>Islam</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>MENGURUS RUMAH TANGGA</td></tr>
 <tr><td>3507320504920002</td><td>HENGKI PRAYITNO</td><td>L</td><td>05/04/1992</td><td>Islam</td><td>Belum Kawin</td><td>SLTP/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507322411960001</td><td>CHOIRIL ADI SAPUTRA</td><td>L</td><td>24/11/1996</td><td>Islam</td><td>Belum Kawin</td><td>Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324405020002</td><td>PUTRI UMAMI</td><td>P</td><td>04/05/2002</td><td>Islam</td><td>Belum Kawin</td><td>Belum Tamat SD/Sederajat</td><td>PELAJAR/MAHASISWA</td></tr>
 <tr><td>3507324101450040</td><td>RAKINI</td><td>P</td><td>01/01/1945</td><td>Islam</td><td>Cerai Mati</td><td>Tamat SD/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322312930002</td><td>DENDY PRIMA ADITYA</td><td>L</td><td>23/12/1993</td><td>Islam</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507250809740005</td><td>WILLEM GERARD RISAKOTA</td><td>L</td><td>08/09/1974</td><td>Kristen</td><td>Kawin</td><td>Diploma IV/Strata I</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507324403750001</td><td>WIWIK SUMARIYAH</td><td>P</td><td>04/03/1975</td><td>Kristen</td><td>Kawin</td><td>SLTP/Sederajat</td><td>KARYAWAN SWASTA</td></tr>
 <tr><td>3507326712090001</td><td>SHELOMITA NATASHA RISAKOTA</td><td>P</td><td>27/12/2009</td><td>Kristen</td><td>Belum Kawin</td><td>Tidak/Belum Sekolah</td><td>BELUM/TIDAK BEKERJA</td></tr>
 <tr><td>3507322405520001</td><td>M DARMAWAN SETYADI</td><td>L</td><td>24/05/1952</td><td>Kristen</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507325008570005</td><td>MARIA HARTINI</td><td>P</td><td>10/08/1957</td><td>Kristen</td><td>Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507320507850002</td><td>YOHANES CHANDRA K</td><td>L</td><td>05/07/1985</td><td>Kristen</td><td>Belum Kawin</td><td>SLTA/Sederajat</td><td>WIRASWASTA</td></tr>
 <tr><td>3507324810610003</td><td>TUTIK CHOIRIYAH</td><td>P</td><td>08/10/1961</td><td>Kristen</td><td>Kawin</td><td>Tamat SD/Sederajat</td><td>WIRASWASTA</td></tr>
</tbody></table>

        </h3>
        <p>
        </p>
    </div>
    <!-- batas contoh konten -->
<?= $this->endSection();?>