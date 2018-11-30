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
<link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>/assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- Custom CSS -->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets/web/css/stylex.css" rel="stylesheet" type="text/css" media="all" />
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
      <div class="main-row"><li><a class="active" href="<?php echo base_url()?>index.php/Aktakematian/indexweb">Akta Kematian</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Pindahdomisili/indexweb">Pindah Domisili</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakematian/bantuankematian">Bantuan</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakematian/indexweb">Kembali</a></li></div>
    </ul>

  <!-- main -->
  <div class="main">
    <h1>Monitoring Pendaftaran <br>Akta Kematian Online</h1>
    <div class="main-row"> 

<?php
  $no=1;
    if(isset($data_kematian)){
      foreach($data_kematian as $row){
    ?>
          <?php }
        }
          ?>


          <form action="<?php print site_url();?>/Aktakematian/cariweb" method=POST>
              Cari NIK Anda:
              <input type="search" name="cari">
            </form><br>

        </table>

          <div align="center">
              <table id="example1" align="center" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><div align="center">NIK</div></th>
              <th><div align="center">Nama Ayah</div></th>
              <th><div align="center">Nama Ibu</div></th>
              <th><div align="center">Nama Lengkap</div></th>
              <th><div align="center">Jenis Kelamin</div></th>
              <th><div align="center">Tanggal Daftar</div></th>
              <th><div align="center">Tanggal Pengambilan</div></th>
              <th><div align="center">Status</div></th>
              <th><div align="center">Aksi</div></th>
            </tr>
          </thead>
              <tbody>
                    <?php foreach($monitoring_kematian as $row) : ?>      
                          <tr>
                            <td><div align="center"><?php print $row->nik_kematian; ?></div></td>
                            <td><div align="center"><?php print $row->nm_kepala; ?></div></td>
                            <td><div align="center"><?php print $row->nm_ibu; ?></div></td>
                            <td><div align="center"><?php print $row->nama_lengkap; ?></div></td>
                            <td><div align="center"><?php print $row->jenis_klm; ?></div></td>
                            <td><div align="center"><?php echo date("d M Y H:i:s",strtotime($row->tgl_daftarr)); ?></div></td>
                            <td><div align="center"><?php print $row->tgl_ambil; ?></div></td>
                            <td><div align="center"><?php print $row->statuss; ?></div></td>
                            <td width="20%"><div align="center">
                            <a href="<?php echo base_url()?>index.php/cetak/view_kematian/<?php print $row->nik_kematian; ?>/<?php print $row->id_berkass; ?>" type="button" class="fa fa-eye"><b> Lihat | </b></a>
                            <a href="<?php echo base_url()?>index.php/cetak/cetak_kematian/<?php print $row->nik_kematian; ?>/<?php print $row->id_berkass; ?>" type="button" target="_blank" class="fa fa-print"><b> Cetak</b></a></div></td>
                         </tr>

                    <?php endforeach; ?>
             </tbody>
         </table><br>  
    </div>
<div id="footer">
</div>
    </div>   
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