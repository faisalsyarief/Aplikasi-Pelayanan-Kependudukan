<!DOCTYPE html>
<html>
<head>
<title>Pelayanan Kependudukan</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/web/css/form.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets/web/css/stylew.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>

</head>

<body>

    <ul>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakematian">Kembali</a></li></div>
    </ul>

<?php
  $no=1;
    if(isset($data_kematian)){
      foreach($data_kematian as $row){
    ?>
          <?php }
        }
          ?>

  <!-- main -->
  <div class="main">
    <h1>Form Pendaftaran <br>Akta Kematian Online</h1>
    <div class="main-row"> 
    <div><?= validation_errors() ?></div>

    <form action="<?php echo base_url()?>index.php/Aktakematian/daftarkematian1" method="POST">
      <table>
          <legend><span class="number">1</span>Data Diri</legend><br>
          <label>NIK :</label>
          <input type="text" name="nikk" required><br>

          <label>Nama Lengkap :</label>
          <input type="text" id="nml" name="nml" required><br>
          
          <label>Nama Ayah :</label>
          <input type="text" name="nmkepl" required><br>

          <label>Nama Ibu :</label>
          <input type="text" name="nmibu" required><br>

          <label>Jenis Kelamin :</label>
          <input type="radio" id="jns" value="Laki - Laki" name="jns" required><label class="light">Laki - Laki</label><br>
          <input type="radio" id="jns" value="Perempuan" name="jns" required><label class="light">Perempuan</label><br><br>

          <label>Tanggal Lahir :</label>
          <input type="date" id="tgll" name="tgll" required><br>

          <label>Tempat Lahir :</label>
          <input type="text" id="tmpt" name="tmpt" required><br>
          
          <label>Agama :</label>
          <input type="radio" id="agm" value="Islam" name="agm" required><label class="light">Islam</label><br>
          <input type="radio" id="agm" value="Kristen" name="agm" required><label class="light">Kristen</label><br>
          <input type="radio" id="agm" value="Katolik" name="agm" required><label class="light">Katolik</label><br>
          <input type="radio" id="agm" value="Hindu" name="agm" required><label class="light">Hindu</label><br>
          <input type="radio" id="agm" value="Budha" name="agm" required><label class="light">Budha</label><br>
          <input type="radio" id="agm" value="Lainnya" name="agm" required><label class="light">Lainnya</label><br><br>

          <label>Alamat :</label>
          <input type="text" id="alamt" name="alamt" required><br>

          <label>Anak Ke :</label>
          <input type="text" id="ank" name="ank" required><br>

          <label>Tanggal Kematian :</label>
          <input type="date" id="tglk" name="tglk" required><br>

          <label>Sebab Kematian :</label>
          <input type="radio" id="sbb" value="Sakit Biasa / Tua" name="sbb" required><label class="light">Sakit Biasa / Tua</label><br>
          <input type="radio" id="sbb" value="Wabah Penyakit" name="sbb" required><label class="light">Wabah Penyakit</label><br>
          <input type="radio" id="sbb" value="Kecelakaan" name="sbb" required><label class="light">Kecelakaan</label><br>
          <input type="radio" id="sbb" value="Kriminalitas" name="sbb" required><label class="light">Kriminalitas</label><br>
          <input type="radio" id="sbb" value="Bunuh Diri" name="sbb" required><label class="light">Bunuh Diri</label><br>
          <input type="radio" id="sbb" value="Lainnya" name="sbb" required><label class="light">Lainnya</label><br><br>

          <label>Tempat Kematian :</label>
          <input type="text" id="tmptk" name="tmptk" required><br>

          <input type="hidden" id="sts" name="sts" value="Belum Selesai" required><br>

          <div align="center"><button type="submit" value="Simpan">Simpan</button></div>

      </table>
    </form>
    </div>
  </div>
<div id="footer">
</div>

  <!-- //main --> 
  <!-- copyright -->
  <div class="copyright">
    <p>PERHATIAN !!!</p>
    <p>"Barang siapa dengan sengaja melakukan pemalsuan identitas diri atau dokumen terhadap instansi pelaksana,</p>
    <p>maka dapat terancam hukuman pidana 6 tahun atau denda sebesar 50 Juta Rupiah"</p>
    <p>Undang-Undang No.23 Tahun 2006 Bab 12</p>
  </div>
  <div class="copyright">
    <p> © 2016 Informatic Engineering. All Rights Reserved. Created By Faisal Syarifuddin & Ayu Permata Sari</p>
  <div>
</body>
</html>