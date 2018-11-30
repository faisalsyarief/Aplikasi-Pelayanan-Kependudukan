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
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php">Beranda</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Aktakelahiran/indexweb">Akta Kelahiran</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Aktakematian/indexweb">Akta Kematian</a></li></div>
      <div class="main-row"><li><a class="active" href="<?php echo base_url()?>index.php/Pindahdomisili/indexweb">Pindah Domisili</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Pindahdomisili/bantuanpindahkeluar">Bantuan</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Pindahdomisili/indexdaftar">Kembali</a></li></div>
    </ul>


<?php
  $no=1;
    if(isset($data_pindahkeluar1)){
      foreach($data_pindahkeluar1 as $row){
                                                  $id = $row->id_tujuan;
    ?>
          <?php }
        }
          ?>

  <!-- main -->
  <div class="main">
    <h1>Form Permohonan Pindah Keluar</h1>
    <div class="main-row"> 

    <div><?= validation_errors() ?></div>
    <form action="<?php echo base_url()?>index.php/Pindahdomisili1/simpaneditdaftar/<?php echo $id; ?>" method="POST">
      <table>
          <legend><span class="number">2</span>Data Kepindahan</legend><br>
          <label>Alamat Tujuan Pindah :</label>
          <input type="text" id="almtt" name="almtt" required><br>
          <label>RT / RW :</label>
          <input type="text" id="rtrww" name="rtrww" required><br>
          <label>Propinsi :</label>
          <input type="text" id="prov" name="prov" required><br>
          <label>Kabupaten :</label>
          <input type="text" id="kabb" name="kabb" required><br>
          <label>Kecamatan :</label>
          <input type="text" id="kecc" name="kecc" required><br>
          <label>Kelurahan :</label>
          <input type="text" id="kell" name="kell" required><br>
          <label>Kode Pos :</label>
          <input type="text" id="ps" name="ps" required><br><br>

          <div align="center"><button type="submit" value="Simpan" name="Simpan">Simpan</button></div>

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