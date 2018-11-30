<!DOCTYPE HTML>
<html>
<head>
<title>Pelayanan kependudukan</title>
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
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
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
                      <li><a href="<?php echo base_url()?>index.php/Aktakelahiran">Akta Kelahiran</a></li>
                      <li class="active">Edit Data Akta</li>
                    </ol>
                     </div>
                     
<?php
 $message = $this->session->flashdata('notif');
    if($message){
        echo '<div class="alert alert-warning">' .$message. '</div>';
    }?>
                              
  <!--<script>
    window.print();
</script>-->

    <section class="content-header">
      <h3>Edit Data Akta Kelahiran</h3>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body pad table-responsive">
            <div  class="form-horizontal">

                                    <?php
                                            if(isset($data_kelahiran)){
                                                foreach($data_kelahiran as $row){
                                                  $id = $row->nik;
                                            ?>
          <?php echo form_open_multipart('Aktakelahiran/simpanedit/'.$id)?> 
                <br>
                    <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">NIK</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nik" name="nik" rows="2" cols="130,9" value="<?php echo $row->nik; ?>" readonly><?php echo $row->nik; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Ayah</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nmkpl" name="nmkpl" rows="2" cols="130,9" value="<?php echo $row->nm_kpl_keluarga; ?>" required><?php echo $row->nm_kpl_keluarga; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Ibu</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nmibu" name="nmibu" rows="2" cols="130,9" value="<?php echo $row->nama_ibu; ?>" required><?php echo $row->nama_ibu; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Lengkap</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nm" name="nm" rows="2" cols="130,9" value="<?php echo $row->nm_lengkap; ?>" required><?php echo $row->nm_lengkap; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Jenis Kelamin</h4>
                    </div>
                    <div class="box-body pad">
                      <input type="text" id="jk" value="<?php echo $row->jk; ?>" name="jk" required><br>
                      <input type="radio" id="jk" value="Laki - Laki" name="jk" ><label class="light">Laki - Laki</label><br>
                      <input type="radio" id="jk" value="Perempuan" name="jk" ><label class="light">Perempuan</label>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Tempat Dilahirkan</h4>
                    </div>
                    <div class="box-body pad">
                      <input type="text" id="ttl" value="<?php echo $row->tmpt_dilahirkan; ?>" name="ttl" required><br>
                      <input type="radio" id="ttl" value="Rumah Sakit" name="ttl" ><label class="light">Rumah Sakit</label><br>
                      <input type="radio" id="ttl" value="Puskesmas" name="ttl" ><label class="light">Puskesmas</label><br>
                      <input type="radio" id="ttl" value="Poliklinik" name="ttl" ><label class="light">Poliklinik</label><br>
                      <input type="radio" id="ttl" value="Rumah" name="ttl" ><label class="light">Rumah</label><br>
                      <input type="radio" id="ttl" value="Lainnya" name="ttl" ><label class="light">Lainnya</label>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Kabupaten</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="kab" name="kab" rows="2" cols="130,9" value="<?php echo $row->kabupaten; ?>" required><?php echo $row->kabupaten; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Tanggal Lahir</h4>
                    </div>
                    <div class="box-body pad">
                      <input id="tgl" name="tgl" value="<?php echo $row->tgl_lahir; ?>" class="form-control" type="date" rows="1" cols="73" placeholder="Tanggal Lahir" required></input>
                    </div>
                  </div>
                  </div>
                </div>
                                        
                  <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div align="center">
                      <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                  </div>
                  </div>
          <!-- /.box -->
        </div>
                  <?php }
                                             }
                                                ?>
</div>
</div>
</div>
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
          <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <span id="logo"> <h1>SIDRAP</h1></span> 
          <!--<img id="logo" src="" alt="Logo"/>--> 
          </a> 
        </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
      <!--/down-->
              <div class="down">  
                    <a href="<?php echo base_url('uploads/'.$this->session->userdata('FOTO'))?>"><img src="<?php echo base_url('uploads/'.$this->session->userdata('FOTO'))?>" width="150" height="150" alt="User profile picture"></a>
                    <a><span class=" name-caret"><h3 class="profile-username text-center"><?php echo $this->session->userdata('NAMA')?> </h3></span></a>
                    <p class="text-muted text-center"><?php echo $this->session->userdata('EMAIL')?></p>
                    <a href="<?php echo site_url('Data_User/edituser/'. $this->session->userdata('ID'))?>"><b>Edit User</b></a>
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
               $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
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