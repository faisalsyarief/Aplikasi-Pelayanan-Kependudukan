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
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Aktakelahiran/indexweb">Akta Kelahiran</a></li></div>
      <div class="main-row"><li><a class="active" href="<?php echo base_url()?>index.php/Aktakematian/indexweb">Akta Kematian</a></li></div>
      <div class="main-row"><li><a href="<?php echo base_url()?>index.php/Pindahdomisili/indexweb">Pindah Domisili</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/AKtakelahiran/bantuankelahiran">Bantuan</a></li></div>
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakematian/indexmonitoring">Kembali</a></li></div>
    </ul>

  <!-- main -->
  <div class="main">
    <h1>Monitoring Pendaftaran <br>Akta Kematian Online</h1>
    <div class="main-row"> 
          <div align="center">
              <table id="example1" align="center" class="table table-bordered table-striped">
<thead>
            <tr>
              <th><div align="center">NIK</div></th>
              <th><div align="center">Nama Kepala Keluarga</div></th>
              <th><div align="center">Nama Lengkap</div></th>
              <th><div align="center">Jenis Kelamin</div></th>
              <th><div align="center">Tanggal Lahir</div></th>
              <th><div align="center">Tempat Lahir</div></th>
              <th><div align="center">Agama</div></th>
              <th><div align="center">Alamat</div></th>
              <th><div align="center">Anak Ke</div></th>
              <th><div align="center">Tanggal Kematian</div></th>
              <th><div align="center">Sebab Kematian</div></th>
              <th><div align="center">Tempat Kematian</div></th>
            </tr>
          </thead>
              <tbody>
             <?php foreach($cetak_kematian as $row) : 

				$nik_kematian=$row->nik_kematian;
				$nm_kepala=$row->nm_kepala;
				$nama_lengkap=$row->nama_lengkap;
				$jenis_klm=$row->jenis_klm;
				$tanggl_lahir=$row->tanggl_lahir;
				$tmpt_lahir=$row->tmpt_lahir;
				$agama=$row->agama;
				$alamt=$row->alamt;
				$ankke=$row->ankke;
				$tgl_kematian=$row->tgl_kematian;
				$sebab_kematian=$row->sebab_kematian;
				$tmpt_kematian=$row->tmpt_kematian;
				endforeach;
				?> 
                          <tr>
                            <td><div align="center"><?php print $nik_kematian; ?></div></td>
                            <td><div align="center"><?php print $nm_kepala; ?></div></td>
                            <td><div align="center"><?php print $nama_lengkap; ?></div></td>
                            <td><div align="center"><?php print $jenis_klm; ?></div></td>
                            <td><div align="center"><?php print $tanggl_lahir; ?></div></td>
                            <td><div align="center"><?php print $tmpt_lahir; ?></div></td>
                            <td><div align="center"><?php print $agama; ?></div></td>
                            <td><div align="center"><?php print $alamt; ?></div></td>
                            <td><div align="center"><?php print $ankke; ?></div></td>
                            <td><div align="center"><?php print $tgl_kematian; ?></div></td>
                            <td><div align="center"><?php print $sebab_kematian; ?></div></td>
                            <td><div align="center"><?php print $tmpt_kematian; ?></div></td>
                         </tr>
             </tbody>
         </table>

         <table id="example1" align="center" class="table table-bordered table-striped">
<thead>
            <tr>
              <th><div align="center">Foto Akta Kelahiran</div></th>
              <th><div align="center">Foto Akta Nikah</div></th>
              <th><div align="center">Foto KTP</div></th>
              <th><div align="center">Surat Ket. RT</div></th>
              <th><div align="center">Surat Ket. RW</div></th>
            </tr>
          </thead>
              <tbody>
					              
					<?php foreach($cetak_berkasmati as $row) : 

					$ftcop_akta_kelahiran=$row->ftcop_akta_kelahiran;
					$ftcop_akta_perkawinan=$row->ftcop_akta_perkawinan;
					$ktpp=$row->ktpp;
          $srt_ket_rt=$row->srt_ket_rt;
          $srt_ket_rw=$row->srt_ket_rw;
					endforeach;
					?>   
                          <tr>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcop_akta_kelahiran) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcop_akta_perkawinan) ?>" width="200px" height="150px"></div></td>
                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ktpp) ?>" width="200px" height="150px"></div></td>
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