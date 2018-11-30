<!DOCTYPE html>
<html>
<head>
  <title>Pelayanan Kependudukan</title>
</head>
<body onload="window.print()">
<center>
<p style="text-align:center;"><img src="<?php echo base_url()?>/uploads/logo.jpg" width="100" height="100" style="float:left;" /><h2>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL <br>KABUPATEN SIDRAP</h2></p><br>

<?php foreach($cetak_berkaslahir as $row) : 
$id_berkas=$row->id_berkas;
endforeach;
?>

<h3>Akta Kelahiran</h3>
<h3>Nomor Antri</h3>
<h1><?php print $id_berkas; ?></h1>

<?php foreach($cetak_kelahiran as $row) : 

$nik=$row->nik;
$nm_kpl_keluarga=$row->nm_kpl_keluarga;
$nama_ibu=$row->nama_ibu;
$nm_lengkap=$row->nm_lengkap;
$tgl_ambil=$row->tgl_ambil;
$status=$row->status;
endforeach;
?>
<table>
<tr>
<td>1. NIK </td>  <td> : </td>  <td> <?php print $nik; ?></td>
</tr>
<tr>
<td>2. Nama Ayah </td>  <td> : </td>  <td> <?php print $nm_kpl_keluarga; ?></td>
</tr>
<tr>
<td>3. Nama Ibu </td>  <td> : </td>  <td> <?php print $nama_ibu; ?></td>
</tr>
<tr>
<td>4. Nama Lengkap </td>  <td> : </td>  <td> <?php print $nm_lengkap; ?></td>
</tr>
<tr>
<td>5. Tanggal Pengambilan </td>  <td> : </td>  <td> <?php print $tgl_ambil; ?></td>
</tr>
<tr>
<td>6. Status </td>  <td> : </td>  <td> <?php print $status; ?></td>
</tr>
<tr>
<td>7. Keterangan </td>  <td> : </td>  <td> Membawa Surat Pengantar / Keterangan RT Dan RW</td>
</tr>
</table>
</center>
</body>
</html>