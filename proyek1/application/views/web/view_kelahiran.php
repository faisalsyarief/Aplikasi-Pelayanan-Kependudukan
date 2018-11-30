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
      <div class="main-row"><li><a class="active" href="<?php echo base_url()?>index.php/Aktakelahiran/indexweb">Akta Kelahiran</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Aktakematian/indexweb">Akta Kematian</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Pindahdomisili/indexweb">Pindah Domisili</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/AKtakelahiran/bantuankelahiran">Bantuan</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakelahiran/indexmonitoring">Kembali</a></li></div>
    </ul>

  <!-- main -->
  <div class="main">
    <h1>Monitoring Pendaftaran <br>Akta Kelahiran Online</h1>
    <div class="main-row"> 
          <div align="center">
              <table id="example1" align="center" class="table table-bordered table-striped">
<thead>
            <tr>
              <th><div align="center">NIK</div></th>
              <th><div align="center">Nama Ayah</div></th>
              <th><div align="center">Nama Ibu</div></th>
              <th><div align="center">Nama Lengkap</div></th>
              <th><div align="center">Jenis Kelamin</div></th>
              <th><div align="center">Tempat Dilahirkan</div></th>
              <th><div align="center">Kabupaten</div></th>
              <th><div align="center">Tanggal Lahir</div></th>
            </tr>
          </thead>
              <tbody>
              <?php foreach($cetak_kelahiran as $row) : 

				$nik=$row->nik;
				$nm_kpl_keluarga=$row->nm_kpl_keluarga;
        $nama_ibu=$row->nama_ibu;
				$nm_lengkap=$row->nm_lengkap;
				$jk=$row->jk;
				$tmpt_dilahirkan=$row->tmpt_dilahirkan;
				$kabupaten=$row->kabupaten;
				$tgl_lahir=$row->tgl_lahir;
				endforeach;
				?>    
                          <tr>
                            <td><div align="center"><?php print $nik; ?></div></td>
                            <td><div align="center"><?php print $nm_kpl_keluarga; ?></div></td>
                            <td><div align="center"><?php print $nama_ibu; ?></div></td>
                            <td><div align="center"><?php print $nm_lengkap; ?></div></td>
                            <td><div align="center"><?php print $jk; ?></div></td>
                            <td><div align="center"><?php print $tmpt_dilahirkan; ?></div></td>
                            <td><div align="center"><?php print $kabupaten; ?></div></td>
                            <td><div align="center"><?php print $tgl_lahir; ?></div></td>
                         </tr>
             </tbody>
         </table>

         <table id="example1" align="center" class="table table-bordered table-striped">
<thead>
            <tr>
              <th><div align="center">Foto Surat Keterangn Kelahiran</div></th>
              <th><div align="center">Foto KK</div></th>
              <th><div align="center">Foto Akta Nikah</div></th>
              <th><div align="center">Foto KTP</div></th>
              <th><div align="center">Surat Ket. RT</div></th>
              <th><div align="center">Surat Ket. RW</div></th>
            </tr>
          </thead>
              <tbody>
              <?php foreach($cetak_berkaslahir as $row) : 

				$srt_ket_kelahiran=$row->srt_ket_kelahiran;
				$ftcopy_kk=$row->ftcopy_kk;
				$ftcop_aktanikah=$row->ftcop_aktanikah;
				$ktp=$row->ktp;
        $srt_ket_rt=$row->srt_ket_rt;
        $srt_ket_rw=$row->srt_ket_rw;
				endforeach;
				?>    
                          <tr>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_kelahiran) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcopy_kk) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcop_aktanikah) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ktp) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_rt) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_rw) ?>" width="200px" height="150px"></div></td>
                         </tr>
             </tbody>
         </table>
<div id="footer">
</div>
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