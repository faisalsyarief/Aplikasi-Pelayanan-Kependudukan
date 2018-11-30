<!DOCTYPE HTML>
<html>
<head>
<title>Pelayanan Kependudukan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/amcharts.js"></script>	
<script src="<?php echo base_url();?>/assets/admin/js/serial.js"></script>	
<script src="<?php echo base_url();?>/assets/admin/js/light.js"></script>	
<script src="<?php echo base_url();?>/assets/admin/js/radar.js"></script>	
<link href="<?php echo base_url();?>/assets/admin/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>/assets/admin/css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="<?php echo base_url();?>/assets/admin/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="<?php echo base_url();?>/assets/admin/js/skycons.js"></script>

<script src="<?php echo base_url();?>/assets/admin/js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
									    <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i></i> <span class="badge"></span></a>			
										</li>
															   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<div class="outter-wp">	
									<div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
                      <li><a href="<?php echo base_url()?>index.php/Pindahdomisili">Data Asal</a></li>
                      <li><a href="<?php echo base_url()?>index.php/Pindahdomisili1">Data Tujuan</a></li>
                      <li><a href="<?php echo base_url()?>index.php/Pindahdomisili/indexmonitoringadmin">Cetak Data</a></li>
										</ol>
									</div>

             <?php
                            $message = $this->session->flashdata('notif');
                                if($message){
                             echo '<div class="alert alert-success">' .$message. '</div>';
                                }?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tujuan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><br>

          <form action="<?php print site_url();?>/Pindahdomisili1/cari" method=POST>
                <input type="submit" value="Cari NIK Anda">
                <input type="text" name="cari"> 
          </form><br>

              <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                                        <tr>
                                            <th><div align="center">No</div></th>
                                            <th><div align="center">NIK</div></th>
                                            <th><div align="center">Alamat</div></th>
                                            <th><div align="center">RT / RW</div></th>
                                            <th><div align="center">Provinsi</div></th>
                                            <th><div align="center">Kabupaten</div></th>
                                            <th><div align="center">Kecematan</div></th>
                                            <th><div align="center">Kelurahan</div></th>
                                            <th><div align="center">Kode POS</div></th>
                                            <th><div align="center">Aksi</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                          if(isset($data_pindahkeluar1)){
                                                foreach($data_pindahkeluar1 as $row){
                                            ?>
                                        <tr>
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                            <td><div align="center"><?php echo $row->nik_pindah; ?></div></td>
                                            <td><div align="center"><?php echo $row->almt_tjuan; ?></div></td>
                                            <td><div align="center"><?php echo $row->rt_rww; ?></div></td>
                                            <td><div align="center"><?php echo $row->provinsii; ?></div></td>
                                            <td><div align="center"><?php echo $row->kabupatenn; ?></div></td>
                                            <td><div align="center"><?php echo $row->kecamatann; ?></div></td>
                                            <td><div align="center"><?php echo $row->kelurahann; ?></div></td>
                                            <td><div align="center"><?php echo $row->kode_pos; ?></div></td>
                                            <td class="center"><div align="center">
                            <a href="<?php echo site_url('Pindahdomisili1/editdata/'.$row->id_tujuan)?>" type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a></div></td>
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

									 <!--footer section start-->
										<footer>
										   <p>© 2016 Informatic Engineering. All Rights Reserved. Created By Faisal Syarifuddin & Ayu Permata Sari</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a><span id="logo"> <h1>SIDRAP</h1></span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="<?php echo base_url('uploads/'.$this->session->userdata('FOTO'))?>"><img src="<?php echo base_url('uploads/'.$this->session->userdata('FOTO'))?>" width="150" height="150" alt="User profile picture"></a>
									  <a><span class=" name-caret"><h3 class="profile-username text-center"><?php echo $this->session->userdata('NAMA')?> </h3></span></a>
									  <p class="text-muted text-center"><?php echo $this->session->userdata('EMAIL')?></p>
									<ul>
									<li><a class="tooltips" href="<?php echo base_url()?>index.php/Data_User/profile"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="<?php echo base_url()?>index.php/user/logout"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
							</div>

							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                    <li><a href="<?php echo base_url()?>index.php/user"><i class="lnr lnr-apartment"></i> <span>Home</span></a></li>
                    <li><a href="<?php echo base_url()?>index.php/data_user"><i class="fa fa-file-text-o"></i> <span>Data Admin</span></a></li>
                    <li><a href="<?php echo base_url()?>index.php/Pindahdomisili"><i class="fa fa-pencil-square-o"></i> <span>Kelola Data Pindah Domisili</span></a></li>
                    <li id="menu-academico" ><a href=""><i class="fa fa-pencil-square-o"></i> <span>Kelola Akta</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                      <ul id="menu-academico-sub" >
                        <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>index.php/Aktakelahiran">Akta Kelahiran</a></li>
                        <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>index.php/Aktakematian">Akta Kematain</a></li>
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href=""><i class="fa fa-pencil-square-o"></i> <span>Kelola Berkas</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                      <ul id="menu-academico-sub" >
                        <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>index.php/Berkas">Berkas Kelahiran</a></li>
                        <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>index.php/Berkas1">Berkas Kematian</a></li>
                      </ul>
                    </li>
                  </ul>
                    </li>
                  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/vroom.css">
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/vroom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/CSSPlugin.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>
</body>
</html>