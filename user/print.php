<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: SLIP GAJI HASANKA ::.</title>
<link rel="stylesheet" href="../assets/tema/css/style.default.css" type="text/css" />
<link rel="shortcut icon" href="../assets/favicon.ico">
</head>
<body class="body">
<div id="wrapper">
<?php
include "../config/koneksi.php";

$ambil=mysql_query("select * from gaji where id_gaji='$_GET[id_gaji]'");
	$t=mysql_fetch_object($ambil);
?>
<p style="border: none; padding: 0cm;"><strong><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma','sans-serif';">&nbsp;</span></strong></p>
<table style="border-collapse: collapse; border: none;">
<tbody>
<tr>
<td style="width: 462.1pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="616">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">SLIP GAJI</span></strong></p>
</td>
</tr>
</tbody>
</table>
<p style="border: none; padding: 0cm;"><strong><span style="font-size: 3.0pt; line-height: 107%; font-family: 'Tahoma','sans-serif';">&nbsp;</span></strong></p>
<table style="border-collapse: collapse; border: none;">
<tbody>
<tr>
<td style="width: 233.65pt; padding: 0cm 5.4pt 0cm 5.4pt;" rowspan="3" width="312">
<p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Hasanka Boarding School</span></strong></p>
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Jl. Seth Adji No. 50</span></p>
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Palangka Raya</span></p>
</td>
<td style="width: 92.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="123">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">NIK</span></p>
</td>
<td style="width: 14.35pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">:</span></p>
</td>
<td style="width: 110.85pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="148">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo $t->nik?></span></p>
</td>
</tr>
<tr>
<td style="width: 92.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="123">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Nama Karyawan</span></p>
</td>
<td style="width: 14.35pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">:</span></p>
</td>
<td style="width: 110.85pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="148">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo $t->nama?></span></p>
</td>
</tr>
<tr>
<td style="width: 92.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="123">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Tanggal Transfer</span></p>
</td>
<td style="width: 14.35pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">:</span></p>
</td>
<td style="width: 110.85pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="148">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo $t->tgl_transfer?></span></p>
</td>
</tr>
<!--<tr>
<td style="width: 233.65pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="312">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 92.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="123">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Jam Transfer</span></p>
</td>
<td style="width: 14.35pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">:</span></p>
</td>
<td style="width: 110.85pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="148">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo $t->jam_transfer?></span></p>
</td>
</tr>-->
</tbody>
</table>
<p style="border: none; padding: 0cm;"><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
<table style="width: 445.1pt; margin-left: 6.85pt; border-collapse: collapse; border: none;" width="593">
<tbody>
<tr>
<td style="width: 10.0cm; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="378">
<p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">PENERIMAAN</span></strong></p>
</td>
<td style="width: 42.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Gaji Pokok</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo rupiah($t->gaji_pokok);?></span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Tunjangan jabatan</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0</span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Tunjangan transportasi</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0 </span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Tunjangan BPJS</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0</span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Lembur</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0</span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Bonus / THR</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0 </span></p>
</td>
</tr>
<tr>
<td style="width: 21.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="28">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">-</span></p>
</td>
<td style="width: 262.25pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="350">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Penerimaan lainnya</span></p>
</td>
<td style="width: 42.55pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; border: none; border-bottom: solid windowtext 1.0pt; background: white; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">0</span></p>
</td>
</tr>
<tr>
<td style="width: 10.0cm; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="378">
<p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Total Penghasilan Bruto</span></strong></p>
</td>
<td style="width: 42.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="57">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 119.05pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="159">
<p style="margin-bottom: .0001pt; text-align: right; line-height: normal;"><strong><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo rupiah($t->gaji_pokok);?></span></strong></p>
</td>
</tr>
</tbody>
</table>
<p><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma','sans-serif';"></span></p>
<table style="border-collapse: collapse; border: none;">
<tbody>
<tr>
<td style="width: 150.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="200">
<p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 131.6pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="175">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 168.95pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="225">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Palangka Raya, <?php echo tgl_indo(date('Y-m-d'));?></span></p>
</td>
</tr>
<tr>
<td style="width: 150.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="200">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 131.6pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="175">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 168.95pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="225">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">Penerima</span></p>
</td>
</tr>
<tr style="height: 77.85pt;">
<td style="width: 150.25pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 77.85pt;" width="200">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;">&nbsp;</span></p>
</td>
<td style="width: 131.6pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 77.85pt;" width="175">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 168.95pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 77.85pt;" width="225">
<p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 10.0pt; font-family: 'Tahoma','sans-serif'; color: black;"><?php echo $t->nama;?></span></p>
</td>
</tr>
</tbody>
</table>
<p><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma','sans-serif';">&nbsp;</span></p>
</div>
</body>
</html>
