<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print()">

<center>
<p style="text-align:center;"><img src="<?php echo base_url()?>/uploads/logo.jpg" width="100" height="100" style="float:left;" /><h2>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL <br>KABUPATEN SIDRAP</h2></p><br>


<?php foreach($cetak_berkasmati as $row) : 
$id_berkass=$row->id_berkass;
endforeach;
?>

<h3>Akta Kematian</h3>
<h3>Nomor Antri</h3>
<h1><?php print $id_berkass; ?></h1>

<?php foreach($cetak_kematian as $row) : 

$nik_kematian=$row->nik_kematian;
$nm_kepala=$row->nm_kepala;
$nm_ibu=$row->nm_ibu;
$nama_lengkap=$row->nama_lengkap;
$tgl_ambil=$row->tgl_ambil;
$statuss=$row->statuss;
endforeach;
?>
<table>
<tr>
<td>1. NIK </td>  <td> : </td>  <td> <?php print $nik_kematian; ?></td>
</tr>
<tr>
<td>2. Nama Ayah </td>  <td> : </td>  <td> <?php print $nm_kepala; ?></td>
</tr>
<tr>
<td>3. Nama Ibu </td>  <td> : </td>  <td> <?php print $nm_ibu; ?></td>
</tr>
<tr>
<td>4. Nama Lengkap </td>  <td> : </td>  <td> <?php print $nama_lengkap; ?></td>
</tr>
<tr>
<td>5. Tanggal Pengambilan </td>  <td> : </td>  <td> <?php print $tgl_ambil; ?></td>
</tr>
<tr>
<td>6. Status </td>  <td> : </td>  <td> <?php print $statuss; ?></td>
</tr>
<tr>
<td>7. Keterangan </td>  <td> : </td>  <td> Membawa Surat Pengantar / Keterangan RT Dan RW</td>
</tr>
</table>
</center>

</body>
</html>