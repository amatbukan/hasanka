<title>.:: Laporan Gaji Hasanka ::.</title>
<link rel="shortcut icon" href="../assets/favicon.ico">
<link rel="stylesheet" href="../assets/tema/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"  type="text/css"  href="../assets/tema/vendor/dataTables.bootstrap4.min.css">
<style type="text/css">
   .upper { text-transform: uppercase; }
</style>
<?php
include "../config/koneksi.php";
	  $tahun = $_POST['tahun'];
	  $bulan = $_POST['bulan'];
$no=1;
$qO=mysql_query("SELECT * FROM gaji WHERE (YEAR(tgl_transfer)='$tahun') AND bulan_transfer='$bulan'");
$jU=mysql_num_rows($qO);
if($jU <= 0){
	echo $_SESSION['pesan_salah'] = 'Tidak Ada Data';
	header('location:printb');
}
while($rO=mysql_fetch_object($qO)) {
$jumlah = $rO->gaji_pokok;
?>
<br>
<strong><p align="center" class="upper">LAPORAN GAJI HASANKA<br>BULAN <?=$bulan;?> TAHUN <?=$tahun;?></p></strong>
<table align="center" class="table table-hover table-striped table-bordered" style="width:80%">
			<thead>
				<tr>
					<th class="text-center">No.</th>
					<th class="text-center">NIK</th>
					<th class="text-center">NAMA</th>
					<th class="text-center">GAJI POKOK</th>
					<th class="text-center">BULAN</th>
					<th class="text-center">TANGGAL TRANSFER</th>
				</tr>
			</thead>
			<tbody>		
				<tr>
					<td align="center"><?=$no;?></td>
					<td align="center"><?=$rO->nik;?></td>
					<td align="center"><?=$rO->nama;?></td>
					<td align="center"><?=rupiah($rO->gaji_pokok);?></td>
					<td align="center"><?=$rO->bulan_transfer;?></td>
					<td align="center"><?php echo tgl_indo($rO->tgl_transfer);?></td>
				</tr>
			<?php
			$no++;
			}
			?>			
			</tbody>
			<tr>
				<td rowspan="4" class="text-center"></td>
				<td class="text-center"></td>
				<th class="text-center">TOTAL</th>
				<th class="text-center"><?php echo rupiah($jumlah);?></th>
				<td class="text-center"></td>
				<td class="text-center"></td>
			</tr>
			</table>