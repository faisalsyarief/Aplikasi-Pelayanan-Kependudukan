<!DOCTYPE html>
<html>
<head>
  <title>Pelayanan Kependudukan</title>

</head>
<body onload="window.print()">
<?php foreach($cetak_keluar as $row) :
$rt_rwasal=$row->rt_rw;
$kabupatenasal=$row->kabupaten;
$kecematanasal=$row->kecematan;
endforeach;
?>


<?php foreach($cetak_tujuan as $row) : 
$id_tujuan=$row->id_tujuan;
endforeach;
?>

<p style="text-align:center;"><img src="<?php echo base_url()?>/uploads/logo.jpg" width="100" height="100" style="float:left;" /><center><h2>Surat Pengantar Pindah Domisili</h2><br><b>No : <?php print $id_tujuan; ?>/RT/RW/<?php print $rt_rwasal; ?>/KS/2016</b></center></p><br>

<p><justify>
	Yang bertanda tangan dibawah ini, Ketua RT/RW <?php print $rt_rwasal; ?> <?php print $kecematanasal; ?> <?php print $kabupatenasal; ?>, dengan ini menerangkan bahwa :
</p></justify>

<h3>Daerah Asal</h3>
<?php foreach($cetak_keluar as $row) : 

$nikasal=$row->nik_pindah;
$nm_kpl_keluargaasal=$row->nm_kpl_keluarga;
$nm_lengkapasal=$row->nm_lengkap;
$alamatasal=$row->alamat;
$rt_rwasal=$row->rt_rw;
$propinsiasal=$row->propinsi;
$kabupatenasal=$row->kabupaten;
$kecematanasal=$row->kecematan;
$kelurahanasal=$row->kelurahan;
$kd_posasal=$row->kd_pos;
$telpasal=$row->telp;
endforeach;
?>
<table>
<tr>
<td>1. NIK </td>  <td> : </td>  <td> <?php print $nikasal; ?></td>
</tr>
<tr>
<td>2. Nama Kepala Keluarga </td>  <td> : </td>  <td> <?php print $nm_kpl_keluargaasal; ?></td>
</tr>
<tr>
<td>3. Nama Lengkap </td>  <td> : </td>  <td> <?php print $nm_lengkapasal; ?></td>
</tr>
<tr>
<td>4. Alamat Asal </td>  <td> : </td>  <td> <?php print $alamatasal; ?></td>
</tr>
<tr>
<td>5. RT / RW Asal </td>  <td> : </td>  <td> <?php print $rt_rwasal; ?></td>
</tr>
<tr>
<td>6. Provinsi Asal </td>  <td> : </td>  <td> <?php print $propinsiasal; ?></td>
</tr>
<tr>
<td>7. Kabupaten Asal </td>  <td> : </td>  <td> <?php print $kabupatenasal; ?></td>
</tr>
<tr>
<td>8. Kecematan Asal </td>  <td> : </td>  <td> <?php print $kecematanasal; ?></td>
</tr>
<tr>
<td>9. Kelurahan Asal </td>  <td> : </td>  <td> <?php print $kelurahanasal; ?></td>
</tr>
<tr>
<td>10. Kode POS Asal </td>  <td> : </td>  <td> <?php print $kd_posasal; ?></td>
</tr>
<tr>
<td>11. Telp </td>  <td> : </td>  <td> <?php print $telpasal; ?></td>
</tr>
</table><br>



<h3>Daerah Tujuan</h3>
<?php foreach($cetak_tujuan as $row) : 

$alamatt=$row->almt_tjuan;
$rt_rwt=$row->rt_rww;
$propinsit=$row->provinsii;
$kabupatent=$row->kabupatenn;
$kecematant=$row->kecamatann;
$kelurahant=$row->kelurahann;
$kd_post=$row->kode_pos;
endforeach;
?>
<table>
<tr>
<td>1. Alamat Tujuan </td>  <td> : </td>  <td> <?php print $alamatt; ?></td>
</tr>
<tr>
<td>2. RT / RW Tujuan </td>  <td> : </td>  <td> <?php print $rt_rwt; ?></td>
</tr>
<tr>
<td>3. Provinsi Asal </td>  <td> : </td>  <td> <?php print $propinsit; ?></td>
</tr>
<tr>
<td>4. Kabupaten Asal </td>  <td> : </td>  <td> <?php print $kabupatent; ?></td>
</tr>
<tr>
<td>5. Kecematan Asal </td>  <td> : </td>  <td> <?php print $kecematant; ?></td>
</tr>
<tr>
<td>6. Kelurahan Asal </td>  <td> : </td>  <td> <?php print $kelurahant; ?></td>
</tr>
<tr>
<td>7. Kode POS Asal </td>  <td> : </td>  <td> <?php print $kd_post; ?></td>
</tr>
</table>
<p>Demikian Surat Keterangan Pindah ini dibuat untuk dapat dipergunakan sebelumnya.</p>
<p style="text-align:right;"><right>Sidenreng Rappang,</right></p>
</body>
</html>