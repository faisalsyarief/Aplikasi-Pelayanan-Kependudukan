<!DOCTYPE html>
<html>
<head>
<title>Pelayanan Kependudukan</title>

<link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>

<body onload="window.print()">
<?php foreach($cetak_berkaslahir as $row) : 

        $id_berkas=$row->id_berkas;
        endforeach;
        ?>    
<p style="text-align:center;"><img src="<?php echo base_url()?>/uploads/logo.jpg" width="100" height="100" style="float:left;" /><center><h2>Surat Pengantar Akta Kelahiran</h2><br><b>No : <?php print $id_berkas; ?>/KS/2016</b></center></p><br><br>

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
              <th><div align="center">Surat Ket. RW</div></th><br><br>
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

<p>Demikian Surat Keterangan Akta Kelahiran ini dibuat untuk dapat dipergunakan sebelumnya.</p>
<p style="text-align:right;"><right>Sidenreng Rappang, ....................</right></p>
</body>
</html>