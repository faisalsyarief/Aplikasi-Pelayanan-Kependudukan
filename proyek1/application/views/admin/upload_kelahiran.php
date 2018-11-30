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
      <div class="main-row"><li style="float:right"><a href="<?php echo base_url()?>index.php/Aktakelahiran/indexdaftar1">Kembali</a></li></div>
    </ul>

  <!-- main -->
  <div class="main">
    <h1>Upload Kelengkapan <br>Akta Kelahiran Online</h1>
    <div class="main-row"> 

<?php
                                            if(isset($data_berkas)){
                                                foreach($data_berkas as $row){
                                                  $id = $row->id_berkas;
                                            ?>
                  <?php }
                                             }
                                                ?>

          <?php echo form_open_multipart('Upload_Kelahiran/simpanedit1/'.$id)?>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                        <div class="form-group">
                                            <label>Surat Ket. Kelahiran</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Fotocopy KK</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Fotocopy Akta Nikah</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50">
                                        </div><br>
                                        <div class="form-group">
                                            <label>KTP</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Surat Ket. RT</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Surat Ket. RW</label>
                                            <input type="file" class="form-control" name="gambar[]" size="50" required>
                                        </div><br>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

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