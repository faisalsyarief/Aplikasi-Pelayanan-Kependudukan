<!DOCTYPE html>
<html>
<head>
<title>Pelayanan Kependudukan</title>

<link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>

<body onload="window.print()">
<?php foreach($cetak_berkasmati as $row) : 

        $id_berkass=$row->id_berkass;
        endforeach;
        ?>    
<p style="text-align:center;"><img src="<?php echo base_url()?>/uploads/logo.jpg" width="100" height="100" style="float:left;" /><center><h2>Surat Pengantar Akta Kematian</h2><br><b>No : <?php print $id_berkass; ?>/KS/2016</b></center></p><br><br>


          <div align="center">
              <table id="example1" align="center" class="table table-bordered table-striped">
<thead>
            <tr>
              <th><div align="center">NIK</div></th>
              <th><div align="center">Nama Ayah</div></th>
              <th><div align="center">Nama Ibu</div></th>
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
        $nm_ibu=$row->nm_ibu;
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
                            <td><div align="center"><?php print $nm_ibu; ?></div></td>
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

<p>Demikian Surat Keterangan Akta Kematian ini dibuat untuk dapat dipergunakan sebelumnya.</p>
<p style="text-align:right;"><right>Sidenreng Rappang, ....................</right></p>
</body>
</html>